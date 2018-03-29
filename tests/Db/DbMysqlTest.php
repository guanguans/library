<?php

require_once '../../vendor/autoload.php';
require_once '../../src/db/extend/functions.php';

use guanguans\library\db\Driver;

// $User = M('User', 'cmf_', 'mysql://root:root@localhost:3306/thinkcmf5#utf8');
$User = M('User');
var_dump($User->select());


