<?php

require_once '../vendor/autoload.php';

use guanguans\library\Http;

$http = new Http();

$http->download('./HttpTest.php', './test.php');

