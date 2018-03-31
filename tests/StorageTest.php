<?php

require_once '../vendor/autoload.php';

use guanguans\library\storage\Storage;


var_dump(Storage::connect('file'));
var_dump(Storage::put('test.text','testtesttesttesttest','F'));
// var_dump(Storage::unlink('test.text','F'));

