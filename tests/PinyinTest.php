<?php

require_once '../vendor/autoload.php';

use guanguans\library\PinYin;

$pinyin = new PinYin();

try {
	var_dump($pinyin->getAllPY('PHP 是最好的语言'));
	var_dump($pinyin->getFirstPY('PHP 是最好的语言'));
} catch (Exception $e) {
	var_dump($e->getMessage());
}