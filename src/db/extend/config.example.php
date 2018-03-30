<?php
/**
 * mysql mysqli
 */
return  array(
    'DB_TYPE'         =>  'mysql',     // 数据库类型
    'DB_HOST'         =>  'localhost', // 服务器地址
    'DB_NAME'         =>  'thinkcmf5', // 数据库名
    'DB_USER'         =>  'root',      // 用户名
    'DB_PWD'          =>  'root',      // 密码
    'DB_PORT'         =>  '3306',      // 端口
    'DB_PREFIX'       =>  'cmf_',      // 数据库表前缀
    'DB_PARAMS'       =>  array(),     // 数据库连接参数
    'DB_FIELDS_CACHE' =>  false,       // 启用字段缓存
    'DB_CHARSET'      =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'  =>  0,           // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'  =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'   =>  1,           // 读写分离后 主服务器数量
    'DB_SLAVE_NO'     =>  '',          // 指定从服务器序号

    /* 调试 建议开发环境 均为 true,生产环境均为 false */
    'DB_DEBUG'        =>  false,       // 数据库调试模式 开启后可以记录SQL日志 抛出异常
    'TRACE_DEBUG'     =>  false,       // TRACE 调试模式
    'MEMORY_LIMIT_ON' =>  false,       // 是否统计内存
);

/**
 * sqlsrv
 */
return array(
    'DB_TYPE'         =>  'sqlsrv',
    'DB_HOST'         =>  'localhost', // 服务器地址 若填写 '127.0.0.1' 报 '命名管道提供程序: 无法打开与 SQL Server 的连接' 错误
    'DB_NAME'         =>  'bjy',
    'DB_USER'         =>  'sa',
    'DB_PWD'          =>  'root',
    'DB_CHARSET'      =>  'utf8',
    'DB_PORT'         =>  '',          // 端口 若填写 '1433' 报 'TCP 提供程序: 由于目标计算机积极拒绝，无法连接' 错误
    'DB_PREFIX'       =>  '',
    'DB_PARAMS'       =>  array(),
    'DB_FIELDS_CACHE' =>  false,
    'DB_CHARSET'      =>  'utf8',
    'DB_DEPLOY_TYPE'  =>  0,
    'DB_RW_SEPARATE'  =>  false,
    'DB_MASTER_NUM'   =>  1,
    'DB_SLAVE_NO'     =>  '',

    /* 调试 建议开发环境 均为 true,生产环境均为 false */
    'DB_DEBUG'        =>  false,       // 数据库调试模式 开启后可以记录SQL日志 抛出异常
    'TRACE_DEBUG'     =>  false,       // TRACE 调试模式
    'MEMORY_LIMIT_ON' =>  false,       // 是否统计内存
);

/**
 * sqlite
 */
return array(
    'DB_TYPE'         => 'sqlite',
    'DB_NAME'         => './ci.db',    // 数据库文件路径
    'DB_HOST'         => 'localhost',
    'DB_USER'         => 'guanguans',
    'DB_PWD'          => 'guanguans',
    'DB_PORT'         => 3306,
    'DB_PREFIX'       => '',
    'DB_PARAMS'       =>  array(),
    'DB_FIELDS_CACHE' =>  false,
    'DB_CHARSET'      =>  'utf8',
    'DB_DEPLOY_TYPE'  =>  0,
    'DB_RW_SEPARATE'  =>  false,
    'DB_MASTER_NUM'   =>  1,
    'DB_SLAVE_NO'     =>  '',

    /* 调试 建议开发环境 均为 true,生产环境均为 false */
    'DB_DEBUG'        =>  false,       // 数据库调试模式 开启后可以记录SQL日志 抛出异常
    'TRACE_DEBUG'     =>  false,       // TRACE 调试模式
    'MEMORY_LIMIT_ON' =>  false,       // 是否统计内存
);
