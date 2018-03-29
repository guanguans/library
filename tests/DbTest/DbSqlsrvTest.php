<?php

require_once '../../vendor/autoload.php';
require_once '../../src/db/extend/functions.php';

use guanguans\library\db\Driver;

$User = M('auth', '', 'sqlsrv://sa:root@localhost/bjy#utf8');
$User = M('auth');

var_dump($User->select());


