<?php

require_once '../../vendor/autoload.php';

use guanguans\library\upload\Upload;

error_reporting(E_ERROR);

$config = array(
	'maxSize'  => 3145728,
	'rootPath' => './Uploads/',
	'savePath' => '',
	'saveName' => array('uniqid',''),
	'exts'     => array('jpg', 'gif', 'png', 'jpeg'),
	'autoSub'  => true,
	'subName'  => array('date','Ymd'),
);

$ftpConfig = array(        
    'host'     => 'bxu2713650276.my3w.com', // 服务器
    'port'     => 21,              // 端口
    'timeout'  => 90,              // 超时时间
    'username' => 'username',      // 用户名
    'password' => 'userpass',       // 密码
);

$upload = new Upload($config, 'ftp', $ftpConfig);// 实例化上传类
$upload->maxSize   =     3145728 ;// 设置附件上传大小
$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
$upload->rootPath  =     'uploads/'; // 设置附件上传根目录
$upload->savePath  =     'img/'; // 设置附件上传（子）目录

$info = $upload->upload();
if($info) {
	var_dump($info);
}else{
    var_dump($upload->getError());
}