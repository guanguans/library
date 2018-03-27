<?php

require_once '../vendor/autoload.php';

use guanguans\library\Date;

$date = new Date();

try {
	var_dump($date->timeDiff('2017-07-23'));
} catch (Exception $e) {
	var_dump($e->getMessage());
}
