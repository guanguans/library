<?php

require_once '../../vendor/autoload.php';

use guanguans\library\verify\Verify;

$config =    array(
	'fontSize' =>  30,      // 验证码字体大小
	'length'   =>  4,       // 验证码位数
	'useNoise' =>  false,   // 关闭验证码杂点
	'fontttf'  =>  '5.ttf', // 字体
);
$Verify = new Verify($config);
$Verify->entry();



