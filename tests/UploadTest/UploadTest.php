<?php

require_once '../../vendor/autoload.php';

use guanguans\library\upload\Upload;

error_reporting(E_ERROR);

$config = array(
	'maxSize'  => 3145728,
	'rootPath' => 'uploads',// 设置附件上传根目录
	'savePath' => 'img',// 设置附件上传（子）目录
	'saveName' => array('uniqid',''),
	'exts'     => array('jpg', 'gif', 'png', 'jpeg'),
	'autoSub'  => true,
	'subName'  => array('date','Ymd'),
);

$ftpConfig = array(
    'host'     => 'bxu2713650276.my3w.com', // 服务器
    'port'     => 21,              // 端口
    'timeout'  => 90,              // 超时时间
    'username' => 'bxu2713650276',      // 用户名
    'password' => 'yzm535287637',       // 密码
);

$upload = new Upload($config);// 实例化上传类

$info = $upload->upload();
if($info) {
	var_dump($info);
}else{
    var_dump($upload->getError());
}
