<?php

require_once '../../vendor/autoload.php';

use guanguans\library\Env;

$Env = new Env('./.env');

var_dump($Env);
var_dump($Env->get('APP_NAME'));
var_dump($Env->set('APP_TEST', 'this is a test.'));
var_dump($Env);
