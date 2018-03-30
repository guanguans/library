<?php

require_once '../../vendor/autoload.php';
require_once '../../src/db/extend/functions.php';

use guanguans\library\db\Driver;

// 实例化 User 对象
// $User = M('User', 'cmf_', 'mysqli://root:root@localhost:3306/thinkcmf5#utf8');
$User = M('User');

// WHERE
// var_dump($User->where('user_type=1 AND user_status=1')->select());

// TABLE
var_dump($User->where('user_statuss=1')->select());
