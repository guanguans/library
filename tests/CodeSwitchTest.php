<?php

require_once '../vendor/autoload.php';

use guanguans\library\CodeSwitch;

try {
    if (CodeSwitch::searchdir('../test')) {
        throw new Exception("文件夹为空！");
    }
    var_dump(CodeSwitch::searchdir('../tests'));
} catch (Exception $e) {
    var_dump($e->getMessage());
}
