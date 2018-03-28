<?php

require_once '../vendor/autoload.php';

use guanguans\library\ipLocation\IpLocation;

// 实例化类 参数表示IP地址库文件
$IpLocation = new IpLocation('QQwry-gbk.dat');

// 获取某个IP地址所在的位置
header("Content-type: text/html; charset=gbk");
$area = $IpLocation->getlocation('61.135.169.125');
var_dump($area);
