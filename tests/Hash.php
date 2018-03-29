<?php

require_once '../vendor/autoload.php';

use guanguans\library\hash\Hash;



$encrypt = Hash::make('guanguans');
$decrypt = Hash::check('guanguans', $encrypt);

var_dump($encrypt);
var_dump($decrypt);
