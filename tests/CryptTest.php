<?php

require_once '../vendor/autoload.php';

use guanguans\library\crypt\Crypt;

try {
    // Base64 Crypt Des Think Xxtea
    $Crypt = new Crypt('Think');

    var_dump($Crypt->encrypt('guanguans', '琯琯'));
    var_dump($Crypt->decrypt($Crypt->encrypt('guanguans', '琯琯'), '琯琯'));
} catch (Exception $e) {
    var_dump($e->getMessage());
}
