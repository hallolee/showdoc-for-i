<?php

namespace Showdoc;

/*
获取json格式数据
*/
function RXJson(){
    $raw  = file_get_contents('php://input');
    $raw = json_decode($raw,true);

    return $raw;
}


/*
生成token文件，返回tokenid
*/
function GenDaTokenFile( $d=[], $module=MODULE_NAME )
{
    $prefixed = C( 'TOKEN_PREFIXED' );

    $app_number = C('APP_NUMBER');
    $app = array_search($module,$app_number); 
    if( !$app ) return false;

    $now = GetMicroTime();
    $sign = md5( $now.rand(1000,9999) );
    $name = $app.$sign;

    $dir = C( 'TOKEN_PATH' ).$module.'/';
    $file = $dir.$prefixed.$name;

    $p = [
        'file'      => [
            'btime'     => time(),
            'etime'     => time()+C('DATOKEN_EXPIRE'),
        ],
        'data'      => $d,
    ];

    if ( !is_dir( $dir )) @mkdir( $dir, 0777, ture );
    if(!file_exists($file)) touch($file);
    if( $p ) file_put_contents($file,json_encode( $p ));

    $token = $name;
    return $token;
}

/*
* @ $verify 检查token所在模块与当前模块 TOKEN_FULLCHECK 全查 ，NO_CHECK 不查
取出token文件
*/
function ValidDaTokenFile( $token, &$out='', $verify=TOKEN_FULLCHECK, $module=MODULE_NAME )
{
    $prefixed = C( 'TOKEN_PREFIXED' );
    $key = substr($token, 0,3);

    $app_number = C('APP_NUMBER');
    $token_module = $app_number[ $key ];

    if( $verify == TOKEN_NOCHECK )
    {
        $module = $token_module;
    }else if( !$token_module || $token_module != $module ){
        return false;
    }

    $dir = C( 'TOKEN_PATH' ).$module.'/';
    $file = $dir.$prefixed.$token;

    $token_body = json_decode( file_get_contents( $file ), true );

    if( $token_body['file']['etime'] < time() ){
        unlink($file);
        return false;
    }

    $out = $token_body['data'];
    return true;
}


/*
* @ $d 存储数据
* @ $token 文件标识
* @ $write 写入方式 TOKEN_APPEND 追加，TOKEN_COVER 覆盖
* @ $verify 检查token所在模块与当前模块 TOKEN_FULLCHECK 全查 ，NO_CHECK 不查
*取出token文件,写入文件
*/
function ValidDaTokenWrite($d = [], $token, $write=TOKEN_COVER, $verify=TOKEN_FULLCHECK, $module=MODULE_NAME )
{
    $prefixed = C( 'TOKEN_PREFIXED' );
    $key = substr($token, 0,3);

    $app_number = C('APP_NUMBER');
    $token_module = $app_number[ $key ]; 

    if( $verify == TOKEN_NOCHECK )
    {
        $module = $token_module;
    }else if( !$token_module || $token_module != $module ){
        return false;
    }

    $dir = C( 'TOKEN_PATH' ).$module.'/';
    $file = $dir.$prefixed.$token;

    $token_body = json_decode( file_get_contents( $file ), true );

    if( $token_body['file']['etime'] < time() ){
        unlink($file);
        return false;
    }

    if( $write == TOKEN_COVER ){
        $token_body['data'] = $d;
    }else if( $write == TOKEN_APPEND ){
        $token_body['data'] = array_merge($token_body['data'],$d);
    }

    $state = file_put_contents( $file, json_encode( $token_body ) );

    if ( !$state ) {
        return false;
    }
    return true;
}

function getOpenid( $code='',$doing=true ){
    $ret = '';
    if( !$code ) return $ret;

    S( ['type'=>'memcached'] );
    $old_code = S('wechat_code');
    if( $old_code != $code || $doing === true ){

        $m_wechat_conf = GetWechatTuples();

        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$m_wechat_conf['app_id']."&secret=".$m_wechat_conf['app_secret']."&code=".$code."&grant_type=authorization_code";
        $result_str = url_get($url);
        $re_array = json_decode($result_str,true);

        if( !isset($re_array['openid']) )
        {
            Dexp( __FUNCTION__, $re_array );
            return $ret;
        }

        $ret = $re_array[ 'openid' ];

        S( 'wechat_code', $code );
        S( $code, $re_array[ 'openid' ] );
    }else{
        $ret = S($code);
    }
    return $ret;
}



/*
* Get wechat config params in url mode
*/
function GetWechatConfFromUrlByName( $public_name )
{
    $ret = [];
    if( !$public_name ) goto END;

    $url = C( 'WXCONF_URL' );
    $d = [
        'name' => $public_name,
    ];
    $d = json_encode( $d, JSON_UNESCAPED_UNICODE );
    $z = post( $url, $d );
    $z = json_decode( $z, true );

    if( !$z || !isset($z['access_token']) || !$z['access_token'] )
    {
        Dexp( __FUNCTION__, $z );
        goto END;
    }
    $ret = $z;

END:
    return $ret;
}


/*
* Get wechat 4 tuples in either way
*/
function GetWechatTuples( $conf_name='WECHAT_TUPLE_FILE' )
{
    $ret = '';
    $atfile = C( $conf_name );
    if( !$atfile )
    {
        Dmsg( __FUNCTION__, "Token file '$atfile' not exist!" );
        goto END;
    }

    if( $atfile[0] == '!' )
    {
        // url mode
        $public_name = substr( $atfile, 1 );
        $z = GetWechatConfFromUrlByName( $public_name );

        if( !$z ) goto END;
        $ret = [
            'app_id'     => $z[ 'appid' ],
            'app_secret' => $z[ 'appsecret' ],
            'mch_id'     => $z[ 'mchid' ],
            'mch_secret' => $z[ 'mchsecret' ],
        ];

        goto END;
    }

    // file mode as default
    if( !file_exists($atfile) )
    {
        Dmsg( __FUNCTION__, "Token file '$atfile' not exist!" );
        goto END;
    }
    $ret = file_get_contents( $atfile );

END:
    return $ret;
}

/*
* Get wechat access token & js ticket in either way
*/
function GetWechatTT( $conf_name='WECHAT_ACCESSTOKEN_FILE' )
{
    $ret = '';
    $atfile = C( $conf_name );
    if( !$atfile )
    {
        Dmsg( __FUNCTION__, "Token file '$atfile' not exist!" );
        goto END;
    }

    if( $atfile[0] == '!' )
    {
        // url mode
        $public_name = substr( $atfile, 1 );
        $z = GetWechatConfFromUrlByName( $public_name );

        if( !$z ) goto END;
        $ret = [
            'access_token' => $z[ 'access_token' ],
            'js_ticket'    => $z[ 'js_ticket' ],
        ];

        goto END;
    }

    // file mode as default
    if( !file_exists($atfile) )
    {
        Dmsg( __FUNCTION__, "Token file '$atfile' not exist!" );
        goto END;
    }
    $ret = file_get_contents( $atfile );

END:
    return $ret;
}

/*
* Get wechat access token in either way
*/
function GetWechatAccessToken( $conf_name='WECHAT_ACCESSTOKEN_FILE' )
{
    $ret = '';
    $atfile = C( $conf_name );
    if( !$atfile )
    {
        Dmsg( __FUNCTION__, "Token file '$atfile' not exist!" );
        goto END;
    }

    if( $atfile[0] == '!' )
    {
        // url mode
        $public_name = substr( $atfile, 1 );
        $z = GetWechatConfFromUrlByName( $public_name );

        if( !$z ) goto END;
        $ret = $z[ 'access_token' ];

        goto END;
    }

    // file mode as default
    if( !file_exists($atfile) )
    {
        Dmsg( __FUNCTION__, "Token file '$atfile' not exist!" );
        goto END;
    }
    $ret = file_get_contents( $atfile );

END:
    return $ret;
}

/*
* Get wechat js ticket in either way
*/
function GetWechatJsTicket( $conf_name='WECHAT_ACCESSTOKEN_FILE' )
{
    $ret = '';
    $atfile = C( $conf_name );
    if( !$atfile )
    {
        Dmsg( __FUNCTION__, "Token file '$atfile' not exist!" );
        goto END;
    }

    if( $atfile[0] == '!' )
    {
        // url mode
        $public_name = substr( $atfile, 1 );
        $z = GetWechatConfFromUrlByName( $public_name );

        if( !$z ) goto END;
        $ret = $z[ 'js_ticket' ];

        goto END;
    }

    // file mode as default
    if( !file_exists($atfile) )
    {
        Dmsg( __FUNCTION__, "Token file '$atfile' not exist!" );
        goto END;
    }
    $ret = file_get_contents( $atfile );

END:
    return $ret;
}


/*
 * Create necessary config params for using wechat js api.
 * In either way, all from url or all from local
 */
function GetWechatJsApiConf( $url, $conf_name='WECHAT_ACCESSTOKEN_FILE' )
{
    $ret = [];

    if( !$url ) goto END;

    $atfile = C( $conf_name );
    if( !$atfile )
    {
        Dmsg( __FUNCTION__, "Token file '$atfile' not exist!" );
        goto END;
    }

    if( $atfile[0] == '!' )
    {
        // url mode
        $public_name = substr( $atfile, 1 );
        $z = GetWechatConfFromUrlByName( $public_name );
        if( !$z ) goto END;
        Dexp( __FUNCTION__, $z );

        $timestamp = time();
        $noncestr  = CreateNonceStr();
        $ticket    = $z[ 'js_ticket' ];

        // 这里参数的顺序要按照 key 值 ASCII 码升序排序
        $string = "jsapi_ticket=$ticket&noncestr=$noncestr&timestamp=$timestamp&url=$url";
        $signature = sha1( $string );

        $ret = [
            'app_id'    => $z[ 'appid' ],
            'timestamp' => $timestamp,
            'nonceStr'  => $noncestr,
            'signature' => $signature,
        ];

        goto END;
    }

    // file mode as default
    if( !file_exists($atfile) )
    {
        Dmsg( __FUNCTION__, "Token file '$atfile' not exist!" );
        goto END;
    }
    $ret = file_get_contents( $atfile );

END:
    return $ret;
}


/*
*
*/
function GetWechatApi( $url, $data, $conf_name='WECHAT_ACCESSTOKEN_FILE' )
{
    $ret = [];

    $token = GetWechatAccessToken( $conf_name );
    if( !$token ) goto END;
    $url = C( 'WECHAT_API_URL' )."$url?access_token=$token";
    $d = json_encode( $data, JSON_UNESCAPED_UNICODE );
    $z = post( $url, $d );
    $z = json_decode( $z, true );

    if( isset($z['errcode']) && isset($z['errmsg']) )
    {
        Dmsg( __FUNCTION__, "Get url '$url' failure!" );
        Dexp( __FUNCTION__, $z );
        goto END;
    }
    $ret = $z;

END:
    return $ret;
}



// Create a random string with the length of input param
function CreateNonceStr( $length = 16 )
{
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $str = '';
    for( $i = 0; $i < $length; $i++ )
    {
        $str .= substr( $chars, mt_rand(0, strlen($chars)-1), 1 );
    }

    return $str;
}

/*
*获取毫秒级时间戳
*/
function GetMicroTime()
{
    $micro = microtime( true );
    return floor( $micro * 1000 );
}

/*
*发送微信公共方法
*/
function SendWeChatSms( $d ){

    $url = C('SMS_API');
    $d = json_encode($d);
    $result = json_decode(post($url,$d),true);

    return $result;
}

/*
*新版发送微信公共方法
*/
function NewSendWeChatSms( $d ){

    $url = C('NEW_SMS_API');
    $d = json_encode($d);
    $result = json_decode(post($url,$d),true);

    return $result;
}


/*
*@raw  输出上一次查询的语句
*/
function sql(){
    echo M()->GetLastSql().'<br>';
    die();
}


/*
@公共上传
*/
function _Upload( $module='', $path='', $conf='' ){                              //公共上传方法
    $module = $module == "" ? 'file' : $module; //未知模块将存入file文件夹

    if (!is_dir($path)) @mkdir( $path, 0775, true );
    import("ORG.Net.UploadFile");
    $upload = new \Think\Upload();
    $upload->rootPath = $path;
    $upload->maxSize = 9145728;
    $upload->autoSub  = false;           //是否创建时间子目录
    $upload->allowExts = $conf['types'];
    if(!empty($conf['pre'])){
        $upload->saveName = array('uniqid',$conf['pre']);       //图片名前缀
    }
    $upload->savePath = '';
    $upload->uploadReplace = true;

    $res = $upload->upload();

    if (!$res) {
        Dmsg( __FUNCTION__, $upload->getError() );

        $info = array(
            "status" => E_UPLOAD,
            "msg" => $upload->getError()
        );
        return $info;
    } else {

        foreach ($res as $value) {
            $value['savepath'] = $path.$value['savepath'];
            $cache[] = $value;
        }

        $info['file'] = $cache;
        $info['status'] = E_OK;

        return $info;
    }
}

/*
@生成缩略图
*/
function _Thumb( $file_path='', $file_name='', $width='150', $height='150' ){ //生成缩略图的公共方法

    $image = new \Think\Image();
    $image->open($file_path);

    $name = str_replace( strstr($file_name, '.') ,"" ,$file_name );
    $path = str_replace($file_name,"",$file_path);

    $type = substr(strrchr($file_name, '.'), 1);
    $new_name = $name."_thumb.".$type;

    // 生成150*150的缩略图并保存为thumb.jpg
    $res = $image->thumb($width,$height)->save("$path/".$new_name);

    if (!$res) {
        Dmsg( __FUNCTION__, $upload->getError() );

        $info = array(
            "status" => E_UPLOAD,
            "msg" => $upload->getError()
        );
        return $info;
    } else {

        $info['path'] = "$path/".$new_name;
        $info[ 'savename' ] = $new_name;
        $info['status'] = E_OK;

        return $info;
    }
}


function LogFile( $msg, $path='',$mkdir=false ){

    if( !$path )  $path = C('ERRLOG_PATH').'/err.log';

    if( $mkdir !== false ){

        $dir = dirname($path);

        if( !is_dir( $dir ) )  $z = mkdir($dir,0775,true);
    }

    $msg = "[ ".date('Y/m/d H:i:s')." ]: ".$msg."\r\n\r\n";

    error_log( $msg, 3, $path );
}

/**
 * 获取身份证号信息
 * @param $IDCard
 * @return array
 */
function GetIDCardInfo($IDCard)
{
    $ret = [];
    if(empty($IDCard))
        goto END;
    if (strlen($IDCard) == 18)
    {
        $sex=intval(substr($IDCard,16,1));
        $ret['birth_year'] = substr($IDCard, 6, 4);
        $ret['birth_month'] = substr($IDCard, 10, 2);
        $ret['birth_day'] = substr($IDCard, 12, 2);
    } else {
        $sex = intval(substr($IDCard, 14, 1));
        $ret['birth_year'] = '19' .substr($IDCard, 6, 2);
        $ret['birth_month'] = substr($IDCard, 8, 2);
        $ret['birth_day'] = substr($IDCard, 10, 2);
    }

    $ret['sex'] = ($sex%2)?0:1;
    END:

    return $ret;
}

/**
 * 验证身份证号码
 * @param $idcard
 * @return bool
 */

function CheckIDCard($idcard){

    $vCity = array(
        '11','12','13','14','15','21','22',
        '23','31','32','33','34','35','36',
        '37','41','42','43','44','45','46',
        '50','51','52','53','54','61','62',
        '63','64','65','71','81','82','91'
    );

    if (!preg_match('/^([\d]{17}[xX\d]|[\d]{15})$/', $idcard)) return false;
    if (!in_array(substr($idcard, 0, 2), $vCity)) return false;

    if(strlen($idcard) == 18){

        // 取出本体码
        $idcard_base = substr($idcard, 0, 17);
        // 取出校验码
        $verify_code = substr($idcard, 17, 1);
        // 加权因子
        $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
        // 校验码对应值
        $verify_code_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
        // 根据前17位计算校验码
        $total = 0;
        for($i=0; $i<17; $i++){
            $total += substr($idcard_base, $i, 1)*$factor[$i];
        }
        // 取模
        $mod = $total % 11;
        // 比较校验码
        if($verify_code == $verify_code_list[$mod]){
            return true;
        }else{
            return false;
        }
    }

}


/**
 * 计算年龄
 * @param $year,$month,$day
 * @return int
 */
function getUserAge($year,$month,$day)
{
    if( !$year )
        return 0;
    $birthday=$year."-".$month.'-'.$day;
    $userAge = date('Y', time()) - date('Y', strtotime($birthday)) - 1;//年龄
    if (date('m', time()) == date('m', strtotime($birthday))){
        if (date('d', time()) > date('d', strtotime($birthday))){
            $userAge++;
        }
    }elseif (date('m', time()) > date('m', strtotime($birthday))){
        $userAge++;
    }
    return $userAge;
}


/**
 * 生成对应状态提示
 * @param $errcode,$ret
 * @return $ret
 */
function GenStatusStr( $errcode, &$ret )
{
    $errstrArr = C('ERRSTR');
    $errstr = isset( $errstrArr[ $errcode ] )?$errstrArr[ $errcode ]:'No desc';

    $ret['status'] = $errcode;
    $ret['errstr'] = $errstr;

    return true;
}



/**
 * 生成对应状态提示
 * @param $refer(array), $uid(int), $utype(int), $num(int)
 * @return $ret
 */
function GetUpline( $uid='', $utype=B_CLIENT, &$info=[], $num=1 ) {

    if( $num > 3 )
        return true;

    if( $uid ){
        $refer = M( TREFER )->where( ['uid' => $uid, 'utype' => $utype] )->find();

        $upline = $refer['upline'];
        $upline_type = $refer['upline_type'];

        $info[ $num ] = [
            'uid'       => $upline,
            'utype'     => $upline_type
        ];

    }else{
        $upline = $upline_type = 0;
        $info[ $num ] = [];

    }
    $num++;

    GetUpline( $upline, $upline_type, $info, $num );

}