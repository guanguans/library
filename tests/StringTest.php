<?php

require_once '../vendor/autoload.php';

use guanguans\library\String;

$String = new String();

try {
	var_dump($String->uuid());
	var_dump($String->randString());
} catch (Exception $e) {
	var_dump($e->getMessage());
}
