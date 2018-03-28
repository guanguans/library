<?php

require_once '../vendor/autoload.php';

use guanguans\library\PHPZip;

$PHPZip = new PHPZip();

try {
    error_reporting(E_WARNING);

    // 遍历指定文件夹
    if (!$PHPZip->visitFile('../tests')) {
        throw new Exception("文件夹为空！");
    } else {
        var_dump($PHPZip->visitFile('../tests'));
    }

    // 压缩并直接下载
    // var_dump($PHPZip->ZipAndDownload('../tests'));

    // 压缩到服务器
    // var_dump($PHPZip->Zip('../tests', 'tests.zip'));
    //
    // 解压文件
    // var_dump($PHPZip->unZip('./tests.zip', '../PHPZip'));

    // 获取被压缩文件的信息
    // var_dump($PHPZip->GetZipInnerFilesInfo('./tests.zip'));

    // 获取压缩文件的注释
    // var_dump($PHPZip->GetZipComment('./tests.zip'));

} catch (Exception $e) {
    var_dump($e->getMessage());
}



