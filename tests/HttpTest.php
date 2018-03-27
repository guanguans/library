<?php

require_once '../vendor/autoload.php';

use guanguans\library\Http;

$http = new Http();

$fileUrl = 'http://upload-images.jianshu.io/upload_images/3827973-65f23784b07da855..png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240';
const UPLOAD_PATH = './';
//var_dump($http->curlDownload($fileUrl, './uploads/downtest.png'));
var_dump($http->download($fileUrl, './uploads/downtest.png'));

