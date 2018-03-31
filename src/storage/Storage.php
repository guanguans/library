<?php
// +----------------------------------------------------------------------
// | 分布式文件存储类
// +----------------------------------------------------------------------
// | Author: 琯琯 <yzmguanguan@gmail.com>
// +----------------------------------------------------------------------
namespace guanguans\library\storage;

class Storage
{
    /**
     * 操作句柄
     * @var string
     * @access protected
     */
    static protected $handler;

    /**
     * 连接分布式文件系统
     * @access public
     * @param string $type 文件类型
     * @param array $options  配置数组
     * @return void
     */
    static public function connect($type='File',$options=array()) {
        $type = strtolower($type);
        if (!in_array($type, ['file', 'sae'])) {
            exit("改驱动不存在：{$type}");
        }
        $class = 'guanguans\\library\\storage\\driver\\'.ucwords($type);
        self::$handler = new $class($options);
        return true;
    }

    static public function __callstatic($method,$args){
        //调用缓存驱动的方法
        if(method_exists(self::$handler, $method)){
           return call_user_func_array(array(self::$handler,$method), $args);
        }
    }
}
