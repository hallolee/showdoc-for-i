SQLite format 3   @      a  _      [                                                 -�
   �    ����                                                                                                                                                                                                                                                       i	}W indexsqlite_autoindex_sqlitebrowser_rename_column_new_table_1sqlitebrowser_rename_column_new_table       P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)�\�tableuseruserCREATE TABLE `user` (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直   2   	0   ,   (                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              � � ������d                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              )Wsqlitebrowser_rename_column_new_table� page_historyu	pagep#item_member   
itemitemcatalogH%page_historyruser   � ��H�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        j !    MM!sfd454G -    M 759290857@qq.coma3223281a180afa3c38a72ed7dc72cef0Y� cYݳ�>     M weekenda89da13684490eb9ec9e613f91d24d000Y���Y�O�<     M terrya89da13684490eb9ec9e613f91d24d000Y�9Y�A<     M admin0ffd93090fc323c3ec8c3c2d16446c170Y�&mY�� :     M showdoca89da13684490eb9ec9e613f91d24d000W���   �    O����] � � :                              _ �)674d2f3e1fc75cba96fee67af9baf3a9ddba5f98ddd0aced66f542eb92eff866Z)119.129.87.207Y��_
 �)67d218b3a573641ae2b92710ca15ffd53fd02cff732115acb908ebbd74012fcbZ��113.119.37.190Y���_	 �)8e78c956ac5c3edf6c778cc5a4151fe7c75bfdead16a2aa07ecae13b43b0256bZ�8113.119.37.190Y��8_ �)473afaef1c8d26c465819f4c14fce370d830fa3c17419c1d786b473f6af16c41Z��113.119.37.190Y��_ �)1a0deaafd7ece451dd9b2e2ce5fbbb47ca97df94765f80bf8aa421cba30cfd40Z�M113.119.37.190Y�PM^ �'71b88ef70b862063750647e6e3727c000fcff7ecfd22fc82c89fda4231322e34ZG58.61.240.250Y�^G^ �'0612d8619880fdd23873ab5cf69639fe75d879f98d68e92608cd77845d9eebf5Z�&119.129.84.94Y�&^ �'9c0947e7482282fa061d2ea89de56a76134f2fa728645d643b091915a184beaaZ�A119.129.84.94Y�A^ �'43e75f7b2ad0766948e48bf9aae36936773da09f2189004146c651be7ddb7772Z��119.129.80.92Y�U�_ �)6b902cd891be438848af6478dfc987cca400e5da74ae66460cf40954923469ebZ�u113   c   �       	�   M���������  � �     (�*                    ��xsqli��*                    V �renam��*    �A?    �A?    6 Lrowse�A?�j +�adminAPI标准模板#### ProductListse3
* 说明：登录

* url：/ykd/index.php/Merchant/Dragon/ProductLists
&lt;!--
{
    &quot;params&quot;: {
        &quot;users&quot;: {
            &quot;type&quot;: &quot;string&quot;,
			&quot;required&quot;:false,
            &quot;len_max&quot;: &quot;e32&quot;,
            &quot;min&quot;: &quot;8&quot;,
            &quot;value&quot;:&quot;fasfasdf&quot;,
            &quot;desc&quot;: &quot;账号&quot;
        },
        &quot;pass&quot;: {
            &quot;type&quot;: &quot;string&quot;,
            &quot;len&quot;: &quot;32&quot;,
            &quot;min&quot;: &quot;8&quot;,
            &quot;value&quot;: &quot;147852safsfavav&quot;,
            &quot;desc&quot;: &quot;密码&quot;
        }
    },
    &quot;response&quot;: {
                &quot;status&quot;: {
        :  %  	  �  �       �   %    � �A? �                                                                                                                             �v(�OtableitemitemCREATE TABLE "item" (
	`item_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_name`	TEXT,
	`item_description`	TEXT,
	`uid`	INTEGER,
	`username`	TEXT,
	`password`	TEXT,
	`addtime`	INTEGER,
	`last_update_time`	INTEGER DEFAULT 0
, item_domain text NOT NULL DEFAULT '', item_type INT( 1 ) NOT NULL DEFAULT '1', is_archived INT( 1 ) NOT NULL DEFAULT '0')5!I# indexsqlite_autoindex_item_member_1item_member� ##�Etableitem_memberitem_member
CREATE TABLE "item_member" (
	`item_member_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_id`	INTEGER,
	`uid`	INTEGER,
	`username`	TEXT,
	`addtime`	INTEGER DEFAULT 0
, member_group_id INT( 1 ) NOT NULL DEFAULT '1')P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直接下载`	INTEGER
)   & &O��J                     � +�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cook'); indexsqlite_autoindex_item_1item�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)� +�tablecatalogcatalogCREATE TABLE "catalog" (
	`cat_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`cat_name`	TEXT,
	`item_id`	INTEGER,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, parent_cat_id INT( 10 ) NOT NULL DEFAULT '0', level INT( 10 ) NOT NULL DEFAULT '2')-,A indexsqlite_autoindex_catalog_1catalog    �  �5^�                                                                                                                                                                                                                           �G-�qtablepagepageCREATE TABLE "page" (
	`page_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, page_comments text NOT NULL DEFAULT '')'.; indexsqlite_autoindex_page_1page�f/%%�tablepage_historypage_historyCREATE TABLE "page_history" (
	`page_history_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`page_id`	INTEGER,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER,
	`addtime`	INTEGER
, page_comments text NOT NULL DEFAULT '')70K% indexsqlite_autoindex_page_history_1page_history� � ����dP<(�����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               	adminY��� -759290857@qq.comYݳ� -759290857@qq.comYݳ� 	adminY�V- 	adminY��% 	adminY���
 	adminY��	 -	
759290857@qq.comY� � 	adminY��{ 	adminY��� 	
adminY��� 		weekendY��� 	weekendY���   	weekendY���
� � ��������������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

		�       F�   ��������������������������~ytoje`[VQLGB=83.)$���������������������面### ShowDoc介绍
关于ShowD� %�madmin默认页面eNrVWE1PE0EYPnd+RU0TDqalKdJLOZl41MQ74bBtV6i227IfBsIuAaIGRaAmGvlIUBLQg9FCQkCRlP9iuls4+Rec7uy23Y+ZndmuWjZhO+w+7zvvzLzzzvNsIpFIxB+K1aJSkO+XJFkCt+NXjRNja+P3xY6x1WwfnOsbK/q3U2Oz3mruXp18bf04au88MzYOr5vb+uH764N663LfWG5AQ0UsQ6v0/JNiuiQU+bnR2kwt/YAXCzOcIKfvidx0VUg7OgMjZXniVioFFkAcXiOzSlWeqHEiV5FQOxdHb3pvZdn7pvdW5GeVksgXbQz6RfekD16er/FObDX/GA+vcHNOdCY7egcPf8qVFd4/3OABhQyUKQInWOAqFFhST   � %�uadmin默认页面eNrVWE1PE0EYPnd+RU0TDqalKdJLOZl41MQ  �q  �o  �m  l  Jk   �i   �g   �e   �`   �_   �^   �]   '\   �[   �Z   �Y   �X   �W   �V   �U   �T   �S   �R   �Q   �P   �O   �N   �M   �L   �K   �I   �H   �G   ^F   �E   �D   ,C   j@   �?   k>   �=   �<   �;   r:   J8   m7   q6   s5   z4   ]3   �2   �1   e0   �/   �)   o(   K   b'   y&   �$   �!   !   v   �   u   U   �   `   �      7 7�                    �=.    @�*                                         �=.    ��*                                         �=.    p�*                                        �=.                                                   �=.    8C?    I                                   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )�f2�tabletemplatetemplateCREATE TABLE `template` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `username` CHAR(200) NOT NULL DEFAULT '',
        `template_title` CHAR(200) NOT NULL DEFAULT '' ,
        `template_content` text NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )      0�=    ��=    0X\                  Y       �*�     �*�                    Q       0        �=    ��=    0�=                                            �      Q       �)�     �)�     �=    ��=    ��=                                    1       X       ��=                                  1       �&�     �n5    Y       �                      ��=    X�=    0�=     �=                            1                     ��=                   Y       0                     H�=     �=            ��=                            Y       �      �              ��=    ��=    �=    ��=                            1       �E      ��=                          Y       �E      �              (�=    ��=    �=    ��=                            !       F      :       X�=    �      !       x�=    x�=    H�3                    1       ��=    ��=    H�3                    ��=    @�=    0X\                  Y       �*�     �*�                    Q       0       ��=       0 ���hF��l;��zX0                                                                                                                                                                                                                       - 7	游戏（随意碰）weekendY�& %	量学小筑adminY�O�Y��  	文档adminY��Y�9& %	考试系统adminY�'Y��1 7	论坛（管理端）weekendY�H�Y��1 7	论坛（用户端）weekendY�K�Y��1 7	游戏（常量表）weekendY��fY��5/ 3	游戏（Game端）weekendY���Y��]1 7	游戏（管理端）weekendY��Y���1 7	游戏（用户端）weekendY��RY��,8 -%	推荐系统 API推荐系统weekendY�Y��8
 %-	酒店管理酒店管理 APIweekendY��hY��- 	 	gitlabadminY���Y��1 	gitlabadminY���' '	showdoc说明adminY��Y��[# 	API文档adminY� �Y���* %	测试用例testadminY�V�Y�i�    q k7f� qE   7                             i#}W indexsqlite_autoindex_sqlitebrowser_rename_column_�w7�Atableitem_topitem_topCREATE TABLE `item_top` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `uid` int(11) NOT NULL DEFAULT '0' ,
        `addtime` int(11) NOT NULL DEFAULT '0' 
        )�I3�itableoptionsoptionsCREATE TABLE `options` (
        `option_id`  INTEGER PRIMARY KEY ,
        `option_name` CHAR(200) NOT NULL UNIQUE ,
        `option_value` CHAR(200) NOT NULL 
        )-4A indexsqlite_autoindex_options_1options�b5!!�tableitem_tokenitem_tokenCREATE TABLE `item_token` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `api_key` CHAR(200) NOT NULL UNIQUE ,
        `api_token` CHAR(200) NOT NULL ,
        `addtime` int(11) NOT NULL DEFAULT '0' ,
        `last_check_time` int(11) NOT NULL DEFAULT '0' 
        )36G! indexsqlite_autoindex_item_token_1item_token   �   g�������������������������~ytoje`[VQLGB=83.)$����������������������ysmga[UOIC=71+%���������������������}wqke_YSMGA;5/)#         c�  X�  ��  	�  N�  A�
  9�   �  <�  6�   0�  �~  /�{  �z  �y  (�x  &�w  �v  �u  �t  ��s  �p  �n  ��m  �j  ��h  �g  �b  �a  �`  ��_  �^   ��\  ΁[  ԁY  F�X  ��V  ��U  ��T   N�S  V�Q  ��O  ��M  �H   }�G  ��F  ��E  ��D  �C  ��B  ��?  S�;  P�9  �4   ��3  ��2  o�/  D�.   ��-  Y�,  C�+  ]�*  0�)  �(  W�&  U�%   @�$  ^�#   ��"  `�!  �   �  :�  �  p~  m}  k|  H{  jz  gx  fw  ;v  3t  .s   �[  <Z  Y   �X   �M   |L  
K  	J  H  F  D   �C   CA   0@   �?   />   �=   �<   H;   A:   �9   )8   �7   +5   �3   �2   >0   7.   E-   D,   ;+   x*   a(   �'   Z%   L    �   Q   �   �   �   p   �   �   X   
   	     f�*   �   ��������������������~xrlf`ZTNHB<60*$ ���������������������|vpjd^XRLF@:4.(" ����������������xph`XPH@80(   �     � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �~~}}||{{zzyyxxwwvvuuttss``[[ZZYYXXWWMMLLKKJJHHGGFFEEDDCCBBAA@@??>>==<<;;::998877554433221100//..--,,++**))((''&&%%$$##""!!    �  � � �
                                                                              	�            p:!    	�            H=!                          	�            �8!                                                                    	�            >!    	�            �=!                         	�            89!                                               w =                                                          XL    h8!                                        XL    >!                                        XL    �=!                                       XL    �2!                                        XL    89!                                        XL    �9!                                                                                                                                                                                                                                                                        
   � �����������������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  

				   �   ���}aD-�����jS9�����eH+ � � � � � e                         8 %意见反馈cY�-�7 %通知私信cY�-�6 %最新动态cY�-�5 %在线抽奖cY�-�4 %试卷管理cY��33 管理端cY�>2 用户端cY�80 %帖子模块Y�Qp/ %论坛管理Y�Ik. %用户管理Y�I\- 	首页Y�IA, %帖子管理
Y�I9+ %个人中心cY�V�) 搜索cY�V�& %	登录注册Y�L�% 活动Y���# %抽奖管理YĈ�" 排行榜YàK 交易Y��� %	登录注册Y��� 	登录Y�� %用户管理(Y��! 1核心参数管理cY�� %商品管理
Y�� %暂时无用cY�,�
 积分Y��	 交易Y�ڂ %用户信息Y�Խ %	登录注册Y��|$ 7房间及房型设置
cY��%$ 7房间列表及信息
cY� 		afscY��� 		fsdcY��� 	ac  �8
   2� ������������~�������xlf`ZTN��HrB<60*$ �������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          HHGGFFEEDDCCBBAA@@??>>==<<;;::998877664400//..--,,++55))%%##""&&2233

				
� b� ��������������������~xrlf`ZTNHB<60*$ ���������������������|vpjd^XRLF@:4.("
��������������户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|rrqqppoonnmmllkkjjiihhggffeeddccbbaa``__^^]]\\[[ZZYYXXWWVVUUTTSSRRQQPPOONNMMLLKKJJIIHHGGFFEEDDCCBBAA@@??>>==<<;;::99887766554433221100//..--,,++**))((''&&%%   $$##""!!     �   q�~�Y � � 8    	�� 	          �K�    ^
 ]a27331a1657d55893369025b520e9b12b831578819d7e91d6c0181b7bc4dbd8118d96e4861678998238Y��u^	 ]ab7b670edde2bd92518d531d12985aaf68346512396d23f963813413ba2958cc5911cdbf41194806275Y���_ _a
72c9f952c1c4532912e95794c09425a14903739487732ba6a389367c625d97fcd184f6cc41670174498Y���` aa1beb1ee4bea292a49ce7736c872b303712349711267060dc5b64035395b64d8db5f65ac78e1392741062Y���_ _a32b509669d37bba7c6b1b0bafe009dda5428508638f2faaec6b2e0c761e0c08d0cf8a94bc2033990420Y�V` aaacb2ce0e9aaf99b01ed678e7b3c175531659330213f7b17d173f8801901c6880a5e4cf540d1113165123Y�C$^ ]a76f6f5ee0a2122c19955d2af4f9b089b6822905179746ab4f87c094adfe1de15255ed7f31338044338Y�B�` aa66318c278381e05688206f4037e2c3df1338326829f576153f21eb70037580a8286963556d1963658658Y�B�_ a_a3ec382f2d9cd6c053a3c6d00ec4ac842135745228cf68db2204ce3c262dea75bb7c1c4057129239132Y�B�] 	__03a16e636dbe8e9be8c36cbc571fa0cd964096031093ad7477796d73cf8108948c30a37a140264404   9

    ��y�4�u�H�K�a                                                                                        Q     ؾ���  �ќ                            B                     *                                              "                       %       Y    -_e8f0f567ea576a0f7a11585b2e3e7c10219621303-_9c9236b5816669fa234f8b0a323b9546795076651.a2350f3003c8735a9bf6dd044a9dc5eaf1881137139-_240f0afeb1552624b9cc9653266ba90f166461180.a920baa75b4dd1091d326583341b8eb801130950738.ad463793acd3e790374cc6949278708261526764975,]27331a1657d55893369025b520e9b12b83157881
,]b7b670edde2bd92518d531d12985aaf683465123	-_72c9f952c1c4532912e95794c09425a1490373948.a1beb1ee4bea292a49ce7736c872b30371234971126-_32b509669d37bba7c6b1b0bafe009dda542850863.aacb2ce0e9aaf99b01ed678e7b3c175531659330213,]76f6f5ee0a2122c19955d2af4f9b089b68229051.a66318c278381e05688206f4037e2c3df1338326829.aa3ec382f2d9cd6c053a3c6d00ec4ac842135745228,_	03a16e636dbe8e9be8c36cbc571fa0cd964096031   � ��                                                                                    �    ���    ؠ�              � �      �3��3�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      00000                    �/                            �/                            `��G                                          �                     ��������                �              �      ��     ��      
          !                                                          Y�� Y�   � � � 1                                   �   !�max&lt;min#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "pa   ���   	%�默认页�~�z�x 	%�7admin默认页面#### ProductLists2

* 说明：显�5   	%�+   	%�)默认页面#### ProductLists2

* 说明：显示厂家提供购买的接龙套餐信息ff

* url：`/ykd/index.php/Merchant/Dragon/ProductLists`

<!--
{
    "params": {
        "staaatus": {
            "value": "afdsfdsafasdfasdfsdafafsadfsadf",
"len":100,
            "required": true,
            "type": "string",
			"max":"90",
			"min":58,
            "desc": "状态码"
        }
    },
   ���
   	%�g默认页面#### roomListByService
* 说明：服务视图信息列表
* url：

<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"floor":{
			"type":"array",
			"value":[1,3,45],
			"de   �    �  � �                                                                                                                         �x   	�E	int/floateNq9VE1v00AQPXt/RXBuqG5aaKkUVT1xBIl71cOSWK1F45i1jVp1EzUBJCA0zQHU0EoFpFacIK1UFQiQ/Bfkj+bEX2DstR1/ioRDV0o0nvd2Z2Zn3+Tz+XzuAamW9ZJ2T1I1Fd3MXfUurG77z89DqzuwT/pmu2l+ubT2O8bg6Oris/H9zD58ZrVPR4N35unB6KRjDD9ajR5s1Mkm7CpsPyoXJLksbs0qG0rhvkhKG1jWCncJXq/KhUgwtHxDENAOysHiFUxwReWLOfbt+lQNY6zpUa+LPMGbugjuxcVb8zNRqIK3PGD29p04Jsk+NrcUw4j4WJeIWAaCRnQxhmrbihOPl2SNj0FlUS05kP3q0tpt2B8afIDXXKvGNkAEVanKqpgoctoSJ0tV1Ygkr0+T7ZjKK6xRKXlNFhwTkhm5dTB6+svq9uIEv+LViNtZOwmPu0HGFRYMx44aM/SKe4UJtBbxrKXegUgI3GF2ZxYWru8JoRoShBUEOjP3m9bbMwSLMtPs7FFz+Hy0+5La5z/M4xZlGqaIFgVY7j/1f4jW63VfWGA6n9ALz4LcHAs0VOQ9CfHGtz0gAMJOn19+SFZASB5hbilOcPCgEOSOlK/WeROGiTFoIQTng+Y5lFQ4x6GM1x9GYvqOQFF5h6FEa8JgtDNhJKMxiKsh6IhTCpQ3fGMeHf9/P9gAoHCFlEmWBtHG10h9Qbo8UBcNZBQYiP5+8d7RhH9WsMnov7b7n7yX47L0yj9I7PG7JLiWtJSC0rM6O11fJ+pQMNMma9KMn01knE0dlQ2z1JChWZZW5ip4ORQdZVzclZxlGZS0YeZwx8MMvtYSxYfmWFqOzhi7Dqn8BdZqjdg=cY��� �  � � � �                               �x
   	!�Gmax&lt;min#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant   w     O   	�#len长度#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/   k      	!�gmax&lt;�.	   	�5int/float#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
        "name": {
    �Y   %�默认页面#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
        "tt": {
  
            "type": "obj",
            "max": "15.3",
            "value": {
                "tt": {
                    "type": "obj",
                    "value": {
                        "name": {
                            "type": "arr",
                            "value": [
                       �    �  �F                                                �9	  �3	   	�?int/float#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* �N	   	�uint/float#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
        "name": {
            "value": "23",
            "max": 552.16,
            "min": "dfsad",
            "required": true,
            "type": "float",
            "desc": "233"
        },
		 "age": {
            "value": 5552.1,
            "max": 552.1,
            "min": 5521,
            "required": true,
            "type": "int",
            "desc": "年龄"
        }
    },
    "response": {
        "status": {
            "value": 1,
            "required": true,
            "type": "int",
            "desc": "状态码，0成功，1失败"
        },
        "products": {
            "required": true,
            "type": "arr",
            "desc": "狗�   �   � �F                                                                                                                                                                                                                                                                                                                          �e   	�#len长度#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/   k�;
   	!�Mmax&lt;min#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
        "staaatus": {
            "value": "5521",
            "max": 552,
            "min": 5521,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    },
    "response": {
        "status": {
            "value": 5521,
            "required": true,
            "type": "string",
            "desc": "状态码"
        },
        "products": {
         {   
 : �?��] � � :                              _ �)674d2f3e1fc75cba96fee67af9baf3a9ddba5f98ddd0aced66f542eb92eff866Z)119.129.87.207Y��_
 �)67d218b3a573641ae2b92710ca15ffd53fd02cff732115acb908ebbd74012fcbZ��113.119.37.190Y���_	 �)8e78c956ac5c3edf6c778cc5a4151fe7c75bfdead16a2aa07ecae13b43b0256bZ�8113.119.37.190Y��8_ �)473afaef1c8d26c465819f4c14fce370d830fa3c17419c1d786b473f6af16c41Z��113.119.37.190Y��_ �)1a0deaafd7ece451dd9b2e2ce5fbbb47ca97df94765f80bf8aa421cba30cfd40Z�M113.119.37.190Y�PM^ �'71b88ef70b862063750647e6e3727c000fcff7ecfd22fc82c89fda4231322e34ZG58.61.240.250Y�^G^ �'0612d8619880fdd23873ab5cf69639fe75d879f98d68e92608cd77845d9eebf5Z�&119.129.84.94Y�&^ �'9c0947e7482282fa061d2ea89de56a76134f2fa728645d643b091915a184beaaZ�A119.129.84.94Y�A^ �'43e75f7b2ad0766948e48bf9aae36936773da09f2189004146c651be7ddb7772Z��119.129.80.92Y�U�_ �)6b902cd891be438848af6478dfc987cca400e5da74ae66460cf40954923469ebZ�u113.111.169.19Y�&u    �  �                                                                                                                                                                  �Q   	!�u
max&lt;mineNq9VF1P01AYvu75FbO7M8wFwm4WwpWXmnhPuDiuDTTSrp62BsLpwqYm6mTsAsOEBCGBeKWDhKBO3f6L6Qe78i/49tR2/UTAhJO0OX2e9/T9Os9bLBaLhUekLhg1/YGk6Rq6W7jonzm9zu8fu05v6B4N7E7L/nzubHWt4d7F2Sfr24m7+8LpHI+H7+3jnfFR1xodOs0+HDTICpwqrz0RypIiiKv31GW1/FAktWWs6OX7BC/VlXLMGZq7UyqhdVSAxauYYFnjqwX/m2GajjHWjTjKmGd4xRAB5isVYWaan4qzMl4FrlKZmU4SkpJNEPGpIRFRAFYnhphg9TWVOZMUPelKELWaR7lvzp2NpnvQ5EPeZDvTPwAeNLWuaGIqw0vzu3Gomk4kZek60U5MedXvUkZcV3OOCcn13N4ZP//p9PpJgyDjhRjsrfUUwg4oWPad4cSvJhaGzEqYYs0YsphZA5EQqGF+Z2Znb+8KIROVSvMIRGZvtZx3JwgW9bd2d5Pao5fjjdfUPf1u77epL2CKaLUEi71p8CAaSIpCCygEQ1k+VSYj6+smoADOPSbzYTSIDYUvzmkLxoE1bCPUaDRAtRxKa5TjUL5Eo2RUoTE8ItAonipulIzXNsrklBZxJoKaenlAbqNte2//vyoa1NMXHQ29TWpIA0kxO9AHDYUQbhD99eqDd6uDf4WHrMFbd/Dxb++ZlSH/w8i/vmGXM0IKU89r62VNvWGHwql0tSZNBdHEBtK1vfrjKNNlZBplpbkAKIfiw4hLQulplGOSNY4828k4gq/FVPKRSZQVozeIbkMqfwDyjHFOcY��`   #p://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)   $     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�    ��：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


W:��                                                      �  �                                                                                                                                 �j +�adminAPI标准模板#### ProductListse3
* 说明：登录

* url：/ykd/index.php/Merchant/Dragon/ProductLists
&lt;!--
{
    &quot;params&quot;: {
        &quot;users&quot;: {
            &quot;type&quot;: &quot;string&quot;,
			&quot;required&quot;:false,
            &quot;len_max&quot;: &quot;e32&quot;,
            &quot;min&quot;: &quot;8&quot;,
            &quot;value&quot;:&quot;fasfasdf&quot;,
            &quot;desc&quot;: &quot;账号&quot;
        },
        &quot;pass&quot;: {
            &quot;type&quot;: &quot;string&quot;,
            &quot;len&quot;: &quot;32&quot;,
            &quot;min&quot;: &quot;8&quot;,
            &quot;value&quot;: &quot;147852safsfavav&quot;,
            &quot;desc&quot;: &quot;密码&quot;
        }
    },
    &quot;response&quot;: {
                &quot;status&quot;: {
            &quot;type&quot;: &quot;int&quot;,
   �  ": "房间 ID"
					},
					"room_number": {
						"type": "int",
						"value": "1",
						"desc": "房号"
					}
				}
			]
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|token|string|是|token
|type|string|否|搜索类型:room_number搜索房间号（对应返回response2）
|key|string|否|搜索关键词

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "type": "room_number",	
    "key": "10"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|response1|arr|否|返回结果1(房间视图搜索返回)
|∟floor|obj|否|---
|∟∟num|int|否|楼层
|∟∟name|int|否|楼层名术语ID
|∟∟room|arr|否|---
|∟∟∟∟room_id|int|否|房间ID
|∟∟∟∟room_number|int|否|房号
|∟∟∟∟occupancy|int|否|是否有客户入住0否，1是
|∟∟∟∟clean|int|否|／／打扫状态：0没，1有
|∟∟∟∟disturb|int|否|温度，摄氏度
|∟∟∟∟temperature|int|否|是否允许打扰：0否�    �  �                                                                                                                                                                                                                                        �\ �Uadmin登录APIeNqtVM9rE0EUPuf9FevkJllDU8USak8eFbyLyJidtIvJZp3ZDS1OQ1uoB4smYAOtSlHUXkTWQjBgtf1nnE168l/w7U667m5MUXDYHzPv7XvzfW++t8VisWjc4S3Lr3m3bOEJNg+XjXEwCPee//z2crR/rL73AU0+b+C6vPbQKtuOxVavuCtu+TbjtRXqeOWbnC63nHI6ESxeMk14DAYO4lJOm4JUDb2Obb5gPGuKzd6ay9BKhMdtZ5mUoFAoEM4e+TZnFqnWaUOwUjakwZz7TboaRbH5Csl5m7YTeRby9jZt+LgTqVOBl1XP+y0malHgeHCoukOSONd/f4e8xN9QyKONnP8M1CBzV68vXKsIWkfAbdqeBVgFT0ZvNlOAIQUbSyncliPYFOzYKzzq+RdQsh0vv62LGZmHzrtT6eZKU6ZKxnJvJtVZ5EZPv4Qbm1l+qQNhnGPV/9uRJHh0Tc9298dBMAua9obd3uj916nqwzqY5lLUSaq7FfY/Aw6pp6r3TI6OjtXBjgz3AtU7VKfb6u1HqbtQgqyaOOKnPL9BdjqduIPwHc01sckCc0SzSV/c0F0xDobjkxdq+0P46V3YH+DGiw/4EshIw1KHSwyUmirEv4FheLSFbH6c7ABgRmznAmSaN909BUj3xJRaAUsQ5cC8p7vq1UG2AMj57PXGeR0upq5FKlGLMeBEEiD18afZpA8Fkr3/yCnRfqy+iTERVFYCEzK/AGwaqtI=cY���v0.6  � Method：POST
* url：/pp/v1/Client/Profile/showFriend


<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101du43hu9gube39gh3",
                "required": true,
                "type": "string",
                "desc": "登录凭证"
            }
        }
    },
    "response": {
        "type": "arr",
        "value": {
            "type": "obj",
            "value": {
                "uid": {
                    "value": 101,
                    "type": "int",
                    "desc": "用户ID"
                },
                "nickname": {
                    "value": "wk",
                    "type": "string",
                    "desc": "昵称"
                },
                "icon": {
                    "value": "http://www.fairy.com/fairy/zm.jpg",
                    "type": "string",
                    "desc": "头像"
                },
                "sex": {
                    "value": "1",
                    "t   � �                                                                                                                                                                                          �)8 �#8 7�u	week�8 7�M	weekend登录用户的信息#### showInfo
* 说明： 登录用户�>8 7�+	weekend登录用户的信息#### showInfo
* 说明： 登录用户的信息
* Method：POST
* url：/pp/v1/Client/Profile/showInfo


<!--
{
    "params": {
        "token": {
            "value": "101du43hu9gub�V8   7�k	登录用户的信息#### showInfo
* 说明： 登录用户的信息
* Method：POST
* url�k8 7�	weekend登录用户的信息#### showInfo
* 说明： 登录用户的信息
* Method：POST
* url：/pp/v1/Client/Profile/showInfo


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101du43hu9gube39gh3",
				"required": true,
				"type": "string",
				"desc": "登录凭证"
			}
		}
    },
    "response": {
		"type":"obj",
		"va  �   -lue": {"afsd":{
			"value":1,
			"type":"int",
"desc":"dfdsa"
			}},
            "desc": "楼层"
		},
		"room_number":{
            "type": "int",
            "value": "11",
            "desc": "房号"
		},
		"occupancy":{
            "type": "int",
            "value": "11",
            "desc": "是否有客户入住 0 否， 1 是"
		},
		"service":{
			"type":"arr",
			"desc": "服务视图",
			"value":[{
				"name":{
					"type": "int",
					"value": "11",
					"desc": "名字术语ID 如： 11：勿打扰"
				},
				"val":{
					"type": "string",
					"value": true,
					"desc": "状态： 'true' or 'false'"
				}
			}]
		},
		"vip":{
			"type":"arr",
			"desc": "特殊服务",
			"value":[{
				"name":{
					"type": "int",
					"value": "2",
					"desc": "名字术语ID 如： 2：VIP重要客人"
				},
				"val":{
					"type": "string",
					"value": true,
					"desc": "状态： 'true' or 'false'"
				}
			}]
		},
		"sensor":{
			"type":"arr",
			"desc": "传感器状态",
			"value":[{
				"    � u � ?                                �6   %���6�6   �s注册#### Reg
* 说明：注册
* url：


<!--
{
    "params": {
		"phone":{
            "value":729,
            "type":"int",
   (�5   	1�a教育系统评估

一、edusoho  熟悉其框架并修改他所有的限制至少需要两周时间

二、与moodle框架对比

1.EduSoho   2�4 	�aadminEduSoho####EduSoho
	*授权费20万，不包含插件与直播，有基本的功能（课程管理、班级管理、课程发布、购买/支付、学员题库这些最近的）	
	视频点播、直播模块和内容管理模块要单独购买
	商业版本的插件 也要单独购买
	
	平台还是非常稳定的，13年至今，版本更新也还算健康
	而且，一直播（微博合作直播）也是用的这套系统，网上对这套系统的评价也还值得信任，就是价格颇高
	
	**总结：
		源码贵，但是系统稳定，有相当的用户基数，
		直播 价格基本上都是 20元/人/月
	cY�!^    = . � =                                               � C   	�U	int/floateNqtVEtP20AQPmd/RercKpJgUIoUIU49tlLvVQ+GWBA1cdK1XYHYIAK0QjxCqlJBAPGQSFupagNSBCWF   ��xB   	�E	int/floateNqtVVtPGkEUft75FXR5awRcDTUhxqc+tknfjQ+rbJRUFrqXRuNoQG1jvSBNbbzGSyJtk6ZFE6KVKv6XZmeBJ/9Cz+wA7pVK4ybAc   ��OA   %�e参数说明eNp1UcFu00AQPe9+RbS9ulKDxMUHJI7c+AUn2UIqNw62A0XIkWmD1CpQc0jU0JZCaJsiIHGQIuEkrvIxZDf2Kb/A2GtbzgFL9s7Mvjdv/MZ4rr2qaOXC46dPmHPIu+PgrsWOPxWLGNMDZb+u0rV/jpvNJn6DESmXiVyAAB74EPN1nUKBaKU9IiW1l4raoCkKCMAQBKLTF42qTitENvUGFTWV1oj8cEcS2b5ykM+q+bsNLVFKpER7RCqVLEZEUYhclNKsVCLygySxxGnF48avJU4LW/GP4sQId8J7p9HfR9Jr/z1C4mL1e86u2lGBLd6x/k+E1v5xtWZKu6qmmJJh6tXaMwnmlBRdX/snOJ4zZTPbRymxEAVhf770Tpk7ZbNOpLS68Fa/BtA+aN+yYY9dfgdb/tpvwQ4oCgIU+aXNbu6gWxSMHQiW03Z4NsFgKeyCDc+gS9hdsNlAQuHnq3RW5vwIju55z+XDa96dwEQY+oMDWUOUh2co0M4BY8E8sLCJTHeNQIh9HCSgPFzMATHzjti4A+2AF857wehmV1ENiivUKKemcccJFuNNfmxYspHzltgWruvUoCb6v2zU7MMo/NZa3Y9AkLsdNjg0TMVsGGKipTfbAbeLUrauzHLBCu2TsD9desPt7Ud4K3D/8Gubf7ndM7Qa/+oz39n6B7++lys=cY�U111   .name":{
					"type": "int",
					"value": "3",
					"desc": "名字术语ID 如： 3：房间有人"
				},
				"val":{
					"type": "float",
					"value": 25.6,
					"desc": "数值或状态： 'true' or 'false'"
				}
			}]
		},
		"device":{
			"type":"arr",
			"desc": "房间电器",
			"value":[{
				"name":{
					"type": "int",
					"value": "4",
					"desc": "名字术语ID 如： 4：走廊灯 开启"
				},
				"val":{
					"type": "string",
					"value": true,
					"desc": "状态： 'true' or 'false'"
				}
			}]
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:----|:---|---|---|
|floor|obj|否|楼层
|∟afsd|int|否|dfdsa
|room_number|int|否|房号
|occupancy|int|否|是否有客户入住0否，1是
|service|arr|否|服务视图
|∟name|int|否|名字术语ID如：11：勿打扰
|∟val|string|否|状态：'true'or'false'
|vip|arr|否|特殊服务
|∟name|int|否|名字术语ID如：2：VIP重要客人
|∟val|string|否|状态：'true'or'false'
|sensor|arr|否|传感器状态
|    ∟name|int|否|名字术语ID如：3：房间有人
|∟val|float|否|数值或状态：'true'or'false'
|device|arr|否|房间电器
|∟name|int|否|名字术语ID如：4：走廊灯开启
|∟val|string|否|状态：'true'or'false'

* 参数示例

~~~
{
	
    "room_number": "11",
	
    "occupancy": "11",
	
    "floor": {
		
        "afsd": "1"
    
	},
	
    "service": [
		
        {
			
            "name": "11",
			
            "val": "1"
        
		}
    
	],
	
    "vip": [
		
        {
			
            "name": "11",
			
            "val": "1"
        
		}
    
	],
	
    "sensor": [
		
        {
			
            "name": "11",
			
            "val": "1"
        
		}
    
	],
	
    "device": [
		
        {
			
            "name": "11",
			
            "val": "1"
        
		}
    
	]

}
~~~
* 返回



|参数名|类型|必填|说明|
|:----|:---|---|---|
|token|string|否|token
|room_id|int|否|房间ID

* 返回示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "room_id": "105"

}
~~~cY�1   � �                                                                                                                                                                                                                                                                                                                                                                                                           �\>   	%�默认页面#### sysCode
* 说明：获取核心字段
* url：

<!--
{
    "params": {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": true,
            "type": "string",
            "desc": "状态码"
        },
		"type":{
            "value": "tag",
            "required": true,
            "type": "string",
            "desc": "获取数据类型：tag>获取标签列表； friend>获取好友上限数量； refer>三级分销奖励；coin_besic>货币兑换比例；vip>vip等级；points>积分等级"
		}
    },
    "response": {
		"ttt":{
			"type"   [    ^  ^                                                          �9@�5@�2@   �9骇@   �验证码#### sendSms
* 说明：发送验证码
* Method：POST
* url：/pp/v1/Client/LoginReg/sendSms


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"phone":{
				"value":18881888188,
				"type":"int",
				"required": true,
				"desc":"手机号码"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"0 发送成功, 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|phone|int|是|手机号码

* 参数示例

~~~
{	
    "phone": 18881888188

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|0发送成功,1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY݆�    ��具备很高的性价比；


总结：
Moodle的功能齐全，教学、讨论、作业等一应俱全。同时应用生态也比较完善，有各种扩展插件可用。
但不管Moodle的主系统还是插件，
对中文的支持均较差（插件基本全英文的），所以一般在国外应用比较多。


三、与Open edXedX框架对比
Open edXedX是国外开源项目，2013年的时候他们把代码开源了出来，也就是Open EDx。
因为edX是做慕课的，所以Open edX也主要适用于高校用来做慕课平台。
国内比如学堂在线就是用Open edX进行二次开发的。不过和Moodle同样的问题，作为国外的系统Open edX也没有中文版，
学堂在线是有专门的团队进行汉化和开发的，对于一般的人或机构来说门槛比较高。


四、eduwind、eduline
	二者均为国内项目，性质同edusoho差不多，用户较edusoho少很多，但是价格上eduwind年费在2万左右，eduline价格同edusoho差不多都是20万上下


cY���   3作为本土公司，广泛征集国内大学的开发需求，最了解国内的教育行情，因而能够提供最符合中国教育国情的平台。

2.安装过程相比Moodle更加简单，Moodle的安装过程相对复杂，而且配置起来很麻烦，同时，Edusoso的界面更加简洁、更能更丰富，互动性更强；

3.同moodle相比，EduSoho提供了更全面的一站式的解决方案，包括云视频、云直播、在线支付、微信支持等，大大减轻了开发者们的建设成本。

4.EduSoho的技术架构非常清晰、合理，其在、扩展性能非常强大，因为是基于云端服务器的架构，所以其服务器性能具备更大的弹性，只需要更改一些配置文件，就能随时随地扩大平台的容量以及并发性能，这个相对于moodle的本地化服务支撑方案，其动态扩展性能更加强大；

5.EduSoho采用了响应式的设计防范，能够轻松适配不同的平台，无论是在windows平台还是在移动平台上面   1，用户否能够获得很好的交互体验。

6.EduSoho提供了一整套的RESTFUL接口，通过接口，能够非常便捷地支持其它平台与EduSoho的对接；

7.EduSoho提供了开放的云平台，开发者可以非常方便地利用开发文档，以及EduSoho提供的基本云平台进行二次开发工作；

8.EduSoho采用班级组织形式，这是线下班级形式在互联网平台上的体现，能够方便师生之间的交流，这一点和moodle类似，可以解决学习者的孤独感问题；

9.EduSoho采用的是快速迭代，敏捷开发的模式，这样能够快速迭代出多个不同的系统版本，以满足不同用户的需求，这也是EduSoho能够在短短的两年时间内争取到近两万个客户的最重要的原因；

10.EduSoho的云架构及其安全策略决定了其安全，稳定的良好性能，同时EduSoho在强大的技术支撑之下，也注重教育理论的强化，因而具备很高的专业度，EduSoho虽然采取收费模式，但是�    string",
				"desc": "内容",
				"value": "哈哈哈哈哈嗝"
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|type|int|否|帖子类型：1、问答帖，2、分享帖
|posting_id|int|否|帖子ID
|reply_id|int|否|回复评论ID：评论（回答）帖子时为0
|content|string|否|内容

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": 1,	
    "posting_id": 12,	
    "reply_id": 1,	
    "content": "哈哈哈哈哈嗝"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y�I�    
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|token|string|否|token
|room_id|int|否|房间ID
|port|int|否|设备标识
|device_type|int|否|设备类型：1灯；2调光灯；3升降帘；4开合帘；5空调；6电视
|option|string|否|设备功能项：比如空调风量：wind;比如电视的开关：switch()
|status|int|否|设备状态

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "room_id": 1002,	
    "port": 12,	
    "device_type": "3",	
    "option": "wind",	
    "status": 1

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY�H   &1005",
									"desc": "房号"
								},
								"occupancy": {
									"type": "int",
									"value": "1005",
									"desc": "是否有客户入住 0 否， 1 是"
								},
								"clean": {
									"type": "int",
									"value": "1005",
									"desc": "／／打扫状态：0 没，1 有"
								},
								"disturb": {
									"type": "int",
									"value": "25",
									"desc": "温度，摄氏度"
								},
								"temperature": {
									"type": "int",
									"value": "1005",
									"desc": "是否允许打扰：0 否，1 是"
								},
								"light": {
									"type": "int",
									"value": "1",
									"desc": "灯状态：0 关，1 开"
								},
								"window": {
									"type": "int",
									"value": "1",
									"desc": "窗状态：0 关，1 开"
								}
							}]
						}
					}
				}
			}]
        },
		"response2":{
			"type": "arr",
			"desc": "返回结果2",
			"value": [
				{
					"room_id": {
						"type": "int",
						"value": "1",
						"desc    �  �				},
				"status":{�V.   =�c
房间电器设备信息#### �(.   =�
房间电器设备信息#### roomDeviceInfo
* 说明：房间电器设备信息
* url：

�9.   =�)
房间电器设备信息#### roomDeviceInfo
* 说明：房间电器设备信息
* url：


<!--
{
    "params": {
	"type":"obj",
	"value":{
	  "token": {
            "type": "string",
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        },
		"room_number": {
            "type": "int",
            "value": "1005",
            "desc": "房号"
        }
	}
      
    },
    "response": {
	"type":"arr",
	"value":{
		"name": {
            "type": "int",
            "value": "1005",
            "desc": "设备类型术语ID"
        },
		"list":{
			"type":"arr",
			"value":[
				{
					"device_name":{
						"type":"int",
						"value":"1005",
						"desc":"设备名术语ID"
					},
					"port":{
						"type":"int",
						"value":"1005",
						"desc":"设备端口标识"
					},
  {    r":{
            "value":"12",
            "type":"int",
            "desc":"目标用户 ID"
        },
		"tag_list":{
            "type":"arr",
            "desc":" 标签 ID",
            "value":[
				"123"
			]
        }
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|token|string|否|登录凭证
|to_user|int|否|目标用户ID
|tag_list|arr|否|标签ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "to_user": "12",	
    "tag_list": [		
        "123"
    
	]

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY��!   
 8 �@�~�Y � � 8                            ^
 ]a27331a1657d55893369025b520e9b12b831578819d7e91d6c0181b7bc4dbd8118d96e4861678998238Y��u^	 ]ab7b670edde2bd92518d531d12985aaf68346512396d23f963813413ba2958cc5911cdbf41194806275Y���_ _a
72c9f952c1c4532912e95794c09425a14903739487732ba6a389367c625d97fcd184f6cc41670174498Y���` aa1beb1ee4bea292a49ce7736c872b303712349711267060dc5b64035395b64d8db5f65ac78e1392741062Y���_ _a32b509669d37bba7c6b1b0bafe009dda5428508638f2faaec6b2e0c761e0c08d0cf8a94bc2033990420Y�V` aaacb2ce0e9aaf99b01ed678e7b3c175531659330213f7b17d173f8801901c6880a5e4cf540d1113165123Y�C$^ ]a76f6f5ee0a2122c19955d2af4f9b089b6822905179746ab4f87c094adfe1de15255ed7f31338044338Y�B�` aa66318c278381e05688206f4037e2c3df1338326829f576153f21eb70037580a8286963556d1963658658Y�B�_ a_a3ec382f2d9cd6c053a3c6d00ec4ac842135745228cf68db2204ce3c262dea75bb7c1c4057129239132Y�B�] 	__03a16e636dbe8e9be8c36cbc571fa0cd964096031093ad7477796d73cf8108948c30a37a1402644042Y��u    desc": "楼层"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"id": {
            "value":1,
            "type":"int",
            "desc":"房间ID"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:----|:---|---|---|
|token|string|否|token
|room_number|int|否|房号
|room_type|int|否|房型ID
|pps_ip|string|否|PPS板IP
|floor|int|否|楼层

* 参数示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "room_number": 1005,
	
    "room_type": 1,
	
    "pps_ip": "192.168.7.29",
	
    "floor": 1

}
~~~
* 返回



|参数名|类型|必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|id|int|否|房间ID
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "id": 1,
	
    "errstr": " "

}
~~~cY��/                              �]+ 1�mweekend
删除楼层区块#### delDistrict
* 说明：删除楼层区块
* url：

<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"id": {
			"value":1,
			"type":"int",
			"desc":"区块ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|id|int|否|区块ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "id": 1

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY��k    params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：正常, 8：token已失效"
			},
			"time":{
				"value":1512356438,
				"type":"int",
				"desc":"到期时间（时间戳）"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|status|int|否|状态码：0：正常,8：token已失效
|time|int|否|到期时间（时间戳）
|errstr|string|否|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "time": 1512356438,	
    "errstr": " "

}
~~~Y̛�    E4dj0nGERnLoEcCiFSSqjJShVJORcKcZzEW4QaU0IPijWX54DPoQfDxWLQZiZiGZH4mYwVKslZ0Zs5ee2NvHXg7WAQOb7FYvOylV6SKPMa/+OxkCZIG0EaDC5ewghSVYBU1EjmkLG2AEvFSG6k8E57mIZzywU4/swBUOndPiOh9C1ytIl0LSd5ahpOHH82HNAdspebVtlKIiCVWyooTojDefwdHB/eCdoOJqqzVqopGnl1R0yW9roVOZcRRYTR3py27x1Ni9XalXkGAQiHm5af73lGVn9TLqlxCvrpal7PA2RWCyem8PLGXVzqfV7CZ6UHFmsegKHMwxMzZazO71DmQVVXTVfYumJhItShlRU+yKN52BTOXuwOI/1qbq/a7Q0CP4f1rNV8b1tnzi+UXRufot7W7bng73gBjMoce99vw/8DQDav51UB3nIGfDzD+rn3SI2yu2bOjtXVi+cPo4/A6A+ENNF8GgrVPX3VOv3VL7cEcPhcJKxYjC3BJToAgS2g0GAbXFmH07A3GmwUfZPErd+CMNww+6Dpi413989M+WkXKp91aB1haWkICRQBMjggCMIgJbiGVCG7pMRIBG8aFiNBvoOaiYYjYFAAhRgQ2htIx4tC9HiHEQL2+IfDA+rQJvw+XQPHjse/OLoJOJoDh7I6brCWKv2AhcAeaVrnk3dHTK7z7o5eSZ38scu0PX7nwrzitGh6/UF0cToSSEZL5RRSbJAKl7ATupL4R0oZgtom0sUJNJGUgssUMEISQQcOKN4giIotIro0I/2QiCVIlhqROkAAPfFDuRm9efaMH7JfZxyEwHYWPsyMDigemy1oQkzl7a+3shvnox2U+PuppLZcsOfQroMAuq3KuiYBHecgQ80IcPxLiSxmeFD42Mgkd5KkFF4QYPpYkmCMq28OkJo2+TYUuaNbVTIghBoSmhkLbY5rcBiFRQ2OmfleGOEkD7u6DsMa8lJTZazOnoZfHxCWtRkdbJp4ST1nyrUL3AP8HnVGgNA==cY��Q    � 
 �) �                                                       �W/   1�q
调整设备状态#### editDeviceStatus
* 说明：�t0   =�
服务视图信息列表#### roomListByService
* 说明：服务视图信息列表
* url：

<!--
{
    "p  �k/   1�
调整设备状态#### editDeviceStatus
* 说明：调整设备状态
* url：

<!--
{
	"params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"room_id": {
			"value":1002,
			"type":"int",
			"desc":"房间ID"
		},
		"port": {
			"value":12,
			"type":"int",
			"desc":"设备标识"
		},
		"device_type":{
			"type":"int",
			"value":"3",
			"desc":"设备类型：1灯；2调光灯；3升降帘；4开合帘；5空调；6电视"
		},
		"option": {
			"value":"wind",
			"type":"string",
			"desc":"设备功能项：比如空调风量：wind;比如电视的开关：switch()"
		},
		"status": {
			"value":1,
			"type":"int",
			"desc":"设备状态"
		}
    },
    "response": {   5    username":"wk",
					"atime":"14700231021"
				},
				{
					"uid":"10",
					"utype":"a",
					"username":"zm",
					"atime":"14700231021"
				}
			]
		}
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|uid|int|否|用户ID
|type|string|否|用户的类型：a为A用户,b为B用户

* 参数示例

~~~
{
	
    "uid": "729",
	
    "type": "b"

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|total|int|否|下线数量
|list|arr|否|下线用户列表
|∟uid|string|是|list二级参数
|∟utype|string|是|list二级参数
|∟username|string|是|list二级参数
|∟atime|string|是|list二级参数
|∟uid|string|是|list二级参数
|∟utype|string|是|list二级参数
|∟username|string|是|list二级参数
|∟atime|string|是|list二级参数

* 返回示例

~~~
{
	
    "total": "729",
	
    "list": {
		
        "uid": "10",
		
        "utype": "a",
		
        "username": "zm",
		
        "atime": "14700231021"
    
	}

}
~~~cY��   � �                  �X�$   7�m"本地榜排行信息#### city
* 说明：本地榜排行信息
* Method：POST
* url：/pp/v1/Client/Ranking/city

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"type1":{
				"value":"month",
				"type":"string",
				"desc":"日期分类：total:长期, week:本周, month:本月, refer:推荐"
			},
			"type2":{
				"value":"points",
				"type":"string",
				"desc":"其他分类：points:分数榜,in_diamond:收益榜（钻）,out_diamond:贡献榜（钻）"
			}
		}
    },
    "response":{
		"type":"arr",
		"value":[{
			"ranking":{
				"value":"1",
				"type":"int",
				"desc":"排名"
			},
			"uid":{
				"value":"8",
				"type":"int",
				"desc":"用户ID"
			},
			"nickname":{
				"value":"1881888818",
				"type":"string�!�$ 7�oweekend"本地榜排行信息#### city
* 说明：本地榜排行信息
* Method：POST
*  �    "  "�                    �]�[: 1�iweekend背包物品信息#### showInfo
* 说明： 背包物品信息
* Method：POST
* url：/pp/v1/Client/Backpack/showInfo


<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		}
    },
    "response": [{
			"props_id":{
				"type":"int",
				"value":"1",
				"desc":"道具ID"
			},
			"props_name":{
				"type":"string",
				"value":"1",
				"desc":"道具名"
			},
			"number":{
				"type":"int",
				"value":"1",
				"desc":"数量"
			}
    }]
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|props_id|int|否|道具ID
|props_name|string|否|道具名
|number|int|否|数量

* 返回示例

~~~
[	
    {		
        "props_id": "1",		
        "props_name": "1",		
        "number": "1"
    
	}

]
~~~cY��    arams": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"floor_id":{
			"type":"int",
			"value":10,
			"desc": "楼层ID"
		}
    },
    "response": [{
			"name":{
				"value":1231,
				"type":"int",
				"desc":"分类术语ID"
			},
			"number":{
				"value":12,
				"type":"int",
				"desc":"数量"
			},
			"list":{
				"type":"arr",
				"desc":"房间列表",
				"value":[
					"1005",
					"1006"
				]
			}
    }]
}
-->

* 参数



|参数名|类型|必填|说明|
|:----|:---|---|---|
|token|string|否|token
|floor_id|int|否|楼层ID

* 参数示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "floor_id": 10

}
~~~
* 返回



|参数名|类型|必填|说明|
|:----|:---|---|---|
|name|int|否|分类术语ID
|number|int|否|数量
|list|arr|否|房间列表

* 返回示例

~~~
[
	
    {
		
        "name": 1231,
		
        "number": 12,
		
        "list": [
			
            "1005",
			
            "1006"
        
		]
    
	}

]
~~~cY���                                                        �?A   3�?
积分增加�"A   %�
修改积分#### editPoints
* 说明：修改积分
* Method：POST
* url：/pp/v1/Client/Points/editPoints

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"登录凭证"
			},
			"src":{
				"value":1,
				"type":"int",
				"required": true,
				"desc":"操作来源：1：赠送；2：签到"
			},
			"type":{
			�]A  �WA %�mweekend
修改积分#### editPoints
* 说明：修改积分
* Method：POST
* url：/pp/v1/Client/Points/editPoints

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"登录凭证"
			},
			"src":{
				"value":1,
				"type":"int",
				"required": true,
				"desc":"操作来源：1：游戏获得"
			},
			"type":{
				"value":1,
				"type":"int",
		  �   X X�                                          �3-�;,   1�9
搜索房间列表#### roomSearch
*�,   1�Q
搜索房间列表##�Z,   1�w
搜索房间列表#### roomSearch
* 说明：搜索房间列表
* url：

<!--
{
    "params": {
        "to�Y,   1�u
搜索房间列表#### roomSearch
* 说明：搜索房间列表
* url：

<!--
{
    "params": {
        "token": {
            "type": "string",
            "required": true,
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        },
		"type":{
            "type": "string",
     �,   1�u
搜索房间列表#### roomSearch
* 说明：搜索房间列表
* url：

<!--
{
    "params":�",   1�
搜索房间列表#### roomSearch
* 说明：搜索房间列表
* url：

<!--
{
    "params": {
        "token": {
            �, 1�Uweekend
搜索房间列表#### roomSearch
* 说明：搜索房间列表
* url：

<!--
{
    "params": {
        "token": {
            "type": "st   �   C C                                             �>-   7�9
总视图房间信息#### roomBasicInfo
* 说明：总视图房间信息
* url：

<!--
{
    "params": {
        "token": {
            "type": "string",
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        },
		"room�&-   7�	
总视图房间信息#### roomBasicInfo
* 说明：总视图房间信息
* url：

<!--
{
    "params": {
        "token": {
            "type": "string",
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        },
		"room_id": {
            "type": "int",
            "value": "105",
            "desc": "房间ID"
        }
    },
    "response": {
		"floor":{
            "type": "int",
            "value": "1",
            "desc": "楼层"
		},
		"room_number":{
            "type": "int",
            "value": "11",
            "desc": "房号"
		},
		"occupancy":{
            "type": "int",
            "value": "11",
            "desc": "是�      "type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"id": {
            "value":1,
            "type":"int",
            "desc":"区块ID"
        },
		"name":{
			"type":"int",
			"value":1,
			"desc": "区块名称术语ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|id|int|否|区块ID
|name|int|否|区块名称术语ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "id": 1,
	
    "name": 1

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY��F    "type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"name":{
			"type":"int",
			"value":1,
			"desc": "区块名称术语ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"id": {
            "value":1,
            "type":"int",
            "desc":"区块ID"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|name|int|否|区块名称术语ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "name": 1

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|id|int|否|区块ID
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "id": 1,
	
    "errstr": " "

}
~~~cY��� 9 9 A                                                     �i<   %�!	商品列表#### showGoods
* 说明：商品列表
* Method：POST
* url：/pp/v1/Client/Order/showGoods

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":[{
			"category_id":{
				"type": "int",
				"value": "1",
				"desc": "商品分类ID"
			},
			"category_name":{
				"type": "string",
				"value": "超值",
				"des   A�!; %�weekend购买商品#### buy

* 说明：购买商品
* Method：POST
* url：/pp/v1/Client/Order/buy


<!--
{
	"params":{
			"token":{
				"type":"str  r   %�Wweekend	�r< %�#weekend	商品列表#### showGoods
* 说明：商品列表
* Method：POST
* url：/pp/v1/Client/Order/showGoods

<!--
{
    "params": {
        "token": {
            "type": "string",
            "value": "101asdh8ferhf75gh857gh57g",
  ^    D+82FDQhFgvPxJz+FRNWnBniqWJW8NTT6X5poLpj9qJPjHGGDT3IapUi0dgtiRNo9iK2JyJhbnPUiLCUyhJSFsxxwYulxF4MhFrxSJmgU/OooRfVvSKGzVn/Y2zfejnrwgM0mKlchX7XmTfeLoxDqODwMhMOE4PUngS8kjmEkjp2ggucu7cGI7yGI74aEd/LCVh1FKRroTwl5bx2GFHsyGtEUupdbWlFGJ0ibWq6qooTQ5fwPHKfaU9ZaKm6I26quNnV9QNyWjqkUMZc1Ioxb13HbsZTomE2qwhQKmUsPjZoTVqypNmVVPcKmdoTSUHjEWhH5zuy1NnZbX7aTUUmQFUbPj9EyEGY7ScuzbRJcZA0TTd0OhZMDWValOqqsGzKX66gpXP3wHU/dpba867I0CP6f+1W69N+/z55coLs3v8y97bMP2MN8GczqPH+zWDL5iGYdqtLya65MzwAQHzz/rHuDn0cePtAdDuutqCcfSRJBPBTRQv00V1zl51z772fB2gyuV4VKWSaL/YR+AOyDJlwpuLmcT0RhdGW2GRskTaWnG8x39+OMdriPl02hsAy8vLiKAIEKYJggCU3iQ8gzOR8MygKRFCw7iFoQmiLRIG000A4GREoIMIVSMJPagTQgLUrx0CCwxrRNglGLqOQBv97uwhyM0EUIS9cYu2P8kXLPTFgcRVriA1ily5MTDJkhtLTLkRMBf2/SZ5wyIX8YtBCGMyAp9cjLM8Gghuc4gTdzqFDmqNSKsrUkFSKsLrywhKiNVnVH0jMCLcB35uhMnzkSRIZRh4hYADD2xQ5kJvXX2hh9CbNdRAhHhUeJyuGZA+sLyeBfUx52/t3b30/ajPtbxeye2++i2w11N5HWfQRvnISN+FevxYSEBlWEwE2FgjZJDPFjwQ6vBDRvoxIvZ6IapJ6t1mIhc07WrGyBAFQmJDkfSYxdMgQmpIbWlQlCGJ0oCXfRDlmP/FZO7axDSy+BC5JPnockvukPjMkm0Xegf4H9Fgmrg=cY�A�   5 5                                                                                                                                                                                                                                                                                                           �H8   %�]默认页面eNqtU0Fr1EAUPuf9ijh7k42xq2JZxJNHBe/iYdjMtsFtNs5MFovTpS3owaK7hxZalaIgvXiIhWLBqv0zTrI9+Rd8yXRjsnGLhw5JSL6XefN9732v0Wg07Ie870Uded8XUsBVexIfJbtvfn9/m+6d6B87iES8h5/u6hPP9QOPPbsWLofuA8Y7yzSQ7j1Ol/qBW8ly54rjwHOwcZGQcroiSNs23zkWCcYrSI7K1ZAhSoTkfrBEmmBZFuHsaeRz5pG25BFrVnf0WJBtuNEiM4EVPw8szuID2ovwDNKlAi+vOxv3mOhkGydHB3p0TIrg2t//UJAQ/0H+UojaZOHm7cVbLUG7SHhAB/MI6/hl+mGjRBhKtLGIIuwHgtVo51EhqYwukOQHcvbYEDMyicFHtXQLzRrUqiCP50m9Pk9c+uprsr5R1VdqCOMcq35pLSn4mJqebe9N4ngeNRNNRuP007da9WENHOcu4Ajp0Way8wVwKfOqx69Venii97dUshvr8YE+faE/flZm+hSotoMrf6rpDSqbG2XkZNuUsSmozJJTHHMpwxzyaT5ODjeR3K+fWwDD4RDH0oLyEJZnwYKyw2veAxSUpcC0p9v63X5VDio4e78+VXWxEGM5hc7K+RYNBmWaWRZTLjEUZ/9TUuHk3EvnYGGPakPPxfwBS7OPVA==cY�    m  m                                                                                                   �   	�ulen长度eNq1VE1PE0EYPnd+Rd3eTGtTAwkh6smjJt4Jh0m7gcZ2u87uGgjThhaJSgUaYtMKCWoC6EEtRFKxSvtfzH715F/w3R12u19FSsIkbWbe95l9v+Z5EolEIv6ElHJKVn6Ul2QJ3Y6bnVO9vfX3967e7hsHPW2rpn3r6tsNtb9nnn5Vfx4buy/0rcNh/5122BoeNNTBR73agYsKKcCt9PLTXDov5PilO+KimH7Mk+wiFuT0Q4IXSkLaFwzdu5VKoRUUh8WJmOCixM3G2dm2STLGWFb8VtvzHBcUHsyc/r2p7+zorSPYmI3P5sYXLumHFvESAKen72YCjgIvgCNoJfwzJU/4HLhkovABr7ws2mElmeSFhWCoHC9lLa+x0dVXq8aHKuf6y/auzC5AEEksCRIfKvfSYiNquKlsR1BOZCOLyOtqwTEhYyPXW8O1c73dCQKciud8ZmuthCz2BQEXWTAc+NQIoRTtFoa8ZZ9lPrIHPCHQw/GTmZq61lzygjz5E0JllEo9QMA4bbumN48RLMq2WmOTaoP14eprapz80vbrlLGZIjqbgmX/U+eHaKVScSgGW+sIs7jYsTdjHewih82B1jtSz3qZmaR6tmmunZvddXPwEkh0P+Mmi2wB+aGf1EA61H4dIfgAMDyGwnyOxdAV6exFetnstbtk9hpDU/A6Q+TwOseMAcXKCPpvFQWFDt5qe/vX7z6jO4WWU5YDdaONGkod+tk44BJ1SeNuEP3z6r3FAOdb7iW198bofbp4JzZKKf4HxJ66DYLnGZWSW/q4GV824fDkbmJISScbn3hNHJVJV2RIj3JFlTkH1hjyC1csaAor1xhIlHRZ2JF0wWk+VLxHtaJytERr4pYwyZqIKv8A14KdWg==cY��|    � " �                                                                                                                     �  1�Wweekend
房间类型添加#### addRoomType
* 说明：房间类型添加
* url：

<!--
{
	"params": {
	"type":"obj",
	"value":{"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"name": {
			"value":10002,
			"type":"int",
			"desc":"房间类型名称术语ID"
		},
		"data": {
            "type":"arr",
            "value":[
                {
       ?�S 	%�madmin默认页面#### roomList
* 说明：房间列表
* url：
<!--
{
    "params": {
        "token": {
            "type": "string",
            "required": true,
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        }
    },
    "response": [
	{
	
        "district": {
            "type": "int",
            "value": "1",
            "desc": "区块术语ID"
        },
        "floor": {
            "type": "obj",
        M           "value": {
                "num": {
                    "type": "int",
                    "value": "1",
                    "desc": "楼层"
                },
                "name": {
                    "type": "int",
                    "value": "1",
                    "desc": "楼层名术语ID"
                },
                "room": {
                    "type": "array",
                    "value": [
                        {
                            "room_number": {
							"value":1,
							"type":"int"
							}
                          
                        }
                    ]
                }
            }
        }
    }
	]
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|是|token

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|~~~0~~~|~~~~~~|~~~否~~~|缺失type<br>请填写value<br>

* 返回示例

~~~
[
	
    null

]
~~~cY��7  ic": "等级",
                "value": "少侠"
            },
            "exp": {
                "type": "int",
                "desc": "经验值",
                "value": "126"
            },
            "data": {
                "type": "arr",
                "desc": "",
                "value": {
                    "type": "obj",
                    "value": {
                        "desc": {
                            "type": "string",
                            "desc": "记录描述",
                            "value": "名字太帅了，奖励！！"
                        },
                        "exp": {
                            "type": "int",
                            "desc": "经验值",
                            "value": "50"
                        },
                        "type": {
                            "type": "int",
                            "desc": "记录类型 1收入；2支出",
                            "value": "1"
                        },
             	 � �@��] � �
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"requi]( �%ccbd865bbceb3ab59fb575dd60ff97f98e1d2241348c8b04129ba1773eb7bda0Zh� 58.61.241.78Y�� `' �+1627faf3e7e1c1336c7e2b1963d1fb2181b8594b25590c53e09f575a8fd545a9Zg��119.130.100.109Y�O�`& �+bada1de2b2e930e99b528311d370f71cbd6ec7cfe433023f64ad6f58c5f18130Zg�119.130.100.109Y�[�^% �'c2a759a5c9b68bdaf326781a757819d775f1eabbd226bf945ce8f3ee7824d261Z`�119.129.87.98Y�d�^$ �'fe43ed4b9ed79a4758f69ef23c0e3360222a6569db9cad37c8e034d25e4f5297ZU�!119.129.81.56Y�#!^# �'bf6f47c0b6b1b7dd78b5df68896faf59e4abc35c1b5570c84e9ef1e496b3111cZTZ�119.129.81.56Yݳ�_" �)8e22df2fa9eab0f4eee469d4ad8862553da3060d0b52556f0f4612209ec89ef0ZSh121.32.181.170Y��^! �'54b5b49384607da8e6b7586c305f3ac422f1ca41d4b8627a236d552bb4e5a60cZSf�121.32.181.93Yܿ�^  �'adc000b30687e2a89171446c76a6cc72df88ec806e9d2a2f000ce4bef8c150d5ZQ��119.129.81.56Y�E�    .168.7.29",
			"desc": "PPS 板 IP"
		},
		"floor":{
			"type":"int",
			"value":1,
			"desc": "楼层"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|id|int|否|房间ID
|room_number|int|否|房号
|room_type|int|否|房型ID
|pps_ip|string|否|PPS板IP
|floor|int|否|楼层

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "id": 1,
	
    "room_number": 1005,
	
    "room_type": 1,
	
    "pps_ip": "192.168.7.29",
	
    "floor": 1

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY�т  & &                    �[ �U %�iweekend
房间修改#### editRoom
* 说明：房间信息修改

* url：
<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"id": {
			"value":1,
			"type":"int",
			"desc":"房间ID"
		},
		"room_number":{
			"type":"int",
			"value":1005,
			"desc": "房号"
		},
		"room_type":{
			"type":"int",
			"value":1,
			"desc": "房型ID"
		},
		"pps_ip":{
			"type":"string",
			"value":"192   P      %�ad�[   %�
房间添加#### addRoom
* 说明：房间添加

* url：
<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"room_number":{
			"type":"int",
			"value":1005,
			"desc": "房号"
		},
		"room_type":{
			"type":"int",
			"value":1,
			"desc": "房型ID"
		},
		"pps_ip":{
			"type":"string",
			"value":"192.168.7.29",
			"desc": "PPS 板 IP"
		},
		"floor":{
			"type":"int",
			"value":1,
			"   :    ue":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"name":{
			"type":"int",
			"value":"12312",
			"desc": "设备类型术语ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"id": {
            "value":1,
            "type":"int",
            "desc":"设备类型ID"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|name|int|否|设备类型术语ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "name": "12312"

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|id|int|否|设备类型ID
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "id": 1,
	
    "errstr": " "

}
~~~cY��/    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"id": {
			"value":1,
			"type":"int",
			"desc":"房间类型ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|id|int|否|房间类型ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "id": 1

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY�٣                                                                                                                                   	},
		"name":{
			"type":"int",
			"value":1,
			"desc": "楼层名称术语ID"
		},
		"district":{
			"type":"int",
			"value":12,
			"desc": "所属区块ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|id|int|否|楼层ID
|num|int|否|楼层数
|name|int|否|楼层名称术语ID
|district|int|否|所属区块ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "id": 1,
	
    "num": 1005,
	
    "name": 1,
	
    "district": 12

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY��    %  %                           �X   	�	int/floateNq9VF9vEkEQf779FAhvBorWHiakaWLioya+Gx62cLYX4cC9O1PShQD+iYqlPGhK26TapNUHo7RJ0ypW+C7m7oAnv4K7e9zB/asQq5PA7c1v5mZmZ+YXiUQioXson1HTyh1RVmRwNTRonxitxq/zHaPV7R909EZN/3JqbDa17u7g5LP27ai/89RoHA672/rh1vCgqfX2jWqbOKooS7zixYeZuChlhLW5wmohfldA6VUoKfHbCK7kpbgjGFi8EouBdRAiEi5ABHNyOBky35lOViCEiurUMuQxzKoCUd/no4lU1Inl4BpBeH7++tyNhBsTJQu7dtOFIeGRKiIhQwwUpAouVCkWaMCwKClhF5QR5DSF+q9OjUq1/74atvFSFHAccRZkZT64CprP5RfB8wElPMjm4UxFgFEpowhyIS/JgqdVFzbKp8Tp7ltWkCitzHbltlnBHDefvKYLDhEKjFzfGj75YbTabgN7NB1qKuseDXOQYM4MBl2fGluoOXaFHrTk0KR870BAiNxhcGcWFv7HHpgjBEogFlsChC30zZrx9ggQweZRb25gvfdsWHmJ+8ff9b06NpkIA5yMEWH/2PoBbHEDJi3AJBnM6kneQggWta8bREuUi8toCeByucwWkDzpWW9+GJ3YItCzVfKgfabvf9Kfby/n81m9cs78GSmeGcc1Qodatw4A8SCsxQEvR3Ec8JkDbkJNhY96VAn7jUCpqONDLipwQE4mmIQ8XZwEnU2cRAJ6CDjKZGbFYzLzK9dc9EvNn+f9s7d4bLr8ARk+2jnSzd4bfXfvr0bPGjyTnbAdDWCLchhM+APbRAHwzxfv6LJbnrat1nnd73wcrQSzUnN/MDK32h7+cQJ2fUHTetGseps31RjZHD3jJDnoeeaoJjn7hpzg5ulWkoZ3qbzcHGDiR87UtuTYaU/xE7zslyOl5X+6z6N9+A27TdNfcY�Dc    u1ReOznxFTr2JmH9SilqV7K1npn1/md35hePx+Ox5ziXMUb1p4qma+hhrF6pWpurN5fb1mbNPrqgq3P0+6m1VjJrO/XqN/P82N6et1bLjdoWLW80jkrm9aFVrMBCA0/AquTUi0xSUTPyZHd+PJ98JuPRcUnVk0+wNJZTk57N0MCDRAJNoxgMMS9hKauJ/TH27dpUKSt7LK71lTRhOGax95HY5XVlpUlwpNO9qcd+j6IyT5/PgeWXhoLlDHh1bMg+rz6Vd7fSdKyoY/7tMrI26njFtnmmCwlCTJTGOuh25EXq7n4UqTzV3dNBfDodIV1R9Sjd9LzaqM1z6lEzh+bPtXxO1byZwElIuqFFZ5e61/l2EGkvnlqFon1QvLlc7rEWSnRxH2YpenRSr5Y9J99emmdVFqLybmokjCPVLG00Xl9ZmxV/QCv/IY/ZGdMBC1/coiT5fnUbYWTdiw14ZzyW4dAzkDGGou3QPebVgb1fbhQ/WAvv6e4X8T/0RWN9q16pADwAJIEqQzMokRhEQA66Nmd9PEYwCJvS0gqh128ahXfEPvlJ95YIoxJBpD8Bw32T1oOIc5QE7oQwOWCZnZ2FHoS3M6OlT80ZlJkza+VWr5zRw6/07dZILjdBC5cDI3gQWrFfbHaiaP5Ygd/CKiYj5QYoajOgp88f4PiRC9Ez62QOsjZrSwjBlkA5AXmZJggoAmm8x0M0j4MDGm8P3BvvDFwb7/TSDAkOy5jmFs7CJDOahUt2YRYqmrEsQreDsjDVDBJhknmQgXAEteUcOlzE9Trd2QtW1m7hbpXFaOfWFuxOOrIIkRZ33HiACGnTApFfC/t8mbZjzYtl++JzswXcKCP7hyDW2nzB842G2mmH1h/H77DrTN2jmqLv5Q7s5uvMw+2/lsGoHSqDg3ZY0kNgFZCX2YLfFIR2REgYtZ3YW2rD13AgeQ7YoWgI8vrftn0Q1red9BvcOQuEcY�Z�                                               �类型：tag>获取标签列表；friend>获取好友上限数量；refer>三级分销奖励；coin_besic>货币兑换比例；vip>vip等级；points>积分等级

* 参数示例

~~~
{
	
    "token": "101du43hu9gube39gh3",
	
    "type": "tag"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:----|:---|---|---|
|ttt|arr|否|（标签列表;type>tag）
|∟id|int|否|id
|∟value|string|否|标签名
|response2|obj|否|（好友上限;type>friend）
|∟id|int|否|id
|∟value|int|否|好友上限数量
|response3|arr|否|（三级分销奖励;type>refer）
|∟id|int|否|id
|∟column|string|否|第一级（最接近用户）
|∟value|int|否|奖励比例

* 返回示例

~~~
{
	
    "response2": [
		
	],
	
    "": [
		
        {
			
            "pid": "1",
			
            "id": "1",
			
            "value": "吃货"
        
		}
    
	],
	
    "response3": [
		
        {
			
            "id": "1",
			
            "column": "level1",
			
            "value": "吃货"
        
		}
    
	]

}
~~~cY�ZC   � � T                                                                        �:   	!�Kdesc测试#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
        "staaatus": {
            "value": 5521,
            "max": 5521,
            "min": 55.21,
            "required": true,
            "type": "string",
            "desc": ""
        }
    },
    "response": {
    �   	�len长度#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
        "staaatus": {
            "value": "法撒旦法萨芬",
            "max": 5521,
            "len": "a",
            "required": true,
            "type": "string",
            "desc": ""
        }
    },
    "response": {
        "status": {
            "value": 5521,
            "required": true,
            "type": "string",
            "desc": "状   �    type":"int",
			"value":"12",
			"desc": "所属区块ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"id": {
            "value":1,
            "type":"int",
            "desc":"楼层ID"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|num|int|否|楼层数
|name|int|否|楼层名称术语ID
|district|int|否|所属区块ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "num": 1005,
	
    "name": 1,
	
    "district": "12"

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|id|int|否|楼层ID
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "id": 1,
	
    "errstr": " "

}
~~~cY��   5 T�E�55                                                                                  �@    1�6    1�/
房间类型添加#### addRoomType
* 说明：房间类型添加
* url：

<!--
{
	"params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc"   ��d% 1�{weekend
设备类型删除#### delTag
* 说明：设备类型删除
* url：

<!--
{
       S�$ 1�aweekend
设备类型修改#### editTag
* 说明：设备类型修改
* url：

<!--
{
    "params": {
		"token":{
			"type":"string",
			"val   ��# 1�_weekend
设备类型添加#### addTag
* 说明：设备类型添加
* url：

<!--
{
    "params": {
		"token":{
			"type":"string",
			"val   R�i" 1�weekend
房间类型删除#### delRoomType
* 说明：房间类型删除

* url：
<!--
{   \�! 1�mweekend
房间类型修改#### editRoomType
* 说明：房间类型修改
* url：

<!--
{
	"params": {
		"token":{
			"type":"string",
			"value":"101   �   W:"arr",
			"desc":"（标签列表; type>tag）",
			"value":[{
				"id": {
					"value": "1",
					"type":"int",
					"desc":"id"
				},
				"value": {
					"value":"吃货",
					"type":"string",
					"desc":"标签名"
				}
			}]
		},
		"response2":{
			"type":"obj",
			"desc":"（好友上限; type>friend）",
			"value":{
				"id": {
					"value": "1",
					"type":"int",
					"desc":"id"
				},
				"value": {
					"value":"10",
					"type":"int",
					"desc":"好友上限数量"
				}
			}
		},
		"response3":{
			"type":"arr",
			"desc":"（三级分销奖励; type>refer）",
			"value":[{
				"id": {
					"value": "1",
					"type":"int",
					"desc":"id"
				},
				"column":{
					"value":"level1",
					"type":"string",
					"desc":"第一级（最接近用户）"
				},
				"value": {
					"value":"50",
					"type":"int",
					"desc":"奖励比例"
				}
			}]
		}
		
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:----|:---|---|---|
|token|string|是|状态码
|type|string|是|获取数�    
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"id": {
			"value":1,
			"type":"int",
			"desc":"房间类型ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|id|int|否|房间类型ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "id": 1

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY���                                                                                                                              p  p                                                                                                      �3   	!�m
max&lt;mineNq9VE1vEkEYPu/8Clxupkgw7YU0PXnUxHvTwwqbdmNZ1tld06YDAaqJigUONcXWVE1oelJo0lTFFv6L2Q84+Rd8Z4dd9otKe+gkkJn3eWffeeeZ50kmk8nEU1zM6zntsaRqKrqfGHXPrXbj7+Wh1R7Ynb7ZqJnfL6xmyxgcjc6/Gb969uErq3EyHnw0Tw7GnZYx/GpVu7BRx5uwK739PJ+W5Ly49UDZUNJPRJzbEGQt/QgL60U5HSiGlu+lUmgHJWDwioCFgspnE2ztxFRNEARND0Yd5KWwqYsQ5peWHmb4hSBYELYAAiQcl2QWz4QALL7QJSzmAdWwLoZQbVtxSkmyFq6UF9Uchex3F1alan+p8h5ecmYltgEqqEpRVsVIf9d2d+ujqhqW5PWbnHaayiuMo5hzzVdcwHhm5frBePfKanfDCW7Hq4EwHTuRiLNBFgqsmBD61DRDLzhXGEFLgcha7B2IGMMdzmZmcfHunhAqoVRqBYHEzGbN+tBDMAibmq09Yg5fjytviX322zyuEyZfgkg2BcP5J+4PkXK57GoKpnQJXExmcDY6A/Fk4d0ZP/dGu1dmr2n0G6AbGsosP8MrzgVkmewmOZ1TmsO20RSYgkeYlcvQNyiGHIf5YZ3VwFuMQR0hqAkWwKGo4DkOzdS7H/PJPRD2qd0fjzDlB4NE+ZEZPCGuhIAg2gV0Ntw3j46j9HyqzEcP8wMCnBCmYOJVQ8SVpQODxognJkT+vPlMBeHu9HKN/nu7fzp5Nk6WXvhPEnv5ThJcgu8AXn+zmLuOt1vS4PnYfEwsuKcJWNiNqzIDiy3p86+4NlchyqGgfXHhUNS/ZqTEGRjNnRoYrNYizfu8K+6M1LruQg//APYDhG8=cY�W   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �F   �]登录APIeNqtUbtOAkEUrZmvWGc7w7oCooQYK0tN7I3FhB1gFWbXeRCJIYHGwkIsNAEbSXy02xBJFD9nH1b+gsOSILub1YbJNPecufeec0ZVVVU5opYhKvzAZJyBdSVwxt7g5nv64A8/3M97iQjakKXePjN0kxj4YsOu2/ohppU6Ilzfp6hmET0yZXdN08AlUOSBNqKoyWBZmdchJhimESREedvGEoWMU5PUitswCzKZDKT4XJgUG7DMqcCFYjba1cBk1lTIwxjRNEOiFMdbqCHkHlhFTF6jGucNzCqzxmD86vYncEF2ft9JU4z9ZwCuSKgCc1s7pWKeoaoU3EKtNMGuc+WPekuCwZJsGSOzLcJwQnbIMo64+MOSSXh8rS0nYi7J48S4XDYB5SPISZrVzTRz/vWb1+1F/S19CKZUpr6yL1nomWf6dTcMHCdN2pz1+rf+83sifdABmrYH1MCZeE9d7/HllFnEG03daV/9AY7w5bo=cY�Q12          $   #   "   #   $��方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	     !  !                       �\   	�	int/floateNq9lM9PGkEUx887fwVdbo2IWqkJMZ56bJPejYcRtkoKC53dbTQOBOiP1FKRQxtRE1sTbQ9NiyZGW2rhf2nYBU79F/pmf7E/U2hSJ4HMzvfNvHnz3vtEo9Fo5CHJp5WUfD8jyRK6HRm0LrRm/ff1gdbs9E/aar2qfr3Udhu9zuHg4kvv+1n/4LlWPx129tXTveFJo9c91iot2KiQLOyKbz5OxzNiWtiYLqwX4g8EklrHohy/R/BaXoy7nKHFW7EY2kIRGHwBE5yT+GTE+NbXJBljLCvuVV15irOKAMuJxNzslFvK4Q1TmL5z16tlREubWfBoRHiiZIiQBgOZKIJHlTcLzB+fEWXeI6UFKcWk/utLrVzpf6jwtl6cQhwHmwVJnrvpIBKJkBAeZfN4oiCQGYrpQSrkRUnwZWrSPI333pJMMuLaZE9umxWMagu413jOMSGhnmt7w2c/tWbLa2BFvOxaZmPLt6JvEHHOcIY9R40slJz+hD616FpZCXwDgRB4w/DMzM/fRB8YJYSKKBZbQgALdbeqvTtDMKgxVRs7VO2+GJa3af/8h3pUowaIKKLJGAz9n1o/REulkkUHmLJPyIU5g7uxGfRQkjdbiO992wEDUIzTZxdXyRI0kmkws+A1YLodiO5Ob2LTg9r4aM70ZmJz69kGrSv1+LP6cn81n8+q5Wv3QTpgr7TzKqC116khBFuBgBzy847jUEgbORUPKFySmxNOyZdjp+hOsVMJyTDiGOeMEEaou6H7M8wF3d6i3Hj3R1CaLBWQnu5b9fDo3wvTICGFWqIGu6jtzVFPFpl0O8AMtXliTxD99eo9g4N1lr2p137Tb38yW0i3UnJ/MTIooBtBWoOuZIceVpmT1eVYFWbDfcIic3F9Yq8G1QNdOqAeFOYyrHLIzXTOu+SHeohJENWZ7Yjq8LXiC94B9KA7Mp7/11Y3W+UPdngHUQ==cY��/    #  #                         �Z( 1�gweekend
删除楼层信息#### delFloor
* 说明：删除楼层信息
* url：

<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"id": {
			"value":1,
			"type":"int",
			"desc":"楼层ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|id|int|否|楼层ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "id": 1

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY���   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �_'   	%�默认页面eNrNV11P01AYvu77K7C7MxsLyG6I8cpLTbwnXJStkSnrZts5CC0BogmKwkw0IhjUBPRKgYRgRDP+i1k7uPIveNqu3TnrOe1pNwjNWNh5n/ej5+M9z5PJZDIjD9RqqV7U75U1XYObI+cHx/bWxr8/2/ZWq7N3am2sWj9O7M1mu7Vzfvy9/euws/3M3ti/aH2w9t9f7DXbZ1/slQPkWFfnkFd+4XEpX1ZK8vxobbaWvy+rxVlJ0fN3VelhVckTyeD2jVwOFmEEPWJNUqWKJk6OeL/dMb37MxjxRhdqMjKI1ZlHYpY0VaR5xzJWGL3Vb3oqzdVlInwvo   =   
 C �D��$�c � C                                       ^ �'da24f284a0f6bfc0e88231f57083136c049348f19461438242d0bf607dc3a81dZBr117.136.62.13Y�ar^ �'e756f56609a97e139a47f76b6114dfcb35073a9a980b9b9a22f241842b21b65dZ@�Y119.129.81.56Y��Y^ �'67ec9ddaea989faba4161a505d56cfb91c1e57d81bef1b93f5caf490932488a3Z;k119.129.82.57Y��_ �)8ece59e5288bac84eea493de36fca00d59e8c30d5718aaca23d1f0519fb4015cZ7;�119.129.80.211Y���^ �'b2aa90f167654af7cb70c173c6a3f8fbaa1c5b26c2a48c3df240484603f7e138Z/�*119.129.80.32Y��*^ �'19f5c92c218e40b5c587bc04006e3b39dea75eb7d6ce092699c0b49790b7ae61Z/~Q119.129.80.32Y��Q^ �'443b89b27653caca709c76c9341071fa82b1f7eb33b932b95d9ac9ca53724984Z.^�119.129.80.32Y���^ �'a9dfd09c696986bcdae59ca3b9f53b82698e8ba8a0481c73eb370b6f59aeeeaeZ.^Q119.129.80.32Y��Q^ �'a20758fb6748d5af4c6665b71fbf8941742b50bb6b822433bb262c5a4cb4f7a8Z.^6119.129.80.32Y��6Z �c6ac2da5afe454f046efd140fba1550b12b7a4c29715e570a793a08ca2c43363Z.127.0.0.1Y�Z           }
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|uid|int|否|用户的id
|type|string|否|用户的类型：a为A用户,b为B用户
|invitecode|string|否|用户推荐者的邀请码，以前缀区分推荐者类别，为0表示没有推荐者
|status|int|否|0为临时上下线关系，1为固定上下线关系（固定上下线关系时机可根据需求而定）

* 参数示例

~~~
{
	
    "uid": 729,
	
    "type": "b",
	
    "invitecode": "b2017729",
	
    "status": 1

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY��v    �  �                                                                                                                                                                               �D0   	�]多层objeNrNVcFu00AQPWe/wmxuKCYqSi9VxYkjSNxRD5vYooHEMWsbUWUdNRFIiEKaA4jQVi2VUjggSCNVRYQq+ReUtZMTv8B47YS6daLEBYmVbK+87+08z7zxJpPJpHSPlhQrZ97JG6aBrkvD9onTrP8623GaPbfV5fUa/3rqbDcGvd3hyZfB92N355lTPxr13vOjd6NWY9A/dKptIFq0AKz0xiMlndcU9ekNfV1P31Vpbp1oZvo2JQ9KWjoUDK1ek2VURhIMrBNKigZekcoIK4p4SnMOwC9GECRzQ1eBhUvZhzi1GPUJKVjqwhEFVSNFdSkWNSSaULqg6Evi78eie6McmykEEALRl1JX2ySbhU1uxt7DjsVcQ/82zvzo+ZA+yvZTjalq6CXNCBsXGyYxLeOSI2fYJLr8wtnCmmSKM7FmFQGwvIxmf81amA66H1t5qnotblJLvbA6vSOwoho5b8l9eepsVt0PVTxZt/9Ase7/kyJy8Bcjp/6b7EbmQKXUMOl0F2QysYqS18xFiuLbFdmyfAvBicK3a87bYwSD+VPeeM3czg++v8WcZps3PvL+c374mflnFkNsRYYh7mx8IVapVBQFbt4keADVm7lnXd7qeGJXs1SEHLa/OZ0anHuD3hZCgIHjKYGCQwZka1ahgJAtVgDdf8N398P6QNJob3Msc7Yyv/cYGMj7HjZJCWI/Xxx4FRevoTABctB95XY/BWkRGKs4EzK29jwhxtiZQaJBvnsYVPtCkEmOIjN67teTSKBoq4cWzjscJcC/wUahDr7aVpNGyGSCOv8GhAxojA==cY���    F0PLePIveHpboAVaWkDjTdrcnvPdc07Pud/pbSQSiYTv4ryoCuR2RiEKuhq+bJ3pzfrvn3t6s9M7amv1mvb1XN9tdDv7l2dfut9PentP9Ppxv/NWO37TP2p0Lw71agsWqjgLq+LFh2I8I4vS5kphoxC/I2Fhg5dJ/Bbm7+fluMMZun4lFkMlFIbBFXjM5xRuNWw+MxmxHocSU1osSKDg8usPuKhTleM3DU0ivXJtXPWYz6qSw/zIIJkqn+HMh2WbB+IJcLjiMXZxNeHynifMGKWZCGaQhwH2ElF/8HUYAE/ORJc9EWso2LqySwVESRGMzOnbL/Vmy9zBHPKxmhOEv116mc9JCf/Fd3cWwOkoMaIvXMAI5ojEFpEYaMGcoS0QYsDKLYHOS6D5YvT3aAv+m4JHs/DVKuZrIcFby3L8+Ef7Q5YXbKXlf9tKkYctLpeRDRPp5Pg32Nu4adQyxmFJKeRlxcldTiE8UZUJUnowxaW5G+Rm7OTderus5gCQTs94+bWxd8TSIzWDJaPLEaxKUeSzKQyT03t2rm9Vex+qtsyMoFzBPEFNycESPUf/m+xOzYGEsUKw+y5IpeYqSkYmQYpibldUjsVuIDj/ars1/fUJgkHNqdZ4QXunP7SDHQq7XWt81C6eaoefqbnvKaKrMRjsTgcXooTCV44CmtpZguiv7ffETQfHS3oTY74IMzBhHOZogknh6raf99qfrOiocXKjyek6cCEILi7Yx9ByAiBERdF6MjWGYCCBiXOByCQsKFPM7uOBQVhuWvZf8k0/rcEfSbezg1ClUkGyms2yCSgvXmn7B87UQ7b777YGFfBOutlWjDJR4AcdVpvlxAiHqWDPWciJvMF29oQMWOvHxQDr6WQ6yCQGA8FmtjkZ5siewBIKofGuGgqh6Sx2KOzkRSGgpmXI0ZwWMzXkeCqFUNmI9w9FBbD5cY���                                                                       F0PLePIveHpboAVaWkDjTdrcnvPdc07Pud/pbSQSiYTv4ryoCuR2RiEKuhq+bJ3pzfrvn3t6s9M7amv1mvb1XN9tdDv7l2dfut9PentP9Ppxv/NWO37TP2p0Lw71agsWqjgLq+LFh2I8I4vS5kphoxC/I2Fhg5dJ/Bbm7+fluMMZun4lFkMlFIbBFXjM5xRuNWw+MxmxHocSU1osSKDg8usPuKhTleM3DU0ivXJtXPWYz6qSw/zIIJkqn+HMh2WbB+IJcLjiMXZxNeHynifMGKWZCGaQhwH2ElF/8HUYAE/ORJc9EWso2LqySwVESRGMzOnbL/Vmy9zBHPKxmhOEv116mc9JCf/Fd3cWwOkoMaIvXMAI5ojEFpEYaMGcoS0QYsDKLYHOS6D5YvT3aAv+m4JHs/DVKuZrIcFby3L8+Ef7Q5YXbKXlf9tKkYctLpeRDRPp5Pg32Nu4adQyxmFJKeRlxcldTiE8UZUJUnowxaW5G+Rm7OTderus5gCQTs94+bWxd8TSIzWDJaPLEaxKUeSzKQyT03t2rm9Vex+qtsyMoFzBPEFNycESPUf/m+xOzYGEsUKw+y5IpeYqSkYmQYpibldUjsVuIDj/ars1/fUJgkHNqdZ4QXunP7SDHQq7XWt81C6eaoefqbnvKaKrMRjsTgcXooTCV44CmtpZguiv7ffETQfHS3oTY74IMzBhHOZogknh6raf99qfrOiocXKjyek6cCEILi7Yx9ByAiBERdF6MjWGYCCBiXOByCQsKFPM7uOBQVhuWvZf8k0/rcEfSbezg1ClUkGyms2yCSgvXmn7B87UQ7b777YGFfBOutlWjDJR4AcdVpvlxAiHqWDPWciJvMF29oQMWOvHxQDr6WQ6yCQGA8FmtjkZ5siewBIKofGuGgqh6Sx2KOzkRSGgpmXI0ZwWMzXkeCqFUNmI9w9FBbD5cY��                                                                       F0PLePIveHpboAVaWkDjTdrcnvPdc07Pud/pbSQSiYTv4ryoCuR2RiEKuhq+bJ3pzfrvn3t6s9M7amv1mvb1XN9tdDv7l2dfut9PentP9Ppxv/NWO37TP2p0Lw71agsWqjgLq+LFh2I8I4vS5kphoxC/I2Fhg5dJ/Bbm7+fluMMZun4lFkMlFIbBFXjM5xRuNWw+MxmxHocSU1osSKDg8usPuKhTleM3DU0ivXJtXPWYz6qSw/zIIJkqn+HMh2WbB+IJcLjiMXZxNeHynifMGKWZCGaQhwH2ElF/8HUYAE/ORJc9EWso2LqySwVESRGMzOnbL/Vmy9zBHPKxmhOEv116mc9JCf/Fd3cWwOkoMaIvXMAI5ojEFpEYaMGcoS0QYsDKLYHOS6D5YvT3aAv+m4JHs/DVKuZrIcFby3L8+Ef7Q5YXbKXlf9tKkYctLpeRDRPp5Pg32Nu4adQyxmFJKeRlxcldTiE8UZUJUnowxaW5G+Rm7OTderus5gCQTs94+bWxd8TSIzWDJaPLEaxKUeSzKQyT03t2rm9Vex+qtsyMoFzBPEFNycESPUf/m+xOzYGEsUKw+y5IpeYqSkYmQYpibldUjsVuIDj/ars1/fUJgkHNqdZ4QXunP7SDHQq7XWt81C6eaoefqbnvKaKrMRjsTgcXooTCV44CmtpZguiv7ffETQfHS3oTY74IMzBhHOZogknh6raf99qfrOiocXKjyek6cCEILi7Yx9ByAiBERdF6MjWGYCCBiXOByCQsKFPM7uOBQVhuWvZf8k0/rcEfSbezg1ClUkGyms2yCSgvXmn7B87UQ7b777YGFfBOutlWjDJR4AcdVpvlxAiHqWDPWciJvMF29oQMWOvHxQDr6WQ6yCQGA8FmtjkZ5siewBIKofGuGgqh6Sx2KOzkRSGgpmXI0ZwWMzXkeCqFUNmI9w9FBbD5cY��                                                                       NgoPxJz+FRNWnBmiqWJW8NTT6X5loLpj9qJPjHGGDQHkLpUi0dgtiRVpdiK2JyJhTnPUiLCVShJSFsxxwYulxF4MhFrxiJmgU/OpIRfVrSKEzV7/Y29fejlrwgM0mKlchX7XmTfeLoxDqODwMhMOE4PUngS8kjmEkjp2ggucu7cGI7yGI74aEd/LCVh1FKRroTwl5bx2GFHsyHNEUupebWlFGJ0ibVq3VFRmhy+gOOVe0r7ykRV0ZqNuoafXVHTJb2lRQ5lzEmhFPf+dexkOCUS9VYNAUqlhMXPDq1RVZ60qqriVDldbSk5YCwKQXB6L0/tldXep9VQZAZQsen1T4QYjNFy7tpElxgDRVU1XaVnwdRUqk2p1nWeTfHSFcx8/g6g7tfaWrPfHQF6DO/Var82rPPnlysvjN7xL2tvw/Ay3gBjOo8e97/h/4Gh64bV/mKgS84IH5DwOxh/1j9ScO4c+jmxdwFopx3N/jj6SZKB4AaKneGgumevemdf+34PUOVyPKpSSbRfDBC4A7JMmXDnYiYxvdGF0VZYpCyRtlYc73KhH/bxGmJB3c4GwPLyMiIrAoQpgyAApU8Jz+CsJDwzaFCE0DBuYWiCaIuEwXQTADgxEeggQgVJQg9qhpAA9eqIwALDmhJ2CYYOxNdGv0f7CHJjARRhd9yk7U/yZQuBOJB4yxWkRpErNwYmWXJjiSk3fBbDvt8kb1jkIn4xCGGsRuCTi3GWRwPBbQ5x4k6n0EGtEWl1RSpISkV4fRlBCbH6jKpvBHaE+8DPkzB5PsIEqQwDrxBw4IENylzozasv9BD6MocaiBCnCo/TNQPSB6bbs6A+5vyttbuXvjf1eJfbKzndV9AOBy9uc+W2nn4/5YlEGjDU+MdCfH7DZcsXirVGBnlcwgWh/p9kLQgfsQ0MMVJSWzcTubtptzbGmSgQEmmKZM4sniER7kPqWP16DUnMB9zEhCgV/S8mc9cmppHFhzgoyUeHgnKHxCOgbLvQP9v/AC4XtX0=cY�2�   1 1                                                                                                                                                                                                                                                                                                       �L@   %�e参数说明eNp1UU1v00AQPe/+imh7daUWiYsPSBy58ReceAup3CTYDhQhR6YNUqtAzSFRQ1tK048UAYmDFAkncZUfQ3Zjn/IXGHttyzlgyd6Z2ffmjd8YL6tv1Gqp8PT5M+Yc8M4ouG+yoy8Y031lr6bRlX+GG40GfocRKZWIXIAAHvgQ822NQoFUi7tESmqvFa1OUxQQgCEIRKev6mWdqkQ29ToVNY1WiPx4SxLZnrKfz8r5uzUtUUqkRHtEVDWLEVEUIm9LaVYsEvlRkljitOJx49cSp4Wt+EdxYoM75t2T6O8j6ZX/ESFxsfw9Y5etqMDmH1jvJ0Ir/6hcMaUdraqYkmHq5coLCeaUFF1f+cc4njNlM9tHKbEQBWFvtvBOmDth03aktDz3lr/60D5o3bFBl118B1v+2u/BDigKAhT5hc1u76FbFIwcCBaTVng6xmAp7IINTqFL2JmzaV9C4dfLdFbm/AgOH3jX5YMb3hnDRBj6gwNZQ5SHZyjQzgFjwTywsI5Md41AiH3uJ6A8XMwBMfMO2agN7YAXzrrB8HZH0QyKVWqUUtO44wTz0To/NizZyFlTbAvXdGpQE/1fNmr2aRheN5cPQxDkbpv1DwxTMeuGmGjhTbfA7W0pW1dmuWCF9nHYmyy8webmE7wRuH/4jc2/3e0a1Qq/8pnvbPwDai6WyQ==cY�Pi   8 8                                                                                                                                                                                                                                                                                                              �E>   �]登录APIeNqtU0Fr1EAUPuf9ijh7k42xq2JZxJNHBe/iYdjMtsFtNs5MFovTpS3owaK7hxZalaIgvXiIhWLBqv0zTrI9+Rd8yXRjsnGLhw5JSL6XefN9732v0Wg07Ie870Uded8XUsBVexIfJbtvfn9/m+6d6B87iES8h5/u6hPP9QOPPbsWLofuA8Y7yzSQ7j1Ol/qBW8ly54rjwHOwcZGQcroiSNs23zkWCcYrSI7K1ZAhSoTkfrBEmmBZFuHsaeRz5pG25BFrVnf0WJBtuNEiM4EVPw8szuID2ovwDNKlAi+vOxv3mOhkGydHB3p0TIrg2t//UJAQ/0H+UojaZOHm7cVbLUG7SHhAB/MI6/hl+mGjRBhKtLGIIuwHgtVo51EhqYwukOQHcvbYEDMyicFHtXQLzRrUqiCP50m9Pk9c+uprsr5R1VdqCOMcq35pLSn4mJqebe9N4ngeNRNNRuP007da9WENHOcu4Ajp0Way8wVwKfOqx69Venii97dUshvr8YE+faE/flZm+hSotoMrf6rpDSqbG2XkZNuUsSmozJJTHHMpwxzyaT5ODjeR3K+fWwDD4RDH0oLyEJZnwYKyw2veAxSUpcC0p9v63X5VDio4e78+VXWxEGM5hc7K+RYNBmWaWRZTLjEUZ/9TUuHk3EvnYGGPakPPxfwBS7OPVA==cY��    pe": "obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"登录凭证"
			},
			"uid":{
				"value":12,
				"type":"int",
				"required": true,
				"desc":"用户 ID"
			}
		}
    },
    "response": {
		"type": "arr",
		"value":{
			"type":"obj",
			"desc":"标签列表",
			"value":{
				"name":{
					"value":"坑货",
					"type":"string",
					"desc":"标签名"
				},
				"num":{
					"value":"12",
					"type":"int",
					"desc":"数量"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|uid|int|是|用户ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "uid": 12

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟name|string|标签名
|∟num|int|数量

* 返回示例

~~~
[	
    {		
        "name": "坑货",		
        "num": "12"
    
	}

]
~~~cY݊     �  �                                                                                                                                   �p7   %�-默认页面eNqtVcFu00AQPXu+Ijg3lBAaQFQR4sQRJO6oBxNvWkPqmF07ouomaiuBEC0kh1ZqARWQUDlwCJUqKqVA/wXVdnriFxjvOq7t2BaHWk4Uz8yO35t5MymXy+XSQ9rRnaZ932A2g6ulyejI23379+c7f+/E/bWDFoe28bG28lSvGaZOnl+zlqzaA0KbS5pp1+5RbbFj1hJZ7lypVmEVSniplka1ZaY2SvJZ2BxGaMIirPaKRdCqMpsa5qJaAUVRVEqeOQYlutqwqUMqyRNtYgYHbtTVlGPZEI75tL2rtR18h9rSGN56K+3XCWsGBydHB+7gWI2cvYs4JMTYf4C/FKAlde7m7flbdaa1EHBX6+YBdkcv/U/rMcAQg41FZFbHZCTZBUu2rIBM5/GTPGDJE5Jk0PtMVyKpRmkq6UzyR5nu4FrN9YSUjGaQYK5SHBeWrZ4b1cv0LEBxXC9TMMzWbKegyoZpp6tsYceInVmJDGpJGgt5UrqeJx7/9Q9vbT2pnxh+Qimq+tIkH+GRmj3f3puMRnnQpNcbDP0v4xl1Qw+q1buAK8odbHg73wEvLn+6wzfcPzxx9ze5tztyhwfu6Qv38zcutxsH3qjiJb759AM82Etc0gmOcbkGgAcjP7VjLi6Rg9iWx97hBoI7+70J0O/3ce0pEF9y8V2jQHyDzMw2IKEgBaY93Xbf7yfpIIPzD2tTVsVEpqPNcYIFYjQD//Pqo5hRYcExjKx4i8kRpJEnF2Fn4y1//DUsbRgW9KUoSmqdo6TFSyJlAZcqilcx3luISGfWMhohIeLQGOkyraTQf7GPFAVmVoQ6J/5hYEZydakzUHphP/4BGgEZ3w==cY�d    NgoPxJz+FRNWnBmiqWJW8NTT6X5loLpj9qJPjHGGDQHkLpUi0dgtiRVpdiK2JyJhTnPUiLCVShJSFsxxwYulxF4MhFrxiJmgU/OpIRfVrSKEzV7/Y29fejlrwgM0mKlchX7XmTfeLoxDqODwMhMOE4PUngS8kjmEkjp2ggucu7cGI7yGI74aEd/LCVh1FKRroTwl5bx2GFHsyHNEUupebWlFGJ0ibVq3VFRmhy+gOOVe0r7ykRV0ZqNuoafXVHTJb2lRQ5lzEmhFPf+dexkOCUS9VYNAUqlhMXPDq1RVZ60qqriVDldbSk5YCwKQXB6L0/tldXep9VQZAZQsen1T4QYjNFy7tpElxgDRVU1XaVnwdRUqk2p1nWeTfHSFcx8/g6g7tfaWrPfHQF6DO/Var82rPPnlysvjN7xL2tvw/Ay3gBjOo8e97/h/4Gh64bV/mKgS84IH5DwOxh/1j9ScO4c+jmxdwFopx3N/jj6SZKB4AaKneGgumevemdf+34PUOVyPKpSSbRfDBC4A7JMmXDnYiYxvdGF0VZYpCyRtlYc73KhH/bxGmJB3c4GwPLyMiIrAoQpgyAApU8Jz+CsJDwzaFCE0DBuYWiCaIuEwXQTADgxEeggQgVJQg9qhpAA9eqIwALDmhJ2CYYOxNdGv0f7CHJjARRhd9yk7U/yZQuBOJB4yxWkRpErNwYmWXJjiSk3fBbDvt8kb1jkIn4xCGGsRuCTi3GWRwPBbQ5x4k6n0EGtEWl1RSpISkV4fRlBCbH6jKpvBHaE+8DPkzB5PsIEqQwDrxBw4IENylzozasv9BD6MocaiBCnCo/TNQPSB6bbs6A+5vyttbuXvjf1eJfbKzndV9AOBy9uc+W2nn4/5YlEGjDU+MdCfH7DZcsXirVGBnlcwgWh/p9kLQgfsQ0MMVJSWzcTubtptzbGmSgQEmmKZM4sniER7kPqWP16DUnMB9zEhCgV/S8mc9cmppHFhzgoyUeHgnKHxCOgbLvQP9v/AC4XtX0=cY���                                                                                                                                                                                                                                                                                �g(   	%�默认页面eNrNVjFP20AUnrlf4V62KomVlCyo6sRIJXbEcLFP4BY75u7cJIosEdQBMaQwEWChEoxtOiCkIhT+TOIkU/9CLzYJdrCds5OivsXS+Xvf9/zu3ufLZDIZaZNUVEthGxplFLyVhp1bp93683DhtLuD6/t+67D/8875dtLrXg5vf/R+/xpcfHVaN6Puef/mbHR90nv87jQ7PNEiezxLrn9WZc1QcS1v7pryR0yUXWQweZ2gnYohB8TA+ze5HGgAiQc0EUE6hWtSA6xABNf4g9VNzBegZjCYdVGTgF/QnuW+K5Ty7/jLFfsZAJnLIknBlAlbpfxplk1HNR9XqFAjsOwRstD1OWICzD4FFgsISCFCIqReSG7FwsbRmItwCREPzlfIisHLPDi8OBdtxyK2QbI8O2IHVEyVceeco1On3fEOPgQC2VBR/vXWG0jHBfHNjxZLIDqFVqtCuIQVpKjEV1E1UULK0hYo0V9qNVVmwmlewpQvNv2RBfDShT0hxvvqQlaRzkKSW8tydMTRYkh7QSu1X9dKQQwX1DVjTFEqzv6D48k90icySDA1KwYNzi6kDDGLvpjKmFGJMPexLbvjiaK83bB0DiiV5nz89sw3ErxvaQSrPJcRC2eBoCtMmzM4vnMOmoOrpq8zvjuR6V28QnqwROXsf9Pd0B5gQigj0adgdTXVpoRcT+M2xTuuwM7lPvwFHkc0sQ==cY���   � ��                                                                                     ��   �登录API#### ProductLists
* 说明：登录
* url：/ykd/index.php/Merchant/Dragon/ProductLists
<!--
{
    "params": {
        "user": {
            "type": "string56",
			"required":true35,
            "len": "32",
            "min": "8",
            "value":"fasfasdf",
            "desc": "账号"
        },
        "pass": {
      �B %�Iadmin参数说明showdoc API参数规则112

example：
~~~
{
	&quot;cc&quot;: {
				
		&quot;type&quot;: &quot;obj&quot;,			
		&quot;value&quot;: {
			&quot;ccc&quot;:{
				&quot;requ   Ɗd �admin登录API#### ProductListse3
* 说明：登录

* url：/ykd/index.php/Merchant/Dragon/ProductLists
<!--
{
    "params": {
        "users": {
            "type": "string",
			"required":false,
            "len_max": "e32",
            "min": "8",
            "value":"fasfasdf",
            "desc": "账号"
        },
        "pass": {
       �    �  �                                                                                                                                                               �T6   %�u默认页面eNq9VMFu00AQPWe+Ijg3VGMSQFQV4sQRJO6oBxM7rSF1rF0nouo6aiuBEC0kh1ZqARWQUDlwCJUqKqVA/wXVdnriF5jddVzbsX1CrJwonjc7mTfzZmq1Wq36kHSMbtO9b1GXwtXqZHQc7L358+NtuH/q/9xFS5e08VVbfWpolm2Yz645y472wCTNZd12tXtEX+rYWirKnSuqCmtQxaM4OtFXqLJQle/C1qUmSVmE1V11TLQq1CWWvaTMpdG2aXPwRiMLrFgCmM/ae3q7i/GUlk7xMVpZ3DBpk1+cHB/6gxMlBr1LP0ye0v+VaFWp37w9f6tB9RYm3NN7RQn7oxfhx41EwpBIWyEmdTo2NdMVd2R7Ssh0Hj8pSix9Q5Lkfc6FUkF1QjJBZ4I/yoX5WStEIkpWkweoz5X7RWVrFHp5ucgilPt5uYKhru52S6ps2W62yg52zHRzK5FDLU1jsUhK14vEE776HqxvpPWTyN8kBFX9zyQf5yM1e7GzPxmNilKTaDAYhp/HM+oGD1T1LuA68gebwe43wMPkT3/4moVHp/7BFgv2Rv7w0D977n/6yuQmY8AWVDzim00/wPgOYpIOwztMrgFgfOSTdpk5iM14EhxtYnLnv7YA+v0+rrgKJBdactdUILlBZmYbkBAPgWHPdvx3B2k6yODi/fqUVTmR6WgznGCRMZqB/X75QcyosOAYxlZ8xOTwWnGeTLidj7fD8ZeotJEb70uZl9Q6Q0mLP4mVBUyqKFnFZG8hJp1by3iEhIgjY6zLrJIi/HIfVSowsyKUOvdMAFPJNaTOoOJF/fgLQWQT3Q==cY�R    � 1 �                                                                                                                                                                                       �: 		%�eadmin默认页面eNrVVV9v0lAUf+79FBgSHkwRtowEt1cfNfF92cN1LYwIhd22ZssuhC2aqHODB424makJy54U   ��L9   %�e默认页面eNp1UU1v00AQPe/+imh7daUWiYsPSBy58ReceAup3CTYDhQhR6YNUqtAzSFRQ1tK048UAYmDFAkncZUfQ3Zjn/IXGHttyzlgyd6Z2ffmjd8YL6tv1Gqp8PT5M+Yc8M4ouG+yoy8Y031lr6bRlX+GG40GfocRKZWIXIAAHvgQ822NQoFUi7tESmqvFa1OUxQQgCEIRKev6mWdqkQ29ToVNY1WiPx4SxLZnrKfz8r5uzUtUUqkRHtEVDWLEVEUIm9LaVYsEvlRkljitOJx49cSp4Wt+EdxYoM75t2T6O8j6ZX/ESFxsfw9Y5etqMDmH1jvJ0Ir/6hcMaUdraqYkmHq5coLCeaUFF1f+cc4njNlM9tHKbEQBWFvtvBOmDth03aktDz3lr/60D5o3bFBl118B1v+2u/BDigKAhT5hc1u76FbFIwcCBaTVng6xmAp7IINTqFL2JmzaV9C4dfLdFbm/AgOH3jX5YMb3hnDRBj6gwNZQ5SHZyjQzgFjwTywsI5Md41AiH3uJ6A8XMwBMfMO2agN7YAXzrrB8HZH0QyKVWqUUtO44wTz0To/NizZyFlTbAvXdGpQE/1fNmr2aRheN5cPQxDkbpv1DwxTMeuGmGjhTbfA7W0pW1dmuWCF9nHYmyy8webmE7wRuH/4jc2/3e0a1Qq/8pnvbPwDai6WyQ==cY�|   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                               �45   %�5默认页面eNq9UrtOwzAU3fMVIdkQIbSAqBBiYgSJHXUwidumtE5kOxVVFaldGBgoA0iUhUo81iwVlaB8Th5M/AJOU2idJpkQlhefc3107r1HlmVZPMambmv00CCUCKti6I78u6uvyX0wePc+bhli4wZ7qu0zXTWQDs/XrZqlHkGs1QCi6gEGVROpnMreiqIIHUFkR7IABk0i7Yrxe4rZBGIOmaK0bUGGSoRiA1WlNZ5tQBSRm8Uk0TSmRCmJt0DDZnpSBRB29YrE0zokWvQvHL14/fGcdOYyzDsh/+VTlApbO6XtIgEV5rcFWsm6H8OeexEMewuGhQXbEobEMhGB/MCteDs5zZin9Sxj/I+4yWjNqRQnCjBOiC6Jn6TS0elkMrOWDC0SKKzl183GVsysclKZspBf56QGhlBA7ZwpG4gmp2yxjUGaOomU1vg2yllR2sgKT3D56nd7fH4W/EOMWar/LPK/fuLMft4MQtfNshazfv86eHpbSrfgCIqyL8ihO/Yfu/7Dc52YyB9OvElf/gbPNBwccY�J    7Gzbk1/B2Znd7f6t7UE3aTP7/ux7b957v0QikYg9RsWsNq8+zCmqAu7GOo0Lo179fb1v1Fvt4yapbpBvl8ZOTW8ddC6+6j/O2vsvjOpJt7VHTna7xzX99shYb1BHDeWpV2r5aTaVk7PS0mhpsZR6JKH5RSirqQcILhTllCcYmLqTTIIVEKNPvAQRLCjxTIy/M5miQghVzStlmucwr0lUHJ8Qx0VxUoyPePUFuES16fT42H2/JidzzaRPgaRnWg5JWapVkSb5tOpyicXLyao/VlZS5k1V+82lUV5vf1qPO/rVESAI1FlS1PHoIsw0I/MfnYisYGz0Xp8i0umIEp7ki3CoIoBVihVBKRVlRQp0qm+fQkoc7L4VFeXkheGu3DEr8WkLyWuw4BChyMiV3e7mjVFv+A3simc8YvNZCUiYgwwLPBj0fapnoRXYFQa0qx7JbOgdSAjRO4zujCj+jz3gIwRWQTI5DSgsyM6G8f4M0AfzI6ltY3L7slvewu3zn+SwgjmIMMCZJH3YP7Z/AK+trdl0oEfzlfbCOtHczBOrMOMQQv++3dm8IcenerNK1yvD4DA1h6bZx9iKWv6k9tk6sVUxz/aldBpX5OgLebU3VyzmSfma+TNqXhnnG5SXeqsCAPWgWBNAEGKCAPoxzK32IMyjcBHMLQ80zq309s2tiWgbEEx48RJ6/ArLn+92eOqMXqHJc3hF5G+yKyx7G12D5Q/ovJmtoO25fUcODoPT9qE82LRxvGE6YpgDCTvRALYpw9QUGdhhA8C/Xn8099v2dGz15tt289TaAmalFf5ixBeZGdEmuhJw6osav37DF2zeQGPkYHnISfIQeeionMehIV04DitzhkoF4KWx4BcFcRxhEsZj07bHY/o2GyjeheKwHE0S/9N9tvbhDyG82+w=cY�R�                                                                                                      H �$�H                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        �    	�U	int/floateNq9lE9PE0EUwM87n6K2N0OpwFaShnDyqIl3wmGgKzS22zq7ayAMpIAasVJ60FDAoCQgB6OFhIBWKN/F   t�p   	�5	int/floateNq9lFtPE0EUx593PkXdvhlKubSSNIQnHzXxnfAw0BUa222d3TUQBlLwEhGBPmi4GZQE9MFoISGgFct3   ��`   	�	int/floateNq9VEtvElEUXs/9FQg7U4rWoglpunKpifumi1sYWiIMeGfGtOmFAD6iYikLTWlrqk1aXRilTZpWscJ/   ��h   	�%	int/floateNq9VFtPE1EQft7zK2r7ZlqqyGLSEBITHzXx3fBwoCs0ttt6dtfQcNq0eImKlD5ouBmUBPTBaCEhoBXL   �   � �                                                                                                                                                                                                                                                                                                                                                                                                   �p   	�5	int/floateNqtVE1LAkEYPru/Yltvoa4fWBDRqWNB9+gwuIsu6brN7oYiQpYHsTLDwI8CDZS61BaIYKj9GXfWPfkXGj8yd3UlojnNPM+88z7PO++M3W63kwcwysgBaY8TJZFYJwdKE5Vyw04FlXpa/UPNnauvLXST7/fuB82XfvtNq6RRrqH3ymqjqNfz/c9HlFJwoAzDOIqOHzM0xzNszCWEBHqfhYEQ4CV6F4JglKcNyYjtNaeTSBAkHpQAIIiI1BY5WY8xHkRYAzJGT0FYHsGU10c5jFQExDDh93s9G2aG4yfMpomA7InMQZbBrARl1sRKcWGcSpQgxwfN6RhWDIxY9amg5q+pGZl0EDYbSYHgCvUjkZbqXT5L/R6Xe4UFv9/CAMdLlurbTb2XnlNPTD1MDxeFKC8aneB6AEkWrd15/lTlFSK1bAudpbRaati5cqNMXs1W8cyj1t8HzYah8rNQYdJrS1T+Tg2A0FLNZVG/6KKSYt7w7f/QAI9GYgGZb3EKANNRPzvkyPhiF9ikATlaWgMWQty6K95Qv1vTqg09VUCZW/XhmcJF/f/3od+VB4qCPxH8oSz0GZEknM6dL45JOLo=cY�U        "required": true,
            "type": "string",
            "desc": ""
        },
        "products": {
            "required": true,
            "type": "arr",
            "desc": "狗都是",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|staaatus|string|是|---

* 请求示例

~~~
{
	
    "staaatus": 5521

}
~~~
* 返回


|参数名|必需|类型|说明|
|:----|:---|---|---|
|status|string|是|---
|products|arr|是|狗都是
|∟name|是|str|products二级参数
|∟num|是|str|products二级参数
|errstr|int|是|状态码

* 返回示例

~~~
{
	
    "status": 5521,
	
    "products": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "errstr": 44

}
~~~cY�     � r�                                                                                                                                                                                                                                                                                                                    �=) 1�-weekend
添加楼层区块#### addDistrict
* 说明：添加楼层区块

* url：
<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"name":{
			"type":"int",
			"value":1,
			"desc": "区块名称术语ID"
		},
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码）* 1�;weekend
修改楼层区块#### editDistrict
* 说明：修改楼层区块

* url：
<!--
{
    "params": {
		"token":{
			   F�) 1�9weekend
添加楼层区块#### addDistrict
* 说明：添加楼层区块

* url：
<!--
{
    "params": {
		"token":{
			   G   , �,                                                                                                                                                                                                                                                                                                �_&   	%�默认页面eNrNV11P01AYvu77K7C7MxsLyG6I8cpLTbwnXJStkSnrZts5CC0BogmKwkw0IhjUBPRKgYRgRDP+i1k7uPIveNqu3TnrOe1pNwjNWNh5n/ej5+M9z5PJZDIjD9RqqV7U75U1XYObI+cHx/bWxr8/2/ZWq7N3am2sWj9O7M1mu7Vzfvy9/euws/3M3ti/aH2w9t9f7DXbZ1/slQPkWFfnkFd+4XEpX1ZK8vxobbaWvy+rxVlJ0fN3VelhVckTyeD2jVwOFmEEPWJNUqWKJk6OeL/dMb37MxjxRhdqMjKI1ZlHYpY0VaR5xzJWGL3Vb3oqzdVlInwvo   ��_%   	%�默认页面eNrNV11P01AYvu77K7C7MxsLyG6I8cpLTbwnXJStkSnrZts5CC0BogmKwkw0IhjUBPRKgYRgRDP+i1k7uPIveNqu3TnrOe1pNwjNWNh5n/ej5+M9z5PJZDIjD9RqqV7U75U1XYObI+cHx/bWxr8/2/ZWq7N3am2sWj9O7M1mu7Vzfvy9/euws/3M3ti/aH2w9t9f7DXbZ1/slQPkWFfnkFd+4XEpX1ZK8vxobbaWvy+rxVlJ0fN3VelhVckTyeD2jVwOFmEEPWJNUqWKJk6OeL/dMb37MxjxRhdqMjKI1ZlHYpY0VaR5xzJWGL3Vb3oqzdVlInwvo   �    �  �                                                                                                                                                                                      �=4   	!�Mdesc测试eNqtVE1v00AQPXt/RXBuqK4Fai8V4sQRJO5VD6vYai1qx6xt1KqbKAkgAYE0B1BDiwpIrThBWqkqIkDyX5A/mhN/gfUudrxeWzSoKyWy5816Zt68mWq1Wq3cR3XNq7l3Dcd1wPXKxfAsHPR+/9gPB+PoaBT0OsGX83C3748PLs4++99Oov0nYe94On4bHO9Nj/r+5GPYHpKLHtokt9TtB5pqWJq+tWhv2Oo9HdU2oOWqdxBcr1sqFwzcuqYoYAdUyJFtiKDpyCsV9k5tjgshdD3eSpFHcNPTiXl5+eaNBR4y4VYJYFgUWBQQpD/0DKRrBHaRp+dQd9uOQ5FskGGtyzlU051ajMqpuUGfGsyPfNux65ajC5XNW9cVJznzkG3WlIJ0LhcTIlQWMOruTR//DAfDvENS6Cpnjs+OYKEXLGiyYDD3qZmHZ1LmBLTBWdYKOdARItSVN2Rp6b/aYVhuKTUvzsNWO/rQFpQDGkBRbgMyU8FuJ3xzAsjB7DHov8LB5Om09RxHp9+Dwy5m84oBXlHIof84+QGcTBAmLcBMGxjQKf8annbIfPvjLgDNZpOMoQTEoZMkUKLNLJIdOc6enbgsIJCXBQUpZ0FeyUBqAMJWnD+pafI6ODgUuXrXujRXeaZwMhrUSnSOU0ED/OvZ+1iUyYXU1x+9jEaf/raOennmP5yY+qgTUQxOpQHSsspaNV+jrpD3hSQJbnvMHYztjqJI2dVRVN0qsUqA3xxS3iSujhKXot0R+852B3lbE4rPrI2iHOOtMTclbGcUUsKvjJn6/wC+ajLLcY�WW          "required": true,
            "type": "arr",
            "desc": "狗都是",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|~~~staaatus~~~|~~~int~~~|~~~是~~~|max:552不能小于min:5521<br>value:"5521"不能大于max:552<br>max的值不能小于min<br>

* 请求示例

~~~
{
	
    "staaatus": "5521"

}
~~~
* 返回


|参数名|必需|类型|说明|
|:----|:---|---|---|
|status|string|是|状态码
|products|arr|是|狗都是
|∟name|是|str|products二级参数
|∟num|是|str|products二级参数
|errstr|int|是|状态码

* 返回示例

~~~
{
	
    "status": 5521,
	
    "products": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "errstr": 44

}
~~~cY�    � �alue":"12",
            "ty�XL %�oweekend退出公会#### dropOutUnion
* 说明： 退出公会
* Method：POST
* url：/pp/v1/Client/Profile/joinUnion

<!--
{
    "params": {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": true,
            "type": "string",
            "desc": "状态码"
        }
    },
    "response": {
		"status"�pL %�w�_L %�}weekend退出公会#### dropOutUnion
* 说明： 退出公会
* Method：POST
* url：/pp/v1/Client/Profile/dropOutUnion

<!--
{
    "params": {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": true,
            "type": "string",
            "desc": "状态码"
        }
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->cY�ا   � �                                                                    �"�D   ��E��E E�;weekend,用户推荐/举报的帖子#### showFeedback
* 详B�E E�#weekend,用户推荐/举报的帖子#### showFeedback
* 说明：用户推荐/举报的帖子
* Method：POST
* url：/carboss/index.php/Admin/Posting/showFeedback

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start": {
				"type": "int",
				"desc": "起始页码",
				"required": true,
				"value": 1
			},
			"page_limit": {
				"type": "int",
				"desc": "一次显示数量",
				"required": true,
				"value": 50
			},
			"feedback": {
				"type": "int",
				"desc": "反馈类型：1：推荐，2：举报",
				"required": true,
				"value": 2
			},
			"nickname":{
				"value": "zm�]�E E�Yweekend,用户推荐/举报的帖子#### showFeedback
* 说明：用户推荐/举报的�  �  "ed": true,
				"desc": "token"
			},
			"uid": {
				"type": "int",
				"desc": "用户ID（新增时忽略）",
				"value": 2
			},
			"user": {
				"type": "string",
				"desc": "账号",
				"value": "zm_fairy"
			},
			"pass": {
				"type": "string",
				"desc": "密码(md5 加密后)",
				"value": "jf7839fh30ydfy389had8y4"
			},
			"nickname": {
				"type": "string",
				"desc": "用户昵称",
				"value": "大水货"
			},
			"phone": {
				"type": "int",
				"desc": "手机号码",
				"value": 2
			},
			"city": {
				"type": "int",
				"desc": "城市",
				"value": 2
			},
			"sign": {
				"type": "string",
				"desc": "签名",
				"value": "hahahhaha"
			},
			"posting_quota": {
				"type": "int",
				"desc": "可发帖数",
				"value": 11
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"id": {
				"type": "int",
				"desc": "用户ID（新增时返回）",
				"value": 1
			},
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			}    /  /]] x x                             �M�   %�i退出登录#### logout
* 说明：退出登录
* Method：POST
* url：/pp/v1/Admin/LoginReg/logout

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":0,
				"type":"int",
				"desc":"状态码：0：退出成功, 8：token已失效"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：退出成功,8：token已失效
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 0,	
    "errstr": " "

}
~~~cYݑq    De82FTQhNgoPxJz+FRNWnBmiqWJW8NTT6X5loLpj9qJPjHGGDQHkLpUi0dgtiRVpdiK2JyJhTnPUiLCVShJSFsxxwYulxF4MhFrxiJmgU/OpIRfVrSKEzV7/Y29fejlrwgM0mKlchX7XmTfeLoxDqODwMhMOE4PUngS8kjmEkjp2ggu8p3YMZzkMZzw0U7+WCrCqJUiXQXhryzjscOOZkOaI1ZS82orKcToEmvVuqOiNDl8/8Yr95T2lYmqojUbdQ0/gKKmS3pLixzKmJNCqe39s+1kOCUS9VYNAUqlhMXPDq1RVZ60qqriFDldbSk5YCwKQXB6L0/tldXep9VQZAZQsem1T4QYjNFy7tpElxgDRVU1XaVnwdRUqk2p1nWeTfHSFcx8/g6g5tfaWrPfHQF6DO/Var82rPPnlysvjN7xL2tvw/Ay3gBjOo8e97/h/4Gh64bV/mKgO84IH5DwOxh/1j9ScO4c+jmxdwFopx3N/jj6SZKB4AaKneGgumevemdf+34PUOVyPKpSSbRfDBC4A7JMmXDnYibj18W5QKaVujzoh328hhhQt7MBsLy8jIiKAGG6IAhA6VHCMzgjCc8MmhMhNIxbGJog2iJhMN0EAN7iCHQQoXwkoQcFQ0iAekVEYIFhHQm7BEP74WujX6J9BLmrAIqwO27S9if5poVAHEic5QpSo8iVGwOTLLmxxJQbPoNh32+SNyxyEb8YhDBGI/DJxTjLo4HgNoc4qQikUEEtEWl1RQpISkV4eRlBCbH4jKpvBGaE+8DPkTB5PrIEqQwDrxBw4IENylznzauv8xD6Mof6hxCfCo/TNQPSB6bbsqA25vyttbuXvi/1OJfbKTmtV9AKBy9ua+W2Z3435YlE2i/U9MdCfG7DZcsXirVGBnk8wgWh3p9kLQgfsQsMsVFSVzcTubpplzbGlygQEmGKZM4sniER3kNqWP16DUmsB9zEhCgN/S8mc9cmppHFh/gnyUeHfnKHxCOfbLvQP9v/AE8ytIg=cY���    3 �z 3                                     �<   	�M多层objeNrNV19P01AUf+75FLN7MxvLkL0Q45OPmvhOeOjWRqbsj21nILQEiCYoCjPRiJCgJqBPCiQEI5rxXczawZNfwdt27XrXe9t7u0loBmnv/Z0/99xzzz2/bDabzTxQG3Krot+raroGNzMXhyf29ubf3zv2dqe3f2ZtrlnfT+2tdreze3HyrfvzqLfzzN48uOx8sA7eX+63u+ef7dVDJNhS55FUYfGxXKjWZWVhojnXLNxX1MqcVNcLd1XpYaNewIzB7Rv5PCxBBj1iU1KlmiZOZ7xvd0zX+9/BkDe82FTQh   i�<   	�M多层objeNrNV19P01AUf+75FLN7MxvLkL0Q45OPmvhOeOjWRqbsj21nILQEiCYoCjPRiJCgJqBPCiQEI5rxXczawZNfwdt27XrXe9t7u0loBmnv/Z0/99xzzz2/bDabzTxQG3Krot+raroGNzMXhyf29ubf3zv2dqe3f2ZtrlnfT+2tdreze3HyrfvzqLfzzN48uOx8sA7eX+63u+ef7dVDJNhS55FUYfGxXKjWZWVhojnXLNxX1MqcVNcLd1XpYaNewIzB7Rv5PCxBBj1iU1KlmiZOZ7xvd0zX+9/BkDe82FTQh   n�4   	�=多层objeNrNV19P01AUf+75FLN7MxvLkL0Q45OPmvhOeOjWRqbsj21nILQEiCYoCjPRiJCgJqBPCiQEI5rxXczawZNfwdt27XrXe9t7u0loBmnv/Z0/99xzzz2/bDabzTxQG3Krot+raroGNzMXhyf29ubf3zv2dqe3f2ZtrlnfT+2tdreze3HyrfvzqLfzzN48uOx8sA7eX+63u+ef7dVDJNhS55FUYfGxXKjWZWVhojnXLNxX1MqcVNcLd1XpYaNewIzB7Rv5PCxBBj1iU1KlmiZOZ7xvd0zX+9/Bk   �   m m T                                                                        �:��% 	�admin多层obj#### floorList
* 说明：楼层列表
* url：
<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		}
    },
    "response": [{
			"floor_id":{
				"value":12,
				"type":"int",
				"� 	�madmin多层obj#### floorList
* 说明：楼层列表
* url：
<!--
{

    "response": [{
			"floor_id":{
				"value":12,
				"type":"int",
				"desc":"楼层 ID"
			},
			"num": {
				"type": "int",
				"value": "1",
				"desc": "楼层"
			},
			"name": {
				"type": "string",
				"value": "floor1",
				"desc": "楼层名术语标识"
			}
    }]
}
-->







* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|floor_id|int|否|楼层ID
|num|int|否|楼层
|name|string|否|楼层名术语标识

* 返回示例

~~~
[	
    {		
        "floor_id": 12,		
        "num": "1",		
        "name": "floor1"
    
	}

]
~~~cY�e    ue":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"id": {
            "value":1,
            "type":"int",
            "desc":"设备类型ID"
        },
		"name":{
			"type":"int",
			"value":"12312",
			"desc": "设备类型术语ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|id|int|否|设备类型ID
|name|int|否|设备类型术语ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "id": 1,
	
    "name": "12312"

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY��t   � �                                        �K[ %�Uweekend退出登录#### logout
* 说明：退出登录
* Method：POST
* url：/pp/v1/Client/LoginReg/logout

<!--
{
    "params": {
		"token": {
            "value": "101sdhfeh8rthga3f1eed21",
            "type":"string",
            "desc":"token"
        }
    },
    "response": {
		"status": {
            "value":0,
            "type":"int",
            "desc":"状态码：0：退出成功, 8：token已失效"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|status|int|否|状态码：0：退出成功,8：token已�d[   %�退出登录#### logout
* 说明：退出登录
* Method：POST
* url：/pp/v1/Client/Log       2  2                                   �O�\�J�\   =�K显示推荐榜单时长#### showReferRankingTime
* 说明：显示推荐榜单时长
* Method：POST
* url：/pp/v1/Admin/CoreField/showReferRankingTime

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"登录凭证"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"id": {
				"value": 12,
				"type":"int",
				"desc":"ID"
			},
			"time": {
				"value": 7,
				"type":"int",
				"desc":"时长（天为单位）"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|ID
|time|int|时长（天为单位）

* 返回示例

~~~
{	
    "id": 12,	
    "time": 7

}
~~~Yݔ     1  1                                       �LE   	�m	int/floateNqtVFtrGkEUfnZ+hV3fSow1wRYk5KmPLfS99GEbFyON63Z2tyRkFDUphFzU0pRciQnEtlBaE5C0sYn+l7Kz6z7lL/TsjG5dL5tQMqCO5zsz58w55/tCoVAo+AJnEvqc9iylaip6GOzUG+Zu6eZq39xtWadNWirSHxdmuWK0DjqN78blmbW/apZqdmuP1nbs04rRPjELdTio4wU4FVl6k4ik5IS0OKnMK5HnEp6bF2Ut8hSLyYwc8QRDMw/CYbSMgrAERcRiWhXiQf6f2WQxLXkszPpOXNAdszA1LUx4obS4CEAsNjUZfTwIpWQOPRkAsPRWT2EpAaiGdWkA1ZYUFisla4PBEpI6x9OYFlwkO4ECgaAgJn0Sj7EEx6c+LvPofWdOLxt2a7UvedR9Qvd6VcnIqvchgqqJmq6Of9y9J2mtX5j5gnVcuLnafGSuVeh6FXZRenreadQ8hXePKnzKRmR5t2xEjMdms7Fjr1ybu/VBh977X3rMzloesvQPtyCKA1f989DTrPFDaNZjeTWyBhLGqoZ92GNcH1vVml34aK59oIdfhf/qG4RIyclxxbK39zr1OogHCMnQlKEsCodnESgHLRfNT2cIFuFbWtki1vlverRBoNK08pm239OTb4RrE0EkHobFvknvg0gul3NqCj/OFiaqu4MrnB0QLC5waRCMX1tgBRceJTrzGs+ywsQdUQG0s3JNz8pGs+QIhoPCaRA+mr/qB4GZDsZCA+Nvj+wXODbSwzcuk+uf5nkR6mu0NhCCaKCnAeQZMCaTXRvXJR4KQQecA3BJe5seHHnrDyW3D/O9NvhXnmsCgaSdfhFfxiLSYycBmnH/HqcQ+bNWddJmZpgt19doblrNL91BYV56+hYnTgDCJ5T59o8jcp89snauykXd0nlEJRBAo4nsAfr5iwJZ9yqXm0Mk7PbkLwrrmTk=cY�q�    8F8qrx2f+AudXTtu7Dxoq66UZDMzu/PtzHxfJBKJhJ/hXEqf0p6kVU1FD8OtWt3cLd1d75m7Teu0QUtL9NuFuVU2mvut+lfj6szaWzFLVbtZodUd+7Rs3J6YxRoc1HEGTsXnXqbiaSUlz8byM/n4UxlPzUiKFn+MpemcEvclQ+MPolE0j8KwhLyEpawqJMPOf25TpKzss3DraymjM7MwMioM+V1ZaRYcicRITHwUdKUVxzUWcGD5lZ7Gcgq8GtblgFeby/NcaUULJkvJ6pQDY1TwPIUhFAqFBWl6APAEoBD7IRdjo32hi7HhAegTib/HTq/qdnOlAz5yH+FeruZziup/iqBqkqar/Z8n/u8CW2sX5mLROi7eXW8Mm6tlunYEO5GenrfqVV/pvaN5Z856oPwzNBLGfdGs79jLN+ZuLRjQfv9zn5mt+S5L53gLkhS46neEnuWN7fIWfJYXPWsgY6xqeAB/jJtj66hqF9+bq+/owWfhn/oGKdLKdL9i2duVVq0G8gFS0jVlqICi0QkE2kG3lswPZwgWcba0vEms8x/0cJ1ApWn5I719Q0++EEedCCLJKCz+TdofRBYWFlhN4YdtYaLcHVzBdsCxpOCIg2B83wQrhDhZxPFJPMELk2SyAt7W8g092zIaJSYZzAunQfro4nWnE6jJfDw1cL4rMyBnu3YpW7VLeAV9W5nM5TJwlXsvR8WI3xMW5HADhseCATw5V+1L83wJimw01xGClCCrIeSbMq6Wrs2RJ65DCLrA4uGO2226f+jvAZTdPlhst2Jw9R1dIICN9YwMZC0ibYYSoJoT3+YVIj9Xjxhqbob58mKNxobV+OQOC4/Ss/cEOSQgzpTy2M6RRN6ze5bOUzrRq5xPWEIh1JvMPkcnh1Go4F3l8bOLiG5PfgHbFpfjcY�p�                                                                                                       L6zc745c853wuFwOPRKyST1Ce1FStVU9DTUKFfMncLd9Z65U6ufVklhkfy8MDeLRm2/UflhXJ3V95bNQqlZ2yWl7eZp0bg9MfNleFFXpuGt2OzrZCwlJ6WZaHYqG3spKRNToqzFniviZEaOOYKh4SeRCJpDIXj4rKiIaZVPhNh/yyaLaclhsaxvxWmdmvmBQb7PCaXFGQDi8YGo8MwNpWQGDbkARXqjpxQpCaim6JIL1WazVqyUrLmDJSV1gtEY5DvIfB/iuBAvTnYhDiSEIOJCdDCQuRDt70I+Hu+dOrmqNGvLNvaodYbW5mo2I6vOk/CqJmq6Gnw64bHzW1+9MHP5+nH+7nq931wpktUjWAnk9LxRKTky33k1y8rMh+XD2IiKEshmbbu5dGPulN0O7fOPOsz0mfNY7NXNi6Jrq3sPPW1drAedd1jGfHMgKYqqKV3ax7g5rh+VmvlP5spHcvCN/697gxApeTIoWc2t3Ua5DOoBSuKpMjSPIpERBNJBNhfNz2cIHsyWpLiBye27Zu4Drp//JodrmMkSRjgRgcf6xu0PwgsLCzSb8EOXcDmtFVQVXUF3JXimCrzxawNwANjGwvC4MmKlJEH1BNDG0g052zSqBaoVFIW3QfNI7toOQlNSzAoNzd6KR4pfnJHbSWyUL8nJd/J+dzyTmYatWvtarGjL+9KCGC2H/iG3gxXckutL83wR0mvU1hCCkKCnHHKqJ8ehAPG0I07tdCA26bTbPRViB52NbUc8uok4qpqMdFs4/Tgz3fTlzGTTlzRTzQDeVDR7Y22XTCCOoIpp1uEmbrfI/qG3hg9yD6thpqsYLhlDdNxV9RBuK5zlD3KFO7qE8J+VI3r3FgT92fE1quv16tdWs1leevofTkxE2k7Q6dje0qhzbN8CtE0Kv+sUHrWaHjAl7HXmmBA902DzwZeGbTz4HXoUrBxyTgfObfKOhwAXv/lAfe/nA/wb8xzeNhp8tcE7GXrOUGcu+CXJOxbuO+kvErs+3w==cY�[%                                                                                                                                                                                                                                                                           �l?   �%登录APIeNqtU01v00AQPXt+hdncUIxpoKWKECeOIHFHHKx401qkjtldR1Rso6YCDpSSHFKpLVUFEuqFg6lUUUSB/pmunZ74C4ztxNgxKZeu7GT3jXfmvfmoVCoV/RFr235DPHC44HBdHwXH4c673z/2ot1T9XMbEZ+18GiuPrVNx7Xp8xvesmc+pKyxbLnCvM+spbZrFrzcvWYY8AJ0XMSzmLXCSV1Pzwnmc8oKSIKKVY8iSrhgjrs0v0CqoGkaYfSZ7zBqk7pgPq0W77SoG1+5VSNThhUnMSxO4x2r5WMU0rQ4PnZz2m5T3ogvjo4PVf+EZMa1v9+hJM7/R59cEVGdzN2+szhf41YTCXeszizCKngdfejlCEOONiaRe22X0xLtxMqFJfxLJDmumA7roUcq0Pi45G6uWoJqBeTJLKk3Z4mL3nwN13tFfbmCUMYw61dWkoxPmtOL4e4oCGZRS61hfxB9+l7KPqyBYdwDHCLV3wi3vwAumW7VYEtGR6fqYFOGO4EaHKqzV+rjZ5nOnwRZN3Alv3Lygux2u/Hw4F+8nUzK+Ih+4t35t61wGIRve9HeyzgDaZTJtyDj9pXpUWJcmaqEZPZPwqMNFHL+axMAfeEQa5Af2fzcaJCfhlKfAoqPXaDbs6F6f1CUjmov9tcnGbhcdNqeErsw4Zs1A8i08Hkx+XJAFvufkrKuT/puDGatVCz+WMwffhqmCA==cY�P�824    aKnylxDw8zHBi3ifIozDsuIB4sJwFwphkFxlXA5xYT5YzEVERhU4ID2xvJ88Bk4IHw8Fe0wEdNATM+hZEDVzLK/c97aG2/rIDzBMuDQlsvly069rlS1Mf7k050JOI03RuXCCUaQIRIkIlVIIWNoA4QomLkhXOchXPPBrj+jLPAXBUax4CoV2UqIeGkZjh9+NB/SGbCUOldbSgHDllyt6L6J0nj/G8w2HhrtGpMNzazXdBO/u7JpKVbDTFxKxk2hFHf/cge3U6HVdr1RhYBSKWXx031rNLQnjYqh+VXOMhpaHnAWhWhzOi9PvOWVzucVZGdiqFwPOyjCHgzRc/7a7C5xDzTDMC2DfgomJjIlpaJbIkkJjytwCoU7APa/7uaq9+4QwGGH/7rN17Z79vxi+YXdOfrt7q7b4Ym3gT1ZgCP4a/d+gW3ZbvOrDd84G70fwP679sliyAJxKIe59W31puGP39fZEG/D/bIhrH36qnP6rRtqDPP7OSasXGYGEDyVEQIPQVUpgkDGEGJ2k0tD1hiFHuApa0QWy8AHDOind7QKuU+7tQ7A0tISpCgSQAiJJAFKa4JKcC6CSuKeREKmUSoi9QuIvkgYzDYBgNERiY4h1Iw0dFwlpBRoWDkkHlgfO+HX4aIoPXv017OLILcTgKIczDu0FKU/sSBSByS2csmnI+57ec9H7JLnfCxynY8ed+HPOCkaHr1EXBxKGJeRxPQYwYpYIIQtoE7MdAYb1DqR1VaiimQ0hNeYAYxgRGhY9gbgRHgM4uwI0xejSSCTYyCqBATwgA/KXeidqy/0APly+noIhEmh83TLANoDTtC1wE7m7K27s5vsSD8u83WkIdsKuiW//4qa4KCr8otH1EiFyETnBbt8JqRHZnhc9LBMJ2RQyBcCEOzxESfRHhG7PYRsktq3qcQDTXuaMTpEgZD4UOJ4TOPHIEFrSJ1pryiDNFIDgtMHkizzUlzmr82eJhaP0EtSjD67FN6SkFvyZaF7gf8DFLqcqA==cY��C                                                                                                                                                                                                                                                                                    �c)   	%�默认页面eNrNVjFP20AUnrlfYS4bSmIFyIIqJkaQ2CuGwz4RQ+yYuzNJFFlqqg5Vh0CnBroUCUaaDhFSEQp/JnHIxF/gYpPUDrFzdlLEWyydv/d9z+/ufb5UKpWSdklJtRS2rVFGwYr02Go7zcbT/YXT7PSv7nqNz73ft87pWbfz87F90/37p3/xxWlcDzrnvesfg6uz7sOlU2/xRIsUeZZcPVJlzVBxJWsWTHkHE6WADCZvEXRQMuSAGPiwnMmAGpB4QBMRpFO4IdXAEkRwgz9Y1cR8AWoGg2kXNQp4goqW+y6Xz65BsGT/ew+ZSyJJwYwRWWn/cJJMR5UxVYhOLbDsEbKp6zPEBJh9CiwSEJBChIRIvZL8GAkbRm0mwiVEPDhfLi0G3+fB4asz0XYkYg/Ey7NDdkDFVBl2zvn63Wm2vHMPgUA2VJT/vfUG0nFOfPPDxWKIjqHlshAuZgUJKvFVVI6VkLC0OUr0l1pOlBlzmhcw5fNNf2gBvHRhT4jwvqqQVSSzkPjWshgdcbQY0p7TSu23tVIQwQV1zRhS5Fcn/8HR5B7pCxkkmJolgwZnF1KGmEVfTWXEqISY+9CW3fFEYd5uWDoH5PMzPn5v4hsJPrY0glWey4iF00DQFcbN6X+7dT7V+7/qvs747kSmd++a0oMFKqffTXen9gATQhkJPwXr64k2ZcrtNGpTvOMK7Exm8xn09jSFcY���     �7�[ �                                                                                                            �/   	�多层objeNrNV99P00Acf979FbN7MxsLuL0Q45OPmvhueChtI9Otq9ergXAjQDQhojATjRMMSgL6YHSQEIxoxv9i   �� .   	�多层objeNrNV1Fv0lAUfub+CixvBkZAeFmMiYmPmvhu9tC1jUOh4O2tGeFCBtFkccow0YibmS7Z9MEoW7LMiIb9   h� -   	�多层objeNrNV1Fv0lAUfub+CixvBkZAeFmMiYmPmvhu9tC1jUOh4O2tGeFCBtFkccow0YibmS7Z9MEoW7LMiIb9   g� ,   	�多层objeNrNV1Fv0lAUfub+CixvBkZAeFmMiYmPmvhu9tC1jUOh4O2tGeFCBtFkccow0YibmS7Z9MEoW7LMiIb9   f� +   	�多层objeNrNV1Fv0lAUfub+CixvBkZAeFmMiYmPmvhu9tC1jUOh4O2tGeFCBtFkccow0YibmS7Z9MEoW7LMiIb9   ��P*   	�u多层objeNrNV09P1EAUP3c+BXZvZpcNyF6I8eRRE++EQ9k2ssp217ZrILQEiCYoCmuiEcGgJqAnBRKCEc3yXcy2Cye/gtN2t53ZzkxnugthAoTO+70/M2/mzfvlcrncyAOjpjbK1r2KaZng5sj5wbG3tfHvz7a31ersnbobq+6PE2+z2W7tnB9/b/867Gw/8zb2L1of3P33F3vN9tkXb+UAKjaMOahVXHisFiu6qs2P1mfrxfuaUZ5VdKt411Ae1vQi5gzcvlEogEUwAodcVwylasqTI+F3MGd1P6OZcHahrkGBXJt5JOdxUVWZ9yVjpdFb/   �    �  �                                                                                                                                                                                   �@1   	�U多层objeNrNVU1vEkEYPvP+ChxuBtzU0EvTePKoiXfTw8BuLArLOrtrbBhIIZoYq5SDRmybapNWD0Zpk6ZGNPBfDLtbTv4F352FtQvLBraaOGHJ7szzvF/zvDOpVCqVvMPKspk3bhV0Q4eryfPOqd1u/vqxY7d7zmHXajasL2f2dmvQ2z0//Tz4duzsPLGbR8PeW+vozfCwNegf2PUOEk1WRJa08UCWCqqsPL6mrWvSbYXl16lqSDcZvVdWpYAzWL2SyUAFkjiIRhkt6WQl6X3PM4gsywsRBMnY0BRkkXLuPkkvRn1Ei6aysEdBVWlJWYpFDQRNGVsw6Kng78aiu6MSmykCoBS9L6UvZySXQyPXY9uoxmKuwb/1Mz96PqQAVb1KE6boWlnVg7olukENc7rdIlQSvvtC2EKZdIYwiWqWELC8DNHJrAXpGPdDs8AUt8MNZioTq7MbgsiKnneXnOdn9mbdeV8n/nr1D5Ro3lEUUoO/6Dn931Q3tAYKY7rBZqsgm421KQXVWGRTPLlCNZO5AXiRWNsN+/Ux4ODeq9V6yZ2T79b+FrfbHav1weo/tQ4+ce+q4sBXMjjEPx8/wPFy4HjGc8S7M8B/PnsnTmExg7vnz+KPUtc0x2JwgRl0Xzjdj6NIRphcLgIjbs6v9kkD78xBbwugVquBahaL4gUX+6+s3f1gTpjGcG9znFp0Nl6/irDdIPwy+mn5sXnIqQRQJ5GQcTvM42KMjXQSDvIUx1EhE078Gl0sYAUSMHlcJRIQ3h6BhYtdAQnU/MhQoOsvZ8pvnmwWoOrG+xuuhIfocY���    E4dj0nGERnLoEcCiFSSqjJShVJORcKcZzEW4QaU0IPijWX54DPoQfDxWLQZiZiGZH4mYwVKslZ0Zs5ee2NvHXg7WAQOb7FYvOylV6SKPMa/+OxkCZIG0EaDC5ewghSVYBU1EjmkLG2AEvFSG6k8E57mIZzywU4/swBUOndPiOh9C1ytIl0LSd5ahpOHH82HNAdspebVtlKIiCVWyooTojDefwdHB/eCdoOJqqzVqopGnl1R0yW9roVOZcRRYTR3py27x1Ni9XalXkGAQiHm5af73lGVn9TLqlxCvrpal7PA2RWCyem8PLGXVzqfV7CZ6UHFmsegKHMwxMzZazO71DmQVVXTVfYumJhItShlRU+yKN52BTOXuwOI/1qbq/a7Q0CP4f1rNV8b1tnzi+UXRufot7W7bng73gBjMoce99vw/8DQDav51UB3nIGfDzD+rn3SI2yu2bOjtXVi+cPo4/A6A+ENNF8GgrVPX3VOv3VL7cEcPhcJKxYjC3BJToAgS2g0GAbXFmH07A3GmwUfZPErd+CMNww+6Dpi413989M+WkXKp91aB1haWkICRQBMjggCMIgJbiGVCG7pMRIBG8aFiNBvoOaiYYjYFAAhRgQ2htIx4tC9HiHEQL2+IfDA+rQJvw+XQPHjse/OLoJOJoDh7I6brCWKv2AhcAeaVrnk3dHTK7z7o5eSZ38scu0PX7nwrzitGh6/UF0cToSSEZL5RRSbJAKl7ATupL4R0oZgtom0sUJNJGUgssUMEISQQcOKN4giIotIro0I/2QiCVIlhqROkAAPfFDuRm9efaMH7JfZxyEwHYWPsyMDigemy1oQkzl7a+3shvnox2U+PuppLZcsOfQroMAuq3KuiYBHecgQ80IcPxLiSxmeFD42Mgkd5KkFF4QYPpYkmCMq28OkJo2+TYUuaNbVTIghBoSmhkLbY5rcBiFRQ2OmfleGOEkD7u6DsMa8lJTZazOnoZfHxCWtRkdbJp4ST1nyrUL3AP8HnVGgNA==cY��   B B                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        �32   	%�5默认页面eNrNV11P01AYvu75FbO7MxsLyG6I8cpLTbwnXJStkSn7sO0cZC0BogmKfJhoRDCoCeiVAglBRQP/xawdXPkXfHvO2vWs53SnHRCajo1znvfjfL3nedLpdDr1QKsW6wXjXkk3dHQzdbZ36Gys/vuz6WyctHeO7dVF+/uRs7beOtk6O/zW+rXf3nzmrO6en7y3d9+d76y3Tj87C3tgWNemwSo3+7iYK1WK6sxQbaqWu69qhSmlYuTuasrDaiVHBUO3b2SzqIlS8Mg1RVPKujyWaiJJVuQx98uYranQIpcqhpzBMO+RnyrTddw3nB+6JSPJ6vbLBvaSStEWnrPq5KNeZ2VlxnfFidOkmolDg9neJ5iA50AEIxJAhVI0jRMqFHI8EuY+zb4I7FCBB/wNZ8Tgk/AAfKQv2   �   � � "                    �\�" 1�kweeke�F�" 1�?weekend用户上传头像#### iconUpload
* 说明:用户上传头像
* Method：POST(�^�"   1�用户上传头像#### iconUpload
* 说明:用户上传头像
* Method：POST(form multipart)
* url: /pp/v1/Client/Profile/iconUpload

* 参数:
~~~
！ ！ 这里必须使用 form multipart 格式！ ！
token: "101asdh8ferhf75gh857gh57g"      //token
~~~

<!--
{
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0：成功,1失败, 16 上传失败"
        },
		"icon": {
            "value": "http://zm.fairy.com/fairy/zm.jpg",
            "type": "string",
            "desc": "头像链接"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->







* 返回



|参数名|类型|说�)�"   1�用户上传头像#### iconUpload
* 说明:用户上传头像
* Method：POST(form multip  �    P  Pxx                                                                  �-M %�weekend
楼层列表#### floorList
* 说明：楼层列表
* url：

<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		}
    },
    "response": [{
			"floor_id":{
				"value":12,
				"type":"int",
				"desc":"楼层 ID"
			},
			"num": {
				"type": "int",
				"value": "1",
				"desc": "楼层"
			},
			"name": {
				"type": "string",
				"value": "floor1",
				"desc": "楼层名术语标识"
			}
    }]
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|floor_id|int|否|楼层ID
|num|int|否|楼层
|name|string|否|楼层名术语标识

* 返回示例

~~~
[	
    {		
        "floor_id": 12,		
        "num": "1",		
        "name": "floor1"
    
	}

]
~~~bY���   6ring",
            "required": true,
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        },
		"type":{
            "type": "string",
            "value": "room_number",
            "desc": "搜索类型: room_number 搜索房间号（对应返回 response2 ）"
		},
		"key":{
            "type": "string",
            "value": "10",
            "desc": "搜索关键词"
		}
    },
    "response":{
        "response1":{
			"type":"arr",
			"desc":"返回结果1(房间视图搜索返回)",
			"value":[{
				"floor": {
					"type": "obj",
					"value": {
						"num": {
							"type": "int",
							"value": "1",
							"desc": "楼层"
						},
						"name": {
							"type": "int",
							"value": "1",
							"desc": "楼层名术语ID"
						},
						"room": {
							"type": "arr",
							"value": [{
								"room_id": {
									"type": "int",
									"value": "1005",
									"desc": "房间ID"
								},
								"room_number": {
									"type": "int",
									"value": "    Md0tffIreGZmd9krtgm6SZvZ+Z/Zc86cc37JZDKZeEDKeWNKv1fQdA3dTlzWT6yt9d/nO9ZWs33QMNeXza+n1kat1dy9PPnS+n7U3nlmrR92mtvm4WbnoNa62LeW6nDQIEU4lZ57lE8X1Lwy21+ZqaTvK2RqBqt6+i7B02U17XOGRm+lUmgeJeCRK5jgkibnEuKd72k6xlg3/LtceYKLhgLb8nBmKCP3+cUSngUpmx0a7B++E9QKqqMNjAQ0ojw2CkTJg4FODCWg6nMV7rGg6kGHeUWbYlL71alVXWp/WJJdfaEPSRIcVjR9KD4NFs/NJ5HNxqTwsFjGPSWB7FRsD1qlrGpKqFbXVioixe7uW9NJQZ3u7cpds4rot4i4unOOCYn1vLrZefrT2qoHDZyMx33b7JkP7fADKi4JZzjwqSsLo8SvMKQu+HYmIu9AIQTuML4ymcz/mAPRQmgBpVJjCHBhbixbb48QPFQszdoaNS+ed6ortH38w9xbpQJFFNFcCh7+T50foouLiw4fYMleoRb2CmJjK5ihnGyPkNz6tgYGoIivD45OkjEYJNtgYCRowHTuhc+u/WGz9tFe8Rlia+e2Lutn5v5n88X2ZLlcNKvn/DwH6pl1vAwobTVXEYITQDwJhfkmSSgWb14tAAaf5OeCVwrV1Cv6S+pVYiqKJMY1kcQV2qIyEGN/o/EzrEVF71Ctu/gRtCIrBhTo4o25uxduxHfV7hpRkI9C71DBKup6Q9QBEJeBJtTFBqK/Xr5no++cdG1bjdftxid7QLiVUfqLkZhxbgRF9ATg5hfXgNe1X7h4XbWRS+weO8kH6569ClRHuvSQOirNcdiVkB/UUnArTOoYkyhUM9srVMPbRCh5D6WjYmSQ/qfzbM/DHw406SY=cY�R�                                                                                                                      3 3��                                                                                                               �1�^ =�	weekend,修改帖字类型属性#### removePosting
* 说明：修改帖字类型属性
* Method：POST
* url：/carboss/index.php/Admin/Posting/removePosting

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc"  7�Y�` 	1�madmin【】【】【】#### Search
* 说明：登录
* url：/ykd/index.php/Merchant/Dragon/Search

  �=�]   	�][[]]##search
* 说明：搜索
* url：/carboss/index.php/Client/Postings/search
<!--
{
    "params": {
        "type": "obj",
        "value": {
            "type": "obj",
            "value": {
                "cc": {
                    "type": "arr",
                    "value": {
                        "type": "int",
                        "value": [
                            15,
                            66
                    �    �  �                                                                                                                                                                 �R; 	  	%�u默认页面eNrNVM1vEkEUP+/8FTjcDAiNkFSinjxq4t14mLBLuxGWdWbXtOlACmpirAUONmJrqk3aejAKTZpaUeF/MfsBJ/8F386y6PKlrR6c7GzevK/Z99v3e9FoNBq5TYuymTVuqsxg6GKk3zp2mrXvX7adZtfd79i1qv3hxKk3rO5O//i99antbj9yageD7kv74MVgv2H19pxKCwJNmoeoxOo9OaFqsrJySV/WE7cUml0mmpG4QclSUUuELkNXL8TjaA1FYGGdUFJgOBPxz0LHDEKIYYa1wvKA5E0F1JjkZAYPyREmi81kkHOMyGLjGMJ5RcOZhWQyFk5BlfumShUZshjUVMasxqou8jODqtoSpJEkCRfICs7gK8ngqELi9OJYpKywrBfpPj1x1ivumwoe2UtCKvkB8AFML2pMmah5bsV3QmpvrU1oRIBGCj5CBMdmeJgFcEinJ6ylkObuuYAjlOIzIPPTFet+j0zB4B/eHPtv0J2KgUIpdN7sLkilzvVTVM3AZ25XVELx+HUEFLfrVWerjWBxX7Qbm9w9+mzvbnCn2bIbh3bvsb33jvtDhCOeicMSbx5sxMvlcsBsEP2jx7LhATJ5kih1sNWzO4fWaefyQsw63ew//Gq361anBpy+ll5EYl59dI6qMKms7gZCEAgDRULj4+O3cwJBlV4wJOw9t3d2wzVCWYNX60Gp86vzCcyhCz1M+AhXxL89ee21jVBDxUNPq/PM7bwdQit8zMJcl4Aff3JF4Dv3kulOfgtyaJmxS0YYzQI9mF+ShKbzJWT4lSZIAhIME4XGwN+lGrEplRr+5x9w7khFcY�    McwAK/+CZ+48mCdCUr1JmzvnO4dzvnvO+SKRSCT0gORTclK6lxElEV0PDVpnarP++3JPbXb6R22lXlW+nqvbjV5nf3D2pff9pL/3VK0fDzu7yvHO8KjR6x6qlRYEyiQLUbGNh6lYRkjx67OFtULsPk+Sa1iQYncJXs0LMUcytHAtGkWbKAQnXMAE58RwIqR/M5soYYwl2WllyGOclXkwh0WcFnEqHZ5x4jm8Dmg8Pndz9tZtN5YRTOzGHRdG+EdyhvApcJCIzLtQaaPAkmYEyZ0wxYtJDeq/OlfLlf6HStjCizOI4yCYF6W5YCZaPVdPIh4PoJDO5vFUJJBBxcggFvKCyHvaNbZZPhQne29RIhlhdbont9wK+sj51DVZckxIYObazvDJT7XZcjuYjJccZu1seiwsQMA5PRl2/dTIQ86xJ/SgRYdl2fcNeELgDYM7Mz//P/ZAHyFURNHoIgLFULar6tsTBIfqV6WxRZXus2H5Je2f/lAOalRXI4poIgqH/afmH6KlUsmUCLhqn9AL4wa1aTfGMGGoRO/bFjgAsrBCFlk4W0ojQml8NG5sObS7+QyD1oVy+Fl5vruSz2eV8iWLZ2J5oZ5WQSZ7nRpCEAFqxiGvdnEcGidddti19A7IufN2yNMvO+hslx0J6BbiNM3SeYxky4+EvtJXWr8mWX7Vm4o1Wf0IxkzrB/So+0bZP/AO2bvyZEOmqxqFwaG6DlErG6KmuDAYlIJakoDorxfvtbU2Iy3fXvt1v/3JGH7mJef+4qTvL3OCJtoKsPgFzeC4CfQ2b6IxstR4yklyCPHUWXUZ9k1pU2E/mktg5ZBThDm3yavCAS5+Mqz5jmQYvpY95G0K7FejJsD/dJ+NffgDrkncPQ==cY�R�                                                                                                                                       lixTkcB3MbSMJ7+C5/ZSCm1XmZLMNZSe2/M7PfeeP78TDofDoYckL+mr2v2MqqnoduiicWbW9n+1D8xap19vGfs7xpdzs1LtdQ4vzj73vjf7B0/N/eNB551x/HZQr/a6n8ztBhjqJAtWsc3HUiyjSPLGncJaIfZAJqtrWNFi9whO55XYhDMUyWpLt6JRtIVCcEXW9by2VMAE51QuL4a4xtGqGsZY0330DuYJzuqyDeBPnJJU+OEUViXrViWQUyqWrJuDRMSfWVkZWs/F46KPAyKv6xkiS7YPjeiyH07bLLj2oWoko6Rtd4IgcDGHN4Y4/rgb90Iy9qYSST9fkqyuTvrqvzw3y9v9j9t8ObIpWlJRROMHUgt5RZUDon6VmC9PANi15XnjmCo4584Wto8fYKXnbKNEwoMrTrxZmW0SMSF++7tyHkRXlAu8NwLjfF27Fm9czi+Ps0wI9OHU1bywMNvyySjaTMqHtzEqomg0kgYFULBR2THfNBFclItGdY8a3WeD8gvaP/1hHO1STu8U0cUoXNY/tW9EbXqlZq1BU9k81ihw05CVEvNDWup92wO9pWYM/ogw/0BQNi4ZABsdRzTfl436iVFuw3etRbPCFklkDaGv5ukOjJ9eZxehUqkEI0JAQWNAEFBADhPx+TnRi/FPogfmzSE/1IijXXiHzkPsbD6AEZmHGJt79NNVARKKCNLPogMR6742Do9cmS+3vfnmKUcUzDitg8AWkKqhBEzBJER/Pv/AGtUqBugYyvG91qt+62RYahZGzwVC4GM2tU3vy7YI9OYPgg/yFvd4g9ZjklPS44UKSt4jfjX9ByAaZSCwZq9Qscts9KNJPhXcr6Yj1CCzSxmVWTmMCquVWfbP2DD6++IXJ8LrnZ7/yXbFG5dp/wC7x2bwqdjUnF0CxmbmP5Plb0iCNIA=cY�V�                                                                                       E4dj0nGERnLoEcCiFSSqjJShVJORcKcZzEW4QaU0IPijWX54DPoQfDxWLQZiZiGZH4mYwVKslZ0Zs5ee2NvHXg7WAQOb7FYvOylV6SKPMa/+OxkCZIG0EaDC5ewghSVYBU1EjmkLG2AEvFSG6k8E57mIZzywU4/swBUOndPiOh9C1ytIl0LSd5ahpOHH82HNAdspebVtlKIiCVWyooTojDefwdHB/eCdoOJqqzVqopGnl1R0yW9roVOZcRRYTR3py27x1Ni9XalXkGAQiHm5af73lGVn9TLqlxCvrpal7PA2RWCyem8PLGXVzqfV7CZ6UHFmsegKHMwxMzZazO71DmQVVXTVfYumJhItShlRU+yKN52BTOXuwOI/1qbq/a7Q0CP4f1rNV8b1tnzi+UXRufot7W7bng73gBjMoce99vw/8DQDav51UB3nIGfDzD+rn3SI2yu2bOjtXVi+cPo4/A6A+ENNF8GgrVPX3VOv3VL7cEcPhcJKxYjC3BJToAgS2g0GAbXFmH07A3GmwUfZPErd+CMNww+6Dpi413989M+WkXKp91aB1haWkICRQBMjggCMIgJbiGVCG7pMRIBG8aFiNBvoOaiYYjYFAAhRgQ2htIx4tC9HiHEQL2+IfDA+rQJvw+XQPHjse/OLoJOJoDh7I6brCWKv2AhcAeaVrnk3dHTK7z7o5eSZ38scu0PX7nwrzitGh6/UF0cToSSEZL5RRSbJAKl7ATupL4R0oZgtom0sUJNJGUgssUMEISQQcOKN4giIotIro0I/2QiCVIlhqROkAAPfFDuRm9efaMH7JfZxyEwHYWPsyMDigemy1oQkzl7a+3shvnox2U+PuppLZcsOfQroMAuq3KuiYBHecgQ80IcPxLiSxmeFD42Mgkd5KkFF4QYPpYkmCMq28OkJo2+TYUuaNbVTIghBoSmhkLbY5rcBiFRQ2OmfleGOEkD7u6DsMa8lJTZazOnoZfHxCWtRkdbJp4ST1nyrUL3AP8HnVGgNA==cY���   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              �G   �]登录APIeNqtUbtOAkEUrZmvWGc7w7oCooQYK0tN7I3FhB1gFWbXeRCJIYHGwkIsNAEbSXy02xBJFD9nH1b+gsOSILub1YbJNPecufeec0ZVVVU5opYhKvzAZJyBdSVwxt7g5nv64A8/3M97iQjakKXePjN0kxj4YsOu2/ohppU6Ilzfp6hmET0yZXdN08AlUOSBNqKoyWBZmdchJhimESREedvGEoWMU5PUitswCzKZDKT4XJgUG7DMqcCFYjba1cBk1lTIwxjRNEOiFMdbqCHkHlhFTF6jGucNzCqzxmD86vYncEF2ft9JU4z9ZwCuSKgCc1s7pWKeoaoU3EKtNMGuc+WPekuCwZJsGSOzLcJwQnbIMo64+MOSSXh8rS0nYi7J48S4XDYB5SPISZrVzTRz/vWb1+1F/S19CKZUpr6yL1nomWf6dTcMHCdN2pz1+rf+83sifdABmrYH1MCZeE9d7/HllFnEG03daV/9AY7w5bo=cY�u�   1 1                                                                                                                                                                                                                                                                                                       �LI   %�e参数说明eNp1UcFu00AQPe9+RbS9ulJTiYsPSBy58QtOvIVUbhJsB4qQI9MGqVWg5pCooZRCaJsiIHGQIuEkrvIxZDf2Kb/A2GtbzgFL9s7Mvjdv/MZ4Vnup1sqFR08eM+eId8fBXYudfCwWdzGmh8pBXaNr/wI3m038GiNSLhO5AAE88CHmqzqFAqmV9omU1F4oWoOmKCAAQxCITp83KjpViWzqDSpqGq0S+cGOJLID5TCfVfJ3G1qilEiJ9oioahYjoihELkppVioReTdJLHFa8bjxa4nTwlb8ozhxwp3w3ln095H02n+HkLhY/Z6zq3ZUYIu3rP8TobV/Uqma0p5WU0zJMPVK9akEc0qKrq/9UxzPmbKZ7aOUWIiCsD9femfMnbJZJ1JaffJWvwbQPmjfsmGPXX4HW/7ab8AOKAoCFPmlzW7uoFsUjB0IltN2eD7BYCnsgg3PoUvYXbDZQELh56t0Vub8CI7vec/lw2vencBEGPqDA1lDlIdnKNDOAWPBPLCwiUx3jUCIfRgkoDxczAEx847ZuAPtgBfOe8HoZk/RDIpVapRT07jjBIvxJj82LNnIRUtsC9d1alAT/V82avZ+FH5rre5HIMjdDhscGaZiNgwx0dKb7YDbRSlbV2a5YIX2adifLr3h9vZDvBW4f/i1zb/c7hu1Kv/qM9/Z+gduE5ddcY���   1 1                                                                                                                                                                                                                                                                                                       �LH   %�e参数说明eNp1UcFu00AQPe9+RbS9ulJTiYsPSBy58QtOvIVUbhJsB4qQI9MGqVWg5pCooZRCaJsiIHGQIuEkrvIxZDf2Kb/A2GtbzgFL9s7Mvjdv/MZ4Vnup1sqFR08eM+eId8fBXYudfCwWdzGmh8pBXaNr/wI3m038GiNSLhO5AAE88CHmqzqFAqmV9omU1F4oWoOmKCAAQxCITp83KjpViWzqDSpqGq0S+cGOJLID5TCfVfJ3G1qilEiJ9oioahYjoihELkppVioReTdJLHFa8bjxa4nTwlb8ozhxwp3w3ln095H02n+HkLhY/Z6zq3ZUYIu3rP8TobV/Uqma0p5WU0zJMPVK9akEc0qKrq/9UxzPmbKZ7aOUWIiCsD9femfMnbJZJ1JaffJWvwbQPmjfsmGPXX4HW/7ab8AOKAoCFPmlzW7uoFsUjB0IltN2eD7BYCnsgg3PoUvYXbDZQELh56t0Vub8CI7vec/lw2vencBEGPqDA1lDlIdnKNDOAWPBPLCwiUx3jUCIfRgkoDxczAEx847ZuAPtgBfOe8HoZk/RDIpVapRT07jjBIvxJj82LNnIRUtsC9d1alAT/V82avZ+FH5rre5HIMjdDhscGaZiNgwx0dKb7YDbRSlbV2a5YIX2adifLr3h9vZDvBW4f/i1zb/c7hu1Kv/qM9/Z+gduE5ddcY�U    E4dj0nGERnLoEcCiFSSqjJShVJORcKcZzEW4QaU0IPijWX54DPoQfDxWLQZiZiGZH4mYwVKslZ0Zs5ee2NvHXg7WAQOb7FYvOylV6SKPMa/+OxkCZIG0EaDC5ewghSVYBU1EjmkLG2AEvFSG6k8E57mIZzywU4/swBUOndPiOh9C1ytIl0LSd5ahpOHH82HNAdspebVtlKIiCVWyooTojDefwdHB/eCdoOJqqzVqopGnl1R0yW9roVOZcRRYTR3py27x1Ni9XalXkGAQiHm5af73lGVn9TLqlxCvrpal7PA2RWCyem8PLGXVzqfV7CZ6UHFmsegKHMwxMzZazO71DmQVVXTVfYumJhItShlRU+yKN52BTOXuwOI/1qbq/a7Q0CP4f1rNV8b1tnzi+UXRufot7W7bng73gBjMoce99vw/8DQDav51UB3nIGfDzD+rn3SI2yu2bOjtXVi+cPo4/A6A+ENNF8GgrVPX3VOv3VL7cEcPhcJKxYjC3BJToAgS2g0GAbXFmH07A3GmwUfZPErd+CMNww+6Dpi413989M+WkXKp91aB1haWkICRQBMjggCMIgJbiGVCG7pMRIBG8aFiNBvoOaiYYjYFAAhRgQ2htIx4tC9HiHEQL2+IfDA+rQJvw+XQPHjse/OLoJOJoDh7I6brCWKv2AhcAeaVrnk3dHTK7z7o5eSZ38scu0PX7nwrzitGh6/UF0cToSSEZL5RRSbJAKl7ATupL4R0oZgtom0sUJNJGUgssUMEISQQcOKN4giIotIro0I/2QiCVIlhqROkAAPfFDuRm9efaMH7JfZxyEwHYWPsyMDigemy1oQkzl7a+3shvnox2U+PuppLZcsOfQroMAuq3KuiYBHecgQ80IcPxLiSxmeFD42Mgkd5KkFF4QYPpYkmCMq28OkJo2+TYUuaNbVTIghBoSmhkLbY5rcBiFRQ2OmfleGOEkD7u6DsMa8lJTZazOnoZfHxCWtRkdbJp4ST1nyrUL3AP8HnVGgNA==cY��l   � �                                                                                                                                 �j9  �d9   1�用户的朋友圈#### ShowInfo
* 说明： 显示当前用户的资料
* url：


<!--
{
	"params": {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": t��9   1�g用户的�x9   1�3用户的朋友圈#### ShowInfo
* 说明： 显示当剌09 1�admin用户的朋友圈#### showFriend
* 说明： 显示当前用户的好友信息
* Method：POST
* url：/pp/v1/Client/Profile/showFriend


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101du43hu9gube39gh3",
				"required": true,
				"type": "string",
				"desc": "状态码"
			}
		}
    },
    "response": {
		"type":"arr",
		"value":{
		"type":"obj",
		"value":{
				"uid": {
				"value": 101,
				"type�49 1�weekend用户的朋友圈#### showFriend
* 说明： 显示当前用户的好友信息
*   (   �            {
                                    "aa": 1,
                                    "bb": 2
                                }
                            ]
                        }
                    },
                    "desc": "我是说明"
                },
                "cc": {
                    "type": "obj",
                    "value": {
                        "name1": {
                            "type": "obj",
                            "value": {
                                "dd": {
                                    "type": "obj",
                                    "value": {
                                        "ddd": {
                                            "type": "obj",
                                            "value": {
                                                "name": {
                                                    "type": "arr",
                                                    "value": [
                                                 �          {
                                                            "aa": 1,
                                                            "bb": 2
                                                        }
                                                    ]
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "desc": "我是说明"
                }
            },
            "min": "52",
            "desc": "我是说明"
        }
    },
    "response": {
        "status": {
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ],
            "required": true,
            "type": "arr",
            "desc": "状态码"
        },
        "products": {
            "requir   �ed": true,
            "type": "arr",
            "desc": "状态码",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    }
}-->

* 参数



|参数名|必选|类型|说明|
|:----|:---|---|---|
|tt|否|obj|我是说明我是说明
|∟tt|否|obj|我是说明
|∟∟name|否|arr|---
|∟∟∟aa|是|str|name二级参数
|∟∟∟bb|是|str|name二级参数
|∟cc|否|obj|我是说明
|∟∟name1|否|obj|---
|∟∟∟dd|否|obj|---
|∟∟∟∟ddd|否|obj|---
|∟∟∟∟∟name|否|arr|---
|∟∟∟∟∟∟aa|是|str|name二级参数
|∟∟∟∟∟∟bb|是|str|name二级参数

* 请求示例

~~~
{
	
    "tt": {
		
        "type": "obj",
		
        "max": "15.3",
		
        "value": {
			
            "tt": {
				
                "type": "obj",
				
       �            "value": {
					
                    "name": {
						
                        "type": "arr",
						
                        "value": [
							
                            {
								
                                "aa": 1,
								
                                "bb": 2
                            
							}
                        
						]
                    
					}
                
				},
				
                "desc": "我是说明"
            
			},
			
            "cc": {
				
                "type": "obj",
				
                "value": {
					
                    "name1": {
						
                        "type": "obj",
						
                        "value": {
							
                            "dd": {
								
                                "type": "obj",
								
                                "value": {
									
                                    "ddd": {
										
                                        "type": "obj",
										
                                        "value":    �{
											
                                            "name": {
												
                                                "type": "arr",
												
                                                "value": [
													
                                                    {
														
                                                        "aa": 1,
														
                                                        "bb": 2
                                                    
													}
                                                
												]
                                            
											}
                                        
										}
                                    
									}
                                
								}
                            
							}
                        
						}
                    
					}
                
				},
				
                "desc": "我是说明"
            
			}
        
		},
		
        "min": "52",
		
        "desc": "�    ��是说明"
    
	}

}
~~~
* 返回


|参数名|必选|类型|说明|
|:----|:---|---|---|
|status|是|arr|状态码状态码
|∟name|是|str|status二级参数
|∟num|是|str|status二级参数
|products|是|arr|状态码状态码
|∟name|是|str|products二级参数
|∟num|是|str|products二级参数
|errstr|是|int|状态码状态码

* 返回示例

~~~
{
	
    "status": {
		
        "value": [
			
            {
				
                "name": "aa",
				
                "num": 55
            
			}
        
		],
		
        "required": true,
		
        "type": "arr",
		
        "desc": "状态码"
    
	},
	
    "products": {
		
        "required": true,
		
        "type": "arr",
		
        "desc": "状态码",
		
        "value": [
			
            {
				
                "name": "aa",
				
                "num": 55
            
			}
        
		]
    
	},
	
    "errstr": {
		
        "value": 44,
		
        "required": true,
		
        "type": "int",
		
        "desc": "状态码"
    
	}

}
~~~cY���   % %�                                                                        ��   	%�默认页面#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
	"a":{
	type": "int",
        �:   	!�Kdesc测试#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
        "staaatus": {
            "value": 5521,
            "max": 5521,
            "min": 55.21,
            "required": true,
            "type": "string",
            "desc": ""
        }
    },
    "response": {
        "status": {
            "value": 5521,
           w� 	%�;admin默认页面#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
	"a":{
	"type": "int",
            "value": "15.3"
	},
        "t": {
  
            "type      sc": "楼层"
		}
    },
    "response": {
		"occupancy": {
			"type":"obj",
			"desc":"有人入住房间",
			"value":{
				"name":{
					"value":1231,
					"type":"int",
					"desc":"术语ID"
				},
				"number":{
					"value":12,
					"type":"int",
					"desc":"数量"
				},
				"list":{
					"type":"arr",
					"desc":"房间列表",
					"value":[
						"1005",
						"1006"
					]
					
				}
			}
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:----|:---|---|---|
|token|string|否|token
|floor|array|否|楼层

* 参数示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "floor": [
		
        1,
		
        3,
		
        45
    
	]

}
~~~
* 返回



|参数名|类型|必填|说明|
|:----|:---|---|---|
|occupancy|obj|否|有人入住房间
|∟name|int|否|术语ID
|∟number|int|否|数量
|∟list|arr|否|房间列表

* 返回示例

~~~
{
	
    "occupancy": {
		
        "name": "1231",
		
        "number": "12",
		
        "list": [1005,1006]
    
	}

}
~~~cY��h       "value": {						
                        "type": "obj",						
                        "value": {							
                            "14": {								
                                "type": "int",								
                                "value": "10025",								
                                "desc": "键值为状态：指令"
                            
							},							
                            "11": {								
                                "type": "int",								
                                "value": "10028",								
                                "desc": "键值为状态：指令"
                            
							}
                        
						}
                    
					}
                
				}
            
			}
        
		}
    
	}

]
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|room_number|int|否|房号

* 返回示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "room_number": "1005"

}
~~~cY�eJ   � �                                                                                                                                                                                                                                                                                                                         �:3 %�5weekend默认页面#### GetUserData
* 说明：获取用户下线列表和人数
* url

<!--
{
    "para�93 O�	weeke�$3 O�_weekend获取用户下线列表和人数#### GetUserData
* 说明：获取用户下线列表和人数
* url

<!--
{
    "params": {
		"uid":{
			"type":"int",
			"value":"729",
			"desc": "用户ID"
		},
		"type":{
			"type":"string",
			"value":"b",
			"desc": "用户的类型：a 为 A用户 , b为 B用户"
		}
    },
    "response": {
		"total":{
			"type":"int",
			"value":"729",
			"desc": "下线数量"
		},
		"list":{
			"type":"arr",
			"desc":"下线用户列表",
			"value":[
				{
					"uid":"10",
					"utype":"b",
					"   ?    �求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|district|int|否|区块术语ID
|floor|obj|否|---
|∟num|int|否|楼层
|∟name|int|否|楼层名术语ID
|∟room|obj|否|---
|∟∟room_number|int|否|房号
|∟∟occupancy|int|否|是否有客户入住0否，1是
|∟∟clean|int|否|//打扫状态：0没，1有
|∟∟disturb|int|否|温度，摄氏度
|∟∟temperature|int|否|是否允许打扰：0否，1是
|∟∟light|int|否|灯状态：0关，1开
|∟∟window|int|否|窗状态：0关，1开

* 返回示例

~~~
{
	
    "district": "1",
	
    "floor": {
		
        "num": "1",
		
        "name": "1",
		
        "room": {
			
            "room_number": "1005",
			
            "occupancy": "1005",
			
            "clean": "1005",
			
            "disturb": "25",
			
            "temperature": "1005",
			
            "light": "1",
			
            "window": "1"
        
		}
    
	}

}
~~~cY��?v0.2 hello   �                 "type": "int",
                    "value": "1005",
                    "desc": "是否允许打扰：0 否，1 是"
                },
				 "temperature": {
                    "type": "int",
                    "value": "1005",
                    "desc": "是否允许打扰：0 否，1 是"
                },
				 "disturb": {
                    "type": "int",
                    "value": "25",
                    "desc": "温度，摄氏度"
                },
				 "light": {
                    "type": "int",
                    "value": "1",
                    "desc": "灯状态：0 关，1 开"
                },
				 "window": {
                    "type": "int",
                    "value": "1",
                    "desc": "窗状态：0 关，1 开"
                }
				
				
                        
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|是|token

* �   �  "num": {
                    "type": "int",
                    "value": "1",
                    "desc": "楼层"
                },
                "name": {
                    "type": "int",
                    "value": "1",
                    "desc": "楼层名术语ID"
                },
                "room": {
                    "type": "obj",
                    "value": 
                        {
                          
                             "room_number": {
                    "type": "int",
                    "value": "1005",
                    "desc": "房号"
                },
				              "occupancy": {
                    "type": "int",
                    "value": "1005",
                    "desc": "是否有客户入住 0 否， 1 是"
                },
				             "clean": {
                    "type": "int",
                    "value": "1005",
                    "desc": "//打扫状态：0 没，1 有"
                },
				             "disturb": {
       1/Client/Profile/joinUnion

<!--
{
    "params": {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": true,
            "type": "string",
            "desc": "状态码"
        },
		"id": {
            "value": "1",
            "type": "int",
            "desc": "工会ID"
        }
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|token|string|是|状态码
|id|int|否|工会ID

* 参数示例

~~~
{	
    "token": "101du43hu9gube39gh3",	
    "id": "1"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY��0    � x �                                                                                                                                                                                                                                    �}'�z' 1�'weekend
修改楼层信息#### editFloor
* 说明：修改楼层信息

* url：
<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"id": {
            "value":1,
            "type":"int",
            "desc":"楼层ID"
        },
		"num":{
			"type":"int",
			"value":1005,
			"desc": "楼层数"
	   T�}& 1�-weekend
添加楼层信息#### addFloor
* 说明：添加楼层信息

* url：
<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"num":{
			"type":"int",
			"value":1005,
			"desc": "楼层数"
		},
		"name":{
			"type":"int",
			"value":1,
			"desc": "楼层名称术语ID"
		},
		"district":{
			"   Y    o  o �                                                                                                   �s1   =�
监控视图信息列表#### roomListBySensor
* 说明：监控视图信息列表
* url：

<!--
{
    "p   B�2 I�1admin记录用户的上下线关系#### SetUpline
* 说明：记录用户的上下线关系。
* url:

<!--
{
    "params": {
		"uid":{
            "value":729,
            "type":"int",
            "desc":"用户的id"
        },
		"type":{
            "value":"b",
            "type":"string",
            "desc":"用户的类型：a 为 A用户 , b为 B用户"
        },
		"invitecode":{
            "value":"b2017729",
            "type":"string",
            "desc":"用户推荐者的邀请码，以前缀区分推荐者类别，为0表示没有推荐者"
        },
		"status":{
            "value":1,
            "type":"int",
            "desc":"0为临时上下线关系，1为固定上下线关系（固定上下线关系时机可根据需求而定）"
    d   4 4                                                                  �)�'<   %�	商品列表#### showGoods
* 说明：商品列表
* Method：POST
* url：/pp/v1/Client/Order/showGoods

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"required": true�=<   %�I	商品列表#### showGoods
* 说明：商品列表
* Method：POST
* url：/pp/v1/Client/Order/showGoods

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"required": true,
				"value": "101asdh8ferhf75gh857gh57g",
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
			"category_id":{
				"type": "int",
				"value": "1",
				"desc": "商品分类ID"
			},
			"category_name":{
				"type": "string",
				"value": "超值",
				"desc": "商品分类名"
			},
			"list":{
				"type":"arr",
				"desc": "商品列表",
				"value":{
					"type":"obj",
					"desc":"",
					"value":{
						"id":  �   D D��品分类名"
			},
			"list":{
				"type":"arr",
				"desc": "商品列表",
				"value":[{
					"id": {
						"type": "int",
						"value": "1005",
						"desc": "商品ID"
					},
					"name": {
						"type": "string",
						"value": "10钻石，100金币，10000代币",
						"desc": "商品名"
					},
					"fee_price": {
						"type": "int",
						"value": "1000",
						"desc": "商品价格（分为单位）"
					},
					"diamond": {
						"type": "int",
						"value": "10",
						"desc": "商品所含钻石数量"
					},
					"gold": {
						"type": "i�)=   %�%默认页面#### roomBasicInfo
* 说明：总视图房间信息
* url：

<!--
{
    "response": {
        "token": {
            "type": "string",
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        },
		"room_id": {
            "type": "int",
            "value": "105",
            "desc": "房间ID"
        }
    },
    "params": {
		"floor":{
            "type": "obj",
            "va   *    1g6e/Bf83nXr2m29tdskXramve/nvj/v++k1lUqlkvdwWbUUcqdgEhNdT17UT5za1p9fO06t0To4s7fW7W+nzna12di9OPna/HHU2nnqbB1eNt7Zh28vD6rN831nrQ4LLVyEVdmlR2q2oKva4pSxYGTvalhZkHWSvY3lB2U9GzCGbl7LZNAySsKQDBnLJVOaTbrPfI60H70Zd3bJ0EAglecfSumgqCQvMsl0fupGr+iJXLS0gPquQjJwfoixCJp9FogQEDAlYxxiqs/kfSGMjeWhCK5QhgH6ptPR4PMwAD4zFF0RIuZQvHWVkAqomqmwzDkbr5xa3d3BEoqwWlKUf116XS5p09GLH24shtFuYtRIuJgejOCJzyM11oIRXRvDxZiVm0A7T6DNx2t/AS1EJwUBWUSiitEoJD61TMZOdHQ0ZGVMKq1cLZUigS6pVNCZivxM7ztYrNxV2lYmYc00yroZ7F3JJDKxzL6mFHRKCLmz5ubdKYdxu26VAJDPDwl+ridGrD22ClhjLEewpaVRRFLwktN6fuqsrrU+rvky04VKhnuCGpCDCVpO/zfZHZgDDWOT4PBdkMuNVJSCTuIUxd2uqJLJ3EJw/rW31503RwgGdW/t6kvaOv5p721S2O129ZN9/sze/0LdfU8Rnc3A4Ffa+SNKKLzlKKCpv0sQ/b3xgRA+z+R9Mi525VBhpqszDT92umM+UMgaBVjz7EXr7HPb4S6MneqEMEUROsBfmB4i6IKqhgi4TCAM6O0PzRej5zrHh8ToC1aA599B353jdfgCajY2EVpZWUG6VSzyGxCev7Z394Klhupevl/tVFxcZJfGeDjMCW93cUeZO55vLrIvGGgfIaTDElFMdLBCI4NBbiNSaJweI16O/AlcRgnUy+KJBBrMGgGBnyxQAqigrShAhuOp8jgll0Oowvz9C3saASY=cY��                                                                          � ���                                        ' 	%admin默认页面nbvcscY��h�C 	�Yadmin无敌#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
	"a":{
	"type": "float",
            "value": "15.3"
	},
        "t": {
  
            "type": "obj",
            "max": "15.3",
            "value": {
                "tt": {
                    "type": "obj",
			
                    "value": {
                        "ttt": {
                            "type": "arr",
                            "value": [
                                {
                                    "aaaa": 1,
                                    "bbbb": 2
                                },
								{
                  �   �   %�I参数说明showdoc API参数规则112

example：
~~~
{
	&quot;cc&quot;:�. 	�/admin无敌#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* ur  ,    �  �                                                                                                                                                                                                                              �i 	%�;admin默认页面#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
	"a":{
	"type": "int",
            "value": "15.3"
	},
        "t": {
  
            "type  L�kh %�!admin
房间列表#### roomList
* 说明：房间列表
* url：

<!--
{
    "params": {
        "token": {
            "type": "string",
            "required": true,
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        }
    },
    "response": {
        "district": {
            "type": "int",
            "value": "1",
            "desc": "区块术语ID"
        },
        "floor": {
            "type": "obj",
            "value": {
                 �    0  0                                      �M %�Yweekend
房间删除#### delRoom
* 说明：房间删除

* url：
<!--
{
    "params": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"id": {
			"value":1,
			"type":"int",
			"desc":"房间ID"
		}
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|id|int|否|房间ID

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "id": 1

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY��Y    明|
|:----|:---|---|---|
|token|string|是|token

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|district|int|否|区块术语ID
|floor|obj|否|---
|∟num|int|否|楼层
|∟name|int|否|楼层名术语ID
|∟room|array|否|---
|∟∟room_number|str|是|room二级参数
|∟∟occupancy|str|是|room二级参数
|∟∟clean|str|是|room二级参数
|∟∟disturb|str|是|room二级参数
|∟∟temperature|str|是|room二级参数
|∟∟ligth|str|是|room二级参数
|∟∟window|str|是|room二级参数

* 返回示例

~~~
{
	
    "district": "1",
	
    "floor": {
		
        "num": "1",
		
        "name": "1",
		
        "room": {
			
            "room_number": "1005",
			
            "occupancy": "1",
			
            "clean": "1",
			
            "disturb": "1",
			
            "temperature": "23",
			
            "ligth": "1",
			
            "window": "1"
        
		}
    
	}

}
~~~cY��v_0.1  hello   � �'                                     �K�-   %�e"标签列表#### listTag
* 说明：标签列表信息
* Method：POST
* url：/pp/v1/Client/Ranking/listTag

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"arr",
		"value":[{
			"id":{
				"type": "int",
				"value": "11",
				"desc": "标签项 ID"
			},
			"name":{
				"type": "string",
				"value": "My Lord",
				"desc": "标签名"
			}
		}]
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|[]|arr|是|格式为arr
|/|obj|是|****
|id|int|否|标签项ID
|name|string|吇v�-   %�;"标签列表#### listTag
* 说明：标签列表信息
* Method：POST
* url：/pp/v1/Cli  �    �  �^ �                                                                                                            ��.�1 	%��weekend默认页面#�S�/ %�eweekend钱包明细#### showWalletOrder
* 说明：钱包明细
* Method：POST
* url：/pp/v1/Client/Porfile/showWalletOrder

<!--
{
    "params": {
		"type":"obj",
		"value":{
		"token": {
            "value": "101sdhfeh8rthga3f1eed21",
            "type":"string",
			"required": true,
            "desc":"token"
        }
		}
    },
    "response":{
		"type":"arr",
		"value":[{
			"coin": {
				"value": 1000,
				"type": "int",
				"desc": "代币"
			},
			"gold": {
				"value": 1000,
				"type": "int",
				"desc": "金币"
			},
			"diamond": {
				"value": 100,
				"type": "int",
				"desc": "钻石"
			},
			"use_type": {
				"value": 1,
				"type": "int",
				"desc": "收支类型 1为收入，2为支出"
			},
			"src": {
				"value": 1,
				"type": "int",
				"desc": "来源：1、充值购买，2、货币兑换，3、�  (    F0PLePIveHpboAVaWkDjTdrcnvPdc07Pud/pbSQSiYTv4ryoCuR2RiEKuhq+bJ3pzfrvn3t6s9M7amv1mvb1XN9tdDv7l2dfut9PentP9Ppxv/NWO37TP2p0Lw71agsWqjgLq+LFh2I8I4vS5kphoxC/I2Fhg5dJ/Bbm7+fluMMZun4lFkMlFIbBFXjM5xRuNWw+MxmxHocSU1osSKDg8usPuKhTleM3DU0ivXJtXPWYz6qSw/zIIJkqn+HMh2WbB+IJcLjiMXZxNeHynifMGKWZCGaQhwH2ElF/8HUYAE/ORJc9EWso2LqySwVESRGMzOnbL/Vmy9zBHPKxmhOEv116mc9JCf/Fd3cWwOkoMaIvXMAI5ojEFpEYaMGcoS0QYsDKLYHOS6D5YvT3aAv+m4JHs/DVKuZrIcFby3L8+Ef7Q5YXbKXlf9tKkYctLpeRDRPp5Pg32Nu4adQyxmFJKeRlxcldTiE8UZUJUnowxaW5G+Rm7OTderus5gCQTs94+bWxd8TSIzWDJaPLEaxKUeSzKQyT03t2rm9Vex+qtsyMoFzBPEFNycESPUf/m+xOzYGEsUKw+y5IpeYqSkYmQYpibldUjsVuIDj/ars1/fUJgkHNqdZ4QXunP7SDHQq7XWt81C6eaoefqbnvKaKrMRjsTgcXooTCV44CmtpZguiv7ffETQfHS3oTY74IMzBhHOZogknh6raf99qfrOiocXKjyek6cCEILi7Yx9ByAiBERdF6MjWGYCCBiXOByCQsKFPM7uOBQVhuWvZf8k0/rcEfSbezg1ClUkGyms2yCSgvXmn7B87UQ7b777YGFfBOutlWjDJR4AcdVpvlxAiHqWDPWciJvMF29oQMWOvHxQDr6WQ6yCQGA8FmtjkZ5siewBIKofGuGgqh6Sx2KOzkRSGgpmXI0ZwWMzXkeCqFUNmI9w9FBbD5cY�۫                                                                      �": "1",
            "desc": "区块术语ID"
        },
        "floor": {
            "type": "obj",
            "value": {
                "num": {
                    "type": "int",
                    "value": "1",
                    "desc": "楼层"
                },
                "name": {
                    "type": "int",
                    "value": "1",
                    "desc": "楼层名术语ID"
                },
                "room": {
                    "type": "array",
                    "value": [
                        {
                            "room_number": 1005,
                            "occupancy": "1",
                            "clean": "1",
                            "disturb": "1",
                            "temperature": "23",
                            "ligth": "1",
                            "window": "1"
                        }
                    ]
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说    gitlab.21yunwei.com/
2、注册账户
3、登录
4、点击项目-&gt;新项目，创建跟github基本一致（项目类型会多一个 内部）
5、可以从外部导入项目（需要提前配置）
（注：*内部 即登录到本系统的所有用户）
6、可添加指定成员到项目（成员必须是已经注册的）


*用户权限：
点击项目-&gt;成员，可以在添加人员的同时指定角色，角色是系统默认的，不可更改
不同角色对应不同的权限（Owner&gt;master&gt;developer&gt;reporter&gt;vister）

*图标：
会统计每个成员提交到master的次数，上限6000

*派生
项目创建项目仓库的副本，派生的仓库允许在不影响原项目的情况下修改新内容

*问题
可以将项目中发现的问题标记并指向某成员，解决问题可选择关闭
*活动
会记录下系统所有的操作

*导入项目
管理员配置好OAuth后可从github，gitlab，bitbucker,fogbugz导入已有的项目（本质就是clone一份过来）
cY��1                &quot;preset&quot;: [
                1,
                2
            ],
            &quot;value&quot;: &quot;1&quot;,
            &quot;desc&quot;: &quot;状态码&quot;
        },
        &quot;errstr&quot;: {
            &quot;type&quot;: &quot;string&quot;,
            &quot;len&quot;: &quot;32&quot;,
            &quot;value&quot;: &quot;密码错误&quot;,
            &quot;desc&quot;: &quot;错误提示&quot;
        }
    }
}
--&gt;

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|~~~users~~~|~~~string~~~|~~~否~~~|len_max=&quot;e32&quot;,请输入正整数&lt;br&gt;
|pass|string|否|密码

* 请求示例

~~~
{
	
    &quot;users&quot;: &quot;fasfasdf&quot;,
	
    &quot;pass&quot;: &quot;147852safsfavav&quot;

}
~~~
* 返回


|参数名|必需|类型|说明|
|:----|:---|---|---|
|status|int|否|状态码
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    &quot;status&quot;: &quot;1&quot;,
	
    &quot;errstr&quot;: &quot;密码错误&quot;

}
~~~Y��k    t;: {
			&quot;token&quot;: {
				&quot;value&quot;: &quot;101example0729xxx&quot;,
				&quot;type&quot;: &quot;string&quot;,
				&quot;required&quot;: true,
				&quot;desc&quot;: &quot;token&quot;
			}
		}
	},
	&quot;response&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			&quot;id&quot;: {
				&quot;type&quot;: &quot;int&quot;,
				&quot;desc&quot;: &quot;ID&quot;,
				&quot;value&quot;: 2
			},
			&quot;example&quot;: {
				&quot;type&quot;: &quot;string&quot;,
				&quot;desc&quot;: &quot;例子&quot;,
				&quot;value&quot;: &quot;例子&quot;
			}
		}
	}
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    &quot;token&quot;: &quot;101example0729xxx&quot;

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|ID
|example|string|例子

* 返回示例

~~~
{	
    &quot;id&quot;: 2,	
    &quot;example&quot;: &quot;例子&quot;

}
~~~Y�h�    )  )                             �Z ;�kweekend获取数据模板10-13#### example
* 说明：例子
* Method：POST
* url：/example/index.php/Home/Example/example

&lt;!--
{
	&quot;params&quot;: {
		&quot;type&quot;: &quot;obj&quot;,
		&quot;value&quo   ��S �admin1013#### notice
* 说明：通知
* url：carboss/index.php/Client/UserInfo/notice

&lt;!--
{
    &quot;params&quot;: {
        &quot;type&quot;: &quot;obj&quot;,
        &quot;value&quot;: {
            &quot;token&quot;: {
                &quot;type&quot;: &quot;string&quot;,
                &quot;required&quot;: true,
                &quot;value&quot;: &quot;hfsdhiufhgbflsjfa&quot;,
                &quot;desc&quot;: &quot;token&quot;
            }
        }
    },
    &quot;response&quot;: {
        &quot;type&quot;: &quot;obj&quot;,
        &quot;value&quot;: {
            &quot;brief&quot;: {
                &quot;type&quot;: &quot;string&quot;,
                &quot;value&quot;: &quot;1条通知；88条私信&quot;,
   �   � � &                          � 7   �[登录#### Login
* 说明：登录
* url：

<!--
{
    "params": {
		"phone":{
            "value":729,
            "type":"int",
			"required": true,
            "desc":"手机号码"
        },
		"type":{
            "value":"pass",
            "type":"string",
			"required": true,
            "desc":"登录验证模式 : pass 密码登录， code 是验证码登录"
        },
		"password":{
            "value":"iitrend",
            "type":"string",
            "desc":"密码（ pass 模式登录必传 ）"
        },
		"code":{
            "value":"0907",
            "type":"string"�k7 '�weekend�Q7 '�_weekend登录/把/7   '�+登录/注册#### loginReg
* 说明：登录/注册；未注册时注册同时登陆；已注册即登陆
* Method：POST
* url：/pp/v1/Client/LoginReg/loginReg

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"phone":{
				"value":18881888188,
				"type":"int",
				"required": true,
	  �    � 1 �                                                                                                                                                                                                                        KK   %e参数说明eNrjUn6xfvuzxQ3P5i/NKs7Pe7Zgz9M9/coAkkcM/g==cY����LJ   %�e参数说明eNp1UcFu00AQPe9+RbS9ulJTiYsPSBy58QtOvIVUbhJsB4qQI9MGqVWg5pCooZRCaJsiIHGQIuEkrvIxZDf2Kb/A2GtbzgFL9s7Mvjdv/MZ4Vnup1sqFR08eM+eId8fBXYudfCwWdzGmh8pBXaNr/wI3m038GiNSLhO5AAE88CHmqzqFAqmV9omU1F4oWoOmKCAAQxCITp83KjpViWzqDSpqGq0S+cGOJLID5TCfVfJ3G1qilEiJ9oioahYjoihELkppVioReTdJLHFa8bjxa4nTwlb8ozhxwp3w3ln095H02n+HkLhY/Z6zq3ZUYIu3rP8TobV/Uqma0p5WU0zJMPVK9akEc0qKrq/9UxzPmbKZ7aOUWIiCsD9femfMnbJZJ1JaffJWvwbQPmjfsmGPXX4HW/7ab8AOKAoCFPmlzW7uoFsUjB0IltN2eD7BYCnsgg3PoUvYXbDZQELh56t0Vub8CI7vec/lw2vencBEGPqDA1lDlIdnKNDOAWPBPLCwiUx3jUCIfRgkoDxczAEx847ZuAPtgBfOe8HoZk/RDIpVapRT07jjBIvxJj82LNnIRUtsC9d1alAT/V82avZ+FH5rre5HIMjdDhscGaZiNgwx0dKb7YDbRSlbV2a5YIX2adifLr3h9vZDvBW4f/i1zb/c7hu1Kv/qM9/Z+gduE5ddcY���    � 6 �                                                                                                                                                                                        �cg %�m%admin
房间列表#### roomList
* 说明：房间列表
* url：
<!--
{
    "params": {
        "token": {
            "type": "string",
            "required": true,
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        }
    },
    "response": {
        "district": {
            "type": "int",
            "value   ��/f 	�1adminbt#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {

        "t": {  
            "type": "obj",
            "max": "15.3",
            "value": {
                "tt": {
                    "type": "obj",
                    "value": {
                        "ttt": {
						"desc": "有aaa bbb",
                            "typ   �   r                                                                                                                                                                                                �)Y �weekend	转账#### transfer
* 说明：转账
* Method：POST
* url：/pp/v1/Client/Order/transfer

<!--
{
    "params": {
		"token": {
            "value": "101sdhfeh8rthga3f1eed21",
            "type":"string",
			"required": true,
            "desc":"登录凭诋 X #�Aweekend更�dX �_X   #�更新token#### refreshToken
* 说明：更新token
* Method：POST
* url：/pp/v1/Client/LoginReg/refreshToken

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"当前token"
			}
		}
    },
    "response": {
		"type":"obj",
		"va  � �W   #�W检查token#### checkToken
* 说明：检查token
* Method：POST
* url：/pp/v1/Client/LoginReg/checkToken


<!--
{
      �   �asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"id": {
            "value":1,
            "type":"int",
            "desc":"房间类型ID"
        },
		"name": {
			"value":10002,
			"type":"int",
			"desc":"房间类型名称术语ID"
		},
		"data": {
            "type":"arr",
            "value":[
                {
                    "port": "1",
                    "name": "111111",
                    "device_id": "11",
                    "spec": "***",
                    "tag": "22"
                },
				{
                    "port": "23",
                    "name": "112",
                    "device_id": "1311",
                    "spec": "***",
                    "tag": "22"
                }
            ]
        }
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
	}
}
-->
    
* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|token|string|否|token
|id|int|否|房间类型ID
|name|int|否|房间类型名称术语ID
|data|arr|否|---
|∟port|是|str|data二级参数
|∟name|是|str|data二级参数
|∟device_id|是|str|data二级参数
|∟spec|是|str|data二级参数
|∟tag|是|str|data二级参数
|∟port|是|str|data二级参数
|∟name|是|str|data二级参数
|∟device_id|是|str|data二级参数
|∟spec|是|str|data二级参数
|∟tag|是|str|data二级参数

* 请求示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "id": 1,
	
    "name": 10002,
	
    "data": {
		
        "port": "23",
		
        "name": "112",
		
        "device_id": "1311",
		
        "spec": "***",
		
        "tag": "22"
    
	}

}
~~~
* 返回



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "errstr": " "

}
~~~cY��*        "value": {
            "brief": {
                "type": "string",
                "value": "1条通知；88条私信",
                "desc": "通知提示"
            },
            "data": {
                "type": "arr",
                "value": {
                    "type": "obj",
                    "value": {
                        "notice": {
                            "type": "arr",
                            "value": {
                                "type": "obj",
                                "value": {
                                    "id": {
                                        "type": "int",
                                        "value": "3",
                                        "required": true,
                                        "desc": "通知id"
                                    },
                                    "content": {
                                        "value": "我是马云",
                                        "type": "string",
       
 6 �>�|�Y � � 6                          _ �)cd66c1b08fc50bd61645a2f9da7edfd261907bb3caebcef5243209a928c14217Z(�119.129.84.150Y�;�_ �)5bf32ba8ef3bb68381879a4953b23ac048f7f309e952323e49e952c5d83e15b1Z(�v119.129.84.150Y� v_ �)e6e8bc3d27119830b0aef6a237527f0e0e79dc7257c1e65da812ed62b9641a58Z$Xx221.182.171.98Y��x_ �)ccdf0da10c4b6c29971d950b79afd68196e39fcab1da2f7fe2c320628a27a225Z#�;119.129.84.197Y�!;_ �)b2abee69133fbb69e263592796d8e4355dcd3dbac9f5b0381c280a6f57131e6eZ#d�119.129.84.197Y���_ �)7bda213654c77a5c465ac415104c44f068d80599a2b725db5541ee643915c564Z#d119.129.84.197Y��_ �)58caaa5b70155597fd7135309704565162265cb87f4d8a62502a8e1167cf27dbZ)119.129.87.207Y��_ �)2cfacf1db0989db51f2595ef01c511c67aef72faa3c18ceb22c83ced11123af8Z)119.129.87.207Y��_ �)41906e6848b67dd1bfc7f0787f984d471c925fbf89fda33d5dfb080e137e70ebZ)119.129.87.207Y��_ �)df6d84211d7a8c277150b858feb688f960a2eef1219c3e72a45e33e9adf42f5aZ)119.129.87.207Y��   1 1                                                                                                                                                                                                                                                                                                       �LL   %�e参数说明eNp1UcFu00AQPe9+RbS9ulJTiYsPSBy58QtOvIVUbhJsB4qQI9MGqVWg5pCooZRCaJsiIHGQIuEkrvIxZDf2Kb/A2GtbzgFL9s7Mvjdv/MZ4Vnup1sqFR08eM+eId8fBXYudfCwWdzGmh8pBXaNr/wI3m038GiNSLhO5AAE88CHmqzqFAqmV9omU1F4oWoOmKCAAQxCITp83KjpViWzqDSpqGq0S+cGOJLID5TCfVfJ3G1qilEiJ9oioahYjoihELkppVioReTdJLHFa8bjxa4nTwlb8ozhxwp3w3ln095H02n+HkLhY/Z6zq3ZUYIu3rP8TobV/Uqma0p5WU0zJMPVK9akEc0qKrq/9UxzPmbKZ7aOUWIiCsD9femfMnbJZJ1JaffJWvwbQPmjfsmGPXX4HW/7ab8AOKAoCFPmlzW7uoFsUjB0IltN2eD7BYCnsgg3PoUvYXbDZQELh56t0Vub8CI7vec/lw2vencBEGPqDA1lDlIdnKNDOAWPBPLCwiUx3jUCIfRgkoDxczAEx847ZuAPtgBfOe8HoZk/RDIpVapRT07jjBIvxJj82LNnIRUtsC9d1alAT/V82avZ+FH5rre5HIMjdDhscGaZiNgwx0dKb7YDbRSlbV2a5YIX2adifLr3h9vZDvBW4f/i1zb/c7hu1Kv/qM9/Z+gduE5ddcY���    ired&quot;:true
				&quot;len&quot;:50,
				&quot;max&quot;:50,
				&quot;min&quot;:50,
				&quot;type&quot;: &quot;obj&quot;,
				&quot;value&quot;:{
					&quot;dd&quot;:{
						&quot;aa&quot;:1,
						&quot;bb&quot;:2
						}
					}		
			
			}			
		}
}
~~~

参数说明：
type，		参数类型，	必填		（int,float,string,obj,arr）
value		参数值		必填	 	必须与对应type相符，若存在max、min，必须在最大值最小值之间
len_max,	字符长度,	非必填		只能是正整数，不填或置空表示无穷大
len_min,	字符长度,	非必填		只能是正整数，不填或置空表示0
max			最大值		非必填		整数，不填或置空表示无穷大
min			最小值		非必填	 	整数，不填或置空表示无穷小
required	是否必填	非必填	 	只能填布尔值，默认false
desc		参数描述	非必填	 	对应参数的说明
preset		是否必填	非必填	 	数据预置，比如status只能为0、1,参数值必须在预置选项中（适用于int、float、string）
cY��[  �dhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"tag_id":{
				"type":"arr",
				"value":{
					"type":"int",
					"desc":"标签 ID",
					"value":[
						123
					]
				},
				"desc":"标签ID列表"
			}
		}
    },
    "response":{
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"tag_id":{
					"value":1,
					"type":"int",
					"desc":"标签ID"
				},
				"list":{
					"type":"arr",
					"desc":"排行列表",
					"value":{
						"type":"obj",
						"value":{
							"ranking":{
								"value":1,
								"type":"int",
								"desc":"排名"
							},
							"uid":{
								"value":8,
								"type":"int",
								"desc":"用户ID"
							},
							"nickname":{
								"value":"1881888818",
								"type":"string",
								"desc":"用户名"
							},
							"icon":{
								"value":"http://zm.fairy.com/fairy/zm.jpg",
								"type":"string",
								"desc":"用户头像链接"
							},
							"number":{
								"value":48,
								"type":"   h �h8� �G %�Q�: %�7admin
默认页面###�a %�W�U %�madmin
房间列表#### roomList
* 说明：房间列表
* url：
<!--
{
    "params": {
        "token": {
            "type": "string",
            "required": true,
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        }
    },
" admintest12345cY���v2' 	%admin默认页面nbvcscY��h�x 1�)admin	gitlab使用向导自己的服务器没能搭建好，暂时只能用别人的
1、浏览器键入http://   ��- 	�1adminbt#### ProductLists
* 说明：显示厂家提供购买的接龙套餐信息
* url：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {

        "t": {  
            "type": "obj",
            "max": "15.3",
            "value": {
                "tt": {
                    "type": "obj",
                    "value": {
                        "ttt": {
						"desc": "有aaa bbb",
                            "typ   �   �e": "arr",
                            "value": [
                                {
                                    "aaaa": 1,
                                    "bbbb": 2
                                }
                            ]
                        }
                    },
                    "desc": "我是说明"
                },
                "cc": {
                    "type": "obj",
                    "value": {
                        "name1": {
                            "type": "obj",
							"desc": "ww上级设计",
                            "value": {
                                "ww": {
                                    "type": "obj",
                                    "value": {
                                        "www": {
                                            "type": "obj",
                                            "value": {
                                                "wwww": {
                                                    "type": "arr",
     �                                                  "value": [
                                                        {
                                                            "rr": 1,
                                                            "tty": 2
                                                        }
                                                    ]
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "desc": "我是说明"
                }
            },
            "min": "52",
            "desc": "我是说明"
        },
		 "status": {
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ],
            "required": true,
            "type": "arr",
        �       "desc": "状态码"
        },
        "products": {
            "required": true,
            "type": "arr",
            "desc": "状态码",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    },
    "response": {
        "status": {
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ],
            "required": true,
            "type": "arr",
            "desc": "状态码"
        },
        "products": {
            "required": true,
            "type": "arr",
            "desc": "状态码",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "va   �lue": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    }
}-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|t|obj|否|我是说明
|∟tt|obj|否|我是说明
|∟∟ttt|arr|否|有aaabbb
|∟∟∟aaaa|str|是|ttt二级参数
|∟∟∟bbbb|str|是|ttt二级参数
|∟cc|obj|否|我是说明
|∟∟name1|obj|否|ww上级设计
|∟∟∟ww|obj|否|---
|∟∟∟∟www|obj|否|---
|∟∟∟∟∟wwww|arr|否|---
|∟∟∟∟∟∟rr|str|是|wwww二级参数
|∟∟∟∟∟∟tty|str|是|wwww二级参数
|status|arr|是|状态码
|∟name|是|str|status二级参数
|∟num|是|str|status二级参数
|products|arr|是|状态码
|∟name|是|str|products二级参数
|∟num|是|str|products二级参数
|errstr|int|是|状态码

* 请求示例

~~~
{
	
    "status": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "products": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "errstr": 44,
	
        "t": {
		
        "tt": {
			
            "ttt": {
				
                "aaaa": "1",
				
                "bbbb": "2"
            
			}
        
		},
		
        "cc": {
			
            "name1": {
				
                "ww": {
					
                    "www": {
						
                        "wwww": {
							
                            "rr": "1",
							
                            "tty": "2"
                        
						}
                    
					}
                
				}
            
			}
        
		}
    
	}

}
~~~
* 返回


|参数名|必需|类型|说明|
|:----|:---|---|---|
|status|arr|是|状态码
|∟name|是|str|status二级参数
|∟num|是|str|status二级参数
|products|arr|是|状态码
|∟name|是|str|products二级参数
|∟num|是|str|products二级参数
|errstr|int|是|状态码

* 返回示例

~~~
{
	
    "status": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "products": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "errstr": 44

}
~~~cY��fv2    g  � � � � g                                                                                     $e admintest12345cY���v2"d admintest123cY���v1'c !admin1143331rfewfcY��{12b admin1143cY��c1�{a 		%�7admin默认页面#### ProductLists2

* 说明：显示厂家提供购买的接龙套餐信息ff

* url：`/ykd/index.php/Merchant/Dragon/ProductLists`

<!--
{
    "params": {
        "staaatus": {
            "value": "afdsfdsafasdfasdfsdafafsadfsadf",
"len":100,
            "required": true,
            "type": "string",
			"max":"90",
			"min":58,
            "desc": "状态码"
        }
    },
    "response": {
        "status": {
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ],
            "required": true,
            "type": "arr",
            "desc": "状态码"
        },
        "products": {
            "required": true,
            "type": "arr   �     "t": {
		
        "tt": {
			
            "ttt": {
				
                "aaaa": "1",
				
                "bbbb": "2"
            
			}
        
		},
		
        "cc": {
			
            "name1": {
				
                "ww": {
					
                    "www": {
						
                        "wwww": {
							
                            "rr": "1",
							
                            "tty": "2"
                        
						}
                    
					}
                
				}
            
			}
        
		}
    
	}

}
~~~
* 返回


|参数名|必需|类型|说明|
|:----|:---|---|---|
|status|arr|是|状态码
|∟name|是|str|status二级参数
|∟num|是|str|status二级参数
|products|arr|是|状态码
|∟name|是|str|products二级参数
|∟num|是|str|products二级参数
|errstr|int|是|状态码

* 返回示例

~~~
{
	
    "status": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "products": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "errstr": 44

}
~~~cY��fv2    �  �                                                                                                                                                                                              �5` 		%�admin默认页面eNrNVE1rE0EYPu/8iji5SeJGSECDePKo4F2EDtlNu5jdrDO70tJJaIKCWE1zUIytVAutHkTTQqkYJfkvsh/Nyb/gu7PZ2E02qa0eOuwss+/3PPu8bzqdTqfu0qpil6zbGrMYQpdTx91Dr9P69WPT6/T93Z7barpfjryNttPfOj787Hzb9zcfe629Yf+Nu/d6uNt2Bjteoxt42rQCbgvyygNF1gxFXb5iLpnyHZWWlohhybcoWawa8sl8CwjduJTNolWUgoVNQonOcDEVfgsZswghlh2XCs0jUrFVEGNSVhg8pEyYIjZT4FxmRBEbZxCuqAYuXs3lMvEQVH1oa1RVIIpFbXVCa62YIj6zqGYsQhhJkrBOlnERX89FnxoELlyb8FRUVgo8/WdH3lrDf9/AY31NnGqhAxTAzKrB1Kk7z73xvZg4WKtTEuFgED1EiODMDAtbB4NCYUpbi0nunws4Qik+AzJ/TLEZkiQBg/+YOXNh0E3EQKUUmDebBfn8uX6KZlj4zHRFNZTN3gya3N1oeq/2ESweHt32C+4ffHe317nX6brtD+7gibvziYdzhCNezMISbx5txKO25mFzBa58nD4cQ1+9gyYMIKe/jlC9XochIaHJkXBq7yOoPHCGgIOX7tZ2vG4odfh2LSr/1IqDeoFZE8Xyn0/fBVQQYrjOyNLpPfd7H0dwCRtbn2sScf5vUkS2c5MkG4W04kCDBNAFRrNAj2aSJKHkHogpTlIfSUDsUaBYa/9bqHGH5POj//wbb8gyRA==cY��testdavid    ",
            "desc": "状态码",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|staaatus|string|是|状态码

* 请求示例

~~~
{
	
    "staaatus": "afdsfdsafasdfasdfsdafafsadfsadf"

}
~~~
* 返回


|参数名|必需|类型|说明|
|:----|:---|---|---|
|status|arr|是|状态码
|∟name|是|str|status二级参数
|∟num|是|str|status二级参数
|products|arr|是|状态码
|∟name|是|str|products二级参数
|∟num|是|str|products二级参数
|errstr|int|是|状态码

* 返回示例

~~~
{
	
    "status": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "products": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "errstr": 44

}
~~~cY���99   D D�                                                                                                                                                                                                                                                                                                                        �B   �c贴标签#### addTag
* 说明：贴标签
* Method：POST
* url：/pp/v1/Client/Profile/addTag

<!--
{
    "params": {
        "type": "obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"登录凭证"
			},
			"to_user":{
				"value":"12",
				"type":"int",
				"required": true,
				"desc":"目标用户   %�C %�}weekend删除标签#### delTag
* 说明：删除标签
* Method：POST
* url：/pp/v1/Client/Profile/delTag

<!--
{
    "params": {
		"token": {
            "value": "101sdhfeh8rthga3f1eed21",
            "type":"string",
            "desc":"登录凭证"
        },
		"to_use   8   1 1                                                                                                                                                                                                                                                                                                       �LM   %�e参数说明eNqFUl9v0lAUf773UzTs9S4ZS3zxwcRH3/wKpb1Tlo5iW+aMgdQNky3o6gNkOOeU/WFGhWJCYoEufBi5l/aJr+BpSzvIqPbp9Pz+nNPzq/5cfSmrkvD46RNm7fNGz7upssOP2ewmxnRP3CkqdOae4kqlgl9jAZ6MJGUeClEdvhuvihQ6GTW3nSF37V1RKdEl5lwt3WuGgEZflPIalQE1tBIl9xkKLQD4YGMFtCPupUL5VNXqzf/zBQksy6lYiIsi4FmSTsjlgLC5Ei/jf3fu3qKqjMthRHieod3nzeMgt+ATZ+47hCJg+mvEzmtBg43fstYPhGbuYb5gkC1FFQ2iG1q+8IzAPYioaTP3CIc3iNXMdFEsFILCb40mzjGzB2xYDyZNPznTn22w92rXrNNkZ98gmD/mG8gAmpEAmvzMZFc34BYUPQuKyaDmn/QxJExgQucEXPzGmA3bBPmfz+NdmfXdO7jlTZt3LnmjDxth8EcIJYZokZ6wYPYCMRy4SBSWmfGPiGAQ+9Cekxbp0R5QM+eA9epgBzp/1PS6V1uiolMsU12Kj8Ytyxv3lvXhweaJnFajtHBRozo1UPrYwOx917+oTm+7MJDbddbe1w3RKOnRRhNnuAHXzpIkruTkkco3j/zWYOJ01tcf4TXP/s0vTf7leltXC/yry1xr7S+Fy7ZMcY���   9 9                                                                                                                                                                                                                                                                                                               �DX   	�]多层objeNrtVU1P20AQPWd+RXBuFcaXcEFVTz22EnfEYRWvSlTimPUagdhEJGqlqrQhh1ZNAUGRgB6qNiAhEAEl/wV51+TEX2BsJykOAfWDA0hZyZY988Zvd95bbyqVSiUnWd50M/xF1uEOPEle1A9VrXJ5tqZqTX+nIStl+etIrVa95vrF4U/vZN9fe6Mqu+3mV7n7pb1T9VrbqlTHQpfNYpWx+No0spZJF8bsGdt4SVlmhljceM7Iq7xlxMjg6YiuwxIkcWg2YSTnaBPJ6D2MOZxwNx4L4/Nk1qUYnoqFg7F0IxIWWCQX4DVCtNFbEG4OAePjN7KFWGQ6Xq4xOudmGTWxljOX9mX5oh3RMtbHq5nUyQQp//2RWi7530paL1/4DdXsqF8DenCPzKMPprsDe0AZczi73QXp9D+JkrX434gC16aFDI6dtxw6tOvQrg/ZrlDQ9WeAP2e5Wlaf9wGHiB5l9aPwD07l5opQtbqs7snWW7n9Q0S/fwFiQscR3kX3AhE5XKBMQZXoEYM4f7cV9DUM4/I7SK/xwW9875CHGDd3J6RroD+h6GLvJBkMijQS2NM+kvAAPFYHZTz6vOYKQLFYxBMqAf0bPJGAwYaKJa77CBLoks6HYvvk/z7Vs1s6DVAI54traH2S65txtVHg9sZyV/ShzlGPHrHOV1R5AVM=cY���   �lue": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    }
}-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|t|obj|否|我是说明
|∟tt|obj|否|我是说明
|∟∟ttt|arr|否|有aaabbb
|∟∟∟aaaa|str|是|ttt二级参数
|∟∟∟bbbb|str|是|ttt二级参数
|∟cc|obj|否|我是说明
|∟∟name1|obj|否|ww上级设计
|∟∟∟ww|obj|否|---
|∟∟∟∟www|obj|否|---
|∟∟∟∟∟wwww|arr|否|---
|∟∟∟∟∟∟rr|str|是|wwww二级参数
|∟∟∟∟∟∟tty|str|是|wwww二级参数
|status|arr|是|状态码
|∟name|是|str|status二级参数
|∟num|是|str|status二级参数
|products|arr|是|状态码
|∟name|是|str|products二级参数
|∟num|是|str|products二级参数
|errstr|int|是|状态码

* 请求示例

~~~
{
	
    "status": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "products": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "errstr": 44,
	
       �  �                                                                                                                                                                                                                                  �Y   	�}无敌eNrVV0Fv0zAUPse/IlOlHlC6qGO90CvHIXFHO3iJtQXaJLMduqqKRBEHxKGME2W7gLQdt3KYJoFQ92fadDvtL5DhhJIssZ0m0oQvsaz3vff5+fl7Tq1Wq6nPsWN6Bt2yCCXgkXo9uQjGo9tfR8F4ujj5OR+9nZ9fBh8PZ9Pj64uz2Y/vi6N3wej0Zvplfvr55uRwdvUtGE5CoIc7IUrvvzJ1yzbRwbq75+rPEDb2oE31pxjuOraeCAbqHdpeazTAAKjhqO97Dm27EMMuYfMn6gAobAqjlb8LtO+i2Ip9LZuyifbHXTzY2mvY8VL2zdb6YzYDir/ERO6XDFQ1w9/98M7Oy/zwXXiQF1zIdpAw+IcCzbeQJKooCgcqYJFmQ8WmPFoQ46yESFB7wQXcjYHQYukahiP23NQKAHfCEQM3hDifa7ENiuF8jXOOJiJGMtfB+0/BeMKuenQFJDwyS8MoXXYVlZwNu6hZrugEpFYilwT1evKICpiWYpxm3isOrXALlWzl3pZ6q/uoQL0qVbVyasenEm9HWgNF3aEvL42rSWZxKa0mjry1nKVfsnX4D986AMd/9B6y7KTb1kb+a6gQCRY8ChrVMiKuY5MM9WArhELqkWxdkLqYvEZ416RSUgHFfdD2ujGo1RIkeDsrZxjtexZGZuyFYg9poISS5R3F4sNl8Ga4+DpMn0P6Re2ypz83zw/FWvvvzjw/zwhjQrF0NW9uVls+3L+wAuXDrjHwQaNR36Xt3wIme+g=cY��            "type": "string",
            "len": "32",
            "min": "8",
            "value": "147852safsfavav",
            "desc": "密码"
        }
    },
    "response": {
                "status": {
            "type": "int",
            "preset": [
                1,
                2
            ],
            "value": "1",
            "desc": "状态码"
        },
        "errstr": {
            "type": "string",
            "len": "32",
            "value": "密码错误",
            "desc": "错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|~~~users~~~|~~~string~~~|~~~否~~~|len_max="e32",请输入正整数<br>
|pass|string|否|密码

* 请求示例

~~~
{
	
    "users": "fasfasdf",
	
    "pass": "147852safsfavav"

}
~~~
* 返回


|参数名|必需|类型|说明|
|:----|:---|---|---|
|status|int|否|状态码
|errstr|string|否|错误提示

* 返回示例

~~~
{
	
    "status": "1",
	
    "errstr": "密码错误"

}
~~~cY���v0.7    �  �                                                                                                                                                                                                   �0_ 		%�admin默认页面eNrNVE1rE0EYPu/8iji5SeJGSECDePKo4F2EDtlNu5jdrDO70tJJaIKCWE1zUIytVAutHkTTQqkYJfkvsh/Nyb/gu7PZ2E02qa0eOuwss+/3PPu8bzqdTqfu0qpil6zbGrMYQpdTx91Dr9P69WPT6/T93Z7barpfjryNttPfOj787Hzb9zcfe629Yf+Nu/d6uNt2Bjteoxt42rQCbgvyygNF1gxFXb5iLpnyHZWWlohhybcoWawa8sl8CwjduJTNolWUgoVNQonOcDEVfgsZswghlh2XCs0jUrFVEGNSVhg8pEyYIjZT4FxmRBEbZxCuqAYuXs3lMvEQVH1oa1RVIIpFbXVCa62YIj6zqGYsQhhJkrBOlnERX89FnxoELlyb8FRUVgo8/WdH3lrDf9/AY31NnGqhAxTAzKrB1Kk7z73xvZg4WKtTEuFgED1EiODMDAtbB4NCYUpbi0nunws4Qik+AzJ/TLEZkiQBg/+YOXNh0E3EQKUUmDebBfn8uX6KZlj4zHRFNZTN3gya3N1oeq/2ESweHt32C+4ffHe317nX6brtD+7gibvziYdzhCNezMISbx5txKO25mFzBa58nD4cQ1+9gyYMIKe/jlC9XochIaHJkXBq7yOoPHCGgIOX7tZ2vG4odfh2LSr/1IqDeoFZE8Xyn0/fBVQQYrjOyNLpPfd7H0dwCRtbn2sScf5vUkS2c5MkG4W04kCDBNAFRrNAj2aSJKHkHogpTlIfSUDsUaBYa/9bqHGH5POj//wbb8gyRA==cY���v0.3    �  �                                                                                                                                                                                                   �0^ 		%�admin默认页面eNrNVE1rE0EYPu/8iji5SeJGSECDePKo4F2EDtlNu5jdrDO70tJJaIKCWE1zUIytVAutHkTTQqkYJfkvsh/Nyb/gu7PZ2E02qa0eOuwss+/3PPu8bzqdTqfu0qpil6zbGrMYQpdTx91Dr9P69WPT6/T93Z7barpfjryNttPfOj787Hzb9zcfe629Yf+Nu/d6uNt2Bjteoxt42rQCbgvyygNF1gxFXb5iLpnyHZWWlohhybcoWawa8sl8CwjduJTNolWUgoVNQonOcDEVfgsZswghlh2XCs0jUrFVEGNSVhg8pEyYIjZT4FxmRBEbZxCuqAYuXs3lMvEQVH1oa1RVIIpFbXVCa62YIj6zqGYsQhhJkrBOlnERX89FnxoELlyb8FRUVgo8/WdH3lrDf9/AY31NnGqhAxTAzKrB1Kk7z73xvZg4WKtTEuFgED1EiODMDAtbB4NCYUpbi0nunws4Qik+AzJ/TLEZkiQBg/+YOXNh0E3EQKUUmDebBfn8uX6KZlj4zHRFNZTN3gya3N1oeq/2ESweHt32C+4ffHe317nX6brtD+7gibvziYdzhCNezMISbx5txKO25mFzBa58nD4cQ1+9gyYMIKe/jlC9XochIaHJkXBq7yOoPHCGgIOX7tZ2vG4odfh2LSr/1IqDeoFZE8Xyn0/fBVQQYrjOyNLpPfd7H0dwCRtbn2sScf5vUkS2c5MkG4W04kCDBNAFRrNAj2aSJKHkHogpTlIfSUDsUaBYa/9bqHGH5POj//wbb8gyRA==cY���v.02    �  �                                                                                                                                                                                                              �%Q   	�%无敌eNrVV0FP2zAUPte/IlOlHlBLVEYv63XHTdp94uAmFmS0SbCdlaqKRBGHaYcCB0SBy5DguJUDQto0dX+mdeG0v7B0TlYaEsdpIqG9Sxzrfe99tl++5xSLxaLyDlu6o9E3BqEErCj3w1s26P/+ec4Go+nVj0l/f/Ltjh0ejUcX97dfx99vpucHrH/9MDqbXJ8+XB2Nf12y3tADOrjpodTOtq4apo52V+0tW32LsLYFTaq+xnDTMtWFZKDUpPUXlQroAsWz0o5j0boNMWwRPn6ldEGBD6E/82+CdmwUePGnYVI+KP8NFxif+wibTsi/Wlt9yUeg4M4xfvg5A0WJiPc0vdX4EJ++BXfjkiey7S44PKJA4z0kiRZmxl90RDTfjz8mh/vs5AY2olimYhtmTZNdRfQhxiJKAmrvhYCZdRM95qGhZ0HkajkFsOFZAFxLxLlCjw2QDueKzvFRCfgz7NMxGwy5JPifikRE7qlpmcszp5IzYQtVsxVdAqmlyC2C2m15RA5MMzEOM2+nh+a4hFyW8mRJ7eVj5KBeuapaNrUTUwmWI62BSd2hIy+Ny0lmeinNJ4+8t5ynm7F1uM/fOoAgvn9vMszFsLW1+FtTKhI8uZ/Ur2VEbMskEerBZwiF1CHRuiD1YYoa4axJhaQCJvdB02kFoFotYYM3ovYMox3HwEgPolDsoDLIoGRxRzH9fMf2etMvvfA5hG/eNv9FEO7zc7Eu/3dnHr/PCGNCsXQ1r6/nWz7Cv7UU5cM/Y+CCSqW0Set/ABX7i4s=cY���                                                                                                                                                                                                                                                                              �iR   �%登录APIeNqtU01v00AQPXt+hdncUIxpoKWKECeOIHFHHKx401qkjtldR1Rso6YCDpSSHFKpLVUFEuqFg6lUUUSB/pmunZ74C4ztxNgxKZeu7GT3jXfmvfmoVCoV/RFr235DPHC44HBdHwXH4c673z/2ot1T9XMbEZ+18GiuPrVNx7Xp8xvesmc+pKyxbLnCvM+spbZrFrzcvWYY8AJ0XMSzmLXCSV1Pzwnmc8oKSIKKVY8iSrhgjrs0v0CqoGkaYfSZ7zBqk7pgPq0W77SoG1+5VSNThhUnMSxO4x2r5WMU0rQ4PnZz2m5T3ogvjo4PVf+EZMa1v9+hJM7/R59cEVGdzN2+szhf41YTCXeszizCKngdfejlCEOONiaRe22X0xLtxMqFJfxLJDmumA7roUcq0Pi45G6uWoJqBeTJLKk3Z4mL3nwN13tFfbmCUMYw61dWkoxPmtOL4e4oCGZRS61hfxB9+l7KPqyBYdwDHCLV3wi3vwAumW7VYEtGR6fqYFOGO4EaHKqzV+rjZ5nOnwRZN3Alv3Lygux2u/Hw4F+8nUzK+Ih+4t35t61wGIRve9HeyzgDaZTJtyDj9pXpUWJcmaqEZPZPwqMNFHL+axMAfeEQa5Af2fzcaJCfhlKfAoqPXaDbs6F6f1CUjmov9tcnGbhcdNqeErsw4Zs1A8i08Hkx+XJAFvufkrKuT/puDGatVCz+WMwffhqmCA==cY�u�   �       "desc": "状态码"
        },
        "products": {
            "required": true,
            "type": "arr",
            "desc": "状态码",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    },
    "response": {
        "status": {
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ],
            "required": true,
            "type": "arr",
            "desc": "状态码"
        },
        "products": {
            "required": true,
            "type": "arr",
            "desc": "状态码",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "va   �                                                  "value": [
                                                        {
                                                            "rr": 1,
                                                            "tty": 2
                                                        }
                                                    ]
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "desc": "我是说明"
                }
            },
            "min": "52",
            "desc": "我是说明"
        },
		 "status": {
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ],
            "required": true,
            "type": "arr",
         �  �                                                                                                                                                                                                                                                   � U   �M登录APIeNqtU0Fv0zAUPse/org31JCtgDZV004cQeKOOITG3SK6NNhJxYRXdRPswLS1h01aYZoGQhMSgjBpYhPb2J+pk/bEX+DF7kLS0InDrCSyv2e/fN/z94rFYrHwmDYsv+o9tJnH0O3CIDgOd7d+n7+LemfiYgcQn9ZhaSw/twzbscjLO+6iazwitLpoOp7xgJoLDcfIZJm7pevoFSrAwK5JzSWGKwW1lpjPCM1CEvaWXQIoZh61nQVcQpqmYUpe+DYlFq7UzDojpeyROnHiE3fLeCywZMvA7DjeNOs+/ATXTAaPVRuPW4RV44OD40PROcFJcOXvPpDE/of9jRAt4Ol7M7P3y8ysAeGm2ZxEWATr0cFqijBK0YYqMrfhMJKjLaPMMz3/Gkm2443/1oWMxIPgk1y66VIOKmeQp5OkTk0SF739EbZXs/pSF0Ioharf2JUkfFRNh9u9QRBMoqaiYacbffqZqz5aQbo+j6CJRGct3PmOYHA1Fd1NHh2dif0NHu4GonsoLt+ID1+46j+OeEWHIb/86kVcdg5Xejgc4sqniMeeTOOKOpINfRIerQG7/q8NhFqtFnSmhjJ9mO4GDaU9nnMfAklxDsh7uS3e72cFgYbhXvtK1/VSIIvyHUziBZhsNAP+8UxeQ2Wqf7op9j4PP76OLr6J9rkyXv/069wzOg/aoGZivSf3xgjiygzpWqSvCCXM/1mRpBOkF0dgYq+sIUal+AOPsbEfcY��(123   @ @                                                                                                                                                                                                                                                                                                                      �=V   �M登录APIeNqtU0FP1EAUPvf9ijJ7M1sbVolkYzx51MS78TDZzkLD0q0z043EYQMkepDo7gESUEMwMVw4FBICiaj8GaddTv4F33agtluXeGDSNu33Om++773v1Wq1mv2Md72oJZ/4Qgq4Y4/ik2Tnw+/vH9Pdc/1jG5GId/DTXVnyXD/w2Ku74WLoPmW8tUgD6T7mdKEbuKUsD2ccB16DjYuElNNlQZq2+c6wSDBehjJYroQMUSIk94MFUgfLsghnLyOfM48027QjWL28pcOC8Y57DTIRWPazwPwk3qOdCA8hbSrw8tqTcY+J1njj6ORAD85IHlz9+x9KEv/D/laI2mT2/oP5uYagbSTco71phHX8Nt1fLxCGAm2sogi7gWAV2llUSCqjGyT5gZw8NsSMTGLweSXdbL0CNUrIi6lSp4lL350ma+tlfYWGMM6x6rfWkpyPqenl1u4ojqdRM9FkMEy/fqtUH1bBcR4BDpEebCTbR4BLmVc9fK/S43O9t6mSnVgPD/TFG/3lUJn5U6CaDq7sqa5vUNnkKKNH4SZlfApq7MkibqhDNtBnyfEGsvv1cxOg3+/jZFpQmsPiNFhQ9HjFfYCSxjkw78WW/rRXFoQaLj+vXeu6WYoxnUJvZYRBmS4WRRRrC/mR/5SSWzgz0RWY+6LcySsNfwAYJIrScY��"   9 9                                                                                                                                                                                                                                                                                                               �DW   	�]多层objeNrtVU1P20AQPWd+RXBuFcaXcEFVTz22EnfEYRWvSlTimPUagdhEJGqlqrQhh1ZNAUGRgB6qNiAhEAEl/wV51+TEX2BsJykOAfWDA0hZyZY988Zvd95bbyqVSiUnWd50M/xF1uEOPEle1A9VrXJ5tqZqTX+nIStl+etIrVa95vrF4U/vZN9fe6Mqu+3mV7n7pb1T9VrbqlTHQpfNYpWx+No0spZJF8bsGdt4SVlmhljceM7Iq7xlxMjg6YiuwxIkcWg2YSTnaBPJ6D2MOZxwNx4L4/Nk1qUYnoqFg7F0IxIWWCQX4DVCtNFbEG4OAePjN7KFWGQ6Xq4xOudmGTWxljOX9mX5oh3RMtbHq5nUyQQp//2RWi7530paL1/4DdXsqF8DenCPzKMPprsDe0AZczi73QXp9D+JkrX434gC16aFDI6dtxw6tOvQrg/ZrlDQ9WeAP2e5Wlaf9wGHiB5l9aPwD07l5opQtbqs7snWW7n9Q0S/fwFiQscR3kX3AhE5XKBMQZXoEYM4f7cV9DUM4/I7SK/xwW9875CHGDd3J6RroD+h6GLvJBkMijQS2NM+kvAAPFYHZTz6vOYKQLFYxBMqAf0bPJGAwYaKJa77CBLoks6HYvvk/z7Vs1s6DVAI54traH2S65txtVHg9sZyV/ShzlGPHrHOV1R5AVM=cY��%   1 1                                                                                                                                                                                                                                                                                                       �LN   %�e参数说明eNqFUl9v0lAUf773UzTs9S4ZS3zxwcRH3/wKpb1Tlo5iW+aMgdQNky3o6gNkOOeU/WFGhWJCYoEufBi5l/aJr+BpSzvIqPbp9Pz+nNPzq/5cfSmrkvD46RNm7fNGz7upssOP2ewmxnRP3CkqdOae4kqlgl9jAZ6MJGUeClEdvhuvihQ6GTW3nSF37V1RKdEl5lwt3WuGgEZflPIalQE1tBIl9xkKLQD4YGMFtCPupUL5VNXqzf/zBQksy6lYiIsi4FmSTsjlgLC5Ei/jf3fu3qKqjMthRHieod3nzeMgt+ATZ+47hCJg+mvEzmtBg43fstYPhGbuYb5gkC1FFQ2iG1q+8IzAPYioaTP3CIc3iNXMdFEsFILCb40mzjGzB2xYDyZNPznTn22w92rXrNNkZ98gmD/mG8gAmpEAmvzMZFc34BYUPQuKyaDmn/QxJExgQucEXPzGmA3bBPmfz+NdmfXdO7jlTZt3LnmjDxth8EcIJYZokZ6wYPYCMRy4SBSWmfGPiGAQ+9Cekxbp0R5QM+eA9epgBzp/1PS6V1uiolMsU12Kj8Ytyxv3lvXhweaJnFajtHBRozo1UPrYwOx917+oTm+7MJDbddbe1w3RKOnRRhNnuAHXzpIkruTkkco3j/zWYOJ01tcf4TXP/s0vTf7leltXC/yry1xr7S+Fy7ZMcY��   - -                                                                                                                                                                                                                                                                                                   �PO   %�m参数说明eNqFUl9v0lAUf773UzTs9S4ZS3zxwcRH3/wKpb1Tlo5iW+aMgdQNky3o6gNkOOeU/WFGhWJCYoEufBi5l/aJr+BpSzvIqPbp9Pz+nNPzq/5cfSmrkvD46RNm7fNGz7upssOP2ewmxnRP3CkqdOae4kqlgl9jAZ6MJGUeClEdvhuvihQ6GTW3nSF37V1RKdEl5lwt3WuGgEZflPIalQE1tBIl9xkKLQD4YGMFtCPupUL5VNXqzf/zBQksy6lYiIsi4FmSTsjlgLC5Ei/jf3fu3qKqjMthRHieod3nzeMgt+ATZ+47hCJg+mvEzmtBg43fstYPhGbuYb5gkC1FFQ2iG1q+8IzAPYioaTP3CIc3iNXMdFEsFILCb40mzjGzB2xYDyZNPznTn22w92rXrNNkZ98gmD/mG8gAmpEAmvzMZFc34BYUPQuKyaDmn/QxJExgQucEXPzGmA3bBPmfz+NdmfXdO7jlTZt3LnmjDxth8EcIJYZokZ6wYPYCMRy4SBSWmfGPiGAQ+9Cekxbp0R5QM+eA9epgBzp/1PS6V1uiolMsU12Kj8Ytyxv3lvXhweaJnFajtHBRozo1UPrYwOx917+oTm+7MJDbddbe1w3RKOnRRhNnuAHXzpIkruTkkco3j/zWYOJ08Pr6I7zm2b/5pcm/XG/raoF/dZlrrf0FL5W2Vg==cY��'   - -                                                                                                                                                                                                                                                                                                   �PP   %�m参数说明eNqFUl9v0lAUf773UzTs9S4ZS3zxwcRH3/wKpb1Tlo5iW+aMgdQNky3o6gNkOOeU/WFGhWJCYoEufBi5l/aJr+BpSzvIqPbp9Pz+nNPzq/5cfSmrkvD46RNm7fNGz7upssOP2ewmxnRP3CkqdOae4kqlgl9jAZ6MJGUeClEdvhuvihQ6GTW3nSF37V1RKdEl5lwt3WuGgEZflPIalQE1tBIl9xkKLQD4YGMFtCPupUL5VNXqzf/zBQksy6lYiIsi4FmSTsjlgLC5Ei/jf3fu3qKqjMthRHieod3nzeMgt+ATZ+47hCJg+mvEzmtBg43fstYPhGbuYb5gkC1FFQ2iG1q+8IzAPYioaTP3CIc3iNXMdFEsFILCb40mzjGzB2xYDyZNPznTn22w92rXrNNkZ98gmD/mG8gAmpEAmvzMZFc34BYUPQuKyaDmn/QxJExgQucEXPzGmA3bBPmfz+NdmfXdO7jlTZt3LnmjDxth8EcIJYZokZ6wYPYCMRy4SBSWmfGPiGAQ+9Cekxbp0R5QM+eA9epgBzp/1PS6V1uiolMsU12Kj8Ytyxv3lvXhweaJnFajtHBRozo1UPrYwOx917+oTm+7MJDbddbe1w3RKOnRRhNnuAHXzpIkruTkkco3j/zWYOJ08Pr6I7zm2b/5pcm/XG/raoF/dZlrrf0FL5W2Vg==cY��=   - -                                                                                                                                                                                                                                                                                                   �PT   %�m参数说明eNqFUl9v0lAUf773UzTs9S4ZS3zxwcRH3/wKpb1Tlo5iW+aMgdQNky3o6gNkOOeU/WFGhWJCYoEufBi5l/aJr+BpSzvIqPbp9Pz+nNPzq/5cfSmrkvD46RNm7fNGz7upssOP2ewmxnRP3CkqdOae4kqlgl9jAZ6MJGUeClEdvhuvihQ6GTW3nSF37V1RKdEl5lwt3WuGgEZflPIalQE1tBIl9xkKLQD4YGMFtCPupUL5VNXqzf/zBQksy6lYiIsi4FmSTsjlgLC5Ei/jf3fu3qKqjMthRHieod3nzeMgt+ATZ+47hCJg+mvEzmtBg43fstYPhGbuYb5gkC1FFQ2iG1q+8IzAPYioaTP3CIc3iNXMdFEsFILCb40mzjGzB2xYDyZNPznTn22w92rXrNNkZ98gmD/mG8gAmpEAmvzMZFc34BYUPQuKyaDmn/QxJExgQucEXPzGmA3bBPmfz+NdmfXdO7jlTZt3LnmjDxth8EcIJYZokZ6wYPYCMRy4SBSWmfGPiGAQ+9Cekxbp0R5QM+eA9epgBzp/1PS6V1uiolMsU12Kj8Ytyxv3lvXhweaJnFajtHBRozo1UPrYwOx917+oTm+7MJDbddbe1w3RKOnRRhNnuAHXzpIkruTkkco3j/zWYOJ08Pr6I7zm2b/5pcm/XG/raoF/dZlrrf0FL5W2Vg==cY���    �  �                                                                                                                                                                                                                                                  �S   �U登录APIeNqtU0Fv0zAUPse/oqQ31JCtgJiqaSeOIHFHHELjbhFdGmynYsKrugl2YNrawyatME2A0ISEIEya2MQ29mfqpD3xF3ix25A0dOIwK4ns79kv3/f8vWKxWCw8Ig3br7IHDmUU3SwMguNwb/v3+duodyYudgHxSR2W5soz23RcG7+45S155kNMqkuWy8z7xFpsuGYmy/wNw0AvUQGG7lnEWqZ6paDWEvMpJllIwmzFw4DqlBHHXdRLSNM0neDnvkOwrVcY8XEpe6KO3fjA7bI+EVh2ZGBuEm9adR/+odcsCo9dm4zbmFbjg4PjQ9E50ZPg6t99oIj+D/lrIVrQZ+/cm7tbplYNCDet5jTCItiI3q+lCKMUbSgi9RouxTnaMkqZxfwrJDkum/ytBxkxg+DjXLrZUg4qZ5An06TOTBMXvfkRttey+lIXggmBql/blSR8VE2HO71BEEyjpqJhpxt9+pmrPlpFhrGAoIdEZz3c/Y5gcDUV3S0eHZ2Jg00e7gWieyguX4sPX7hqP454xYAhv3z8Ii4bhys98TmufIp47MkxDsm4oo5kP5+ER+vArv9rE6FWqwWNqaFMG6a7QUNpj+fch0BSnAPyXu6IdwdZQaBhuN8e67paCmRRvoNJvACTjWbAP57Ja6jM9E+3xP7n4cdX0cU30T5Xxuuffp1/ShZAG9RMbPTk3hhBXJkhXYv0FaGE+T8rknSC9OIITOyVNcSoFH8AGLKw5g==cY��   �e": "arr",
                            "value": [
                                {
                                    "aaaa": 1,
                                    "bbbb": 2
                                }
                            ]
                        }
                    },
                    "desc": "我是说明"
                },
                "cc": {
                    "type": "obj",
                    "value": {
                        "name1": {
                            "type": "obj",
							"desc": "ww上级设计",
                            "value": {
                                "ww": {
                                    "type": "obj",
                                    "value": {
                                        "www": {
                                            "type": "obj",
                                            "value": {
                                                "wwww": {
                                                    "type": "arr",
     � 目标id，target_id	|
|check	 |tinyint（5) |是       |	 审核状态 &lt;/br&gt; 0:未审核 ；1:通过； 2拒绝；	 |
|reason    	 |varchar(255) |否      |    拒绝原因     |
|atime    	 |varchar(15) |是      |    添加时间     |
|ctime    	 |varchar(15) |否	      |    审核时间     |

&lt;/br&gt;&lt;/br&gt;
# example:视频审核
&lt;/br&gt;
#### 视频数据表 video

|字段|类型|空|注释|
|:----    |:-------    |:--- |-- -|------      |
|id	 		 |int(10)     |否		 |	         主键 |
|uid	 		 |int(10)     |否		 |	上传者id           |
|title		 |varchar(20) |否	   |	 视频标题	|
|desc		 |varchar(20) |否	    |	 视频描述	|
|path	 |varchar(50) |否   |    	 视频路径		 |
|data   |varchar(255) |否      |    序列化要变更的内容&lt;/br&gt;'org':‘原始内容’，&lt;/br&gt;'new':‘新内容’，&lt;/br&gt;‘title‘:'字段名称'，&lt;/br&gt;‘atime‘:'申请时间'    |
|check	 |tinyint(5) |是   |    	审核状态&lt;/br&gt;0待审核；1通过 ；2    opETKB4dhZnBYqqXnBnzll67WzskY0vIwFruVC47KWvKGV1WHzx+cFiBPWhjYYQLmYGCTIJZNSIZZAwtQFSDKbaSGQZ8zRfwCkf7PRzE4DUhWtCRO2bFSoVyUpI/NJyMXHE0WJIa8BSal1tKUURvuRyqeK6yI/03sHRzonTjjNZU/VataLTZ1fWDcWo66FTGXFUOMXdLcv4eCq82l6plwGQz/cZ/ETPGDX1Sb2kqUWwNbS6mkGCVcGfnPbLI2d+of1pITAzAU5UI8SLMQcXGDlzbWaXOQeqpumGxt8Fo6OJFoXBTqMWhWxXZGWzdxDQZntt0Xm7j+AxyU97fcW0T5+fz78w2we/7e1lk+x4E5ljWXjwX9P7IHNubk6Bj/ttr3/p/IKc3F94ZGOE2LZ+rsDpgQ7iFZmGCXgTLkczeLCQ+XfpoxHRh7tJP2wKNwmvGV6XEJqAN2GiTYC1jl+1j792xtiFuUQwElYoRCaA2ZGPoFNoNDgduC+ik/Q3OCPzX+jxMnfhnBH6L9xjfDzWWz+cg0VQWq2TZYRg0UAQSaSWKUQNSYiz5YI9PXrIbcOiqOPK4Loi5CjYQ6shVhDXk4RYYkjq7WDGYmEo3wwAJYgkPoZRtfqhu3VK6gMltUsSgfXoI3EbIZHk+ePf3x0Em9AgjjFut3hL1P+SR745YumlS94dXc0kuj+6IUX2R1Nof3jqSXzFWdmI2IXyEjCi1JQUzy4i2TgeGGnHMKc1lpTUBbdMJPUVKiIJHdElZgAnlBS7KH+DqDI6ifj6jLKPJ9RQosAorhGKgUdiUOFCb119oUeB/6weDhHQcsF2vmdgKwhZmAABKTp9Y29thznxh3kxTkz0HuZdLpPzaTgmaO414VMyggyRONAZkRBPTomE8LCRQdggolgwCChfIIg/R0ziGJC7LPo2HrqgeVczJcg4EJYiC22PCXobhIQVi5l6VRn1k1VBokvp3EsJmbk2cxoafEDgsnJ09W3sKQlLDf4qdA7wf/3w1WY=cY��/   � �      �i %�!adm�L �F   %�[
房间列表#### roomList
* 说明：房间列表
* url：
<!--
{
    "params": {
        "token": {
            "type": "string",
            "required": true,
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        }
    },
    "response": [{
			"floor_id": {
				"type": "int",
				"value": "1",
				"desc": "楼层 ID"
			},
			"district": {
                "type": "int",
                "value": "1",
                "desc": "区块术语ID"
            },
			"num": {
				"type": "int",
				"value": "1",
				"desc": "楼层"
			},
			"name": {
				"type": "int",
				"value": "1",
				"desc": "楼层名术语ID"
			},
			"room": {
				"type": "arr",
				"value": [
					{
						"room_id": {
							"type": "int",
							"value": "105",�+   %�%�   %�	
房间列表#### roomList
* 说明：房间列表�   %�
房间列表#### roomList
* 说明：房间列表
* url：
<!--
{
    "params": {
	"type"  �   . .                                                                                                                                                                                                                                                                                                    �O[ �]admin登录APIeNqtU0Fr1EAUPuf9ijh7k42hq9KyiCePCt7Fw7CZbYPbbJxJFovTpS3owaK7hxZalVJBevEQC8WCVftnnGR78i/4MtPGZNMtCg5JSL6XefN9732v0Wg07Ie878Wd6L4vIgHX7UlylO68+fXtbbZ7or5vA0Ix7+G3u/LEc/3AY89uhEuh+4DxzhINIvcep4v9wK2kuXPNceA52LhISDldFqRtm2+NxYLxKqThaCVkiBIRcT9YJE2wLItw9jT2OfNIu0t7gjWrW3osyHewmy0yFVn2dWRhGh/QXoynkC4VeHnd6bjHRCffODk6UKNjUgRX//yHmsTf0L+M6T8TtcncrfmF2y1Bu0h4QAezCKvkZba/XiIMJdpYRhH2A8FqtHVURDSKr5DkB9H0sSFmZBEGH9XSzTVrUKuCPJ4pdZa47NWXdG29qq/UEMY5Vv2/taTgY2p6trU7SZJZ1Ew0HY2zj19r1YdVcJy7+RSp0Ua6/RlwSfOqxq9ldnii9jZlupOo8YE6faE+fJJmAiXItoNLP+XFDVKPjjR6JG6Sxqcgc0+WcUMd9Egfp4cbyO7nj02A4XCIo2lBZRDL02BB2eM19wFKynNg3tMt9W6vKgg1nL1fu9B1tRRjOone0oSLFoM07SyrKRcZirMv1VR4WbvpHCwMUm3puZjfSoORVw==cY��Pv0.2   2 2                                                                                                                                                                                                                                                                                                        �KZ �Uadmin登录APIeNqtU0Fr1EAUPuf9ijh7k42hq8WyiCePCt7Fw7CZbUO32TgzWSxOl7agB4vuHlpoVUoF6cVDLBQLVu2fcZLtyb/gS6aNycYtHjokIfle5s33vfe9RqPRsB/zvhd15ENfSAE37Ul8nOy+/f39Xbp3qn/sAEIR7+G3u7rsuX7gsee3wqXQfcR4Z4kG0n3A6WI/cCtp7t1wHHgBNi4SUk5XBGnb5jvHIsF4FcphuRoyRImQ3A8WSRMsyyKcPYt8zjzS7tKeYM3qlh4Lsh23W2QqsOLngYVpfEB7ER5CulTg5XWn4x4TnWzj5PhQj05IEVz7+x9KEv/D/lqI2mTuzt2F+ZagXSQ8oINZhHX8Kj3YKBGGEm2sogj7gWA12nlUSCqjKyT5gZw+NsSMTGLwSS3dXLMGtSrI05lSZ4lLX39N1jeq+koNYZxj1a+tJQUfU9Pz7b1JHM+iZqLJaJx++larPqyB49zPhkiPNpOdL4BLmVc9fqPSo1O9v6WS3ViPD/XZS/3xszIDqEC1HVz5U13eoPLJUUaPwk3K+BRU5skybqhDPtEnydEmsvv1cwtgOBziZFpQmcPyNFhQ9njNfYCSshyY92xbv9+vCkIN5x/WL3VdLcWYTqG3csJFi0GZdpbVlIsMxdn/1FR4OXfTBVgYpNrSCzF/AF3gkPI=cY��Dv0.1   1 1                                                                                                                                                                                                                                                                                                       �L=   %�e参数说明eNp1UU1v00AQPe/+imh7daUWiYsPSBy58ReceAup3CTYDhQhR6YNUqtAzSFRQ1tK048UAYmDFAkncZUfQ3Zjn/IXGHttyzlgyd6Z2ffmjd8YL6tv1Gqp8PT5M+Yc8M4ouG+yoy8Y031lr6bRlX+GG40GfocRKZWIXIAAHvgQ822NQoFUi7tESmqvFa1OUxQQgCEIRKev6mWdqkQ29ToVNY1WiPx4SxLZnrKfz8r5uzUtUUqkRHtEVDWLEVEUIm9LaVYsEvlRkljitOJx49cSp4Wt+EdxYoM75t2T6O8j6ZX/ESFxsfw9Y5etqMDmH1jvJ0Ir/6hcMaUdraqYkmHq5coLCeaUFF1f+cc4njNlM9tHKbEQBWFvtvBOmDth03aktDz3lr/60D5o3bFBl118B1v+2u/BDigKAhT5hc1u76FbFIwcCBaTVng6xmAp7IINTqFL2JmzaV9C4dfLdFbm/AgOH3jX5YMb3hnDRBj6gwNZQ5SHZyjQzgFjwTywsI5Md41AiH3uJ6A8XMwBMfMO2agN7YAXzrrB8HZH0QyKVWqUUtO44wTz0To/NizZyFlTbAvXdGpQE/1fNmr2aRheN5cPQxDkbpv1DwxTMeuGmGjhTbfA7W0pW1dmuWCF9nHYmyy8webmE7wRuH/4jc2/3e0a1Qq/8pnvbPwDai6WyQ==cY��   �拒绝；	 |
|status	 |tinyint（5) |是   |    状态：0正常；1删除 |
|atime    	 |varchar(15) |是       |    添加时间     |


###流程描述
####1、新增

	-&gt;用户添加视频（video表，生成一条数据）
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca2b6bd3ad6.jpg)
	-&gt;申请（check表，生成一条数据）
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca385f0b429.jpg)
-&gt;管理员审核(
	1、通过：修改check表 check=1 o_uid=审核账号id，ctime=当前时间戳；
			   video表 check=1
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca33985da81.jpg)
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca375ec1506.jpg)

	-&gt;拒绝：修改check表 check=2 、o_uid=审核账号id，ctime=当前时间戳，reason=拒绝原因
			   video表 check=2
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3af6e2c4e.jpg)
####video
![](http://hk.iitrend.cn/show    .  � .                                  �@!   	�U	int/floateNq1lEtP20AQx8/eT5E6t4oQAkqREOLUYyv1jjgYYoFV4qR+VCAWlFBaUZ6poOIpHhIplao2IEVQKITv   ��a    	!�desc测试eNqtVE1PE0EYPu/8irq9GZZGA5eGcPKoiXfCYWw3sJFu19ldA2Ha0KqJWik9YKiQICYQT1pICGrV9r+Y/WhP/gXfnWG3+6mtYZI2s8/zzrwf8z5vPp/P5x6SatksGfcV3dDR7dyod+l0279/HDrdgXvat9tN+/OVs9exBkejy0/Wt3P38LnTPhsP3tlnB+PTjjX84DR6cNAkG3CqsPW4XFDUsrw5r61rhQcyKa1j1SjcI3itqhYiztDSLUlC2ygHS9QwwRVdLOb4N8N0A2NsmFGUMU/xhikDvLh4985clKrgzQxCURkxn2CI/MRUiFwG2iCmHGONLc1zJSqqIcaosqyXPEoM4Brb1bgdXKxrVVWXE2nNmtR0EeoGUdS1KYKcWIgaf5GUcKbziQnJcui2DsbPfjrdXtzAT3QlAntrO4GwAyqucGc4dtXEwqywyiXYWgRZTa2BTAiULvtBFhZuumHc11fOTsM9aSQ6B9WQJC0jEJS913TeniNYlG/tzi61hy/GO6+oe/HdPm5RLlaKaFGCxf6p/0O0Xq/7CoKt9wlvcb2D2LwdaKIoMkmI1tddoAHndy89IiyKUe+Lc9GESWANWgjBGRCsgJLyFASU0chhJizOCB7WZphIVDpMRgsdZqI9j4Qagrp6wUNCw3376Pj/q8rVS6FWlOsNMF9EDAVF0KD1Ef318r3Xvv6BwNbqv3H7H68fmVmZlX8Y8T5lRpAyDZoIBWllvdNsrzRV0YNh89e6z/lBRObMzM74lEnzFB4yadmtACqg6IwR4lByyGSYpE0Zz3YyZeBrNZF8aMCkxejNlxts+thwmXT/H/F/Rb0=cY�B   �doc/Public/Uploads/2017-09-26/59ca3b0ed05c3.jpg)



####2、修改

	-&gt;用户修改视频数据title的值由‘下一个计算平台’改为‘略’（video表，data字段记录修改动态）
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3bb25499f.jpg)


	-&gt;申请（check表，生成一条数据
	  	   video表 check=0）

####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca36bd5187c.jpg)
	-&gt;管理员审核(
	1、通过：修改check表 check=1 o_uid=审核账号id，ctime=当前时间戳，修改相应字段的值
			   video表 check=1，title=‘略’
			   
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca33847aa1f.jpg)
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca363313e17.jpg)

	-&gt;拒绝：修改check表 check=2 、o_uid=审核账号id，ctime=当前时间戳，reason=拒绝原因
			   video表 check=2
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3b80938a   � � �   �   �   �   �   /   [   c   [   W   H   8   W   -   B   6   N   N   |   �   �   �   �   �   )   &   &   (   )   *   &   (   *   C   ?   ?   �   <   �   �   �   5   �:?   	�Y432#### sysCode
* 说明：获取核心字段
* url：

<!--
{
    "params": {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": true,
            "type": "string",
            "desc": "状态码"
        },
		"type":{
            "value": "tag",
            "required": true,
            "type": "string",
            "desc": "获取数据类型：tag>获取标签列表； friend>获取好友上限数量； refer>三级分销奖励；coin_besic>货币兑换比例；vip>vip等级；points>积分等级"
�?   	�u432#### sysCode
* 说明：获取核心字段
* url：

<!--
{
    "params": {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": true,
            "type": "string",
            "desc": "状态码"
        },
		"type":{
               �    �是",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": "你知道我在",
            "required": true,
            "type": "string",
            "desc": "错误提示"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|name|float|是|
|~~~age~~~|~~~int~~~|~~~是~~~|max:"552.1"不是int类型1<br>value:"5552.1"不是int类型max的值不能小于min<br>

* 请求示例

~~~
{
	
    "name": "23",
	
    "age": 5552.1

}
~~~
* 返回


|参数名|必需|类型|说明|
|:----|:---|---|---|
|status|int|是|状态码，0成功，1失败
|products|arr|是|狗都是
|∟name|是|str|products二级参数
|∟num|是|str|products二级参数
|errstr|string|是|错误提示

* 返回示例

~~~
{
	
    "status": 1,
	
    "products": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "errstr": "你知道我在"

}
~~~cY�r    � �S �                                                                                                                                                                                                                           �_$   	%�默认页面eNrNV11P01AYvu77K7C7MxsLyG6I8cpLTbwnXJStkSnrZts5CC0BogmKwkw0IhjUBPRKgYRgRDP+i1k7uPIveNqu3TnrOe1pNwjNWNh5n/ej5+M9z5PJZDIjD9RqqV7U75U1XYObI+cHx/bWxr8/2/ZWq7N3am2sWj9O7M1mu7Vzfvy9/euws/3M3ti/aH2w9t9f7DXbZ1/slQPkWFfnkFd+4XEpX1ZK8vxobbaWvy+rxVlJ0fN3VelhVckTyeD2jVwOFmEEPWJNUqWKJk6OeL/dMb37MxjxRhdqMjKI1ZlHYpY0VaR5xzJWGL3Vb3oqzdVlInwvo   ��4#   	�=多层objeNrNV19P01AUf+75FLN7MxvLkL0Q45OPmvhOeOjWRqasm21nILQEiCYoCjPRiJCgJqBPCiQEI5rxXczawZNfwdt23XrXe9t7u0lotmW993f+3HPPPff8stlsNvNAq8vNinGvqhs63MxcHJ4425t/f+842+3u/pm9uWZ/P3W2Wp327sXJt87Po+7OM2fz4LL9wT54f7nf6px/dlYPkWBTm0dShcXHcqGqysrCRGOuUbivaJU5STUKdzXpYV0tYMbg9o18HpYggx6xIWlSTRenM/67N2YYvff+k   I�8"   	�E	int/floateNq1lEtP20AQx8/eT5E6t4oQQpUiIcSpx1bqHXEwxAKrxEnXdgViQQmlFeWZqlQ8xUMibaWqDUgRFArh   V    )  )                               �T   	�}	int/floateNq9lFtPE0EUx593PkXdvhlKAakkhPDkoya+Ex4GukJju11ndw2EgbR4iVgpfdBwS1AS0AejhYSAVizfxXR36ZNfwTOzl+41tiaySZvZ8z+zZ86cc37pdDqdekjKeX1eu19QNRXdTl03z8yd+u/LPXOnbR21jPq68fXc3Gp02vvXZ18630+svedm/bjb3jWOt7tHjc7VoVltwkadFGFXdvlxPluQ89LSsLKoZB9IZH4Ry1r2HsELZTkbCIambmUyaAWl4BEVTHBJFSdT9ju3qRrGWNODVq48xUVdAnMuNzY6FJRKeMkRhu/cDWsF2dVGJkIakZ7oBSLlwUEjuhRStWWFxRMLsiaGpLykzjPJen1uVqrWh6ro6atDSBBgs6RqYzedRC6XkMKjYhkPlARyUnEiqEpZVqVIpQatU3/3rWqkIC8MduWem2J3W8y5+guOCUmMXNvuPvtp7jTDDm7GMwEze1YiFr5BxiU7GA59quehl/gVRtTVgGU29g4kQuAOkyszPn4Tc2C3EFpFmcw0AlgYW+vmuxMED7WXRmOTGlcvupUNap3+MA5q1AYRRXQyAw//p+4P0bW1NZcOsGSvUAtnBWdjK5ihSdEZIbHzbRMcQLG/Pjo1R6ZhkByHkYmwA9N5FD67zoeNxkdnxWeIrd3bum5eGIefjZe7c+Vy0ahc8v0cpxfm6TqAtNOuIQQ7gHcCitJNEFDC0PiVEBYCUpAKfilSUb8YLKhfSagnEhjV7BR6YLuh8zOoxZ3eZVp/50fQiKwUUJ6rt8b+wb+3oc09Cp1DbVJRLxqiLn64DCyhHjQQ/fXqPRt8d6fn22m9sVqfnPHgXnrpL072hHMnKKLvAF5+Se03WPP11UYerwfspACqB45qgzo2pI/TcWnOgFVAQUwLYVOU0wkucaBmvj1Qw9tsJHkfo+POyBD9X+fZmYc/QLDoiw==cY�C9    fzHdbfvkX3DO2Qt7xTZBT9JmznwzOzNnZr5EIpGI3SPFrDan3skpqoKuxvqtI2Oj8ft0y9jo9PbaemNZ/3psrDW7ne3+0Zfu94Pe1lOjsT/obOr764O9Zvds16i3wFEjefBKlx9m0zk5Ky2OlRZK6bsSmVvAspq+TfB8UU57gqGpK6kUWkIxOPESJrigxDMx8851iooxVjWvliOPcV6TQH1fTE7OJL1YAS8CIorj18duTPqxnGxj1276MCI90nJEyoKBSjTJh6rlEgsYz8lq3AdlJWWOQb1Xx0at3vtQjzt4JYkEAZwlRR2ProLlc/lFiGJECQ/yRTxSEcgqxYqglIqyIgVadWGjQkoc7r0VleTk+dGe3DErmeMWktdwwTEhkZFX1gdPfhobLb+BM5oeNTtLAQ13kHHBDIZ9nzq30Ar8CQNoxaOZCX0DiRB4w+jOTEz8jz0wRwhVUCo1jYAt9LVl4+0BgkNNUW+uUv3s2aD2kvYOf+g7K9RkIopoJgWH/1P7h2i1WrXpAUR2hV5YEuTGJF5h5hYhuNz9tgow6KdmyTR35itp2evNj5bEV4PJ9iP0Wyf67mf9+eZssZjXa6fcn9PkiXG4DATZ7awgBB7AYwIKspYgoJDJEFxqdsRkQDXp3ACaSXo+5CMHD+TlBjcU6Ksb9LbVjUR0FQmM28yKz+ktrFxz9S81f1EMz95mtuHyRzCOrHPQzbM3+vZOcBjf1YYbRpP9KIwYNfmKOtEQtUmIw8Ao1KEORH+9eM/W3/Z0bLvt1732J2tJuJVW+IuRuefcCJroSsCpL2paL5rVYPOGGiOHtUecJA9hjxzVpOvQkC62Hm4lWXifKsjWESZhdM1sK56dDhTvYuqwHBlR/9N9tvbhD9hd3E4=cY�E�                                                                                                                              � �                                                                                                                                                                                                                                                                                                                                                                                                       �l   	�-	int/floateNqtVE1LAkEYPru/Yltvoa4fWBDRqWNB9+gwuIsu6brN7oYiQpYHsTLDwI8CDZS61BaIYKj9GXfWPfkXGj8yd3UlojnNPM+88z7PO++M3W63kwcwysgBaY8TJZFYJwdKE5Vyw04FlXpa/UPNnauvLXST7/fuB82XfvtNq6RRrqH3ymqjqNfz/c9HlFJwoAzDOIqOHzM0xzNszCWEBHqfhYEQ4CV6F4JglKcNyYjtNaeTSBAkHpQAIIiI1BY5WY8xHkRYAzJGT0FYHsGU10c5jFQExDDh93s9G2aG4yfMpomA7InMQZbBrARl1sRKcWGcSpQgxwfN6RhWDIxY9amg5q+pGZl0EDYbSYHgCvUjkZbqXT5L/R6Xe4UFv9/CAMdLlurbTb2XnlNPTD1MDxeFKC8aneB6AEkWrd15/lTlFSK1bAudpbRaati5cqNMXs1W8cyj1t8HzYah8rNQYdJrS1T+Tg2A0FLNZVG/6KKSYt7w7f/QAI9GYgGZb3EKANNRPzvkyPhiF9ikATlaWgMWQty6K95Qv1vTqg09VUCZW/Xhmfr/x6HflQeKgn8Q/JssNBmRJJzOnS8/JzaDcY�Uo    %  %                           �XD   	�	int/floateNqtVFtLG0EUfs78inTzVozpKrYQxKc+ttD30oetWTTUrOnsblGciFELwUtMqcV4wQsktVDaKARbU5P8l7Kzm33yL/TMzGabzc1SHEgyOd+Zc858c84XiUQi4Rd4PmFOG8+SuqGjh+FWpWoX87c3B3ax4ZRqNL9Kv1/ZOwWrcdiqfrOuL5yDdTtfdhv7tLznlgpW88zOVuCgiefgVGzxTSKW1BLqwmh6Nh17ruLpWUUzYk+xMjOvxQLJ0OSDaBQtoTAsKa1gJaVL8bD4z22aklIDFm59p8yZzCyNjUsjQSilLAAwMTE2Kj/uhpKagJ50AVh9ayaxmgDUwKbahRqLaZ4rqRndyRKqPi3KGJd8JDOCQqGwpMwMKXwCqpAHVS4Pqlu+77rpddVtrHeUjrwLeOH19LymB68h6YZimPrgq917kc7Glb2SdU6ztzdbj+xcgW6cwE6mpctWtRyg3T+aFj3Wp8p/q0bBeGA1m3vuWt0uVrod2vd/GTCztdRj6WxtSVG6Qv31MFP84XvQTMDyqi8HKsa6gYfMjlU/dU7KbvajnftAj75I//VukCKpzQwiy93db1UqIB0gIz1dhjIoGp1CoBt0Z9X+dIFgEbGlhW3iXP6ix5sEmKaFz7T5np59JUKZCCLxKCz+TdofRJaXlxmn8MO20FHeDkKwHcxXXBLCIFk/t8EKLiKLPPkaT3Fi4kxSAG2t1enFjlXLM7lgKJwG2aMrN50gTCbDeGqY90GZvch86NvBS+fsPJTEjHcm4Kr8w75cBSKtxiZCEBZkM4QCncTV0LMJ+eEpETDN/CFGc5ceHgd5Bmrdo5U23cMZFrNP4ILsXcjQyUSkPYUExkn4t2cHkd+5E1Y1N0MP+b5WbcupnXsNwb3M1B1OotGJ6ETu29l2yL92X+p8NZN95gLiEQqh/gMbADrnFIUyfih/BnuGzXuTP3QhjIc=cY�q@    e  e                                                                                           �<   	�len长度eNqtVEtvElEUXs/9FTjsDEgwbWIadeVSE/dNFxOYtEQYxjszpk0vpFAbtbWUNBKwTaombXWh0sYGK1r4L2ZerPwLnpnLDPOiQutNIOee8905z+/E4/F47DEuZpWM/DAnyRK6GTPbZ3qr9ufXnt7qGYddrVbVvnb0nbra2zfPvqg/Toy953rtaNB7qx01B4d1tf9Br7ThoYLz8Cq18iSbyglZfvmWuCSmHvE4s8QJcuoB5haLQsrnDN29kUyiVRSDw4oc5goSOxejd1snyRzHyYpfa1uecXmFBzWrf2vou7t68xgEs/7J3PzMJvzQArcMwNnZ2+mAIc8LYAhqMf9UyWE+CyYZK3zAKq+ItltJxjlhMegqy0sZy8q66pItlSgOvi2JRUHiQ1lemmNE6P8jSGOzo69VjPcVT7QjKCvSTkXENZlzDuOxnreag/ULvdUOApyM531q66yGNPYDgStQZ1zgUyOEUrBLGLKWfJqFyBrwGEMNx3dmZuZKfckJ8jRNoSOESiiZvI+AaNpOVW+cIDiEilp9m2j9jcHaK2Kc/tQOtgglMUFkLgnH/ifOD5FyuewwC0TrCr0YSnRmrIud5KDR17rH6nk3fSehnm+b6xdmZ8PsvwDu3Esje11810+rsCjU3hZC8A74zKAwexkGTUheL9LLXa/epa5XGSq+1xjihNfo5y1iSgiqbeUC+fXfaPsHV681JTeBAhPqmrgtdgVEHLLZOGAOcSniCoj8fvnOmnfnW+4jtfva6H4cToWNUgr/ANHBtkEwjFEhuamPa+1ljQ037Pq9CTADmpRwovGtqqm90kUV6dKzp6LSnActg/xrigmqwntqDCRqUVnY0aKC20Ioec+OiorRWlFTl4QuqMm6MKTKXyQFixg=cY���    �  �                                                                                                                                                                                                   �0] 		%�admin默认页面eNrNVE1rE0EYPu/8iji5SeJGSECDePKo4F2EDtlNu5jdrDO70tJJaIKCWE1zUIytVAutHkTTQqkYJfkvsh/Nyb/gu7PZ2E02qa0eOuwss+/3PPu8bzqdTqfu0qpil6zbGrMYQpdTx91Dr9P69WPT6/T93Z7barpfjryNttPfOj787Hzb9zcfe629Yf+Nu/d6uNt2BjteowuONq2A14K88kCRNUNRl6+YS6Z8R6WlJWJY8i1KFquGfDLdAkI3LmWzaBWlYGGTUKIzXEyF30LGLEKIZcelQvOIVGwVxJiUFQYPKROmiM0UOJcZUcTGGYQrqoGLV3O5TDwEVR/aGlUViGJRW53QWiumiM8sqhmLEEaSJKyTZVzE13PRpwaBC9cmPBWVlQJP/9mRt9bw3zfwWF8Tp1roAAUws2owderOc298LyYO1uqURDgYRA8RIjgzw8LWwaBQmNLWYpL75wKOUIrPgMwfU2yGJEnA4D9mzlwYdBMxUCkF5s1mQT5/rp+iGRY+M11RDWWzN4Pp4G40vVf7CBYPj277BfcPvrvb69zrdN32B3fwxN35xMMxwhEvZmGJN4824lFb87C5Alc+Th9Ooa/eQRPmj9NfR6her8OQkNDkSDi19xFUHjhDwMFLd2s7XjeUOny7FpV/asVBvcCsiWL5z6fvAioIMVxnZOn0nvu9jyO4hI2tzzWJOP83KSLbuUmSjUJacaBBAugCo1mgRzNJklByD8QUJ6mPJCD2KFCstf8t1LhD8vnRf/4NAV4yOg==cY���v0.1    2.jpg)
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3471a303d.jpg)

####3、删除

	-&gt;用户删除视频（video表，status=1）
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca357353719.jpg)
	-&gt;申请（check表，生成一条数据）
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca39789ccbf.jpg)
	-&gt;管理员审核(
	1、通过：修改check表 check=1 o_uid=审核账号id，ctime=当前时间戳；
			   video表 check=1 status=1
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca334aa029e.jpg)
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3ab793c05.jpg)

	-&gt;拒绝：修改check表 check=2 、o_uid=审核账号id，ctime=当前时间戳，reason=拒绝原因
			   video表 check=2
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3a7ecccf1.jpg)
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3a92700d2.jpg)


	

cY�;�    Unnt+MRX6NibhPUrUNSuZGs9M+v9z+7MLx6Px2OvlFxGH9FeSKqmoqexeqVqbq7cXm2bmzXr6JKszJIfZ+Zqyajt1KvfjYsTa3vOXCnbtS1S3rCPSsbNoVmswEJdGYdVycnXmaQkZ8SJzvxYPvlSVEbGBFlLPleE0Zyc9GyG+p8kEmgKxWDweUERsirfF6Pfrk0WsqLH4lrfCuO6Y+a7e/gOrysrTIAjne5OPfN7JJl6en0ORXyjS4qYAa+m6KLPq03m3a1UTZHkUf92GVEdcbzkeI2UlvmWc7oDcVyMF0bbqHdERqrv7InUn+rsapNCOh2RgCRrkeovqnZtjlGPGjk0fq7mc7LqzQTOQ9B0NTq71KNOuY1Ia+HMLBStg+Lt1VKXOV8iC/swS5Gj03q17Dn51tI8rbUQlQ9TIyhKpJrFDfvdtblZ8Qc08x/0mJ0xFbCwJc4Lgu9XdxF61r3YgHfaYxkKPQNRUaB02/SQcX1g7Zft4po5/4nsfuX/Q3fY61v1SgUQAjgJVBmaRonEAAJ+kNVZ8/MJgoHpFFoKk5v3duEjtk5/kb1FTNmEEe5LwHDfuPkg7BwlhjvBVA6mXYnwzMwMdCK8nRkpfWnMoNicWTPDeuWcHH4jH7aGc7lxUrjqH1YGoCH7+EY/8sbPZfg5rKJiUm6AJDcCunr9AY4fuUA9N09nIXejtogQbAnE45CXbxyHIvDGejx08zgYuLH2wO2xzsDlsc4wsiHO4RpV3kRbmHBKtnDhLthCpVOuRah3sBamnQIjVDgDNRCOoM6co4fruFknO3vBKtstPKzKKPncOoPdcVsuIdxkkBsPQMEtciD8e36fLdlWrHG5ZF0eN9rBjdKz9wTRNmeLn2061Eo7tAoZloddZ+oRNRV9Lw/gOFtnHob/tQxK8FAZDMDDkh4EK4e8/Ob8piDAI0LCCO7E3hEcvoYCyTPwDgVEkN3/tvmD4L7rpD/1TBfncY�V:                                       态码"
        },
        "products": {
            "required": true,
            "type": "arr",
            "desc": "狗都是",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    }
}
-->

* 参数



|参数名|类型|是否必填|说明|
|:----|:---|---|---|
|~~~staaatus~~~|~~~string~~~|~~~是~~~|len="a",请输入正整数<br>

* 请求示例

~~~
{
	
    "staaatus": "法撒旦法萨芬"

}
~~~
* 返回


|参数名|必需|类型|说明|
|:----|:---|---|---|
|status|string|是|状态码
|products|arr|是|狗都是
|∟name|是|str|products二级参数
|∟num|是|str|products二级参数
|errstr|int|是|状态码

* 返回示例

~~~
{
	
    "status": 5521,
	
    "products": {
		
        "name": "aa",
		
        "num": 55
    
	},
	
    "errstr": 44

}
~~~cY�_-      //用户token
	id:54										//反馈id
	input type='file' name='pic' 
---

&lt;!--
{
    &quot;response&quot;: {
        &quot;type&quot;: &quot;obj&quot;,
        &quot;value&quot;: {
            &quot;status&quot;: {
                &quot;type&quot;: &quot;int&quot;,
                &quot;value&quot;: &quot;0&quot;,
                &quot;desc&quot;: &quot;状态 0正常；1失败&quot;
            },
            &quot;img_url&quot;: {
                &quot;type&quot;: &quot;string&quot;,
                &quot;value&quot;: &quot;http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg&quot;,
                &quot;desc&quot;: &quot;图片路径&quot;
            }
        }
    }
}
--&gt;







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0正常；1失败
|img_url|string|图片路径

* 返回示例

~~~
{	
    &quot;status&quot;: &quot;0&quot;,	
    &quot;img_url&quot;: &quot;http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg&quot;

}
~~~Y���   �"value": "tag",
            "required": true,
            "type": "string",
            "desc": "获取数据类型：tag>获取标签列表； friend>获取好友上限数量； refer>三级分销奖励；coin_besic>货币兑换比例；vip>vip等级；points>积分等级"
		}
    },
    "response": {
		"ttt":{
			"type":"arr",
			"desc":"（标签列表; type>tag）",
			"value":[{
				"id": {
					"value": "1",
					"type":"int",
					"desc":"id"
				},
				"column":{
					"value":"1",
					"type":"string",
					"desc":"vip等级"
				},
				"value": {
					"value":"500",
					"type":"int",
					"desc":"对应充值金额（分为单位）"
				}
			}]
		},
		"response2":{
			"type":"obj",
			"desc":"（好友上限; type>friend）",
			"value":{
				"id": {
					"value": "1",
					"type":"int",
					"desc":"id"
				},
				"value": {
					"value":"10",
					"type":"int",
					"desc":"好友上限数量"
				}
			}
		},
		"response3":{
			"type":"arr",
			"desc":"（三级分销奖励; type>refer）",
	   �		"value":[{
				"id": {
					"value": "1",
					"type":"int",
					"desc":"id"
				},
				"column":{
					"value":"level1",
					"type":"string",
					"desc":"第一级（最接近用户）"
				},
				"value": {
					"value":"50",
					"type":"int",
					"desc":"奖励比例"
				}
			}]
		},
		"response4":{
			"type":"obj",
			"desc":"（货币兑换比例; type>coin_besic）",
			"value":{
				"id": {
					"value": "1",
					"type":"int",
					"desc":"id"
				},
				"value": {
					"value":"100",
					"type":"int",
					"desc":"兑换比例"
				}
			}
		},
		"response5":{
			"type":"arr",
			"desc":"（vip等级; type>vip）",
			"value":[{
				"id": {
					"value": "1",
					"type":"int",
					"desc":"id"
				},
				"column":{
					"value":"1",
					"type":"string",
					"desc":"vip等级"
				},
				"value": {
					"value":"500",
					"type":"int",
					"desc":"对应充值金额（分为单位）"
				}
			}]
		},
		"response6":{
			"type":"arr",
			"desc":"（积分等级; type>points）",
			"va   lue":[{
				"id": {
					"value": "1",
					"type":"int",
					"desc":"id"
				},
				"column":{
					"value":"1",
					"type":"string",
					"desc":"积分等级"
				},
				"value": {
					"value":"50",
					"type":"int",
					"desc":"对应积分值"
				}
			}]
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:----|:---|---|---|
|token|string|是|状态码
|type|string|是|获取数据类型：tag>获取标签列表；friend>获取好友上限数量；refer>三级分销奖励；coin_besic>货币兑换比例；vip>vip等级；points>积分等级

* 参数示例

~~~
{
	
    "token": "101du43hu9gube39gh3",
	
    "type": "tag"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:----|:---|---|---|
|ttt|arr|否|（标签列表;type>tag）
|∟id|int|否|id
|∟column|string|否|vip等级
|∟value|int|否|对应充值金额（分为单位）
|response2|obj|否|（好友上限;type>friend）
|∟id|int|否|id
|∟value|int|否|好友上限数量
|response3|arr|否|（三级分销奖励;type>ref    er）
|∟id|int|否|id
|∟column|string|否|第一级（最接近用户）
|∟value|int|否|奖励比例
|response4|obj|否|（货币兑换比例;type>coin_besic）
|∟id|int|否|id
|∟value|int|否|兑换比例
|response5|arr|否|（vip等级;type>vip）
|∟id|int|否|id
|∟column|string|否|vip等级
|∟value|int|否|对应充值金额（分为单位）
|response6|arr|否|（积分等级;type>points）
|∟id|int|否|id
|∟column|string|否|积分等级
|∟value|int|否|对应积分值

* 返回示例

~~~
{
	
    "response2": [
		
	],
	
    "response4": {
		
        "value": "500"
    
	},
	
    "1": [
		
        {
			
            "column": "1",
			
            "value": "500"
        
		}
    
	],
	
    "response5": [
		
        {
			
            "id": "1",
			
            "column": "1",
			
            "value": "500"
        
		}
    
	],
	
    "response6": [
		
        {
			
            "id": "1",
			
            "column": "1",
			
            "value": "500"
        
		}
    
	]

}
~~~cY�[   � �             �EE %�Madmin删除朋友#### delFriend
* 说明：删除关系用户
* Method：POST
* url：/pp/v1/Client/Profile/delFriend

<!--
{
    "params": {
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "登录凭证"
            },
            "friend_uid": {
            �_D�[D   %�添加朋友#### addFriend
* 说明：添劌D�D  �D   %�{添加朋友#### addFriend
* 说明：添加朋友
* Method：POST
* url：/pp/v1/Client/Profile/addFriend
<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"登录凭证"
			},
			"status":{
				"type":"int",
				"required": true,
				"desc":"关系用户状态：1为 好友，2 为临时好友",
				"value":1
			},
			"friend_uid":{
				"type":"arr",
				"required": true,
				"desc":"用户ID列表",
				"valu  ]  y  y�                                                                   ��'   1�G商品分类列表#### s�X�'   1�s商品分类列表#### showCategory
* 说明：商品分类列表
* Method：POST
* url：/pp/v1/Admin/Goods/showCategory


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101  &   �   %�	#显示奖项#### showLottery
* 说明：显示奖项
* Method：POST
* url：/pp/v1/Admin/Lottery/showLottery


<!--
{
    "params": {
�~�(   %�M	#显示奖项#### showLottery
* 说明：显示奖项
* Method：POST
* url：/pp/v1/Admin/Lottery/showLottery


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"id":{
					"value": 1,
					"type":"int",
					"desc":"奖项ID"
				},
				"ratio":{
					"value": 2,
					"type":"int",
		  2  				"required": true,
				"desc":"附加参数"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"param": {
				"type":"obj",
				"desc":"参数",
				"value":{
					"appId":{
						"value":"wx54xfdxx66498xxx",
						"type":"string",
						"desc":"公众账号ID"
					},
					"nonceStr":{
						"value":"xq8feo75j9204rj8qwwv1hsalv",
						"type":"string",
						"desc":"~"
					},
					"package":{
						"value":"prepay_id=wx20170912312337b65563483467862",
						"type":"string",
						"desc":"~"
					},
					"paySign":{
						"value":"AEBC0AMI39SA3495T83F6015E28F6",
						"type":"string",
						"desc":"~"
					},
					"signType":{
						"value":"MD5",
						"type":"string",
						"desc":"~"
					},
					"timeStamp":{
						"value":"1547525272",
						"type":"int",
						"desc":"~"
					}
				}
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|�    e":{
					"type":"int",
					"desc":"用户ID",
					"value":[
						123
					]
				}
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：成功， 1：系统繁忙，10001：好友已达上限"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|status|int|是|关系用户状态：1为好友，2为临时好友
|friend_uid|arr|是|用户ID列表
|∟/|int|是|用户ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "status": 1,	
    "friend_uid": [123]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功，1：系统繁忙，10001：好友已达上限
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y�C*�  � �� �                                     �� #�uweekend检查token#### checkToken� � #�Awee�� #�Gweekend检查token#### checkToken
* 说明：检查token
* Method：POST
* url：/pp/v1/Admin/LoginReg/chec��   #�U检查token#### checkToken
* 说明：检查token
* Method：POST
* url：/pp/v1/Admin/LoginReg/checkToken


<!--
{
      �7�   �I登录#### login
* 说明：登录
* Method：POST
* url：/pp/v1/Admin/LoginReg/login

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"user":{
				"value":"wk",
				"type":"string",
				"required": true,
				"desc":"管理员账号"
			},
			"pass":{
				"value":"101deu028u484yr92r3ur3",
				  �      =��   =�o修改货币兑换比例#### editRatio
* 说明：修改货币兑换比例
* Method：POST
* url：/pp/v1/Admin/CoreField/editRatio

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"desc":   ��  � � ،E %�Uweekend删除朋友###�cE %�YE   %�删除�BE   %�S删除朋友#### delFriend
*�	�F   I�9用户被打标签项及数量#### showTag
* 说明：用户被打�3F   I�用户被打标签项及数量#### showTag
* 说明：用户被打标签项及数量
* Method：POST
* url：/pp/v1/Client/Profile/showTag


<!--
{
    "params": {
		"ty   l�qE   %�1删除朋友#### delFriend
* 说明：删除关系用户
* Method：POST
* url：/pp/v1/Client/Profile/delFriend

<!--
{
    "params": {
		"type":"obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
				"required": true,
                "desc": "登录凭证"
            },
            "friend_uid": {
                "type": "arr",
				"required": true,
                "desc": "用户ID列表",
         4   n   I�[用户被打标签项及数量#### showTag
* 说明：用户被打标签项及数量
* Me  X    	"desc":"货币兑换类型：1:diamond(->gold)，2:diamond(->coin),3:gold(->coin)"
			},
			"num":{
				"type":"int",
				"required": true,
				"desc":"源货币数量",
				"value":12
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|type|int|是|货币兑换类型：1:diamond(->gold)，2:diamond(->coin),3:gold(->coin)
|num|int|是|源货币数量

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": 1,	
    "num": 12

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY݋�   B B�  �  �  ሷuid"
            },
			 "token": {
                "type": "string",
                "required": true,
  �i� 7�weekend0最热问答帖列表#### showHotPostingQuestion
* 说明： 最热问答帖列表（暂时只返回一条）
* Method：POST
* url：/carboss�A� 7�/weeken�*� ;�}weekend0最热一帖(问答帖)#### showHotQuestion
* 说明： 最热一帖(问答帖)
* Method：POST
* url：/carboss/index.php/Client/Posting/showHotQuestion

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			}
		}
	},
	"response": {
		"type": "arr",
		"desc":"帖子列表",
		"value": {
			"type":"obj",
			"desc":"帖子信息",
			"value":{
				"id": {
					"type": "int",
					"desc": "帖子ID",
					"value": 2
				},
				"uid": {
					"type": "int",
					"desc": "用户ID",
					"value": 2
				},
				"nickname": {
					"type": "string",
					"desc": "昵称",
					"v  �   l l
: {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": true,
            "type": "string",
            "desc": "状态码"
        },
    },
    "response": [{
        �J   %��J   %�s默认页面#### ShowInfo
* 说明： 工会列表(兼模糊搜索)
* url：


<!--
{
    "par�#J %�weekend�	J %�Qweekend工会列表#### unionList
* 说明： 工会列表
* Method：POST
* url：/pp/v1/Client/Profile/unionList


<!--
{
    "params": {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": true,
            "type": "string",
            "desc": "状态码"
        }
    },
    "response": [{
        "id": {
            "value": "1",
            "type": "int",
            "desc": "工会ID"
        },
		"name": {
            "value": "三千师姐",
            "type": "string",
            "desc": "工会名"
        },
		"user": {
            "value": "师弟",
            "type": "string",
   >   � �     "desc": "创建者"
        },
		"num": {
            "value": "10",
            "type": "int",
            "desc": "成员数量"
        },
		"limit": {
            "value": "20",
            "type": "string",
            "desc": "成员上限"
        },
		"invitecode": {
            "value": "wk940729",
            "type": "s�#K   %�加入公会#### JoinUnion
* 说明： 加入公会
* url：


<!--
{
    "params": {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": true,
            "type": "string",
            "desc": "状态码"
        },
		"id": {
            "value": "1",
            "type": "int",
            "desc": "工会ID"
        },
    },
    "response": {
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"errstr": {
 �}K %�9weekend�cK %�weekend加入公会#### joinUnion
* 说明： 加入公会
* Method：POST
* url：/pp/v   ��  W  W�[
                  1,2]
                
            }
        },
�rG   �jG   %�#	货币兑换#### xChange
* 说明：货币兑换
* Method：POST
* url：/pp/v1/Client/Order/xChange

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"登录凭证"
			},
			"type":{
				"value":1,
				"type":"int",
				"required": true,
			     2   O�[通过邀请码确定用户关系�wH O�weekend通过邀请码确定用户关系#### invitecode
* 说明：通过邀请码确定用户关系（只操作一次，过后无效）
* Method：POST
* url：/pp/v1/Client/Profile/invitecode

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"登录凭证"
			},
			"invitecode":{
				"value":"dh83yt973y",
				"type":"string",
				"required": true,
				"desc":"邀请码（无则  =   � ��                                                                                                 �{�a 1�-admin+我的个人中心#### mine
* 说明：查看他�*�a 1�	admin+我的个人中心#### mine
* 说明：查看他人资料
* url：carboss/index.php/Client/UserInfo/mine
<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "typ�9�a 1�+	admin+我�5�^ =�weekend,修改帖字类型属性#### removePosting
* 说明：修改帖字类型属性
* Method：POST
* url：/carboss/index.php/Admin/Posting/removePosting

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"posting_id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 2
			},
			"old_type": {
				"type": "int",
				"desc": "帖子原有类型：1：问答板块，2：分享板块",
				"value": 2
			},
			"new_type": {
				"type": "in  �    arams": {
		"token":{
			"type":"string",
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
		"floor_id":{
			"type":"int",
			"value":10,
			"desc": "楼层ID"
		}
    },
    "response": [{
			"name":{
				"value":1231,
				"type":"int",
				"desc":"分类术语ID"
			},
			"number":{
				"value":12,
				"type":"int",
				"desc":"数量"
			},
			"list":{
				"type":"arr",
				"desc":"房间列表",
				"value":[
					"1005",
					"1006"
				]
			}
    }]
}
-->

* 参数



|参数名|类型|必填|说明|
|:----|:---|---|---|
|token|string|否|token
|floor_id|int|否|楼层ID

* 参数示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "floor_id": 10

}
~~~
* 返回



|参数名|类型|必填|说明|
|:----|:---|---|---|
|name|int|否|分类术语ID
|number|int|否|数量
|list|arr|否|房间列表

* 返回示例

~~~
[
	
    {
		
        "name": 1231,
		
        "number": 12,
		
        "list": [
			
            "1005",
			
            "1006"
        
		]
    
	}

]
~~~cY���    �|格式为obj
|token|string|是|登录凭证
|openid|string|是|用户微信ID
|fee|string|是|金额(分为单位)
|attach|string|是|附加参数

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "openid": "101sdhfeh8rthga3f1eed21",	
    "fee": "101sdhfeh8rthga3f1eed21",	
    "attach": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|status|int|否|状态码：0成功，1失败
|param|obj|否|参数
|∟appId|string|否|公众账号ID
|∟nonceStr|string|否|~
|∟package|string|否|~
|∟paySign|string|否|~
|∟signType|string|否|~
|∟timeStamp|int|否|~

* 返回示例

~~~
{	
    "status": 1,	
    "param": {		
        "appId": "wx54xfdxx66498xxx",		
        "nonceStr": "xq8feo75j9204rj8qwwv1hsalv",		
        "package": "prepay_id=wx20170912312337b65563483467862",		
        "paySign": "AEBC0AMI39SA3495T83F6015E28F6",		
        "signType": "MD5",		
        "timeStamp": "1547525272"
    
	}

}
~~~cY���    �  �C                                                                                           ��3 �y�3�|�2 �v�2�r�2 '�'	admin&登录/注册#### loginReg
* 说明：登录/注册；未注册时注册同时登录；已注册即登录
* Method：POST
* url：/carboss/index.php/Client/LoginReg/loginReg

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"type":{
				"value":2,
				"type":"int",
				"required": true,
				"desc":"登录方式：1、微信授权登录（openid），2、专家账号密码登录（user/pass）"
			},
			"code":{
				"value":"zm_uf829a7d3j89991aui34a34",
				"type":"string",
				"desc":"微信code"
			},
			"user":{
				"value":"cc",
				"type":"string",
				"desc":"账号"
			},
			"pass":{
				"value":"e10adc3949ba59abbe56e057f20f883e",
				"type":"string",
				"desc":"密码(已经过md5 加密)"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"登�  �    �  �                                                                                                                                                                                                  �)Y ��Y   �	转账#### tr�|Y �Cweekend	转账#### transfer
* 说明：转账
* Method：POST
* url：/pp/v1/Client/Order/transfer

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"登录凭证"
			},
			"to_user":{
				"value":1,
				"required": true,
				"type":"int",
				"desc":"目标用户ID,当目标为系统时值为0"
			},
			"src":{
				"value":1,
				"type":"int",
				"required": true,
				"desc":"操作来源：3、碰碰门票，4、碰碰竞价 "
			},
			"type":{
				"value":1,
				"type":"int",
				"required": true,
				"desc":"货币类型：1:diamond(钻石)，2:gold(金币),3:coin(代币)"
			},
			"number":{
				"value":729,
				"required": true,
  �  !                                            "value": {
                                                "wwww": {
                                                    "type": "arr",
                                                    "value": [
                                                        {
                                                            "rr": 1,
                                                            "tty": 2
                                                        }
                                                    ]
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "desc": "我是说明"
                }
            },
            "min": "52",
            "desc": "我是说明"
        }
    },
    "response": {
        "  		"name":{
					"type": "int",
					"value": "4",
					"desc": "名字术语ID 如： 4：走廊灯 开启"
				},
				"val":{
					"type": "string",
					"value": true,
					"desc": "状态： 'true' or 'false'；当是调光灯时（类型为float）：60%（->0.60）"
				}
			}]
		},
		"surroundings":{
			"type":"arr",
			"desc": "房间环境信息",
			"value":[{
				"name":{
					"type": "int",
					"value": "5",
					"desc": "名字术语ID 如： 5：现在温度"
				},
				"val":{
					"type": "float",
					"value": "25.1",
					"desc": "温度湿度等数值，只含数字，统一使用浮点数：如：55%（->0.55）"
				}
			}]
		},
		"tv_and_sound":{
			"type":"arr",
			"desc": "电视机与音响",
			"value":[{
				"name":{
					"type": "int",
					"value": "5",
					"desc": "名字术语ID 如： 5：电视机 开启"
				},
				"val":{
					"type": "string",
					"value": "true",
					"desc": "状态： 'true' or 'false'"
				}
			}]
		}
	}
}
-->

* 参数



|参数名|类型|必填  ": "obj",
            "max": "15.3",
            "value": {
                "tt": {
                    "type": "obj",
                    "value": {
                        "ttt": {
                            "type": "arr",
                            "value": [
                                {
                                    "aaaa": 1,
                                    "bbbb": 2
                                }
                            ]
                        }
                    },
                    "desc": "我是说明"
                },
                "cc": {
                    "type": "obj",
                    "value": {
                        "name1": {
                            "type": "obj",
                            "value": {
                                "ww": {
                                    "type": "obj",
                                    "value": {
                                        "www": {
                                            "type": "obj",
  ��有客户入住 0 否， 1 是"
		},
		"service":{
			"type":"arr",
			"desc": "服务视图",
			"value":[{
				"name":{
					"type": "int",
					"value": "11",
					"desc": "名字术语ID 如： 11：勿打扰"
				},
				"val":{
					"type": "string",
					"value": true,
					"desc": "状态： 'true' or 'false'"
				}
			}]
		},
		"vip":{
			"type":"arr",
			"desc": "特殊服务",
			"value":[{
				"name":{
					"type": "int",
					"value": "2",
					"desc": "名字术语ID 如： 2：VIP重要客人"
				},
				"val":{
					"type": "string",
					"value": true,
					"desc": "状态： 'true' or 'false'"
				}
			}]
		},
		"sensor":{
			"type":"arr",
			"desc": "传感器状态",
			"value":[{
				"name":{
					"type": "int",
					"value": "3",
					"desc": "名字术语ID 如： 3：房间有人"
				},
				"val":{
					"type": "float",
					"value": 25.6,
					"desc": "数值或状态： 'true' or 'false'"
				}
			}]
		},
		"device":{
			"type":"arr",
			"desc": "房间电器",
			"value":[{
		    Lottery/delLottery


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"id": {
				"value":1,
				"type":"int",
				"required": true,
				"desc":"奖项ID"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":0,
				"type":"int",
				"desc":"状态码：0：成功, 1：失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|奖项ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "id": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1：失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 0,	
    "errstr": " "

}
~~~Yݓ�                       ��1是
|∟∟∟∟light|int|否|灯状态：0关，1开
|∟∟∟∟window|int|否|窗状态：0关，1开
|response2|arr|否|返回结果2
|∟room_id|int|否|房间ID
|∟room_number|int|否|房号

* 返回示例

~~~
{	
    "response1": [		
        {			
            "floor": {				
                "num": "1",				
                "name": "1",				
                "room": [					
                    {						
                        "room_id": "1005",						
                        "room_number": "1005",						
                        "occupancy": "1005",						
                        "clean": "1005",						
                        "disturb": "25",						
                        "temperature": "1005",						
                        "light": "1",						
                        "window": "1"
                    
					}
                
				]
            
			}
        
		}
    
	],	
    "response2": [		
        {			
            "room_id": "1005",			
            "room_number": "1005"
        
		}
    
	]

}
~~~cY��I  |说明|
|:----|:---|---|---|
|token|string|否|token
|room_id|int|否|房间ID

* 参数示例

~~~
{
	
    "token": "101asdh8ferhf75gh857gh57g",
	
    "room_id": "105"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:----|:---|---|---|
|floor|int|否|楼层
|room_number|int|否|房号
|occupancy|int|否|是否有客户入住0否，1是
|service|arr|否|服务视图
|∟name|int|否|名字术语ID如：11：勿打扰
|∟val|string|否|状态：'true'or'false'
|vip|arr|否|特殊服务
|∟name|int|否|名字术语ID如：2：VIP重要客人
|∟val|string|否|状态：'true'or'false'
|sensor|arr|否|传感器状态
|∟name|int|否|名字术语ID如：3：房间有人
|∟val|float|否|数值或状态：'true'or'false'
|device|arr|否|房间电器
|∟name|int|否|名字术语ID如：4：走廊灯开启
|∟val|string|否|状态：'true'or'false'；当是调光灯时（类型为float）：60%（->0.60）
|surroundings|arr|否|房间环境信息
|∟name|int|否|名字术语ID如：5：现在温度
    |∟val|float|否|温度湿度等数值，只含数字，统一使用浮点数：如：55%（->0.55）
|tv_and_sound|arr|否|电视机与音响
|∟name|int|否|名字术语ID如：5：电视机开启
|∟val|string|否|状态：'true'or'false'

* 返回示例

~~~
{
	
    "floor": "1",
	
    "room_number": "11",
	
    "occupancy": "11",
	
    "service": [
		
        {
			
            "name": "11",
			
            "val": "1"
        
		}
    
	],
	
    "vip": [
		
        {
			
            "name": "11",
			
            "val": "1"
        
		}
    
	],
	
    "sensor": [
		
        {
			
            "name": "11",
			
            "val": "1"
        
		}
    
	],
	
    "device": [
		
        {
			
            "name": "11",
			
            "val": "1"
        
		}
    
	],
	
    "surroundings": [
		
        {
			
            "name": "11",
			
            "val": "1"
        
		}
    
	],
	
    "tv_and_sound": [
		
        {
			
            "name": "11",
			
            "val": "1"
        
		}
    
	]

}
~~~cY��y  $			},
					"max":{
						"type":"int",
						"desc":"最终时间",
						"value":150222222
					}
				},
				"type": "obj",
				"desc": "中奖时间范围"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"id": {
							"type": "int",
							"desc": "ID",
							"value": 2
						},
						"name": {
							"type": "string",
							"desc": "奖品名称",
							"value": "10000元现金"
						},
						"nickname": {
							"type": "string",
							"desc": "中奖用户名称",
							"value": "wk"
						},
						"phone": {
							"type": "int",
							"desc": "手机号码",
							"value": 18888888888
						},
						"atime": {
							"type": "int",
							"desc":    x x                                                  �,�C 1�	weekend,获取帖子列表#### showInfo
* 说明：获取�`�C 1�u	weekend,获取帖子列表#### showInfo
* 说明：获取帖子列表
* Method：POST
* url：/carboss/index.php/Admin/Posting/showInfo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start": {
				"type": "int",
				"desc": "起始页码",
				"required": true,
				"value": 1
			},
			"page_limit": {
				"type": "int",
				"desc": "一次显示数量",
				"required": true,
				"value": 50
			},
			"nickname":{
				"value": "zm",
				"type": "string",
				"desc": "发布用户"
			},
			"title":{
				"value": "157618888888",
				"type": "string",
				"desc": "标题"
			},
			"type": {
				�l�C 1�	weekend,获取帖子列表#### showInfo
* 说明：获取帖子列表
* Method：POST
* url：/carboss/index.php/A  �    ne",	
    "time": {		
        "min": "1501111111",		
        "max": "150222222"
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟id|int|ID
|∟∟name|string|奖品名称
|∟∟nickname|string|中奖用户名称
|∟∟phone|int|手机号码
|∟∟atime|int|中奖时间
|∟∟etime|int|奖品发放时间
|∟∟status|int|状态：1、未发放；2、已发放
|∟∟rem|string|备注

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "id": "2",			
            "name": "10000元现金",			
            "nickname": "wk",			
            "phone": "18888888888",			
            "atime": "15023234256",			
            "etime": "15023234256",			
            "status": "1",			
            "rem": "10000元现金即将发放，请注意"
        
		}
    
	]

}
~~~Y���    /Goods/delCategory

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"id": {
				"value":1,
				"type":"int",
				"required": true,
				"desc":"分类ID"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":0,
				"type":"int",
				"desc":"状态码：0：成功, 1：失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|分类ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "id": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1：失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 0,	
    "errstr": " "

}
~~~Yݓ0                        e":{
			"status": {
				"value":0,
				"type":"int",
				"desc":"状态码：0：成功, 1：失败"
			},
			"id": {
				"value":1,
				"type":"int",
				"desc":"奖项ID(新增时返回)"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|否|奖项ID（新增时不传）
|ratio|int|否|获奖比例（只返回分子，最大比例和为100%）
|type|int|否|奖励类型:1:diamond,2:gold,3:coin
|amount|int|否|数量

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "id": 1,	
    "ratio": 2,	
    "type": 1,	
    "amount": 10

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1：失败
|id|int|奖项ID(新增时返回)
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 0,	
    "id": 1,	
    "errstr": " "

}
~~~Yݓ�                   ��p� �+weekend转账#### transfer
* 说明：转账
* Method：POST
* url：/pp/v1/Game/Order/transfer

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"exchange_type": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"操作类型：1、转账；2、支出；3、奖金"
			},
			"from_user":{
				"value":"1",
				"type":"int",
				"desc":"来源用户ID"
			},
			"to_user":{
				"value":"1",
				"type":"int",
				"required": true,
				"desc":"目标用户ID"
			},
			"src":{
				"value":"1",
				"type":"int",
				"required": true,
				"desc":"操作来源：1、游戏转账；2、加入游戏扣费；3、竞价，4、系统奖励"
			},
			"type":{
				"value":"1",
				"type":"int",
		  щ]�
 #�{weekend检查token#### checkToken
* 说明：检查token
* Method：POST
* url：/pp/v1/Game/LoginReg/checkToken


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3  c  �:{
			"type":"obj",
			"value":{
				"id": {
					"type": "int",
					"desc": "电话票ID",
					"value": 2
				},
				"uid": {
					"type": "int",
					"desc": "用户ID",
					"value": 2
				},
				"to_uid": {
					"type": "int",
					"desc": "对应通话用户ID",
					"value": 3
				},
				"to_nickname":{
					"type": "string",
					"desc": "对应通话用户昵称",
					"value": "zm"
				},
				"direction": {
					"type": "int",
					"desc": "是否可双向通话：0、否，1、是",
					"value": 1
				},
				"duration": {
					"type": "int",
					"desc": "通话时长（毫秒为单位）",
					"value": 3600
				},
				"expire_at": {
					"type": "int",
					"desc": "过期时间（精确到毫秒）",
					"value": 1502325453
				},
				"status": {
					"type": "int",
					"desc": "使用状态：0、正常，1、锁定，2、使用中，3、已使用，4、过期",
					"value": 2
				},
				"atime": {
					"type": "int",
					"desc": "获取电话票时间",
					"value": 1502315453
				}    inReg/logout

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：退出成功, 8：token已失效"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：退出成功,8：token已失效
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY݆�                                                                                                                                 "status": {
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ],
            "required": true,
            "type": "arr",
            "desc": "状态码"
        },
        "products": {
            "required": true,
            "type": "arr",
            "desc": "状态码",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    }
}-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|~~~a~~~|~~~int~~~|~~~否~~~|value:"15.3"不是int类型
|t|obj|否|我是说明
|∟tt|obj|否|我是说明
|∟∟ttt|arr|否|---
|∟∟∟∟||否|缺失type<br>请填写value<br>
|∟∟∟∟||否|缺失type<br>请填写value<br>
|∟cc|obj|否|我是说明
|∟∟name1|obj|否|    ---
|∟∟∟ww|obj|否|---
|∟∟∟∟www|obj|否|---
|∟∟∟∟∟wwww|arr|否|---
|∟∟∟∟∟∟∟||否|缺失type<br>请填写value<br>
|∟∟∟∟∟∟∟||否|缺失type<br>请填写value<br>

* 参数示例

~~~
{	
    "a": "15.3",	
    "t": {		
        "tt": {			
            "ttt": [				
			]
        
		},		
        "cc": {			
            "name1": {				
                "ww": {					
                    "www": {						
                        "wwww": [							
						]
                    
					}
                
				}
            
			}
        
		}
    
	}

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|status|arr|是|状态码
|∟s|s|否|缺失type<br>请填写value<br>
|∟||否|缺失type<br>请填写value<br>
|products|arr|是|状态码
|∟p|p|否|缺失type<br>请填写value<br>
|∟||否|缺失type<br>请填写value<br>
|errstr|int|是|状态码

* 返回示例

~~~
{	
    "errstr": 44,	
    "status": [		
	],	
    "products": [		
	]

}
~~~cY���12343    ��单（Issue）、合并请求（Pull Request）和Wiki
- 支持添加和删除仓库协作者
- 支持Gravatar 以及自定义源
- 支持邮件服务- 支持后台管理面板
- 支持MySQL、PostgreSQL、SQLite3 和TIDB（实验性支持） 数据库
- 支持多语言本地化（15 种语言）

####我们以GitHub作为参考，比较一下Gogs和Gitlab这两个产品:

|特性 | Gogs | Gitlab | Github
|:----    |:-------    |:--- |-- -|
|Dashboard &amp; File Browser | Y | Y | Y
|Issue Tracking, Milestones &amp; Commit keywords | Y | Y | Y
|Organizations support | N | Y | Y
|Wiki | N | Y | Y
|Code Review | N | Y | Y
|Code Snippets | N | Y | Y
|Web Hooks | Y | Y | Y
|Git Hooks | Y | Enterprise | Enterprise
|LDAP Login | Y | Y | Y
|LDAP Group Sync | N | Enterprise | Enterprise
|Branded Login Page | N | Enterprise | Enterprise
|Language | Go | Ruby | Ruby
|Platform | Cross-Platform | Linux | * Virtual Machine
|License | MIT | MIT | Proprietary
|Resource Usage | Low | Medium/High | Medium/High


   cY���  "中奖时间",
							"value":15023234256
						},
						"etime": {
							"type": "int",
							"desc": "奖品发放时间",
							"value":15023234256
						},
						"status": {
							"type": "int",
							"desc": "状态：1、未发放；2、已发放",
							"value": 1
						},
						"rem": {
							"type": "string",
							"desc": "备注",
							"value": "10000元现金即将发放，请注意"
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|status|int|是|状态：0、全部；1、未发放；2、已发放
|page_start|int|是|起始页码
|page_limit|int|是|单页条数
|nickname|string|否|发布用户
|name|string|否|奖品名称
|time|obj|否|中奖时间范围
|∟min|int|否|起始时间
|∟max|int|否|最终时间

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "status": 2,	
    "page_start": 2,	
    "page_limit": 10,	
    "nickname": "zm",	
    "name": "ipho    ID"
			},
			"tag_list":{
				"type":"arr",
				"required": true,
				"desc":"标签 ID 列表",
				"value":{
					"type":"int",
					"desc":" 标签ID ",
					"value":[
						729
					]
				}
			}
		}
    },
    "response": {
        "type": "obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|to_user|int|是|目标用户ID
|tag_list|arr|是|标签ID列表
|∟/|int|是|标签ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "to_user": "12",	
    "tag_list": [729]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y݈�    sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"id": {
				"value":1,
				"type":"int",
				"desc":"商品ID"
			}
		}
    },
    "response": {
		"type":"arr",
		"value":[{
			"id": {
				"value":1,
				"type":"int",
				"desc":"商品分类ID"
			},
			"name": {
				"value":"超值",
				"type":"string",
				"desc":"商品分类名"
			},
			"order": {
				"value":1,
				"type":"int",
				"desc":"排序序号(由大到小)"
			}
		}]
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|否|商品ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "id": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|∟id|int|商品分类ID
|∟name|string|商品分类名
|∟order|int|排序序号(由大到小)

* 返回示例

~~~
[	
    {		
        "id": 1,		
        "name": "超值",		
        "order": 1
    
	}

]
~~~
Yݒ�  � {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"token"
			},
			"id": {
				"value":1,
				"type":"int",
				"desc":"商品ID(添加时忽略)"
			}
		}
    },
    "response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"category_id": {
					"value":1,
					"type":"int",
					"desc":"商品分类ID"
				},
				"category_name": {
					"value":"超值",
					"type":"string",
					"desc":"商品分类名"
				},
				"goods_list":{
					"type":"arr",
					"desc":"商品列表",
					"value":{
						"type":"obj",
						"value":{
							"id": {
								"type":"int",
								"desc":"商品ID",
								"value":"1"
							},
							"name":{
								"type":"string",
								"desc":"商品名",
								"value":"100金币"
							},
							"fee_price":{
								"type":"int",
								"desc":"商品价格（分为单位）",
								"value":"100"
							},
							"active":{
								"type":"int",
								"desc":"上下架标志（0=上架，1=下架）",
								"value":"0    owReward

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"required": true,
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"id":{
					"type": "int",
					"value": 11,
					"desc": "ID"
				},
				"name":{
					"type": "string",
					"value": 1,
					"desc": "分销等级"
				},
				"ratio":{
					"type": "float",
					"value": "0.10",
					"desc": "奖励比例"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|ID
|∟name|string|分销等级
|∟ratio|float|奖励比例

* 返回示例

~~~
[	
    {		
        "id": 11,		
        "name": 1,		
        "ratio": "0.10"
    
	}

]
~~~
YݕB    me|string|昵称
|displayname|string|系统分配名称
|phone|int|电话
|icon|string|头像链接
|sex|int|性别（0=男，1=女）
|birthday|string|出生日期
|city|int|城市编号
|qq|int|QQ号
|wechat|string|微信号
|facebook|string|facebook账号
|twitter|string|twitter账号
|invitecode|string|邀请码
|points|int|积分值
|points_grade|int|积分等级
|checkin_count|int|连续签到次数
|coin|int|代币
|gold|int|金币
|diamond|int|钻石
|contribution|int|贡献值

* 返回示例

~~~
{	
    "nickname": "wk",	
    "displayname": "72900",	
    "phone": 18818181818,	
    "icon": "http://zm.fairy.com/fairy/zm.jpg",	
    "sex": 1,	
    "birthday": "1994-07-29",	
    "city": 11010,	
    "qq": 1881888188,	
    "wechat": "My_Fairy",	
    "facebook": "Faiey@zm.com",	
    "twitter": "Faiey@zm.com",	
    "invitecode": "wk940729",	
    "points": 1000,	
    "points_grade": 10,	
    "checkin_count": 12,	
    "coin": 1000,	
    "gold": 1000,	
    "diamond": 100,	
    "contribution": 100

}
~~~Y�~              }
        },
        "type": "obj"
    },
    "response": {
        "value": {
            "status": {
                "value": 1,
                "type": "int",
                "desc": "状态码：0 成功， 1 失败"
            },
            "errstr": {
                "value": " ",
                "type": "string",
                "desc": "错误提示"
            }
        },
        "type": "obj"
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|---|obj|是|结果以obj返回
|token|string|否|登录凭证
|friend_uid|arr|否|用户ID列表
|∟/|string|否|****

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "friend_uid": [		
        [			
            "saf"
        
		]
    
	]

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|---|obj|是|结果以obj返回
|status|int|否|状态码：0成功，1失败
|errstr|string|否|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY�j  1      "type": "obj",
                            "value": {
                                "ww": {
                                    "type": "obj",
                                    "value": {
                                        "www": {
                                            "type": "obj",
                                            "value": {
                                                "wwww": {
                                                    "type": "arr",
                                                    "value": [
                                                        {
                                                            "rr": 1,
                                                            "tty": 2
                                                        }
                                                    ]
                                                }
                                            }
                                        }
                           +l：/ykd/index.php/Merchant/Dragon/ProductLists

<!--
{
    "params": {
	"a":{
	"type": "float",
            "value": "15.3"
	},
        "t": {
  
            "type": "obj",
            "max": "15.3",
            "value": {
                "tt": {
                    "type": "obj",
			
                    "value": {
                        "ttt": {
                            "type": "arr",
                            "value": [
                                {
                                    "aaaa": 1,
                                    "bbbb": 2
                                },
								{
                                    "dddd": 1,
                                    "cccc": 2
                                }
                            ]
                        }
                    },
                    "desc": "我是说明"
                },
                "cc": {
                    "type": "obj",
                    "value": {
                        "name1": {
                        Ac": "token"
			},
			"posting_id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 2
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 2
			},
    		"uid": {
				"type": "int",
				"desc": "用户ID",
				"value": 2
			},
    		"nickname": {
				"type": "string",
				"desc": "昵称",
				"value": "水货"
			},
			"icon": {
				"type": "string",
				"desc": "头像",
				"value": ""
			},
    		"title": {
				"type": "string",
				"desc": "标题",
				"value": "丰田换发动机有哪些要注意的？"
			},
			"desc": {
				"type": "string",
				"desc": "内容描述",
				"value": "比如拆卸发动机"
			},
    		"agree_n": {
				"type": "int",
				"desc": "点赞数量",
				"value": 2
			},
    		"collect_n": {
				"type": "int",
				"desc": "收藏数量",
				"value": 2
			},
    		"review_n": {
				"type": "int",
				"desc": "评论数量",
				"value": 2
			},
    		"best": {
				"type": "int",
				"desc":     � �                                                                                                                     �n\ %�weekend添加商品####�s %�Wweekend删除商品#### delGoods
* 说明：删除商品
* url：


<!--
{
    "params":  _�m` 	-�weekendgogs对比gitlab##Gogs 
##优势
#####1、部署方便
#####2、轻量（17M+,gitlab 700M+对资源要求很高）
##缺点
#####1、更新方式为覆盖安装，容易破坏数据
#####2、功能不足，比如 ci、数据备份和恢复、API、各种插件都还没有


Gogs的主要功能：
- 支持活动时间线
- 支持SSH以及 HTTP/HTTPS 协议
- 支持SMTP、LDAP 和反向代理的用户认证
- 支持反向代理子路径
- 支持用户、组织和仓库管理系统
- 支持仓库和组织级别 Web 钩子（包括 Slack 集成）
- 支持仓库 Git 钩子和部署密钥- 支持仓库�  #�Js   %�c删除商品#### delGoods
* 说明：删除商品
* Method：POST
* url：/pp/v1/Admin/Go  8    ��∟content|string|内容
|∟∟∟atime|int|时间
|∟∟chat|arr|---
|∟∟/|obj|---
|∟∟∟id|int|私信id
|∟∟∟icon|string|发帖人头像
|∟∟∟nickname|string|昵称
|∟∟∟content|string|内容
|∟∟∟read|int|已读状态，0已读，1未读
|∟∟∟atime|int|时间

* 返回示例

~~~
{	
    "brief": "1条通知；88条私信",	
    "data": [		
        {			
            "notice": [				
                {					
                    "id": "3",					
                    "content": "我是马云",					
                    "atime": "157968662"
                
				}
            
			],			
            "chat": [				
                {					
                    "id": "3",					
                    "icon": "/uploads/5/icon/aar.jpg",					
                    "nickname": "Jack ma",					
                    "content": "我是马云",					
                    "read": "0",					
                    "atime": "157968662"
                
				}
            
			]
        
		}
    
	]

}
~~~cY��v0.1                                                                               ��) C�_weekend#奖项及获奖比例设置#### editLottery
* 说明：奖项及获奖比例设置
* Method：POST
* url：/pp/v1/Admin/Lottery/editLottery
�y�)   %�A�h�)   %�#奖项设置#### editLottery
* 说明：奖项设置
* Method：POST
* url：/pp/v1/Admin/Lottery/editLottery


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"id":{
				"value": 1,
				"type":"int",
				"desc":"奖项ID（新增时不传）"
			},
			"ratio":{
				"value": 2,
				"type":"int",
				"desc":"获奖比例（只返回分子，最大比例和为100%）"
			},
			"type":{
				"value": 1,
				"type":"int",
				"desc":"奖励类型 : 1:diamond, 2:gold, 3:coin"
			},
			"amount":{
				"value": 10,
				"type":"int",
				"desc":"数量"
			}
		}
    },
    "response":{
		"type":"obj",
		"valu                 }
                                }
                            }
                        }
                    },
                    "desc": "我是说明"
                }
            },
            "min": "52",
            "desc": "我是说明"
        }
    },
    "response": {
        "status": {
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ],
            "required": true,
            "type": "arr",
            "desc": "状态码"
        },
        "products": {
            "required": true,
            "type": "arr",
            "desc": "状态码",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    }
}
-->cY�dy                                                 			"desc":"获奖比例（只返回分子，最大比例和为100%）"
				},
				"type":{
					"value": 1,
					"type":"int",
					"desc":"奖励类型 : 1:diamond, 2:gold, 3:coin"
				},
				"amount":{
					"value": 10,
					"type":"int",
					"desc":"数量"
				},
				"atime":{
					"value": 1505822217,
					"type":"int",
					"desc":"添加时间"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|奖项ID
|∟ratio|int|获奖比例（只返回分子，最大比例和为100%）
|∟type|int|奖励类型:1:diamond,2:gold,3:coin
|∟amount|int|数量
|∟atime|int|添加时间

* 返回示例

~~~
[	
    {		
        "id": 1,		
        "ratio": 2,		
        "type": 1,		
        "amount": 10,		
        "atime": 1505822217
    
	}

]
~~~Y���    �  �$$                                                                                                                                     �^t   3�}添加/修改商品#### editGoods
* 说明：添加/修改商品
* Method：POST
* url：/pp/v1/Admin/Goods/editGoods


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"id": {
				"value":1,
				"required": true,
				"type":"int",
				"desc":"商品ID(添加时忽略)"
			},
			"name": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"商品名"
			},
			"category": {
				"value": 1,
				"type":"int",
				"desc":"商品分类ID"
			},
			"type": {
				"value": 1,
				"type":"int",
				"desc":"商品类型：1为付费购买，2为系统内部货币购买"
			},
			"fee_price": {
				"value": 100,
				"type":"int",
				"desc":"商品付费价格(单位为分)"
			},
			"active": {
				"value": 1  �             "value": {
					"type":"int",
					"desc":" 用户ID ",
					"value":[
						729
					]
				}
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "value": 1,
                "type": "int",
                "desc": "状态码：0 成功， 1 失败"
            },
            "errstr": {
                "value": " ",
                "type": "string",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|friend_uid|arr|是|用户ID列表
|∟/|int|是|用户ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "friend_uid": [729]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y݈�   �数名|类型|必填|说明|
|:--------|:---|---|---|
|[]|arr|是|格式为arr
|/|obj|是|****
|name|int|否|设备类型术语ID
|list|arr|否|---
|∟/|string|否|****

* 参数示例

~~~
[	
    {		
        "name": "1005",		
        "list": {			
            "type": "obj",			
            "value": {				
                "device_name": {					
                    "type": "int",					
                    "value": "1005",					
                    "desc": "设备名术语ID"
                
				},				
                "port": {					
                    "type": "int",					
                    "value": "1005",					
                    "desc": "设备端口标识"
                
				},				
                "status": {					
                    "type": "int",					
                    "value": "1005",					
                    "desc": "设备状态"
                
				},				
                "order": {					
                    "type": "arr",					
                    "desc": "状态： 指令",					
                     ?  ?d  dlue":{
			"token": {
				"valu�B� =�+�4��1� =�	weekend0添加 / 修改分享帖#### editShare
* 说明：添加 / 修改分享帖
* Method：POST
* url：/carboss/index.php/Client/Posting/editShare


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101du43hu9gube39gh3",
				"required": true,
				"type": "string",
				"desc": "token"
			},
			"posting_id": {
				"value": 12,
				"type": "int",
				"desc": "帖子ID(新增帖子时不传)"
			},
			"car_brand": {
				"value": 1,
				"type": "int",
				"desc": "汽车品牌ID"
			},
			"car_model": {
				"value": 1,
				"type": "int",
				"desc": "汽车型号系列ID"
			},
			"car_emissions": {
				"value": 1,
				"type": "int",
				"desc": "排量ID"
			},
			"car_year": {
				"value": 1,
				"type": "int",
				"desc": "年份ID"
			},
			"title": {
				"value": "JEEP牧马人换发动机有哪些要注意的？",
				"type": "string",
				"desc": "问题"
			},
			"desc": {
				"value": "比  �  �,
                            "desc": "封面图片地址"
                        },
				
						 "file_url": {
                            "type": "string",
                            "value": "www.ss.com/afe.txt ",
                            "desc": "文件地址"
                        },
						 "is_top": {
                            "type": "int",
                            "value": "1",
                            "desc": "是否置顶：0否；1是"
                        },
                        "atime": {
                            "type": "int",
                            "value": "157541563",
                            "desc": "添加时间"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|页码
|page_limit|int|是|需要的页数

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "    ods/delGoods


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"id": {
				"value":1,
				"type":"int",
				"required": true,
				"desc":"商品ID"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":0,
				"type":"int",
				"desc":"状态码：0：成功, 1：失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|商品ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "id": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1：失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 0,	
    "errstr": " "

}
~~~Yݒ�                             : "token"
			},
			"id":{
				"type": "int",
				"value": 11,
				"required": true,
				"desc": "分销级别对应 ID"
			},
			"ratio":{
				"type": "float",
				"value": "0.10",
				"required": true,
				"desc": "奖励比例"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status":{
				"type": "int",
				"value": 1,
				"desc": "状态码：0 为成功，1为失败"
			},
			"errstr":{
				"type": "string",
				"value": " ",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|分销级别对应ID
|ratio|float|是|奖励比例

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "id": 11,	
    "ratio": "0.10"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0为成功，1为失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~YݕZ   � ��                               �A�   �]转账#### transfer
* 说明：转账
* Method：POST
* url：/pp/v1/Game/Order/transfer

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"12":{
				"type":"obj",
				"required": true,
				"desc":"(caseid由传递参数一方设置)",
				"value":{
					"exchange_type": {
						"value": 1,
						"type":"int",
						"required": true,
						"desc":"操作类型：1、转账；2、支出；3、奖金"
					},
					"from_user":{
						"value":"1",
						"type":"int",
						"desc":"来源用户ID"
					},
					"to_user":{
						"value":"1",
						"type":"int",
						"required": true,
						"desc":"目标用户ID"
					},
					"src":{
						"value":"1",
						"type":"int",
						"required": true,
						"desc":"操作来源：1、游戏转账；2、加入游戏扣费；3、竞价，4、系统奖励"
					},
					"type":{
						"value":"1",
	�� �Uweekend转账#### transfer
* 说明：转账
* Method：POST
* url：/pp/v1/Game/Order/t  O   m m�                                                                                                                                                                                                                                                                                                                                                                 �u   ?�i添加/修改商品分类#### editCategory
* 说明：添加/修改商品分类
* Method：POST
* url：/pp/v1/Admin/Goods/editCategory


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"id":{
				"value":1,
				"type":"int",
				"required": true,
				"desc":"分类ID（添加时忽略）"
			},
			"name":{
				"value":"112",
				"type":"string",
				"desc":"分类名称"
			},
			"order":{
				"v  [�Ov   %�m删除分类#### delCategory
* 说明：删除分类
* Method：POST
* url：/pp/v1/Admin     ` `                                                                                                                                                                                                                                                                                                          �=Z 7�'weekend	�#Z 7�swe�Z   7�_	获取APP支付参数#### getAppParam
* 说明：获取APP支付参数
* Method：POST
* url：/pp/v1/Client/Order/getAppParam

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"登录凭证"
			},
			"openid": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"用户微信ID"
			},
			"fee": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"金额(分为单位)"
			},
			"attach": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
      传空）"
			},
			"displayname":{
				"value":"M7sF3H71DS1",
				"type":"string",
				"required": true,
				"desc":"dispalyname 字符（无则传空）"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|invitecode|string|是|邀请码（无则传空）
|displayname|string|是|dispalyname字符（无则传空）

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "invitecode": "dh83yt973y",	
    "displayname": "M7sF3H71DS1"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY��               "desc": "创建者"
        },
		"num": {
            "value": "10",
            "type": "int",
            "desc": "成员数量"
        },
		"limit": {
            "value": "20",
            "type": "string",
            "desc": "成员上限"
        },
		"invitecode": {
            "value": "wk940729",
            "type": "string",
            "desc": "邀请码"
        }
    }]
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|token|string|是|状态码

* 参数示例

~~~
{	
    "token": "101du43hu9gube39gh3"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|id|int|否|工会ID
|name|string|否|工会名
|user|string|否|创建者
|num|int|否|成员数量
|limit|string|否|成员上限
|invitecode|string|否|邀请码

* 返回示例

~~~
[	
    {		
        "id": "1",		
        "name": "三千师姐",		
        "user": "师弟",		
        "num": "10",		
        "limit": "20",		
        "invitecode": "wk940729"
    
	}

]
~~~cY��(  @               "port":{
						"type":"int",
						"value":"1",
						"desc":"pps 接口"
					},
                    "name": {
						"type":"int",
						"value":"1",
						"desc":"设备名称术语ID"
					},
                    "device_id":{
						"type":"int",
						"value":"11",
						"desc":"设备ID"
					},
                    "spec":{
						"type":"string",
						"value":"***",
						"desc":"规格"
					},
                    "tag":{
						"type":"int",
						"value":"22",
						"desc":"设备类型 ID； 如：照明，..."
					}
                }
            ]
        }}
		
    },
    "response": {
	"value":{
	"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0 成功， 1 失败"
        },
		"id": {
            "value":1,
            "type":"int",
            "desc":"房间类型ID"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }},
    "type":"obj"
		
	}
}
-->

* 参数



|    参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|结果以obj返回
|token|string|否|token
|name|int|否|房间类型名称术语ID
|data|arr|否|---
|/|arr|否|****
|∟/|obj|否|****
|∟∟∟port|int|否|pps接口
|∟∟∟∟name|int|否|设备名称术语ID
|∟∟∟∟∟device_id|int|否|设备ID
|∟∟∟∟∟∟spec|string|否|规格
|∟∟∟∟∟∟∟tag|int|否|设备类型ID；如：照明，...

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "name": 10002,	
    "data": [		
        {			
            "port": "1",			
            "name": "1",			
            "device_id": "11",			
            "spec": "***",			
            "tag": "22"
        
		}
    
	]

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|结果以obj返回
|status|int|否|状态码：0成功，1失败
|id|int|否|房间类型ID
|errstr|string|否|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "id": 1,	
    "errstr": " "

}
~~~cYˉ   e"精华帖：1、是，2、否",
				"value": 1
			},
    		"top": {
				"type": "int",
				"desc": "置顶帖：1、是，2、否",
				"value": 1
			},
			"hot": {
				"type": "int",
				"desc": "热门：1、是，2、否",
				"value": 1
			},
    		"img": {
					"type":"arr",
					"desc":"图片列表",
					"value":{
						"type":"obj",
						"desc":"图片信息",
						"value":{
							"url": {
								"type":"string",
								"desc":"图片链接",
								"value": "http://zm.fairy.com/fairy/zm.jpg"
							},
							"rem": {
								"type":"string",
								"desc":"图片说明",
								"value": "哈哈哈哈哈哈嗝"
							}
						}
					}
				},
    		"mtime": {
				"type": "int",
				"desc": "修改时间",
				"value": 1506657454
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|posting_id|int|否|帖子ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "posting_id": 2

}
~~~
* 返    			"required": true,
				"desc":"登录凭证"
			},
			"id": {
				"value": 12,
				"type":"int",
				"required": true,
				"desc":"ID"
			},
			"time": {
				"value": 7,
				"type":"int",
				"required": true,
				"desc":"时长（天为单位）"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|id|int|是|ID
|time|int|是|时长（天为单位）

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "id": 12,	
    "time": 7

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~YݔS    T  T                                                                 ��+ 	��+ 	%�oadmin审核简述####流程描述

	-&gt;用户操作完成
	-&gt;申请（
			1、记录该数据位置；
			2、若为数据变更申请，记录变更的数据（删除操作也属于数据变更）；
			）
	-&gt;管理员审核（
		1. 通过：修改申请状态并执行相应的数据变更
		2. 拒绝：修改申请状态
		）

	
#### 涉及页面
- 用户端：
列表
- 管理端：
列表
详情（公用用户端页面，根据API返回字段区分）


    
#### 审核数据表 check

|字段|类型|空|注释|
|:----    |:-------    |:--- |-- -|------      |
|id	 		 |int(10)     |是		 |	         主键 |
|uid	 		 |int(10)     |是		 |	上传者id           |
|o_uid	 		 |int(10)     |否		 |	审核者id           |
|desc		 |varchar(20) |是	    |	 申请描述	|
|type	 |varchar(50) |是      |	申请类型 &lt;/br&gt; 1文档 2书籍 3视频 4论坛修改 ... |
|tid	 |varchar(20) |是	    |	   �  >  >>                                                  �@�. 	%�Gadmin默认页面|   |   |   |   |   |   |   |   |   |   |   |   |   |   |   |
| ------------ | ------------ | ------------ | ------------ | ------------ | ------------ | ------------ | ------------ | ------------ | ------------ | ------------ | ------------ | ------------ | ------------ | ------------ |
|   |   |   |   |   |   |   |   |   |   |   |   |   |   |   |
|   |   |   |   |   |   |   |   |   |   |   |   |   |   |   |
cY���  � %�iweekend	钱包明细#### xx
* 说明：钱�6�/   %�;钱包明细#### showWalletOrder
* 说明：钱包明细
* Method：POST
* url：/pp/v1/Client/Porfile/showWalletOrder

<!--
{
    "params": {
		"type":"obj",
		"value":{
		"token": {
            "value": "101sdhfeh8rthga3f1eed21",
            "type":"string",
			"required": true,
            "desc":"token"
        }
		}
    },
    "response":{
		"type":"arr",
		"value":[{
			"coin": {
				"value": "1000",
				"type": "int",  �  �"desc": "动态对应的用户头像（关注）"
                },
                "post_id": {
                    "type": "int",
                    "value": "1",
                    "desc": "帖子id"
                },
				          "title": {
                    "type": "string",
                    "value": "乐视汽车，蔚来，到底是不是PPT产品",
                    "desc": "帖子标题"
                },
                "content": {
                    "type": "string",
                    "value": "好车，但是不买",
                    "desc": "内容"
                },
				    "img_url": {
                            "type": "string",
                            "value": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",
                            "desc": "帖子描述图片"
                        },
                "best": {
                    "type": "int",
                    "value": "0",
                    "desc": "精华帖：0是；1否"
                },    @  @                                                      �<�X   �S签到#### signIn
* 说明：签到
* Method：POST
* url：/pp/v1/Client/Profile/signIn


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：成功, 1：失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1：失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY݊g    "int",
				"desc": "帖子ID",
				"value": 12
			},
			"status": {
				"type": "int",
				"desc": "操作：1、点赞，2、取消",
				"value": 1
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|type|int|否|帖子类型：1、问答帖，2、分享帖
|posting_id|int|否|帖子ID
|status|int|否|操作：1、点赞，2、取消

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": 1,	
    "posting_id": 12,	
    "status": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y�I�    (  (                           �X{�U{   1�m货币兑换比例#### showExchangeRatio
* 说明：货币兑换比例
* Method：POST
* url：/pp/v1/Admin/CoreField/showExchangeRatio
<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"required": true,
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"id":{
				"type": "int",
				"value": 11,
				"desc": "ID"
			},
			"num":{
				"type": "int",
				"value": 100,
				"desc": "1单位的货币兑换多少低一级货币"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|ID
|num|int|1单位的货币兑换多少低一级货币

* 返回示例

~~~
{	
    "id": 11,	
    "num": 100

}
~~~Yݖ?  Qu43hu9gube39gh3",
				"required": true,
				"type": "string",
				"desc": "token"
			},
			"posting_id": {
				"value": 12,
				"type": "int",
				"desc": "帖子ID(新增帖子时不传)"
			},
			"car_brand": {
				"value": 1,
				"type": "int",
				"desc": "汽车品牌ID"
			},
			"car_model": {
				"value": 1,
				"type": "int",
				"desc": "汽车型号系列ID"
			},
			"car_emissions": {
				"value": 1,
				"type": "int",
				"desc": "排量ID"
			},
			"car_year": {
				"value": 1,
				"type": "int",
				"desc": "年份ID"
			},
			"title": {
				"value": "JEEP牧马人换发动机有哪些要注意的？",
				"type": "string",
				"desc": "问题"
			},
			"desc": {
				"value": "比如拆卸发动机",
				"type": "string",
				"desc": "问题描述"
			},
			"gold": {
				"value": 100,
				"type": "int",
				"desc": "赏金"
			},
			"invite": {
				"value": {
					"type":"int",
					"value":12
				},
				"type": "arr",
				"desc": "邀请回答用户ID列表"
			},
			"img": {
				"type": "a    3  � 3                                       �Ok   =�G �'提问模块上传图片#### imgUpload
* 说明:问答模块上传图片
* Method：PO  ��Tj   +�O) �*排行榜列表#### RankList
* 说明：排行榜
* url：/carboss/index.php/Client/Rank/RankList

<!--
{
    "response": {
        "type": "arr",
        "value": [
            {               
                "name": {
                    "type": "string",
                    "value": "富豪榜",
                    "desc": "排行类型名"
                },
                "list": {
                    "type": "arr",
                    "value": [
					{
					"id": {
						"type": "int",
						"value": "43",
						"desc": "用户uid"
						 },
					"icon":{"type": "string",
						"value": "/uploads/1/icon/dd.jpg",
						"desc": "头像"
						 },
						 "name": {
						 "type": "string",
						 "value": "麻花藤",
						 "desc": "姓名"
						 },
						 "slogan": {
						 "type": "string",
						 "value": "我不知道  �  M                                            "value": {
                                                "wwww": {
                                                    "type": "arr",
                                                    "value": [
                                                        {
                                                            "rr": 1,
                                                            "tty": 2
                                                        }
                                                    ]
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "desc": "我是说明"
                }
            },
            "min": "52",
            "desc": "我是说明"
        }
    },
    "response": {
        "  K": "obj",
            "max": "15.3",
            "value": {
                "tt": {
                    "type": "obj",
                    "value": {
                        "ttt": {
                            "type": "arr",
                            "value": [
                                {
                                    "aaaa": 1,
                                    "bbbb": 2
                                }
                            ]
                        }
                    },
                    "desc": "我是说明"
                },
                "cc": {
                    "type": "obj",
                    "value": {
                        "name1": {
                            "type": "obj",
                            "value": {
                                "ww": {
                                    "type": "obj",
                                    "value": {
                                        "www": {
                                            "type": "obj",
  Ostatus": {
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ],
            "required": true,
            "type": "arr",
            "desc": "状态码"
        },
        "products": {
            "required": true,
            "type": "arr",
            "desc": "状态码",
            "value": [
                {
                    "name": "aa",
                    "num": 55
                }
            ]
        },
        "errstr": {
            "value": 44,
            "required": true,
            "type": "int",
            "desc": "状态码"
        }
    }
}-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|~~~a~~~|~~~int~~~|~~~否~~~|value:"15.3"不是int类型
|t|obj|否|我是说明
|∟tt|obj|否|我是说明
|∟∟ttt|arr|否|---
|∟∟∟∟||否|缺失type<br>请填写value<br>
|∟∟∟∟||否|缺失type<br>请填写value<br>
|∟cc|obj|否|我是说明
|∟∟name1|obj|否|   e e                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           �� %�sadmin特别说明* 仅使用端口：8888
* 仅验证端口，不进行其他验证
* 对客户端 IP 的限制放在防火墙处理cY��n    ---
|∟∟∟ww|obj|否|---
|∟∟∟∟www|obj|否|---
|∟∟∟∟∟wwww|arr|否|---
|∟∟∟∟∟∟∟||否|缺失type<br>请填写value<br>
|∟∟∟∟∟∟∟||否|缺失type<br>请填写value<br>

* 参数示例

~~~
{	
    "a": "15.3",	
    "t": {		
        "tt": {			
            "ttt": [				
			]
        
		},		
        "cc": {			
            "name1": {				
                "ww": {					
                    "www": {						
                        "wwww": [							
						]
                    
					}
                
				}
            
			}
        
		}
    
	}

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|status|arr|是|状态码
|∟s|s|否|缺失type<br>请填写value<br>
|∟||否|缺失type<br>请填写value<br>
|products|arr|是|状态码
|∟p|p|否|缺失type<br>请填写value<br>
|∟||否|缺失type<br>请填写value<br>
|errstr|int|是|状态码

* 返回示例

~~~
{	
    "errstr": 44,	
    "status": [		
	],	
    "products": [		
	]

}
~~~cY���12343    [ " [                                                                    �A�g �8�g 1�'adminG变更教员申请#### changeTeacher
* 说明：学员变更教员申请
* Method：POST
* url：/stockSchool/index.php/Client/ApplyCheck/changeTeacher

<!--
{
    "par  @�o�f 1�adminG申请学员记录#### applyStudyLists
* 说明：用户申请学员记录
* Method：POST
* url：/stockSchool/index.php/Client/ApplyCheck/applyStudyLists

<!--
{
    "params": {
        "type": "obj",
        "value": {
           ?�R�e %�gadminG申请学员#### applyStudy
* 说明：用户申请学员
* Method：POST
* url：/stockSchool/index.php/Client/ApplyCheck/applyStudy

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required":true,
				"desc":"登录凭证"
			},
			"name":{
				"value":"令狐冲",
				"type":"string",
				"required":true,
				"desc":"开户姓名"
			},
			"img_id":{
				"value"  >  lrr",
				"desc": "图片列表（只提交新的图片）",
				"value": {
					"type":"obj",
					"value":{
						"path":{
							"type":"string",
							"desc":"图片路径",
							"value":"/fairy/zm.jpg"
						},
						"rem":{
							"type":"string",
							"desc":"图片说明",
							"value":"哈哈哈哈嗝"
						}
					}
				}
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value": "1",
				"type": "int",
				"desc": "状态码：0： 成功，1：失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			},
			"id": {
				"value": "12",
				"type": "int",
				"desc": "帖子ID(修改帖子时不返回)"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|posting_id|int|否|帖子ID(新增帖子时不传)
|car_brand|int|否|汽车品牌ID
|car_model|int|否|汽车型号系列ID
|car_emissions|int|否|排量ID
|car_year|int|否|年份  b
				"desc": "ID（新增时忽略）",
				"value": 2
			},
			"user": {
				"type": "string",
				"desc": "账号",
				"value": "zm"
			},
			"pass": {
				"type": "string",
				"desc": "密码（md5 加密后的字符串）",
				"value": "3hf8j03g3j80qgdfg903ghaas11"
			},
			"realname": {
				"type": "string",
				"desc": "用户名",
				"value": "zm"
			},
			"phone": {
				"type": "int",
				"desc": "手机号码",
				"value": 15761235435
			},
			"group_id": {
				"type": "int",
				"desc": "角色组ID",
				"value": 1
			},
			"status": {
				"type": "int",
				"desc": "账号状态：1、正常，2、禁用",
				"value": 1
			},
			"rem": {
				"type": "string",
				"desc": "备注",
				"value": "炒鸡管理员"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"uid": {
				"type": "int",
				"desc": "ID（新增时返回）",
				"value": 2
			},
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "sts % %k                  �V�3 �{admin)搜索#### search


* 说明：搜索
* url：/carboss/index.php/Client/Postings/sear�D�3 �W�5�3 �9admin)搜索��3 �}admin)搜索#### search
* 说明：搜索

* url：/carboss/index.php/Client/Postings/searc�*�3 �#admin)搜索#### search
* 说明：搜索

* url：/carboss/index.php/Client/Postings/search

<!--
{
    "params": {
        "type": "obj",
        "value": {
		  "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                  �t�6 =�weekend0添加 / 修改问答帖#### editQuestion
* 说明：添加 / 修改问答帖
* Method：POST
* url：/carboss/index.php/Client/Posting/editQuestion


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101d  I   � �1admin)搜索�?�3 �Madmin)搜索#### search
* 说明：搜索

* url：/carboss/index.php/Client/Postings/sea  �  )		"desc": "twitter账号"
			},
			"invitecode": {
				"value": "wk940729",
				"type": "string",
				"desc": "邀请码"
			},
			"points": {
				"value": 1000,
				"type": "int",
				"desc": "积分值"
			},
			"points_grade": {
				"value": 10,
				"type": "int",
				"desc": "积分等级"
			},
			"checkin_count": {
				"value": 12,
				"type": "int",
				"desc": "连续签到次数"
			},
			"coin": {
				"value": 1000,
				"type": "int",
				"desc": "代币"
			},
			"gold": {
				"value": 1000,
				"type": "int",
				"desc": "金币"
			},
			"diamond": {
				"value": 100,
				"type": "int",
				"desc": "钻石"
			},
			"contribution":{
				"value": 100,
				"type": "int",
				"desc": "贡献值"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证

* 参数示例

~~~
{	
    "token": "101du43hu9gube39gh3"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|nickna   % %                           �E�% 7�7week�8�% 7�week�#�% 7�sweekend"标签榜排行信息#### tag
* 说明：标签榜排行信息
* Method：POST
* url：/pp/v1/Client/Ranking/tag

<!--
{
    "params": {
		"token": {
            "value": "101sdhfeh8rthga3f1eed21",
            "type":"string",
			"required": true,
            "desc":"token�x�%   7�-"标签榜排行信息#### tag
* 说明：标签榜排行信息
* Method：POST
* url：/pp/v1/Client/Ranking/tag

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"tag_id":{
				"type":"arr",
				"value":{
					"type":"int",
					"value":[
						123
					]
				},
				"desc":"标�K�%   7�S"标签榜排行信息#### tag
* 说明：标签榜排行信息
* Method：POST
* url：/pp/v1/Client/Ranking/tag

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101s   �   t t g                                                                                           �t�Q I�weekend0删除帖子评论（回答）#### delReview
* 说明：删除帖子评论（回答）
* Method：POST
* url：/carboss/index.php/Client/Posting/delReview

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"v  ���P ��� �P 3�1weekend0评论/回答帖子#### writeReview
* 说明：评论/回答帖子
* url：/carboss/index.php/Client/Posting/writeReview


<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1、问答帖，2、分享帖",
				"value": 1
			},
			"posting_id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 12
			},
			"reply_id": {
				"type": "int",
				"desc": "回复评论ID：评论（回答）帖子时为0",
				"value": 1
			},
			"content": {
				"type": "   4   B B                                       ��B�& %�E	weekend商品列表#### showGoods
* 说明：商品列表
* Method：POST
* url：/pp/v1/Admin/Goods/showGoods


<!--
{
    "params": {
		"token": {
            "value": "101sdhfeh8rthga3f1eed21",
            "type":"string",
            "desc":"token"
        },
		"id": {
            "value":1,
            "type":"int",
            "desc":"商品ID(添加时忽略)"
        }
    },
    "response": [{
		"category_id": {
			"value":1,
			"type":"int",
			"desc":"商品分类ID"
		},
		"category_name": {
			"value":"超值",
			"type":"string",
			"desc":"商品分类名"
		},
		"goods_list":{
			"type":"arr",
			"desc":"商品列表",
			"value":[{
				"id": {
					"type":"int",
					"desc":"商品ID",
					"value":"1"
				},
				"name":{
					"type":"str�.�&   %�-	商品列表#### showGoods
* 说明：商品列表
* Method：POST
* url：/pp/v1/Admin/Goods/showGoods


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token":  '    
        "value": {
            "type": "obj",
            "value": {
                "title": {
                    "type": "string",
                    "value": "乐视汽车，蔚来，到底是不是PPT产品",
                    "desc": "帖子标题"
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|/|obj|是|---
|cc|arr|否|帖子范围：0全部板块；1汽修问答；2汽修分享
|∟/|int|否|son
|dd|obj|否|帖子范围：0全部板块；1汽修问答；2汽修分享
|∟ddd|obj|否|---
|∟∟dddd|int|否|son
|ee|int|否|son1

* 参数示例

~~~
{	
    "dd": {		
        "ddd": {			
            "dddd": "5624"
        
		}
    
	},	
    "cc": [15,66],	
    "ee": 5624

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|/|obj|---
|title|string|帖子标题

* 返回示例

~~~
{	
    "title": "乐视汽车，蔚来，到底是不是PPT产品"

}
~~~cY݊X    �  �                                                                                                                                                                                                                      ��, 1�mweekend错误码对照表|值|命名|说明|
|:--------|:---|---|
|0|E_OK|成功
|1|E_SYSTEM|系统出错
|2|E_RUN|执行失败
|3|E_CONF|配置出错
|4|E_MYSQL|SQL出错
|5|E_DATA|参数错误
|6|E_USER|验证用户信息失败
|7|E_PASS|验证用户密码(登录失败)
|8|E_TOKEN|Token不存在(登录失败)
|9|E_SESS|session有错(登录失败)
|10|E_SMSWECHAT|发送微信出错
|11|E_SMSPHONE|发送短信出错
|12|E_EXIST|某结果已存在
|13|E_NOEXIST|某结果不存在
|14|E_AC|权限不足
|15|E_STATUS|所处状态不符
|16|E_UPLOAD|上传文件失败
|17|E_SMSCODE|短信验证码错误
|18|E_SMSCODE2|短信验证码超时或丢失
|19|E_OPENID|微信openid错误
|20|E_NOCHANGE|没有数据变动
|21|E_DISABLE|账号被禁用
|22|E_INVITE|邀请码错误
cY��5    5gh857gh57g"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟category_id|int|商品分类ID
|∟category_name|string|商品分类名
|∟list|arr|商品列表
|∟∟/|obj|---
|∟∟∟id|int|商品ID
|∟∟∟name|string|商品名
|∟∟∟fee_price|int|商品价格（分为单位）
|∟∟∟diamond|int|商品所含钻石数量
|∟∟∟gold|int|商品所含金币数量
|∟∟∟coin|int|商品所含代币数量
|∟∟∟img_url|string|商品图片

* 返回示例

~~~
[	
    {		
        "list": [			
            {				
                "id": "1005",				
                "name": "10钻石，100金币，10000代币",				
                "fee_price": "1000",				
                "diamond": "10",				
                "gold": "100",				
                "coin": "10000",				
                "img_url": "http://www.fairy.com/icon/zm.jpg"
            
			}
        
		],		
        "category_id": "1",		
        "category_name": "超值"
    
	}

]
~~~cYݍ    alue":1,
				"type":"int",
				"desc":"序号"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":0,
				"type":"int",
				"desc":"状态码：0：成功, 1：失败"
			},
			"id":{
				"value":1,
				"type":"int",
				"desc":"分类ID（添加时返回）"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|分类ID（添加时忽略）
|name|string|否|分类名称
|order|int|否|序号

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "id": 1,	
    "name": "112",	
    "order": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1：失败
|id|int|分类ID（添加时返回）
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 0,	
    "id": 1,	
    "errstr": " "

}
~~~Yݓ'    ��置顶，6、取消置顶",
				"value": 2
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|question_id|arr|是|问答帖ID列表
|∟/|int|是|帖子ID
|share_id|arr|是|分享帖ID列表
|∟/|int|是|帖子ID
|status|int|是|状态:1、删除，2、恢复，3、精华，4、取消精华，5、置顶，6、取消置顶

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "status": 2,	
    "question_id": [29],	
    "share_id": [29]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y�a   � ��                                      �S�+ 	5�]adminexample:视频审核example:视频审核
    
-  视频数据表

|字段|类型|空|注释|
|:----    |:-------    |:--- |-- -|------      |
|id	 		 |int(10)     |否		 |	         主键 |
|uid	 		 |int(10)     |否		 |	上传者id           |
|name		 |varchar(20) |否	   |	 视频标题	|
|desc		 |varchar�	�+ 	5�Iadminexample:视频审核example:视频审核

    
-  视频数据表

|字段|类型|空|注释|
|:----    |:-------    |:--- |-- -|------      |
|id	 		 |int(10)     |否		 |	         主键 |
|uid	 		 |int(10)     |吒�+ 	%�uadmin审核箑y�+ 	%�9admin审核简述## 审核简述
####流程描述

	-&gt;用户操作完成
	-&gt;申请（
			1、记录该数据位置；
			2、若为数据变更申请，记录变更的数据（删除属于数据变更）；
			）
	-&gt;管理员审核
	-  =�P�*   %�o#删除奖项#### delLottery
* 说明：删除奖项
* Method：POST
* url：/pp/v1/Admin/     � �                       �S�# 1�Yweekend"总榜排行信息#### all
* 说明：获取总榜相应排行信息
* Method：POST
* url：/pp/v1/Client/Ranking/all

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"type1":{
				"value":"month",
				"type":"string",
				"desc":"日期分类：total:长期, week:本周, month:本月, refer:推荐"
			},
			"type2":{
				"value":"points",
				"type":"string",
				"desc":"其他分类：points:分数榜,in_diamond:收益榜（钻）,out_diamond:贡献榜（钻）"
			}
		}
    },
    "response":{
		"type":"arr",
		"value":[{
			"ranking":{
				"value":"1",
				"type":"int",
				"desc":"排名"
			},
			"uid":{
				"value":"8",
				"type":"int",
				"desc":"用户ID"
			},
			"nickname":{
				"value":"1881888818",�&�# 1�weekend"总榜排行信息#### all
* 说明：获取总榜相应排行信息
* Method：P  �    oreField/showPointsGrade

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"required": true,
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"id":{
					"type": "int",
					"value": 11,
					"desc": "ID"
				},
				"name":{
					"type": "int",
					"value": 1,
					"desc": "积分等级"
				},
				"num":{
					"type": "int",
					"value": 100,
					"desc": "最低积分值"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|ID
|∟name|int|积分等级
|∟num|int|最低积分值

* 返回示例

~~~
[	
    {		
        "id": 11,		
        "name": 1,		
        "num": 100
    
	}

]
~~~Yݖ   � ��     �h�  7�}weekend修改用户的信息#### editInfo
* 说明： 修改用户的信息
* Method：POST
* url：/pp/v1/Client/Profile/editInfo


<!--
{
    "params": {
        "token": {
            "value": "101du43hu9gube39gh3",
            "required": true,
            "type": "string",
            "desc": "token"
        },
		"nickname": {
            "value": "1",
            "type": "int",
            "desc": "昵称"
        },
		"sex": {
            "value": "1",
            "type": "int",
            "desc": "性别（0=男，1=女）"
        },
		"birthday": {
            "value": "1994-07-29",
            "type": "string",
            "desc": "出生日期"
        },
		"ci�'�    7��"�  7�qweekend修改用户的信息#### editInfo
* 说明： 修改用户的信息
* Method：POST
* url：/pp/v1/Client/Profile/editInfo


<!--
{
    "params": {  ψZ�!   %�%转盘抽奖#### drawTurntable
* 说明：转盘抽奖
* Method：POST
* url：/pp/v1/Cli  �  �    "value": "safdfasfafefaew",
                "desc": "tok地方en"
            }
        }
    },
    "response": {
        "type": "arr",
        "value": {
            "name": {
                "type": "string",
                "value": "富豪榜",
                "desc": "排行类型名"
            },
            "list": {
                "type": "arr",
                "desc": "列表",
                "value": {
                    "type": "obj",
                    "value": {
                        "uid": {
                            "type": "int",
                            "value": "43",
                            "desc": "用户uid"
                        },
                        "icon": {
                            "type": "string",
                            "value": "/uploads/1/icon/dd.jpg",
                            "desc": "头像"
                        },
                        "nickname": {
                            "type": "string",
                            "value"    ring",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|uid|int|否|ID（新增时忽略）
|user|string|否|账号
|pass|string|否|密码（md5加密后的字符串）
|realname|string|否|用户名
|phone|int|否|手机号码
|group_id|int|否|角色组ID
|status|int|否|账号状态：1、正常，2、禁用
|rem|string|否|备注

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "uid": 2,	
    "user": "zm",	
    "pass": "3hf8j03g3j80qgdfg903ghaas11",	
    "realname": "zm",	
    "phone": 15761235435,	
    "group_id": 1,	
    "status": 1,	
    "rem": "炒鸡管理员"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|uid|int|ID（新增时返回）
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "uid": 2,	
    "status": 1,	
    "errstr": "例子"

}
~~~Y�U�    f1eed21",
				"type":"string",
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：正常, 8：token已失效"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			},
			"time":{
				"value":1512356438,
				"type":"int",
				"desc":"到期时间（时间戳）"
			},
			"uid": {
				"value":1,
				"type":"int",
				"desc":"用户ID"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：正常,8：token已失效
|errstr|string|错误提示
|time|int|到期时间（时间戳）
|uid|int|用户ID

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " ",	
    "time": 1512356438,	
    "uid": 1

}
~~~cY鯲     true,
				"desc": "获取相应数据的父层ID（如获取型号时的品牌ID）"
			}
		}
	},
	"response": {
		"type": "arr",
		"value": {
			"type": "obj",
			"desc": "选项列表",
			"value": {
				"id": {
					"type": "int",
					"value": "4",
					"desc": "选项id"
				},
				"name": {
					"type": "string",
					"value": "JEEP",
					"desc": "选项名称"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type|int|是|获取数据模块：1、品牌，2、型号，3、排量，4、年份
|id|int|是|获取相应数据的父层ID（如获取型号时的品牌ID）

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "type": 1,	
    "id": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|选项列表
|∟id|int|选项id
|∟name|string|选项名称

* 返回示例

~~~
[	
    {		
        "id": "4",		
        "name": "JEEP"
    
	}

]
~~~3Y�R    回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|帖子ID
|uid|int|用户ID
|nickname|string|昵称
|icon|string|头像
|title|string|标题
|desc|string|内容描述
|agree_n|int|点赞数量
|collect_n|int|收藏数量
|review_n|int|评论数量
|best|int|精华帖：1、是，2、否
|top|int|置顶帖：1、是，2、否
|hot|int|热门：1、是，2、否
|img|arr|图片列表
|∟/|obj|图片信息
|∟∟url|string|图片链接
|∟∟rem|string|图片说明
|mtime|int|修改时间

* 返回示例

~~~
{	
    "id": 2,	
    "uid": 2,	
    "nickname": "水货",	
    "icon": "",	
    "title": "丰田换发动机有哪些要注意的？",	
    "desc": "比如拆卸发动机",	
    "agree_n": 2,	
    "collect_n": 2,	
    "review_n": 2,	
    "best": 1,	
    "top": 1,	
    "hot": 1,	
    "mtime": 1506657454,	
    "img": [		
        {			
            "url": "http://zm.fairy.com/fairy/zm.jpg",			
            "rem": "哈哈哈哈哈哈嗝"
        
		}
    
	]

}
~~~Y�5   � �t|否|商品ID(添加时忽略)
|name|string|否|商品名
|category|int|否�'w   �w   %�标签列表#### tagList
* 说明：标签列表
* Method：POST
* url：/pp/v1/Admin/CoreField/tagList

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"required": true,
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"id":{
				"type": "int",
				"value": "11",
				"desc": "标签项 ID"
			},
			"name":{
				"type": "string",
				"value": "My Lord",
				"desc": "标签名"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int�vw   %�;标签列表#### tagList
* 说明：标签列表
* Method：POST
* url：/pp/v1/Admin/Cor  �    t  t D                                                        �)y =�yweekend三级分�x %�m�	x   1�W	显示好友上限#### showFriendLimit
* 说明：好友上限
* Method：POST
* url：/pp/v1/Admin/CoreField/showFriendLimit

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"required": true,
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"id":{
				"type": "int",
				"value": 11,
				"desc": "ID"
			},
			"num":{
				"type": "int",
				"value": 2,
				"desc": "上限数量"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|ID
|num|int|上限数量

* 返回示例

~~~
{	
    "id": 11,	
    "num": 2

}
~~~Yݓ�      "response": {
		"type":"obj",
		"value":{
			"id":{
				"type": "int",
				"value": 11,
				"desc": "标签项 ID（添加时返回，修改时无此字段）"
			},
			"status":{
				"type": "int",
				"value": 1,
				"desc": "状态码：0 为成功，1为失败"
			},
			"errstr":{
				"type": "string",
				"value": " ",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|否|标签项ID（传递此参数即为修改；不传则为添加）
|name|string|否|标签名

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "id": 11,	
    "name": "My Lord"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|标签项ID（添加时返回，修改时无此字段）
|status|int|状态码：0为成功，1为失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "id": 11,	
    "status": 1,	
    "errstr": " "

}
~~~Yݖ�                  "atime": {
                            "type": "string",
                            "desc": "记录时间",
                            "value": 1485411452
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|honor|string|等级
|exp|int|经验值
|data|arr|---
|∟/|obj|---
|∟∟desc|string|记录描述
|∟∟exp|int|经验值
|∟∟type|int|记录类型1收入；2支出
|∟∟atime|string|记录时间

* 返回示例

~~~
{	
    "honor": "少侠",	
    "exp": "126",	
    "data": [		
        {			
            "desc": "名字太帅了，奖励！！",			
            "exp": "50",			
            "type": "1",			
            "atime": "1485411452"
        
		}
    
	]

}
~~~cY�V6$ � �t                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      �y   =�E三级分销奖励比例#### showReward
* 说明：三级分销奖励比例
* Method：POST
* url：/pp/v1/Admin/CoreField/sh  (   P   =�s积分等级对应数值#### showPointsGrade
* 说明：�z  �z   =�9积分等级对应数值#### showPointsGrade
* 说明：积分等级对应数值
* Method：POST
* url：/pp/v1/Admin/C  _   � � �           �M} =�Aweekend修改三级分销奖励###�3} =�}   =�E修改三级分销奖励#### editReward
* 说明：修改三级分销奖励
* Method：POST
* url：/pp/v1/Admin/C�}   =�?修改三级分销奖励#### editReward
* 说明：修改三级分销奖励
* Method：POST
* url：/pp/v1/Admin/CoreField/editReward

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101as�|   3�w修改/添加标签#### editTag
* 说明：修改/添加标签
* Method：POST
* url：/pp/v1/Admin/CoreField/editTag

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type": "int",
				"value": 11,
				"desc": "标签项 ID（传递此参数即为修改；不传则为添加）"
			},
			"name":{
				"type": "string",
				"value": "My Lord",
				"desc": "标签名"
			}
		}
    },
    h    ID
|title|string|否|问题
|desc|string|否|问题描述
|gold|int|否|赏金
|invite|arr|否|邀请回答用户ID列表
|∟/|int|否|
|img|arr|否|图片列表（只提交新的图片）
|∟/|obj|否|---
|∟∟path|string|否|图片路径
|∟∟rem|string|否|图片说明

* 参数示例

~~~
{	
    "token": "101du43hu9gube39gh3",	
    "posting_id": 12,	
    "car_brand": 1,	
    "car_model": 1,	
    "car_emissions": 1,	
    "car_year": 1,	
    "title": "JEEP牧马人换发动机有哪些要注意的？",	
    "desc": "比如拆卸发动机",	
    "gold": 100,	
    "invite": [12],	
    "img": [		
        {			
            "path": "/fairy/zm.jpg",			
            "rem": "哈哈哈哈嗝"
        
		}
    
	]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功，1：失败
|errstr|string|错误提示
|id|int|帖子ID(修改帖子时不返回)

* 返回示例

~~~
{	
    "status": "1",	
    "errstr": " ",	
    "id": "12"

}
~~~Y�;�   � ��   �"~ c�Ewe�\}   =�o修改三级分销奖励#### editReward
* 说明：修改三级分销奖励
* Method：POST
* url：/pp/v1/Admin/CoreField/editReward

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status":{
				"type": "int",
				"value": 1,
				"desc": "状态码：0 为成功，1为失败"
			},
			"errstr":{
				"type": "string",
				"value": " ",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|str�2}   =�修改三级分销奖励#### editReward
* 说明：修改三级分销奖励
* Method：POST
* url：/pp/v1/Admin/CoreField/editReward

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"required": true,
				"desc"  9    ": true,
				"desc": "最低积分值"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"id":{
				"type": "int",
				"value": 11,
				"desc": "ID（添加时返回）"
			},
			"status":{
				"type": "int",
				"value": 1,
				"desc": "状态码：0 为成功，1为失败"
			},
			"errstr":{
				"type": "string",
				"value": " ",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|相应积分等级对应ID（传递此参数即为修改；不传则为添加）
|num|int|是|最低积分值

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "id": 11,	
    "num": 100

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|ID（添加时返回）
|status|int|状态码：0为成功，1为失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "id": 11,	
    "status": 1,	
    "errstr": " "

}
~~~Yݖ   ^ �^ �": "代币"
			},
			"gold": {
				"value": "1000",
				"type": "int",
				"desc": "金币"
			},
			"diamond": {
				"value": "100",
				"type": "int",
				"desc": "钻石"
			},
			"use_type": {
				"value": "1000",
				"ty��2   '�k	&登录/注册#### loginReg
* 说明：登录/注册；未注册时注册同时登陆；�  ���>�1 	%��=weekend默认页面#### roomDeviceInfo
* 说明：房间电器设备信息
* url：

<!--
{
    "params": {
	  "type": "obj",
        ��{�0 	%�=admin默认页面#### delFriend
* 说明：删除关系用户
* Method：POST
* url：/pp/v1/Client/Profile/delFriend

<!--
{
    "params": {
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "登录凭证"
            },
            "friend_uid": {
                "type": "arr",
                "desc": "用户ID列表",
                "value": [
                  ["saf"]]
                
    *   � �                                                                                                                                                                                                                                                                                                                                                                                 �z~   c�修改/添加积�Y~   c�C修改/添加积分等级及对应积分值#### editPointsGrade
* 说明：修改/添加积分等级及对应积分值
* Method：POST
* url：/pp/v1/Admin/CoreField/editPointsGrade

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type": "int",
				"value": 11,
				"required": true,
				"desc": "相应积分等级对应 ID（传递此参数即为修改；不传则为添加）"
			},
			"num":{
				"type": "int",
				"value": 100,
				"required  n   � �=�{�                                                                                                                                                                                                                                                                                                                                                                                                                                       ^ __e8f0f567ea576a0f7a11585b2e3e7c1021962130351eab3ea3f11072936bc7adaded4178a376382550Y�M^ __9c9236b5816669fa234f8b0a323b95467950766515070d6e53f09081bf3b04d7f5d16807f823629285Yݳ�` aa2350f3003c8735a9bf6dd044a9dc5eaf18811371393a80738fa254d90662de0a3de7e671562086012561Y�V%^ __240f0afeb1552624b9cc9653266ba90f166461180878cb12fad56bf4388b808d141af33f9514578495Y��_ a_920baa75b4dd1091d326583341b8eb801130950738d109e6448471c4284ef2676b8a98d3c8104172706Y��h` aad463793acd3e790374cc6949278708261526764975a034c98f15e2feda2e01f9324a5d13191359858429Y���    ing",
				"value":"101asdh8ferhf75gh857gh57g",
				"desc":"token"
			},
			"goods_id":{
				"type":"int",
				"value":1005,
				"desc":"商品ID"
			},
			"num":{
				"type":"int",
				"value":10,
				"desc":"数量"
			}
	},
	"response":{
			"status":{
				"type":"int",
				"value":10001,
				"desc":"状态码：0成功1系统繁忙10001产品已下架10002金币不足10003钻石不足"
			},
			"errstr":{
				"type":"string",
				"value":"",
				"desc":"错误提示"
			}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|token|string|否|token
|goods_id|int|否|商品ID
|num|int|否|数量

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "goods_id": 1005,	
    "num": 10

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|status|int|否|状态码：0成功1系统繁忙10001产品已下架10002金币不足10003钻石不足
|errstr|string|否|错误提示

* 返回示例

~~~
{	
    "status": 10001,	
    "errstr": ""

}
~~~cY�5�  Pint",
                "value": "0",
                "desc": "板块：0全部；1问答；2分享"
            },
			 "car_model": {
                "type": "arr",
                "value": [0,0,0,0],
                "desc": "车型id"
            },
			"type_contents": {
                "type": "int",
                "required": true,
                "value": "0",
                "desc": "内容：0全部内容；1精华；2悬赏；3热门；4未解决；5已解决"
            },
            "keywords": {
                "type": "string",
                "required": true,
                "len_max": 50,
                "value": "红旗L7",
                "desc": "关键字"
            }
        }
    },
    "response": {
        "type": "arr",
        "value": {
		"type":"obj",
			"value":   {
			 "id": {
                    "type": "int",
                    "value": "4",
                    "desc": "帖子id"
                },
                "title": {
                    "type": "string",
            A  A�                                                     ��( E�9weekend:新增/修改角色组信息#### editAuthGroup
* 说明：新增/修改角色组信息
* Method：POST
* url：/carboss/index.php/Admin/Manage/editAuthGroup

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id": {
				"value": 29,
				"type": "int",
				"desc": "角色组ID(新增时忽略)"
			},
			"title": {
				"value": "Super",
				"type": "string",
				"required": true,
				"desc": "角色名"
			},
			"rules": {
				"value": "182,125,251,..",
				"type": "string",
				"required": true,
				"desc": "�  ���* �	weekend;登录#### login
* 说明：登录
* Method：POST
* url：/carboss/index.php/Admin/Login/login

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"user":{
				"value":"zm_fairy",
				"type":"string",
				"desc":"账号"
			},
			"pass":{
				"value":"d2t9hte7  [               "desc": "token"
            }
        }
    },
    "response": {
        "type": "arr",
        "value": {
            "type": "obj",
            "value": {
                "id": {
                    "type": "int",
                    "value": "3",
                    "required": true,
                    "desc": "品牌id"
                },
                "name": {
                    "value": "捷达",
                    "type": "string",
                    "required": true,
                    "desc": "品牌名称"
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|品牌id
|∟name|string|品牌名称

* 返回示例

~~~
[	
    {		
        "id": "3",		
        "name": "捷达"
    
	}

]
~~~Y��   5 "设备类型术语ID"
        },
		"list":{
			"type":"arr",
			"value":{
				"type":"obj",
				"value":{
					"device_name":{
						"type":"int",
						"value":"1005",
						"desc":"设备名术语ID"
					},
					"port":{
						"type":"int",
						"value":"1005",
						"desc":"设备端口标识"
					},
					"status":{
						"type":"int",
						"value":"1005",
						"desc":"设备状态"
					},
				  "order": {
                        "type": "arr",
                        "desc": "状态： 指令",
                        "value": {
							"type":"obj",
							"value":{
								"14": {                         
										"type": "int",
										"value": "10025",
										"desc": "键值为状态：指令"                         
								},
								 "11": {                         
										"type": "int",
										"value": "10028",
										"desc": "键值为状态：指令"                         
								}
							}
						}
                    }
				}
			}
		}
		}

	}
}
-->

* 参数



|参    ": "101asdh8ferhf75gh857gh57g",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type": "int",
				"value": 11,
				"required": true,
				"desc": "ID"
			},
			"num":{
				"type": "int",
				"value": 2,
				"required": true,
				"desc": "上限数量"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status":{
				"type": "int",
				"value": 1,
				"desc": "状态码：0：成功，1失败"
			},
			"errstr":{
				"type": "string",
				"value": " ",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|ID
|num|int|是|上限数量

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "id": 11,	
    "num": 2

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Yݔ3    :  :�                                 �0�Q �&��#�Q ?�kweekend0删除帖子评论/回答#### delReview
* 说明：删除帖子评论/回答
* Method：POST
* url：/carboss/index.php/Client/Posting/delReview

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1、问答帖，2、分享帖",
				"value"  ���R   	�itest#### roomDeviceInfo
* 说明：房间电器设备信息
* url：


<!--
{
    "response": {
	"type":"obj",
	"value":{
	  "token": {
            "type": "string",
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        },
		"room_number": {
            "type": "int",
            "value": "1005",
            "desc": "房号"
        }
	}
      
    },
    "params": {
	"type":"arr",
	"value":{
		"name": {
            "type": "int",
            "value": "1005",
            "desc":  v  �|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|int|是|一次显示数量
|uid|int|否|用户ID
|nickname|string|否|发布用户
|title|string|否|标题
|type|int|否|帖子类型：1：问答板块，2：分享板块
|tag|int|否|帖子状态：0，不限，1：精华，2：置顶，3、回收站
|time|obj|否|时间范围
|∟min|int|否|起始时间
|∟max|int|否|最终时间

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "page_start": 1,	
    "page_limit": 50,	
    "uid": 2,	
    "nickname": "zm",	
    "title": "157618888888",	
    "type": 2,	
    "tag": 2,	
    "time": {		
        "min": "1501111111",		
        "max": "150222222"
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|数据列表
|∟/|obj|---
|∟∟id|int|帖    �|房号

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "room_number": "1005"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|[]|arr|是|格式为arr
|/|obj|是|****
|name|int|否|设备类型术语ID
|list|arr|否|---
|∟/|obj|否|****
|∟∟device_name|int|否|设备名术语ID
|∟∟port|int|否|设备端口标识
|∟∟status|int|否|设备状态
|∟∟order|arr|否|状态：指令
|∟∟/|arr|否|****
|∟∟∟14|int|否|键值为状态：指令
|∟∟∟11|int|否|键值为状态：指令

* 返回示例

~~~
[	
    {		
        "name": "1005",		
        "list": [			
            {				
                "device_name": "1005",				
                "port": "1005",				
                "status": "1005",				
                "order": [					
                    {						
                        "14": "10025",						
                        "11": "10028"
                    
					}
                
				]
            
			}
        
		]
    
	}

]
~~~cYͪ�  z					"status":{
						"type":"int",
						"value":"1005",
						"desc":"设备状态"
					},
				  "order": {
                        "type": "arr",
                        "desc": "状态： 指令",
                        "value": [{
                            "14": {                         
                                    "type": "int",
                                    "value": "10025",
                                    "desc": "键值为状态：指令"                         
                            },
							 "11": {                         
                                    "type": "int",
                                    "value": "10028",
                                    "desc": "键值为状态：指令"                         
                            }
                        }]
                    }
				}
			]
		}
		}

	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|room_number|int|�  �
				"top": {
                    "type": "int",
                    "value": "0",
                    "desc": "置顶帖：0是；1否"
                },
				 "agree": {
                    "type": "int",
                    "value": "654",
                    "desc": "点赞数"
                },
				 "collect": {
                    "type": "int",
                    "value": "99",
                    "desc": "收藏数"
                },
				 "review": {
                    "type": "int",
                    "value": "99",
                    "desc": "评论数"
                }
            }
		}
         
        
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|page|int|是|页码
|num|int|是|一次显示数量
|type|int|否|板块：0全部；1问答；2分享
|car_model|arr|否|车型id
|∟/||否|
|type_contents|int|是|内容：0全部内容；1精华；2悬赏；3热门；4未解决；5已解决
|keywords|string|是|关键字

* �    alue":1,
				"type": "int",
				"required": true,
				"desc": "ID"
			},
			"content": {
				"value":"奥迪",
				"type": "string",
				"required": true,
				"desc": "内容"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": ""
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type|int|是|ID所属：1、品牌，2、型号，3、排量，4、年份
|id|int|是|ID
|content|string|是|内容

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "type": 1,	
    "id": 1,	
    "content": "奥迪"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": ""

}
~~~5Y鞀    				"number":{
					"value":48,
					"type":"int",
					"desc":"数值"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type1|string|是|日期分类：total:长期, week:本周, month:本月, refer:推荐
|type2|string|是|其他分类：points:分数榜,diamond_in:收益榜（钻）,diamond_out:贡献榜（钻）

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type1": "month",	
    "type2": "points"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟ranking|int|排名
|∟uid|int|用户ID
|∟nickname|string|昵称
|∟icon|string|用户头像链接
|∟number|int|数值

* 返回示例

~~~
[	
    {		
        "ranking": 1,		
        "uid": 8,		
        "nickname": "fairy",		
        "icon": "http://zm.fairy.com/fairy/zm.jpg",		
        "number": 48
    
	}

]
~~~cY�:D                                                                  "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：正常, 8：token已失效"
			},
			"time":{
				"value":1512356438,
				"type":"int",
				"desc":"到期时间（时间戳）"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：正常,8：token已失效
|time|int|到期时间（时间戳）
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "time": 1512356438,	
    "errstr": " "

}
~~~cYݑ#  �      "value": {"token": {
            "type": "string",
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        },
        "room_id": {
            "type": "int",
            "value": "1005",
            "desc": "房间 ID"
        }}
        
    },
    "response": {
	"type": "arr",
            "value": [
        {
            "type":"obj",
            "value":{
                "name": {
                    "type": "int",
                    "value": "102",
                    "desc": "设备类型术语ID(照明)"
                },
                "list":{
                    "type":"arr",
                    "value":[{
                        "device_name":{
                            "type":"int",
                            "value":"106",
                            "desc":"设备名术语ID"
                        },
                        "device_type":{
                            "type":"int",
                            "value":"1",
                              �"desc":"设备类型：1灯；2调光灯；3升降帘；4开合帘；5空调；6电视"
                        },
                        "port":{
                            "type":"int",
                            "value":"214",
                            "desc":"设备端口标识"
                        },
                        "status":{
                            "type":"int",
                            "value":"1",
                            "desc":"设备状态"
                        },
                        "status_list": {
                            "type": "obj",
                            "desc": "状态集合(1：灯为open(开1),shut(关2)；2:调光灯为min(0),max(100),最小单位为1)",
                            "value": {
                                "open":{
                                    "type":"int",
                                    "value":"1"
                                },
                                "shut":{
                                    "  �type":"int",
                                    "value":"2"
                                }
                            }
                        }
                    }]
                }
            }
        },
        {
            "type":"obj",
            "value":{
                "name": {
                    "type": "int",
                    "value": "103",
                    "desc": "设备类型术语ID（窗帘，无需状态）"
                },
                "list":{
                    "type":"arr",
                    "value":[{
                        "device_name":{
                            "type":"int",
                            "value":"106",
                            "desc":"设备名术语ID"
                        },
                        "device_type":{
                            "type":"int",
                            "value":"3",
                            "desc":"设备类型：1灯；2调光灯；3升降帘；4开合帘；5空调；6电视"
                 �         },
                        "port":{
                            "type":"int",
                            "value":"214",
                            "desc":"设备端口标识"
                        },
                        "status_list": {
                            "type": "obj",
                            "desc": "状态集合(3：升降帘为rise(升1),drop(降2)；4：开合帘为open(开1),shut(合2),最小单位为1)",
                            "value": {
                                "rise":{
                                    "type":"int",
                                    "value":"1"
                                },
                                "drop":{
                                    "type":"int",
                                    "value":"2"
                                }
                            }
                        }
                    }]
                }
            }
        },
       {
            "type":"obj",
            "value":{
            �      "name": {
                    "type": "int",
                    "value": "103",
                    "desc": "设备类型术语ID（空调）"
                },
                "list":{
                    "type":"arr",
                    "value":[{
                        "device_name":{
                            "type":"int",
                            "value":"106",
                            "desc":"设备名术语ID"
                        },
                        "device_type":{
                            "type":"int",
                            "value":"3",
                            "desc":"设备类型：1灯；2调光灯；3升降帘；4开合帘；5空调；6电视"
                        },
                        "port":{
                            "type":"int",
                            "value":"214",
                            "desc":"设备端口标识"
                        },
                        "status":{
                            "type":"obj",
            �                  "desc":"设备状态",
                            "value":{
                                "temp":{
                                    "type":"float",
                                    "value":"12.5",
                                    "desc":"温度"
                                },
                                "mode":{
                                    "type":"int",
                                    "value":"1",
                                    "desc":"模式：cryogen(1制冷)，heating(2制热)"
                                },
                                "wind":{
                                    "type":"int",
                                    "value":"1",
                                    "desc":"风量:less(1低)，general(2中)，strong(3高)"
                                }
                            }
                        },
                        "status_list": {
                            "type": "obj",
                            "desc":  � "状态集合",
                            "value":{
                                "temp":{
                                    "type": "obj",
                                    "desc": "温度状态数值add(1+),less(2-)",
                                    "value": {
                                        "add":{
                                            "type":"int",
                                            "value":"1"
                                        },
                                        "less":{
                                            "type":"int",
                                            "value":"2"
                                        }
                                    }
                                },
                                "mode":{
                                    "type": "obj",
                                    "desc": "模式：cryogen(1制冷)，heating(2制热)",
                                    "value": {
                                �          "cryogen":{
                                            "type":"int",
                                            "value":"1"
                                        },
                                        "heating":{
                                            "type":"int",
                                            "value":"2"
                                        }
                                    }
                                },
                                "wind":{
                                    "type": "obj",
                                    "desc": "风量:less(1低)，general(2中)，strong(3高)",
                                    "value": {
                                        "less":{
                                            "type":"int",
                                            "value":"1"
                                        }
                                    }
                                }
                            }
                    �      }
                    }]
                }
            }
        },
        {
            "type":"obj",
            "value":{
                "name": {
                    "type": "int",
                    "value": "103",
                    "desc": "设备类型术语ID（娱乐设备）"
                },
                "list":{
                    "type":"arr",
                    "value":[{
                        "device_name":{
                            "type":"int",
                            "value":"106",
                            "desc":"设备名术语ID"
                        },
                        "device_type":{
                            "type":"int",
                            "value":"6",
                            "desc":"设备类型：1灯；2调光灯；3升降帘；4开合帘；5空调；6电视"
                        },
                        "port":{
                            "type":"int",
                            "value":"214",
                        �      "desc":"设备端口标识"
                        },
                        "status":{
                            "type":"obj",
                            "desc":"设备状态",
                            "value":{
                                "switch":{
                                    "type":"int",
                                    "value":"6",
                                    "desc":"电视开关(6：电视为open(开1),shut(关2))"
                                },
                                "channel":{
                                    "type":"int",
                                    "value":"6",
                                    "desc":"频道"
                                },
                                "mute":{
                                    "type":"int",
                                    "value":"6",
                                    "desc":"静音：open(开1),shut(关2)"
                                },
                                "mode":{
  �                                    "type":"int",
                                    "value":"1",
                                    "desc":"模式：HDMI(1)，VIDEO(2) ，VGA(3)"
                                }
                            }
                        },
                        "status_list": {
                            "type": "obj",
                            "desc": "状态集合",
                            "value":{
                                "channel":{
                                    "type": "obj",
                                    "desc": "频道add(1+),less(2-)",
                                    "value": {
                                        "add":{
                                            "type":"int",
                                            "value":"1"
                                        },
                                        "less":{
                                            "type":"int",
                                            "valu  �e":"2"
                                        }
                                    }
                                },
                                "switch":{
                                    "type": "obj",
                                    "desc": "电视开关(6：电视为open(开1),shut(关2))",
                                    "value": {
                                        "open":{
                                            "type":"int",
                                            "value":"1"
                                        },
                                        "shut":{
                                            "type":"int",
                                            "value":"2"
                                        }
                                    }
                                },
                                "mute":{
                                    "type":"obj",
                                    "desc":"静音：open(开1),shut(关2)",
           �                           "value": {
                                        "open":{
                                            "type":"int",
                                            "value":"1"
                                        },
                                        "shut":{
                                            "type":"int",
                                            "value":"2"
                                        }
                                    }
                                },
                                "mode":{
                                    "type":"obj",
                                    "desc":"模式：HDMI(1)，VIDEO(2) ，VGA(3) ",
                                    "value": {
                                        "HDMI":{
                                            "type":"int",
                                            "value":"1"
                                        }
                                    }
                                  �},
                                "volume":{
                                    "type":"obj",
                                    "desc":"音量：rise(升1),drop(降2)",
                                    "value": {
                                        "rise":{
                                            "type":"int",
                                            "value":"1"
                                        },
                                        "drop":{
                                            "type":"int",
                                            "value":"2"
                                        }
                                    }
                                }
                            }
                        }
                    }]
                }
            }
        }
    ]
	}

	
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|---|obj|是|结果以obj返回
|token|string|否|token
|room_id|int|否|房间ID

* 参数示例

~~~
{	
   �   "token": "101asdh8ferhf75gh857gh57g",	
    "room_id": "1005"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|---|arr|是|结果以arr返回
|------------------|||
|name|int|否|设备类型术语ID(照明)
|list|arr|否|---
|∟/|arr|否|****
|∟∟/|obj|否|****
|∟∟∟device_name|int|否|设备名术语ID
|∟∟∟device_type|int|否|设备类型：1灯；2调光灯；3升降帘；4开合帘；5空调；6电视
|∟∟∟port|int|否|设备端口标识
|∟∟∟status|int|否|设备状态
|∟∟∟status_list|obj|否|状态集合(1：灯为open(开1),shut(关2)；2:调光灯为min(0),max(100),最小单位为1)
|∟∟∟∟open|int|否|---
|∟∟∟∟shut|int|否|---
|1|-|-|-
|name|int|否|设备类型术语ID（窗帘，无需状态）
|list|arr|否|---
|∟/|arr|否|****
|∟∟/|obj|否|****
|∟∟∟device_name|int|否|设备名术语ID
|∟∟∟device_type|int|否|设备类型：1灯；2调光灯；3升降帘；4开合帘；5空调；6电视
|∟∟∟por  �t|int|否|设备端口标识
|∟∟∟status_list|obj|否|状态集合(3：升降帘为rise(升1),drop(降2)；4：开合帘为open(开1),shut(合2),最小单位为1)
|∟∟∟∟rise|int|否|---
|∟∟∟∟drop|int|否|---
|2|-|-|-
|name|int|否|设备类型术语ID（空调）
|list|arr|否|---
|∟/|arr|否|****
|∟∟/|obj|否|****
|∟∟∟device_name|int|否|设备名术语ID
|∟∟∟device_type|int|否|设备类型：1灯；2调光灯；3升降帘；4开合帘；5空调；6电视
|∟∟∟port|int|否|设备端口标识
|∟∟∟status|obj|否|设备状态
|∟∟∟∟temp|float|否|温度
|∟∟∟∟mode|int|否|模式：cryogen(1制冷)，heating(2制热)
|∟∟∟∟wind|int|否|风量:less(1低)，general(2中)，strong(3高)
|∟∟∟status_list|obj|否|状态集合
|∟∟∟∟temp|obj|否|温度状态数值add(1+),less(2-)
|∟∟∟∟∟add|int|否|---
|∟∟∟∟∟less|int|否|---
|∟∟∟∟mode|obj|否|模式：cryogen(1制冷)，heating(2制热)
|∟∟∟∟∟cry  �ogen|int|否|---
|∟∟∟∟∟heating|int|否|---
|∟∟∟∟wind|obj|否|风量:less(1低)，general(2中)，strong(3高)
|∟∟∟∟∟less|int|否|---
|3|-|-|-
|name|int|否|设备类型术语ID（娱乐设备）
|list|arr|否|---
|∟/|arr|否|****
|∟∟/|obj|否|****
|∟∟∟device_name|int|否|设备名术语ID
|∟∟∟device_type|int|否|设备类型：1灯；2调光灯；3升降帘；4开合帘；5空调；6电视
|∟∟∟port|int|否|设备端口标识
|∟∟∟status|obj|否|设备状态
|∟∟∟∟switch|int|否|电视开关(6：电视为open(开1),shut(关2))
|∟∟∟∟channel|int|否|频道
|∟∟∟∟mute|int|否|静音：open(开1),shut(关2)
|∟∟∟∟mode|int|否|模式：HDMI(1)，VIDEO(2)，VGA(3)
|∟∟∟status_list|obj|否|状态集合
|∟∟∟∟channel|obj|否|频道add(1+),less(2-)
|∟∟∟∟∟add|int|否|---
|∟∟∟∟∟less|int|否|---
|∟∟∟∟switch|obj|否|电视开关(6：电视为open(开1),shut(关2))
|∟∟∟∟∟open|int|否|--  �-
|∟∟∟∟∟shut|int|否|---
|∟∟∟∟mute|obj|否|静音：open(开1),shut(关2)
|∟∟∟∟∟open|int|否|---
|∟∟∟∟∟shut|int|否|---
|∟∟∟∟mode|obj|否|模式：HDMI(1)，VIDEO(2)，VGA(3)
|∟∟∟∟∟HDMI|int|否|---
|∟∟∟∟volume|obj|否|音量：rise(升1),drop(降2)
|∟∟∟∟∟rise|int|否|---
|∟∟∟∟∟drop|int|否|---

* 返回示例

~~~
[	
    {		
        "name": "102",		
        "list": [			
            {				
                "device_name": "106",				
                "device_type": "1",				
                "port": "214",				
                "status": "1",				
                "status_list": {					
                    "open": "1",					
                    "shut": "2"
                
				}
            
			}
        
		]
    
	},	
    {		
        "name": "103",		
        "list": [			
            {				
                "device_name": "106",				
                "device_type": "3",				
                "port": "214",				
                "status": "1",		  �		
                "status_list": {					
                    "open": "1",					
                    "shut": "2",					
                    "rise": "1",					
                    "drop": "2"
                
				}
            
			}
        
		]
    
	},	
    {		
        "name": "103",		
        "list": [			
            {				
                "device_name": "106",				
                "device_type": "3",				
                "port": "214",				
                "status": {					
                    "temp": "12.5",					
                    "mode": "1",					
                    "wind": "1"
                
				},				
                "status_list": {					
                    "open": "1",					
                    "shut": "2",					
                    "rise": "1",					
                    "drop": "2",					
                    "temp": {						
                        "add": "1",						
                        "less": "2"
                    
					},					
                    "mode": {						
                        "cryogen":  � "1",						
                        "heating": "2"
                    
					},					
                    "wind": {						
                        "less": "2"
                    
					}
                
				}
            
			}
        
		]
    
	},	
    {		
        "name": "103",		
        "list": [			
            {				
                "device_name": "106",				
                "device_type": "6",				
                "port": "214",				
                "status": {					
                    "temp": "12.5",					
                    "mode": "1",					
                    "wind": "1",					
                    "switch": "6",					
                    "channel": "6",					
                    "mute": "6"
                
				},				
                "status_list": {					
                    "open": "1",					
                    "shut": "2",					
                    "rise": "1",					
                    "drop": "2",					
                    "temp": {						
                        "add": "1",						
                            "less": "2"
                    
					},					
                    "mode": {						
                        "cryogen": "1",						
                        "heating": "2",						
                        "HDMI": "1"
                    
					},					
                    "wind": {						
                        "less": "2"
                    
					},					
                    "channel": {						
                        "add": "1",						
                        "less": "2"
                    
					},					
                    "switch": {						
                        "open": "1",						
                        "shut": "2"
                    
					},					
                    "mute": {						
                        "open": "1",						
                        "shut": "2"
                    
					},					
                    "volume": {						
                        "rise": "1",						
                        "drop": "2"
                    
					}
                
				}
            
			}
        
		]
    
	}

]
~~~cY˅    eField/tagList

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value": "101asdh8ferhf75gh857gh57g",
				"required": true,
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value": {
				"id":{
					"type": "int",
					"value": "11",
					"desc": "标签项 ID"
				},
				"name":{
					"type": "string",
					"value": "My Lord",
					"desc": "标签名"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|标签项ID
|∟name|string|标签名

* 返回示例

~~~
[	
    {		
        "id": "11",		
        "name": "My Lord"
    
	}

]
~~~Yݖ�                                                                                                               d"desc": "反馈内容"
			},
			"nickname":{
				"value": "zm",
				"type": "string",
				"desc": "发布用户"
			},
			"time":{
				"value": {
					"min":{
						"type":"int",
						"desc":"起始时间",
						"value":1501111111
					},
					"max":{
						"type":"int",
						"desc":"最终时间",
						"value":150222222
					}
				},
				"type": "obj",
				"desc": "时间范围"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"id": {
							"type": "int",
							"desc": "反馈ID",
							"value": 2
						},
						"nickname": {
							"type": "string",
							"desc": "用户名",
							"value": "wk"
						},
						"title": {
							"type": "string",
							    me|string|否|昵称
|phone|int|否|手机号
|address|string|否|地址
|work_age|int|否|工龄
|job|int|否|工种职位（只选）
|sloagn|string|否|个性签名
|brands|arr|否|擅长品牌（最多选5个）
|brands|arr|否|擅长品牌（最多选5个）
|∟/|int|否|品牌id

* 参数示例

~~~
{	
    &quot;token&quot;: &quot;hfsdhiufhgbflsjfa&quot;,	
    &quot;nickname&quot;: &quot;Jack ma&quot;,	
    &quot;phone&quot;: &quot;19956325112&quot;,	
    &quot;address&quot;: &quot;广东省-广州市&quot;,	
    &quot;work_age&quot;: &quot;8&quot;,	
    &quot;job&quot;: &quot;8&quot;,	
    &quot;sloagn&quot;: &quot;I know nothing about money&quot;,	
    &quot;brands&quot;: [1,2,3]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0成功；1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    &quot;status&quot;: &quot;0&quot;,	
    &quot;errstr&quot;: &quot;错误提示&quot;

}
~~~Y���d": {
                "type": "int",
         ���；2分享"
            },
			 "car_model": {
                "type": "arr",
                "value": [0,0,0,0],
                "desc": "车型id"
            },
			"type_contents": {
                "type": "int",
                "required": true,
                "value": "0",
                "desc": "内容：0全部内容；1精华；2悬赏；3热门；4未解决；5已解决"
            },
            "keywords": {
                "type": "string",
                "required": true,
                "len_max": 50,
                "value": "红旗L7",
                "desc": "关键字"
            }
        }
    },
    "response": {
        "type": "arr",
        "value": {
		"type":"obj",
			"value":   {
			 "id": {
                    "type": "int",
                    "value": "4",
                    "desc": "帖子id"
                },
                "title": {
                    "type": "string",
                    "value": "乐视汽车，蔚来，到底是不是PPT产品",
              �dmin/Posting/showInfo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start": {
				"type": "int",
				"desc": "起始页码",
				"required": true,
				"value": 1
			},
			"page_limit": {
				"type": "int",
				"desc": "一次显示数量",
				"required": true,
				"value": 50
			},
			"uid": {
				"type": "int",
				"desc": "用户ID",
				"value": 2
			},
			"nickname":{
				"value": "zm",
				"type": "string",
				"desc": "发布用户"
			},
			"title":{
				"value": "157618888888",
				"type": "string",
				"desc": "标题"
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1：问答板块，2：分享板块",
				"value": 2
			},
			"tag": {
				"type": "int",
				"desc": "帖子状态：0，不限，1：精华，2：置顶，3、回收站",
				"value": 2
			},
			"time":{
				"value": {
					"min":{
						"type":"int",
						"desc":"起始时间"   � �                        �Z�r �admin5抽奖#### new
* 说明：抽奖
* url：carboss/index.php/Client/Lottery/new

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
		"value":{
		"result": {
            "type": "str��r �]admin5抽奖#### lucky
* 说明：抽奖
* url：carboss/index.php/Client/Lottery/lucky

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "result": {
                "type": "string",
                "value": "天河万�  �    6  � 6                      "desc": "帖子id"
 ��<   #�q&检查token#### checkToken
* 说明：检查token
* Method：POST
* url：/carboss/index.php/Client/LoginReg/checkToken


<!--
{
    "   <��; �}admin+排行榜#### rankList
* 说明：排行榜
* url：/carboss/index.php/Client/Profile/rankList

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
				"required":true,
                "value": "safsfasfaf",
                "desc": "token"
            },
			"type": {
                "type": "int",
				"required":true,
                "value": "1",
                "desc": "榜单类型：<br/>1、风云榜；2、富豪榜；<br/>3、砖家榜；4、点赞榜；<br/>5、人气榜"
            }
        }
    },
    "response": {
        "type": "arr",
		"value":{
			"type":"obj",
			 "value": {
            "name": {
                "type": "string",
                "value": "富豪榜",
                "desc"  �    �  � b                                                                                      �5�I %�)weekend,删除帖子#### delPosting
* 说明：删除帖子
* Method�3�F Y�0�I 1�weekend,设置帖子状态#### setStatus
* 说明：设置帖子状态
* Method：POST
* url：/carboss/index.php/Admin/Posting/setStatus

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"question_id": {
				"type": "arr",
				"required": true,
				"desc": "问答帖ID列表",
				"value": {
					"type":"int",
					"desc":"帖子ID",
					"value":29
				}
			},
			"share_id": {
				"type": "arr",
				"required": true,
				"desc": "分享帖ID列表",
				"value": {
					"type":"int",
					"desc":"帖子ID",
					"value":29
				}
			},
			"status": {
				"type": "int",
				"required": true,
				"desc": "状态:1、删除，2、恢复，3、精华，4、取消精华，5�  \    钱是什么",
						 "desc": "签名"
						 },
						  "points": {
						 "type": "int",
						 "value": "589",
						 "desc": "积分"
						 }
						 
						 
				}
					],
                    "desc": "发帖时间"
                }
                
            }]
        
    }
}
-->







* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|[]|arr|是|格式为arr
|/|obj|是|****
|name|string|否|排行类型名
|list|arr|否|发帖时间
|∟/|obj|否|****
|∟∟id|int|否|用户uid
|∟∟icon|string|否|头像
|∟∟name|string|否|姓名
|∟∟slogan|string|否|签名
|∟∟points|int|否|积分

* 返回示例

~~~
[	
    {		
        "name": "富豪榜",		
        "list": [			
            {				
                "id": "43",				
                "icon": "/uploads/1/icon/dd.jpg",				
                "name": "麻花藤",				
                "slogan": "我不知道钱是什么",				
                "points": "589"
            
			}
        
		]
    
	}

]
~~~cY���V0.1- 20170930     )             ��j %�=admin+编辑资料#### editInfo
* 说明：编辑资料
* url：carboss/index.php/Client/Profile/editInfo

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "nickname": {
                "type": "string",
                "value": "Jack ma",
                "desc": "昵称"
            },
            "phone": {
                "type": "int",
                "value": "19956325112",
                "desc": "手机号"
            },
            "city": {
                "type": "string",
                "value": "广东省-广州市",
                ��K�i %�Yadmin8上传图片#### upload
* 说明：上传图片
* url：carboss/index.php/Client/Suggest/upload
* 参数：
---
	！ ！ 这里必须使用 form multipart 格式！ ！ 
	token: "afdsajfk  �    A  A� �{                                                 �;�= %�5weekend&退出登录#### logout
* 说明：退出登录
* Method：POST
* url：/carboss/index.php/Client/LoginReg/logout

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：退出成功"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：退出成功
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y��  w,
						"value":1501111111
					},
					"max":{
						"type":"int",
						"desc":"最终时间",
						"value":150222222
					}
				},
				"type": "obj",
				"desc": "时间范围"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type": "arr",
				"desc":"数据列表",
				"value": {
					"type":"obj",
					"value":{
						"id": {
							"type": "int",
							"desc": "帖子ID",
							"value": 2
						},
						"uid": {
							"type": "int",
							"desc": "用户ID",
							"value": 2
						},
						"nickname": {
							"type": "string",
							"desc": "昵称",
							"value": "水货"
						},
						"type": {
							"type": "int",
							"desc": "帖子类型：1：问答板块，2：分享板块",
							"value": 2
						},
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：正常, 8：token已失效"
			},
			"time":{
				"value":1512356438,
				"type":"int",
				"desc":"到期时间（时间戳）"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：正常,8：token已失效
|time|int|到期时间（时间戳）
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "time": 1512356438,	
    "errstr": " "

}
~~~cY݆�
   gp ���������������������~xrlf`ZTNHB<60*$ ���������������������|vpjd^XRLF@:4.(" ����������������xph`XPH@80(   �     � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �~~}}||{{zzyyxxwwvvuuttss``[[ZZYYXXWWMMLLKKJJHHGGFFEEDDCCBBAA@@??>>==<<;;::998877554433221100//..--,,++**))((''&&%%$$##""!!  

				
� V � ���������������L<���������������|td\TLD<4,$ � � � � ���l����4,$D�|tld\T��xph`XPH@80����|����tld\T � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �   � � � � � � � � � � � � � �

		 � � � � � � � �   t $$      � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �    >r                                                                                                  �B�M   1�G,设置为置顶帖#### setTopPosting
* 说明：设置为置顶帖
* Method：POST
* url：/carboss/index.php/Admin/Posting/setTopPosting

<!--
{
	"params": {
		"type": "obj",
		"value  ��^�O O�Qweekend0(举报)推荐,操作不可取消#### recommend
* 说明：(举报)推荐,操作不可取消
* url：/carboss/index.php/Client/Posting/recommend


<!--
{
	"params": {
		"type": "obj",
		"value�\�Z��W�O M�Eweekend0举报/推荐,操作不可取消#### feedback
* 说明：举报/推荐,操作不可取消
* url：/carboss/index.php/Client/Posting/feedback


<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1、问答帖，2、分享帖",
				"value": 1
			},
			"posting_id": {
				"type": "int",
				"de  �   � � �                                                           ��8 1�qadmin+查看他人资料#### showInfoOthers
* 说明：查看他人资料
* url：carboss/index.php/Client/Profile/showInfoOthers
<!--
{
    "params": {
        "type": "obj",
        "value": {
            "uid": {
                "type": "int",
                "required": true,
                "value": "23",
                "desc": "用户uid"
            },
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
�#�8 1�}admin+查看他人资斒z�8 1�+admin+查看他人资料#### showInfoOthers
* 说明：查看他人资料
* url：carb��8 1�Sadmin+查看他人资料#### showInfoOthers
* 说明：查看他人资料
* url：carboss/index.php/Client/Profile/showInfoOthers

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "uid": {
                "type": "int",
                "req  �    index.php/Client/Posting/showAd

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"title": {
					"type": "string",
					"desc": "标题",
					"value": "好丽友"
				},
				"img": {
					"type": "string",
					"desc": "图片链接",
					"value": "http://www.fairy.com/fairy/zm.jpg"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟title|string|标题
|∟img|string|图片链接

* 返回示例

~~~
[	
    {		
        "title": "好丽友",		
        "img": "http://www.fairy.com/fairy/zm.jpg"
    
	}

]
~~~Y�G                                              ST(form multipart)
* url: /carboss/index.php/Client/QuestionAndAnswer/imgUpload

* 参数:
~~~
！ ！ 这里必须使用 form multipart 格式！ ！
！ ！只上传图片，返回图片路径！ ！
token: "101asdh8ferhf75gh857gh57g"      //token
~~~

<!--
{
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：成功,1失败, 16 上传失败"
			},
			"img_url": {
				"value": "http://zm.fairy.com/fairy/zm.jpg",
				"type": "string",
				"desc": "头像链接"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->







* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|status|int|否|状态码：0：成功,1失败,16上传失败
|img_url|string|否|头像链接
|errstr|string|否|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "img_url": "http://zm.fairy.com/fairy/zm.jpg",	
    "errstr": " "

}
~~~cY�Rv0.1                      |        "desc": "帖子标题"
                },
				 "desc": {
                    "type": "string",
                    "value": "是的 yes ",
                    "desc": "帖子内容"
                },
				 "uid": {
                    "type": "int",
                    "value": "45",
                    "desc": "用户uid"
                },
				"icon": {
                    "type": "string",
                    "value": "/uploads/5/icon/aar.jpg",
                    "desc": "发帖人头像"
                },
                "author": {
                    "type": "string",
                    "value": "Jack ma",
                    "desc": "发帖人"
                },
                "atime": {
                    "type": "int",
                    "value": "15014856325",
                    "desc": "发帖时间"
                },
       				"best": {
                    "type": "int",
                    "value": "0",
                    "desc": "精华帖：0是；1否"
                },    lue": "4",
                            "desc": "选项id"
                        },
                        "name": {
                            "type": "string",
                            "value": "斯巴鲁",
                            "desc": "选项名称"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|car_attribute|arr|否|汽车属性数组
|∟/|int|否|

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "car_attribute": [1]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|desc|string|返回结果类型
|data|arr|---
|∟/|obj|选项列表
|∟∟id|int|选项id
|∟∟name|string|选项名称

* 返回示例

~~~
{	
    "desc": "车型",	
    "data": [		
        {			
            "id": "4",			
            "name": "斯巴鲁"
        
		}
    
	]

}
~~~cY�iok    ime": {		
        "min": "1501111111",		
        "max": "150222222"
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟uid|int|用户ID
|∟∟nickname|string|用户昵称
|∟∟phone|int|手机号码
|∟∟city|int|城市
|∟∟exp|int|用户经验值
|∟∟gold|int|用户可用金币
|∟∟follower_n|int|用户粉丝
|∟∟posting_n|int|用户发帖数
|∟∟login_last_time|int|最后登陆时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "uid": "2",			
            "nickname": "大水货",			
            "phone": "2",			
            "city": "2",			
            "exp": "2",			
            "gold": "2",			
            "follower_n": "2",			
            "posting_n": "2",			
            "login_last_time": "15023167531"
        
		}
    
	]

}
~~~Y��N    lue":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功, 8 token已失效"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			},
			"token": {
				"value": "101e3289th384t2yt8hr2y3o",
				"type":"string",
				"desc":"更新后的token值"
			},
			"time":{
				"value":1512356438,
				"type":"int",
				"desc":"新token的到期时间（时间戳）"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|当前token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功,8token已失效
|errstr|string|错误提示
|token|string|更新后的token值
|time|int|新token的到期时间（时间戳）

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " ",	
    "token": "101e3289th384t2yt8hr2y3o",	
    "time": 1512356438

}
~~~cY݆�   � "�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �&�1 1�weekend.专家用户信息#### showExpertUserDetail
* 说明：专家用户信息
* Method：POST
* url：/carboss/index.php/Admin/User/showExpertUserDetail

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required"  ƉR�0 =�Kweekend.头像图片临时上传#### uploadImg
* 说明: 头像图片临时上传
* Method：POST(form multipart)
* url: /carboss/index.php/Admin/User/uploadImg

* 参数:
~~~
！ ！ 这里必须使�  I  �     "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "type": {
                "type": "int",
                "required": true,
                "value": "1",
                "desc": "好友类型：<br/>1、我的粉丝；2、我的关注"
            },
				"page": {
                "type": "int",
                "desc": "页码",
                "required": true,
                "value": 1
            },
            "num": {
                "type": "int",
                "desc": "一次显示数量",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {
        "type": "arr",
        "desc": "",
        "value": {
            "type": "obj",
            "value": {
                "uid": {
                    "type": "int",
                    "value": "1",
                    "desc": "好友uid"
                },
                "icon": {
     ken": {
				"value": "101du43hu9gube39gh3",
				"requir�/�; �'admin+排行榜#### rankList
* 说明：排行榜
* url：/carboss/index.php/Client/Rank/rankList

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "value": "safsfasfaf",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "arr",
		"value":{
			"type":"obj",
			 "value": {
            "name": {
                "type": "string",
                "value": "富豪榜",
                "desc": "排行类型名"
            },
            "list": {
                "type": "arr",
                "value": {
                    "type": "obj",
                    "value": {
 �_�9 =�eweekend0帖子图片临时上传#### uploadImg
* 说明: 帖子图片临时上传
* Method：POST(form multipart)
* url: /carboss/index.php/Client/Posting/uploadImg

* 参数:
~~~
！ ！ 这里必须使用 form m  �    |格式为obj
|floor_id|int|否|楼层ID
|num|int|否|楼层
|name|int|否|楼层名术语标识
|room|arr|否|---
|∟/|obj|否|****
|∟∟room_id|int|否|房间ID
|∟∟room_number|int|否|房号
|∟∟occupancy|string|否|是否有客户入住:false否，true是
|∟∟clean|string|否|打扫状态:false否，true是
|∟∟disturb|string|否|是否允许打扰:false否，true是
|∟∟temperature|float|否|温度，摄氏度
|∟∟light|string|否|灯状态:false否，true是
|∟∟status|int|否|告警状态：1无；2紧急服务

* 返回示例

~~~
{	
    "floor_id": "1",	
    "num": "1",	
    "name": "1",	
    "room": [		
        {			
            "room_id": "105",			
            "room_number": "1005",			
            "occupancy": "true",			
            "clean": "true",			
            "disturb": "true",			
            "temperature": "10.5",			
            "light": "true",			
            "status": "1"
        
		}
    
	]

}
~~~cY��-                                                               �			"clean": {
							"type": "string",
							"value": "true",
							"desc": "打扫状态:false否， true 是"
						},
						"disturb": {
							"type": "string",
							"value": "true",
							"desc": "是否允许打扰:false否， true 是"
						},
						"temperature": {
							"type": "float",
							"value": "10.5",
							"desc": "温度，摄氏度"
						},
						"light": {
							"type": "string",
							"value": "true",
							"desc": "灯状态:false否， true 是"
						},
						"status": {
							"type": "int",
							"value": "1",
							"desc": "告警状态：1 无；2 紧急服务"
						}
					}
				]
			}
	}}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|floor_id|int|否|楼层ID(传递此参数只获取单个楼层房间列表)

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "floor_id": "1"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是  �:"obj",
	"value":{
	        "token": {
            "type": "string",
            "required": true,
            "value": "101asdh8ferhf75gh857gh57g",
            "desc": "token"
        },
		"floor_id": {
			"type": "int",
			"value": "1",
			"desc": "楼层 ID(传递此参数只获取单个楼层房间列表)"
		}
	}

    },
    "response": {
	"type":"obj",
	"value":{
			"floor_id": {
				"type": "int",
				"value": "1",
				"desc": "楼层 ID"
			},
			"num": {
				"type": "int",
				"value": "1",
				"desc": "楼层"
			},
			"name": {
				"type": "int",
				"value": "1",
				"desc": "楼层名术语标识"
			},
			"room": {
				"type": "arr",
				"value": [
					{
						"room_id": {
							"type": "int",
							"value": "105",
							"desc": "房间ID"
						},
						"room_number": {
							"type": "int",
							"value": "1005",
							"desc": "房号"
						},
						"occupancy": {
							"type": "string",
							"value": "true",
							"desc": "是否有客户入住:false否， true 是"
						},
			    �  �                                                                                                                                  �em 1�o3admin)汽车品牌列表#### showInfoCar
* 说明：汽车品牌列表
	-无参数时，返回所有品牌列表
	-确定选择：参数选择0(不足四位，以0填充)或者四个参数均存在时，
	-e.g:[5,1,0,0]，[0,0,0,0]
	
* url：/carboss/index.php/Client/Postings/showInfoCar

<!--
{
    "params": {
        "type": "obj",
        "value": {
		"token":{
			"type":"string",
			"required":true,
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
            "car_brand": {
                "type": "int",
                "value": "1",
                "desc": "品牌id（0表示不限品牌）"
            },
            "car_model": {
                "type": "int",
                "value": "0",
                "desc": "型号id（0表示不限品牌型号）"
            },
            "car_emissions": {
                "type": "i  H " N ����}aD-�����jS9���� N{^+ � � � � � e  - 首页Y�IA8 %意见反馈cY�-�7 %通知私信cY�-�6 %最新动态cY�-�5 %在线抽奖cY�-�4 %试卷管理cY��33 管理端cY�>2 用户端cY�80 %帖子模块Y�Qp   %论坛管理/ %论坛管理Y�Ik. %用户管理
Y�I\, %帖子管理Y�I9+ %个人中心cY�V�) 搜索cY�V�& %	登录注册Y�L�% 活动Y���# %抽奖管理YĈ�" 排行榜YàK 交易Y��� %	登录注册Y��� 	登录Y�� %用户管理(Y��! 1核心参数管理cY�� %商品管理
Y�� %暂时无用cY�,�
 积分Y��	 交易Y�ڂ %用户信息Y�Խ %	登录注册Y��|$ 7房间及房型设置
cY��%$ 7房间列表及信息
cY� 		afscY��� 		fsdcY��� 	acY���    : 1
			},
			"posting_id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 2
			},
			"review_id": {
				"type": "int",
				"desc": "评论ID",
				"value": 2
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|type|int|否|帖子类型：1、问答帖，2、分享帖
|posting_id|int|否|帖子ID
|review_id|int|否|评论ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": 1,	
    "posting_id": 2,	
    "review_id": 2

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y�I�    �  �                                                                                                                                                                                    �B�< 1�7weekend/删除品牌信息#### delCarInfo
* 说明：删除品牌信息
* Method：POST
* url：/carboss/index.php/Admin/Forum/delCarInfo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"t  U�f�; 1�weekend/修改品牌信息#### editCarInfo
* 说明：修改品牌信息
* Method：POST
* url：/carboss/index.php/Admin/Forum/editCarInfo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"type": {
				"value":1,
				"type": "int",
				"required": true,
				"desc": "ID所属：1、品牌，2、型号，3、排量，4、年份"
			},
			"id": {
				"v  }    ��数示例

~~~
{	
    "page": 1,	
    "num": 50,	
    "type": "0",	
    "type_contents": "0",	
    "keywords": "红旗L7",	
    "car_model": []

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|帖子id
|∟title|string|帖子标题
|∟desc|string|帖子内容
|∟uid|int|用户uid
|∟icon|string|发帖人头像
|∟author|string|发帖人
|∟atime|int|发帖时间
|∟best|int|精华帖：0是；1否
|∟top|int|置顶帖：0是；1否
|∟agree|int|点赞数
|∟collect|int|收藏数
|∟review|int|评论数

* 返回示例

~~~
[	
    {		
        "id": "4",		
        "title": "乐视汽车，蔚来，到底是不是PPT产品",		
        "desc": "是的 yes ",		
        "uid": "45",		
        "icon": "/uploads/5/icon/aar.jpg",		
        "author": "Jack ma",		
        "atime": "15014856325",		
        "best": "0",		
        "top": "0",		
        "agree": "654",		
        "collect": "99",		
        "review": "99"
    
	}

]
~~~cY�b长春    ->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|页码
|page_limit|int|是|单页条数
|title|string|否|标题
|status|int|否|状态；1、未发布，2、已发布

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 2,	
    "page_limit": 10,	
    "title": "维护",	
    "status": 2

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟id|int|ID
|∟∟title|string|标题
|∟∟mtime|int|修改时间
|∟∟status|int|状态；1、未发布，2、已发布

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "id": "2",			
            "title": "例子",			
            "mtime": "150231276512",			
            "status": "2"
        
		}
    
	]

}
~~~Y��?  �	"name": {
				"type": "string",
				"desc": "奖品名称",
				"value": "金币50个"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"id": {
							"type": "int",
							"desc": "ID",
							"value": 2
						},
						"name": {
							"type": "string",
							"desc": "奖品名称",
							"value": "金币50个"
						},
						"type": {
							"type": "int",
							"desc": "奖品类型：1、实体奖品；2、金币，3、经验",
							"value": 2
						},
						"amount": {
							"type": "int",
							"desc": "虚拟奖品的值",
							"value": 50
						},
						"num": {
							"type": "int",
							"desc": "参与抽奖总数量",
							"value": 50
				  �title": {
				"value": "维护",
				"type": "string",
				"desc": "标题"
			},
			"status": {
				"type": "int",
				"desc": "状态；1、未发布，2、已发布",
				"value": 2
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"id": {
							"type": "int",
							"desc": "ID",
							"value": 2
						},
						"title": {
							"type": "string",
							"desc": "标题",
							"value": "例子"
						},
						"mtime": {
							"type": "int",
							"desc": "修改时间",
							"value": 150231276512
						},
						"status": {
							"type": "int",
							"desc": "状态；1、未发布，2、已发布",
							"value": 2
						}
					}
				}
			}
		}
	}
}
-    �  �  �ing/showInfo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "str�R�S 1�Wweekend0问答帖子列表#### listPostingQuestion
* 说明： 问答帖子列表
* Method：POST
* url：/carboss/index.php/Client/Posting/listPostingQuestion

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"page": {
				"type": "int",
				"desc": "起始页码",
				"value": 1
			},
			"num": {
				"type": "int",
				"desc": "一次显示数量",
				"value": 50
			},
			"condition": {
				"type": "arr",
				"desc": "筛选车型（顺序严格按照[品牌ID,型号ID,排量ID,年份ID],不限用‘0’代替�P�T 7�Mweekend0问答帖详细信息#### showQuestionDetail
* 说明： 问答帖详细信息
* Method：POST
* url：/carboss/index.php/Client/Posting/showQuestionDetail

<!--
{
	"params": {
		"type": "obj",
		"v    E   },
                "friend_uid": {
                    "type": "int",
                    "value": "11",
                    "desc": "好友的uid"
                },
                "friend_nickname": {
                    "type": "string",
                    "value": "Jackss",
                    "desc": "好友的用户名"
                },
                "friend_icon": {
                    "type": "string",
                    "value": "/uploads/5/icon/1.jpg",
                    "desc": "好友的头像"
                },
                "uid": {
                    "type": "int",
                    "value": "1",
                    "desc": "动态对应的uid（关注）"
                },
                "nickname": {
                    "type": "string",
                    "value": "",
                    "desc": "动态对应的用户名（关注）"
                },
                "icon": {
                    "type": "string",
                    "value": "",
                    �  �  �u>                                                                                                                                                                                                                           �Z�B 7�aweekend>设置电话票状态#### setStatus
* 说明：设置电话票状态
* Method：POST
* url：/pp/v1/Game/PhoneTicket/setStatus

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"id": {
				"value"  �   � 7�cweekend用户电话票列表#### showPhoneTicket
* 说明：用户电话票列表
* Method：POST
* url：/pp/v1/Client/Profile/showPhoneTicket

<!�{�C 7�#weekend用户电话票列表#### showPhoneTicket
* 说明：用户电话票列表
* Method：POST
* url：/pp/v1/Client/Profile/showPhoneTicket

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "1012hf748ty784gtf48r4r",
				"type": "string",
				"required": true,
				"desc": "登录凭证"
			}
		}
	},
	"response": {
		"type":"arr",
		"value"      �  �                                                                                             ��U 1�Mweekend0帖子评论列表#### showReview
* 说明： 帞;�U �5�U �,��)�U 3�weekend0评论/回答列表#### showReview
* 说明： 帖子评论/回答列表
* Method：POST
* url：/carboss/index.php/Client/Posting/showReview

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1、问答帖，2、分享帖",
				"value": 1
			},
			"posting_id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 2
			}
		}
	},
	"response": {
		"type": "arr",
		"value": {
			"id": {
				"type": "int",
				"desc": "评论ID",
				"value": 2
			},
    		"uid": {
				"type": "int",
				"desc": "用户ID",
				"value": 2
			},
    		"nickname": {
				"type": "string",
				"desc": "昵称",
				"value": "水货"
			},
			"icon":  z    token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"uid": {
					"type": "int",
					"desc": "用户ID",
					"value": 2
				},
				"nickname": {
					"type": "string",
					"desc": "用户昵称",
					"value": "例子"
				},
				"icon": {
					"type": "string",
					"desc": "头像",
					"value": "http://www.fairy.com/fairy/zm.jpg"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟uid|int|用户ID
|∟nickname|string|用户昵称
|∟icon|string|头像

* 返回示例

~~~
[	
    {		
        "uid": 2,		
        "nickname": "例子",		
        "icon": "http://www.fairy.com/fairy/zm.jpg"
    
	}

]
~~~Y�"6   ��                                                 �5� %�/admin默认页面#### chatList
* 说明：私信列表
* url：carboss/index.php/Client/Message/chatList

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsj�p� %�#admin7私信列表#### chatList
* 说明：私信列表
* url：carboss/index.php/Client/Message/chatList

<!-  T�Z� =�[weekend0邀请回答用户列表#### showInvite
* 说明：邀请回答用户列表
* Method：POST
* url：/carboss/index.php/Client/Posting/showInvite

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"  �  �� %�Mweekend0删除帖子#### delPosting
* 说明：删除帖子
* Method：POST
* url：/carboss/index.php/Client/Posting/delPosting

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string  �   � �r                                                                                                                            �t�V   %�70采纳答案#### editInfo
* 说明： 修改/添加帖子
* Method：POST
* url：/carboss/index.php/Client/Posting/editInfo


<!--
{
    "params": {
		"type":"obj",
��W   %�y钱包明细#### xx
* 说明：钱包明细
* Method：POST
* url：/pp/v1/Game/xx/xx

<!--
{
    "params": {
		"type":"obj",
		"value":{
		"token": {
            "value": "101sdhfeh8rthga3f1eed21",
            "type":"string",
			"required": true,
            "desc":"token"
        }
		�]�X   �签到#### checkIn
* 说明：签到
* Method：POST
* url：/pp/v1/Client/Profile/checkI  ���V   %�����V %�Iadmin0采纳答案#### adoptAnswer
* 说明： 采纳答案
* Method：POST
* url：/carboss/index.php/Client/Posting/adoptAnswer


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101du43hu9gube39gh3",
				"required":   �  �如拆卸发动机",
				"type": "string",
				"desc": "问题描述"
			},
			"img": {
				"type": "arr",
				"desc": "图片列表（只提交新的图片）",
				"value": {
					"type":"obj",
					"desc":"",
					"value":{
						"path":{
							"type":"string",
							"desc":"图片路径",
							"value":"/fairy/zm.jpg"
						},
						"rem":{
							"type":"string",
							"desc":"图片说明",
							"value":"哈哈哈哈嗝"
						}
					}
				}
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value": "1",
				"type": "int",
				"desc": "状态码：0： 成功，1：失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			},
			"id": {
				"value": "12",
				"type": "int",
				"desc": "帖子ID(修改帖子时不返回)"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|posting_id|int|否|帖子ID(新增帖子时不传)
|car_brand|i    A  A                             �U� I��I� =�9�;� =�weekend0分享帖统计栏数据#### showShareNum
* 说明：分享帖统计栏数据
* Method：POST
* url：/carboss/index.php/Admin/Posting/showShareNum

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"best": {
				"type": "int",
				"desc": "精华帖数量",
				"value": 22
			},
			"hot": {
				"type": "int",
				"desc": "已解决数量",
				"value": 22
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|best|int|精华帖数量
|hot|int|已解决数量

* 返回示例

~~~
{	
    "best": 22,	
    "hot": 22

}
~~~Y��e    nt|否|汽车品牌ID
|car_model|int|否|汽车型号系列ID
|car_emissions|int|否|排量ID
|car_year|int|否|年份ID
|title|string|否|问题
|desc|string|否|问题描述
|img|arr|否|图片列表（只提交新的图片）
|∟/|obj|否|---
|∟∟path|string|否|图片路径
|∟∟rem|string|否|图片说明

* 参数示例

~~~
{	
    "token": "101du43hu9gube39gh3",	
    "posting_id": 12,	
    "car_brand": 1,	
    "car_model": 1,	
    "car_emissions": 1,	
    "car_year": 1,	
    "title": "JEEP牧马人换发动机有哪些要注意的？",	
    "desc": "比如拆卸发动机",	
    "img": [		
        {			
            "path": "/fairy/zm.jpg",			
            "rem": "哈哈哈哈嗝"
        
		}
    
	]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功，1：失败
|errstr|string|错误提示
|id|int|帖子ID(修改帖子时不返回)

* 返回示例

~~~
{	
    "status": "1",	
    "errstr": " ",	
    "id": "12"

}
~~~Y��    "
							}
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|id|int|否|商品ID(添加时忽略)

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "id": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟category_id|int|商品分类ID
|∟category_name|string|商品分类名
|∟goods_list|arr|商品列表
|∟∟/|obj|---
|∟∟∟id|int|商品ID
|∟∟∟name|string|商品名
|∟∟∟fee_price|int|商品价格（分为单位）
|∟∟∟active|int|上下架标志（0=上架，1=下架）

* 返回示例

~~~
[	
    {		
        "goods_list": [			
            {				
                "id": "1",				
                "name": "100金币",				
                "fee_price": "100",				
                "active": "0"
            
			}
        
		],		
        "category_id": 1,		
        "category_name": "超值"
    
	}

]
~~~Yݑ�    "type":"string",
				"required": true,
				"desc":"密码（MD5处理后的字符串）"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"登录凭证"
			},
			"status": {
				"value": 1,
				"type":"int",
				"desc":"状态码:0:成功；1:失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|user|string|是|管理员账号
|pass|string|是|密码（MD5处理后的字符串）

* 参数示例

~~~
{	
    "user": "wk",	
    "pass": "101deu028u484yr92r3ur3"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|token|string|登录凭证
|status|int|状态码:0:成功；1:失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "status": 1,	
    "errstr": " "

}
~~~cYݐ�    �置业180㎡商品房一套！",
                "desc": "中奖结果"
            },
            "status": {
                "type": "int",
                "value": "0",
                "desc": "状态：<br/> 0、成功；1抽奖次数已用完；2、未填写手机号"
            },
            "errstr": {
                "type": "string",
                "value": "错误提示",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|result|string|中奖结果
|status|int|状态：<br/>0、成功；1抽奖次数已用完；2、未填写手机号
|errstr|string|错误提示

* 返回示例

~~~
{	
    "result": "天河万达置业180㎡商品房一套！",	
    "status": "0",	
    "errstr": "错误提示"

}
~~~cY��.    添加时忽略)
|name|string|否|商品名
|category|int|否|商品分类ID
|type|int|否|商品类型：1为付费购买，2为系统内部货币购买
|fee_price|int|否|商品付费价格(单位为分)
|active|int|否|上下架标志（0=上架，1=下架）
|coin|int|否|商品所含代币
|gold|int|否|商品所含金币
|diamond|int|否|商品所含钻石
|img_url|string|否|商品图片
|order|int|否|排序

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "id": 1,	
    "name": "101sdhfeh8rthga3f1eed21",	
    "category": 1,	
    "type": 1,	
    "fee_price": 100,	
    "active": 1,	
    "coin": 1,	
    "gold": 1,	
    "diamond": 1,	
    "img_url": "http://www.fairy.com/fairy/zzm.jpg",	
    "order": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1：失败
|id|int|商品ID(添加时返回)
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 0,	
    "id": 1,	
    "errstr": " "

}
~~~Yݒ�  �,
				"type":"int",
				"desc":"上下架标志（0=上架，1=下架）"
			},
			"coin": {
				"value": 1,
				"type":"int",
				"desc":"商品所含代币"
			},
			"gold": {
				"value": 1,
				"type":"int",
				"desc":"商品所含金币"
			},
			"diamond": {
				"value": 1,
				"type":"int",
				"desc":"商品所含钻石"
			},
			"img_url": {
				"value":"http://www.fairy.com/fairy/zzm.jpg",
				"type":"string",
				"desc":"商品图片"
			},
			"order": {
				"value": 1,
				"type":"int",
				"desc":"排序"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":0,
				"type":"int",
				"desc":"状态码：0：成功, 1：失败"
			},
			"id": {
				"value":1,
				"type":"int",
				"desc":"商品ID(添加时返回)"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|商品ID(    			"desc":"手机号码"
			},
			"code":{
				"value":"0907",
				"type":"string",
				"required": true,
				"desc":"验证码"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"登录凭证"
			},
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|phone|int|是|手机号码
|code|string|是|验证码

* 参数示例

~~~
{	
    "phone": 18881888188,	
    "code": "0907"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|token|string|登录凭证
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "status": 1,	
    "errstr": " "

}
~~~cY݆�   � �           ��! 7�Kweekend-用户举报的帖子#### showComplaint
* 说明：使用帖子管理-&gt;用户举报的帖子（不重复赘述）Y�ȎK�  1�K	�7��4� %�+admin7私信列表#### chatList
* 说明：私信列表
* url：carboss/index.php/Client/Message/chatList

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "arr",
        "desc": "私信",
        "value": {
            "type": "obj",
            "value": {
                "id": {
                    "type": "int",
                    "value": "3",
                    "required": true,
                    "desc": �� %�Q�w� %�1admin7�� %�Gadmin7私信列表#### chatList
* 说明：私信列表
* url：carboss/index.php/Client/  �  � "int",
							"desc": "用户经验值",
							"value": 2
						},
						"gold": {
							"type": "int",
							"desc": "用户可用金币",
							"value": 2
						},
						"follower_n": {
							"type": "int",
							"desc": "用户粉丝",
							"value": 2
						},
						"posting_n": {
							"type": "int",
							"desc": "用户发帖数",
							"value": 2
						},
						"login_last_time": {
							"type": "int",
							"desc": "最后登陆时间",
							"value": 15023167531
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|int|是|单页条数
|nickname|string|否|用户名
|phone|int|否|手机号码
|time|obj|否|时间范围
|∟min|int|否|起始时间
|∟max|int|否|最终时间

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 1,	
    "page_limit": 1,	
    "nickname": "zm",	
    "phone": 157618888888,	
    "t  Tlue":{
			"nickname": {
				"value": "wk",
				"type": "string",
				"desc": "昵称"
			},
			"displayname": {
				"value": "72900",
				"type": "string",
				"desc": "系统分配名称"
			},
			"phone": {
				"value": 18818181818,
				"type": "int",
				"desc": "电话"
			},
			"icon": {
				"value": "http://zm.fairy.com/fairy/zm.jpg",
				"type": "string",
				"desc": "头像链接"
			},
			"sex": {
				"value": 1,
				"type": "int",
				"desc": "性别（0=男，1=女）"
			},
			"birthday": {
				"value": "1994-07-29",
				"type": "string",
				"desc": "出生日期"
			},
			"city": {
				"value": 11010,
				"type": "int",
				"desc": "城市编号"
			},
			"qq": {
				"value": 1881888188,
				"type": "int",
				"desc": "QQ号"
			},
			"wechat": {
				"value": "My_Fairy",
				"type": "string",
				"desc": "微信号"
			},
			"facebook": {
				"value": "Faiey@zm.com",
				"type": "string",
				"desc": "facebook账号"
			},
			"twitter": {
				"value": "Faiey@zm.com",
				"type": "string",
		    ype": "string",
                    "desc": "性别：0、男，1、女"
                },
                "status": {
                    "value": 1,
                    "type": "int",
                    "desc": "用户关系：1为 好友，2 为临时好友"
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证

* 参数示例

~~~
{	
    "token": "101du43hu9gube39gh3"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟uid|int|用户ID
|∟nickname|string|昵称
|∟icon|string|头像
|∟sex|string|性别：0、男，1、女
|∟status|int|用户关系：1为好友，2为临时好友

* 返回示例

~~~
[	
    {		
        "uid": 101,		
        "nickname": "wk",		
        "icon": "http://www.fairy.com/fairy/zm.jpg",		
        "sex": "1",		
        "status": 1
    
	}

]
~~~Y驏                                              � ��                             �Q�Z   %�s默认页面#### editPoints
* 说明：修改积分
* Method：POST
* url：/pp/v1/Admin/Points/editPoints

<!--
{
    "params": {
		"typ�3�Z   =�修改推荐榜单时长#### editReferRankingTime
* 说明：修改推荐榜单时长
* Method：POST
* url：/pp/v1/Admin/CoreField/editReferRankingTime

<!--
{
    "params": {
		"type":"obj",
�)�Z   =�	修改推荐榜单时长#### editReferRan�$�Z   =�修改推荐榜单时长#### editReferRankingTime
* 说明：修改推荐榜单时长
* Method：POST
* url：/pp/v1/Admin/CoreField/editReferRankingTime

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
	  B�p�[   1�#修改好友上限#### editFriendLimit
* 说明：修改好友上限
* Method：POST
* url：/pp/v1/Admin/CoreField/editFriendLimit

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"value  w  Z {
							"type": "int",
							"value": "1005",
							"desc": "商品ID"
						},
						"name": {
							"type": "string",
							"value": "10钻石，100金币，10000代币",
							"desc": "商品名"
						},
						"fee_price": {
							"type": "int",
							"value": "1000",
							"desc": "商品价格（分为单位）"
						},
						"diamond": {
							"type": "int",
							"value": "10",
							"desc": "商品所含钻石数量"
						},
						"gold": {
							"type": "int",
							"value": "100",
							"desc": "商品所含金币数量"
						},
						"coin": {
							"type": "int",
							"value": "10000",
							"desc": "商品所含代币数量"
						},
						"img_url": {
							"type": "string",
							"value": "http://www.fairy.com/icon/zm.jpg",
							"desc": "商品图片"
						}
					}
				}
			}
		}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf7  X      ],
                        "desc": "son"
                    },
                    "desc": "帖子范围：0全部板块；1汽修问答；2汽修分享"
                },
                "dd": {
                    "type": "obj",
                    "value": {
                        "ddd": {
                            "type": "obj",
                            "value": {
                                "dddd": {
                                    "type": "int",
                                    "value": 5624,
                                    "desc": "son"
                                }
                            }
                        }
                    },
                    "desc": "帖子范围：0全部板块；1汽修问答；2汽修分享"
                },
                "ee": {
                    "type": "int",
                    "value": 5624,
                    "desc": "son1"
                }
            }
        }
    },
    "response": {
        "type": "obj",    art)
* url: /pp/v1/Client/Profile/iconUpload

* 参数:
~~~
！ ！ 这里必须使用 form multipart 格式！ ！
token: "101asdh8ferhf75gh857gh57g"      //token
~~~

<!--
{
    "response": {
		"type":"obj",
		"value":{
		"status": {
            "value":1,
            "type":"int",
            "desc":"状态码：0：成功,1失败, 16 上传失败"
        },
		"icon": {
            "value": "http://zm.fairy.com/fairy/zm.jpg",
            "type": "string",
            "desc": "头像链接"
        },
		"errstr": {
            "value": " ",
            "type":"string",
            "desc":"错误提示"
        }
		}
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1失败,16上传失败
|icon|string|头像链接
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "icon": "http://zm.fairy.com/fairy/zm.jpg",	
    "errstr": " "

}
~~~Y݇�                                                            �: "麻花藤",
                            "desc": "姓名"
                        },
                        "slogan": {
                            "type": "string",
                            "value": "5",
                            "desc": "签名"
                        },
                        "points": {
                            "type": "int",
                            "value": "589",
                            "desc": "积分"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|tok地方en

* 参数示例

~~~
{	
    "token": "safdfasfafefaew"

}
~~~
* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|[]|arr|是|格式为arr
|/|obj|是|****
|name|string|否|排行类型名
|list|arr|否|列表
|∟/|string|否|****

* 返回示例

~~~
[	
    {		
        "name": "富豪榜",		
        "list": {			
                "type": "obj",			
            "value": {				
                "uid": {					
                    "type": "int",					
                    "value": "43",					
                    "desc": "用户uid"
                
				},				
                "icon": {					
                    "type": "string",					
                    "value": "/uploads/1/icon/dd.jpg",					
                    "desc": "头像"
                
				},				
                "nickname": {					
                    "type": "string",					
                    "value": "麻花藤",					
                    "desc": "姓名"
                
				},				
                "slogan": {					
                    "type": "string",					
                    "value": "5",					
                    "desc": "签名"
                
				},				
                "points": {					
                    "type": "int",					
                    "value": "589",					
                    "desc": "积分"
                
				}
            
			}
        
		}
    
	}

]
~~~cY�=�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                �f�Y   	%�默认页面#### RankList
* 说明：排行榜
* url：/carboss/index.php/Client/Rank/RankList

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
              a  ~ url：/pp/v1/Client/Ranking/city

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"type1":{
				"value":"month",
				"type":"string",
				"required": true,
				"desc":"日期分类：total:长期, week:本周, month:本月, refer:推荐"
			},
			"type2":{
				"value":"points",
				"type":"string",
				"required": true,
				"desc":"其他分类：points:分数榜,diamond_in:收益榜（钻）,diamond_out:贡献榜（钻）"
			}
		}
    },
    "response":{
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"ranking":{
					"value":1,
					"type":"int",
					"desc":"排名"
				},
				"uid":{
					"value":8,
					"type":"int",
					"desc":"用户ID"
				},
				"nickname":{
					"value":"fairy",
					"type":"string",
					"desc":"昵称"
				},
				"icon":{
					"value":"http://zm.fairy.com/fairy/zm.jpg",
					"type":"string",
					"desc":"用户头像链接"
				},
  5": "资料完善情况；0已完善；1未完善"
            },
		
            "latest": {
                "type": "obj",
			
                "desc": "最新动态(一条)",
                "value": {
				   "type": {
                        "type": "int",
                        "value": "1",
                        "desc": "动态类型：<br/>0点赞；1发帖；2回复;<br/>3收藏；4评论；<br/>5关注;6被关注"
                    },
                    "id": {
                        "type": "int",
                        "value": "1",
                        "desc": "帖子id"
                    },
                 
                    "best": {
                        "type": "int",
                        "value": "0",
                        "desc": "精华帖：0是；1否"
                    },
                    "top": {
                        "type": "int",
                        "value": "0",
                        "desc": "置顶帖：0是；1否"
                    },
          "token"
			},
			"id":{
				"type": "int",
				"value": 11,
				"desc": "货币兑换比例 ID"
			},
			"num":{
				"type": "int",
				"value": 100,
				"desc": "1单位的货币兑换多少低一级货币"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status":{
				"type": "int",
				"value": 1,
				"desc": "状态码：0 为成功，1为失败"
			},
			"errstr":{
				"type": "string",
				"value": " ",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|id|int|否|货币兑换比例ID
|num|int|否|1单位的货币兑换多少低一级货币

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "id": 11,	
    "num": 100

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0为成功，1为失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Yݖ�    ent/Lottery/drawTurntable
<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：成功， 1：失败"
			},
			"lottery": {
				"value":1,
				"type":"int",
				"desc":"中奖项的ID"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功，1：失败
|lottery|int|中奖项的ID
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "lottery": 1,	
    "errstr": " "

}
~~~cYݎ{            � �K                                                          �6�> 1�#admin0删除帖子图片#### delImg
* 说明：删除帖子图片
* Method：POST
* url：/carboss/index.php/Client/Posting/delImg

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1、问答帖，2、分享帖",
				"value��> 1�kadmin0删除帖子图片#### delImg
* 说明：删除帖子图片
* Method：POST
* url：/carboss/index.php/Client/Posting/delImg

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1、问答帖，2、分享帖",
				"value": 1
			},
			"posting_id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 2
			},
			"img_id": {
				"type": "arr",
				"desc": "�  �    
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证

* 参数示例

~~~
{	
    "token": "1012hf748ty784gtf48r4r"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|电话票ID
|∟uid|int|用户ID
|∟to_uid|int|对应通话用户ID
|∟to_nickname|string|对应通话用户昵称
|∟direction|int|是否可双向通话：0、否，1、是
|∟duration|int|通话时长（毫秒为单位）
|∟expire_at|int|过期时间（精确到毫秒）
|∟status|int|使用状态：0、正常，1、锁定，2、使用中，3、已使用，4、过期
|∟atime|int|获取电话票时间

* 返回示例

~~~
[	
    {		
        "id": 2,		
        "uid": 2,		
        "to_uid": 3,		
        "to_nickname": "zm",		
        "direction": 1,		
        "duration": 3600,		
        "expire_at": 1502325453,		
        "status": 2,		
        "atime": 1502315453
    
	}

]
~~~cY��  �ype": "string",
				"desc": "角色名"
			},
			"status":{
				"value": 1,
				"type": "int",
				"desc": "状态:1、正常，0、禁用"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"id": {
							"type": "int",
							"desc": "ID",
							"value": 2
						},
						"title": {
							"type": "string",
							"desc": "角色名",
							"value": "Spuer"
						},
						"rem": {
							"type": "string",
							"desc": "描述",
							"value": "Spuer"
						},
						"status": {
							"type": "int",
							"desc": "状态:1、正常，0、禁用",
							"value": 1
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:    		"required": true,
				"desc":"操作类型：1：加，2：减"
			},
			"number":{
				"value":729,
				"type":"int",
				"required": true,
				"desc":"积分值"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|src|int|是|操作来源：1：游戏获得
|type|int|是|操作类型：1：加，2：减
|number|int|是|积分值

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "src": 1,	
    "type": 1,	
    "number": 729

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY�7�    int",
								"desc":"数值"
							}
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|tag_id|arr|否|标签ID列表
|∟/|int|否|标签ID

* 参数示例

~~~
{	
    "tag_id": [123],	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟tag_id|int|标签ID
|∟list|arr|排行列表
|∟∟/|obj|---
|∟∟∟ranking|int|排名
|∟∟∟uid|int|用户ID
|∟∟∟nickname|string|用户名
|∟∟∟icon|string|用户头像链接
|∟∟∟number|int|数值

* 返回示例

~~~
[	
    {		
        "list": [			
            {				
                "ranking": "1",				
                "uid": "8",				
                "nickname": "1881888818",				
                "icon": "http://zm.fairy.com/fairy/zm.jpg",				
                "number": "48"
            
			}
        
		],		
        "tag_id": 1
    
	}

]
~~~cYݎ�    ent/Ranking/listTag

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"type": "string",
				"required": true,
				"value": "101asdh8ferhf75gh857gh57g",
				"desc": "token"
			}
		}
    },
    "response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"id":{
					"type": "int",
					"value": 11,
					"desc": "标签项 ID"
				},
				"name":{
					"type": "string",
					"value": "My Lord",
					"desc": "标签名"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|标签项ID
|∟name|string|标签名

* 返回示例

~~~
[	
    {		
        "id": 11,		
        "name": "My Lord"
    
	}

]
~~~cYݎC                                                                                                                 		},
				"number":{
					"value":48,
					"type":"int",
					"desc":"数值"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type1|string|是|日期分类：total:长期, week:本周, month:本月, refer:推荐
|type2|string|是|其他分类：points:分数榜,diamond_in:收益榜（钻）,diamond_out:贡献榜（钻）

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type1": "month",	
    "type2": "points"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟ranking|int|排名
|∟uid|int|用户ID
|∟nickname|string|昵称
|∟icon|string|用户头像链接
|∟number|int|数值

* 返回示例

~~~
[	
    {		
        "ranking": 1,		
        "uid": 8,		
        "nickname": "fairy",		
        "icon": "http://zm.fairy.com/fairy/zm.jpg",		
        "number": 48
    
	}

]
~~~cY�:                                                           �": "收藏数"
            },
            "question_n": {
                "type": "int",
                "value": "99",
                "desc": "我的问题数"
            },
            "answe_nr": {
                "type": "int",
                "value": "919",
                "desc": "我的回答数"
            },
            "share_n": {
                "type": "int",
                "value": "58",
                "desc": "我的分享数"
            },
          
            "notice_n": {
                "type": "int",
                "value": "10",
                "desc": " 新通知数目"
            },
            "chat_n": {
                "type": "int",
                "value": "1",
                "desc": "新私信数目"
            },
            "task": {
                "type": "int",
                "value": "1",
                "desc": "待领奖任务数"
            },
            "info_finish": {
                "type": "int",
                "value": "0",
                "desc   � �": "金币总额",
                "value": "58615"
            },
            "rank": {
                "type": "int",
                "desc": "富豪榜排名",
               �4� +�%admin9我的经验值#### exp
* 说明：我的经验值
* url：carboss/index.php/Client/Award/exp

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhg�}� +�7admin9我的经验值#### exp
* 说明：我的经验值
* url：carboss/index.php/Client/Award/exp

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "honor": {
                "type": "string",
                "des   N    },
			"phone": {
				"type": "int",
				"desc": "手机号码",
				"value": 15761235435
			},
			"group_id": {
				"type": "int",
				"desc": "角色组ID",
				"value": 12
			},
			"status": {
				"type": "int",
				"desc": "账号状态：1、正常，2、禁用",
				"value": 1
			},
			"rem": {
				"type": "string",
				"desc": "备注",
				"value": "炒鸡管理员"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|uid|int|否|ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "uid": 2

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|uid|int|ID
|realname|string|用户名
|phone|int|手机号码
|group_id|int|角色组ID
|status|int|账号状态：1、正常，2、禁用
|rem|string|备注

* 返回示例

~~~
{	
    "uid": 2,	
    "realname": "zm",	
    "phone": 15761235435,	
    "group_id": 12,	
    "status": 1,	
    "rem": "炒鸡管理员"

}
~~~Y�P�   ' �'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           �8�a 1��%admin+我的个人资料#### showInfoMine
* 说明：我的个人资料
* url：carboss/index.php/Client/Profile/showInfoMine
<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
   ��Y�` 	1�madmin【】【】【】#### Search
* 说明：登录
* url：/ykd/index.php/Merchant/Dragon/Search

  �    				"type":"int",
				"desc":"数量"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|to_user|int|是|目标用户ID,当目标为系统时值为0
|src|int|是|操作来源：3、碰碰门票，4、碰碰竞价
|type|int|是|货币类型：1:diamond(钻石)，2:gold(金币),3:coin(代币)
|number|int|是|数量

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "to_user": 1,	
    "src": 1,	
    "type": 1,	
    "number": 729

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY���  �",
                    "desc": "发帖人"
                },
                "atime": {
                    "type": "int",
                    "value": "15014856325",
                    "desc": "发帖时间"
                },
                "comments": {
                    "type": "string",
                    "value": "好车，但是不买",
                    "desc": "一楼评论"
                }
            }]
        
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|h|obj|否|---
|∟id|int|否|id
|∟name|string|否|id
|∟model|arr|否|---
|∟/|obj|是|---
|∟∟id|int|否|id
|∟∟name|string|否|id
|∟∟emissions|arr|否|---
|∟∟/|obj|是|---
|∟∟∟id|int|否|id
|∟∟∟name|string|否|排量
|∟∟∟year|arr|否|---
|∟∟∟/|obj|是|---
|∟∟∟∟id|int|否|last_id
|∟∟∟∟name|string|否|sasa

* 参数示例

~~~
{	
    "h": {		
        "id": "2",		
        "name": "红旗",		
        "model": [			
  �                                   &quot;value&quot;: &quot;我是马云&quot;,
                                        &quot;type&quot;: &quot;string&quot;,
                                        &quot;required&quot;: true,
                                        &quot;desc&quot;: &quot;内容&quot;
                                    },
                                    &quot;atime&quot;: {
                                        &quot;type&quot;: &quot;int&quot;,
                                        &quot;value&quot;: &quot;157968662&quot;,
                                        &quot;required&quot;: true,
                                        &quot;desc&quot;: &quot;时间&quot;
                                    }
                                }
                            }
                        },
                        &quot;chat&quot;: {
                            &quot;type&quot;: &quot;arr&quot;,
                            &quot;value&quot;: {
                                &q  �<!--
{
    "params": {
        "type": "obj",
        "value": {
            "type": "obj",
            "value": {
                "h": {
                    "type": "obj",
                    "value": {
                        "id": {
                            "value": 2,
                            "type": "int",
                            "desc": "id"
                        },
                        "name": {
                            "value": "红旗",
                            "type": "string",
                            "desc": "id"
                        },
                        "model": {
                            "type": "arr",
                            "value": {
                                "type": "obj",
                                "value": {
                                    "id": {
                                        "value": 2,
                                        "type": "int",
                                        "desc": "id"
                                           {				
                "id": "2",				
                "name": "红旗",				
                "emissions": [					
                    {						
                        "id": "2",						
                        "name": "红旗",						
                        "year": [							
                            {								
                                "id": "2",								
                                "name": "红旗"
                            
							}
                        
						]
                    
					}
                
				]
            
			}
        
		]
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|∟title|string|帖子标题
|∟author|string|发帖人
|∟atime|int|发帖时间
|∟comments|string|一楼评论

* 返回示例

~~~
[	
    {		
        "title": "乐视汽车，蔚来，到底是不是PPT产品",		
        "author": "Jack ma",		
        "atime": "15014856325",		
        "comments": "好车，但是不买"
    
	}

]
~~~cY���  �         },
                                    "name": {
                                        "value": "H7",
                                        "type": "string",
                                        "desc": "id"
                                    },
                                    "emissions": {
                                        "type": "arr",
                                        "value": {
                                            "type": "obj",
                                            "value": {
                                                "id": {
                                                    "value": "4",
                                                    "type": "int",
                                                    "desc": "id"
                                                },
                                                "name": {
                                                    "value": "7.2L",
                                                    "t  �               &quot;desc&quot;: &quot;通知提示&quot;
            },
            &quot;data&quot;: {
                &quot;type&quot;: &quot;arr&quot;,
                &quot;value&quot;: {
                    &quot;type&quot;: &quot;obj&quot;,
                    &quot;value&quot;: {
                        &quot;notice&quot;: {
                            &quot;type&quot;: &quot;arr&quot;,
                            &quot;value&quot;: {
                                &quot;type&quot;: &quot;obj&quot;,
                                &quot;value&quot;: {
                                    &quot;id&quot;: {
                                        &quot;type&quot;: &quot;int&quot;,
                                        &quot;value&quot;: &quot;3&quot;,
                                        &quot;required&quot;: true,
                                        &quot;desc&quot;: &quot;通知id&quot;
                                    },
                                    &quot;content&quot;: {
       �ype": "string",
                                                    "desc": "排量"
                                                },
                                                "year": {
                                                    "type": "arr",
                                                    "value": {
                                                        "type": "obj",
                                                        "value": {
                                                            "id": {
                                                                "value": "4",
                                                                "type": "int",
                                                                "desc": "last_id"
                                                            },
                                                            "name": {
                                                                "value": "2015",
                                       �                 &quot;value&quot;: &quot;157968662&quot;,
                                      
                                        &quot;desc&quot;: &quot;时间&quot;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    &quot;token&quot;: &quot;hfsdhiufhgbflsjfa&quot;

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|brief|string|通知提示
|data|arr|---
|∟/|obj|---
|∟∟notice|arr|---
|∟∟/|obj|---
|∟∟∟id|int|通知id
|∟∟∟content|string|内容
|∟∟∟atime|int|时间
|∟∟chat|arr|---
|∟∟/|obj|---
|∟∟∟id|int|私信id
|∟∟∟icon|string|发帖人头像
|∟∟∟nickname|string|昵称
|∟∟∟content|string|内容
|∟�  �                           "type": "string",
                                                                "desc": "sasa"
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    },
    "response": {
        "type": "arr",
        "value": [
            {
                "title": {
                    "type": "string",
                    "value": "乐视汽车，蔚来，到底是不是PPT产品",
                    "desc": "帖子标题"
                },
                "author": {
                    "type": "string",
                    "value": "Jack ma  7Client/ApplyCheck/applyStudy

&lt;!--
{
    &quot;params&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			&quot;token&quot;: {
				&quot;value&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;required&quot;:true,
				&quot;desc&quot;:&quot;登录凭证&quot;
			},
			&quot;name&quot;:{
				&quot;value&quot;:&quot;令狐冲&quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;required&quot;:true,
				&quot;desc&quot;:&quot;开户姓名&quot;
			},
			&quot;img_id&quot;:{
				&quot;value&quot;:&quot;5&quot;,
				&quot;type&quot;:&quot;int&quot;,
				&quot;required&quot;:true,
				&quot;desc&quot;:&quot;入金截图id&quot;
			},
			&quot;number&quot;:{
				&quot;value&quot;:&quot;5&quot;,
				&quot;required&quot;:true,
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;客户编号&quot;
			}
		}
    },
    &quot;response&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			
			&quot;status&quot;: {
				&q                                     �E�b %�Madmin+好友列表#### frendsList
* 说明：好友列表
* url：carboss/index.php/Client/UserInfo/frendsList

<!--
{
    "params"�4�b %�+admin+好友列表#### frendsList
* 说明：列表
* url：carboss/index.php/Client/UserInfo/frendsList

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "type": {
                "type": "int",
                "required": true,
                "value": "1",
                "desc": "好友类型：<br/>1、我的粉丝；2、我的关注"
            }
        }
    },
   �R�b %�gadmin+好友列表#### frendsList
* 说明：列表
* url：carboss/index.php/Client/Profile/frendsList

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
             �  �uot;type&quot;: &quot;obj&quot;,
                                &quot;value&quot;: {
                                    &quot;id&quot;: {
                                        &quot;type&quot;: &quot;int&quot;,
                                        &quot;value&quot;: &quot;3&quot;,
                                        &quot;required&quot;: true,
                                        &quot;desc&quot;: &quot;私信id&quot;
                                    },
                                    &quot;icon&quot;: {
                                        &quot;type&quot;: &quot;string&quot;,
                                        &quot;value&quot;: &quot;/uploads/5/icon/aar.jpg&quot;,
                                        &quot;desc&quot;: &quot;发帖人头像&quot;
                                    },
                                    &quot;nickname&quot;: {
                                        &quot;type&quot;: &quot;string&quot;,
                                        &quot;value&  �           "desc": "等级图url"
            },
            "gold": {
                "type": "int",
                "value": "965",
                "desc": "金币数"
            },
            "exp": {
                "type": "int",
                "value": "1000",
                "desc": "经验值"
            },
            "checkin": {
                "type": "int",
                "value": "1",
                "desc": "签到，0已签到；1未签到"
            },
            "follower_n": {
                "type": "int",
                "value": "965",
                "desc": "粉丝数"
            },
            "follow_n": {
                "type": "int",
                "value": "1",
                "desc": "关注数"
            },
            "collected_n": {
                "type": "int",
                "value": "963259",
                "desc": "被收藏数"
            },
            "collect_n": {
                "type": "int",
                "value": "99",
                "desc  �quot;: &quot;Jack ma&quot;,
                                        &quot;desc&quot;: &quot;昵称&quot;
                                    },
                                    &quot;content&quot;: {
                                        &quot;value&quot;: &quot;我是马云&quot;,
                                        &quot;type&quot;: &quot;string&quot;,
                                  
                                        &quot;desc&quot;: &quot;内容&quot;
                                    },
									&quot;read&quot;: {
                                        &quot;value&quot;: &quot;0&quot;,
                                        &quot;type&quot;: &quot;int&quot;,                            
                                        &quot;desc&quot;: &quot;已读状态，0已读，1未读&quot;
                                    },
                                    &quot;atime&quot;: {
                                        &quot;type&quot;: &quot;int&quot;,
                         �OST
* url：/pp/v1/Client/Ranking/all

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required": true,
				"desc":"token"
			},
			"type1":{
				"value":"month",
				"type":"string",
				"required": true,
				"desc":"日期分类：total:长期, week:本周, month:本月, refer:推荐"
			},
			"type2":{
				"value":"points",
				"type":"string",
				"required": true,
				"desc":"其他分类：points:分数榜,diamond_in:收益榜（钻）,diamond_out:贡献榜（钻）"
			}
		}
    },
    "response":{
		"type":"arr",
		"value":{
			"type":"obj",
			"value": {
				"ranking":{
					"value":1,
					"type":"int",
					"desc":"排名"
				},
				"uid":{
					"value":8,
					"type":"int",
					"desc":"用户ID"
				},
				"nickname":{
					"value":"fairy",
					"type":"string",
					"desc":"昵称"
				},
				"icon":{
					"value":"http://zm.fairy.com/fairy/zm.jpg",
					"type":"string",
					"desc":"用户头像链接"
		�  } pU4 } �                                                                                                         �
�h %�Wadmin8添加反馈#### add
* 说明：添加反馈
* url：carboss/index.php/Client/Suggest/add

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
			 "title": {
                "type": "string",
                "required": true,
                "value": "服务太好了，为毛不收费",
                "desc": "标题"
            },
			 "content": {
                "type": "string",
                "required": true,
                  ��g   %3题库管理cY���f   %3试卷管理cY���e   3登录cY�f�d   %2完善资料cY�Q   o   �{+通知#### notice
* 说明：通知
* url：carboss/index.php�c   %+默认页面cY�r    �凭证"
			},
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 登录成功， 1 失败， 10001 注册成功"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|type|int|是|登录方式：1、微信授权登录（openid），2、专家账号密码登录（user/pass）
|code|string|否|微信code
|user|string|否|账号
|pass|string|否|密码(已经过md5加密)

* 参数示例

~~~
{	
    "type": 2,	
    "code": "zm_uf829a7d3j89991aui34a34",	
    "user": "cc",	
    "pass": "e10adc3949ba59abbe56e057f20f883e"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|token|string|登录凭证
|status|int|状态码：0登录成功，1失败，10001注册成功
|errstr|string|错误提示

* 返回示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "status": 1,	
    "errstr": " "

}
~~~Y���    S  S                                                                         ��E %�oadmin审核简述####流程描述

	-&gt;用户操作完成
	-&gt;申请（
			1、记录该数据位置；
			2、若为数据变更申请，记录变更的数据（删除操作也属于数据变更）；
			）
	-&gt;管理员审核（
		1. 通过：修改申请状态并执行相应的数据变更
		2. 拒绝：修改申请状态
		）

	
#### 涉及页面
- 用户端：
列表
- 管理端：
列表
详情（公用用户端页面，根据API返回字段区分）


    
#### 审核数据表 check

|字段|类型|空|注释|
|:----    |:-------    |:--- |-- -|------      |
|id	 		 |int(10)     |是		 |	         主键 |
|uid	 		 |int(10)     |是		 |	上传者id           |
|o_uid	 		 |int(10)     |否		 |	审核者id           |
|desc		 |varchar(20) |是	    |	 申请描述	|
|type	 |varchar(50) |是      |	申请类型 &lt;/br&gt; 1文档 2书籍 3视频 4论坛修改 ... |
|tid	 |varchar(20) |是	    |	  �    C  C�              ��2�o 1�admin7系统消息详�1�o 1�admin7系统消息详情#### noticeDetail
* 说明：系统消息详情
* url：carboss/index.php/Client/Message/noticeDetail

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "id": {
                "type": "int",
                "value": "3",
                "required": true,
                "desc": "通知id"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
   
            "id": {
                "type": "int",
                "value": "3",
                "required": true,
                "desc": "通知id"
            },
            "title": {
                "value": "我是马云",
                "type": "string",
                "required": true,
                "  � ����fL2� �r�3Q�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            G '申请/审核cY���?E %在线交流cY��a?F %在线作业cY��i?� C 随意碰Y��D %资源中心cY�f?@ %登录注册cY�WJ?H 通知cY�y?B %个人中心cY�]T?A 管理端cY�WR   登录cY�WJ?? 用户端cY�WB> 电话票Y��S= %用户信息Y�< %个人信息Y�>�; 	登录Y�=�: %系统管理Y��+9 E任务&amp;金币&amp;经验cY�
�    � @ �                                                                                                                                                                                                                                                   �5�9 =�weekend/修改获奖记录备注#### editAwardOrder
* 说明：修改获奖记录备注
* Method：POST
* url：/carboss/index.php/Admin/Forum/editAwardOrder

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true  ?�4�8 %�+admin8图片删除#### imgDel
* 说明：图片删除
* url：carboss/index.php/Client/Suggest/imgDel

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
			 "id": {
                "type": "int",
                "required": tru  �  �               "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "icon": {
                "type": "string",
                "value": "/uploads/5/icon/aar.jpg",
                "desc": "发帖人头像"
            },
            "nickname": {
                "type": "string",
                "value": "Jack ma",
                "desc": "昵称"
            },
            "sex": {
                "type": "int",
                "value": "0",
                "desc": "性别：0、男；1、女"
            },
			  "sign": {
                "type": "string",
                "value": "I know nothing about money",
                "desc": "个性签名"
            },
            "honor": {
                "type": "string",
                "value": "大师",
                "desc": "等级"
            },
				 "honor_url": {
                "type": "string",
                "value": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",
         ",
				"desc": "token"
			},
			"posting_id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 2
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1、问答帖，2、分享帖",
				"value": 1
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状态码：0 成功， 1失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|posting_id|int|否|帖子ID
|type|int|否|帖子类型：1、问答帖，2、分享帖

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "posting_id": 2,	
    "type": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y��   > > �                                               �?�k   	�]例子#### examp�M�l 1�Sadmin我看过的帖子#### review
* 说明：我看过的帖��m �}admin+签到#### checkIn
* 说明：签到
* url：carboss/index.php/Client/Profile/checkIn

��l 1�Madmin+我看过的帖子#### viewd
* 说明：我看过的帖子
* url：carboss/index.php/Client/UserInfo/viewd

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "arr",
		"desc": "最近10天的帖子",
        "value": {
            "type": "obj",
            "value": {
    ��>�k   	�[例子#### example
* 说明：例子
* Method：POST
* url：/example/index.php/Home/Example/example

<!--
{
	"params": {

	},
	"response": {

	}
}
-->
#请检查json格式#cY�i�    ��∟read|int|已读状态，0已读，1未读
|∟∟∟atime|int|时间

* 返回示例

~~~
{	
    &quot;brief&quot;: &quot;1条通知；88条私信&quot;,	
    &quot;data&quot;: [		
        {			
            &quot;notice&quot;: [				
                {					
                    &quot;id&quot;: &quot;3&quot;,					
                    &quot;content&quot;: &quot;我是马云&quot;,					
                    &quot;atime&quot;: &quot;157968662&quot;
                
				}
            
			],			
            &quot;chat&quot;: [				
                {					
                    &quot;id&quot;: &quot;3&quot;,					
                    &quot;icon&quot;: &quot;/uploads/5/icon/aar.jpg&quot;,					
                    &quot;nickname&quot;: &quot;Jack ma&quot;,					
                    &quot;content&quot;: &quot;我是马云&quot;,					
                    &quot;read&quot;: &quot;0&quot;,					
                    &quot;atime&quot;: &quot;157968662&quot;
                
				}
            
			]
        
		}
    
	]

}
~~~Y�#    
				&quot;type&quot;: &quot;string&quot;,
				&quot;required&quot;: true,
				&quot;desc&quot;: &quot;token&quot;
			}
		}
	},
	&quot;response&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			&quot;status&quot;: {
				&quot;type&quot;: &quot;int&quot;,
				&quot;desc&quot;: &quot;状态码:0、成功，1、失败&quot;,
				&quot;value&quot;: 1
			},
			&quot;errstr&quot;: {
				&quot;type&quot;: &quot;string&quot;,
				&quot;desc&quot;: &quot;错误提示&quot;,
				&quot;value&quot;: &quot;例子&quot;
			}
		}
	}
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    &quot;token&quot;: &quot;101example0729xxx&quot;

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    &quot;status&quot;: 1,	
    &quot;errstr&quot;: &quot;例子&quot;

}
~~~Y�i�    : 29,
				"type": "int",
				"required": true,
				"desc": "电话票ID"
			},
			"status": {
				"value": 29,
				"type": "int",
				"required": true,
				"desc": "状态：0、正常，1、锁定，2、使用中，3、已使用，4、过期"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|id|int|是|电话票ID
|status|int|是|状态：0、正常，1、锁定，2、使用中，3、已使用，4、过期

* 参数示例

~~~
{	
    "id": 29,	
    "status": 29

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": "例子"

}
~~~Y��m    |  |{
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":� � 1�3weekend/导入车型数据#### uploadCarBrand
* 说明: 导入车型数据
* Method：POST(form multipart)
* url: /carboss/index.php/Admin/Forum/uploadCarBrand

* 参数:
~~~
！ ！ 这里必须使用 form multipart 格式！ ！
！ ！只上传图片，返回图片路径！ ！
token: "101asdh8ferhf75gh857gh57g"      //token
~~~

<!--
{
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0、成功，1、导入失败，16、上传失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0、成功，1、导入失败，16、上传失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~2Y��   � ��                                                                                                                                                                                    �4�s G�	admin5最新&amp;我的中奖信息#### showData
* 说明：最新&我的中奖信息
* url：carboss/index.php/Client/Lottery/showInfo

<!--
{
    "params": {
        "type": "obj",
        "valu�Z�s G�Uadmin5最新&amp;我的中奖信息#### showInfo
* 说明：最新&我的中奖信息
* url：carboss/index.php/Client/Lottery/showInfo

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "mine": {
                "type": "arr",
				"desc": "我的历史中奖数据",
                "value": {
                -    ?  ?                                              �2�l��)�l 1�	admin+我看过的帖子#### viewd
* 说明：我看过的帖子
* url：carboss/index.php/Client/Profile/viewd

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
				"page": {
                "type": "int",
                "desc": "页码",
                "required": true,
                "value": 1
            },
            "num": {
                "type": "int",
                "desc": "一次显示数量",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {
        "type": "arr",
		"desc": "最近10天的帖子",
        "value": {
            "type": "obj",
            "value": {
                "date": {
                    "type": "string",
                    "va  �           "desc": "选项名称"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|car_brand|int|否|品牌id（0表示不限品牌）
|car_model|int|否|型号id（0表示不限品牌型号）
|car_emissions|int|否|排量id（0表示不限排量）
|car_year|int|否|年份id（0表示不限年份）

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "car_brand": "1",	
    "car_model": "0",	
    "car_emissions": "0",	
    "car_year": "5"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|desc|string|返回结果类型
|data|arr|---
|∟/|obj|选项列表
|∟∟id|int|选项id
|∟∟name|string|选项名称

* 返回示例

~~~
{	
    "desc": "车型",	
    "data": [		
        {			
            "id": "4",			
            "name": "斯巴鲁"
        
		}
    
	]

}
~~~cY�_E啊啊   � �                         },
                            "collect": {
                                "type": "int",
                                "value": "99",
                                "desc": "收藏数"
                            },
                            "review": {
                                "type": "int",
                                "value": "99",
                                "desc": "评论数"
                            }
                 ��n 1�G	admin7系统消息列表#### noticeList
* 说明：系统消息列表
* url：carboss/index.php/Client/Message/noticeList

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {

                            "type": "arr",
							  "desc": "通知",
                            "value":  ]  nt",
                "value": "0",
                "desc": "排量id（0表示不限排量）"
            },
            "car_year": {
                "type": "int",
                "value": "5",
                "desc": "年份id（0表示不限年份）"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "desc": {
                "type": "string",
				 "desc": "返回结果类型",
                "value": "车型"
            },
            "data": {
                "type": "arr",
                "value": {
                    "type": "obj",
                    "desc": "选项列表",
                    "value": {
                        "id": {
                            "type": "int",
                            "value": "4",
                            "desc": "选项id"
                        },
                        "name": {
                            "type": "string",
                            "value": "斯巴鲁",
                        \ ��\                                                                                                                                                                                                                                                                                                                                              �+ �3admin申请#### notice
* 说明：通知
* url：carboss/index.php/Client/UserInfo/notice

&lt  �s �Cadmin申请#### suggestionUpload
* 说明：意见反馈
* url：carboss/index.php/Client/UserInfo/suggestionUpload
* 参数：
---
	！ ！ 这里必须使用 form multipart 格式！ ！ 
	token: &quot;afdsajfk;dlsa.jf89iehn&quot;    		   ��- ;�weekend操作返回模板10-13#### example
* 说明：例子
* Method：POST
* url：/example/index.php/Home/Example/example

&lt;!--
{
	&quot;params&quot;: {
		&quot;type&quot;: &quot;obj&quot;,
		&quot;value&quot;: {
			&quot;token&quot;: {
				&quot;value&quot;: &quot;101example0729xxx&quot;,  �   "desc": "金币总额",
                "value": "58615"
            },
            "rank": {
                "type": "int",
                "desc": "富豪榜排名",
                "value": "126"
            },
            "data": {
                "type": "arr",
                "desc": "",
                "value": {
                    "type": "obj",
                    "value": {
                        "desc": {
                            "type": "string",
                            "desc": "记录描述",
                            "value": "连续签到7天"
                        },
                        "gold": {
                            "type": "int",
                            "desc": "金币值",
                            "value": "50"
                        },
                        "type": {
                            "type": "int",
                            "desc": "记录类型 1收入；2支出",
                            "value": "1"
                        },
                            "atime": {
                            "type": "string",
                            "desc": "记录时间",
                            "value": 1485411452
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|gold|int|金币总额
|rank|int|富豪榜排名
|data|arr|---
|∟/|obj|---
|∟∟desc|string|记录描述
|∟∟gold|int|金币值
|∟∟type|int|记录类型1收入；2支出
|∟∟atime|string|记录时间

* 返回示例

~~~
{	
    "gold": "58615",	
    "rank": "126",	
    "data": [		
        {			
            "desc": "连续签到7天",			
            "gold": "50",			
            "type": "1",			
            "atime": "1485411452"
        
		}
    
	]

}
~~~cY�V,    (  (m�i�     �_� %�}�D� %�Gweekend/获奖记录#### showAwardOrder
* 说明：获奖记录
* Method：POST
* url：/carboss/index.php/Admin/Forum/showAwardOrder

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"status": {
				"value": 2,
				"type": "int",
				"required": true,
				"desc": "状态：0、全部；1、未发放；2、已发放"
			},
			"page_start": {
				"value": 2,
				"type": "int",
				"required": true,
				"desc": "起始页码"
			},
			"page_limit": {
				"value": 10,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"nickname":{
				"value": "zm",
				"type": "string",
				"desc": "发布用户"
			},
			"name":{
				"value": "iphone",
				"type": "string",
				"desc": "奖品名称"
			},
			"time":{
				"value": {
					"min":{
						"type":"int",
						"desc":"起始时间",
						"value":1501111111
		    �       &quot;type&quot;: &quot;int&quot;,
                        &quot;value&quot;: [
                            1,
                            2,
                            3
                        ],
                        &quot;desc&quot;: &quot;品牌id&quot;
                    }
                }
            }
        },
        &quot;response&quot;: {
		 &quot;type&quot;: &quot;obj&quot;,
            &quot;value&quot;: {
			    &quot;status&quot;: {
                &quot;type&quot;: &quot;int&quot;,
                &quot;value&quot;: &quot;0&quot;,
                &quot;desc&quot;: &quot;状态 0成功；1失败&quot;
            },
			 &quot;errstr&quot;: {
                &quot;type&quot;: &quot;string&quot;,
                &quot;value&quot;: &quot;错误提示&quot;,
                &quot;desc&quot;: &quot;错误提示&quot;
            }
			
		
		}
    }
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|nickna  
                   &quot;desc&quot;: &quot;地址&quot;
                },
                &quot;work_age&quot;: {
                    &quot;type&quot;: &quot;int&quot;,
                    &quot;value&quot;: &quot;8&quot;,
                    &quot;desc&quot;: &quot;工龄&quot;
                },
				   &quot;job&quot;: {
                    &quot;type&quot;: &quot;int&quot;,
                    &quot;value&quot;: &quot;8&quot;,
                    &quot;desc&quot;: &quot;工种职位（只选）&quot;
                },
                &quot;sloagn&quot;: {
                    &quot;type&quot;: &quot;string&quot;,
                    &quot;value&quot;: &quot;I know nothing about money&quot;,
                    &quot;desc&quot;: &quot;个性签名&quot;
                },
                &quot;brands&quot;: {
                    &quot;type&quot;: &quot;arr&quot;,
                    &quot;desc&quot;: &quot;擅长品牌（最多选5个）&quot;,
                    &quot;value&quot;: {
                   ;!--
{
    &quot;params&quot;: {
        &quot;type&quot;: &quot;obj&quot;,
        &quot;value&quot;: {
            &quot;token&quot;: {
                &quot;type&quot;: &quot;string&quot;,
                &quot;required&quot;: true,
                &quot;value&quot;: &quot;hfsdhiufhgbflsjfa&quot;,
                &quot;desc&quot;: &quot;token&quot;
            },
           
                &quot;nickname&quot;: {
                    &quot;type&quot;: &quot;string&quot;,
                    &quot;value&quot;: &quot;Jack ma&quot;,
                    &quot;desc&quot;: &quot;昵称&quot;
                },
                &quot;phone&quot;: {
                    &quot;type&quot;: &quot;int&quot;,
                    &quot;value&quot;: &quot;19956325112&quot;,
                    &quot;desc&quot;: &quot;手机号&quot;
                },
                &quot;address&quot;: {
                    &quot;type&quot;: &quot;string&quot;,
                    &quot;value&quot;: &quot;广东省-广州市&quot;,
    � �                                        �B�2   1�G.普通用户信息#### showGeneralUserDetail
* 说明：普通用户信息
* Method：POST
* url：/carboss/index.php/Admin/User/showUserDetail

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"uid":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "用户ID"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"uid": {
				"type": "int",
				"desc": "用户ID",
				"value": 2
			},
			"nickname": {
				"type": "string",
				"desc": "用户昵称",
				"value": "大水货"
			},
			"sign": {
				"type": "string",
				"desc": "签名"�w�2 1�!weekend.普通用户信息#### showGeneralUserDetail
* 说明：普通用户信息
* Method：POST
* url：/carboss/index.php/Admin/User/showGeneralUserDetail

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101exam  r    tring",
				"required": true,
				"desc": "token"
			},
			"time": {
				"value": 729,
				"type": "int",
				"required": true,
				"desc": "时间范围"
			},
			"num": {
				"value": 1000,
				"type": "int",
				"required": true,
				"desc": "热度"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|time|int|是|时间范围
|num|int|是|热度

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "time": 729,	
    "num": 1000

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": "例子"

}
~~~Y�f�    � O �                                                                                                                                              �)�@ 5�weekend0(取消)收藏帖子#### collect
* 说明：(取消)收藏
* url：/carboss/index.php/Client/Posting/collect


<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1、问答帖，2、分享帖",
				"value": 1
			},
			"posting_id": {
				"type":   )�%�? 5�yweekend0(取消)点赞帖子#### agree
* 说明：(取消)点赞
* url：/carboss/index.php/Client/Posting/agree


<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1、问答帖，2、分享帖",
				"value": 1
			},
			"posting_id": {
				"type":   G   2 �2                                                  �O�K 1�QweekendC其他用户视频#### showOther
* 说明：其他用户视频
* Method：POST
* url：/pp/v1/Client/Rp/showVideoOther

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"id": {
				"value": 15,
				"type": "int",
				"desc": "视频ID"
			},
			"uid": {
				"value": 15,
				"type": "int",
				"desc": �S�K 1�YweekendC随机用户视频#### showOther
* 说明：随机用户视频
* Method：POST
* url：/pp/v1/Client/Rp/showOther

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"obj",
  �L�J %�WweekendC我的视频#### showMine
* 说明：我的视频
* Method：POST
* url：/pp/v1/  Z                                      "required": true,
                                        "desc": "内容"
                                    },
                                    "atime": {
                                        "type": "int",
                                        "value": "157968662",
                                        "required": true,
                                        "desc": "时间"
                                    }
                                }
                            }
                        },
                        "chat": {
                            "type": "arr",
                            "value": {
                                "type": "obj",
                                "value": {
                                    "id": {
                                        "type": "int",
                                        "value": "3",
                                        "required": true,
                                        "desc     �                    �g k�Uweekend获取数据模板10-16（数组嵌套对象）#### example
* 说明：例子
* Method：POST
* url：/example/index.php/Home/Example/example

&lt;!--
{
	&quot;params&quot;: {
		&quot;type&quot;: &quot;obj&quot;,
		&quot;value&quot;: {
			&quot;token&quot;: {
				&quot;value&quot;: &quot;101example0729xxx&quot;,
				&quot;type&quot;: &quot;strin  @�d %�weekend图片上传#### uploadImg
* 说明: 帖子图片上传
* Method：POST(form multipart)
* url: /carboss/index.php/Client/Posting/uploadImg

* 参数:
~~~
！ ！ 这里必须使用 form multipart 格式！ ！
！ ！只上传图片，返回图片路径！ ！
token: &quot;101asdh8ferhf75gh857gh57g&quot;      //token
~~~

&lt;!--
{
    &quot;response&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			&quot;status&quot;: {
				&quot;value&quot;:1,
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;状态码：0：成功,1失败, 16 上传失败&quot;
			},
			&q  *    2  2+                              �H�q �B�q   %�S7私信发送#### chatSend
* 说明：私信发送
* url：carboss/index.php/Client/Message/chatSend

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "id": {
                "type": "int",   
                "value": "5",
                "desc": "指定的私信id"
            },
			 "uid": {
                "type": "int",
                "required": true,
                "value": "5",
                "desc": "接收者uid"
            },
            "content": {
                "type": "string",
                "required": true,
                "value": "你混铜锣湾 的？",
                "desc": "私信内容"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "status": {  t  ": "私信id"
                                    },
                                    "icon": {
                                        "type": "string",
                                        "value": "/uploads/5/icon/aar.jpg",
                                        "desc": "发帖人头像"
                                    },
                                    "nickname": {
                                        "type": "string",
                                        "value": "Jack ma",
                                        "desc": "昵称"
                                    },
                                    "content": {
                                        "value": "我是马云",
                                        "type": "string",
                                  
                                        "desc": "内容"
                                    },
									"read": {
                                        "value": "0",
                                        "t  /ype": "int",                            
                                        "desc": "已读状态，0已读，1未读"
                                    },
                                    "atime": {
                                        "type": "int",
                                        "value": "157968662",
                                      
                                        "desc": "时间"
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|brief|string|通知提示
|data|arr|---
|∟/|obj|---
|∟∟notice|arr|---
|∟∟/|obj|---
|∟∟∟id|int|通知id
|∟�   � �                                                                                    ��u %�admin领取奖励#### acceptPrize
* 说明：领��[�u %�{admin领取奖励#### acceptAward
* 说明：领取奖励
* url：carboss/index.php/Client/UserInfo/acceptAward

<!--
{
    "param�;�t %�9admin+我的任务#### task
* 说明：我的任务
* url：carboss/index.php/Client/Award/taskList

&lt;!--
{
    &quot;params&quot;: {
        &quot;type&quot;: &quot;obj&quot;,
        &quot;value&quot;: {
            &quot;token&quot;: {
                &quot;type&quot;: &quot;string&quot;,
                &quot;required&quot;: true,
                &quot;value&quot;: &quot;hfsdhiufhgbflsjfa&quot;,
                &quot;desc&quot;: &quot;token&quot;
            }
        }
    },
    &quot;response&quot;: {
        &quot;type&quot;: &quot;arr&quot;,
        &quot;value&quot;:��t %�Oadmin9我的任务#### taskList
* 说明：我的任务
* url：carboss/index.php/Client/  B    
				&quot;type&quot;: &quot;int&quot;,
				&quot;desc&quot;: &quot;一次显示数量&quot;,
				&quot;required&quot;: true,
				&quot;value&quot;: 50
			}
		}
	},
	&quot;response&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			&quot;total&quot;:{
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;总记录条数&quot;,
				&quot;value&quot;:100
			},
			&quot;page_start&quot;:{
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;起始页码&quot;,
				&quot;value&quot;:1
			},
			&quot;page_n&quot;:{
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;当前返回记录条数&quot;,
				&quot;value&quot;:1
			},
			&quot;data&quot;:{
				&quot;type&quot;: &quot;arr&quot;,
				&quot;value&quot;: {
					&quot;type&quot;:&quot;obj&quot;,
					&quot;value&quot;:{
						&quot;id&quot;: {
							&quot;type&quot;: &quot;int&quot;,
							&quot;desc&quot;: &quot;例子&quot;,
							&quot;value&quot;: 2
						}
					}
				}
			}
		}
	}
}
--&gt;
Y�l�                      "desc": "中奖用户手机",
                            "value": "138****8888"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|mine|arr|我的历史中奖数据
|∟/|obj|---
|∟∟award_name|string|奖励描述
|∟∟atime|string|奖励时间
|newest|arr|最新中奖信息
|∟/|obj|---
|∟∟award_name|string|奖励描述
|∟∟phone|int|value:138****8888不是int<br>

* 返回示例

~~~
{	
    "mine": [		
        {			
            "award_name": "100元话费",			
            "atime": "148541521452"
        
		}
    
	],	
    "newest": [		
        {			
            "award_name": "100元话费",			
            "phone": "138****8888"
        
		}
    
	]

}
~~~cY���   Y Y                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               �l �[ �admin通知#### notice
* 说明：通知
* url：carboss/index.php/Client/UserInfo/notice

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
     � �  B � B                                                      �_�> 9�iweekend/上传更新品牌LOGO#### uploadLogo
* 说明: 上传更新品牌LOGO
* Method�  �  � 1�)weekend/查询品牌列表#### searchCarBrand
* 说明: 查询品牌列表
* Method：POST
* url: /carboss/index.php/Admin/Forum/searchCarBrand

<!--
{
    "params": {
        "type": "obj",
        "value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page": {
				"type": "int",
				"�@�= 1�3weekend/查询品牌列術�= 1�]weekend/查询品牌列表#### searchCarBrand
* 说明: 查询品牌列表
* Method：POST
* url: /carboss/index.php/Admin/Forum/searchCarBrand

<!--
{
    "params": {
        "type": "obj",
        "value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"require�A�= 1�5weekend/查询品牌列表#### searchCarBrand
* 说明: 查询品牌列表
* Method：POS  7    �  �  +    +"notice"�\�z %�yweekend默认页面#### editSystemNotice
* 说明：修改通知
* Method：PO�t�z 3�weekend/新增/修改通知#### editSystemNotice
* 说明：新增/修改通知
* Method：POST
* url：/carboss/index.php/Admin/Forum/editSystemNotice

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":{
				"value": 1,
				"type": "int",
				"desc": "通知ID(新增通知时忽略)"
			},
			"title": {
				"value": "论坛发布了",
				"type": "string",
				"required": true,
				"desc": "标题"
			},
			"content": {
				"value": "论坛发布了，欢迎大家",
				"type": "string",
				"required": true,
				"desc": "内容"
			},
			"status": {
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "状态；1、未发布，2、已发布"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"id":{
				"value": 1  +    v  v                                                                                                            ��v +�Eweekend/导入敏感词#### uploadSensitiveWords
* 说明: 导入敏感词
* Method：POST(form multipart)
* url: /carboss/index.php/Admin/Forum/uploadSensitiveWords

* 参数:
~~~
！ ！ 这里必须使用 form multipart 格式！ ！
！ ！只上传图片，返回图片路径！ ！
token: "101asdh8ferhf75gh857gh57g"      //token
~~~

<!--
{
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0、成功，1、导入失败，16、上传失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0、成功，1、导入失败，16、上传失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y䒴   k Dk                                                                                                                                                                                                                                                                                                                                                               �M�| 1�Mweekend/删除系统通知#### delSystemNotice
* 说明：删除系统通知
* Method：POST
* url：/carboss/index.php/Admin/Fourm/delSystemNotice

<!--
{
	"params": {
		"type": "obj",
		"value"  3�0�{ ?�weekend/发布/撤销系统通知#### setSystemNoticeStatus
* 说明：发布/撤销系统通知
* Method：POST
* url：/carboss/index.php/Admin/Forum/setSystemNoticeStatus

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type":"arr",
				"desc":"通知ID列表",
				"required": true,
  .   | |ask

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "arr",
        "value": {
            "type": "obj",
            "�x�u 1�'admin9领取任务奖励#### receive
* 说明：领取任务奖励
* url：carboss/index.php/Client/Award/receive

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "id": {
                "type": "int",
                "required": true,
                "value": "1",
                "desc": "任务id"
            }
        }},
        "response": {
            "type": "obj",
            "value": {
            %   � �                                                                         �!�y 1�uweekend/获取通知列表#### showSystemNotice
* 说明：获取通知列表
* Method：POST
* url：/carboss/index.php/Admin/Forum/showSystemNotice

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page": {
				"value": 2,
				"type": "int"��y 1�oweekend/获取通知列表#### showSystemNotice
* 说明：获取通知列表
* Method：POST
* url：/carboss/index.php/Admin/Forum/showSystemNotice

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start": {
				"value": 2,
				"type": "int",
				"required": true,
				"desc": "页码"
			},
			"page_limit": {
				"value": 10,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"  �   � �ue":{
			"id": {
				"value": 15,
				"type": "in�A�L +�;w�/��,�L �#weekendC点赞#### agree
* 说明：点赞
* Method：POST
* url：/pp/v1/Client/R�@�M �KweekendC赞赏#### reward
* 说明：赞赏
* Method：POST
* url：/pp/v1/Client/Rp/reward

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"video_id":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "视频ID"
			},
			"to_uid":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "视频所属用户ID"
			},
			"type":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "货币类型：1:diamond(钻石)，2:gold(金币),3:coin(代币)"
			},
			"number":{
				"value": 100,
				"type": "int",
				"required": true,
				"desc": "�.�M �'weekendC赞赏#### reward
* 说明：赞赏
* Method：POST
* url：/pp/v1/Client/Rp/rewa  [    !  � !  �  �  �"desc": "�u�A 7�weekend>检查电话票状态#### checkStatus
* 说明：检查电话票状态
* Method：POST
* url：/pp/  ��J�? +�Mweekend=用户的信息#### showInfo
* 说明： 用户的信息
* Method：POST
* url：/pp/v1/Game/Profile/showInfo


<!--
{
    "params": {
		"type":"obj",
		"value":{
			"uid":{
				"type":"arr",
				"desc":"用户ID列表",
				"value":{
					"type":"int",
					"desc":"用户ID",
					"value":29
				}
			}
		}
    },
    "response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"desc":"用户信息",
			"value":{
				"uid":{
					"type":"int",
					"desc":"用户ID列表",
					"value":29
				},
				"nickname": {
					"value": "wk",
					"type": "string",
					"desc": "昵称"
				},
				"displayname": {
					"value": "72900",
					"type": "string",
					"desc": "系统分配名称"
				},
				"phone": {
					"value": 18818181818,
					"type": "int",
					"desc": "电话"
				},
				"icon": {
					"value": "http://zm.fa  �    ,
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|uid|int|否|用户ID（新增时忽略）
|user|string|否|账号
|pass|string|否|密码(md5加密后)
|nickname|string|否|用户昵称
|phone|int|否|手机号码
|city|int|否|城市
|sign|string|否|签名
|posting_quota|int|否|可发帖数

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "uid": 2,	
    "user": "zm_fairy",	
    "pass": "jf7839fh30ydfy389had8y4",	
    "nickname": "大水货",	
    "phone": 2,	
    "city": 2,	
    "sign": "hahahhaha",	
    "posting_quota": 11

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|用户ID（新增时返回）
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "id": 1,	
    "status": 1,	
    "errstr": "例子"

}
~~~Y�k�    <  <�
* url：/carboss/index.php/Client/Posting/upvote�0�B 1�weekend,帖子详细内容#### showDetail
* 说明：帖子详细内容
* Method：POST
* url：/carboss/index.php/Admin/Posting/showDetail

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"type": {
				"type": "int",
				"desc": "帖子类型：1：问答板块，2：分享板块",
				"required": true,
				"value": 2
			},
			"posting_id": {
				"type": "int",
				"desc": "帖子ID",
				"required": true,
				"value": 2
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 2
			},
    		"uid": {
				"type": "int",
				"desc": "用户ID",
				"value": 2
			},
    		"type": {
				"type": "int",
				"desc": "帖子类型：1：问答板块，2：分享板块",
				"value": 2
			},
    		"title": {
				"type": "string",
				"desc": "�  W   � �c                                                      �:�' 1�'weekend:权限详细规则#### ShowAuthRule
* 说明：权限详细规则
* Method：POST
* url：/carboss/index.php/Admin/Manage/ShowAuthRule

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"re�$�( E�gweekend:新增/修改角色组信息#### editAuthGroup
* 说明：新增/修改角色组�  a�"�' 1�wweekend:权限详细规则#### ShowAuthRule
* 说明：权限详细规则
* Method：POST
* url：/carboss/index.php/Admin/Manage/ShowAuthRule

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"id": {
					"type": "int",
					"desc": "ID",
					"value": 2
				},
				"title": {
					"type": "string",
					"desc": "菜单名",
					"  K          "result": {
                    "type": "string",
                    "value": "任务完成获得20金币",             
					 "desc": "领取结果"
                },
				"status": {
                    "type": "int",
                    "value": "0",             
					 "desc": "状态；<br/>0成功；<br/>4、系统错误；<br/>13不存在的任务；<br/>15已领取奖励或未完成任务"
                }
            }
        }
    
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|任务id

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "id": "1"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|result|string|领取结果
|status|int|状态；<br/>0成功；<br/>4、系统错误；<br/>13不存在的任务；<br/>15已领取奖励或未完成任务

* 返回示例

~~~
{	
    "result": "任务完成获得20金币",	
    "status": "0"

}
~~~cY��    A  A\                             �S�w 1�Yweekend�;�w 1�)weekend/显示热门条件#### showHotCondition
* 说明：显示热门条件
* Method：POST
* url：/carboss/index.php/Admin/Forum/showHotCondition

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"num": {
				"type": "int",
				"desc": "热度",
				"value": 23
			},
			"time": {
				"type": "int",
				"desc": "时间范围(秒为单位)",
				"value": 729
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|num|int|热度
|time|int|时间范围(秒为单位)

* 返回示例

~~~
{	
    "num": 23,	
    "time": 729

}
~~~Y�f�                                     },
									"status": {
                                        "value": "0",
                                        "type": "int",                            
                                        "desc": "是否读取，0已读，1未读"
                                    }
                                }
                            }
                        
                        
     
        
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|通知id
|∟title|string|通知标题
|∟atime|int|通知时间
|∟status|int|是否读取，0已读，1未读

* 返回示例

~~~
[	
    {		
        "id": "3",		
        "title": "我是马云",		
        "atime": "157968662",		
        "status": "0"
    
	}

]
~~~Y�'   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 �)�x 1�weekend��x 1�Uweekend/修改热门条件#### editHotCondition
* 说明：修改热门条件
* Method：POST
* url：/carboss/index.php/Admin/Forum/editHotCondition

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "s      "int",
				"desc": "帖子ID",
				"value": 12
			},
			"status": {
				"type": "int",
				"desc": "操作：1、收藏，2、取消",
				"value": 1
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|type|int|否|帖子类型：1、问答帖，2、分享帖
|posting_id|int|否|帖子ID
|status|int|否|操作：1、收藏，2、取消

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": 1,	
    "posting_id": 12,	
    "status": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y�I�    uot;img_url&quot;: {
				&quot;value&quot;: &quot;http://zm.fairy.com/fairy/zm.jpg&quot;,
				&quot;type&quot;: &quot;string&quot;,
				&quot;desc&quot;: &quot;头像链接&quot;
			},
			&quot;img_path&quot;: {
				&quot;value&quot;: &quot;/fairy/zm.jpg&quot;,
				&quot;type&quot;: &quot;string&quot;,
				&quot;desc&quot;: &quot;头像路径&quot;
			},
			&quot;errstr&quot;: {
				&quot;value&quot;: &quot; &quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;错误提示&quot;
			}
		}
    }
}
--&gt;







* 返回



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|status|int|否|状态码：0：成功,1失败,16上传失败
|img_url|string|否|头像链接
|img_path|string|否|头像路径
|errstr|string|否|错误提示

* 返回示例

~~~
{	
    &quot;status&quot;: 1,	
    &quot;img_url&quot;: &quot;http://zm.fairy.com/fairy/zm.jpg&quot;,	
    &quot;img_path&quot;: &quot;/fairy/zm.jpg&quot;,	
    &quot;errstr&quot;: &quot; &quot;

}
~~~Y�b�    ,
				"type": "int",
				"desc": "通知ID(新增通知时返回)"
			},
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|否|通知ID(新增通知时忽略)
|title|string|是|标题
|content|string|是|内容
|status|int|是|状态；1、未发布，2、已发布

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "id": 1,	
    "title": "论坛发布了",	
    "content": "论坛发布了，欢迎大家",	
    "status": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|通知ID(新增通知时返回)
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "id": 1,	
    "status": 1,	
    "errstr": "例子"

}
~~~Y�S� ik�                                                                                                                                                                                                                                                                   �W�	 +�gweekend/删除敏感词#### delSensitiveWords
* 说明：删除敏感词
* Method：POST
* url：/carboss/index.php/Admin/Fourm/delSensitiveWords

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"toke  H     p �p�
 %�#admin9我的金币#### gold
* 说明：我的金币
* url：carboss/index.php/Client/Aw�� 1�Aweekend/发放获奖奖品#### setAwardOrderStatus
* 说明：发放获奖奖品
* Method：POST
* url：/carboss/index.php/A  E�l� +�	weekend/敏感词列表#### showSensitiveWords
* 说明：敏感词列表
* Method：POST  F�	� +�Kweekend/添加敏感词#### addSensitiveWords
* 说明：添加敏感词
* Method：POST
* url：/carboss/index.php/Admin/Forum  D        "type": "obj",
                    "value": {
                        "award_name": {
                            "type": "string",
                            "desc": "奖励描述",
                            "value": "100元话费"
                        },
                        "atime": {
                            "type": "string",
                            "desc": "奖励时间",
                            "value": 148541521452
                        }
                    }
                }
            },
            "newest": {
                "type": "arr",
				"desc": "最新中奖信息",
                "value": {
                    "type": "obj",
                    "value": {
                        "award_name": {
                            "type": "string",
                            "desc": "奖励描述",
                            "value": "100元话费"
                        },
                        "phone": {
                            "type": "int",
              				"value":{
					"type":"int",
					"desc":"通知ID",
					"value":55
				}
			},
			"status":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "状态；1、撤销，2、发布"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|arr|是|通知ID列表
|∟/|int|是|通知ID
|status|int|是|状态；1、撤销，2、发布

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "status": 1,	
    "id": [55]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": "例子"

}
~~~Y�Y   � �00                           �G�} 1�Aweekend/意见反馈列表####��} 1�aweekend/意见反馈列表#### showSuggest
* 说明：意见反馈列表
* Method：POST
* url：/carboss/index.php/Admin/Forum/showSuggest

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			�I�} 1�Eweekend/意见反馈列表#### showSuggest
* 说明：意见反馈列表
* Method：POST
* url：/carboss/index.php/Admin/Forum/showSuggest

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start": {
				"value": 2,
				"type": "int",
				"required": true,
				"desc": "页码"
			},
			"page_limit": {
				"value": 10,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"content": {
				"value": "10",
				"type": "string",
				  �   � �= �                 �F� 3�=weekend/新增/修改奖品#### editAward
* 说明：新增/修改奖品
* Metho�`� 3�qweekend/新增/修改奖品#### editAward
* 说明：新增/修改奖品
* Method：POST
* url：/carboss/index.php/Admin/Forum/editAward

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required"��~ C�;weekend/设置意见反馈的状态#### setSuggestStatus
* 说明：设置意见反馈的状态
* Method：POST
* url：/carboss/index.php/Admin/Forum/setSuggestStatus

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type":"arr",
				"desc":"反馈ID�  ;�7� %�-weekend/删除反馈#### delSuggest
* 说明：删除反馈
* Method：POST
* url：/carboss/index.php/Admin/Fourm/delSuggest

<!--
{
	"params": {
		"type": "obj",
		"value"  G    : {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type":"arr",
				"desc":"奖品ID列表",
				"required": true,
				"value":{
					"type":"int",
					"desc":"奖品ID",
					"value":23
				}
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": " "
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|arr|是|奖品ID列表
|∟/|int|是|奖品ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "id": [23]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y��    �  �                                                                                                                                                               �K�  1�@� �<�  1�-	weekend-首页运营数据#### showInfo
* 说明：首页运营数据
* Method：POST
* url：/carboss/index.php/Admin/Home/showInfo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"time":{
				"value": {
					"min":{
						"type":"int",
						"desc":"起始时间",
						"value":1501111111
					},
					"max":{
						"type":"int",
						"desc":"最终时间",
						"value":1502222222
					}
				},
				"type": "obj",
				"desc": "时间范围"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"active_user": {
				"type": "int",
				"desc": "活跃用户",
				"value": 2
			},
			"added_user": {
				"type": "int",
				"desc": "新增用户",
				"value": 2
			},
			"added_questi  b    : {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type":"arr",
				"desc":"通知ID列表",
				"required": true,
				"value":{
					"type":"int",
					"desc":"通知ID",
					"value":23
				}
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": " "
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|arr|是|通知ID列表
|∟/|int|是|通知ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "id": [23]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y��   � �                                                  �8�: %�1weekend默认页面#### showCarBrand
* 说明z�: %�3weekend/品牌列表#### showCarBrand
* 说明: 品牌列表
* Method：POST
* url: /carboss/index.php/Admin/Forum/showCarBrand

<!--
{
    "params": {
        "type": "obj",
        "value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc�A�: �:�: A�weekend/品牌列表(暂时无用)#### showCarBrand
* 说明: 品牌列表(暂时无用)
* Method：POST
* url: /carboss/index.php/Admin/Forum/showCarBrand

<!--
{
    "params": {
        "type": "obj",
        "value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"type": {
				"value":1,
				"type": "int",
				"required": true,
				"desc": "获取数据模块：1、品牌，2、型号，3、排量，4、年份"
			},
			"id": {
				"value":1,
				"type": "int",
				"required":  d  �              "title": {
                        "type": "string",
                        "value": "乐视汽车，蔚来，到底是不是PPT产品",
                        "desc": "帖子标题"
                    },
                    "desc": {
                        "type": "string",
                        "value": "好车，但是不买",
                        "desc": "帖子描述内容"
                    },
					 "desc": {
                            "type": "string",
                            "value": "好车，但是不买",
                            "desc": "帖子描述"
                        },
                        "img_url": {
                            "type": "string",
                            "value": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",
                            "desc": "帖子描述图片"
                        },
                    "uid": {
                        "type": "int",
                        "value": "55",
                         O O�                                                          �*�  1�weekend/抽奖奖品列表#### showAward
* 说明：抽奖奖品列表
* Method：POST
* url：/carboss/index.php/Admin/Forum/showAward

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": ��  1�mweekend/抽奖奖品列表#### showAward
* 说明：抽奖奖品列表
* Method：POST
* url：/carboss/index.php/Admin/Forum/showAward

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"status": {
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "状态：状态；0、全部，1、正常，2、禁用"
			},
			"page_start": {
				"value": 2,
				"type": "int",
				"required": true,
				"desc": "页码"
			},
			"page_limit": {
				"value": 10,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
		  �  �T
* url: /carboss/index.php/Admin/Forum/searchCarBrand

<!--
{
    "params": {
        "type": "obj",
        "value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start": {
				"type": "int",
				"desc": "页码",
				"required": true,
				"value": 1
			},
			"page_limit": {
				"type": "int",
				"desc": "一次显示数量",
				"required": true,
				"value": 50
			},
			"brand": {
				"value":"JEEP",
				"type": "string",
				"desc": "品牌名"
			},
			"model": {
				"value":"牧马人",
				"type": "string",
				"desc": "型号名"
			},
			"year": {
				"value":2017,
				"type": "int",
				"desc": "年份"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
	   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            �~�# %��n�# E�{weekend:新增/修改管理员账号#### editManager
* 说明：新增/修改管理员账号
* Method：POST
* url：/carboss/index.php/Admin/Manage/editManager

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"uid": {
				"type": "int",  R                 �;� %�9admin+好友动态#### latestFriends
* 说明：好友动态
* url：carboss/index.php/Client/UserInfo/latestFriends

<!--
{
    "params": {
        "type": "obj",�%�
 %�admin9我的金币#### gold
* 说明：我的金币
* url：carboss/index.php/Client/Award/gold

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbf�p�
 %�#admin9我的金币#### gold
* 说明：我的金币
* url：carboss/index.php/Client/Award/gold

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "gold": {
                "type": "int",
                     and|string|否|品牌名
|model|string|否|型号名
|year|int|否|年份

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 1,	
    "page_limit": 50,	
    "brand": "JEEP",	
    "model": "牧马人",	
    "year": 2017

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|obj|---
|∟brand_id|int|品牌id
|∟brand|string|品牌名
|∟model_id|int|型号id
|∟model|string|型号名
|∟emissions_id|int|排量id
|∟emissions|string|排量
|∟year_id|int|年份id
|∟year|string|年份

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": {		
        "brand_id": "4",		
        "brand": "JEEP",		
        "model_id": "41",		
        "model": "JEEP",		
        "emissions_id": "23",		
        "emissions": "6.9L",		
        "year_id": "43",		
        "year": "2017"
    
	}

}
~~~3Y���		"type": "int",
							"d    �表",
				"required": true,
				"value":{
					"type":"int",
					"desc":"通知ID",
					"value":55
				}
			},
			"status":{
				"type":"int",
				"desc":"状态：0、已读",
				"required": true,
				"value":0
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|arr|是|反馈ID列表
|∟/|int|是|通知ID
|status|int|是|状态：0、已读

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "status": 0,	
    "id": [55]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": "例子"

}
~~~Y�M�    *  *l�            �� 3�7�s� 3�weekend/新增/修改奖品#### editAward
* 说明：新增/修改奖品
* Method：POST
* url：/carboss/index.php/Admin/Forum/editAward

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id": {
				"type": "int",
				"desc": "奖品ID(新增  Q�3� %�%weekend/删除奖品#### delAward
* 说明：删除奖品
* Method：POST
* url：/carboss/index.php/Admin/Fourm/delAward

<!--
{
	"params": {
		"type": "obj",
		"value"  1�� 1�Cweekend/修改奖品状态#### setAwardStatus
* 说明：修改奖品状态
* Method：POST
* url：/carboss/index.php/Admin/Forum/setAwardStatus

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type":"arr",
				"desc":"奖品ID列表",
				"requi  =    red": true,
				"value":{
					"type":"int",
					"desc":"奖品ID",
					"value":55
				}
			},
			"status":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "状态；0正常，1禁用"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|arr|是|奖品ID列表
|∟/|int|是|奖品ID
|status|int|是|状态；0正常，1禁用

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "status": 1,	
    "id": [55]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": "例子"

}
~~~Y�w  �ent/Moments/friendsPosts

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
			"page": {
                "type": "int",
                "desc": "页码",
                "required": true,
                "value": 1
            },
            "num": {
                "type": "int",
                "desc": "一次显示数量",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {

        "type": "arr",
        "desc": "好友的动态",
        "value": {
            "type": "obj",
            "value": {
                "type": {
                    "type": "int",
                    "value": "1",
                    "desc": "动态类型：<br/>0、点赞；1发帖；2回复；<br/>3、收藏；4、评论；<br/>5、关注；6、被关注"
                 ,
				"desc": "token"
			},
			"id":{
				"type":"int",
				"desc":"获奖记录ID",
				"required": true,
				"value": 55
			},
			"rem":{
				"type":"string",
				"desc":"备注",
				"required": true,
				"value": "兑换码为12f33e"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|获奖记录ID
|rem|string|是|备注

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "id": 55,	
    "rem": "兑换码为12f33e"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": "例子"

}
~~~ Y�f    g&quot;,
				&quot;required&quot;: true,
				&quot;desc&quot;: &quot;token&quot;
			}
		}
	},
	&quot;response&quot;: {
		&quot;type&quot;:&quot;arr&quot;,
		&quot;value&quot;:{
			&quot;type&quot;:&quot;obj&quot;,
			&quot;value&quot;:{
				&quot;id&quot;: {
					&quot;type&quot;: &quot;int&quot;,
					&quot;desc&quot;: &quot;ID&quot;,
					&quot;value&quot;: 2
				},
				&quot;example&quot;: {
					&quot;type&quot;: &quot;string&quot;,
					&quot;desc&quot;: &quot;例子&quot;,
					&quot;value&quot;: &quot;例子&quot;
				}
			}
		}
	}
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    &quot;token&quot;: &quot;101example0729xxx&quot;

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|ID
|∟example|string|例子

* 返回示例

~~~
[	
    {		
        &quot;id&quot;: 2,		
        &quot;example&quot;: &quot;例子&quot;
    
	}

]
~~~Y�z   � ���                                                                           �K� %�Yadmin6好友动态#### friendsPosts
* 说明：好友动态
* url：carboss/index.php/Client/Moments/friendsPosts

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
    Q�q� %�%admin6我的动态#### MyPosts
* 说明：我的动态
* url：carboss/index.php/Client/Moments/M�9� %�5admin6好友动态#### friendsPosts
* 说明：好友动态
* url：carboss/index.php/Client/Moments/friendsPosts

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
              �(� %�admin6好友动态#### friendsPosts
* 说明：好友动态
* url：carboss/index.php/Client/Moments/friendsPosts

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "to�X� %�sadmin6好友动态#### friendsPosts
* 说明：好友动态
* url：carboss/index.php/Cli  >  jAward/taskList

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "arr",
        "value": {
            "type": "obj",
            "value": {
                "id": {
                    "type": "int",
                    "value": "3",
                    "required": true,
                    "desc": "任务id"
                },
                "desc": {
                    "value": "登录奖励",
                    "type": "string",
                    "desc": "任务描述"
                },
                "gold": {
                    "value": "50",
                    "type": "int",
                    "desc": "奖励金币"
                },
				 "exp": {
                    "value": "50",
                    "type": "int",
                    "desc":   k k                                                                                                                       ��G �_adminA审核#### c�d�G �adminA审核#### check
* 说明：审核
* url：stockSchool/index.php/Backend/UserInfo/check

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
    �F�H �[admin@登录#### login
* 说明：登录
* Method：POST
* url：/stockSchool/index.php/Client/Login/login

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"user":{
				"value":"cc",
				"type":"string",
				"desc":"账号"
			},
			"pass":{
				"value":"e10adc3949ba59abbe56e057f20f883e",
				"type":"string",  �	�F %�Uadmin+上传头像#### upload
* 说明：上传头像
* url：carboss/index.php/Client/Profile/upload
* 参数：
---
	！ ！   �    /addSensitiveWords

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"word":{
				"value": "fuck",
				"type": "string",
				"required": true,
				"desc": "敏感词"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|word|string|是|敏感词

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "word": "fuck"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": "例子"

}
~~~Y䒞    dmin/Forum/setAwardOrderStatus

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type":"int",
				"desc":"获奖记录ID",
				"required": true,
				"value": 55
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|获奖记录ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "id": 55

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": "例子"

}
~~~Y�    
* url：/carboss/index.php/Admin/Forum/showSensitiveWords

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"id": {
					"type": "int",
					"desc": "ID",
					"value": 2
				},
				"word": {
					"type": "string",
					"desc": "敏感词",
					"value": "fuck"
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|ID
|∟word|string|敏感词

* 返回示例

~~~
[	
    {		
        "id": 2,		
        "word": "fuck"
    
	}

]
~~~Y�3                                                                                                                           : {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type":"arr",
				"desc":"反馈ID列表",
				"required": true,
				"value":{
					"type":"int",
					"desc":"通知ID",
					"value":23
				}
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": " "
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|arr|是|反馈ID列表
|∟/|int|是|通知ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "id": [23]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y䓺    n": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":{
				"type":"arr",
				"desc":"敏感词ID列表",
				"required": true,
				"value":{
					"type":"int",
					"desc":"敏感词ID",
					"value":23
				}
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": " "
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|arr|是|敏感词ID列表
|∟/|int|是|敏感词ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "id": [23]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y䓫    �� form multipart 格式！ ！
！ ！只上传图片，返回图片路径！ ！
token: "101asdh8ferhf75gh857gh57g"      //token
~~~

<!--
{
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：成功,1失败, 16 上传失败"
			},
			"img_url": {
				"value": "http://zm.fairy.com/fairy/zm.jpg",
				"type": "string",
				"desc": "头像链接"
			},
			"img_path": {
				"value": "/fairy/zm.jpg",
				"type": "string",
				"desc": "头像路径"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1失败,16上传失败
|img_url|string|头像链接
|img_path|string|头像路径
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "img_url": "http://zm.fairy.com/fairy/zm.jpg",	
    "img_path": "/fairy/zm.jpg",	
    "errstr": " "

}
~~~Y�t�    c":"错误提示",
				"value":"3ehsdg4"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|否|奖品ID(新增时忽略)
|name|string|否|奖品名称
|type|int|否|奖品类型：1、实体奖品；2、金币，3、经验
|amount|int|否|虚拟奖品的值（实体奖品时传递0）
|num|int|否|参与抽奖总数量
|ratio|int|否|中奖率
|rem|string|否|备注
|status|int|否|状态；0、使用，1、禁用

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "id": 2,	
    "name": "金币50个",	
    "type": 2,	
    "amount": 50,	
    "num": 50,	
    "ratio": 10,	
    "rem": "就是备注",	
    "status": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|奖品ID(新增时返回)
|status|int|状态码：0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "id": 1,	
    "status": 1,	
    "errstr": "3ehsdg4"

}
~~~Y�<    value": "首页"
				},
				"data":{
					"type":"arr",
					"desc":"页面",
					"value":{
						"type":"obj",
						"desc":"",
						"value":{
							"id": {
								"type": "int",
								"desc": "ID",
								"value": 2
							},
							"title": {
								"type": "string",
								"desc": "名字",
								"value": "首页"
							}
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|ID
|∟title|string|菜单名
|∟data|arr|页面
|∟∟/|obj|---
|∟∟∟id|int|ID
|∟∟∟title|string|名字

* 返回示例

~~~
[	
    {		
        "id": 2,		
        "title": "首页",		
        "data": [			
            {				
                "id": "2",				
                "title": "首页"
            
			}
        
		]
    
	}

]
~~~Y�:�    �  �    q�/ %�'admin默认页面![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-10-19/59e842e0dfa8a.jpg)cY�D(�q�. =�	weekend<当前用户菜单列表#### showMenu
* 说明：当前用户菜单列表
* Method：POST
* url：/carboss/index.php/Admin/Profile/showMenu

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"arr",
		"value":{
			"type":"obj",
			"value":{
				"title": {
					"type": "string",
					"desc": "名字",
					"value": "首页"
				},
				"icon":{
					"type": "string",
					"desc": "图表",
					"value": "fa-desktop"
				},
				"url": {
					"type": "string",
					"desc": "页面(菜单为一级时返回)",
					"value": "index.html"
				},
				"submenu": {
					"type": "arr",
					"desc": "二级菜单(菜单为二级时返回)",
					"value": {
						"type":"obj",
						"value":{
							"title": {
								"  q  �
					"value": 0
				},
				"img": {
					"type":"arr",
					"desc":"图片列表",
					"value":{
						"type":"obj",
						"desc":"图片信息",
						"value":{
							"url": {
								"type":"string",
								"desc":"图片链接",
								"value": "http://zm.fairy.com/fairy/zm.jpg"
							},
							"rem": {
								"type":"string",
								"desc":"图片说明",
								"value": "哈哈哈哈哈哈嗝"
							}
						}
					}
				},
				"mtime": {
					"type": "int",
					"desc": "修改时间",
					"value": 1506657454
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|帖子信息
|∟id|int|帖子ID
|∟uid|int|用户ID
|∟nickname|string|昵称
|∟icon|string|头像
|∟title|string|标题
|∟desc|string|内容描述
|∟agree_n|int|点赞数�    �  �8     �n� =�weekend�D� 1�=	weekend.专家用户列表#### showExpertUser
* 说明：专家用户列表
* Method：POST
* url：/carboss/i�8�6� 1�%	admin6用户最新动态#### userPosts
* 说明：用户最新动态
* url：carboss/index.php/Client/Moments/userPosts

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
			
			"uid": {
                "type": "int",
                "desc": "用户uid（不传uid，默认返回登录用户的最新动态）",
                "value": 1
            },	
			"page": {
                "type": "int",
                "desc": "页码",
                "required": true,
                "value": 1
            },
            "num": {
                "type": "int",
                "desc": "一次显示数量",
                "requi  �  Rransfer

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"12":{
				"type":"obj",
				"required": true,
				"desc":"(caseid由传递参数一方设置)",
				"value":{
					"exchange_type": {
						"value": 1,
						"type":"int",
						"required": true,
						"desc":"操作类型：1、转账；2、支出；3、奖金"
					},
					"from_user":{
						"value":"1",
						"type":"int",
						"desc":"来源用户ID"
					},
					"to_user":{
						"value":"1",
						"type":"int",
						"required": true,
						"desc":"目标用户ID"
					},
					"src":{
						"value":"1",
						"type":"int",
						"required": true,
						"desc":"操作来源：3、碰碰门票，4、碰碰竞价，5、系统奖励"
					},
					"type":{
						"value":"1",
						"type":"int",
						"required": true,
						"desc":"货币类型：1:diamond(钻石)，2:gold(金币),3:coin(代币)"
					},
					"number":{
						"value":"0907",
						"type":"int",
						"required": true,
						"desc":"数量"
					},
					"phone_ticket":{
			  l            "value": "乐视汽车，蔚来，到底是不是PPT产品",
                    "desc": "帖子标题"
                },
				 "desc": {
                    "type": "string",
                    "value": "是的 yes ",
                    "desc": "帖子内容"
                },
				 "uid": {
                    "type": "int",
                    "value": "45",
                    "desc": "用户uid"
                },
				"icon": {
                    "type": "string",
                    "value": "/uploads/5/icon/aar.jpg",
                    "desc": "发帖人头像"
                },
                "author": {
                    "type": "string",
                    "value": "Jack ma",
                    "desc": "发帖人"
                },
                "atime": {
                    "type": "int",
                    "value": "15014856325",
                    "desc": "发帖时间"
                },
       				"best": {
                    "type": "int",
                    "  J时忽略)",
				"value": 2
			},
			"name": {
				"type": "string",
				"desc": "奖品名称",
				"value": "金币50个"
			},
			"type": {
				"type": "int",
				"desc": "奖品类型：1、实体奖品；2、金币，3、经验",
				"value": 2
			},
			"amount": {
				"type": "int",
				"desc": "虚拟奖品的值（实体奖品时传递0）",
				"value": 50
			},
			"num": {
				"type": "int",
				"desc": "参与抽奖总数量",
				"value": 50
			},
			"ratio": {
				"type": "int",
				"desc": "中奖率",
				"value": 10
			},
			"rem": {
				"type": "string",
				"desc": "备注",
				"value": "就是备注"
			},
			"status": {
				"type": "int",
				"desc": "状态；0、使用，1、禁用",
				"value": 1
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"id":{
				"type":"int",
				"desc":"奖品ID(新增时返回)",
				"value":1
			},
			"status":{
				"type":"int",
				"desc":"状态码：0、成功，1、失败",
				"value":1
			},
			"errstr":{
				"type":"string",
				"des  S			"type":"obj",
						"value":{
							"direction":{
								"value":"1",
								"type":"int",
								"desc":"拨打方向：0、单向；1、双向"
							},
							"duration":{
								"value":3600,
								"type":"int",
								"desc":"时长(毫秒为单位)"
							},
							"expire_at":{
								"value":1502375433,
								"type":"int",
								"desc":"过期时间(精确到毫秒)"
							}
						}
					}
				}
			}
		}
    },
 "response": {
        "type": "obj",
        "value": {
            "succeeded": {
                "type": "obj",
                "desc": "成功部分的caseid与ticketID",
                "value": {
                    "12": {
                        "type": "obj",
                        "desc": "(caseid与上述一致)",
                        "value": {
                            "phone_ticket": {
                                "type": "int",
                                "desc": "ticketID",
                                "value": 29
                            �  }
                        }
                    }
                }
            },
            "failed": {
                "type": "arr",
                "desc": "失败部分的caseid",
                "value": {
                    "type": "int",
                    "desc": "(caseid与上述一致)",
                    "value": 25
                }
            }
        }
    }

    
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|12|obj|是|(caseid由传递参数一方设置)
|∟exchange_type|int|是|操作类型：1、转账；2、支出；3、奖金
|∟from_user|int|否|来源用户ID
|∟to_user|int|是|目标用户ID
|∟src|int|是|操作来源：3、碰碰门票，4、碰碰竞价，5、系统奖励
|∟type|int|是|货币类型：1:diamond(钻石)，2:gold(金币),3:coin(代币)
|∟number|int|是|数量
|∟phone_ticket|obj|否|---
|∟∟direction|int|否|拨打方向：0、单向；1、双向
|∟∟duration|int|否|时长(毫秒为�    -->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|私信id
|∟status|int|是否读取，0已读，1未读
|∟uid|int|发信人uid
|∟icon|string|发信人头像
|∟nickname|string|发信人昵称
|∟content|string|私信内容
|∟atime|int|私信时间
|∟reply|string|回复的内容
|∟rtime|int|回复消息时间

* 返回示例

~~~
[	
    {		
        "id": "3",		
        "status": "0",		
        "uid": "22",		
        "icon": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",		
        "nickname": "Jack ma",		
        "content": "我是马云",		
        "atime": "157968662",		
        "reply": "我是Jack Ma",		
        "rtime": "157968662"
    
	}

]
~~~Y�o                                                                                             ype": {
				"value":1,
				"type": "int",
				"required": true,
				"desc": "ID所属：1、品牌，2、型号，3、排量，4、年份"
			},
			"id": {
				"value":1,
				"type": "int",
				"required": true,
				"desc": "ID"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": ""
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type|int|是|ID所属：1、品牌，2、型号，3、排量，4、年份
|id|int|是|ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "type": 1,	
    "id": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": ""

}
~~~6Y鞈    �注）
|∟nickname|string|动态对应的用户名（关注）
|∟icon|string|动态对应的用户头像（关注）
|∟post_id|int|帖子id
|∟title|string|帖子标题
|∟content|string|内容
|∟img_url|string|帖子描述图片
|∟best|int|精华帖：0是；1否
|∟top|int|置顶帖：0是；1否
|∟atime|int|操作时间

* 返回示例

~~~
[	
    {		
        "type": "1",		
        "friend_uid": "11",		
        "friend_nickname": "Jackss",		
        "friend_icon": "/uploads/5/icon/1.jpg",		
        "uid": "1",		
        "nickname": "",		
        "icon": "",		
        "post_id": "1",		
        "title": "乐视汽车，蔚来，到底是不是PPT产品",		
        "content": "好车，但是不买",		
        "img_url": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",		
        "best": "0",		
        "top": "0",		
        "atime": "15720252"
    
	}

]
~~~cY��p注）"
                },
                "nickname": {
                    "type": "string",
                    "value":  `��题",
				"value": "丰田换发动机有哪些要注意的？"
			},
    		"desc": {
				"type": "string",
				"desc": "内容描述",
				"value": "比如拆卸发动机"
			},
    		"gold": {
				"type": "int",
				"desc": "赏金金币数值",
				"value": 200
			},
    		"agree_n": {
				"type": "int",
				"desc": "点赞数量",
				"value": 2
			},
    		"collect_n": {
				"type": "int",
				"desc": "收藏数量",
				"value": 2
			},
    		"review_n": {
				"type": "int",
				"desc": "评论数量",
				"value": 2
			},
    		"recommend_n": {
				"type": "int",
				"desc": "推荐数量",
				"value": 2
			},
    		"complaint_n": {
				"type": "int",
				"desc": "举报数量",
				"value": 2
			},
    		"best": {
				"type": "int",
				"desc": "精华帖：0是，1否",
				"value": 0
			},
    		"top": {
				"type": "int",
				"desc": "置顶帖：0是，1否",
				"value": 0
			},
    		"adoption": {
				"type": "int",
				"desc": "采纳答案ID",
				"value": 2
			},
    		"atime": {
				"� 8 88帖；2回复；<br/>3、收藏�D� 1�=	weekend.专家用户列表#### showExpertUser
* 说明：专家用户列表
* Method：POST
* url：/carboss/index.php/Admin/User/showExpertUser

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"t�p� 1�	weekend.专家用户列表#### showExpertUser
* 说明：专家用户列表
* Method：POST
* url：/carboss/index.php/Admin/User/showExpertUser

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example  ��M� 1�Qadmin+擅长品牌数据#### goodat
* 说明：擅长品牌数据
* url：carboss/index.php/Client/UserInfo/goodat

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
       u   o 1�M	weekend.专家用户列表#### showExpertUser
* 说明：专家用户列表
* Method：PO  �    "uid": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|uid|int|用户ID
|nickname|string|用户昵称
|icon|string|用户头像
|sign|string|签名
|phone|int|手机号码
|city|string|城市
|work_type|string|工种
|work_age|int|工龄
|good_at|string|擅长
|follower_n|int|被关注数量
|follow_n|int|关注数量
|question_n|int|提问数
|share_n|int|分享数
|answer_n|int|参与帖子数
|exp|int|经验值
|gold|int|金币数量
|atime|int|创建时间
|login_last_time|int|最近登录时间

* 返回示例

~~~
{	
    "uid": 2,	
    "nickname": "大水货",	
    "icon": "http://ww.fairy.com/fairy/zm.jpg",	
    "sign": "博士品牌特约用户",	
    "phone": 2,	
    "city": "上海市、浦东",	
    "work_type": "汽修",	
    "work_age": 1,	
    "good_at": "1,2",	
    "follower_n": 2,	
    "follow_n": 2,	
    "question_n": 2,	
    "share_n": 2,	
    "answer_n": 2,	
    "exp": 2,	
    "gold": 2,	
    "atime": 2,	
    "login_last_time": 2

}
~~~Y��  �  ��                                                                                                       �}� =�!weekend.普通正常用户列表#### showGeneralUser
* 说明：普通正帝-� 1�	weekend.专家用户列表#### showExpertUser
* 说明：专家用户列表
* Method：POST
* url：/carboss/index.php/Admin/User/showExpertUser

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "起始页码"
			},
			"page_limit":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"nickname":{
				"value": "zm",
				"type": "string",
				"desc": "用户名"
			},
			"phone":{
				"value": 157618888888,
				"type": "int",
				"de  �   o =�weekend.普通正常用户列表#### showGeneralUser
* 说明：普通正常用户列表
  �    fh73fy347t4447r4g81",
				"type":"string",
				"desc":"密码(已经过md5 加密)"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"登录凭证"
			},
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 登录成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|user|string|否|账号
|pass|string|否|密码(已经过md5加密)

* 参数示例

~~~
{	
    "user": "zm_fairy",	
    "pass": "d2t9hte7fh73fy347t4447r4g81"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|token|string|登录凭证
|status|int|状态码：0登录成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "status": 1,	
    "errstr": " "

}
~~~Y�>�   � � �                                                                                                                                       �M�% +�Sweekend:角色组列表#### ShowAuthGroup
* 说明：角色组列表
* Method：POST
* ur  P   � 7�weekend:管理员详细信息#### showManagerDetail
* 说明：管理员账号详细信息
* Method：POST
* url：/c�k�$ 7�weekend:管理员详细信息#### showManagerDetail
* 说明：管理员账号详细信息
* Method：POST
* url：/carboss/index.php/Admin/Manage/showManagerDetail

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"uid": {
				"type": "int",
				"desc": "ID",
				"value": 2
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"uid": {
				"type": "int",
				"desc": "ID",
				"value": 2
			},
			"realname": {
				"type": "string",
				"desc": "用户名",
				"value": "zm"
			  �  ' {
                                "type": "obj",
                                "value": {
                                    "id": {
                                        "type": "int",
                                        "value": "3",
                                        "required": true,
                                        "desc": "通知id"
                                    },
                                    "title": {
                                        "value": "我是马云",
                                        "type": "string",
                                        "required": true,
                                        "desc": "通知标题"
                                    },
                                    "atime": {
                                        "type": "int",
                                        "value": "157968662",
                                        "required": true,
                                        "desc": "通知时间"
      m m� J                               �O�+ =�Eweekend<登录账号详细信息#### showInfo
* 说明：登录账号详细信息
* Method：POST
* url：/carboss/index.php/Admin/Profile/showInfo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"realname": {
				"type": "string",
				"desc": "用户名",
				"value": "zm"
			},
			"phone": {
				"type": "int",
				"desc": "手机号码",
				"value": 15761235435
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|��+ =�5weekend<登录账号详细信息#### showInfo
* 说明：登录账号详细信息
* Method：POST
* url：/carboss/index.php/  p    					"type": "string",
					"desc": "角色名",
					"value": "Spuer"
				},
				"rem": {
					"type": "string",
					"desc": "描述",
					"value": "Spuer"
				},
				"status": {
					"type": "int",
					"desc": "状态:1、正常，0、禁用",
					"value": 1
				},
				"rule":{
					"type":"arr",
					"desc":"详细规则列表",
					"value":{
						"type":"int",
						"desc":"规则ID",
						"value":21
					}
				}
			}
		}

}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|否|角色ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "id": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|ID
|title|string|角色名
|rem|string|描述
|status|int|状态:1、正常，0、禁用
|rule|arr|详细规则列表
|∟/|int|规则ID

* 返回示例

~~~
{	
    "id": 2,	
    "title": "Spuer",	
    "rem": "Spuer",	
    "status": 1,	
    "rule": [21]

}
~~~Y���  �type": "int",
				"desc": "修改时间",
				"value": 1506657454
			},
    		"nickname": {
				"type": "string",
				"desc": "昵称",
				"value": "水货"
			},
			"icon": {
				"type": "string",
				"desc": "头像",
				"value": ""
			},
    		"img": {
				"type":"obj",
				"value":{
					"url": {
						"type":"string",
						"desc":"图片链接",
						"value": "http://zm.fairy.com/fairy/zm.jpg"
					},
					"rem": {
						"type":"string",
						"desc":"图片说明",
						"value": "哈哈哈哈哈哈嗝"
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type|int|是|帖子类型：1：问答板块，2：分享板块
|posting_id|int|是|帖子ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": 2,	
    "posting_id": 2

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|帖子ID
|uid|int|用户ID
|type|int|帖子类型：1：   � �|obj|---
|∟date|string|时间
|∟data|arr|最新动态
|∟∟/|obj|---
|∟∟∟post_id|int|帖子id
|∟∟∟title|string|帖子标题
|∟∟∟desc|string|帖子内容
|∟∟∟img_url|string|帖子图片
|∟∟∟best|int|精华帖：0是；1否
|∟∟∟top|int|置顶帖：0是；1否
|∟∟∟agree_n|int|点赞数
|∟∟∟collect_n|int|收藏数
|∟∟∟review_n|int|评论数
|∟∟∟atime|int|发帖时间

* 返回示例

~~~
[	
    {		
   ��m �}admin+签到#### checkIn
* 说明：签到
* url：carboss/index.php/Client/Profile/checkIn

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "type": "int",
                "value": "0",
                "desc"  �    on": {
				"type": "int",
				"desc": "新增问答",
				"value": 2
			},
			"added_share": {
				"type": "int",
				"desc": "新增分享",
				"value": 2
			},
			"solved_question": {
				"type": "int",
				"desc": "已解决问题",
				"value": 2
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|time|obj|否|时间范围
|∟min|int|否|起始时间
|∟max|int|否|最终时间

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "time": {		
        "min": "1501111111",		
        "max": "1502222222"
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|active_user|int|活跃用户
|added_user|int|新增用户
|added_question|int|新增问答
|added_share|int|新增分享
|solved_question|int|已解决问题

* 返回示例

~~~
{	
    "active_user": 2,	
    "added_user": 2,	
    "added_question": 2,	
    "added_share": 2,	
    "solved_question": 2

}
~~~Y�id  vid为3的年份列表
	
	
* url：/carboss/index.php/Client/Postings/carList

<!--
{
    "params": {
        "type": "obj",
        "value": {
		"token":{
			"type":"string",
			"required":true,
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
            "car_attribute": {
                "type": "arr",
                "value": {
					"type": "int",
               		 "value": [0,0,0,0],
					  "desc": "--"
				},
                "desc": "汽车属性数组"
            }         
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "desc": {
                "type": "string",
				 "desc": "返回结果类型",
                "value": "车型"
            },
            "data": {
                "type": "arr",
                "value": {
                    "type": "obj",
                    "desc": "选项列表",
                    "value": {
                        "id": {
                            "type": "int",
                            "value":   {"desc": "标题",
							"value": "反馈1"
						},
						"content": {
							"type": "string",
							"desc": "内容",
							"value": "反馈1内容"
						},
						"img": {
							"type": "arr",
							"desc": "图片列表",
							"value": {
								"type":"string",
								"desc": "图片链接",
								"value":"http://www.fairy.com/fairy/zm.jpg"
							}
						},
						"status": {
							"type": "int",
							"desc": "状态：0、已读，1、未读",
							"value": 1
						},
						"atime": {
							"type": "int",
							"desc": "时间",
							"value": 15023753734
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|页码
|page_limit|int|是|单页条数
|content|string|否|反馈内容
|nickname|string|否|发布用户
|time|obj|否|时间范围
|∟min|int|否|起始时间
|∟max|int|否|最终时间

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    c  ?  ?c：/carboss/index.php/Admin/User/showExpertUser

<!�� =�Gweekend.普通正常用户列表#### showGeneralUser
* 说明：普通正常用户列表
* Method：POST
* url：/carboss/index.php/Admin/User/showGeneralUser

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "起始页码"
			},
			"page_limit":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"nickname":{
				"value": "zm",
				"type": "string",
				"desc": "用户名"
			},
			"phone":{
				"value": 157618888888,
				"type": "int",
				"desc": "手机号码"
			},
			"time":{
				"value": {
					"min":{
						"type":"int",  �   � E�1weekend.被禁言/拉黑用户列表#### showBlockedUser
* 说明：被禁言/拉黑用户列表
* Method：POST
* url：/carboss/index  �   H�   ]�������������������������~ytoje`[VQLGB=83.)$����������������������ysmga[UOIC=71+%���������������������}wqke_YSMGA;5/)#         c�  X�  ��  	�  N�  A�
  9�   �  <�  6�   0�  �~  /�{  �z  �y  (�x  &�w  �v  �u  �t  ��s  �p  �n  ��m  �j  ��h  �g  �b  �a  �`  ��_  �^   ��\  ΁[  ԁY  F�X  ��V  ��U  ��T   N�S  V�Q  ��O  ��M  �H   }�G  ��F  ��E  ��D  �C  ��B  ��?  S�;  P�9  �4   ��3  ��2  o�/  D�.   ��-  Y�,  C�+  :�  0�)  �(  W�&  U�%   @�$  ^�#   ��"  `�!  N�  �
   �  �  p~  m}  k|  H{  jz  gx  fw  ;v  3t  .s   �[  <Z  Y   �X   �M   |L  
K  	J  H  F  D   �C   CA   0@   �?   />   �=   �<   H;   A:   �9   )8   �7   +5   �3   �2   >0   7.   E-   D,   ;+   x*   a(   �'   Z%   L    �   Q   �   �   �   p   �   �   X   
   	         ~   ����������t���V������|vpjd^X@R�:4("��
PJ��������������&���F����znhbD\8>2, ������������L�.���������~xrlf`ZTNHB<60*$      ]�o  Y�n  U�m  �H  Q�k  G�j  A�i  P�g  2�d  �c  )�a  '�`  ��_  �Y  �X  
�W  �V  �U   �S  ��R  ��Q  �P  �O   �M  ��E  �K  �I  C�F  ��%  i�  ۂG  �l  �^  ف>  ��7  ��6  �2  ��1  L�.  ^�+  ��-  u�3  t�*  $�'  ��&  \�$  8�#  9�
  s�"  ��!  ʂ  2�   6�  �t  �s  �@  ��  o�  �    ��9  h�  �2  �  ��5  Z�  N�  A�  ��  S�6  ,�	  	�   �  <�  6�   0�  /�}  �|  �z  �y  (�x  &�w  �v  �u  ��r  �q  ��o  �n  ��k  ��j  �h  ��C  �b  �a   ��\  X�  �>   ��]  ΁[  ԁY  F�X  ��V  ��U  ��T  x�R  V�P  ��O  ��I   }�E  e�  4�:  ��9  ��<  �C  #�B  ��=  ��<  !�A  a�m  ��8  o�1   ��/  D�.   ��-  Y�,  C�+    %  %��                       �~� 1�/weekend.修改用户状态#### setUserStatus
* 说明：修改用户状态
* Method：POST
* url：/carboss/index.php/Admin/User/setUserStatus

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"uid":{
				"type":"arr",
				"required": true,
				"desc":"用户ID列表",
				"value":{
					"type":"int",
					"desc":"用户ID",
					"value":29
				}
			},
			"status":{
				"type":"int",
				"required": true,
				"desc":"账号状态：1、正常，2、禁用/拉黑，3、禁言",
				"value":1
			},
			"  m�V� =�Sweekend0问答帖统计栏数据#### showQuestionNum
* 说明：问答帖统计栏数据
* Method：POST
* url：/carboss/index.php/Admin/Posting/showQuestionNum

<!--
{
	"params": {
		"type": "obj",
		"v  ڈ9� %�3	weekend0广告列表#### showAd
* 说明：广告列表
* Method：POST
* url：/carboss/  �    �  �                                                                                                                                             �U� E�Iweekend.被禁言/拉黑用户列表#### showBlockedUser
* 说明：被禁言/拉黑用户列表
* Method：POST
* url：/carboss/index.php/Admin/User/showBlockedUser

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"status":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "账号状态：2、拉黑，3、禁言"
			},
			"page_start":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "起始页码"
			},
			"page_limit":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"nickname":{
				"value": "zm",
				"type": "string",
				"desc": "用户名"
			},
			"phone":{
				"value": 157618888888,
				"type": "int",
				"desc": "手机号�  �     "奖励经验"
                },
                "status": {
                    "type": "int",
                    "value": "1",
                    "desc": "是否完成；<br/>1、未完成；2、已完成待领取,3、已领取"
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|任务id
|∟desc|string|任务描述
|∟gold|int|奖励金币
|∟exp|int|奖励经验
|∟status|int|是否完成；<br/>1、未完成；2、已完成待领取,3、已领取

* 返回示例

~~~
[	
    {		
        "id": "3",		
        "desc": "登录奖励",		
        "gold": "50",		
        "exp": "50",		
        "status": "1"
    
	}

]
~~~cY��               &quot;status&quot;: {
                    &quot;type&quot;: &quot;int&quot    2.jpg)
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3471a303d.jpg)

####3、删除

	-&gt;用户删除视频（video表，status=1）
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca357353719.jpg)
	-&gt;申请（check表，生成一条数据）
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca39789ccbf.jpg)
	-&gt;管理员审核(
	1、通过：修改check表 check=1 o_uid=审核账号id，ctime=当前时间戳；
			   video表 check=1 status=1
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca334aa029e.jpg)
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3ab793c05.jpg)

	-&gt;拒绝：修改check表 check=2 、o_uid=审核账号id，ctime=当前时间戳，reason=拒绝原因
			   video表 check=2
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3a7ecccf1.jpg)
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3a92700d2.jpg)


	

cY�9  �value": "0",
                    "desc": "精华帖：0是；1否"
                },
				"top": {
                    "type": "int",
                    "value": "0",
                    "desc": "置顶帖：0是；1否"
                },
				 "agree": {
                    "type": "int",
                    "value": "654",
                    "desc": "点赞数"
                },
				 "collect": {
                    "type": "int",
                    "value": "99",
                    "desc": "收藏数"
                },
				 "review": {
                    "type": "int",
                    "value": "99",
                    "desc": "评论数"
                }
            }
		}
         
        
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|type|int|否|板块：0全部；1问答；2分享
|car_model|arr|否|车型id
|∟/||否|
|type_contents|int|是|内容：0全部内容；1精华；2悬赏；3热门；4未解决；5已解决
|ke    rem":{
				"type":"string",
				"desc":"备注",
				"value":"反动言论，与汽修无关内容"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|uid|arr|是|用户ID列表
|∟/|int|是|用户ID
|status|int|是|账号状态：1、正常，2、禁用/拉黑，3、禁言
|rem|string|否|备注

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "status": 1,	
    "rem": "反动言论，与汽修无关内容",	
    "uid": [29]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": "例子"

}
~~~
Y�-  �                       },
                        "atime": {
                            "type": "int",
                            "value": "15720252",
                            "desc": "操作时间"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|uid|int|否|用户uid（不传uid，默认返回登录用户的最新动态）
|page|int|是|页码
|num|int|是|一次显示数量

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "uid": 1,	
    "page": 1,	
    "num": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|uid|int|我的uid
|nickname|string|我的用户名
|icon|string|我的头像
|data|arr|我的动态
|∟/|obj|---
|∟∟type|int|动态类型：<br/>0点赞；1发帖；2回复;<br/>3、收藏；4、评论；<br/>5、关注;6、被关注
|∟∟post_id|int|帖子i  �  �                                                                                                                                                                                                �'� 7�{weekend0分享帖详细信息#### showShareDetail
* 说明： 分享帖详细信息
* Method：POST
* url：/carboss/index.php/Client/Posting/showShareDetail

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"des  -    7�wweeken�N� ;�Eweekend0最热一帖(分享帖)#### showHotShare
* 说明： 最热一帖(分享帖)
* Method：POST
* url：/carboss/index.php/Client/Posting/showHotShare

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			}
		}
	},
	"response": {
		"type": "arr",
		"desc":"帖子列表",
		"value": {
			"type":"obj",
			"desc":"帖子信息",
			"value":{
				"id": {
					"  �    Admin/Profile/showInfo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"realname": {
				"type": "string",
				"desc": "用户名",
				"value": "zm"
			},
			"icon": {
				"type": "string",
				"desc": "头像链接",
				"value": "http://www.ar.com/sda/zm/jpg"
			},
			"phone": {
				"type": "int",
				"desc": "手机号码",
				"value": 15761235435
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|realname|string|用户名
|icon|string|头像链接
|phone|int|手机号码

* 返回示例

~~~
{	
    "realname": "zm",	
    "icon": "http://www.ar.com/sda/zm/jpg",	
    "phone": 15761235435

}
~~~Y�T�    type": "string",
								"desc": "名字",
								"value": "首页"
							},
							"url": {
								"type": "string",
								"desc": "页面",
								"value": "index.html"
							}
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟title|string|名字
|∟icon|string|图表
|∟url|string|页面(菜单为一级时返回)
|∟submenu|arr|二级菜单(菜单为二级时返回)
|∟∟/|obj|---
|∟∟∟title|string|名字
|∟∟∟url|string|页面

* 返回示例

~~~
[	
    {		
        "title": "首页",		
        "icon": "fa-desktop",		
        "url": "index.html",		
        "submenu": [			
            {				
                "title": "首页",				
                "url": "index.html"
            
			}
        
		]
    
	}

]
~~~Y�Y�  ~ple0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"uid":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "用户ID"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"uid": {
				"type": "int",
				"desc": "用户ID",
				"value": 2
			},
			"nickname": {
				"type": "string",
				"desc": "用户昵称",
				"value": "大水货"
			},
			"icon": {
				"type": "string",
				"desc": "用户头像",
				"value": "http://ww.fairy.com/fairy/zm.jpg"
			},
			"sign": {
				"type": "string",
				"desc": "签名",
				"value": "博士品牌特约用户"
			},
			"phone": {
				"type": "int",
				"desc": "手机号码",
				"value": 2
			},
			"city": {
				"type": "string",
				"desc": "城市",
				"value": "上海市、浦东"
			},
			"work_type": {
				"type": "string",
				"desc": "工种",
				"value": "汽修"
			},
			"work_age": {
				"type": "int",
				"desc": "工龄",
				"value": 1
			},
			"good_at": {
				"type": "string",
				"desc"   � � /                                   %�# %weekend默认页面cY���" 7�a	weekend:后台管理员列表#### showManager
* 说明：后台管理员列表
* Method：POST
* url：/carboss/index.php/Admin/Manage/showManager

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type��" 7�?	weekend:后台管理员列表#### showManager
* 说明：后台管理员列表
* Method：POST
* url：/carboss/index.php/Admin/Manage/showManager

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page":{�+�" 7�	weekend:后台管理员列表#### showManager
* 说明：后台管理员列表
* Method：POST
* url：/carboss/index.php/Admin/Manage/showManager

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"de  �    
                "type": "int",
                "value": "0",
                "desc": "状态 <br/>0成功；<br/>4失败;<br/>5发送内容不能为空；<br/>13不存在的用户"
            },
            "errstr": {
                "type": "string",
                "value": "错误提示",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|否|指定的私信id
|uid|int|是|接收者uid
|content|string|是|私信内容

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "id": "5",	
    "uid": "5",	
    "content": "你混铜锣湾 的？"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态<br/>0成功；<br/>4失败;<br/>5发送内容不能为空；<br/>13不存在的用户
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "错误提示"

}
~~~cY���   ` ` �  atype": "int",
				"desc": "新增问答",
				"value": 2
			},
			"added_share": {
			��3 1�S�k�5 ?�{weekend.�b�3 1�oadmin)汽车品牌列表#### showInfoCar
* 说明：汽车品牌列表
	-无参数时，返回所有品牌列表
	-确定选择：参数选择0(不足四位，以0填充)或者四个参数均存在时，
	-e.g:[5,1,0,0]，[0,0,0,0]
	
* url：/carboss/index.php/Client/Postings/showInfoCar

<!--
{
    "params": {
        "type": "obj",
        "value": {
		"token":{
			"type":"string",
			"required":true,
			"value":"101asdh8ferhf75gh857g��3 ��3 1�Wadmin)汽车属性列表#### carList
* 说明：汽车属性列表
	- 品牌列表，参数为[0,0,0,0]，返回所有品牌的列表
	- 车型列表，参数为[1,0,0,0]，返回所有品牌id为1的车型列表
	- 排量列表，参数为[1,2,0,0]，返回所有品牌id为1、车型id为2的排量列表
	- 年份列表，参数为[1,2,3,0]，返回所有品牌id为1、车型id为2、排量  c    "4",
                            "desc": "选项id"
                        },
                        "name": {
                            "type": "string",
                            "value": "斯巴鲁",
                            "desc": "选项名称"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|car_attribute|arr|否|汽车属性数组
|∟/|int|否|--

* 参数示例

~~~
{	
    "token": "101asdh8ferhf75gh857gh57g",	
    "car_attribute": [0,0,0,0]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|desc|string|返回结果类型
|data|arr|---
|∟/|obj|选项列表
|∟∟id|int|选项id
|∟∟name|string|选项名称

* 返回示例

~~~
{	
    "desc": "车型",	
    "data": [		
        {			
            "id": "4",			
            "name": "斯巴鲁"
        
		}
    
	]

}
~~~cY�I  y						"title": {
							"type": "string",
							"desc": "标题",
							"value": "丰田换发动机有哪些要注意的？"
						},
						"gold": {
							"type": "int",
							"desc": "赏金数值",
							"value": 20
						},
						"agree_n": {
							"type": "int",
							"desc": "点赞数量",
							"value": 2
						},
						"collect_n": {
							"type": "int",
							"desc": "收藏数量",
							"value": 2
						},
						"review_n": {
							"type": "int",
							"desc": "评论数量",
							"value": 2
						},
						"best": {
							"type": "int",
							"desc": "精华帖：0是，1否",
							"value": 0
						},
						"top": {
							"type": "int",
							"desc": "置顶帖：0是，1否",
							"value": 0
						},
						"hot": {
							"type": "int",
							"desc": "热门：0是，1否",
							"value": 0
						},
						"mtime": {
							"type": "int",
							"desc": "修改/精华/置顶/删除时间",
							"value": 1506657454
						}
					}
				}
			}
		}
	}
}
-->

* 参数



    ��
|∟∟∟id|int|评论ID
|∟∟∟uid|int|用户ID
|∟∟∟nickname|string|昵称
|∟∟∟icon|string|头像
|∟∟∟content|string|内容
|∟∟∟atime|int|评论时间
|∟∟∟to_user|obj|回复对象信息
|∟∟∟∟to_id|int|回复对象ID
|∟∟∟∟to_nickname|string|回复用户名称

* 返回示例

~~~
[	
    {		
        "id": 2,		
        "uid": 2,		
        "nickname": "水货",		
        "icon": "",		
        "content": "丰田换发动机有哪些要注意的？",		
        "atime": 1506657454,		
        "reply": [			
            {				
                "id": "2",				
                "uid": "2",				
                "nickname": "水货",				
                "icon": "",				
                "content": "丰田换发动机有哪些要注意的？",				
                "atime": "1506657454",				
                "to_user": {					
                    "to_id": "29",					
                    "to_nickname": "zm"
                
				}
            
			}
        
		]
    
	}

]
~~~Y���  x��间",
							"value": 1506657454
						},
						"to_user": {
							"type": "obj",
							"desc": "回复对象信息",
							"value": {
								"to_id":{
									"type":"int",
									"desc":"回复对象ID",
									"value":29
								},
								"to_nickname":{
									"type":"string",
									"desc":"回复用户名称",
									"value":"zm"
								}
							}
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|type|int|否|帖子类型：1、问答帖，2、分享帖
|posting_id|int|否|帖子ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": 1,	
    "posting_id": 2

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|∟id|int|评论ID
|∟uid|int|用户ID
|∟nickname|string|昵称
|∟icon|string|头像
|∟content|string|内容
|∟atime|int|评论时间
|∟reply|arr|评论回复列表
|∟∟/|obj|回复详细信�  y {
				"type": "string",
				"desc": "头像",
				"value": ""
			},
    		"content": {
				"type": "string",
				"desc": "内容",
				"value": "丰田换发动机有哪些要注意的？"
			},
    		"atime": {
				"type": "int",
				"desc": "评论时间",
				"value": 1506657454
			},
    		"reply": {
				"type":"arr",
				"desc":"评论回复列表",
				"value":{
					"type":"obj",
					"desc":"回复详细信息",
					"value":{
						"id": {
							"type": "int",
							"desc": "评论ID",
							"value": 2
						},
						"uid": {
							"type": "int",
							"desc": "用户ID",
							"value": 2
						},
						"nickname": {
							"type": "string",
							"desc": "昵称",
							"value": "水货"
						},
						"icon": {
							"type": "string",
							"desc": "头像",
							"value": ""
						},
						"content": {
							"type": "string",
							"desc": "内容",
							"value": "丰田换发动机有哪些要注意的？"
						},
						"atime": {
							"type": "int",
							"desc": "评论�    "page_start": 2,	
    "page_limit": 10,	
    "content": "10",	
    "nickname": "zm",	
    "time": {		
        "min": "1501111111",		
        "max": "150222222"
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟id|int|反馈ID
|∟∟nickname|string|用户名
|∟∟title|string|标题
|∟∟content|string|内容
|∟∟img|arr|图片列表
|∟∟/|string|---
|∟∟status|int|状态：0、已读，1、未读
|∟∟atime|int|时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "id": "2",			
            "nickname": "wk",			
            "title": "反馈1",			
            "content": "反馈1内容",			
            "img": [http://www.fairy.com/fairy/zm.jpg],			
            "status": "1",			
            "atime": "15023753734"
        
		}
    
	]

}
~~~Y���  �	"required": true,
				"desc": "1、金币，2、经验"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"id": {
							"type": "int",
							"desc": "ID",
							"value": 2
						},
						"task_name": {
							"type": "string",
							"desc": "任务名",
							"value": "被点赞"
						},
						"num": {
							"type": "int",
							"desc": "数值",
							"value": 10
						},
						"type": {
							"type": "int",
							"desc": "收支类型：1、收入，2、支出",
							"value": 1
						},
						"atime": {
							"type": "int",
							"desc": "增加时间",
							"value": 1502151352
						}
					}
				}
			}
		}
	}
}-->

* 参数



|参数名|类型  �    "desc": "昵称"
            },
            "follower_n": {
                "type": "int",
                "value": "965",
                "desc": "粉丝数"
            },
            "follow_n": {
                "type": "int",
                "value": "456",
                "desc": "关注数"
            },
            "collected_n": {
                "type": "int",
                "value": "963259",
                "desc": "被收藏数"
            },
            "collect_n": {
                "type": "int",
                "value": "99",
                "desc": "收藏数"
            },
            "question_n": {
                "type": "int",
                "value": "99",
                "desc": "ta的问题数"
            },
            "answer_n": {
                "type": "int",
                "value": "919",
                "desc": "ta的回答数"
            },
            "share_n": {
                "type": "int",
                "value": "58",
                "desc": "ta的分�  Y: "擅长",
				"value": "1,2"
			},
			"follower_n": {
				"type": "int",
				"desc": "被关注数量",
				"value": 2
			},
			"follow_n": {
				"type": "int",
				"desc": "关注数量",
				"value": 2
			},
			"question_n": {
				"type": "int",
				"desc": "提问数",
				"value": 2
			},
			"share_n": {
				"type": "int",
				"desc": "分享数",
				"value": 2
			},
			"answer_n": {
				"type": "int",
				"desc": "参与帖子数",
				"value": 2
			},
			"exp": {
				"type": "int",
				"desc": "经验值",
				"value": 2
			},
			"gold": {
				"type": "int",
				"desc": "金币数量",
				"value": 2
			},
			"atime": {
				"type": "int",
				"desc": "创建时间",
				"value": 2
			},
			"login_last_time": {
				"type": "int",
				"desc": "最近登录时间",
				"value": 2
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|uid|int|是|用户ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
      �alue": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},
			"posting_id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 2
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 2
			},
    		"uid": {
				"type": "int",
				"desc": "用户ID",
				"value": 2
			},
    		"nickname": {
				"type": "string",
				"desc": "昵称",
				"value": "水货"
			},
			"icon": {
				"type": "string",
				"desc": "头像",
				"value": ""
			},
    		"title": {
				"type": "string",
				"desc": "标题",
				"value": "丰田换发动机有哪些要注意的？"
			},
			"desc": {
				"type": "string",
				"desc": "内容描述",
				"value": "比如拆卸发动机"
			},
			"gold": {
				"type": "int",
				"desc": "赏金金币数值",
				"value": 100
			},
    		"agree_n": {
				"type": "int",
				"desc": "点赞数量",
				"value": 2
			},
    		"collect_n": {
				"type": "int",
		    ��片ID列表",
				"value": {
					"type":"int",
					"value":1,
					"desc": "图片ID"
				}
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状态码：0（全部） 成功， 1（全部） 失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|type|int|否|帖子类型：1、问答帖，2、分享帖
|posting_id|int|否|帖子ID
|img_id|arr|否|图片ID列表
|∟/|int|否|图片ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": 1,	
    "posting_id": 2,	
    "img_id": [1]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0（全部）成功，1（全部）失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y��  �记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"uid": {
							"type": "int",
							"desc": "ID",
							"value": 2
						},
						"nickname": {
							"type": "string",
							"desc": "昵称",
							"value": "被点赞"
						},
						"honor": {
							"type": "int",
							"desc": "称号",
							"value": 10
						},
						"sex": {
							"type": "int",
							"desc": "性别:0、男，1、女",
							"value": 1
						},
						"city": {
							"type": "string",
							"desc": "城市",
							"value": "广东省,广州市"
						},
						"atime": {
							"type": "int",
							"desc": "关注时间",
							"value": 1502151352
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式�    sc": "帖子ID",
				"value": 12
			},
			"status": {
				"type": "int",
				"desc": "操作类型：1 为推荐；2 为举报",
				"value": 1
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|type|int|否|帖子类型：1、问答帖，2、分享帖
|posting_id|int|否|帖子ID
|status|int|否|操作类型：1为推荐；2为举报

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": 1,	
    "posting_id": 12,	
    "status": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y�I�    desc": "通知标题"
            },
            "content": {
                "value": "说实话，我后悔创建阿里巴巴",
                "type": "string",
                "required": true,
                "desc": "通知内容"
            },
            "atime": {
                "type": "int",
                "value": "157968662",
                "required": true,
                "desc": "通知时间"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|通知id

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "id": "3"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|通知id
|title|string|通知标题
|content|string|通知内容
|atime|int|通知时间

* 返回示例

~~~
{	
    "id": "3",	
    "title": "我是马云",	
    "content": "说实话，我后悔创建阿里巴巴",	
    "atime": "157968662"

}
~~~Y�b  �value": "99",
                                "desc": "收藏数"
                            },
                            "review_n": {
                                "type": "int",
                                "value": "99",
                                "desc": "评论数"
                            },
							   "atime": {
                                "type": "int",
                                "value": "15014856325",
                                "desc": "发帖时间"
                            }
                        }
                    },
                    "desc": "最新动态"
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page|int|是|页码
|num|int|是|一次显示数量

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "page": 1,	
    "num": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为  �lue": "1576345521",
                    "required": true,
                    "desc": "时间"
                },
                "data": {
                    "type": "arr",
                    "value": {
                        "type": "obj",
                        "value": {
                            "post_id": {
                                "type": "int",
                                "value": "4",
                                "desc": "帖子id"
                            },
                            "title": {
                                "type": "string",
                                "value": "乐视汽车，蔚来，到底是不是PPT产品",
                                "desc": "帖子标题"
                            },
                            "desc": {
                                "type": "string",
                                "value": "是的 yes ",
                                "desc": "帖子内容"
                            },    
							   "img_url": {  �				"desc": "积分等级"
				},
				"checkin_count": {
					"value": 12,
					"type": "int",
					"desc": "连续签到次数"
				},
				"contribution":{
					"value": 100,
					"type": "int",
					"desc": "贡献值"
				},
				"coin": {
					"value": 1000,
					"type": "int",
					"desc": "代币"
				},
				"gold": {
					"value": 1000,
					"type": "int",
					"desc": "金币"
				},
				"diamond": {
					"value": 100,
					"type": "int",
					"desc": "钻石"
				}
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|uid|arr|否|用户ID列表
|∟/|int|否|用户ID

* 参数示例

~~~
{	
    "uid": [29]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|用户信息
|∟uid|int|用户ID列表
|∟nickname|string|昵称
|∟displayname|string|系统分配名称
|∟phone|int|电话
|∟icon|string|头像链接
|∟sex|int|性别（0=男，1=女）
|∟birthday|string|出生日期
|∟ci   ( ( ?/index.php/Admin/Manage/ShowAuthGroup

<!--
{
	"par�"�' 1�wweekend:权限详细规则#### ShowAuthRule
* 说明：权限详细规则
* Method：POST
* url：/carboss/index.php/Admin/Manage/ShowAuthRule

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"va�H�% +�Iweekend:角色组列表#### ShowAuthGroup
* 说明：角色组列表
* Method：POST
* url：/carboss/index.php/Admin/Manage/ShowAuthGroup

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "起始页码"
			},
			"page_limit":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"type":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "筛选类型：0、无，1、角色名，2、状态"
			},
			"title":{
				"value": "Super",
				"t  �  }uired": true,
                "value": "23",
                "desc": "用户uid"
            },
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "uid": {
                "type": "int",
                "value": "3",
                "desc": "uid"
            },
            "icon": {
                "type": "string",
                "value": "/uploads/5/icon/aar.jpg",
                "desc": "头像"
            },
			"sign": {
                "type": "string",
                "value": "吃了吗",
                "desc": "签名"
            },
            "honor": {
                "type": "string",
                "value": "大师",
                "desc": "等级"
            },
            "nickname": {
                "type": "string",
                "value": "Jack ma",
                "value": "为毛不收费",
                "desc": "内容"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            
			 "status": {
                "type": "int",
                "value": "0",
                "desc": "状态 0正常；1失败"
            },
			 "errstr": {
                "type": "string",
                "value": "错误提示",
                "desc": "错误提示"
            }

    }}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|title|string|是|标题
|content|string|是|内容

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "title": "服务太好了，为毛不收费",	
    "content": "为毛不收费"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0正常；1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "错误提示"

}
~~~cY�<    ywords|string|是|关键字

* 参数示例

~~~
{	
    "type": "0",	
    "type_contents": "0",	
    "keywords": "红旗L7",	
    "car_model": []

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|帖子id
|∟title|string|帖子标题
|∟desc|string|帖子内容
|∟uid|int|用户uid
|∟icon|string|发帖人头像
|∟author|string|发帖人
|∟atime|int|发帖时间
|∟best|int|精华帖：0是；1否
|∟top|int|置顶帖：0是；1否
|∟agree|int|点赞数
|∟collect|int|收藏数
|∟review|int|评论数

* 返回示例

~~~
[	
    {		
        "id": "4",		
        "title": "乐视汽车，蔚来，到底是不是PPT产品",		
        "desc": "是的 yes ",		
        "uid": "45",		
        "icon": "/uploads/5/icon/aar.jpg",		
        "author": "Jack ma",		
        "atime": "15014856325",		
        "best": "0",		
        "top": "0",		
        "agree": "654",		
        "collect": "99",		
        "review": "99"
    
	}

]
~~~cY�_Z啊啊
@ O � ��������������ph`XPH@8x8(  �0��������������xph`XPH@80(   � � � � �0(  �����cbbaa``__^^      ddccbbaa``__^^]]\\[[ZZYYXXWWVVUUTTSSRRQQPPOOmmMMnnKKJJIIHHGGCCBBAAEE??>><<;;::99887766==221100..--,,++**33((''&&%%$$##""!!  FFllkkjjiihhggffee55   �

		   � � � � � � � � � �ppoo  �
                                "type": "string",
                                "value": "www.a.cc/sf.jpg",
                                "desc": "帖子图片"
                            },
                         
                            "best": {
                                "type": "int",
                                "value": "0",
                                "desc": "精华帖：0是；1否"
                            },
                            "top": {
                                "type": "int",
                                "value": "0",
                                "desc": "置顶帖：0是；1否"
                            },
                            "agree_n": {
                                "type": "int",
                                "value": "654",
                                "desc": "点赞数"
                            },
                            "collect_n": {
                                "type": "int",
                                "    index.php/Admin/Login/logout

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：退出成功, 8：token已失效"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：退出成功,8：token已失效
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y�AR                                                                                                                                         �  �                                                           �/�7 ;�wee��7��7 ;�Wweekend.用户(被)关注详情#### show�Y�7 ;�[weekend.用户(被)关注详情#### showFollowList
* 说明：用户(被)关注详情
* Method：POST
* url：/carboss/index.php/Admin/User/showFollowList

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "起始页码"
			},
			"page_limit":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"uid": {
				"value": 29,
				"type": "int",
				"required": true,
				"desc": "用户ID"
			},
			"type": {
				"value": 2,
				"type": "int",
				"required": true,
				"desc": "1、被关注，2、关注"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"�  �    ken": "hfsdhiufhgbflsjfa",	
    "page_start": 1,	
    "page_limit": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|结果总页数
|page_start|int|返回的页码
|page_n|int|实际返回的页数
|data|arr|---
|∟/|obj|---
|∟∟id|int|书籍id
|∟∟title|string|书籍名
|∟∟desc|string|书籍描述
|∟∟img_url|string|书籍封面图片地址
|∟∟author|string|作者
|∟∟file_url|string|书籍文件地址
|∟∟is_top|int|是否置顶：0否；1是
|∟∟atime|int|添加时间

* 返回示例

~~~
{	
    "total": "40",	
    "page_start": "4",	
    "page_n": "40",	
    "data": [		
        {			
            "id": "4",			
            "title": "无愁河的浪子",			
            "desc": "老头儿 ",			
            "img_url": "www.ss.com/afe.jpg ",			
            "author": "黄永玉 ",			
            "file_url": "www.ss.com/afe.txt ",			
            "is_top": "1",			
            "atime": "157541563"
        
		}
    
	]

}
~~~cY��W  g",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "page_start": {
                "type": "int",
                "desc": "页码",
                "required": true,
                "value": 1
            },
            "page_limit": {
                "type": "int",
                "desc": "需要的页数",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "total": {
                "type": "int",
                "value": "40",
                "desc": "结果总页数"
            },
            "page_start": {
                "type": "int",
                "value": "4",
                "desc": "返回的页码"
            },
            "page_n": {
                "type": "int",
                "value": "40",
                "desc": "实际返回的页数"
            },
            "data": {
         � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ��! 7�Sweekend-用户举报的帖子#### showFeedback
* 说明：用户举报的帖子
* Method：POST
* url：/carboss/index.php/Admin/Posting/showFeedback

~~~
* 参数 与 返回
    参考 帖子管理-&gt;用户推荐/举报的帖子（不重复赘述）
~~~Y�i�    �  �                                                                                                                                                                                                                                   �r %�= �admin+编辑资料#### editInfo
* 说明：编辑资料
* url：carboss/index.php/Client/Profile/editInfo

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "nickname": {
                "type": "string",
                "value": "Jack ma",
                "desc": "昵称"
            },
            "phone": {
                "type": "int",
                "value": "19956325112",
                "desc": "手机号"
            },
            "city": {
                "type": "string",
                "value": "广东省-广州市",
                �                                                                                                                                                                                                                                                           �s� 3�admin+关注/取消关注#### follow
* 说明：关注/取消关注
* url：carboss/index.php/Client/Profile/follow

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
           
                "follow_uid": {
                    "type": "int",
                    "value": "55",
                    "desc": "关注的uid"
                },				
                "type": {
                    "type": "int",
                    "value": "1",
                    "desc": "动作；1、关注；2、取消关注"
                }

            }
    �    : "状态 0成功；1失败"
            },
            "errstr": {
                "type": "string",
                "value": "错误提示",
                "desc": "错误提示"
            },
            "last": {
                "type": "int",
                "value": "0",
                "desc": "连续签到，0是，1否"
            },
            "gold": {
                "type": "int",
                "value": "20",
                "desc": "奖励金币"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0成功；1失败
|errstr|string|错误提示
|last|int|连续签到，0是，1否
|gold|int|奖励金币

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "错误提示",	
    "last": "0",	
    "gold": "20"

}
~~~cY�  kdoc/Public/Uploads/2017-09-26/59ca3b0ed05c3.jpg)



####2、修改

	-&gt;用户修改视频数据title的值由‘下一个计算平台’改为‘略’（video表，data字段记录修改动态）
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3bb25499f.jpg)


	-&gt;申请（check表，生成一条数据
	  	   video表 check=0）

####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca36bd5187c.jpg)
	-&gt;管理员审核(
	1、通过：修改check表 check=1 o_uid=审核账号id，ctime=当前时间戳，修改相应字段的值
			   video表 check=1，title=‘略’
			   
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca33847aa1f.jpg)
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca363313e17.jpg)

	-&gt;拒绝：修改check表 check=2 、o_uid=审核账号id，ctime=当前时间戳，reason=拒绝原因
			   video表 check=2
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3b80938a    �数"
            }
           
         
            
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|uid|int|是|用户uid
|token|string|是|token

* 参数示例

~~~
{	
    "uid": "23",	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|uid|int|uid
|icon|string|头像
|sign|string|签名
|honor|string|等级
|nickname|string|昵称
|follower_n|int|粉丝数
|follow_n|int|关注数
|collected_n|int|被收藏数
|collect_n|int|收藏数
|question_n|int|ta的问题数
|answer_n|int|ta的回答数
|share_n|int|ta的分享数

* 返回示例

~~~
{	
    "uid": "3",	
    "icon": "/uploads/5/icon/aar.jpg",	
    "sign": "吃了吗",	
    "honor": "大师",	
    "nickname": "Jack ma",	
    "follower_n": "965",	
    "follow_n": "456",	
    "collected_n": "963259",	
    "collect_n": "99",	
    "question_n": "99",	
    "answer_n": "919",	
    "share_n": "58"

}
~~~cY���  �  "desc": "动态对应的uid"
                    },
                    "nickname": {
                        "type": "string",
                        "value": "Jackma",
                        "desc": "动态对应的用户名"
                    },
                    "icon": {
                        "type": "string",
                        "value": "/uploads/5/icon/ccr.jpg",
                        "desc": "动态对应的头像"
                    },
                    "atime": {
                        "type": "int",
                        "value": "15720252",
                        "desc": "操作时间"
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|icon|string|发帖人头像
|nickname|string|�  �		"desc": "收藏数量",
				"value": 2
			},
    		"review_n": {
				"type": "int",
				"desc": "评论数量",
				"value": 2
			},
    		"best": {
				"type": "int",
				"desc": "精华帖：1、是，2、否",
				"value": 1
			},
    		"top": {
				"type": "int",
				"desc": "置顶帖：1、是，2、否",
				"value": 1
			},
			"hot": {
				"type": "int",
				"desc": "热门：1、是，2、否",
				"value": 1
			},
			"adoption": {
				"type": "int",
				"desc": "采纳答案ID,0 为未采纳任何一种答案",
				"value": 0
			},
    		"img": {
				"type":"arr",
				"value":{
					"type":"string",
					"desc":"图片链接",
					"value": "'http://zm.fairy.com/fairy/zm.jpg'"
				}
			},
    		"mtime": {
				"type": "int",
				"desc": "修改时间",
				"value": 1506657454
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|posting_id|int|否|帖子ID

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f   � �ring",
					"desc": "描述",
					"value": "Spuer"
				},
				"status": {
					"type": "int",
					"desc": "状态:1、正常，0、禁用",
					"value": 1
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page|int|是|起始页码
|num|int|是|单页条数
|type|int|是|筛选类型：0、无，1、角色名，2、状态
|title|string|否|角色名
|status|in��&   1�:角色详细信息#### ShowAuthGroupDetail
* 说明：角色详细信息
* Method：POST
* url：/carboss/index.php/Admin/Manage/ShowAuthGroupDetail

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"id":{
				"value": 1,
				"type": "int",
				"desc": "角色ID"
			}
		}
	},
	"response": {
			"type":"obj",
			"value":{
				"id": {
					"type": "int",
					"desc": "ID",
					"value": 2
				},
				"title": {
  _    1eed21",	
    "posting_id": 2

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|帖子ID
|uid|int|用户ID
|nickname|string|昵称
|icon|string|头像
|title|string|标题
|desc|string|内容描述
|gold|int|赏金金币数值
|agree_n|int|点赞数量
|collect_n|int|收藏数量
|review_n|int|评论数量
|best|int|精华帖：1、是，2、否
|top|int|置顶帖：1、是，2、否
|hot|int|热门：1、是，2、否
|adoption|int|采纳答案ID,0为未采纳任何一种答案
|img|arr|---
|∟/|string|图片链接
|mtime|int|修改时间

* 返回示例

~~~
{	
    "id": 2,	
    "uid": 2,	
    "nickname": "水货",	
    "icon": "",	
    "title": "丰田换发动机有哪些要注意的？",	
    "desc": "比如拆卸发动机",	
    "gold": 100,	
    "agree_n": 2,	
    "collect_n": 2,	
    "review_n": 2,	
    "best": 1,	
    "top": 1,	
    "hot": 1,	
    "adoption": 0,	
    "mtime": 1506657454,	
    "img": ['http://zm.fairy.com/fairy/zm.jpg']

}
~~~
Y��    Q ��� � Qvalue": {
  "token": {
   �>�Z %�?a�G�] �t�_ �l�_ %�adminD密钥申请#### applyKey
* 说明：密钥申请
* Method：POST
* url：/stockSchool/index  &�O�^ %�aadminD上传文件#### upload
* 说明：上传文件
* url：carboss/index.php/Client/Resource/upload
* 参数：
---
	！ ！ 这里必须使用 form multipart 格式！ ！ 
	token: "afdsajfk;dl  �?�] %�AadminE添加文件#### addFile
* 说明：添加文件
* Method：POST
* url：/stockScho  +�s�\ %�)adminD视频列表#### videoLists
* 说明：视频列表
* Method：POST
* url：/stockS  �a�[ %�adminD文档列表#### documentLists
* 说明：文档列表
* Method：POST
* url：/sto  ��w�Z %�1adminD书籍列表#### bookLists
* 说明：书籍列表
* Method：POST
* url：/stockSchool/index.php/Client/Resource/bookLists

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "strin  �                    "type": "string",
                "value": "错误提示",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|nickname|string|否|昵称
|phone|int|否|手机号
|city|string|否|地址
|work_age|int|否|工龄
|work_type|int|否|工种职位（只选）
|sign|string|否|个性签名
|good_at|arr|否|擅长品牌（最多选5个）
|∟/|int|否|品牌id

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "nickname": "Jack ma",	
    "phone": "19956325112",	
    "city": "广东省-广州市",	
    "work_age": "8",	
    "work_type": "8",	
    "sign": "I know nothing about money",	
    "good_at": [4]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0成功；1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "错误提示"

}
~~~Y���v0.1  �  "desc": "地址"
            },
            "work_age": {
                "type": "int",
                "value": "8",
                "desc": "工龄"
            },
            "work_type": {
                "type": "int",
                "value": "8",
                "desc": "工种职位（只选）"
            },
            "sign": {
                "type": "string",
                "value": "I know nothing about money",
                "desc": "个性签名"
            },
            "good_at": {
                "type": "arr",
                "desc": "擅长品牌（最多选5个）",
                "value": {
                    "type": "int",
                    "desc": "品牌id",
                    "value": 4
                }
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "type": "int",
                "value": "0",
                "desc": "状态 0成功；1失败"
            },
            "errstr": {
    ;dlsa.jf89iehn"    		  //用户token
	input type='file' name='pic' 
---

<!--
{
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "type": "int",
                "value": "0",
                "desc": "状态 0正常；1失败；5请输入id；13不存在的反馈id"
            },
            "img_url": {
                "type": "string",
                "value": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",
                "desc": "图片url"
            },
			 "id":{
                "type": "int",
                "value": "55",
                "desc": "图片id"
            }
        }
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0正常；1失败；5请输入id；13不存在的反馈id
|img_url|string|图片url
|id|int|图片id

* 返回示例

~~~
{	
    "status": "0",	
    "img_url": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",	
    "id": "55"

}
~~~cY��f  ��称
|sex|int|性别：0、男；1、女
|sign|string|个性签名
|honor|string|等级
|honor_url|string|等级图url
|gold|int|金币数
|exp|int|经验值
|checkin|int|签到，0已签到；1未签到
|follower_n|int|粉丝数
|follow_n|int|关注数
|collected_n|int|被收藏数
|collect_n|int|收藏数
|question_n|int|我的问题数
|answe_nr|int|我的回答数
|share_n|int|我的分享数
|notice_n|int|新通知数目
|chat_n|int|新私信数目
|task|int|待领奖任务数
|info_finish|int|资料完善情况；0已完善；1未完善
|latest|obj|最新动态(一条)
|∟type|int|动态类型：<br/>0点赞；1发帖；2回复;<br/>3收藏；4评论；<br/>5关注;6被关注
|∟id|int|帖子id
|∟best|int|精华帖：0是；1否
|∟top|int|置顶帖：0是；1否
|∟title|string|帖子标题
|∟desc|string|帖子描述
|∟img_url|string|帖子描述图片
|∟uid|int|动态对应的uid
|∟nickname|string|动态对应的用户名
|∟icon|string|动态对应的头像
|∟atime|int|操作时�  �ue": 0
				},
				"hot": {
					"type": "int",
					"desc": "热门：1、是，2、否",
					"value": 0
				},
				"img": {
					"type":"arr",
					"desc":"图片列表",
					"value":{
						"type":"obj",
						"desc":"图片信息",
						"value":{
							"url": {
								"type":"string",
								"desc":"图片链接",
								"value": "http://zm.fairy.com/fairy/zm.jpg"
							},
							"rem": {
								"type":"string",
								"desc":"图片说明",
								"value": "哈哈哈哈哈哈嗝"
							}
						}
					}
				},
				"mtime": {
					"type": "int",
					"desc": "修改时间",
					"value": 1506657454
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|帖子信息
|∟id|int|帖子ID
|∟uid|int|用户ID
|∟nickname|string|昵称
|∟icon|strin    g|头像
|∟title|string|标题
|∟desc|string|内容描述
|∟agree_n|int|点赞数量
|∟collect_n|int|收藏数量
|∟review_n|int|评论数量
|∟best|int|精华帖：1、是，2、否
|∟top|int|置顶帖：1、是，2、否
|∟hot|int|热门：1、是，2、否
|∟img|arr|图片列表
|∟∟/|obj|图片信息
|∟∟∟url|string|图片链接
|∟∟∟rem|string|图片说明
|∟mtime|int|修改时间

* 返回示例

~~~
[	
    {		
        "id": 2,		
        "uid": 2,		
        "nickname": "水货",		
        "icon": "",		
        "title": "丰田换发动机有哪些要注意的？",		
        "desc": "比如拆卸发动机",		
        "agree_n": 2,		
        "collect_n": 2,		
        "review_n": 2,		
        "best": 0,		
        "top": 0,		
        "hot": 0,		
        "mtime": 1506657454,		
        "img": [			
            {				
                "url": "http://zm.fairy.com/fairy/zm.jpg",				
                "rem": "哈哈哈哈哈哈嗝"
            
			}
        
		]
    
	}

]
~~~Y���  �type": "int",
					"desc": "帖子ID",
					"value": 2
				},
				"uid": {
					"type": "int",
					"desc": "用户ID",
					"value": 2
				},
				"nickname": {
					"type": "string",
					"desc": "昵称",
					"value": "水货"
				},
				"icon": {
					"type": "string",
					"desc": "头像",
					"value": ""
				},
				"title": {
					"type": "string",
					"desc": "标题",
					"value": "丰田换发动机有哪些要注意的？"
				},
				"desc": {
					"type": "string",
					"desc": "内容描述",
					"value": "比如拆卸发动机"
				},
				"agree_n": {
					"type": "int",
					"desc": "点赞数量",
					"value": 2
				},
				"collect_n": {
					"type": "int",
					"desc": "收藏数量",
					"value": 2
				},
				"review_n": {
					"type": "int",
					"desc": "评论数量",
					"value": 2
				},
				"best": {
					"type": "int",
					"desc": "精华帖：1、是，2、否",
					"value": 0
				},
				"top": {
					"type": "int",
					"desc": "置顶帖：1、是，2、否",
					"val    ��

* 返回示例

~~~
{	
    "icon": "/uploads/5/icon/aar.jpg",	
    "nickname": "Jack ma",	
    "sex": "0",	
    "sign": "I know nothing about money",	
    "honor": "大师",	
    "honor_url": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",	
    "gold": "965",	
    "exp": "1000",	
    "checkin": "1",	
    "follower_n": "965",	
    "follow_n": "1",	
    "collected_n": "963259",	
    "collect_n": "99",	
    "question_n": "99",	
    "answe_nr": "919",	
    "share_n": "58",	
    "notice_n": "10",	
    "chat_n": "1",	
    "task": "1",	
    "info_finish": "0",	
    "latest": {		
        "type": "1",		
        "id": "1",		
        "best": "0",		
        "top": "0",		
        "title": "乐视汽车，蔚来，到底是不是PPT产品",		
        "desc": "好车，但是不买",		
        "img_url": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",		
        "uid": "55",		
        "nickname": "Jackma",		
        "icon": "/uploads/5/icon/ccr.jpg",		
        "atime": "15720252"
    
	}

}
~~~Y펵  �sc": "token"
			},
			"page_start":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "起始页码"
			},
			"page_limit":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"realname":{
				"value": "zm",
				"type": "string",
				"desc": "用户名"
			},
			"phone":{
				"value": 157618888888,
				"type": "int",
				"desc": "手机号码"
			},
			"time":{
				"value": {
					"min":{
						"type":"int",
						"desc":"起始时间",
						"value":1501111111
					},
					"max":{
						"type":"int",
						"desc":"最终时间",
						"value":150222222
					}
				},
				"type": "obj",
				"desc": "创建时间范围"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"ty    ��色组规则"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"id": {
				"value": 29,
				"type": "int",
				"desc": "角色组ID(新增时返回)"
			},
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|否|角色组ID(新增时忽略)
|title|string|是|角色名
|rules|string|是|角色组规则

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "id": 29,	
    "title": "Super",	
    "rules": "182,125,251,.."

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|角色组ID(新增时返回)
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "id": 29,	
    "status": 1,	
    "errstr": "例子"

}
~~~Y�YK                       "type": "string",
                    "value": "/uploads/5/icon/aar.jpg",
                    "desc": "头像"
                },
                "nickname": {
                    "type": "string",
                    "value": "Jack ma",
                    "desc": "昵称"
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type|int|是|好友类型：<br/>1、我的粉丝；2、我的关注
|page|int|是|页码
|num|int|是|一次显示数量

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "type": "1",	
    "page": 1,	
    "num": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟uid|int|好友uid
|∟icon|string|头像
|∟nickname|string|昵称

* 返回示例

~~~
[	
    {		
        "uid": "1",		
        "icon": "/uploads/5/icon/aar.jpg",		
        "nickname": "Jack ma"
    
	}

]
~~~cY��u   � �                                                                                                                                                                                                                                                                                                                                                                                                                       �^�- %�{weekend;退出登录#### logout
* 说明：退出登录
* Method：POST
* url：/carboss/  ��b�, =�kweekend<修改当前账号密码#### editInfo
* 说明：修改当前账号密码
* Method：POST
* url：/carboss/index.php/Admin/Profile/editInfo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"old_pass": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "当前密码（md5 后的密码）"
			},
			"n  �    ew_pass": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "更新后的密码（md5 后的密码）"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": "例子"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|old_pass|string|是|当前密码（md5后的密码）
|new_pass|string|是|更新后的密码（md5后的密码）

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "old_pass": "101example0729xxx",	
    "new_pass": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": "例子"

}
~~~Y�@f    ultipart 格式！ ！
！ ！只上传图片，返回图片链接、路径！ ！
token: "101asdh8ferhf75gh857gh57g"      //token
~~~

<!--
{
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：成功,1失败, 16 上传失败"
			},
			"img_url": {
				"value": "http://zm.fairy.com/fairy/zm.jpg",
				"type": "string",
				"desc": "头像链接"
			},
			"img_path": {
				"value": "/fairy/zm.jpg",
				"type": "string",
				"desc": "头像路径"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1失败,16上传失败
|img_url|string|头像链接
|img_path|string|头像路径
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "img_url": "http://zm.fairy.com/fairy/zm.jpg",	
    "img_path": "/fairy/zm.jpg",	
    "errstr": " "

}
~~~Y�n    这里必须使用 form multipart 格式！ ！ 
	token: "afdsajfk;dlsa.jf89iehn"    		  //用户token
	input type='file' name='pic' 
---

<!--
{
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "type": "int",
                "value": "0",
                "desc": "状态 0正常；1失败"
            },
			"errstr": {
                "type": "string",
                "value": "",
                "desc": "错误提示"
            },
            "icon": {
                "type": "string",
                "value": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",
                "desc": "头像url"
            }	
        }
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0正常；1失败
|errstr|string|错误提示
|icon|string|头像url

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "",	
    "icon": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg"

}
~~~cY���    d
|∟∟title|string|帖子标题
|∟∟desc|string|帖子描述
|∟∟img_url|string|帖子描述图片
|∟∟best|int|精华帖：0是；1否
|∟∟top|int|置顶帖：0是；1否
|∟∟uid|int|动态对应的uid（关注）
|∟∟nickname|string|动态对应的用户名（关注）
|∟∟icon|string|动态对应的用户头像（关注）
|∟∟atime|int|操作时间

* 返回示例

~~~
{	
    "uid": "1",	
    "nickname": "Jack Ma",	
    "icon": "/uploads/5/icon/aar.jpg",	
    "data": [		
        {			
            "type": "1",			
            "post_id": "1",			
            "title": "乐视汽车，蔚来，到底是不是PPT产品",			
            "desc": "好车，但是不买",			
            "img_url": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",			
            "best": "0",			
            "top": "0",			
            "uid": "1",			
            "nickname": "Hao li",			
            "icon": "http://love.love/hao.jpeg",			
            "atime": "15720252"
        
		}
    
	]

}
~~~Y��D    �POST(form multipart)
* url: /carboss/index.php/Admin/Forum/uploadLogo

* 参数:
~~~
！ ！ 这里必须使用 form multipart 格式！ ！
！ ！上传并更新LOGO图片，返回图片链接！ ！
"id":23                                   //品牌ID
"token": "101asdh8ferhf75gh857gh57g"      //token
~~~

<!--
{
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：成功,1失败, 16 上传失败"
			},
			"logo": {
				"value": "http://zm.fairy.com/fairy/zm.jpg",
				"type": "string",
				"desc": "LOGO链接"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1失败,16上传失败
|logo|string|LOGO链接
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "logo": "http://zm.fairy.com/fairy/zm.jpg",	
    "errstr": " "

}
~~~6Y�T      �
						"desc":"起始时间",
						"value":1501111111
					},
					"max":{
						"type":"int",
						"desc":"最终时间",
						"value":150222222
					}
				},
				"type": "obj",
				"desc": "时间范围"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"uid": {
							"type": "int",
							"desc": "用户ID",
							"value": 2
						},
						"nickname": {
							"type": "string",
							"desc": "用户昵称",
							"value": "大水货"
						},
						"phone": {
							"type": "int",
							"desc": "手机号码",
							"value": 2
						},
						"city": {
							"type": "int",
							"desc": "城市",
							"value": 2
						},
						"exp": {
							"type":  � 目标id，target_id	|
|check	 |tinyint（5) |是       |	 审核状态 &lt;/br&gt; 0:未审核 ；1:通过； 2拒绝；	 |
|reason    	 |varchar(255) |否      |    拒绝原因     |
|atime    	 |varchar(15) |是      |    添加时间     |
|ctime    	 |varchar(15) |否	      |    审核时间     |

&lt;/br&gt;&lt;/br&gt;
# example:视频审核
&lt;/br&gt;
#### 视频数据表 video

|字段|类型|空|注释|
|:----    |:-------    |:--- |-- -|------      |
|id	 		 |int(10)     |否		 |	         主键 |
|uid	 		 |int(10)     |否		 |	上传者id           |
|title		 |varchar(20) |否	   |	 视频标题	|
|desc		 |varchar(20) |否	    |	 视频描述	|
|path	 |varchar(50) |否   |    	 视频路径		 |
|data   |varchar(255) |否      |    序列化要变更的内容&lt;/br&gt;'org':‘原始内容’，&lt;/br&gt;'new':‘新内容’，&lt;/br&gt;‘title‘:'字段名称'，&lt;/br&gt;‘atime‘:'申请时间'    |
|check	 |tinyint(5) |是   |    	审核状态&lt;/br&gt;0待审核；1通过 ；2    v1/Game/PhoneTicket/checkStatus

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"uid": {
				"value": 29,
				"type": "int",
				"required": true,
				"desc": "用户ID"
			},
			"id": {
				"value": 29,
				"type": "int",
				"required": true,
				"desc": "电话票ID"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "状态：0、正常，1、锁定，2、使用中，3、已使用，4、过期，5、不存在，6、用户与电话票不匹配",
				"value": 2
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|uid|int|是|用户ID
|id|int|是|电话票ID

* 参数示例

~~~
{	
    "uid": 29,	
    "id": 29

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态：0、正常，1、锁定，2、使用中，3、已使用，4、过期，5、不存在，6、用户与电话票不匹配

* 返回示例

~~~
{	
    "status": 2

}
~~~Y��  �拒绝；	 |
|status	 |tinyint（5) |是   |    状态：0正常；1删除 |
|atime    	 |varchar(15) |是       |    添加时间     |


###流程描述
####1、新增

	-&gt;用户添加视频（video表，生成一条数据）
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca2b6bd3ad6.jpg)
	-&gt;申请（check表，生成一条数据）
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca385f0b429.jpg)
-&gt;管理员审核(
	1、通过：修改check表 check=1 o_uid=审核账号id，ctime=当前时间戳；
			   video表 check=1
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca33985da81.jpg)
####video
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca375ec1506.jpg)

	-&gt;拒绝：修改check表 check=2 、o_uid=审核账号id，ctime=当前时间戳，reason=拒绝原因
			   video表 check=2
####check
![](http://hk.iitrend.cn/showdoc/Public/Uploads/2017-09-26/59ca3af6e2c4e.jpg)
####video
![](http://hk.iitrend.cn/show    >3、砖家榜；4、点赞榜；<br/>5、人气榜

* 参数示例

~~~
{	
    "token": "safsfasfaf",	
    "type": "1"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟name|string|排行类型名
|∟desc|string|排行类型描述
|∟list|arr|---
|∟∟/|obj|排行数据
|∟∟∟uid|int|用户uid
|∟∟∟honor|string|等级
|∟∟∟icon|string|头像
|∟∟∟nickname|string|姓名
|∟∟∟rank|int|用户排名
|∟∟∟sign|string|签名
|∟∟∟score|int|个人能量值

* 返回示例

~~~
[	
    {		
        "name": "富豪榜",		
        "desc": "金币",		
        "list": [			
            {				
                "uid": "43",				
                "honor": "大师",				
                "icon": "/uploads/1/icon/dd.jpg",				
                "nickname": "麻花藤",				
                "rank": "1",				
                "sign": "我不知道钱是什么",				
                "score": "589"
            
			}
        
		]
    
	}

]
~~~cY��  �  "type": "string",
                            "value": "麻花藤",
                            "desc": "姓名"
                        },
						  "rank": {
                            "type": "int",
                            "value": "1",
                            "desc": "用户排名"
                        },
                        "sign": {
                            "type": "string",
                            "value": "我不知道钱是什么",
                            "desc": "签名"
                        },
                        "score": {
                            "type": "int",
                            "value": "589",
                            "desc": "个人能量值"
                        }
                    }
                }
            }
        }
		}
       
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type|int|是|榜单类型：<br/>1、风云榜；2、富豪榜；<br/  ��子
* Method：POST
* url：/carboss/index.php/Admin/Posting/showFeedback

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start": {
				"type": "int",
				"desc": "起始页码",
				"required": true,
				"value": 1
			},
			"page_limit": {
				"type": "int",
				"desc": "一次显示数量",
				"required": true,
				"value": 50
			},
			"feedback": {
				"type": "int",
				"desc": "反馈类型：1：推荐，2：举报",
				"required": true,
				"value": 2
			},
			"nickname":{
				"value": "zm",
				"type": "string",
				"desc": "发布用户"
			},
			"title":{
				"value": "157618888888",
				"type": "string",
				"desc": "标题"
			},
			"time":{
				"value": {
					"min":{
						"type":"int",
						"desc":"起始时间",
						"value":1501111111
					},
					"max":{
						"type":"int",
						"desc":"最终时间",
						"value":150222222
					}
				},
				"type    数值
|∟∟agree_n|int|点赞数量
|∟∟collect_n|int|收藏数量
|∟∟review_n|int|评论数量
|∟∟num|int|推荐(举报)数量
|∟∟best|int|精华帖：0是，1否
|∟∟top|int|置顶帖：0是，1否
|∟∟hot|int|热门：0是，1否
|∟∟atime|int|最近推荐/举报时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "id": "2",			
            "uid": "2",			
            "nickname": "zm_fairy",			
            "type": "2",			
            "title": "丰田换发动机有哪些要注意的？",			
            "gold": "20",			
            "agree_n": "2",			
            "collect_n": "2",			
            "review_n": "2",			
            "num": "2",			
            "best": "0",			
            "top": "0",			
            "hot": "0",			
            "atime": "1506657454"
        
		}
    
	]

}
~~~Y��华，2：置顶，3、回收站",
				"value": 2
			},
			"time":{
				"value": {
					"min":{
						"type":"int",
		   � �                                                                                                                                                                                             �-�6 �'�6 �!�6 I�]weekend.用户经验（金币）详情#### showExpOrGoldDetail
* 说明：用户经验（金币）详情
* Method：POST
* url：/carboss/index.php/Admin/User/showExpOrGoldDetail

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"uid": {
				"value": 29,
				"type": "int",
				"required": true,
				"desc": "用户ID"
			},
			"type": {
				"value": 2,
				"t�)�5 ?�wweekend.添加/修改专家用户#### editExpertUser
* 说明：添加/修改专家用户
* Method：POST
* url：/carboss/index.php/Admin/User/editExpertUser

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"requir   ~                    "type": "string",
                "value": "错误提示",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|nickname|string|否|昵称
|phone|int|否|手机号
|city|string|否|地址
|work_age|int|否|工龄
|work_type|int|否|工种职位（只选）
|sign|string|否|个性签名
|good_at|arr|否|擅长品牌（最多选5个）
|∟/|int|否|品牌id

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "nickname": "Jack ma",	
    "phone": "19956325112",	
    "city": "广东省-广州市",	
    "work_age": "8",	
    "work_type": "8",	
    "sign": "I know nothing about money",	
    "good_at": [4]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0成功；1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "错误提示"

}
~~~Y���v0.1  �": "obj",
				"desc": "最近推荐/举报时间范围"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type": "arr",
				"value": {
					"type":"obj",
					"value":{
						"id": {
							"type": "int",
							"desc": "帖子ID",
							"value": 2
						},
						"uid": {
							"type": "int",
							"desc": "用户ID",
							"value": 2
						},
						"nickname": {
							"type": "string",
							"desc": "用户名",
							"value": "zm_fairy"
						},
						"type": {
							"type": "int",
							"desc": "帖子类型：1：问答板块，2：分享板块",
							"value": 2
						},
						"title": {
							"type": "string",
							"desc": "标题",
							"value": "丰田换发动机有哪些要注意的？"
						},
						"gol   ! $!                                                                                                                                                                                                                                                                                     �lo � �admin)搜索#### search
* 说明：搜索
* url：/carboss/index.php/Client/Postings/search

<!--
{
    "params": {
        "type": "obj",
        "value": {
			
			"page": {
				"type": "int",
				"desc": "页码",
				"required": true,
				"value": 1
			},
			"num": {
				"type": "int",
				"desc": "一次显示数量",
				"required": true,
				"value": 50
			},
		 "type": {
                "type": "int",
                "value": "0",
                "desc": "板块：0全部；1问�  ��En �G �admin)搜索#### search
* 说明：搜索
* url：/carboss/index.php/Client/Postings/search

<!--
{
    "params": {
        "type": "obj",
        "value": {
		 "type": {
                "type": "  s  Tlue": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",
                    "desc": "发信人头像"
                },
                "nickname": {
                    "type": "string",
                    "value": "Jack ma",
                    "desc": "发信人昵称"
                },
                "content": {
                    "value": "我是马云",
                    "type": "string",
                    "desc": "私信内容"
                },
                "atime": {
                    "type": "int",
                    "value": "157968662",
                    "desc": "私信时间"
                },
                "reply": {
                    "value": "我是Jack Ma",
                    "type": "string",
                    "desc": "回复的内容"
                },
                "rtime": {
                    "type": "int",
                    "value": "157968662",
                    "desc": "回复消息时间"
                }
            }
        }
    }
}
    e,
                "value": "5",
                "desc": "图片id"
            }		
        }
    },
    "response": {
        "type": "obj",
        "value": {     
			 "status": {
                "type": "int",
                "value": "0",
                "desc": "状态 0、成功；1、失败；5、非法的id;13、不存在的图片id"
            },
			 "errstr": {
                "type": "string",
                "value": "错误提示",
                "desc": "错误提示"
            }

    }}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|图片id

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "id": "5"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0、成功；1、失败；5、非法的id;13、不存在的图片id
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "错误提示"

}
~~~cY�   6 6                                                                                                                                                                                                         �!�6 ��6 ?�S�
�6 ?�9weekend.用户经验/金币详情#### showAwardList
* 说�:�6 ?�weekend.用户经验/金币详情#### showAwardList
* 说明：用户经验/金币详情
* Method：POST
* url：/carboss/index.php/Admin/User/showAwardList

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "起始页码"
			},
			"page_limit":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"uid": {
				"value": 29,
				"type": "int",
				"required": true,
				"desc": "用户ID"
			},
			"type": {
				"value": 2,
				"type": "int",
			  |  �  "desc": "地址"
            },
            "work_age": {
                "type": "int",
                "value": "8",
                "desc": "工龄"
            },
            "work_type": {
                "type": "int",
                "value": "8",
                "desc": "工种职位（只选）"
            },
            "sign": {
                "type": "string",
                "value": "I know nothing about money",
                "desc": "个性签名"
            },
            "good_at": {
                "type": "arr",
                "desc": "擅长品牌（最多选5个）",
                "value": {
                    "type": "int",
                    "desc": "品牌id",
                    "value": 4
                }
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "type": "int",
                "value": "0",
                "desc": "状态 0成功；1失败"
            },
            "errstr": {
  �red": true,
                "value": 50
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "uid": {
                "type": "int",
                "value": "1",
                "desc": "我的uid"
            },
            "nickname": {
                "type": "string",
                "value": "Jack Ma",
                "desc": "我的用户名"
            },
            "icon": {
                "type": "string",
                "value": "/uploads/5/icon/aar.jpg",
                "desc": "我的头像"
            },

            "data": {
                "type": "arr",
				 "desc": "我的动态",
                "value": {
                    "type": "obj",
                    "value": {
                        "type": {
                            "type": "int",
                            "value": "1",
                            "desc": "动态类型：<br/>0点赞；1发帖；2回复;<br/>3、收藏；4、评论；<br/>5、关注;6、被关注"    问答板块，2：分享板块
|title|string|标题
|desc|string|内容描述
|gold|int|赏金金币数值
|agree_n|int|点赞数量
|collect_n|int|收藏数量
|review_n|int|评论数量
|recommend_n|int|推荐数量
|complaint_n|int|举报数量
|best|int|精华帖：0是，1否
|top|int|置顶帖：0是，1否
|adoption|int|采纳答案ID
|atime|int|修改时间
|nickname|string|昵称
|icon|string|头像
|img|obj|---
|∟url|string|图片链接
|∟rem|string|图片说明

* 返回示例

~~~
{	
    "id": 2,	
    "uid": 2,	
    "type": 2,	
    "title": "丰田换发动机有哪些要注意的？",	
    "desc": "比如拆卸发动机",	
    "gold": 200,	
    "agree_n": 2,	
    "collect_n": 2,	
    "review_n": 2,	
    "recommend_n": 2,	
    "complaint_n": 2,	
    "best": 0,	
    "top": 0,	
    "adoption": 2,	
    "atime": 1506657454,	
    "nickname": "水货",	
    "icon": "",	
    "img": {		
        "url": "http://zm.fairy.com/fairy/zm.jpg",		
        "rem": "哈哈哈哈哈哈嗝"
    
	}

}
~~~Y쯜    
    "phone": 157618888888,	
    "time": {		
        "min": "1501111111",		
        "max": "150222222"
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟uid|int|用户ID
|∟∟nickname|string|用户昵称
|∟∟phone|int|手机号码
|∟∟city|int|城市
|∟∟follower_n|int|粉丝
|∟∟posting_n|int|发帖数
|∟∟posting_quota|int|可发帖剩余数
|∟∟status|int|账号状态：1、正常，2、禁用（拉黑），3、禁言

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "uid": "2",			
            "nickname": "大水货",			
            "phone": "2",			
            "city": "2",			
            "follower_n": "2",			
            "posting_n": "2",			
            "posting_quota": "11",			
            "status": "1"
        
		}
    
	]

}
~~~Y��  �            "desc": "帖子标题"
                },
				 "desc": {
                    "type": "string",
                    "value": "是的 yes ",
                    "desc": "帖子内容"
                },
				 "uid": {
                    "type": "int",
                    "value": "45",
                    "desc": "用户uid"
                },
				"icon": {
                    "type": "string",
                    "value": "/uploads/5/icon/aar.jpg",
                    "desc": "发帖人头像"
                },
                "author": {
                    "type": "string",
                    "value": "Jack ma",
                    "desc": "发帖人"
                },
                "atime": {
                    "type": "int",
                    "value": "15014856325",
                    "desc": "发帖时间"
                },
       				"best": {
                    "type": "int",
                    "value": "0",
                    "desc": "精华帖：0是；1否"
                �  },
				"top": {
                    "type": "int",
                    "value": "0",
                    "desc": "置顶帖：0是；1否"
                },
				 "agree": {
                    "type": "int",
                    "value": "654",
                    "desc": "点赞数"
                },
				 "collect": {
                    "type": "int",
                    "value": "99",
                    "desc": "收藏数"
                },
				 "review": {
                    "type": "int",
                    "value": "99",
                    "desc": "评论数"
                }
            }
		}
         
        
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|page|int|是|页码
|num|int|是|一次显示数量
|type|int|否|板块：0全部；1问答；2分享
|car_model|arr|否|车型id
|∟/||否|
|type_contents|int|是|内容：0全部内容；1精华；2悬赏；3热门；4未解决；5已解决
|keywords|string|是|关键字
  �问答；2分享"
            },
			 "car_model": {
                "type": "arr",
                "value": [0,0,0,0],
                "desc": "车型id"
            },
			"type_contents": {
                "type": "int",
                "required": true,
                "value": "0",
                "desc": "内容：0全部内容；1精华；2悬赏；3热门；4未解决；5已解决"
            },
            "keywords": {
                "type": "string",
                "required": true,
                "len_max": 50,
                "value": "红旗L7",
                "desc": "关键字"
            }
        }
    },
    "response": {
        "type": "arr",
        "value": {
		"type":"obj",
			"value":   {
			 "id": {
                    "type": "int",
                    "value": "4",
                    "desc": "帖子id"
                },
                "title": {
                    "type": "string",
                    "value": "乐视汽车，蔚来，到底是不是PPT产品",
          �d为1、车型id为2、排量id为3的年份列表
	
	
* url：/carboss/index.php/Client/Postings/showInfoCar

<!--
{
    "params": {
        "type": "obj",
        "value": {
		"token":{
			"type":"string",
			"required":true,
			"value":"101asdh8ferhf75gh857gh57g",
			"desc": "token"
		},
            "car_attribute": {
                "type": "arr",
                "value": {
					"type": "int",
               		 "value": "1"
				},
                "desc": "汽车属性数组"
            }         
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "desc": {
                "type": "string",
				 "desc": "返回结果类型",
                "value": "车型"
            },
            "data": {
                "type": "arr",
                "value": {
                    "type": "obj",
                    "desc": "选项列表",
                    "value": {
                        "id": {
                            "type": "int",
                            "va    
* 参数示例

~~~
{	
    "page": 1,	
    "num": 50,	
    "type": "0",	
    "type_contents": "0",	
    "keywords": "红旗L7",	
    "car_model": []

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|帖子id
|∟title|string|帖子标题
|∟desc|string|帖子内容
|∟uid|int|用户uid
|∟icon|string|发帖人头像
|∟author|string|发帖人
|∟atime|int|发帖时间
|∟best|int|精华帖：0是；1否
|∟top|int|置顶帖：0是；1否
|∟agree|int|点赞数
|∟collect|int|收藏数
|∟review|int|评论数

* 返回示例

~~~
[	
    {		
        "id": "4",		
        "title": "乐视汽车，蔚来，到底是不是PPT产品",		
        "desc": "是的 yes ",		
        "uid": "45",		
        "icon": "/uploads/5/icon/aar.jpg",		
        "author": "Jack ma",		
        "atime": "15014856325",		
        "best": "0",		
        "top": "0",		
        "agree": "654",		
        "collect": "99",		
        "review": "99"
    
	}

]
~~~cY�ggz    x  x                                                                                                            �zq 1�!3admin)汽车属性列表#### showInfoCar
* 说明：汽车属性列表
	- 品牌列表，参数为[0,0,0,0]，返回所有品牌的列表
	- 车型列表，参数为[1,0,0,0]，返回所有品牌id为1的车型列表
	- 排量列表，参数为[1,2,0,0]，返回所有品牌id为1、车型id为2的排量列表
	- 年份列表，参数为[1,2,3,0]，返回所有品牌i  ãhp � �admin)搜索#### search
* 说明：搜索
* url：/carboss/index.php/Client/Postings/search

<!--
{
    "params": {
        "type": "obj",
        "value": {
			
			"page": {
				"type": "int",
				"desc": "页码",
				"required": true,
				"value": 1
			},
			"num": {
				"type": "int",
				"desc": "一次显示数量",
				"required": true,
				"value": 50
			},
		 "type": {
                "type": "int",
                "value": "0",
                "desc": "板块：0全部；1  �  �: true,
				"desc": "token"
			},
			"uid":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "用户ID"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"uid": {
				"type": "int",
				"desc": "用户ID",
				"value": 2
			},
			"user": {
				"type": "string",
				"desc": "账号",
				"value": "boshi"
			},
			"pass": {
				"type": "string",
				"desc": "密码",
				"value": "fju29fh2974th2hfg2rf"
			},
			"nickname": {
				"type": "string",
				"desc": "用户昵称",
				"value": "大水货"
			},
			"icon": {
				"type": "string",
				"desc": "用户头像",
				"value": "http://ww.fairy.com/fairy/zm.jpg"
			},
			"sign": {
				"type": "string",
				"desc": "签名",
				"value": "博士品牌特约用户"
			},
			"phone": {
				"type": "int",
				"desc": "手机号码",
				"value": 2
			},
			"city": {
				"type": "string",
				"desc": "城市",
				"value": "上海市、浦东"
			},
			"posting_quota": {
				"type": "int",
				"desc": "可发帖剩余数",
				"val    page_start": 1,	
    "page_limit": 1,	
    "nickname": "zm",	
    "phone": 157618888888,	
    "time": {		
        "min": "1501111111",		
        "max": "150222222"
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|obj|---
|∟uid|int|用户ID
|∟nickname|string|用户昵称
|∟phone|int|手机号码
|∟exp|int|用户经验值
|∟gold|int|用户可用金币
|∟follow_n|int|关注数量
|∟num|int|禁言/拉黑次数
|∟last_time|int|禁言/拉黑时间
|∟rem|string|禁言/拉黑原因

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": {		
        "uid": "2",		
        "nickname": "大水货",		
        "phone": "2",		
        "exp": "2",		
        "gold": "2",		
        "follow_n": "2",		
        "num": "2",		
        "last_time": "15023167531",		
        "rem": "发不良言论3次以上"
    
	}

}
~~~Y���  �
                        },
                        "post_id": {
                            "type": "int",
                            "value": "1",
                            "desc": "帖子id"
                        },
                        "title": {
                            "type": "string",
                            "value": "乐视汽车，蔚来，到底是不是PPT产品",
                            "desc": "帖子标题"
                        },
                        "desc": {
                            "type": "string",
                            "value": "好车，但是不买",
                            "desc": "帖子描述"
                        },
                        "img_url": {
                            "type": "string",
                            "value": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",
                            "desc": "帖子描述图片"
                        },
                        "best": {
                            "type  �pe":"arr",
				"value":{
					"type":"obj",
					"value":{
						"uid": {
							"type": "int",
							"desc": "ID",
							"value": 2
						},
						"realname": {
							"type": "string",
							"desc": "用户名",
							"value": "zm"
						},
						"phone": {
							"type": "int",
							"desc": "手机号码",
							"value": 15761235435
						},
						"group": {
							"type": "string",
							"desc": "角色组",
							"value": "Super"
						},
						"status": {
							"type": "int",
							"desc": "账号状态：1、正常，2、禁用",
							"value": 1
						},
						"atime": {
							"type": "int",
							"desc": "创建时间",
							"value": 15072972908
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|int|是|单页条数
|realname|string|否|用户名
|phone|int|否|手机号码
|time|obj|否|创建时间范围
|∟min|int|否|起始�  �					"gold": {
						"type": "int",
						"desc": "用户可用金币",
						"value": 2
					},
					"follow_n": {
						"type": "int",
						"desc": "关注数量",
						"value": 2
					},
					"num": {
						"type": "int",
						"desc": "禁言/拉黑次数",
						"value": 2
					},
					"last_time": {
						"type": "int",
						"desc": "禁言/拉黑时间",
						"value": 15023167531
					},
					"rem":{
						"type":"string",
						"desc":"禁言/拉黑原因",
						"value":"发不良言论3次以上"
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|status|int|是|账号状态：2、拉黑，3、禁言
|page_start|int|是|起始页码
|page_limit|int|是|单页条数
|nickname|string|否|用户名
|phone|int|否|手机号码
|time|obj|否|禁言时间范围
|∟min|int|否|起始时间
|∟max|int|否|最终时间

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "status": 1,	
    "  �Message/chatList


<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "arr",
        "desc": "私信",
        "value": {
            "type": "obj",
            "value": {
                "id": {
                    "type": "int",
                    "value": "3",
                    "required": true,
                    "desc": "私信id"
                },
                "status": {
                    "value": "0",
                    "type": "int",
                    "desc": "是否读取，0已读，1未读"
                },
				"uid": {
                    "value": "22",
                    "type": "int",
                    "desc": "发信人uid"
                },
                "icon": {
                    "type": "string",
                    "va  ʠ�"
			},
			"time":{
				"value": {
					"min":{
						"type":"int",
						"desc":"起始时间",
						"value":1501111111
					},
					"max":{
						"type":"int",
						"desc":"最终时间",
						"value":150222222
					}
				},
				"type": "obj",
				"desc": "禁言时间范围"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"obj",
				"value":{
					"uid": {
						"type": "int",
						"desc": "用户ID",
						"value": 2
					},
					"nickname": {
						"type": "string",
						"desc": "用户昵称",
						"value": "大水货"
					},
					"phone": {
						"type": "int",
						"desc": "手机号码",
						"value": 2
					},
					"exp": {
						"type": "int",
						"desc": "用户经验值",
						"value": 2
					},
          },
        "response": {
		 "type": "obj",
            "value": {
			    "status": {
                "type": "int",
                "value": "0",
                "desc": "状态 0成功；2关注失败；5参数错误；12请勿重复操作"
            },
			 "errstr": {
                "type": "string",
                "value": "错误提示",
                "desc": "错误提示"
            }
			
		
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|follow_uid|int|否|关注的uid
|type|int|否|动作；1、关注；2、取消关注

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "follow_uid": "55",	
    "type": "1"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0成功；2关注失败；5参数错误；12请勿重复操作
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "错误提示"

}
~~~cY��O  �iry.com/fairy/zm.jpg",
					"type": "string",
					"desc": "头像链接"
				},
				"sex": {
					"value": 1,
					"type": "int",
					"desc": "性别（0=男，1=女）"
				},
				"birthday": {
					"value": "1994-07-29",
					"type": "string",
					"desc": "出生日期"
				},
				"city": {
					"value": 11010,
					"type": "int",
					"desc": "城市编号"
				},
				"qq": {
					"value": 1881888188,
					"type": "int",
					"desc": "QQ号"
				},
				"wechat": {
					"value": "My_Fairy",
					"type": "string",
					"desc": "微信号"
				},
				"facebook": {
					"value": "Faiey@zm.com",
					"type": "string",
					"desc": "facebook账号"
				},
				"twitter": {
					"value": "Faiey@zm.com",
					"type": "string",
					"desc": "twitter账号"
				},
				"invitecode": {
					"value": "wk940729",
					"type": "string",
					"desc": "邀请码"
				},
				"points": {
					"value": 1000,
					"type": "int",
					"desc": "积分值"
				},
				"points_grade": {
					"value": 10,
					"type": "int",
	  �
		"type":"obj",
		"value":{
			"token": {
				"value": "101du43hu9gube39gh3",
				"required": true,
				"type": "string",
				"desc": "登录凭证"
			},
			"nickname": {
				"value": "fairy",
				"type": "string",
				"desc": "昵称"
			},
			"sex": {
				"value": 1,
				"type": "int",
				"desc": "性别（0=男，1=女）"
			},
			"birthday": {
				"value": "1994-07-29",
				"type": "string",
				"desc": "出生日期"
			},
			"city": {
				"value": 11010,
				"type": "int",
				"desc": "城市编号"
			},
			"qq": {
				"value": 1881888188,
				"type": "int",
				"desc": "QQ号"
			},
			"wechat": {
				"value": "My_Fairy",
				"type": "string",
				"desc": "微信号"
			},
			"facebook": {
				"value": "Faiey@zm.com",
				"type": "string",
				"desc": "facebook账号"
			},
			"twitter": {
				"value": "Faiey@zm.com",
				"type": "string",
				"desc": "twitter账号"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状    态码：0： 成功，1：失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|nickname|string|否|昵称
|sex|int|否|性别（0=男，1=女）
|birthday|string|否|出生日期
|city|int|否|城市编号
|qq|int|否|QQ号
|wechat|string|否|微信号
|facebook|string|否|facebook账号
|twitter|string|否|twitter账号

* 参数示例

~~~
{	
    "token": "101du43hu9gube39gh3",	
    "nickname": "fairy",	
    "sex": 1,	
    "birthday": "1994-07-29",	
    "city": 11010,	
    "qq": 1881888188,	
    "wechat": "My_Fairy",	
    "facebook": "Faiey@zm.com",	
    "twitter": "Faiey@zm.com"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功，1：失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~Y驅  SST
* url：/stockSchool/index.php/Client/Resource/courseRecordLists


<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "登录凭证"
            },
            "uid": {
                "type": "int",
                "desc": "学员uid",
                "required": true,
                "value": 1
            },
            "page_start": {
                "type": "int",
                "desc": "页码",
                "required": true,
                "value": 1
            },
            "page_limit": {
                "type": "int",
                "desc": "需要的页数",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "total": {
                "type": "int",
                "value": "40",
                "desc": "结果总页数"
          t",
				"desc": "帖子更新后的类型：1：问答板块，2：分享板块",
				"value": 2
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|posting_id|int|否|帖子ID
|old_type|int|否|帖子原有类型：1：问答板块，2：分享板块
|new_type|int|否|帖子更新后的类型：1：问答板块，2：分享板块

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "posting_id": 2,	
    "old_type": 2,	
    "new_type": 2

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY���    �
|∟collect_n|int|收藏数量
|∟review_n|int|评论数量
|∟best|int|精华帖：1、是，2、否
|∟top|int|置顶帖：1、是，2、否
|∟hot|int|热门：1、是，2、否
|∟adoption|int|采纳答案ID,0为未采纳任何一种答案
|∟img|arr|图片列表
|∟∟/|obj|图片信息
|∟∟∟url|string|图片链接
|∟∟∟rem|string|图片说明
|∟mtime|int|修改时间

* 返回示例

~~~
[	
    {		
        "id": 2,		
        "uid": 2,		
        "nickname": "水货",		
        "icon": "",		
        "title": "丰田换发动机有哪些要注意的？",		
        "desc": "比如拆卸发动机",		
        "agree_n": 2,		
        "collect_n": 2,		
        "review_n": 2,		
        "best": 0,		
        "top": 0,		
        "hot": 0,		
        "adoption": 0,		
        "mtime": 1506657454,		
        "img": [			
            {				
                "url": "http://zm.fairy.com/fairy/zm.jpg",				
                "rem": "哈哈哈哈哈哈嗝"
            
			}
        
		]
    
	}

]
~~~Y���    true,
				"type": "string",
				"desc": "token"
			},
			"posting_id": {
				"value": 12,
				"type": "int",
				"desc": "帖子ID"
			},
			"review_id": {
				"value": 1,
				"type": "int",
				"desc": "回答答案ID"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value": "1",
				"type": "int",
				"desc": "状态码：0： 成功，1：失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|posting_id|int|否|帖子ID
|review_id|int|否|回答答案ID

* 参数示例

~~~
{	
    "token": "101du43hu9gube39gh3",	
    "posting_id": 12,	
    "review_id": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功，1：失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": "1",	
    "errstr": " "

}
~~~Y���  V
                "top": {
                    "type": "int",
                    "value": "0",
                    "desc": "置顶帖：0是；1否"
                },
      
                "atime": {
                    "type": "int",
                    "value": "15720252",
                    "desc": "操作时间"
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page|int|是|页码
|num|int|是|一次显示数量

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "page": 1,	
    "num": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟type|int|动态类型：<br/>0、点赞；1发帖；2回复；<br/>3、收藏；4、评论；<br/>5、关注；6、被关注
|∟friend_uid|int|好友的uid
|∟friend_nickname|string|好友的用户名
|∟friend_icon|string|好友的头像
|∟uid|int|动态对应的uid（�    ��位)
|∟∟expire_at|int|否|过期时间(精确到毫秒)

* 参数示例

~~~
{	
    "exchange_type": {		
        "value": "1"
    
	},	
    "from_user": {		
        "value": "1"
    
	},	
    "to_user": {		
        "value": "1"
    
	},	
    "src": {		
        "value": "1"
    
	},	
    "type": {		
        "value": "1"
    
	},	
    "number": {		
        "value": "0907"
    
	},	
    "phone_ticket": {		
        "direction": "1",		
        "duration": "3600",		
        "expire_at": "1502375433"
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|succeeded|obj|成功部分的caseid与ticketID
|∟12|obj|(caseid与上述一致)
|∟∟phone_ticket|int|ticketID
|failed|arr|失败部分的caseid
|∟/|int|(caseid与上述一致)

* 返回示例

~~~
{	
    "succeeded": {		
        "12": {			
            "phone_ticket": "29"
        
		}
    
	},	
    "failed": [25]

}
~~~cY��]                                                                                      ty|int|城市编号
|∟qq|int|QQ号
|∟wechat|string|微信号
|∟facebook|string|facebook账号
|∟twitter|string|twitter账号
|∟invitecode|string|邀请码
|∟points|int|积分值
|∟points_grade|int|积分等级
|∟checkin_count|int|连续签到次数
|∟contribution|int|贡献值
|∟coin|int|代币
|∟gold|int|金币
|∟diamond|int|钻石

* 返回示例

~~~
[	
    {		
        "uid": 29,		
        "nickname": "wk",		
        "displayname": "72900",		
        "phone": 18818181818,		
        "icon": "http://zm.fairy.com/fairy/zm.jpg",		
        "sex": 1,		
        "birthday": "1994-07-29",		
        "city": 11010,		
        "qq": 1881888188,		
        "wechat": "My_Fairy",		
        "facebook": "Faiey@zm.com",		
        "twitter": "Faiey@zm.com",		
        "invitecode": "wk940729",		
        "points": 1000,		
        "points_grade": 10,		
        "checkin_count": 12,		
        "contribution": 100,		
        "coin": 1000,		
        "gold": 1000,		
        "diamond": 100
    
	}

]
~~~cY��k  �: "排行类型名"
            },
			"desc": {
                "type": "string",
                "value": "金币",
                "desc": "排行类型描述"
            },
            "list": {
                "type": "arr",
                "value": {
                    "type": "obj",
                	"desc": "排行数据",
                    "value": {
                        "uid": {
                            "type": "int",
                            "value": "43",
                            "desc": "用户uid"
                        },
                        "honor": {
                            "type": "string",
                            "value": "大师",
                            "desc": "等级"
                        },
						 "icon": {
                            "type": "string",
                            "value": "/uploads/1/icon/dd.jpg",
                            "desc": "头像"
                        },
                        "nickname": {
                            Malue": "水货"
				},
				"icon": {
					"type": "string",
					"desc": "头像",
					"value": ""
				},
				"title": {
					"type": "string",
					"desc": "标题",
					"value": "丰田换发动机有哪些要注意的？"
				},
				"desc": {
					"type": "string",
					"desc": "内容描述",
					"value": "比如拆卸发动机"
				},
				"agree_n": {
					"type": "int",
					"desc": "点赞数量",
					"value": 2
				},
				"collect_n": {
					"type": "int",
					"desc": "收藏数量",
					"value": 2
				},
				"review_n": {
					"type": "int",
					"desc": "评论数量",
					"value": 2
				},
				"best": {
					"type": "int",
					"desc": "精华帖：1、是，2、否",
					"value": 0
				},
				"top": {
					"type": "int",
					"desc": "置顶帖：1、是，2、否",
					"value": 0
				},
				"hot": {
					"type": "int",
					"desc": "热门：1、是，2、否",
					"value": 0
				},
				"adoption": {
					"type": "int",
					"desc": "采纳答案ID,0 为未采纳任何一种答案",    alue": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"best": {
				"type": "int",
				"desc": "精华帖数量",
				"value": 22
			},
			"solved": {
				"type": "int",
				"desc": "已解决数量",
				"value": 22
			},
			"reward": {
				"type": "int",
				"desc": "悬赏数量",
				"value": 22
			},
			"unsolved": {
				"type": "int",
				"desc": "未解决数量",
				"value": 22
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|best|int|精华帖数量
|solved|int|已解决数量
|reward|int|悬赏数量
|unsolved|int|未解决数量

* 返回示例

~~~
{	
    "best": 22,	
    "solved": 22,	
    "reward": 22,	
    "unsolved": 22

}
~~~Y��V       �O�J %�]weekendC用户视频#### showInfo
* 说明：用户视频
* Method：POST
* url：/pp/��I %�u�G �9adminA审核#### check
* 说明：审核
* url：stockSchool/index.php/Backend/UserInfo/check

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "id": {
                "type": "int",
                "value": "44",
                "required": true,
                "desc": "审核数据id"
            },
            "type": {
                "type": "int",
                "value": 2,
                "required": true,
                "desc": "审核类型：1、通过；2、拒绝"
            },
            "rem": {
                "type": "string",
                "value": "名字必须改",
                "desc": "备注（拒绝必须填备注）"
       �  �	"type": "int",
							"desc": "城市",
							"value": 2
						},
						"follower_n": {
							"type": "int",
							"desc": "粉丝",
							"value": 2
						},
						"posting_n": {
							"type": "int",
							"desc": "发帖数",
							"value": 2
						},
						"posting_quota": {
							"type": "int",
							"desc": "可发帖剩余数",
							"value": 11
						},
						"status": {
							"type": "int",
							"desc": "账号状态：1、正常，2、禁用（拉黑），3、禁言",
							"value": 1
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|int|是|单页条数
|nickname|string|否|用户名
|phone|int|否|手机号码
|time|obj|否|最近登录时间范围
|∟min|int|否|起始时间
|∟max|int|否|最终时间

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 1,	
    "page_limit": 1,	
    "nickname": "zm",	    arr
|/|obj|---
|∟date|string|时间
|∟data|arr|最新动态
|∟∟/|obj|---
|∟∟∟post_id|int|帖子id
|∟∟∟title|string|帖子标题
|∟∟∟desc|string|帖子内容
|∟∟∟img_url|string|帖子图片
|∟∟∟best|int|精华帖：0是；1否
|∟∟∟top|int|置顶帖：0是；1否
|∟∟∟agree_n|int|点赞数
|∟∟∟collect_n|int|收藏数
|∟∟∟review_n|int|评论数
|∟∟∟atime|int|发帖时间

* 返回示例

~~~
[	
    {		
        "date": "1576345521",		
        "data": [			
            {				
                "post_id": "4",				
                "title": "乐视汽车，蔚来，到底是不是PPT产品",				
                "desc": "是的 yes ",				
                "img_url": "www.a.cc/sf.jpg",				
                "best": "0",				
                "top": "0",				
                "agree_n": "654",				
                "collect_n": "99",				
                "review_n": "99",				
                "atime": "15014856325"
            
			}
        
		]
    
	}

]
~~~cY���  n": "int",
                            "value": "0",
                            "desc": "精华帖：0是；1否"
                        },
                        "top": {
                            "type": "int",
                            "value": "0",
                            "desc": "置顶帖：0是；1否"
                        },
                        "uid": {
                            "type": "int",
                            "value": "1",
                            "desc": "动态对应的uid（关注）"
                        },
                        "nickname": {
                            "type": "string",
                            "value": "Hao li",
                            "desc": "动态对应的用户名（关注）"
                        },
                        "icon": {
                            "type": "string",
                            "value": "http://love.love/hao.jpeg",
                            "desc": "动态对应的用户头像（关注）"
   �		},
						"left_num": {
							"type": "int",
							"desc": "剩余数量",
							"value": 23
						},
						"ratio": {
							"type": "int",
							"desc": "中奖率",
							"value": 10
						},
						"rem": {
							"type": "string",
							"desc": "备注",
							"value": "就是备注"
						},
						"status": {
							"type": "int",
							"desc": "状态；1、未发布，2、已发布",
							"value": 2
						},
						"mtime": {
							"type": "int",
							"desc": "修改时间",
							"value": 150231276512
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|status|int|是|状态：状态；0、全部，1、正常，2、禁用
|page_start|int|是|页码
|page_limit|int|是|单页条数
|name|string|否|奖品名称

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "status": 1,	
    "page_start": 2,	
    "page_limit": 10,	
    "name": "金币50个"

}
~~~
* 返回



|参  �sc": "手机号码"
			},
			"time":{
				"value": {
					"min":{
						"type":"int",
						"desc":"起始时间",
						"value":1501111111
					},
					"max":{
						"type":"int",
						"desc":"最终时间",
						"value":150222222
					}
				},
				"type": "obj",
				"desc": "最近登录时间范围"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总记录条数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"uid": {
							"type": "int",
							"desc": "用户ID",
							"value": 2
						},
						"nickname": {
							"type": "string",
							"desc": "用户昵称",
							"value": "大水货"
						},
						"phone": {
							"type": "int",
							"desc": "手机号码",
							"value": 2
						},
						"city": {
						   t t                                                                                                                                                                                                                                                                                                                                                                          � A�3weekend带页码获取列表10-25#### example
* 说明：例子
* Method：POST
* url：/example/index.php/Example/Example/example

&lt;!--
{
	&quot;params&quot;: {
		&quot;type&quot;: &quot;obj&quot;,
		&quot;value&quot;: {
			&quot;token&quot;: {
				&quot;value&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,
				&quot;type&quot;: &quot;string&quot;,
				&quot;required&quot;: true,
				&quot;desc&quot;: &quot;token&quot;
			},
			&quot;page_start&quot;: {
				&quot;type&quot;: &quot;int&quot;,
				&quot;desc&quot;: &quot;起始页码&quot;,
				&quot;required&quot;: true,
				&quot;value&quot;: 1
			},
			&quot;page_limit&quot;: {    �     },
            "question": {
                "value": "我是谁",
                "type": "string",
                "required": true,
                "desc": "问题(只选)"
            },
            "answer": {
                "value": "你大爷",
                "type": "string",
				 "required": true,
                "desc": "问题答案"
            },
            "phone": {
                "value": "15502589636",
                "type": "int",
				 "required": true,
                "desc": "手机号"
            },
            "invite_code": {
                "value": "hc5296",
                "type": "string",
                "desc": "邀请码"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {   
            "status": {
                "value": 1,
                "type": "int",
                "desc": "状态码： <br/>12 已经存在的用户名，<br/>10006注册失败，邀请入群， <br/>10001 注册成功"
            },
            "errst    数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟id|int|ID
|∟∟name|string|奖品名称
|∟∟type|int|奖品类型：1、实体奖品；2、金币，3、经验
|∟∟amount|int|虚拟奖品的值
|∟∟num|int|参与抽奖总数量
|∟∟left_num|int|剩余数量
|∟∟ratio|int|中奖率
|∟∟rem|string|备注
|∟∟status|int|状态；1、未发布，2、已发布
|∟∟mtime|int|修改时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "id": "2",			
            "name": "金币50个",			
            "type": "2",			
            "amount": "50",			
            "num": "50",			
            "left_num": "23",			
            "ratio": "10",			
            "rem": "就是备注",			
            "status": "2",			
            "mtime": "150231276512"
        
		}
    
	]

}
~~~Y��l  :		"data":{
				"type": "obj",
				"value": {
					"brand_id": {
						"type": "int",
						"value": "4",
						"desc": "品牌id"
					},
					"brand": {
						"type": "string",
						"value": "JEEP",
						"desc": "品牌名"
					},
					"model_id": {
						"type": "int",
						"value": "41",
						"desc": "型号id"
					},
					"model": {
						"type": "string",
						"value": "JEEP",
						"desc": "型号名"
					},
					"emissions_id": {
						"type": "int",
						"value": "23",
						"desc": "排量id"
					},
					"emissions": {
						"type": "string",
						"value": "6.9L",
						"desc": "排量"
					},
					"year_id": {
						"type": "int",
						"value": "43",
						"desc": "年份id"
					},
					"year": {
						"type": "string",
						"value": "2017",
						"desc": "年份"
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|页码
|page_limit|int|是|一次显示数量
|br    ---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|int|是|单页条数
|type|int|是|筛选类型：0、无，1、角色名，2、状态
|title|string|否|角色名
|status|int|否|状态:1、正常，0、禁用

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 1,	
    "page_limit": 1,	
    "type": 1,	
    "title": "Super",	
    "status": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟id|int|ID
|∟∟title|string|角色名
|∟∟rem|string|描述
|∟∟status|int|状态:1、正常，0、禁用

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "id": "2",			
            "title": "Spuer",			
            "rem": "Spuer",			
            "status": "1"
        
		}
    
	]

}
~~~Y��&    �间
|∟max|int|否|最终时间

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 1,	
    "page_limit": 1,	
    "realname": "zm",	
    "phone": 157618888888,	
    "time": {		
        "min": "1501111111",		
        "max": "150222222"
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟uid|int|ID
|∟∟realname|string|用户名
|∟∟phone|int|手机号码
|∟∟group|string|角色组
|∟∟status|int|账号状态：1、正常，2、禁用
|∟∟atime|int|创建时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "uid": "2",			
            "realname": "zm",			
            "phone": "15761235435",			
            "group": "Super",			
            "status": "1",			
            "atime": "15072972908"
        
		}
    
	]

}
~~~Y��    
				"desc":"密码(已经过md5 加密)"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"登录凭证"
			},
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 登录成功， 1 失败， 10001 注册成功"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|user|string|否|账号
|pass|string|否|密码(已经过md5加密)

* 参数示例

~~~
{	
    "user": "cc",	
    "pass": "e10adc3949ba59abbe56e057f20f883e"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|token|string|登录凭证
|status|int|状态码：0登录成功，1失败，10001注册成功
|errstr|string|错误提示

* 返回示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "status": 1,	
    "errstr": " "

}
~~~cY�]    |必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|int|是|单页条数
|uid|int|是|用户ID
|type|int|是|1、金币，2、经验

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 1,	
    "page_limit": 1,	
    "uid": 29,	
    "type": 2

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟id|int|ID
|∟∟task_name|string|任务名
|∟∟num|int|数值
|∟∟type|int|收支类型：1、收入，2、支出
|∟∟atime|int|增加时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "id": "2",			
            "task_name": "被点赞",			
            "num": "10",			
            "type": "1",			
            "atime": "1502151352"
        
		}
    
	]

}
~~~Y��    ��obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|int|是|单页条数
|uid|int|是|用户ID
|type|int|是|1、被关注，2、关注

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 1,	
    "page_limit": 1,	
    "uid": 29,	
    "type": 2

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟uid|int|ID
|∟∟nickname|string|昵称
|∟∟honor|int|称号
|∟∟sex|int|性别:0、男，1、女
|∟∟city|string|城市
|∟∟atime|int|关注时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "uid": "2",			
            "nickname": "被点赞",			
            "honor": "10",			
            "sex": "1",			
            "city": "广东省,广州市",			
            "atime": "1502151352"
        
		}
    
	]

}
~~~Y�  �ue": 11
			},
			"follower_n": {
				"type": "int",
				"desc": "被关注数量",
				"value": 2
			},
			"follow_n": {
				"type": "int",
				"desc": "关注数量",
				"value": 2
			},
			"question_n": {
				"type": "int",
				"desc": "提问数",
				"value": 2
			},
			"share_n": {
				"type": "int",
				"desc": "分享数",
				"value": 2
			},
			"answer_n": {
				"type": "int",
				"desc": "参与帖子数",
				"value": 2
			},
			"exp": {
				"type": "int",
				"desc": "经验值",
				"value": 2
			},
			"gold": {
				"type": "int",
				"desc": "金币数量",
				"value": 2
			},
			"atime": {
				"type": "int",
				"desc": "创建时间",
				"value": 2
			},
			"login_last_time": {
				"type": "int",
				"desc": "最近登录时间",
				"value": 2
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|uid|int|是|用户ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "uid": 1

}
~~~
* 返�    �



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|uid|int|用户ID
|user|string|账号
|pass|string|密码
|nickname|string|用户昵称
|icon|string|用户头像
|sign|string|签名
|phone|int|手机号码
|city|string|城市
|posting_quota|int|可发帖剩余数
|follower_n|int|被关注数量
|follow_n|int|关注数量
|question_n|int|提问数
|share_n|int|分享数
|answer_n|int|参与帖子数
|exp|int|经验值
|gold|int|金币数量
|atime|int|创建时间
|login_last_time|int|最近登录时间

* 返回示例

~~~
{	
    "uid": 2,	
    "user": "boshi",	
    "pass": "fju29fh2974th2hfg2rf",	
    "nickname": "大水货",	
    "icon": "http://ww.fairy.com/fairy/zm.jpg",	
    "sign": "博士品牌特约用户",	
    "phone": 2,	
    "city": "上海市、浦东",	
    "posting_quota": 11,	
    "follower_n": 2,	
    "follow_n": 2,	
    "question_n": 2,	
    "share_n": 2,	
    "answer_n": 2,	
    "exp": 2,	
    "gold": 2,	
    "atime": 2,	
    "login_last_time": 2

}
~~~Y�q  �d": {
							"type": "int",
							"desc": "赏金数值",
							"value": 20
						},
						"agree_n": {
							"type": "int",
							"desc": "点赞数量",
							"value": 2
						},
						"collect_n": {
							"type": "int",
							"desc": "收藏数量",
							"value": 2
						},
						"review_n": {
							"type": "int",
							"desc": "评论数量",
							"value": 2
						},
						"num": {
							"type": "int",
							"desc": "推荐(举报)数量",
							"value": 2
						},
						"best": {
							"type": "int",
							"desc": "精华帖：0是，1否",
							"value": 0
						},
						"top": {
							"type": "int",
							"desc": "置顶帖：0是，1否",
							"value": 0
						},
						"hot": {
							"type": "int",
							"desc": "热门：0是，1否",
							"value": 0
						},
						"atime": {
							"type": "int",
							"desc": "最近推荐/举报时间",
							"value": 1506657454
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---  �|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|int|是|一次显示数量
|feedback|int|是|反馈类型：1：推荐，2：举报
|nickname|string|否|发布用户
|title|string|否|标题
|time|obj|否|最近推荐/举报时间范围
|∟min|int|否|起始时间
|∟max|int|否|最终时间

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "page_start": 1,	
    "page_limit": 50,	
    "feedback": 2,	
    "nickname": "zm",	
    "title": "157618888888",	
    "time": {		
        "min": "1501111111",		
        "max": "150222222"
    
	}

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总记录条数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟id|int|帖子ID
|∟∟uid|int|用户ID
|∟∟nickname|string|用户名
|∟∟type|int|帖子类型：1：问答板块，2：分享板块
|∟∟title|string|标题
|∟∟gold|int|赏金    子ID
|∟∟uid|int|用户ID
|∟∟nickname|string|昵称
|∟∟type|int|帖子类型：1：问答板块，2：分享板块
|∟∟title|string|标题
|∟∟gold|int|赏金数值
|∟∟agree_n|int|点赞数量
|∟∟collect_n|int|收藏数量
|∟∟review_n|int|评论数量
|∟∟best|int|精华帖：0是，1否
|∟∟top|int|置顶帖：0是，1否
|∟∟hot|int|热门：0是，1否
|∟∟mtime|int|修改/精华/置顶/删除时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "id": "2",			
            "uid": "2",			
            "nickname": "水货",			
            "type": "2",			
            "title": "丰田换发动机有哪些要注意的？",			
            "gold": "20",			
            "agree_n": "2",			
            "collect_n": "2",			
            "review_n": "2",			
            "best": "0",			
            "top": "0",			
            "hot": "0",			
            "mtime": "1506657454"
        
		}
    
	]

}
~~~Y��    page_start": 1,	
    "page_limit": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|结果总页数
|page_start|int|返回的页码
|page_n|int|实际返回的页数
|data|arr|---
|∟/|obj|---
|∟∟id|int|文档id
|∟∟title|string|文档名
|∟∟desc|string|文档描述
|∟∟img_url|string|封面图片地址
|∟∟file_url|string|文件地址
|∟∟is_top|int|是否置顶：0否；1是
|∟∟atime|int|添加时间

* 返回示例

~~~
{	
    "total": "40",	
    "page_start": "4",	
    "page_n": "40",	
    "data": [		
        {			
            "id": "4",			
            "title": "报名表",			
            "desc": "活动报名 ",			
            "img_url": "www.ss.com/afe.jpg ",			
            "file_url": "www.ss.com/afe.txt ",			
            "is_top": "1",			
            "atime": "157541563"
        
		}
    
	]

}
~~~cY���            "value": "40",
                "desc": "实际返回的页数"
            },
            "data": {
                 }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "type": "int",
                "value": "0",
                "desc": "状态0成功；1失败"
            },
            "errstr": {
                "type": "string",
                "value": "错误提示",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|审核数据id
|type|int|是|审核类型：1、通过；2、拒绝
|rem|string|否|备注（拒绝必须填备注）

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "id": "44",	
    "type": 2,	
    "rem": "名字必须改"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0成功；1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "错误提示"

}
~~~cY��   � � �},
			"type":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "货币类型：1、（diamond）钻石"
			},
			"number":{
				"value": 100,
				�T�P�O�P %�cadmin默认页面#### reg
* 说明：注册
* Method：POST
* url：/stockSchool/index.php/Client/LoginReg/reg

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"user":{
				"value":"cc",
				"type":"string",
				"required":true,
				"desc":"账号（必须是字母+数字）"
			},
			"pass":{
				"value":"e10adc3949b  ��l�O %�weekendC赞赏详情#### showReward
* 说明：赞赏详情
* Method：POST
* url：/pp/v1/Client/Rp/showReward
�Y�O 7�_weekendC我赞赏过�3�O =�weekendC我赞赏别人的记录#### showRewardOther
* 说明：我赞赏别人的记录
* Method：POST
* url：/pp/v1/Client/Rp/showRewardOther

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc":   \   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    �F�H �[admin@登录#### login
* 说明：登录
* Method：POST
* url：/stockSchool/index.php/Client/Login/login

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"user":{
				"value":"cc",
				"type":"string",
				"desc":"账号"
			},
			"pass":{
				"value":"e10adc3949ba59abbe56e057f20f883e",
				"type":"string",  �    h  h   
               
                "id": {
                    "type": "int",
               ��I 1�]	weekendC上传我的视频#### uploadVideo
* 说明:上传我的视频
* Method：POST
* url: /pp/v1/Client/Rp/uploadVideo

* 参数:
~~~
token: "101asdh8ferhf75gh857gh57g"      //token
~~~

<!--
{
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：成功,1失败, 16 上传失败"
			},
			"video": {
				"value": "http://zm.fairy.com/fairy/zm.jpg",
				"type": "string",
				"desc": "头像链接"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1失败,16上传失败
|video|string|头像链接
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "video": "http://zm.fairy.com/fairy/zm.jpg",	
    "errstr": " "

}
~~~Y��{    �  �e56e057f20f883e",
				"type":"string",
				"required":true,
				"desc":"密码(已经过md5 加密)"
			},
			"qq":{
�q�P %�'admin默认页面#### reg
* 说明：注册
* Method：POST
* url：/stockSchool/index.php/Client/LoginRe�v�P�q�P �1admin@注册#### reg
* 说明：注册
* Method：POST
* url：/stockSchool/index.php/Client/LoginReg/reg

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "user": {
                "value": "cc",
                "type": "string",
                "required": true,
                "desc": "账号（必须是字母+数字）"
            },
            "pass": {
                "value": "e10adc3949ba59abbe56e057f20f883e",
                "type": "string",
                "required": true,
                "desc": "密码(已经过md5 加密)"
            },
            "qq": {
                "value": "10001",
                "type": "int",
                "required": true,
                "desc": "qq号"
         �    ��态码:0、成功，1、失败",
				"value": 1
			},
			"errstr": {
				"type": "string",
				"desc": "错误提示",
				"value": " "
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|video_id|int|是|视频ID
|to_uid|int|是|视频所属用户ID
|src|int|是|操作类型：1、送更多，2、超级赞，3、赞
|type|int|是|货币类型：1、diamond(钻石)，2、gold(金币),3、coin(代币)
|number|int|是|赞赏数量（默认为0）
|rem|string|是|留言

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "video_id": 1,	
    "to_uid": 1,	
    "src": 1,	
    "type": 1,	
    "number": 100,	
    "rem": "留言成功"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码:0、成功，1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~
Y��		"status": {
				"type": "int",
				"desc": "状    atus&quot;: {
				&quot;value&quot;:1,
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;状态码：0 登录成功， 1 失败， 10001 注册成功&quot;
			},
			&quot;errstr&quot;: {
				&quot;value&quot;: &quot; &quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;错误提示&quot;
			}
		}
    }
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|user|string|否|账号
|pass|string|否|密码(已经过md5加密)

* 参数示例

~~~
{	
    &quot;user&quot;: &quot;cc&quot;,	
    &quot;pass&quot;: &quot;e10adc3949ba59abbe56e057f20f883e&quot;

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|token|string|登录凭证
|status|int|状态码：0登录成功，1失败，10001注册成功
|errstr|string|错误提示

* 返回示例

~~~
{	
    &quot;token&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,	
    &quot;status&quot;: 1,	
    &quot;errstr&quot;: &quot; &quot;

}
~~~Y��      },
            "errstr": {
                "value": " ",
                "type": "string",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type|int|是|类型:<br/>1、普通修改；<br/>2、手机验证码找回密码；<br/>3、预设问题找回密码
|user|string|否|账号
|answer|string|否|预设问题答案
|code|int|否|手机验证码

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": "1",	
    "user": "dasabi123",	
    "answer": "你大爷",	
    "code": "594562"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：<br/>0修改成功，<br/>4修改失败，<br/>6答案错误，<br/>17手机验证码错误，
|new_pass|string|新密码
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "new_pass": "cd5156d",	
    "errstr": " "

}
~~~cY�    �  �                                                                                                                                                                         �B �cadminstock#### login
* 说明：登录
* Method：POST
* url：/stockSchool/index.php/Client/Login/login

&lt;!--
{
    &quot;params&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			&quot;user&quot;:{
				&quot;value&quot;:&quot;cc&quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;账号&quot;
			},
			&quot;pass&quot;:{
				&quot;value&quot;:&quot;e10adc3949ba59abbe56e057f20f883e&quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;密码(已经过md5 加密)&quot;
			}
		}
    },
    &quot;response&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			&quot;token&quot;: {
				&quot;value&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;登录凭证&quot;
			},
			&quot;st  �   � �                                                                                                                                    �n�p 1�weekendC其他人的视频#### showVideo
* 说明：其他人的视频
* Method：POST
* url：/pp/v1/Client/Rp/showVideo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"uid": {
				"value": 12,
				"type": "int",
				"required": true,
				"desc": "用户ID"
			},
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"id": {
				"value": 12,
				"type": "int",
				�h�p 1�weekendC其他人的视频#### showVideo
* 说明：其他人的视频
* Method：POST
* url：/pp/v1/Client/Rp/showVideo

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"uid": {
				"value": 12,
				"type": "int",
				"requir  `  ckSchool/index.php/Client/Resource/documentLists

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "page_start": {
                "type": "int",
                "desc": "页码",
                "required": true,
                "value": 1
            },
            "page_limit": {
                "type": "int",
                "desc": "需要的页数",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "total": {
                "type": "int",
                "value": "40",
                "desc": "结果总页数"
            },
            "page_start": {
                "type": "int",
                "value": "4",
                "desc": "返回的页码"
            },
             r": {
                "value": " ",
                "type": "string",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|user|string|是|账号（必须是字母+数字）
|pass|string|是|密码(已经过md5加密)
|qq|int|是|qq号
|question|string|是|问题(只选)
|answer|string|是|问题答案
|phone|int|是|手机号
|invite_code|string|否|邀请码

* 参数示例

~~~
{	
    "user": "cc",	
    "pass": "e10adc3949ba59abbe56e057f20f883e",	
    "qq": "10001",	
    "question": "我是谁",	
    "answer": "你大爷",	
    "phone": "15502589636",	
    "invite_code": "hc5296"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：<br/>12已经存在的用户名，<br/>10006注册失败，邀请入群，<br/>10001注册成功
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY�a    ?  ?                                                     �=�Q %�=admin@退出登录#### logout
* 说明：退出登录
* Method：POST
* url：/stockSchool/index.php/Client/LoginReg/logout

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：退出成功"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：退出成功
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY��    heckToken

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"token"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：正常, 8：token已失效"
			},
			"time":{
				"value":1512356438,
				"type":"int",
				"desc":"到期时间（时间戳）"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：正常,8：token已失效
|time|int|到期时间（时间戳）
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "time": 1512356438,	
    "errstr": " "

}
~~~cY��   r r                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ��R #�Iadmin@检查token#### checkToken
* 说明：检查token
* Method：POST
* url：/stockSchool/index.php/Client/LoginReg/c  �  sjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "uid": {
                "type": "int",
                "value": "3",
                "desc": "uid"
            },
            "icon": {
                "type": "string",
                "value": "/uploads/5/icon/aar.jpg",
                "desc": "头像"
            },
			"nickname": {
                "type": "string",
                "value": "风清扬",
                "desc": "昵称"
            },
            "realname": {
                "type": "string",
                "value": "令狐冲",
                "desc": "真实姓名"
            },
			 "question": {
                "type": "string",
                "value": "我是谁",
                "desc": "预设问题"
            },
            "phone": {
                "type": "int",
                "value": "15896569856",
                "desc": "手机号"
            },
			"address ": {
               � �                                                             �-�S %�adminB个人资料#### showInfo
* 说明：个人资料
* url：stockSchool/index.php/Client/Profile/showInfo

<!--
{
    "params": {
        "type": "obj",
        "value": {
      
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "uid": {
                "type": "int",
                "value": "3",
                "desc": "uid"
            },
            "icon": {
        �?�S %�AadminB个人资料#### showInfo
* 说明：个人资料
* url：stockSchool/index.php/Client/Profile/showInfo

<!--
{
    "params": {
        "type": "obj",
        "value": {
      
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbfl  �    {
            "status": {
                "type": "int",
                "value": "0",
                "desc": "状态 0成功；1失败"
            },
            "errstr": {
                "type": "string",
                "value": "错误提示",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|nickname|string|否|昵称
|realname|string|否|真实姓名
|qq|int|否|qq号
|phone|int|否|手机号
|address|string|否|地址

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "nickname": "风清扬",	
    "realname": "令狐冲",	
    "qq": "1258645",	
    "phone": "15896569856",	
    "address ": "广东-广州"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0成功；1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "错误提示"

}
~~~cY�G  : {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },

			"nickname": {
                "type": "string",
                "value": "风清扬",
                "desc": "昵称"
            },
            "realname": {
                "type": "string",
                "value": "令狐冲",
                "desc": "真实姓名"
            },
			  "qq": {
                "type": "int",
                "value": "1258645",
                "desc": "qq号"
            },
            "phone": {
                "type": "int",
                "value": "15896569856",
                "desc": "手机号"
            },
			"address ": {
                "type": "string",
                "value": "广东-广州",
                "desc": "地址"
            }
            
        }
    },
    "response": {
        "type": "obj",
        "value":    � h� �                                                                                                                                                                                              �w�V %�1adminB修改密码#### change�H�V %�SadminB修改密码#### changePwd
* 说明：修改密码
* Method：POST
* url：/stockSchool/index.php/Client/Profile/changePwd

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"token"
			},
			"old_pass":{
				"value":"e10adc3949ba59abbe56e057f20f883e",
				"type":"string",
				"desc":"密码(已经过md5 加密)"
			},
			"answer":{
				"value":"你大  ��U %�]adminB上传头像#### upload
* 说明：上传头像
* url：stockSchool/index.php/Client/Profile/upload
* 参数：
---
	！ ！   ��T %�SadminB编辑资料#### editInfo
* 说明：编辑资料
* url：stockSchool/index.php/Client/Profile/editInfo

<!--
{
    "params"      tus&quot;: {
				&quot;value&quot;:1,
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;状态码：0 发送成功， 1 失败 ，4手机号格式不正确
			},
			&quot;errstr&quot;: {
				&quot;value&quot;: &quot; &quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;错误提示&quot;
			}
		}
    }
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|user|string|否|账号
|pass|string|否|密码(已经过md5加密)

* 参数示例

~~~
{	
    &quot;user&quot;: &quot;cc&quot;,	
    &quot;pass&quot;: &quot;e10adc3949ba59abbe56e057f20f883e&quot;

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|token|string|登录凭证
|status|int|状态码：0登录成功，1失败，10001注册成功
|errstr|string|错误提示

* 返回示例

~~~
{	
    &quot;token&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,	
    &quot;status&quot;: 1,	
    &quot;errstr&quot;: &quot; &quot;

}
~~~Y��            },
            "errstr": {
                "value": " ",
                "type": "string",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type|int|是|验证类型:<br/>1、手机验证码；<br/>2、预设问题
|user|string|否|账号
|answer|string|否|预设问题答案
|phone|int|否|手机号
|code|int|否|验证码

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": "1",	
    "user": "dasabi123",	
    "answer": "你大爷",	
    "phone": "13698695000",	
    "code": "852582"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：<br/>0成功，<br/>1失败，<br/>6答案错误，<br/>17手机验证码错误，
|new_pass|string|新密码
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "new_pass": "cd5156d",	
    "errstr": " "

}
~~~cY�    这里必须使用 form multipart 格式！ ！ 
	token: "afdsajfk;dlsa.jf89iehn"    		  //用户token
	input type='file' name='pic' 
---

<!--
{
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "type": "int",
                "value": "0",
                "desc": "状态 0正常；1失败"
            },
			"errstr": {
                "type": "string",
                "value": "",
                "desc": "错误提示"
            },
            "icon": {
                "type": "string",
                "value": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg",
                "desc": "头像url"
            }	
        }
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0正常；1失败
|errstr|string|错误提示
|icon|string|头像url

* 返回示例

~~~
{	
    "status": "0",	
    "errstr": "",	
    "icon": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.jpg"

}
~~~cY�j   � �				"type":"string",
				"desc":"预设问题答案"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
	
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：<br/>0 修改成功，<br/> 4 修改失败，<br/> 20 不能与原密码相同"
			},
			"errstr": {
				"value�>�V %�?adminB修改密码#### changePwd
* 说明：修改密码
* Method：POST
* url：/stockSchool/index.php/Client/Profile/changePwd

<!--
{
    "para��V %�wadminB修改密码#### changePwd
* 说明：修改密码
* Method：POST
* url：/stockSchool/index.php/Client/Profile/changePwd

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"token"
			},
			"old_pass":{
				"value":"e10adc3949ba59abbe56e057f20f883e",
				"type":"string",
				"desc":"原密码(已经过md5 加密)"
			},	
			"new_pass":{
				"value":"e10adc3949ba59abbe56e057f20f883e",
				"type":"string",
				"desc":"新密码(已�          "type": "string",
                "value": "广东-广州",
                "desc": "地址"
            },
            "role": {
                "type": "string",
                "value": "学员",
                "desc": "角色"
            }          
         
            
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|uid|int|uid
|icon|string|头像
|nickname|string|昵称
|realname|string|真实姓名
|question|string|预设问题
|phone|int|手机号
|address|string|地址
|role|string|角色

* 返回示例

~~~
{	
    "uid": "3",	
    "icon": "/uploads/5/icon/aar.jpg",	
    "nickname": "风清扬",	
    "realname": "令狐冲",	
    "question": "我是谁",	
    "phone": "15896569856",	
    "address ": "广东-广州",	
    "role": "学员"

}
~~~cY�   W W                                                                                                                                                                                                                                                                                                                                             � �admintoken#### SendSms
* 说明：发送手机验证码
* Method：POST
* url：/stockSchool/index.php/Client/Login/sendSms

&lt;!--
{
    &quot;params&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			&quot;token&quot;: {
				&quot;value&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;登录凭证&quot;
			},
			&quot;phone&quot;:{
				&quot;value&quot;:&quot;15863545896&quot;,
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;手机号&quot;
			}
		}
    },
    &quot;response&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			
			&quot;sta     = =                                                                                                                                                                                                                                                                                                          �H�W %�Uadmin默认页面#### sendSms
* 说明：发送手机验证码
* Method：POST
* url：/stockSchool/index.php/Client/Login/sendSms

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"登录凭证"
			},
			"phone":{
				"value":"15863545896",
				"type":"int",
				"desc":"手机号"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态�7�W 7�adminB发送手机验证码#### sendSms
* 说明：发送手机验证码
* Method：POST
* url：/stockSchool/index.php/Client/Login/sendSms

<!--
{
    "params": {
		"type"      		"value":{
			"id": {
				"value": 15,
				"type": "int",
				"desc": "视频ID"
			},
			"uid": {
				"value": 15,
				"type": "int",
				"desc": "用户ID"
			},
			"nickname": {
				"value": "zm",
				"type": "string",
				"desc": "用户名"
			},
			"video": {
				"value": "http://zm.fairy.com/fairy/zm.mkv",
				"type": "string",
				"desc": "视频链接"
			},
			"mtime": {
				"value": 15023542343,
				"type": "int",
				"desc": "上传时间"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|视频ID
|uid|int|用户ID
|nickname|string|用户名
|video|string|视频链接
|mtime|int|上传时间

* 返回示例

~~~
{	
    "id": 15,	
    "uid": 15,	
    "nickname": "zm",	
    "video": "http://zm.fairy.com/fairy/zm.mkv",	
    "mtime": 15023542343

}
~~~Y��    :"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"登录凭证"
			},
			"phone":{
				"value":"15863545896",
				"type":"int",
				"desc":"手机号"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 发送成功， 1 失败 ，4手机号格式不正确"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证
|phone|int|否|手机号

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "phone": "15863545896"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0发送成功，1失败，4手机号格式不正确
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY�   � �                                                                                                            �~�X %�?adminB找回密�\�X %�{adminB找回密码#### resetPwd
* 说明：找回密码
* Method：POST
* url：/stockSchool/index.php/Client/Profile/resetPwd

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required":true,
				"desc":"token"
			},
			"type": {
				"��X %�SadminB找回密码#### resetPwd
* 说明：找回密码
* Method：POST
* url：/stockSchool/index.php/Client/Profile/resetPwd

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "required": true,
                "desc": "token"
            },
            "type": {
                "value": "1",
                "type": "int",
                "required": true,
                            },
            "user": {
                "value": "dasabi123",
                "type": "string",
                "desc": "账号"
            },
			
            "answer": {
                "value": "你大爷",
                "type": "string",
                "desc": "预设问题答案"
            },
	
            "phone": {
                "value": "13698695000",
                "type": "int",
                "desc": "手机号"
            },
			"code": {
                "value": "852582",
                "type": "int",
                "desc": "验证码"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "value": 1,
                "type": "int",
                "desc": "状态码：<br/>0 成功，<br/> 1 失败，<br/> 6 答案错误，<br/> 17手机验证码错误，"
            },
			 "new_pass": {
                "value":"cd5156d",
                "type": "string",
                "desc": "新密码"
      �  "desc": "类型:<br/>1、普通修改；<br/>2、手机验证码找回密码；<br/>3、预设问题找回密码"
            },
            "user": {
                "value": "dasabi123",
                "type": "string",
                "desc": "账号"
            },
            "answer": {
                "value": "你大爷",
                "type": "string",
                "desc": "预设问题答案"
            },
            "code": {
                "value": "594562",
                "type": "int",
                "desc": "手机验证码"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "value": 1,
                "type": "int",
                "desc": "状态码：<br/>0 修改成功，<br/> 4 修改失败，<br/> 6 答案错误，<br/> 17手机验证码错误，"
            },
			 "new_pass": {
                "value":"cd5156d",
                "type": "string",
                "desc": "新密码"
              ��过md5 加密)"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
	
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：<br/>0 修改成功，<br/> 4 修改失败，<br/> 20 不能与原密码相同"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|old_pass|string|否|原密码(已经过md5加密)
|new_pass|string|否|新密码(已经过md5加密)

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "old_pass": "e10adc3949ba59abbe56e057f20f883e",	
    "new_pass": "e10adc3949ba59abbe56e057f20f883e"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：<br/>0修改成功，<br/>4修改失败，<br/>20不能与原密码相同
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY�   � � �                                                                                                                                                                                                �0�Z %�#adminD书籍列表#### bookLists
* 说明：书籍列表
* Method：POST
* url：/stockSchool/index.php/Client/Resource/bookLists

<!--
{
    "params": {
        "type":   ��d�Y 3�}adminB绑定/解绑手机#### editPhone
* 说明：绑定/解绑手机
* Method：POST
* url：/stockSchool/index.php/Client/Profile/editPhone

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "required": true,
                "desc": "token"
            },
            "type": {
                "value": "1",
                "type": "int",
                "required": true,
                "desc": "验证类型:<br/>1、手机验证码；<br/>2、预设问题"
                   "type": "int",
                "desc": "页码",
                "required": true,
                "value": 1
            },
            "num": {
                "type": "int",
                "desc": "单页数量",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {

			"type":"arr",
			  "value": {
            "type": "obj",
            "value": {
                "id": {
                    "type": "int",
                    "value": "4",
                    "desc": "帖子id"
                },
                "title": {
                    "type": "string",
                    "value": "乐视汽车，蔚来，到底是不是PPT产品",
                    "desc": "帖子标题"
                },
                "desc": {
                    "type": "string",
                    "value": "是的 yes ",
                    "desc": "帖子内容"
                },
                "uid": {
                    "type": "int",
        "desc": "token"
            },
            "type": {
                "type": "int",
                "value": "0",
                "desc": "板块：0全部；1问答；2分享"
            },
            "car_attribute": {
                "type": "arr",
                "value": {
                    "type": "int",
                    "desc": "四个参数依次代表<br/>品牌(car_brand)，<br/>车型(car_model),<br/>排量(car_emissions)，<br/>年份(car_year",
                    "value": [0,0,0,0]
                },
                "desc": "汽车属性数组"
            },
            "type_contents": {
                "type": "int",           
                "value": "0",
                "desc": "内容：0全部内容；1精华；2悬赏；3热门；4未解决；5已解决"
            },
            "keywords": {
                "type": "string",
     
                "len_max": 50,
                "value": "红旗L7",
                "desc": "关键字"
            },
            "page": {
                   "value": "45",
                    "desc": "用户uid"
                },
                "icon": {
                    "type": "string",
                    "value": "/uploads/5/icon/aar.jpg",
                    "desc": "发帖人头像"
                },
                "author": {
                    "type": "string",
                    "value": "Jack ma",
                    "desc": "发帖人"
                },
                "atime": {
                    "type": "int",
                    "value": "15014856325",
                    "desc": "发帖时间"
                },
                "best": {
                    "type": "int",
                    "value": "0",
                    "desc": "精华帖：0是；1否"
                },
                "top": {
                    "type": "int",
                    "value": "0",
                    "desc": "置顶帖：0是；1否"
                },
                "agree_n": {
                    "type": "int",
                      "value": "654",
                    "desc": "点赞数"
                },
                "collect_n": {
                    "type": "int",
                    "value": "99",
                    "desc": "收藏数"
                },
                "review_n": {
                    "type": "int",
                    "value": "99",
                    "desc": "评论数"
                }
            }
        }

    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|type|int|否|板块：0全部；1问答；2分享
|car_attribute|arr|否|汽车属性数组
|∟/|int|否|四个参数依次代表<br/>品牌(car_brand)，<br/>车型(car_model),<br/>排量(car_emissions)，<br/>年份(car_year
|type_contents|int|否|内容：0全部内容；1精华；2悬赏；3热门；4未解决；5已解决
|keywords|string|否|关键字
|page|int|是|页码
|num|int|是|单页数量

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"    ,	
    "type": "0",	
    "type_contents": "0",	
    "keywords": "红旗L7",	
    "page": 1,	
    "num": 50,	
    "car_attribute": [0,0,0,0]

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|帖子id
|∟title|string|帖子标题
|∟desc|string|帖子内容
|∟uid|int|用户uid
|∟icon|string|发帖人头像
|∟author|string|发帖人
|∟atime|int|发帖时间
|∟best|int|精华帖：0是；1否
|∟top|int|置顶帖：0是；1否
|∟agree_n|int|点赞数
|∟collect_n|int|收藏数
|∟review_n|int|评论数

* 返回示例

~~~
[	
    {		
        "id": "4",		
        "title": "乐视汽车，蔚来，到底是不是PPT产品",		
        "desc": "是的 yes ",		
        "uid": "45",		
        "icon": "/uploads/5/icon/aar.jpg",		
        "author": "Jack ma",		
        "atime": "15014856325",		
        "best": "0",		
        "top": "0",		
        "agree_n": "654",		
        "collect_n": "99",		
        "review_n": "99"
    
	}

]
~~~cY��            "type": "arr",
                "value": {
                    "type": "obj",
                    "value": {
                        "id": {
                            "type": "int",
                            "value": "4",
                            "desc": "书籍id"
                        },
                        "title": {
                            "type": "string",
                            "value": "无愁河的浪子",
                            "desc": "书籍名"
                        },
                        "desc": {
                            "type": "string",
                            "value": "老头儿 ",
                            "desc": "书籍描述"
                        },
							 "img_url": {
                            "type": "string",
                            "value": "www.ss.com/afe.jpg ",
                            "desc": "书籍封面图片地址"
                        },
						 "author": {
                            "type": "string",
                                         },
									"status": {
                                        "value": "0",
                                        "type": "int",                            
                                        "desc": "是否读取，0已读，1未读"
                                    }
                                }
                            }
                        
                        
     
        
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|通知id
|∟title|string|通知标题
|∟atime|int|通知时间
|∟status|int|是否读取，0已读，1未读

* 返回示例

~~~
[	
    {		
        "id": "3",		
        "title": "我是马云",		
        "atime": "157968662",		
        "status": "0"
    
	}

]
~~~cY�  7   "page_n": {
                "type": "int",
                "value": "40",
                "desc": "实际返回的页数"
            },
            "data": {
                "type": "arr",
                "value": {
                    "type": "obj",
                    "value": {
                        "id": {
                            "type": "int",
                            "value": "4",
                            "desc": "文档id"
                        },
                        "title": {
                            "type": "string",
                            "value": "报名表",
                            "desc": "文档名"
                        },
                        "desc": {
                            "type": "string",
                            "value": "活动报名 ",
                            "desc": "文档描述"
                        },
							 "img_url": {
                            "type": "string",
                            "value": "www.ss.com/afe.jpg "  �                       "value": "黄永玉 ",
                            "desc": "作者"
                        },
						 "file_url": {
                            "type": "string",
                            "value": "www.ss.com/afe.txt ",
                            "desc": "书籍文件地址"
                        },
						 "is_top": {
                            "type": "int",
                            "value": "1",
                            "desc": "是否置顶：0否；1是"
                        },
                        "atime": {
                            "type": "int",
                            "value": "157541563",
                            "desc": "添加时间"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|页码
|page_limit|int|是|需要的页数

* 参数示例

~~~
{	
    "to    t|是|单页条数
|type|int|是|货币类型：1、diamond(钻石)，2、gold(金币),3、coin(代币)

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 1,	
    "page_limit": 1,	
    "type": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总赞赏人数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟uid|int|用户ID
|∟∟nickname|string|用户名
|∟∟type|int|赞赏货币类型：1、diamond(钻石)，2、gold(金币),3、coin(代币)
|∟∟number|int|赞赏数值
|∟∟rem|string|留言
|∟∟atime|int|赞赏时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "uid": "2",			
            "nickname": "例子",			
            "type": "1",			
            "number": "2",			
            "rem": "一起出来吃个饭？",			
            "atime": "15023854324"
        
		}
    
	]

}
~~~Y��,    ": {
        "type": "obj",
        "value": {
            "status": {
                "value": "1",
                "type": "int",
                "desc": "状态码：0： 成功，等待系统审核，1：失败"
            },
            "errstr": {
                "value": " ",
                "type": "string",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|否|帖子id(新增时不传)
|title|string|否|帖子标题
|desc|string|否|帖子描述

* 参数示例

~~~
{	
    "token": "101du43hu9gube39gh3",	
    "id": 12,	
    "title": "全国小学生守则",	
    "desc": "1、热爱祖国"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功，等待系统审核，1：失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": "1",	
    "errstr": " "

}
~~~cY��E   � ��.php/Client/Resource/addFile

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "token"
            },
            "type": {
                "type": "int",
                "value": "1",
                "desc": "文件类型：1、视频；2、书籍；3、文档"
            },
            "title": {
                "type": "string",
           �
�c �cadminE评论#### reply
* 说明：回复帖子
* url：/stockSchool/index.php/Client/Posting/reply


<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type": "string",
				"desc": "token"
			},		
			"posting_id": {
				"type": "int",
				"desc": "帖子ID",
				"value": 12
			},
			"reply_id": {
				"type": "int",
				"desc  .�/�b 1�adminE帖子图片上传#### uploadImg
* 说明: 帖子图片上传
* Method：POST(form   5    sa.jf89iehn"    		  //用户token
	input type='file' name='res' 
---

<!--
{
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "type": "int",
                "value": "0",
                "desc": "状态 0正常；1失败；5请输入id；13不存在的反馈id"
            },
            "file_url": {
                "type": "string",
                "value": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.txt",
                "desc": "文件url"
            },
			 "id":{
                "type": "int",
                "value": "55",
                "desc": "文件id"
            }
        }
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态0正常；1失败；5请输入id；13不存在的反馈id
|file_url|string|文件url
|id|int|文件id

* 返回示例

~~~
{	
    "status": "0",	
    "file_url": "http://pd.lbyisheng.com/t/upload/pire/do07/2/f4c2.txt",	
    "id": "55"

}
~~~cY���   chool/index.php/Client/Resource/videoLists

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "page_start": {
                "type": "int",
                "desc": "页码",
                "required": true,
                "value": 1
            },
            "page_limit": {
                "type": "int",
                "desc": "需要的页数",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "total": {
                "type": "int",
                "value": "40",
                "desc": "结果总页数"
            },
            "page_start": {
                "type": "int",
                "value": "4",
                "desc": "返回的页码"
            },
            "pa  !ge_n": {
                "type": "int",
                "value": "40",
                "desc": "实际返回的页数"
            },
            "data": {
                "type": "arr",
                "value": {
                    "type": "obj",
                    "value": {
                        "id": {
                            "type": "int",
                            "value": "4",
                            "desc": "视频id"
                        },
                        "title": {
                            "type": "string",
                            "value": "时间简史的霍金",
                            "desc": "视频名"
                        },
                        "desc": {
                            "type": "string",
                            "value": "时间简史 ",
                            "desc": "视频描述"
                        },
							 "img_url": {
                            "type": "string",
                            "value": "www.ss.com/afe  ".jpg ",
                            "desc": "封面图片地址"
                        },
				
						 "file_url": {
                            "type": "string",
                            "value": "www.ss.com/afe.txt ",
                            "desc": "文件地址"
                        },
						 "is_top": {
                            "type": "int",
                            "value": "1",
                            "desc": "是否置顶：0否；1是"
                        },
                        "atime": {
                            "type": "int",
                            "value": "157541563",
                            "desc": "添加时间"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|页码
|page_limit|int|是|需要的页数

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	    
    "page_start": 1,	
    "page_limit": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|结果总页数
|page_start|int|返回的页码
|page_n|int|实际返回的页数
|data|arr|---
|∟/|obj|---
|∟∟id|int|视频id
|∟∟title|string|视频名
|∟∟desc|string|视频描述
|∟∟img_url|string|封面图片地址
|∟∟file_url|string|文件地址
|∟∟is_top|int|是否置顶：0否；1是
|∟∟atime|int|添加时间

* 返回示例

~~~
{	
    "total": "40",	
    "page_start": "4",	
    "page_n": "40",	
    "data": [		
        {			
            "id": "4",			
            "title": "时间简史的霍金",			
            "desc": "时间简史 ",			
            "img_url": "www.ss.com/afe.jpg ",			
            "file_url": "www.ss.com/afe.txt ",			
            "is_top": "1",			
            "atime": "157541563"
        
		}
    
	]

}
~~~cY���                                                                                                        ;密钥类型（只选）&quot;
			}
		}
    },
    &quot;response&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			
			&quot;status&quot;: {
				&quot;value&quot;:1,
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;状态码：0 成功， 1 失败&quot;
			},
			&quot;errstr&quot;: {
				&quot;value&quot;: &quot; &quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;错误提示&quot;
			}
		}
    }
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证
|type|int|否|密钥类型（只选）

* 参数示例

~~~
{	
    &quot;token&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,	
    &quot;type&quot;: &quot;5&quot;

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    &quot;status&quot;: 1,	
    &quot;errstr&quot;: &quot; &quot;

}
~~~Y��[  * url：/stockSchool/index.php/Client/Resource/applyKeyList

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "登录凭证"
            }
        }
    },
    "response": {
        "type": "arr",
        "value": {
            "type": "obj",
            "value": {
                "id": {
                    "value": 1,
                    "type": "int",
                    "desc": "记录id"
                },
                "type": {
                    "value": "教育视频",
                    "type": "string",
                    "desc": "密钥类型"
                },
                "status": {
                    "value": "1",
                    "type": "int",
                    "desc": "申请状态：1、通过；2、待审核；3、拒绝"
                },
                "atime": {
                    "value": "157216213",
                   r �r                                                                                                                                                                                                                                                                                                                                                                      �k �/adminrequired#### applyStudy
* 说明：用户申请学员
* Method：POST
* url：/stockSchool/index.php/  �	 �oadminnewest#### applyKey
* 说明：密钥申请
* Method：POST
* url：/stockSchool/index.php/Client/Resource/applyKey

&lt;!--
{
    &quot;params&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			&quot;token&quot;: {
				&quot;value&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;登录凭证&quot;
			},
			&quot;type&quot;:{
				&quot;value&quot;:&quot;5&quot;,
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot  #    .php/Client/Resource/applyKey

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"登录凭证"
			},
			"type":{
				"value":"5",
				"type":"int",
				"desc":"密钥类型（只选）"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证
|type|int|否|密钥类型（只选）

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": "5"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY��g   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ��` %�_admin默认页面#### applyKeyList
* 说明：密钥申请记录
* Method：POST
* url：/stockSchool/index.php/Client/Resource/applyKeyList

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"desc":"登录凭证"
			}	
		}
    },
    "response": {
	"type":"arr",
		"value":{
		"type":"obj",
		"value":{
			
			"id": {
				"valu��` 1�WadminD密钥申请记录#### applyKeyList
* 说明：密钥申请记录
* Method：POST
*  $    ��碰门票，4、碰碰竞价，5、系统奖励，6、抽奖，7、签到，8、随意碰翻牌，9、随意碰赞赏"
			},
			"atime": {
				"value": 15023178564,
				"type": "int",
				"desc": "时间"
			}
		}]
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|∟coin|int|代币
|∟gold|int|金币
|∟diamond|int|钻石
|∟use_type|int|收支类型1为收入，2为支出
|∟src|int|来源：1、充值购买，2、货币兑换，3、碰碰门票，4、碰碰竞价，5、系统奖励，6、抽奖，7、签到，8、随意碰翻牌，9、随意碰赞赏
|∟atime|int|时间

* 返回示例

~~~
[	
    {		
        "coin": 1000,		
        "gold": 1000,		
        "diamond": 100,		
        "use_type": 1,		
        "src": 1,		
        "atime": 15023178564
    
	}

]
~~~cY��:    s  s                                                                   �/�a %�#admin默认页面###��a 7�3adminE添加 / 修改帖子#### editForum
* 说明：添加 / 修改帖子
* Method：POST
* url：/carboss/index.php/Client/Posting/editForum

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101du43hu9gube39gh3",
                "required": true,
                "type": "string",
                "desc": "token"
            },
            "id": {
                "value": 12,
                "type": "int",
                "desc": "帖子id(新增时不传)"
            },
            "title": {
                "value": "全国小学生守则",
                "type": "string",
                "desc": "帖子标题"
            },
            "desc": {
                "value": "1、热爱祖国",
                "type": "string",
                "desc": "帖子描述"
            }
        }
    },
    "response          "type": "int",
                    "desc": "申请时间"
                },
                "mtime": {
                    "value": "15732216213",
                    "type": "int",
                    "desc": "审核时间"
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|记录id
|∟type|string|密钥类型
|∟status|int|申请状态：1、通过；2、待审核；3、拒绝
|∟atime|int|申请时间
|∟mtime|int|审核时间

* 返回示例

~~~
[	
    {		
        "id": 1,		
        "type": "教育视频",		
        "status": "1",		
        "atime": "157216213",		
        "mtime": "15732216213"
    
	}

]
~~~cY��H                                                                                 ,ol/index.php/Client/Resource/addFile

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "token"
            },
            "type": {
                "type": "int",
                "value": "1",
                "desc": "文件类型：1、视频；2、书籍；3、文档"
            },
            "title": {
                "type": "string",
                "value": "报名表",
                "desc": "文件名"
            },
            "desc": {
                "type": "string",
                "value": "活动报名 ",
                "desc": "文档描述"
            },
            "is_top": {
                "type": "int",
                "value": "1",
                "desc": "是否置顶：0否；1是"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "status": {
                "value": 1,
                    "type": "int",
                "desc": "状态码：0、成功，等待系统审核；1、失败"
            },
            "errstr": {
                "value": "",
                "type": "string",
                "desc": "错误提示"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|type|int|否|文件类型：1、视频；2、书籍；3、文档
|title|string|否|文件名
|desc|string|否|文档描述
|is_top|int|否|是否置顶：0否；1是

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "type": "1",	
    "title": "报名表",	
    "desc": "活动报名 ",	
    "is_top": "1"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0、成功，等待系统审核；1、失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": ""

}
~~~cY��,                                  4c": "回帖人昵称"
                        },
                        "atime": {
                            "type": "int",
                            "value": "15014856325",
                            "desc": "发帖时间"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|nickname|string|否|发帖人昵称
|type|int|否|板块：0全部；1主帖；2跟帖
|keywords|string|否|关键字
|page_start|int|是|页码
|page_limit|int|是|返回的结果页数量

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "nickname": "王阳明",	
    "type": "0",	
    "keywords": "红领巾",	
    "page_start": 1,	
    "page_limit": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总页数
|page_start|int|返回结果开始的页数
|page_n|int|返回的总页数
|data|arr|    ": "评论ID（评论帖子时为0）",
				"value": 1
			},
			"content": {
				"type": "string",
				"desc": "内容",
				"value": "哈哈哈哈哈嗝"
			}
		}
	},
	"response": {
		"type": "obj",
		"value": {
			"status": {
				"value": 1,
				"type": "int",
				"desc": "状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type": "string",
				"desc": "错误提示"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|token
|posting_id|int|否|帖子ID
|reply_id|int|否|评论ID（评论帖子时为0）
|content|string|否|内容

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "posting_id": 12,	
    "reply_id": 1,	
    "content": "哈哈哈哈哈嗝"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY��*  =   "type": "arr",
        "value": {
            "type": "obj",
            "value": {
                "id": {
                    "value": 1,
                    "type": "int",
                    "desc": "记录id"
                },
            
                "status": {
                    "value": "1",
                    "type": "int",
                    "desc": "申请状态：1、通过；2、待审核；3、拒绝"
                },
                "rem": {
                    "value": "老板的小姨子，注意！！！",
                    "type": "string",
                    "desc": "备注"
                },
                "atime": {
                    "value": "157216213",
                    "type": "int",
                    "desc": "申请时间"
                },
                "mtime": {
                    "value": "15732216213",
                    "type": "int",
                    "desc": "审核时间"
                }
            }
        }}}
    }
}
-->

* 参数

  9&quot;,
            &quot;value&quot;: {
                &quot;id&quot;: {
                    &quot;value&quot;: 1,
                    &quot;type&quot;: &quot;int&quot;,
                    &quot;desc&quot;: &quot;记录id&quot;
                },
                &quot;type&quot;: {
                    &quot;value&quot;: &quot;教育视频&quot;,
                    &quot;type&quot;: &quot;string&quot;,
                    &quot;desc&quot;: &quot;密钥类型&quot;
                },
                &quot;status&quot;: {
                    &quot;value&quot;: &quot;1&quot;,
                    &quot;type&quot;: &quot;int&quot;,
                    &quot;desc&quot;: &quot;申请状态：1、通过；2、待审核；3、拒绝&quot;
                },
                &quot;atime&quot;: {
                    &quot;value&quot;: &quot;157216213&quot;,
                    &quot;type&quot;: &quot;int&quot;,
                    &quot;desc&quot;: &quot;申请时间&quot;
                },
                &quot;  {
                                "type": "obj",
                                "value": {
                                    "id": {
                                        "type": "int",
                                        "value": "3",
                                        "required": true,
                                        "desc": "通知id"
                                    },
                                    "title": {
                                        "value": "我是马云",
                                        "type": "string",
                                        "required": true,
                                        "desc": "通知标题"
                                    },
                                    "atime": {
                                        "type": "int",
                                        "value": "157968662",
                                        "required": true,
                                        "desc": "通知时间"
        a  a                                                                                       ��d �UadminE搜索#### search
* 说明：搜索

* url：/stockSchool/index.php/Client/Postings/search

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "nickname": {
                "type": "string",
                "value": "王阳明",
                "desc": "发帖人昵称"
            },
            "type": {
                "type": "int",
                "value": "0",
                "desc": "板块：0全部；1主帖；2跟帖"
            },
            "keywords": {
                "type": "string",
                "value": "红领巾",
                "desc": "关键字"
            },
            "page_start": {
                "type": "int",
                "desc": "页码",
  8  -ame": {
                            "type": "string",
                            "value": "Jack ma",
                            "desc": "发帖人昵称"
                        },
                        "reply": {
                            "type": "string",
                            "value": "是的，非常耀眼",
                            "desc": "回帖内容"
                        },
                        "reply_uid": {
                            "type": "int",
                            "value": "45",
                            "desc": "回帖人uid"
                        },
                        "reply_icon": {
                            "type": "string",
                            "value": "www.ba.com/uploads/5/icon/aar.jpg",
                            "desc": "回帖人头像"
                        },
                        "reply_nickname": {
                            "type": "string",
                            "value": "支付宝",
                            "des    搜索结果
|∟/|obj|---
|∟∟id|int|帖子id
|∟∟title|string|帖子标题
|∟∟desc|string|帖子内容
|∟∟uid|int|发帖人uid
|∟∟icon|string|发帖人头像
|∟∟nickname|string|发帖人昵称
|∟∟reply|string|回帖内容
|∟∟reply_uid|int|回帖人uid
|∟∟reply_icon|string|回帖人头像
|∟∟reply_nickname|string|回帖人昵称
|∟∟atime|int|发帖时间

* 返回示例

~~~
{	
    "total": "400",	
    "page_start": "40",	
    "page_n": "400",	
    "data": [		
        {			
            "id": "4",			
            "title": "风中的红领巾",			
            "desc": "少先队员",			
            "uid": "45",			
            "icon": "www.ba.com/uploads/5/icon/aar.jpg",			
            "nickname": "Jack ma",			
            "reply": "是的，非常耀眼",			
            "reply_uid": "45",			
            "reply_icon": "www.ba.com/uploads/5/icon/aar.jpg",			
            "reply_nickname": "支付宝",			
            "atime": "15014856325"
        
		}
    
	]

}
~~~cY��a    multipart)
* url: /stockSchool/index.php/Client/Posting/uploadImg

* 参数:
~~~
！ ！ 这里必须使用 form multipart 格式！ ！
！ ！只上传图片，返回图片链接、路径！ ！
token: "101asdh8ferhf75gh857gh57g"      //token
~~~

<!--
{
    "response": {
		"type":"obj",
		"value":{
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0：成功,1失败, 16 上传失败"
			},
			"img_url": {
				"value": "http://zm.fairy.com/fairy/zm.jpg",
				"type": "string",
				"desc": "头像链接"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->







* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0：成功,1失败,16上传失败
|img_url|string|头像链接
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "img_url": "http://zm.fairy.com/fairy/zm.jpg",	
    "errstr": " "

}
~~~cY���                                                      3ype": "int",
                            "value": "4",
                            "desc": "帖子id"
                        },
                        "title": {
                            "type": "string",
                            "value": "风中的红领巾",
                            "desc": "帖子标题"
                        },
                        "desc": {
                            "type": "string",
                            "value": "少先队员",
                            "desc": "帖子内容"
                        },
                        "uid": {
                            "type": "int",
                            "value": "45",
                            "desc": "发帖人uid"
                        },
                        "icon": {
                            "type": "string",
                            "value": "www.ba.com/uploads/5/icon/aar.jpg",
                            "desc": "发帖人头像"
                        },
                        "nickn    uot;value&quot;:1,
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;状态码：0 成功，等待审核， 1 失败&quot;
			},
			&quot;errstr&quot;: {
				&quot;value&quot;: &quot; &quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;错误提示&quot;
			}
		}
    }
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证
|name|string|否|开户姓名
|img_id|int|否|入金截图id
|number|int|否|客户编号

* 参数示例

~~~
{	
    &quot;token&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,	
    &quot;name&quot;: &quot;令狐冲&quot;,	
    &quot;img_id&quot;: &quot;5&quot;,	
    &quot;number&quot;: &quot;5&quot;

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，等待审核，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    &quot;status&quot;: 1,	
    &quot;errstr&quot;: &quot; &quot;

}
~~~Y��x  6                "required": true,
                "value": 1
            },
            "page_limit": {
                "type": "int",
                "desc": "返回的结果页数量",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "total": {
                "type": "int",
                "value": "400",
                "desc": "总页数"
            },
            "page_start": {
                "type": "int",
                "value": "40",
                "desc": "返回结果开始的页数"
            },
            "page_n": {
                "type": "int",
                "value": "400",
                "desc": "返回的总页数"
            },
            "data": {
                "type": "arr",
				 "desc": "搜索结果",
                "value": {
                    "type": "obj",
                    "value": {
                        "id": {
                            "t    mtime&quot;: {
                    &quot;value&quot;: &quot;15732216213&quot;,
                    &quot;type&quot;: &quot;int&quot;,
                    &quot;desc&quot;: &quot;审核时间&quot;
                }
            }
        }
    }
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证

* 参数示例

~~~
{	
    &quot;token&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|记录id
|∟type|string|密钥类型
|∟status|int|申请状态：1、通过；2、待审核；3、拒绝
|∟atime|int|申请时间
|∟mtime|int|审核时间

* 返回示例

~~~
[	
    {		
        &quot;id&quot;: 1,		
        &quot;type&quot;: &quot;教育视频&quot;,		
        &quot;status&quot;: &quot;1&quot;,		
        &quot;atime&quot;: &quot;157216213&quot;,		
        &quot;mtime&quot;: &quot;15732216213&quot;
    
	}

]
~~~Y���    u                                                                                                                                                                                                                                                           �J �sadminapply#### applyStudy
* 说明：用户申请学员
* Method：POST
* url：/stockSchool/i  C�| �Oadminlist是=s#### applyKeyList
* 说明：密钥申请记录
* Method：POST
* url：/stockSchool/index.php/Client/Resource/applyKeyList

&lt;!--
{
    &quot;params&quot;: {
        &quot;type&quot;: &quot;obj&quot;,
        &quot;value&quot;: {
            &quot;token&quot;: {
                &quot;value&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,
                &quot;type&quot;: &quot;string&quot;,
                &quot;desc&quot;: &quot;登录凭证&quot;
            }
        }
    },
    &quot;response&quot;: {
        &quot;type&quot;: &quot;arr&quot;,
        &quot;value&quot;: {
            &quot;type&quot;: &quot;obj  0                  },
                "mtime": {
                    "value": "15732216213",
                    "type": "int",
                    "desc": "审核时间"
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|[]|arr|格式为arr
|/|obj|---
|∟id|int|记录id
|∟teacher_now|string|原教员
|∟teacher_new|string|新教员
|∟status|int|申请状态：1、通过；2、待审核；3、拒绝
|∟rem|string|备注
|∟atime|int|申请时间
|∟mtime|int|审核时间

* 返回示例

~~~
[	
    {		
        "id": 1,		
        "teacher_now": "岳不群",		
        "teacher_new": "风清扬",		
        "status": "1",		
        "rem": "天天变，烦不烦",		
        "atime": "157216213",		
        "mtime": "15732216213"
    
	}

]
~~~cY��  ;,
            "value": {
                "id": {
                    "value": 1,
                    "type": "int",
                    "desc": "记录id"
                },
				"teacher_now": {
                    "value":"岳不群",
                    "type": "string",
                    "desc": "原教员"
                },
				"teacher_new": {
                    "value": "风清扬",
                    "type": "string",
                    "desc": "新教员"
                },
              
                "status": {
                    "value": "1",
                    "type": "int",
                    "desc": "申请状态：1、通过；2、待审核；3、拒绝"
                },
				 "rem": {
                    "value": "天天变，烦不烦",
                    "type": "string",
                    "desc": "备注"
                },
                "atime": {
                    "value": "157216213",
                    "type": "int",
                    "desc": "申请时间"
      

|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证
|page_start|int|是|页码
|page_limit|int|是|需要的页数

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "page_start": 1,	
    "page_limit": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|结果总页数
|page_start|int|返回的页码
|page_n|int|实际返回的页数
|data|arr|---
|∟/|obj|---
|∟∟id|int|记录id
|∟∟status|int|申请状态：1、通过；2、待审核；3、拒绝
|∟∟rem|string|备注
|∟∟atime|int|申请时间
|∟∟mtime|int|审核时间

* 返回示例

~~~
{	
    "total": "40",	
    "page_start": "4",	
    "page_n": "40",	
    "data": [		
        {			
            "id": "1",			
            "status": "1",			
            "rem": "老板的小姨子，注意！！！",			
            "atime": "157216213",			
            "mtime": "15732216213"
        
		}
    
	]

}
~~~cY��    :"5",
				"type":"int",
				"required":true,
				"desc":"入金截图id"
			},
			"number":{
				"value":"5",
				"required":true,
				"type":"int",
				"desc":"客户编号"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|name|string|是|开户姓名
|img_id|int|是|入金截图id
|number|int|是|客户编号

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "name": "令狐冲",	
    "img_id": "5",	
    "number": "5"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY��  /   "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "登录凭证"
            },
			 "page_start": {
                "type": "int",
                "desc": "页码",
                "required": true,
                "value": 1
            },
            "page_limit": {
                "type": "int",
                "desc": "需要的页数",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {
	 "type": "obj",
        "value": {
		   "total": {
                "type": "int",
                "value": "40",
                "desc": "结果总页数"
            },
            "page_start": {
                "type": "int",
                "value": "4",
                "desc": "返回的页码"
            },
            "page_n": {
                "type": "int",
                "value": "40",
                "desc": "实际返回的页数"
            },
            "data":{
         ams": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required":true,
				"desc":"登录凭证"
			},
			"teach_id":{
				"value":"5",
				"type":"int",
				"required":true,
				"desc":"教员id（只选）"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|teach_id|int|是|教员id（只选）

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "teach_id": "5"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY���   � ��                                                                                                                                                                                                                                                                                                                                                                                       �y�i %�5adminG申请教员#### applyTeach
* 说明：学员申请教员
* Method：POST
* url：/  W�~�h =�'adminG变更教员申请记录#### applyStudyLists
* 说明：学员变更教员申请记录
* Method：POST
* url：/stockSchool/index.php/Client/ApplyCheck/applyStudyLists

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "登录凭证"
            }
        }
    },
    "response": {
        "type": "arr",
        "value": {
            "type": "obj"  <     {
				&quot;value&quot;:1,
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;状态码：0 成功， 1 失败&quot;
			},
			&quot;errstr&quot;: {
				&quot;value&quot;: &quot; &quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;desc&quot;:&quot;错误提示&quot;
			}
		}
    }
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证
|name|string|是|开户姓名
|img_id|int|是|入金截图id
|number|int|是|客户编号

* 参数示例

~~~
{	
    &quot;token&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,	
    &quot;name&quot;: &quot;令狐冲&quot;,	
    &quot;img_id&quot;: &quot;5&quot;,	
    &quot;number&quot;: &quot;5&quot;

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    &quot;status&quot;: 1,	
    &quot;errstr&quot;: &quot; &quot;

}
~~~Y��'c": "申请时间"
    Bndex.php/Client/ApplyCheck/applyStudy

&lt;!--
{
    &quot;params&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			&quot;token&quot;: {
				&quot;value&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;required&quot;:true,
				&quot;desc&quot;:&quot;登录凭证&quot;
			},
			&quot;name&quot;:{
				&quot;value&quot;:&quot;令狐冲&quot;,
				&quot;type&quot;:&quot;string&quot;,
				&quot;required&quot;:true,
				&quot;desc&quot;:&quot;开户姓名&quot;
			},
			&quot;img_id&quot;:{
				&quot;value&quot;:&quot;5&quot;,
				&quot;type&quot;:&quot;int&quot;,
				&quot;required&quot;:true,
				&quot;desc&quot;:&quot;入金截图id&quot;
			},
			&quot;number&quot;:{
				&quot;value&quot;:&quot;5&quot;,
				&quot;required&quot;:true,
				&quot;type&quot;:&quot;int&quot;,
				&quot;desc&quot;:&quot;客户编号&quot;
			}
		}
    },
    &quot;response&quot;: {
		&quot;type&quot;:&quot;obj&quot;,
		&quot;value&quot;:{
			
			&quot;status&quot;:  Kot;int&quot;,
                &quot;desc&quot;: &quot;页码&quot;,
                &quot;required&quot;: true,
                &quot;value&quot;: 1
            },
            &quot;page_limit&quot;: {
                &quot;type&quot;: &quot;int&quot;,
                &quot;desc&quot;: &quot;需要的页数&quot;,
                &quot;required&quot;: true,
                &quot;value&quot;: 50
            }
        }
    },
    &quot;response&quot;: {
        &quot;type&quot;: &quot;obj&quot;,
        &quot;value&quot;: {
            &quot;total&quot;: {
                &quot;type&quot;: &quot;int&quot;,
                &quot;value&quot;: &quot;40&quot;,
                &quot;desc&quot;: &quot;结果总页数&quot;
            },
            &quot;page_start&quot;: {
                &quot;type&quot;: &quot;int&quot;,
                &quot;value&quot;: &quot;4&quot;,
                &quot;desc&quot;: &quot;返回的页码&quot;
            },
            &quot;page_n&quot;: {
                &quot;type&qu  int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"uid": {
							"type": "int",
							"desc": "用户ID",
							"value": 2
						},
						"nickname": {
							"type": "string",
							"desc": "用户名",
							"value": "例子"
						},
						"type": {
							"type": "int",
							"desc": "赞赏货币类型：1、diamond(钻石)，2、gold(金币),3、coin(代币)",
							"value": 1
						},
						"number": {
							"type": "int",
							"desc": "赞赏数值",
							"value": 2
						},
						"rem": {
							"type": "string",
							"desc": "留言",
							"value": "一起出来吃个饭？"
						},
						"atime": {
							"type": "int",
							"desc": "赞赏时间",
							"value": 15023854324
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|in  L: &quot;可以，准了&quot;,
                            &quot;type&quot;: &quot;string&quot;,
                            &quot;desc&quot;: &quot;备注&quot;
                        },
                        &quot;atime&quot;: {
                            &quot;value&quot;: &quot;157216213&quot;,
                            &quot;type&quot;: &quot;int&quot;,
                            &quot;desc&quot;: &quot;申请时间&quot;
                        },
                        &quot;mtime&quot;: {
                            &quot;value&quot;: &quot;15732216213&quot;,
                            &quot;type&quot;: &quot;int&quot;,
                            &quot;desc&quot;: &quot;审核时间&quot;
                        }
                    }
                }
            }
        }
    }
}
--&gt;

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证
|page_start|int|是|页码
|page_limit|int|是|需要的页数

* 参数   � �                                                                                                                                                                  �B�j %�Iadmin默认页面#### applyTeachLists
* 说明：申请教员记录（后台争6�k +�)admin?为学员打分#### addCourseRecord
* 说明:为学员打分
* Method：POST
* url：/stockSchool/index.php/Client/Resource/addCourseRecord

<!--
{
    "params": {
    Q��j 1�oadminG申请教员记录#### applyTeachLists
* 说明：申请教员记录（后台人员返回所有记录，教员返回自己的申请记录）
* Method：POST
* url：/stockSchool/index.php/Client/Resource/applyTeachLists

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "登录凭证"
            },
            "page_start": {
                "type": "int",
                "desc":   I      }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证
|page_start|int|是|页码
|page_limit|int|是|需要的页数

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "page_start": 1,	
    "page_limit": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|结果总页数
|page_start|int|返回的页码
|page_n|int|实际返回的页数
|data|arr|---
|∟/|obj|---
|∟∟id|int|记录id
|∟∟status|int|申请状态：1、通过；2、待审核；3、拒绝
|∟∟rem|string|备注
|∟∟atime|int|申请时间
|∟∟mtime|int|审核时间

* 返回示例

~~~
{	
    "total": "40",	
    "page_start": "4",	
    "page_n": "40",	
    "data": [		
        {			
            "id": "1",			
            "status": "1",			
            "rem": "可以，准了",			
            "atime": "157216213",			
            "mtime": "15732216213"
        
		}
    
	]

}
~~~cY�  J"页码",
                "required": true,
                "value": 1
            },
            "page_limit": {
                "type": "int",
                "desc": "需要的页数",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
            "total": {
                "type": "int",
                "value": "40",
                "desc": "结果总页数"
            },
            "page_start": {
                "type": "int",
                "value": "4",
                "desc": "返回的页码"
            },
            "page_n": {
                "type": "int",
                "value": "40",
                "desc": "实际返回的页数"
            },
            "data": {
                "type": "arr",
                "value": {
                    "type": "obj",
                    "value": {
                        "id": {
                            "value": 1,
                          H    "type": "int",
                            "desc": "记录id"
                        },
                        "status": {
                            "value": "1",
                            "type": "int",
                            "desc": "申请状态：1、通过；2、待审核；3、拒绝"
                        },
                        "rem": {
                            "value": "可以，准了",
                            "type": "string",
                            "desc": "备注"
                        },
                        "atime": {
                            "value": "157216213",
                            "type": "int",
                            "desc": "申请时间"
                        },
                        "mtime": {
                            "value": "15732216213",
                            "type": "int",
                            "desc": "审核时间"
                        }
                    }
                }
            }
        }
    Fot;: &quot;int&quot;,
                &quot;value&quot;: &quot;40&quot;,
                &quot;desc&quot;: &quot;实际返回的页数&quot;
            },
            &quot;data&quot;: {
                &quot;type&quot;: &quot;arr&quot;,
                &quot;value&quot;: {
                    &quot;type&quot;: &quot;obj&quot;,
                    &quot;value&quot;: {
                        &quot;id&quot;: {
                            &quot;value&quot;: 1,
                            &quot;type&quot;: &quot;int&quot;,
                            &quot;desc&quot;: &quot;记录id&quot;
                        },
                        &quot;status&quot;: {
                            &quot;value&quot;: &quot;1&quot;,
                            &quot;type&quot;: &quot;int&quot;,
                            &quot;desc&quot;: &quot;申请状态：1、通过；2、待审核；3、拒绝&quot;
                        },
                        &quot;rem&quot;: {
                            &quot;value&quot;    示例

~~~
{	
    &quot;token&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,	
    &quot;page_start&quot;: 1,	
    &quot;page_limit&quot;: 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|结果总页数
|page_start|int|返回的页码
|page_n|int|实际返回的页数
|data|arr|---
|∟/|obj|---
|∟∟id|int|记录id
|∟∟status|int|申请状态：1、通过；2、待审核；3、拒绝
|∟∟rem|string|备注
|∟∟atime|int|申请时间
|∟∟mtime|int|审核时间

* 返回示例

~~~
{	
    &quot;total&quot;: &quot;40&quot;,	
    &quot;page_start&quot;: &quot;4&quot;,	
    &quot;page_n&quot;: &quot;40&quot;,	
    &quot;data&quot;: [		
        {			
            &quot;id&quot;: &quot;1&quot;,			
            &quot;status&quot;: &quot;1&quot;,			
            &quot;rem&quot;: &quot;可以，准了&quot;,			
            &quot;atime&quot;: &quot;157216213&quot;,			
            &quot;mtime&quot;: &quot;15732216213&quot;
        
		}
    
	]

}
~~~Y��    {                                                                                                                                                                                                                                                                 �{ �Uadminlists#### applyTeachLists
* 说明：申请教员记录（后台人员返回所有记录�  N�n �;adminlists#### applyTeachLists
* 说明：申请教员记录（后台人员返回所有记录，教员返回自己的申请记录）
* Method：POST
* url：/stockSchool/index.php/Client/Resource/applyTeachLists

&lt;!--
{
    &quot;params&quot;: {
        &quot;type&quot;: &quot;obj&quot;,
        &quot;value&quot;: {
            &quot;token&quot;: {
                &quot;value&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,
                &quot;type&quot;: &quot;string&quot;,
                &quot;desc&quot;: &quot;登录凭证&quot;
            },
            &quot;page_start&quot;: {
                &quot;type&quot;: &qu  D  O��教员返回自己的申请记录）
* Method：POST
* url：/stockSchool/index.php/Client/Resource/applyTeachLists

&lt;!--
{
    &quot;params&quot;: {
        &quot;type&quot;: &quot;obj&quot;,
        &quot;value&quot;: {
            &quot;token&quot;: {
                &quot;value&quot;: &quot;101sdhfeh8rthga3f1eed21&quot;,
                &quot;type&quot;: &quot;string&quot;,
                &quot;desc&quot;: &quot;登录凭证&quot;
            },
            &quot;page_start&quot;: {
                &quot;type&quot;: &quot;int&quot;,
                &quot;desc&quot;: &quot;页码&quot;,
                &quot;required&quot;: true,
                &quot;value&quot;: 1
            },
            &quot;page_limit&quot;: {
                &quot;type&quot;: &quot;int&quot;,
                &quot;desc&quot;: &quot;需要的页数&quot;,
                &quot;required&quot;: true,
                &quot;value&quot;: 50
            }
        }
    },
    &quot;response&quot;: {
        &quot;type&quot;: &q  Puot;obj&quot;,
        &quot;value&quot;: {
            &quot;total&quot;: {
                &quot;type&quot;: &quot;int&quot;,
                &quot;value&quot;: &quot;40&quot;,
                &quot;desc&quot;: &quot;结果总页数&quot;
            },
            &quot;page_start&quot;: {
                &quot;type&quot;: &quot;int&quot;,
                &quot;value&quot;: &quot;4&quot;,
                &quot;desc&quot;: &quot;返回的页码&quot;
            },
            &quot;page_n&quot;: {
                &quot;type&quot;: &quot;int&quot;,
                &quot;value&quot;: &quot;40&quot;,
                &quot;desc&quot;: &quot;实际返回的页数&quot;
            },
            &quot;data&quot;: {
                &quot;type&quot;: &quot;arr&quot;,
                &quot;value&quot;: {
                    &quot;type&quot;: &quot;obj&quot;,
                    &quot;value&quot;: {
                        &quot;id&quot;: {
                            &quot;value&quot;: 1,
                                &quot;type&quot;: &quot;int&quot;,
                            &quot;desc&quot;: &quot;记录id&quot;
                        },
                        &quot;status&quot;: {
                            &quot;value&quot;: &quot;1&quot;,
                            &quot;type&quot;: &quot;int&quot;,
                            &quot;desc&quot;: &quot;申请状态：1、通过；2、待审核；3、拒绝&quot;
                        },
                        &quot;rem&quot;: {
                            &quot;value&quot;: &quot;可以，准了&quot;,
                            &quot;type&quot;: &quot;string&quot;,
                            &quot;desc&quot;: &quot;备注&quot;
                        },
                        &quot;atime&quot;: {
                            &quot;value&quot;: &quot;157216213&quot;,
                            &quot;type&quot;: &quot;int&quot;,
                  Y�                                                                                                   ( ("type": "obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "登录凭证"
            },
            "uid": {
                "type": "int",
                "desc": "学员uid",
�L�k +�Uadmin?为学员打分#### addCourseRecord
* 说明:为学员打分
* Method：POST
* url：/stockSchool/index.php/Client/Resource/addCourseRecord

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "value": "101sdhfeh8rthga3f1eed21",
                "type": "string",
                "desc": "登录凭证"
            },
            "uid": {
                "type": "int",
                "desc": "学员uid",
                "required": true,
                "value": 1
            },
            "score_type": {
                "type": "int",
                "desc": "打分项目id",
                "required": true,
                "value": 5
      R            },
            "score": {
                "type": "int",
                "desc": "分数",
                "required": true,
                "value": 50
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
         	
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
    }
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|登录凭证
|uid|int|是|学员uid
|score_type|int|是|打分项目id
|score|int|是|分数

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "uid": 1,	
    "score_type": 5,	
    "score": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY�
�  T      },
            "page_start": {
                "type": "int",
                "value": "4",
                "desc": "返回的页码"
            },
            "page_n": {
                "type": "int",
                "value": "40",
                "desc": "实际返回的页数"
            },
			 "uid": {
                "type": "int",
                "value": "40",
                "desc": "用户uid"
            }, 
			"icon": {
                "type": "string",
                "value": "savd.cc/iasfds.jpg",
                "desc": "头像"
            },
			"nickname": {
                "type": "string",
                "value": "田伯光",
                "desc": "头像"
            },
            "data": {
                "type": "arr",
                "value": {
                    "type": "obj",
                    "value": {
                        "id": {
                            "value": 1,
                            "type": "int",
                            "desc": "记录id"
    X                      },
                        "item": {
                            "value": "课堂活跃",
                            "type": "string",
                            "desc": "打分项"
                        },
                        "score": {
                            "value": "50",
                            "type": "int",
                            "desc": "得分"
                        },
                        "rem": {
                            "value": "必须加分",
                            "type": "string",
                            "desc": "备注"
                        },
                        "atime": {
                            "value": "157216213",
                            "type": "int",
                            "desc": "备注"
                        }
                    }
                }
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|否|�   r �r                                                                                                                                                                                                                                                                                                                                                                      ��m 1�SadminH系统消息列表#### noticeLists
* 说明：系统消息列表
* url：stockSchool/index.php/Client/Message/noticeLists

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            }
        }
    },
    "response": {

                            "type": "arr",
							  "desc": "通知",
                            "value":   1�X�l 1�gadmin?学员打分记录#### courseRecordLists
* 说明：学员打分记录
* Method：PO  �    desc": "通知标题"
            },
            "content": {
                "value": "说实话，我后悔创建阿里巴巴",
                "type": "string",
                "required": true,
                "desc": "通知内容"
            },
            "atime": {
                "type": "int",
                "value": "157968662",
                "required": true,
                "desc": "通知时间"
            }
        }
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|id|int|是|通知id

* 参数示例

~~~
{	
    "token": "hfsdhiufhgbflsjfa",	
    "id": "3"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|通知id
|title|string|通知标题
|content|string|通知内容
|atime|int|通知时间

* 返回示例

~~~
{	
    "id": "3",	
    "title": "我是马云",	
    "content": "说实话，我后悔创建阿里巴巴",	
    "atime": "157968662"

}
~~~cY��    stockSchool/index.php/Client/ApplyCheck/applyTeach

<!--
{
    "params": {
		"type":"obj",
		"value":{
			"token": {
				"value": "101sdhfeh8rthga3f1eed21",
				"type":"string",
				"required":true,
				"desc":"登录凭证"
			}
		}
    },
    "response": {
		"type":"obj",
		"value":{
			
			"status": {
				"value":1,
				"type":"int",
				"desc":"状态码：0 成功， 1 失败"
			},
			"errstr": {
				"value": " ",
				"type":"string",
				"desc":"错误提示"
			}
		}
    }
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|登录凭证

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|status|int|状态码：0成功，1失败
|errstr|string|错误提示

* 返回示例

~~~
{	
    "status": 1,	
    "errstr": " "

}
~~~cY�                                                                                                              ��录凭证
|uid|int|是|学员uid
|page_start|int|是|页码
|page_limit|int|是|需要的页数

* 参数示例

~~~
{	
    "token": "101sdhfeh8rthga3f1eed21",	
    "uid": 1,	
    "page_start": 1,	
    "page_limit": 50

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|结果总页数
|page_start|int|返回的页码
|page_n|int|实际返回的页数
|uid|int|用户uid
|icon|string|头像
|nickname|string|头像
|data|arr|---
|∟/|obj|---
|∟∟id|int|记录id
|∟∟item|string|打分项
|∟∟score|int|得分
|∟∟rem|string|备注
|∟∟atime|int|备注

* 返回示例

~~~
{	
    "total": "40",	
    "page_start": "4",	
    "page_n": "40",	
    "uid": "40",	
    "icon": "savd.cc/iasfds.jpg",	
    "nickname": "田伯光",	
    "data": [		
        {			
            "id": "1",			
            "item": "课堂活跃",			
            "score": "50",			
            "rem": "必须加分",			
            "atime": "157216213"
        
		}
    
	]

}
~~~cY��    ?  ?                                                     �5�n 1�!adminH系统消息详情#### noticeDetail
* 说明：系统消息详情
* url：stockSchool/index.php/Client/Message/noticeDetail

<!--
{
    "params": {
        "type": "obj",
        "value": {
            "token": {
                "type": "string",
                "required": true,
                "value": "hfsdhiufhgbflsjfa",
                "desc": "token"
            },
            "id": {
                "type": "int",
                "value": "3",
                "required": true,
                "desc": "通知id"
            }
        }
    },
    "response": {
        "type": "obj",
        "value": {
   
            "id": {
                "type": "int",
                "value": "3",
                "required": true,
                "desc": "通知id"
            },
            "title": {
                "value": "我是马云",
                "type": "string",
                "required": true,
                "  V    Client/Rp/showMine

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"id": {
				"value": 12,
				"type": "int",
				"desc": "视频ID"
			},
			"video": {
				"value": "http://zm.fairy.com/fairy/zm.mkv",
				"type": "string",
				"desc": "视频链接"
			},
			"mtime": {
				"value": 15023542343,
				"type": "int",
				"desc": "上传时间"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token

* 参数示例

~~~
{	
    "token": "101example0729xxx"

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|视频ID
|video|string|视频链接
|mtime|int|上传时间

* 返回示例

~~~
{	
    "id": 12,	
    "video": "http://zm.fairy.com/fairy/zm.mkv",	
    "mtime": 15023542343

}
~~~Y��                         �rd

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"video_id":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "视频ID"
			},
			"to_uid":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "视频所属用户ID"
			},
			"src":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "操作类型：1、送更多，2、超级赞，3、赞"
			},
			"type":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "货币类型：1、diamond(钻石)，2、gold(金币),3、coin(代币)"
			},
			"number":{
				"value": 100,
				"type": "int",
				"required": true,
				"desc": "赞赏数量（默认为0）"
			},
			"rem":{
				"value": "留言成功",
				"type": "string",
				"required": true,
				"desc": "留言"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"status": {
				"type": "int",
				"desc": "�  a"token"
			},
			"page_start":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "起始页码"
			},
			"page_limit":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"type":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "货币类型：1、diamond(钻石)，2、gold(金币),3、coin(代币)"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总赞赏人数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"uid": {
							"type": "int",
							"desc": "用户ID",
							"value": 2
						},
						"nickname": {
							"type": "string",
							"desc": "用户名",
							"value": "例子"
						},
						"atime": {
							"type": "int",
							"    K  K                                                                 �%�o =�qweekendC别人赞赏我的记录#### showRewardMe
* 说明：别人赞赏我的记录
* Method：POST
* url：/pp/v1/Client/Rp/showRewardMe

<!--
{
	"params": {
		"type": "obj",
		"value": {
			"token": {
				"value": "101example0729xxx",
				"type": "string",
				"required": true,
				"desc": "token"
			},
			"page_start":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "起始页码"
			},
			"page_limit":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "单页条数"
			},
			"type":{
				"value": 1,
				"type": "int",
				"required": true,
				"desc": "货币类型：1、diamond(钻石)，2、gold(金币),3、coin(代币)"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"total":{
				"type":"int",
				"desc":"总赞赏人数",
				"value":100
			},
			"page_start":{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"  E    ---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|int|是|单页条数

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 1,	
    "page_limit": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总赞赏人数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟uid|int|用户ID
|∟∟nickname|string|用户名
|∟∟type|int|赞赏货币类型：1、diamond(钻石)，2、gold(金币),3、coin(代币)
|∟∟number|int|赞赏数值
|∟∟rem|string|留言
|∟∟atime|int|赞赏时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "uid": "2",			
            "nickname": "例子",			
            "type": "1",			
            "number": "2",			
            "rem": "一起出来吃个饭？",			
            "atime": "15023854324"
        
		}
    
	]

}
~~~Y��!         ^{
				"type":"int",
				"desc":"起始页码",
				"value":1
			},
			"page_n":{
				"type":"int",
				"desc":"当前返回记录条数",
				"value":1
			},
			"data":{
				"type":"arr",
				"value":{
					"type":"obj",
					"value":{
						"uid": {
							"type": "int",
							"desc": "用户ID",
							"value": 2
						},
						"nickname": {
							"type": "string",
							"desc": "用户名",
							"value": "例子"
						},
						"type": {
							"type": "int",
							"desc": "赞赏货币类型：1、diamond(钻石)，2、gold(金币),3、coin(代币)",
							"value": 1
						},
						"number": {
							"type": "int",
							"desc": "赞赏数值",
							"value": 2
						},
						"rem": {
							"type": "string",
							"desc": "留言",
							"value": "一起出来吃个饭？"
						},
						"atime": {
							"type": "int",
							"desc": "赞赏时间",
							"value": 15023854324
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|    ed": true,
				"desc": "用户ID"
			}
		}
	},
	"response": {
		"type":"obj",
		"value":{
			"id": {
				"value": 12,
				"type": "int",
				"desc": "视频ID"
			},
			"uid": {
				"value": 12,
				"type": "int",
				"required": true,
				"desc": "用户ID"
			},
			"video": {
				"value": "http://zm.fairy.com/fairy/zm.mkv",
				"type": "string",
				"desc": "视频链接"
			},
			"mtime": {
				"value": 15023542343,
				"type": "int",
				"desc": "上传时间"
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|uid|int|是|用户ID

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "uid": 12

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|id|int|视频ID
|uid|int|用户ID
|video|string|视频链接
|mtime|int|上传时间

* 返回示例

~~~
{	
    "id": 12,	
    "uid": 12,	
    "video": "http://zm.fairy.com/fairy/zm.mkv",	
    "mtime": 15023542343

}
~~~Y��    desc": "赞赏时间",
							"value": 15023854324
						}
					}
				}
			}
		}
	}
}
-->

* 参数



|参数名|类型|必填|说明|
|:--------|:---|---|---|
|{}|obj|是|格式为obj
|token|string|是|token
|page_start|int|是|起始页码
|page_limit|int|是|单页条数
|type|int|是|货币类型：1、diamond(钻石)，2、gold(金币),3、coin(代币)

* 参数示例

~~~
{	
    "token": "101example0729xxx",	
    "page_start": 1,	
    "page_limit": 1,	
    "type": 1

}
~~~
* 返回



|参数名|类型|说明|
|:--------|:---|---|---|
|{}|obj|格式为obj
|total|int|总赞赏人数
|page_start|int|起始页码
|page_n|int|当前返回记录条数
|data|arr|---
|∟/|obj|---
|∟∟uid|int|用户ID
|∟∟nickname|string|用户名
|∟∟atime|int|赞赏时间

* 返回示例

~~~
{	
    "total": 100,	
    "page_start": 1,	
    "page_n": 1,	
    "data": [		
        {			
            "uid": "2",			
            "nickname": "例子",			
            "atime": "15023854324"
        
		}
    
	]

}
~~~Y��