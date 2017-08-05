<?php
return array(
	//'配置项'=>'配置值'

//    //禁止访问的目录模块
//    'MODULE_DENY_LIST'=> array('Common','Runtime'),
//    //允许访问的模块
//    'MODULE_ALLOW_LIST'=> array('Common','Runtime'),
//     //设置默认加载模块
//    'DEFAULT_MODULE'=>'Admin',
//    //允许多模块
//    'MULTI_MODULE'=>True;
//    //设置PATHINO分隔符,默认是'/'
//    'URL_PATHINFO_DEPR'=>'/',

//    //修改键值对名称
//    'VAR_MODULE'=>'m',
//    'VAR_CONTROLLER'=>'c',
//    'VAR_ACTION'=>'a',


//    //mysql全局配置
//    'DB_TYPE'=>'mysql',
//    'DB_HOST'=>'localhost',
//    'DB_NAME'=>'think',
//    'db_user'=>'root',
//    'DB_PWD'=>'',
//    'DB_PORT'=>'3306',
//    'DB_PREFIX'=>'think_',

    //PDO专用定义(3.23版本之后对PDO模式进行了重写,所有数据库连接都直接使用PDO链接)
    'DB_TYPE'   => 'mysqli', // 数据库类型(此处不再支持 PDO,即写不写PDO都是以PDO的方式接入数据库)
    'DB_HOST'   => 'localhost', // 数据库类型
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '', // 密码
    'DB_NAME'    => 'think', // 密码
    'DB_PREFIX' => 'think_', // 数据库表前缀
    'DB_DSN'    => '',

    'SHOW_PAGE_TRACE'=>true,
);
