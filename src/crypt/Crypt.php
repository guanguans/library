<?php
// +----------------------------------------------------------------------
// | 加密解密类
// +----------------------------------------------------------------------
// | Author: 琯琯 <yzmguanguan@gmail.com>
// +----------------------------------------------------------------------
namespace guanguans\library\crypt;

class Crypt
{

    private static $handler = '';

    /**
     * 加密字符串
     * @param string $type 字符串 Base64 Crypt Des Think Xxtea
     * @return string
     */
    public function __construct($type=''){
        $type   =   in_array($type, ['Base64','Crypt','Des','Think','Xxtea'])? $type: 'Think';
        $class  =   strpos($type,'\\')? $type: 'guanguans\\library\\crypt\\driver\\'. ucwords(strtolower($type));
        self::$handler  =  $class;
    }

    /**
     * 加密字符串
     * @param string $str 字符串
     * @param string $key 加密key
     * @param integer $expire 有效期（秒） 0 为永久有效
     * @return string
     */
    public function encrypt($data,$key,$expire=0){
        $class  =   self::$handler;
        return $class::encrypt($data,$key,$expire);
    }

    /**
     * 解密字符串
     * @param string $str 字符串
     * @param string $key 加密key
     * @return string
     */
    public function decrypt($data,$key){
        $class  =   self::$handler;
        return $class::decrypt($data,$key);
    }
}
