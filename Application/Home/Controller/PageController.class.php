<?php
namespace Home\Controller;
use Think\Controller;
class PageController extends BaseController
{
    //展示某个项目的单个页面
    public function index()
    {
        import("Vendor.Parsedown.Parsedown");
        $page_id = I("page_id/d");
        $page = D("Page")->where(" page_id = '$page_id' ")->find();
        $login_user = $this->checkLogin(false);
        if (!$this->checkItemVisit($login_user['uid'], $page['item_id'])) {
            $this->message(L('no_permissions'));
            return;
        }

        $ItemPermn = $this->checkItemPermn($login_user['uid'], $page['item_id']);
        $ItemCreator = $this->checkItemCreator($login_user['uid'], $page['item_id']);
        $page['page_md_content'] = $page['page_content'];

        //$Parsedown = new \Parsedown();
        //$page['page_content'] = $Parsedown->text(htmlspecialchars_decode($page['page_content']));
        $this->assign("page", $page);
        $this->display();
    }

    //展示单个页面
    public function single()
    {
        import("Vendor.Parsedown.Parsedown");
        $page_id = I("page_id/d");
        $page = D("Page")->where(" page_id = '$page_id' ")->find();
        $login_user = $this->checkLogin(false);
        if (!$this->checkItemVisit($login_user['uid'], $page['item_id'], $_SERVER['REQUEST_URI'])) {
            $this->message(L('no_permissions'));
            return;
        }

        $ItemPermn = $this->checkItemPermn($login_user['uid'], $page['item_id']);
        $ItemCreator = $this->checkItemCreator($login_user['uid'], $page['item_id']);

        $page['page_md_content'] = $page['page_content'];
        //$page['page_html_content'] = $Parsedown->text(htmlspecialchars_decode($page['page_content']));
        $this->assign("page", $page);
        $this->assign("login_user", $login_user);
        $this->display();
    }

    //返回单个页面的源markdown代码
    public function md()
    {
        $page_id = I("page_id/d");
        $page = D("Page")->where(" page_id = '$page_id' ")->find();
        echo $page['page_content'];
    }

    //编辑页面
    public function edit()
    {

        $login_user = $this->checkLogin();
        $page_id = I("page_id/d");
        $item_id = I("item_id/d");

        $page_history_id = I("page_history_id/d");
        $copy_page_id = I("copy_page_id/d");

        if ($page_id > 0) {
            if ($page_history_id) {
                $page = D("PageHistory")->where(" page_history_id = '$page_history_id' ")->find();
                $page_content = gzuncompress(base64_decode($page['page_content']));
                $page['page_content'] = $page_content ? $page_content : $page['page_content'];
            } else {
                $page = D("Page")->where(" page_id = '$page_id' ")->find();
            }
            $default_cat_id = $page['cat_id'];
        } //如果是复制接口
        elseif ($copy_page_id) {
            $copy_page = D("Page")->where(" page_id = '$copy_page_id' ")->find();
            $page['page_title'] = $copy_page['page_title'] . "-copy";
            $page['page_content'] = $copy_page['page_content'];
            $page['item_id'] = $copy_page['item_id'];
            $default_cat_id = $copy_page['cat_id'];

        } else {
            //查找用户上一次设置的目录
            $last_page = D("Page")->where(" author_uid ='$login_user[uid]' and $item_id = '$item_id' ")->order(" addtime desc ")->limit(1)->find();
            $default_cat_id = $last_page['cat_id'];


        }

        $item_id = $page['item_id'] ? $page['item_id'] : $item_id;


        if (!$this->checkItemPermn($login_user['uid'], $item_id)) {
            $this->message(L('no_permissions'));
            return;
        }

        $Catalog = D("Catalog")->where(" cat_id = '$default_cat_id' ")->find();
        if ($Catalog['parent_cat_id']) {
            $default_second_cat_id = $Catalog['parent_cat_id'];
            $default_child_cat_id = $default_cat_id;

        } else {
            $default_second_cat_id = $default_cat_id;
        }
        $this->assign("api_doc_templ", 'MdTemplate/api-doc.' . LANG_SET);
        $this->assign("database_doc_templ", 'MdTemplate/database.' . LANG_SET);
        $this->assign("page", $page);
        $this->assign("item_id", $item_id);
        $this->assign("default_second_cat_id", $default_second_cat_id);
        $this->assign("default_child_cat_id", $default_child_cat_id);


        $this->display();
    }

    //保存
    public function save()
    {
        $page_id    = I("page_id/d") ? I("page_id/d") : 0;
        $page_title = I("page_title") ? I("page_title") : L("default_title");
        $page_comments = I("page_comments") ? I("page_comments") : '';
        $page_content = I("page_content");
        $cat_id = I("cat_id/d") ? I("cat_id/d") : 0;
        $item_id = I("item_id/d") ? I("item_id/d") : 0;
        $s_number = I("s_number/d") ? I("s_number/d") : 99;

   /*     $login_user = $this->checkLogin();
        if (!$this->checkItemPermn($login_user['uid'] , $item_id)) {
            $this->message(L('no_permissions'));
            return;
        }*/
//        var_dump($page_content);die;

        $page_content11 = $page_content;
        $is_json = explode('&lt;!--',$page_content);

        $name_check = true;
        $check_name = explode('* 说明',$page_content);
        $check_name = explode('####',$check_name[0]);
        if(!isset($check_name[1]))
            $name_check = false;
        $check_name = $check_name[1];
        $url_name = explode('* 参数:',$page_content);
        if($url_name[1]){
            $url_name = explode('/',$url_name[0]);
            if(!isset($url_name[1]))
                $name_check = false;
            $url_name = end($url_name);

        }else{
            $url_name = explode('&lt;!--',$page_content);
            $url_name = explode('/',$url_name[0]);
            if(!isset($url_name[1]))
                $name_check = false;
            $url_name = end($url_name);
        }

        $url_name_page_content = explode('!--',$page_content11);
        $name_spec_check = explode('参数',$url_name_page_content[0]);

        if($name_spec_check[1])
            $name_check = false;

//        var_dump($name_spec_check[1]);
//        var_dump($name_check);die;


        if($is_json[1]){
            $page_content = explode('-->', htmlspecialchars_decode($page_content));
            $page_content = $page_content[0] . '-->';
            $da = htmlspecialchars_decode($page_content);
            $table = $this->getHidden($da);

            if ($table) {
            if($table[0] == null){
                $static = ["\n\n" . "" . "\n\n", "\n" . "" . "\n\n", "\n" . "* 返回" . "\n\n", "\n" . "* 返回示例" . "\n\n"];
            }else{
                $static = ["\n\n" . "* 参数" . "\n\n", "\n" . "* 参数示例" . "\n\n", "\n" . "* 返回" . "\n\n", "\n" . "* 返回示例" . "\n\n"];

            }
            $i = 0;
            if ($table)
                foreach ($table as $k => $v) {
                    $page_content .= $static[$k] . $v;
                    $i++;
                }
            $page_content .= $static[4];
        }else{
            $page_content .= "\n".'#请检查json格式#';
        }
        if($name_check){
            if(trim($url_name) != trim($check_name)){
                $page_content1 = explode('-->', htmlspecialchars_decode($page_content));
                $page_content = $page_content1[0].'-->'. "\n".'#请检查Api name#';
            }
        }
    }
        $data['page_title'] = $page_title;
        $data['page_comments'] = $page_comments;
        $data['page_content'] = $page_content;
        $data['s_number'] = $s_number;
        $data['item_id'] = $item_id;
        $data['cat_id'] = $cat_id;
        $data['addtime'] = time();
        $data['author_uid'] = $login_user['uid'];
        $data['author_username'] = $login_user['username'];
        if ($page_id > 0) {

            //在保存前先把当前页面的版本存档
            $page = D("Page")->where(" page_id = '$page_id' ")->find();
            $insert_history = array(
                'page_id' => $page['page_id'],
                'item_id' => $page['item_id'],
                'cat_id' => $page['cat_id'],
                'page_title' => $page['page_title'],
                'page_comments' => $page['page_comments'],
                'page_content' => base64_encode(gzcompress($page['page_content'], 9)),
//                'page_content'=>base64_encode( gzcompress($page['page_content'], 9)),
                's_number' => $page['s_number'],
                'addtime' => $page['addtime'],
                'author_uid' => $page['author_uid'],
                'author_username' => $page['author_username'],
            );


            $ret = D("Page")->where(" page_id = '$page_id' ")->save($data);
            $data['page_id'] = $page_id;
            if($data['page_comments'])
                D("PageHistory")->add($data);

            //统计该page_id有多少历史版本了
            $Count = D("PageHistory")->where(" page_id = '$page_id' ")->Count();
            if ($Count > 20) {
                //每个单页面只保留最多20个历史版本
                $ret = D("PageHistory")->where(" page_id = '$page_id' ")->limit("20")->order("page_history_id desc")->select();
                D("PageHistory")->where(" page_id = '$page_id' and page_history_id < " . $ret[19]['page_history_id'])->delete();
            }

            //如果是单页项目，则将页面标题设置为项目名
            $item_array = D("Item")->where(" item_id = '$item_id' ")->find();
            if ($item_array['item_type'] == 2) {
                D("Item")->where(" item_id = '$item_id' ")->save(array("last_update_time" => time(), "item_name" => $page_title));
            } else {
                D("Item")->where(" item_id = '$item_id' ")->save(array("last_update_time" => time()));
            }

            $return = D("Page")->where(" page_id = '$page_id' ")->find();
        } else {

            $page_id = D("Page")->add($data);
            if($data['page_comments']){
                $data['page_id'] = $page_id;
                D("PageHistory")->add($data);
            }


            //更新项目时间
            D("Item")->where(" item_id = '$item_id' ")->save(array("last_update_time" => time()));

            $return = D("Page")->where(" page_id = '$page_id' ")->find();
        }
        if (!$return) {
            $return['error_code'] = 10103;
            $return['error_message'] = 'request  fail';
        }
        $this->sendResult($return);
    }

    public function isInt($num)
    {
        $t = true;
        if (empty($num) && $num != 0)
            $t = false;
        if (is_numeric($num)) {
            if (strpos(floatval($num), '.')) {
                $t = false;
            }
        } else {
            $t = false;
        }

        return $t;
    }

    public function checkReg($v)
    {
        $desc = '';
        $v['type'] = strtolower($v['type']);
        if ( empty($v['desc']))
            $v['desc'] = '---';
        $check = true;
        $all = false;
        $check_len = true;
        $preset_check = false;
        $required = '否';
        if (empty($v['type'])) {
            $desc .= '缺失type' . '<br>';
            $check = false;

        }

        if (!empty($v['preset'])) {

            if($v['type'] == 'float')
            {
                foreach ($v['preset'] as $preset){
                    if(!is_numeric($preset)){
                        $desc .= "preset" . "不是float" . "<br>";
                        $check = false;
                        break;
                    }
                }

            }
            if($v['type'] == 'int')
            {
                foreach ($v['preset'] as $preset){
                    if(!$this->isInt($preset)){
                        $desc .= "预置参数preset" . "不是int" . "<br>";
                        $check = false;
                        break;
                    }
                }
            }
            if(!$check)
            {
                $result = ['desc' => $desc, 'check' => $check, 'required' => $required];
                goto END;
            }
            $desc .= $v['desc'];
            $preset_check = true;
        }

            if ( isset($v['value']) ) {
                if ( empty($v['value'])  && $v['value'] != 0) {
                    $desc .= '请填写value' . '<br>';
                    $check = false;
                }
         /*       $result = ['desc' => $desc, 'check' => $check, 'required' => $required];
                goto END;*/
            }else{
                $desc .= '请填写value' . '<br>';
                $check = false;
            }


        if (!empty($v['value'])  && !empty($v['min'])  && !empty($v['max']) )
            $all = true;

        if (!empty($v['len_max']) || !empty($v['len_min'])) {
            $check_len = false;

            if (isset($v['len_min']) && !empty($v['len_min'])) {
                if (is_numeric($v['len_min'])) {
                    if (strpos(floatval($v['len_min']), '.')) {
                        $desc .= 'len_min="' . $v['len_min'] . '",请输入正整数' . '<br>';
                        $check = false;
                    }
                } else {
                    $desc .= 'len_min="' . $v['len_min'] . '",请输入正整数' . '<br>';
                    $check = false;
                }
            }

            if (isset($v['len_max']) && !empty($v['len_max'])) {
                if (is_numeric($v['len_max'])) {
                    if (strpos(floatval($v['len_max']), '.')) {
                        $desc .= 'len_max="' . $v['len_max'] . '",请输入正整数' . '<br>';
                        $check = false;
                    }
                } else{
                    $desc .= 'len_max="' . $v['len_max'] . '",请输入正整数' . '<br>';
                    $check = false;
                }
            }

            if (is_numeric($v['len_min']) && is_numeric($v['len_max'])) {
                if (floatval($v['len_max'])<floatval($v['len_min'])) {
                    $desc .= 'len_max==' . $v['len_max'] .'不能小于len_min='.$v['len_min'].'<br>';
                    $check = false;
                }
            }
        }

        if (!empty($v['required'])) {

            if (is_bool($v['required'])) {
                $required = $v['required'] === true ? '是' : '否';
            } else {
                $desc .= 'required' . '请填写bool值' . '<br>';
                $check = false;
            }
        }

        if (!$preset_check && !empty($v['type'])) {
            switch (strtoupper($v['type'])) {
                case 'INT' :
                    // 返回JSON数据格式到客户端 包含状态信息

                    if (!is_numeric($v['value'])) {
                        $desc .= "value:" . $v['value'] . "不是int" . "<br>";
                        $check = false;
                        break;
                    }
                    if ($all && $this->isInt($v['max']) && $this->isInt($v['min'])) {
                        if ($v['max'] < $v['min']) {
                            $desc .= "max:" . $v['max'] . "不能小于min:" . $v['min'] . "<br>";
                            $check = false;
                            break;
                        }
                    }

                    if (!empty($v['max'])) {
                        if ($this->isInt($v['max'])) {
                            if ($v['max'] < $v['value']) {
                                $desc .= 'value:"' . $v['value'] . '"不能大于max:' . $v['max'] . "<br>";
                                $check = false;
                                break;

                            }
                        } else {
                            $desc .= 'max:"' . $v['max'] . '"不是int类型1<br>';
                            $check = false;

                        }
                    }
                    if (!empty($v['min'])) {
                        if ($this->isInt($v['min'])) {
                            if ($v['min'] > $v['value']) {
                                $desc .= 'value:"' . $v['value'] . '"不能小于' . $v['min'] . "<br>";
                                $check = false;
                                break;
                            }
                        } else {
                            $desc .= 'min:"' . $v['min'] . '"不是int类型' . "<br>";
                            $check = false;
                            break;

                        }
                    }

                    if (!$this->isInt($v['value'])) {
                        $desc .= 'value:"' . $v['value'] . '"不是int类型';
                        $check = false;
                        break;
                    }

                   if (!empty($v['max']) && empty($v['min'])) {
                        $desc .= $v['desc'] . ",最大值" . $v['max'] . "<br>";
                    } elseif (empty($v['max']) && !empty($v['min'])) {
                        $desc .= $v['desc'] . ",最小值" . $v['min'] . "<br>";
                    } elseif (!empty($v['max']) && !empty($v['min'])) {
                        $desc .= $v['desc'] . ',最大值' . $v['max'] . ',最小值' . $v['min'];
                    } else {
                        if ($check) $desc .= $v['desc'];
                    }

                    break;
                case 'FLOAT' :
                    // 返回JSON数据格式到客户端 包含状态信息
                    if (!is_numeric($v['value'])) {
                        $desc .= "value:" . $v['value'] . "不是float" . "<br>";
                        $check = false;
                        break;

                    }
                    if ($all && is_numeric($v['max']) && is_numeric($v['min'])) {
                        if ($v['max'] < $v['min']) {
                            $desc .= "max:" . $v['max'] . "不能小于min:" . $v['min'] . "<br>";
                            $check = false;
                            break;
                        }
                    }
                    if (isset($v['max'])) {
                        if (is_numeric($v['max'])) {
                            if (floatval($v['value']) > floatval($v['max'])) {
                                $desc .= 'value:"' . $v['value'] . '"不能大于' . $v['max'] . "<br>";
                                $check = false;
                            }
                        } else {
                            $check = false;
                            $desc .= 'max:"' . $v['max'] . '"不是float' . "<br>";
                        }

                    }
                    if (isset($v['min'])) {
                        if (is_numeric($v['min'])) {
                            if (floatval($v['min']) > floatval($v['value'])) {
                                $desc .= 'value:"' . $v['value'] . '"不能小于' . $v['min'] . "<br>";
                                $check = false;
                            }
                        } else {
                            $check = false;
                            $desc .= 'min:"' . $v['min'] . '"不是float' . "<br>";
                        }
                    }

                    if (!is_numeric($v['value']) && isset($v['value'])) {
                        $desc .= 'value:"' . $v['value'] . '"不是float' . "<br>";
                        $check = false;
                        break;
                    }

                  if (!empty($v['max']) && !empty($v['min'])) {
                        $desc .= $v['desc'] .",最大值" . $v['max'] . "<br>";
                    } elseif (empty($v['max']) && !empty($v['min'])) {
                        $desc .= $v['desc'] .",最小值" . $v['min'] . "<br>";
                    } elseif (!empty($v['max']) && !empty($v['min'])) {
                        $desc .= $v['desc'] . ',最大值' . $v['max'] . ',最小值' . $v['min'];
                    } else {
                        if ($check) $desc .= $v['desc'];
                    }

                    break;
                case 'STRING':
                    // 返回JSON数据格式到客户端 包含状态信息

                    if (isset($v['len_min']) && isset($v['len_max']) && !empty($v['len_min'])  && !empty($v['len_max'])) {
                        if (floatval($v['len_min']) > floatval($v['len_max'])) {
                            $desc .= 'len_min=' . $v['len_min'] . ',不能 超过len_max=' . $v['len_max'];
                            $check = false;
                            break;
                        }
                    }

                    if (isset($v['len_min']) || isset($v['len_max'])) {
                        if ($check_len) {
                            if(isset($v['len_max']) && !empty($v['len_max'])){
                                if (strlen($v['value']) > $v['len_max']) {
                                $desc .= 'value长度为' . strlen($v['value']) . ',不能大于len_max=' . $v['len_max'];
                                $check = false;
                                break;
                            }
                        }
                        if(isset($v['len_min']) && !empty($v['len_min'])){
                            if (strlen($v['value']) < $v['len_min']) {
                                $desc .= 'value长度为' . strlen($v['value']) . ',不能小于 len_min=' . $v['len_min'];
                                $check = false;
                                break;
                            }
                        }

                        }
                    }
                    if ($check)
                        $desc .= $v['desc'];

                    break;
                case 'ARRAY' :
                    if (!is_array($v['value'])) {
                        $desc .= 'value不是数组';
                        $check = false;
                        break;
                    }
                    if ($check) $desc .= $v['desc'];
                    break;
                case 'ARR' :
                    if (!is_array($v['value'])) {
                        $desc .= $v['value'] . '不是数组';
                        $check = false;
                        break;
                    }
                    if ($check) $desc .= $v['desc'];

                    break;
                case 'OBJ' :
//                    var_dump($v['value']);die;
                    if (!is_array($v['value'])) {
                        $desc .= $v['value'] . '不是object';
                        $check = false;
                        break;
                    }
                    if ($check) $desc .= $v['desc'];

                    break;
                case 'OBJECT' :
                    if (!is_array($v['value'])) {
                        $desc .= $v['value'] . '不是object';
                        $check = false;
                        break;
                    }
                    if ($check) $desc .= $v['desc'];

                    break;
                default:
                    $desc .= '不支持的type类型:' . $v['type'];
                    $check = false;
            }
        }
        $result = ['desc' => $desc, 'check' => $check, 'required' => $required];
END:
        return $result;

    }

    public function getHidden($data = '')
    {

        $data = explode('!--', $data);
        if ($data[1]) {
            $data = explode('-->', $data[1]);
        } else {
            return false;
        }
        $check_obj = false;

        $data = $data[0];
        $t = 0;
        if (is_object($data))
            $t = 1;

        $data = json_decode($data, true);
        if (!$data['response'])
            return false;
        $params_table = '
        
            |参数名|类型|必填|说明|
            |:-------- |:---|---|---|
            ';


        if($data['params']){
            $params_data = $this->getTableData($data['params'],$params_table,$params_table);
            $params = $params_data['json'];
            $params_table = $params_data['table'];
            $params = $this->jsonFormat($params);
            $params = str_replace('"[', '[', $params);
            $params = str_replace(',]"', ']', $params);
            $params = str_replace(',]]"', ']]', $params);
            $params = str_replace(']"', ']', $params);

            $params_table = str_replace(' ', '', $params_table);
            $params_table = str_replace('nsc', '', $params_table);
            $params = str_replace('nsc', '', $params);
        }

            $response_table = '
        
            |参数名|类型|必填|说明|
            |:-------- |:---|---|---|
            ';


        $response_data = $this->getTableData($data['response'],$response_table,$response_table);
//        var_dump($params);die;
        $response = $response_data['json'];
        $response_table = $response_data['table'];
        $response_table = str_replace(' ', '', $response_table);
        $response_table = str_replace('|必填|', '|', $response_table);
        $response_table = str_replace('||', '', $response_table);
        $response_table = str_replace('|否|', '|', $response_table);
        $response_table = str_replace('|是|', '|', $response_table);
        $response_table = str_replace('||格式', '|格式', $response_table);
        $response_table = str_replace('obj||', 'obj|', $response_table);
        $response_table = str_replace('nsc', '', $response_table);
        $response = str_replace('nsc', '', $response);
        $response = $this->jsonFormat($response);

        $response = str_replace('"[', '[', $response);
        $response = str_replace(',]"', ']', $response);
        $response = str_replace(',]]"', ']]', $response);
        $response = str_replace(']"', ']', $response);

        $t = [];

        if (isset($data['params']) && !$data['params']) {
            $t[] = '无';
            $t[] = "无";
            $t[] = $response_table;
            $t[] = "~~~" . "\n" . $response . "\n" . "~~~";
        }elseif (!isset($data['params'])) {
            $t[] = '';
            $t[] = "";
            $t[] = $response_table;
            $t[] = "~~~" . "\n" . $response . "\n" . "~~~";
        } else {
            $t[] = $params_table;
            $t[] = "~~~" . "\n" . $params . "\n" . "~~~";
            $t[] = $response_table;
            $t[] = "~~~" . "\n" . $response . "\n" . "~~~";
        }
//        var_dump($t);die;
        return $t;
    }

    public function getTableData($data1,$params_table,$params_table12,$a=0){

        $check_obj = false;
        $params_table13 = $params_table12;
        $keys2 = array_keys($data1['value']);
        $s = sizeof($data1['value']);
//            $data = $this->checkArray($data);
        $type_arr = ['arr','array','obj','object'];
        $array = true;
        foreach ($data1['value'] as $k => $v) {
            if (!is_numeric($k))
                $array = false;
        }
        if(!$a){
            if(!in_array($data1['type'],$type_arr)){
                $params_table .= '|~~~' . '---' . '~~~ |~~~' . $data1['type'] . '~~~|~~~' . '是' . '~~~|' . 'type只能为arr或obj' . "\n";

            }else{
                $symble = $data1['type'] != 'arr'?'{}':'[]';
                $params_table .= '|' . $symble . ' |' . $data1['type'] . '|' .'是'. '|' . '格式为'.$data1['type'] . "\n";
            }
        }
        $a++;
        $head = '';
        if($data1['type'] == 'arr')
            $head = '∟';
        $data = $data1['value'];
//        var_dump($data1);die;
        //特殊情况
        if($array && $s>1){

            foreach ($data as $k0=>$v0){
                {
                    $head = '∟';
                    $params_table .= '|'.'/'.' |'.'obj'.'|'.'是'.'|'.'****'."\n";

                    foreach ($v0['value'] as $k => $v) {
                        $keys1 = array_keys($v);
                        if($keys1[0] == '0'){
                            $v = $v[0];
                        }
                        $desc = '';
                        $check_reg = $this->checkReg($v);
                        $required = $check_reg['required'];
                        $desc .= $check_reg['desc'];
                        $check = $check_reg['check'];
                        if ($check) {
                            $params_table .= '|' . $k . ' |' . $v['type'] . '|' . $required . '|' . $desc . "\n";
                        } else {
                            $params_table .= '|~~~' . $k . '~~~ |~~~' . $v['type'] . '~~~|~~~' . $required . '~~~|' . $desc . "\n";
                        }
                        if ($v['type'] == 'obj') {
                            $params_table12 .= '|' . $k . '|' . $v['value'] . '|' . '1' . '|' . $desc . $v['type']."\n";
                            $check_obj = true;
                            foreach ($v['value'] as $k1 => $v1) {
                                $v1['key'] = $k1;
                                $v1['up_key'] = $k;

                                $params_table12 = $this->checkPara($v1, $params_table12, '', '');
                                $params_table = $this->checkSub($v1,$params_table,$head,'');
                            }

                        } elseif ($v['type'] == 'arr' || $v['type'] == 'array') {
                            $params_table .= '|'.$head.'/'.' |'.'arr'.'|'.$required.'|'.'****'."\n";

                            if(!is_array($v['value']))


                            foreach ($v['value'] as $k1 => $v1) {

                                $v1 =$this->checkArray($v1);
                                if (is_array($v1)) {
                                    $params_table13 .= '|'.$k.' |'.$v['value'].'|'.'1'.'|'.$v['desc'].'|'.$v['type']."\n";
                                    $params_table .= '|'.$head.'*/'.' |'.'obj'.'|'.$required.'|'.'****'."\n";
                                    foreach ($v1 as $k2 => $v2) {
                                        if(!isset($v2['value'])){
                                            $type = 'string';
                                            if(is_numeric($v2)){
                                                $type = 'float';
                                                if($this->isInt($v2))
                                                    $type = 'int';
                                            }
                                            $params_table .= '|'.$head.'/'.' |'.$type.'|'.$required.'|'.'****'."\n";
                                            $t = '';
                                            foreach ($v1 as $v3){
                                                $t .= $v3.',';
                                            }
                                            $params_table13 .= '|' . $data['key'] . ' |' .'[['. $t.']]' . '|' . $data['up_key']. '|' . $data['desc'] .' |' . $data['type'] ."\n";
                                            break;
                                        }
                                        $v2['key'] = $k2;
                                        $v2['up_key'] = $k;

                                        $params_table13 = $this->checkPara($v2, $params_table13, '', '');
                                        $params_table = $this->checkSub($v2,$params_table,$head,'');
                                    }
                                }else{
                                    $params[$k] = $v['value'];
                                    $table_name_type[$k] = ['type'=>$v['type']];
                                    $type = 'string';
                                    if(is_numeric($v1)){
                                        $type = 'float';
                                        if($this->isInt($v1))
                                            $type = 'int';
                                    }
                                    $params_table .= '|'.$head.'/'.' |'.$type.'|'.$required.'|'.'****'."\n";
                                    break;
                                }
                            }
                        }else{
                            $params[$k] = $v['value'];
                            $table_name_type[$k] = ['type'=>$v['type']];
                        }

                        $json_list12[$k0] = $params_table12;
                        $json_list13[$k0] = $params_table13;

                    }
                    if($check_obj){
                        $params_array_obj = $this->getJsonArray($params_table12);
                        $params_array1 = $this->getJsonArrayForType($params_table12);
                        $params_array = $params_array_obj;
                        $table_name_type_obj = array_merge($table_name_type,$params_array1);
                        $table_name_type = $table_name_type_obj;
                    }
                    $params_array_arr = $this->getJsonArray($params_table13);

                    if($params_array_arr){
                        $params_array = $params_array_arr;
                        if($params_array_obj){
                            $params_array = array_merge($params_array_obj,$params_array_arr);
                        }
                        $params_array1 = $this->getJsonArrayForType($params_table13);
                        if($table_name_type_obj){
                            $table_name_type = array_merge($table_name_type_obj,$params_array1);
                        }else{
                            $table_name_type = array_merge($table_name_type,$params_array1);
                        }
                    }
                    foreach ($table_name_type as $k => $v){
                        $c[$k] = $v['type'];
                    }
                    $params1 = $this->generateTree($params_array,$c);
                    /*
                                        if ($k0 == 3){
                                                                var_dump($params_table12);
                                        var_dump($params_table13);die;
                                        }*/
                    if($params){
                        $params = array_merge($params,$params1);
                    }else{
                        $params = $params1;
                    }
                    foreach ($params as $k=>$v){
                        if($c[$k] == 'arr'){
                            foreach ($v as $k=>&$item) {
                                if(!is_numeric($k)){
                                    $item = [$item];
                                }
                                break;
                            }
                        }
                    }
                    $check_obj  = false;

                    $json_list[$k0] = $params;

                    unset($params);
                }

            }
            $params = $json_list;

        }else{
//            if($data1['type'] == 'arr' || $data1['type'] == 'array')
//            if($data1['type'] == 'arr' && !isset($data1['value']['type']))
//                $params_table .= '|'.'/'.' |'.'obj'.'|'.'是'.'|'.'---'."\n";
            $data = $this->checkArray($data);
            if($data['value']){
                $t = $data['desc']?$data['desc']:'---';
                if($data1['type'] == 'arr' || $data1['type'] == 'array')
                     $params_table .= '|'.'/'.' |'.$data['type'].'|'.'是'.'|'.$t."\n";
                $data = $data['value'];
            }
            $table_name_type = [];
            $head_r1 = $head;

            foreach ($data as $k => $v) {
//                var_dump($v);die;
                $keys1 = array_keys($v);
                if($keys1[0] == '0'){
                    $v = $v[0];
                }
                $head = $head_r1;
                $desc = '';
                $check_reg = $this->checkReg($v);
                $required = $check_reg['required'];
                $desc .= $check_reg['desc'];
                $check = $check_reg['check'];

                if(is_numeric($k))
                    $k .= 'nsc';
                if ($v['type'] == 'obj') {

                    $params_table12 .= '|' .$k . '|' . $v['value'] . '|' . '1' . '|' . $desc .'|'. $v['type']."\n";

                    $check_obj = true;
                    $t = $v['desc']?$v['desc']:'---';
                    if(is_numeric($k))
                        $k .= 'nsc';
                    $params_table .= '|'.$head.$k.' |'.$v['type'].'|'.$required.'|'.$t."\n";
                    foreach ($v['value'] as $k1 => $v1) {
                        $v1['key'] = $k1;
                        $v1['up_key'] = $k;

                        $params_table12 = $this->checkPara($v1, $params_table12, $head, '');
//                        var_dump($params_table12);

                        $params_table = $this->checkSub($v1,$params_table,$head);
                    }
                } elseif ($v['type'] == 'arr' || $v['type'] == 'array') {

                    $t = $v['desc']?$v['desc']:'---';
                    $params_table .= '|'.$head.$k.' |'.$v['type'].'|'.$required.'|'.$t."\n";
                    $head .= '∟';

                    if($v['value']['type'] == 'arr') {
                        $v1 = $v['value']['value'];
                        $v1 =$this->checkArray($v1);
                        $params_table13 .= '|'.$k.' |'.$v['value'].'|'.'1'.'|'.$v['desc'].'|'.$v['type']."\n";
                        $params_table .= '|'.$head.'/'.' |'.$v['value']['type'].'|'.$required.'|'.$t = $v['value']['desc']?$v['value']['desc']:'---'."\n";
                        $v1['key'] = '/';
                        $v1['up_key'] = $k;

                        $params_table13 = $this->checkPara($v1, $params_table13, '', '');
                        $params_table = $this->checkSub($v1,$params_table,$head);

                    }elseif($v['value']['type'] == 'obj'){
                        $check_obj = true;
                        $params_table13 .= '|'.$k.' |'.$v['value'].'|'.'1'.'|'.$v['desc'].'|'.$v['type']."\n";
                        $t = $v['value']['desc']?$v['value']['desc']:'---';
                        $params_table .= '|'.$head.'/'.' |'.$v['value']['type'].'|'.$required.'|'.$t."\n";

                        foreach ($v['value']['value'] as $k2=>$v2){
                            $v2['key'] = $k2;
                            $v2['up_key'] = $k;

                            $params_table13 = $this->checkPara($v2, $params_table13, '', '');
                            $params_table = $this->checkSub($v2,$params_table,$head,'');
                        }
                    }else{
                        $t = $v['desc']?$v['desc']:'---';
//                        $params_table .= '|'.$k.' |'.$v['type'].'|'.$required.'|'.$t."\n";
                        $params_table .= '|'.$head.'/'.' |'.$v['value']['type'].'|'.$required.'|'.$v['value']['desc']."\n";


                        $t = $v['value']['value'];
                        if(is_array($v['value']['value'])){
                            $t = '';
//                        var_dump($v['value']['value']);die;
                            foreach ($v['value']['value'] as $v3)
                                $t .= $v3.',';
                        }
                        $params_table13 .= '|'.$k.' |'.'['. $t.']'.'|'.'1'.'|'.$v['desc'].'|'.'Array'."\n";

                    }
                }else{
                    if ($check) {
                        $params_table .= '|' .$head.$k . ' |' . $v['type'] . '|' . $required . '|' . $desc . "\n";
                    } else {
                        $params_table .= '|~~~' .$head.$k . '~~~ |~~~' . $v['type'] . '~~~|~~~' . $required . '~~~|' . $desc . "\n";
                    }
                    if(is_numeric($k))
                        $k .= 'nsc';
                    $params[$k] = $v['value'];
                    $table_name_type[$k] = ['type'=>$v['type']];
                }
            }

            if($check_obj){
                $params_array_obj = $this->getJsonArray($params_table12);
                $params_array1 = $this->getJsonArrayForType($params_table12);
                $params_array = $params_array_obj;
                if ($table_name_type && $params_array1)
                    $table_name_type_obj = array_merge($table_name_type,$params_array1);
                $table_name_type = $table_name_type_obj;
            }
            $params_array_arr = $this->getJsonArray($params_table13);

            if($params_array_arr){
                $params_array = $params_array_arr;
                if($params_array_obj && $params_array_arr){
                    $params_array = array_merge($params_array_obj,$params_array_arr);
                }

                $params_array1 = $this->getJsonArrayForType($params_table13);
                if($table_name_type_obj & $params_array1){
                    $table_name_type = array_merge($table_name_type_obj,$params_array1);
                }else{
                    if ($table_name_type && $params_array1)
                         $table_name_type = array_merge($table_name_type,$params_array1);
                }
            }

            foreach ($params_array1 as $k => $v){
                $c[$k] = $v['type'];
            }
            $ttt = $this->getJsonArrayForType($params_table13);

            foreach ($ttt as $k => $v){
                $dc[$k] = $v['type'];
            }

//            var_dump($params_array);die;
            foreach ($params_array as $k=>$v){

                if(is_numeric($k)){
                    $wrong[] = ['should'=>$v['id'],'now'=>$k];
                }
            }

            foreach ($wrong as $v){
                $params_array[$v['should']]=$params_array[$v['now']];
                unset($params_array[$v['now']]);
            }
//            var_dump($params_array);die;
//
//            die;
            $params1 = $this->generateTree($params_array,$c);

            if(!empty($params) && !empty($params1)){
                $params = array_merge($params,$params1);
            }elseif(empty($params) && !empty($params1)){
                $params = $params1;
            }


            foreach ($params as $k=>$v){
                if($c[$k] == 'arr'){
                    foreach ($v as $k=>&$item) {
                        if(!is_numeric($k)){
                            $item = [$item];
                        }
                        break;
                    }
                }
                if($v['value']){
                    $v = $v['value'];
                }
            }
            $check_obj  = false;

            if($data1['type'] == 'arr' || $data1['type'] == 'array'){
                $params = [$params];
            }
        }
//        $params = [$params];

//        var_dump($params);die;
        return [
            'json'=>$params,
            'table'=>$params_table,
        ];
    }

    private function openArray($data,$now,$c){
        foreach ($now as $k=>$v){
            if(is_array($v)){
                $this->openArray($data,$v,$c);
            }
            if($c[$k] == 'arr'){
                foreach ($v as $k=>&$item) {
                    if(!is_numeric($k)){
                        $item = [$item];
                    }
                    break;
                }
            }
        }
    }

    private function checkArray($data){
        $keys2 = array_keys($data);
        $s = sizeof($data);
        if($keys2[0] == '0' && $s==1){
            $data = $data[0];
        }
        return $data;
    }

    /**
     * @func  生成参数的父子关系
     * @param $table
     * @return array
     */
    public function getJsonArray($table){
        $t = explode("\n", $table);
        array_pop($t);
        $head = '*';
        $params_array = [];
//        var_dump($table);die;
        foreach ($t as $k => $v) {
            if ($k < 4)
                continue;
            $temp = explode("|", $v);
            if(isset( $params_array[trim($temp[1])]))
            {
                $t = $params_array[trim($temp[1]).$head] = [
                    'pid' => $temp[3],
                    'id' => trim($temp[1]),
//                    'eee' => $i,
                    'value' => $temp[2]
                ];
                if( $params_array[trim($temp[1])]['pid'] == $temp[3]){
                    $params_array[trim($temp[1])] = $params_array[trim($temp[1]).$head];
                    unset($params_array[trim($temp[1]).$head]);
                }
                $head .= '*';
            }else{
                $t = $params_array[trim($temp[1])] = [
                    'pid' => $temp[3],
                    'id' => trim($temp[1]),
//                    'eee' => $i,
                    'value' => $temp[2]
                ];
            }
        }
//        var_dump($params_array);die;
        return $params_array;
    }

    /**
     * @func  取出所有参数的类型
     * @param $table
     * @return mixed
     */
    public function getJsonArrayForType($table){
        $t = explode("\n", $table);
        array_pop($t);
        foreach ($t as $k => $v) {
            if ($k < 4)
                continue;
            $temp = explode("|", $v);
            $params_array[trim($temp[1])] = [
                'type' => $temp[5]
            ];
        }
        return $params_array;
    }

    private function arrAndObj(&$data,$keys,$da){
        foreach ($data as $k=>&$v){
            if(is_array($v)){
                if(in_array($k,$keys)){
                    $v = [$v];
                }
                $this->arrAndObj($v,$keys,$data);
            }else{
                if(in_array($k,$keys)){
                    $v = [$v];
                }
            }

        }
        return $data;
    }

    public function generateTree($items,$keys) {
        $tree = array(); //格式化好的树
        $count = [];
        $size = [];
        foreach ($items as $k=>$item){
            if($keys[$item['pid']] == 'arr') {
                $size[$item['pid']]++;
            }

        }

        foreach ($items as $k=>$item){
            $k0 = $k;
            $k = str_replace('*','',$k);
            if (isset($items[$item['pid']])){
                unset($items[$k0]['pid']);
                unset($items[$k0]['id']);
                if($item['value'] == 'Obj' || $item['value'] == 'Array'){
                    if(!strstr($item['value'],'[')){
                        unset($items[$k0]['value']);
                    }
                    $items[$item['pid']][$k] = &$items[$k0];
                }else{
                    $items[$item['pid']][$k] = &$items[$k0]['value'];
                }
                if($keys[$item['pid']] == 'arr'){
                    $count[$item['pid']]++;
                    if( $count[$item['pid']] == $size[$item['pid']])
                        $items[$item['pid']] = [$items[$item['pid']]];
                }

            }else{
                if(strstr($item['value'],'[')){
                    $tree[$item['id']] = $item['value'];
                }else{
                    $pid = $items[$k0]['id'];
                    unset($items[$k0]['pid']);
                    unset($items[$k0]['id']);
                    if($item['value'] == 'Obj' || $item['value'] == 'Array'){
                        if(!strstr($item['value'],'[')){
                            unset($items[$item['id']]['value']);
                        }
                    }
                    $tree[$pid] = &$items[$k0];
                }
            }
        }

//        var_dump($tree);die;
        return $tree;
    }

    public function arrHappy($arr){
        foreach($arr as $k=>&$v){
            if(is_array($v)){
                $arr[$k] = $this->arrHappy($v);
            }
            if(is_numeric($v))
                $v = (int)$v;
        }
        return $arr;
    }

    public function jsonFormat($data, $indent=null){
       // 对数组中每个元素递归进行urlencode操作，保护中文字符
        $data = $this->arrHappy($data);
        array_walk_recursive($data, 'jsonFormatProtect');
        // json encode
        $data = json_encode($data,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
        // 将urlencode的内容进行urldecode
        $data = urldecode($data);

        // 缩进处理
        $ret = '';
        $pos = 0;
        $length = strlen($data);
        $indent = isset($indent)? $indent : "\t";
        $newline = "\n";
        $prevchar = '';
        $outofquotes = true;

        for($i=0; $i<=$length; $i++){
            $char = substr($data, $i, 1);
            if($char=='"' && $prevchar!='\\'){
                $outofquotes = !$outofquotes;
            }elseif(($char=='}' || $char==']') && $outofquotes){
                $ret .= $newline;
                $pos --;
                for($j=0; $j<$pos; $j++){
                    $ret .= $indent;
                }
            }
            $ret .= $char;
            if(($char==',' || $char=='{' || $char=='[') && $outofquotes){
                $ret .= '';
                if($char=='{' || $char=='['){
                    $pos ++;
                }

                for($j=0; $j<$pos; $j++){
                    $ret .= $indent;
                }
            }
            $prevchar = $char;
        }

        return $ret;
    }

    /**
     * @func  生成json原始数据
     * @param string $data  待处理的原始参数数据
     * @param string $params_table   已生成的参数table
     * @param string $head  关系标识符
     * @return string
     */
    public function checkPara($data = '',$params_table = '',$head='' )
    {

        $head .= '∟';
        $data = $this->checkArray($data);
        $check_reg = $this->checkReg($data);
        $desc = $check_reg['desc'];
        $check = $check_reg['check'];
        if(is_numeric($data['key']))
            $data['key'] .= 'nsc';
        if(!$check ) {
            $params_table .= '|'.$data['key'].' |'.$data['value'].'|'.$data['up_key'].'|'.$desc.'|'.$data['type']."\n";
        }else{
            $params_table .= '|'.$data['key'].' |'.$data['value'].'|'.$data['up_key'].'|'.$data['desc'].'|'.$data['type']."\n";
        }
        $params[$data['key']] = $data['value'];
        if($data['type'] == 'obj'){

            foreach ($data['value'] as $k1=>$v1){

                $v1['key'] = $k1;
                $v1['up_key'] = $data['key'];

                $params_table = $this->checkPara($v1,$params_table,$head);
            }
        }elseif($data['type'] == 'arr' || $data['type'] == 'array'){
            $params[$data['key']] = '';
            if($data['value']['value']){

                if($data['value']['type'] == 'arr' || $data['value']['type'] == 'obj'){
                    foreach ($data['value']['value'] as $k2=>$v2){
                        $v2['key'] = $k2;
                        $v2['up_key'] = $data['key'];

                        $params_table = $this->checkPara($v2,$params_table,$head);
                    }
                }else{
                    $t = '';
                    foreach ($data['value']['value'] as $v3){
                        $t .= $v3.',';
                    }
                    $params_table .= '|' . $data['key'] . ' |' .'['. $data['value']['value'].']' . '|' . $data['up_key']. '|' . $data['desc'] .' |' . $data['type'] ."\n";

                }

                }else{
                if($data['value']['type'] == 'obj'){
                    foreach ($data['value']['value'] as $k1 => $v1) {
                        if($v1['type'] == 'obj'){
                            foreach ($v1['value'] as $k2=>$v2){
                                $v2['key'] = $k2;
                                $v2['up_key'] = $data['key'];

                                $params_table = $this->checkPara($v2,$params_table,$head);
                            }
                        }elseif ($v1['type'] == 'arr'){
                            $head .= '∟';
                            if($v1['value']['type'] == 'obj'){
                                foreach ($v1['value']['value'] as $k2=>$v2){
                                    $v2['key'] = $k2;
                                    $v2['up_key'] = $data['key'];

                                    $params_table = $this->checkPara($v2,$params_table,$head);
                                }
                            }

                        }else{
                            $params_table .= '|' . $k1 . ' |' .$v1['value'] . '|' . $data['key']. '|' . $data['desc'] .' |' . $v1['type'] ."\n";
                        }
                        if(is_array($v1)) {
                            foreach ($v1 as $k2 => $v2) {
                                $v2 = $this->checkArray($v2);
                                $v2['key'] = $k2;
                                $v2['up_key'] = $k1;

                                $params_table = $this->checkPara($v2, $params_table, $head, $params, [$this_params[$data[$k1]]], $i++, $keys);
                            }
                        }else{

                            $t = $data['value']['value'];
                            if(is_array($data['value']['value'])){
                                $t = '';
                                foreach ($data['value'] as $v3){
                                    $t .= $v3.',';
                                }
                            }


                            $params_table .= '|' . $data['key'] . ' |' .'['. $t.']' . '|' . $data['up_key']. '|' . $data['desc'] .' |' . $data['type'] ."\n";
                            break;
                        }
                    }
                }elseif ($data['value']['type'] == 'arr'){
                    $v2['key'] = '/';
                    $v2['up_key'] = '/';
                    $v2['value'] = $data['value']['value'];

                    $params_table = $this->checkPara($v2, $params_table, $head);
                }
            }

        }else{
        }

//        var_dump($params_table);die;
        return $params_table;
    }

    /**
     * @func  生成table数据
     * @param string $data  待处理的原始参数数据
     * @param string $params_table   已生成的参数table
     * @param string $head  关系标识符
     * @return string
     */
    public function checkSub($data = '',$params_table = '',$head='')
    {
        $head .= '∟';
        $check_reg = $this->checkReg($data);
        $desc = $check_reg['desc'];
        $check = $check_reg['check'];
        $required = $check_reg['required'];
        if(!$check) {
            $params_table .= '|'.$head.$data['key'].' |'.$data['type'].'|'.$required.'|'.$desc."\n";
        }else{
            if(empty($data['desc']))
                $data['desc'] = '---';
            $params_table .= '|'.$head.$data['key'].' |'.$data['type'].'|'.$required.'|'.$data['desc']."\n";
        }

        if($data['type'] == 'obj'){
            foreach ($data['value'] as $k1=>$v1){
                $v1 = $this->checkArray($v1);
                $v1['key'] = $k1;
                $v1['up_key'] = $data['key'];
                $params_table = $this->checkSub($v1,$params_table,$head);
            }
        }elseif($data['type'] == 'arr' || $data['type'] == 'array'){
            if($data['value']['value']){
                $params_table .= '|'.$head.'/'.' |'.$data['value']['type'].'|'.'是'.'|'.'---'."\n";
                if($data['value']['type'] == 'arr' || $data['value']['type'] == 'obj'){
                    foreach ($data['value']['value'] as $k2 => $v2){
                        $v2['key'] = $k2;
                        $v2['up_key'] = $data['key'];
                        $params_table = $this->checkSub($v2,$params_table,$head);
                    }
                }

            }else{
                $params_table .= '|'.$head.'/'.' |'.'arr'.'|'.$required.'|'.'---'."\n";
                $v1 = $data['value'];
                $v1 =$this->checkArray($v1);
                if($data['type'] = 'arr'){
                    $params_table .= '|'.$head.'/'.' |'.'arr'.'|'.$required.'|'.$data['desc']."\n";
                    $v2 = $data['value'];
                    $v2['key'] = $head;
                    $v2['up_key'] = $head;
                    $params_table = $this->checkSub($v2,$params_table,$head);
                }elseif ($data['type'] = 'obj'){
                    foreach ($v1 as $k2=>$v2){
                        if(!isset($v2['value'])){
                            $type = 'string';
                            if(is_numeric($v2)){
                                $type = 'float';
                                if($this->isInt($v2))
                                    $type = 'int';
                            }
                            $params_table .= '|'.$head.'/'.' |'.$type.'|'.$required.'|'.'---'."\n";
                            break;
                        }
                        $v2['key'] = $k2;
                        $v2['up_key'] = $head;
                        $params_table = $this->checkSub($v2,$params_table,$head);
                    }
                }else{
                    $params_table .= '|'.$head.'/'.' |'.$data['value']['type'].'|'.$required.'|'.$data['value']['desc']."\n";
                }
            }

        }
        return $params_table;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    //删除页面
    public function delete(){
        $page_id = I("page_id/d")? I("page_id/d") : 0;
        $page = D("Page")->where(" page_id = '$page_id' ")->find();

        $login_user = $this->checkLogin();
//        var_dump($login_user);die;
        if($login_user['username'] != 'admin')
            if (!$this->checkItemCreator($login_user['uid'] , $page['item_id']) && $login_user['uid'] != $page['author_uid']) {
                $this->message(L('no_permissions_to_delete_page',array("author_username"=>$page['author_username'])));
                return;
            }

        if ($page) {

            $ret = D("Page")->where(" page_id = '$page_id' ")->delete();
            //更新项目时间
            D("Item")->where(" item_id = '$page[item_id]' ")->save(array("last_update_time"=>time()));

        }
        if ($ret) {
           $this->message(L('delete_succeeded'),U("Home/item/show?item_id={$page['item_id']}"));
        }else{
           $this->message(L('delete_failed'),U("Home/item/show?item_id={$page['item_id']}"));
        }
    }

    //历史版本
    public function history(){
        $page_id = I("page_id/d") ? I("page_id/d") : 0 ;
        $this->assign("page_id" , $page_id);

        
        $PageHistory = D("PageHistory")->where("page_id = '$page_id' ")->order(" addtime desc")->limit(10)->select();

        if ($PageHistory) {
            foreach ($PageHistory as $key => &$value) {
                $page_content = gzuncompress(base64_decode($value['page_content']));
                $value['page_content'] = $page_content ? $page_content : $value['page_content'] ;
                $value['addtime'] = date("Y-m-d H:i:s" , $value['addtime']);
            }
        }
        //判断用户是否有编辑权限
        $ItemPermn = false;
        $cookie_token = cookie('cookie_token');

        $page = D("Page")->where(" page_id = '$page_id' ")->find();
        if ($cookie_token) {
            $ret = D("UserToken")->getToken($cookie_token);   
            $ItemPermn = $this->checkItemPermn($ret['uid'], $page['item_id']);

        }

        $this->assign("ItemPermn" , $ItemPermn);
        $this->assign("PageHistory" , $PageHistory);

        $this->display();

    }

    //上传图片
    public function uploadImg(){
        $qiniu_config = C('UPLOAD_SITEIMG_QINIU') ;
        if ($_FILES['editormd-image-file']['name'] == 'blob') {
            $_FILES['editormd-image-file']['name'] .= '.jpg';
        }
        if (!empty($qiniu_config['driverConfig']['secrectKey'])) {
          //上传到七牛
          $Upload = new \Think\Upload(C('UPLOAD_SITEIMG_QINIU'));
          $info = $Upload->upload($_FILES);
          $url = $info['editormd-image-file']['url'] ;
          echo json_encode(array("url"=>$url,"success"=>1));
        }else{
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize  = 3145728 ;// 设置附件上传大小
            $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Public/Uploads/';// 设置附件上传目录
            $upload->savePath = '';// 设置附件上传子目录
            $info = $upload->upload() ;
            if(!$info) {// 上传错误提示错误信息
              $this->error($upload->getError());
              return;
            }else{// 上传成功 获取上传文件信息
              $url = get_domain().__ROOT__.substr($upload->rootPath,1).$info['editormd-image-file']['savepath'].$info['editormd-image-file']['savename'] ;
              echo json_encode(array("url"=>$url,"success"=>1));
            }
        }

    }

    public function diff(){
        $login_user = $this->checkLogin();
        $page_history_id = I("page_history_id/d");
        $page_id = I("page_id/d");

        $page = D("Page")->where(" page_id = '$page_id' ")->find();
        $cur_page_content = $page['page_content'];

        $item_id = $page['item_id'] ?$page['item_id'] :$item_id;

        if (!$this->checkItemPermn($login_user['uid'] , $item_id)) {
            $this->message(L('no_permissions'));
            return;
        }

        $page = D("PageHistory")->where(" page_history_id = '$page_history_id' ")->find();
        $page_content = gzuncompress(base64_decode($page['page_content']));
        $history_page_content = $page_content ? $page_content : $page['page_content'] ;

        $this->assign("cur_page_content" , $cur_page_content);
        $this->assign("history_page_content" , $history_page_content);
        $this->display();
    }
}
