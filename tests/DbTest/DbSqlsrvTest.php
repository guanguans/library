<?php

require_once '../../vendor/autoload.php';
require_once '../../src/db/extend/functions.php';

use guanguans\library\db\Driver;

/**
 * 表名必须转化为下划线 _ 单词首字母大写其余字母小写
 * 例如： ZBYDJK->Zbydjk    Air_d_Station_NewData->AirdStationNewData
 */
// $User = M('Zbydjk', '', 'sqlsrv://sa:root@localhost/cwrpms#utf8');
$User = M('AirDStationNewdata', '', 'sqlsrv://sa:root@localhost/WaringPulish#utf8');
// $User = M('auth');

var_dump($User->select());


