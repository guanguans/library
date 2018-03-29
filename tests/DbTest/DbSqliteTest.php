<?php

require_once '../../vendor/autoload.php';
require_once '../../src/db/extend/functions.php';

use guanguans\library\db\Driver;

error_reporting(E_ERROR);
$User = M('ciauthor', '', 'sqlite://root:root@localhost:3306/./ci.db#utf8');
// $User = M('ciauthor');
var_dump($User->select());


