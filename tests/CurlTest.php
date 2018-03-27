<?php

require_once '../vendor/autoload.php';

use guanguans\library\Curl;

$Curl = new Curl();

try {
	$url = 'http://gank.io/api/search/query/listview/category/all/count/10/page/1';
	echo '<pre>';
	print_r($Curl->get($url));
} catch (Exception $e) {
	var_dump($e->getMessage());
}