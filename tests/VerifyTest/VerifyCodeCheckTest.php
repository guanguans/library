<?php

require_once '../../vendor/autoload.php';
	
use guanguans\library\verify\Verify;

error_reporting(E_ERROR);

$verify = new Verify();
var_dump($verify->session());
var_dump($verify->check($_POST['VerifyCode']));


