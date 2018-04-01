# 常用工具库

重构 [TinkPHP](https://github.com/top-think/thinkphp) 中的 [Library](https://github.com/top-think/thinkphp/blob/master/ThinkPHP/Library/) 

让任何框架都可以用 Library 的类

## 安装

``` sh
php composer.phar require --prefer-dist guanguans/library
```

## 使用

### Db

``` php
<?php
require_once '../../src/db/extend/functions.php';

use guanguans\library\db\Driver;

$User = M('User');
// 查询
var_dump($User->where(['user_name'=>'琯琯'])->select());
```

[更多......](./docs/db.md)

### Env

``` php
<?php
use guanguans\library\Env;

// env 文件路径
$envFile = 'xxx/.env';
$Env = new Env($envFile);

// 获取配置 APP_NAME
var_dump($Env->get('APP_NAME'));
// 设置配置 APP_TEST
var_dump($Env->set('APP_TEST', 'this is a test.'));
```

### UploadFile

#### html

``` html
<form action="UploadFileTest.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>单文件上传</label>
        <input type="file" name="upload">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
```

#### php

``` php
<?php
use guanguans\library\UploadFile;

$upload = new UploadFile();

$upload->savePath      = './upload/';    // 上传根目录
$upload->saveRule      = 'uniqid/';      // 上传文件的文件名保存规则
$upload->autoSub       = true;           // 上传子目录开启
$upload->subType       = 'date';         // 上传子目录命名规则
$upload->allowExts     = ['jpg', 'png']; // 允许类型

if ($upload->upload()) {
    var_dump($upload->getUploadFileInfo());
} else {
    var_dump($upload->getErrorMsg());
}
```

### Upload

#### html

``` html
<form action="UploadTest.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>单文件上传</label>
        <input type="file" name="upload">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
```

#### php

``` php
<?php
use guanguans\library\upload\Upload;

$config = [
	'rootPath' => 'uploads',
	'savePath' => 'images',
	'saveName' => array('uniqid',''),
	'exts'     => array('jpg', 'png'),
	'autoSub'  => true,
	'subName'  => array('date','Ymd'),
];

$upload = new Upload($config);
$info = $upload->upload();

if ($info) {
	var_dump($info);
} else {
    var_dump($upload->getError());
}
```

### Verify

#### 生成验证码

``` php
<?php
use guanguans\library\verify\Verify;

$config =    array(
	'length'   =>  4,       // 验证码位数
	'useNoise' =>  false,   // 关闭验证码杂点
	'fontttf'  =>  '5.ttf', // 字体
);

$Verify = new Verify($config);
$Verify->entry();
```

#### 检查验证码

``` php
<?php
use guanguans\library\verify\Verify;

$verify = new Verify();
var_dump($verify->check($_POST['VerifyCode']));
```

### CodeSwitch

``` php
<?php
use guanguans\library\CodeSwitch;

// 目录遍历
CodeSwitch::searchdir('./test')
// 编码转换
CodeSwitch::DetectAndSwitch('./test')
```

### Crypt

``` php
<?php
use guanguans\library\crypt\Crypt;

// Base64 Crypt Des Think Xxtea
$Crypt = new Crypt('Des');

// 加密 guanguans
$encrypt = $Crypt->encrypt('guanguans', '琯琯')
// 解密 guanguans
$Crypt->decrypt($encrypt, '琯琯');
```

### Curl

```php
<?php
use guanguans\library\Curl;

$Curl = new Curl();

// 发送 get 请求
$Curl->get('http://baidu.com');
```

### Date

``` php
<?php
use guanguans\library\Date;

$Date = new Date();

// 日期分析
$Date->parse('2017-07-23');
// 计算日期差
$Date->dateDiff('2017-07-23');
// 人性化的计算日期差
$Date->timeDiff('2017-07-23');
// 判断日期 所属 干支 生肖 星座
$Date->magicInfo('2017-07-23');
```

### Dir

``` php
<?php
use guanguans\library\Dir;

// 要操作的目录
$dir = './'
$Dir = new Dir($dir);

// 取得目录下面的文件信息
$Dir->listFile()

// 删除目录（包括下面的文件）
$Dir->delDir()

// 删除目录下面的所有文件
$Dir->del()

// 复制目录
$Dir->copyDir()
```

### Hash

``` php
<?php
use guanguans\library\hash\Hash;

// 加密
Hash::make('guanguans');

// 检查
Hash::check('guanguans', $encrypt);
```

### Http

``` php
<?php
use guanguans\library\Http;

$Http = new Http();

// 采集远程文件       远程文件名         本地保存文件名
$Http->curlDownload('./HttpTest.php', './test.php');

// 使用 fsockopen 通过 HTTP 协议直接访问(采集)远程文件
$Http->fsockopenDownload($url, $config);

/**
 * 下载文件
 * $filename 下载文件名
 * $showname 下载显示的文件名
 * $content 下载的内容
 * $expire 下载内容浏览器缓存时间
 */
$Http->fsockopenDownload($filename, $showname, $content, $$expire);

// 显示HTTP Header 信息
$Http->getHeaderInfo('./HttpTest.php');
```

## License

[MIT](./LICENSE)

