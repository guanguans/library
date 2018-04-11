# 常用工具库

<p align="center">
    <a href="https://github.com/guanguans/library/tags"><img src="https://img.shields.io/github/tag/guanguans/library.svg"></a>
    <a href="https://github.com/guanguans/library/blob/master/LICENSE"><img src="https://img.shields.io/github/license/guanguans/library.svg"></a>
</p>

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
$User->where(['user_name'=>'琯琯'])->select();
```

[更多......](https://www.kancloud.cn/manual/thinkphp/1734)

### Env

``` php
<?php
use guanguans\library\Env;

// env 文件路径
$envFile = 'xxx/.env';
$Env = new Env($envFile);

// 获取配置 APP_NAME
$Env->get('APP_NAME');
// 设置配置 APP_TEST
$Env->set('APP_TEST', 'this is a test.');
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

$UploadFile->savePath      = './upload/';    // 上传根目录
$UploadFile->saveRule      = 'uniqid/';      // 上传文件的文件名保存规则
$UploadFile->autoSub       = true;           // 上传子目录开启
$UploadFile->subType       = 'date';         // 上传子目录命名规则
$UploadFile->allowExts     = ['jpg', 'png']; // 允许类型

if ($UploadFile->upload()) {
    $UploadFile->getUploadFileInfo();
} else {
    $UploadFile->getErrorMsg();
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

$Upload = new Upload($config);
$info = $Upload->upload();

if ($info) {
	$info;
} else {
    $upload->getError();
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

$Verify = new Verify();
$Verify->check($_POST['VerifyCode']);
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

### Image

``` php
<?php
use guanguans\library\image\Image;
use guanguans\library\image\driver\GIF;

$Image = new Image(1);

// 打开要操作的图片
$Image->open('./xxx.png');
// 将图片裁剪为400x400并保存为corp.jpg
$Image->thumb(150, 150)->save('./thumb.jpg');
```

[更多......](https://www.kancloud.cn/manual/thinkphp/1878)

### IpLocation

``` php
<?php
use guanguans\library\ipLocation\IpLocation;

// 实例化类 参数表示IP地址库文件
$IpLocation = new IpLocation('QQwry-gbk.dat');

header("Content-type: text/html; charset=gbk");
// 获取某个IP地址所在的位置
$IpLocation->getlocation('61.135.169.125');
```

### PHPZip


``` php
<?php
use guanguans\library\PHPZip;

$PHPZip = new PHPZip();

// 遍历指定文件夹
$PHPZip->visitFile('../tests');
// 压缩并直接下载
$PHPZip->ZipAndDownload('../tests');
// 压缩到服务器
$PHPZip->Zip('../tests', 'tests.zip');
// 解压文件
$PHPZip->unZip('./tests.zip', '../PHPZip');
// 获取被压缩文件的信息
$PHPZip->GetZipInnerFilesInfo('./tests.zip');
// 获取压缩文件的注释
$PHPZip->GetZipComment('./tests.zip');
```

### PinYin

``` php
<?php
use guanguans\library\PinYin;

$PinYin = new PinYin();

$PinYin->getAllPY('PHP 是最好的语言');
$PinYin->getFirstPY('PHP 是最好的语言');
```

### Storage

``` php
<?php
use guanguans\library\storage\Storage;

Storage::connect('file');
Storage::put('test.text','testtesttesttesttest','F');
Storage::unlink('test.text','F');
```

### String

``` php
<?php
use guanguans\library\String;

$String = new String();

$String->uuid();
$String->randString();
```

### Tree

``` php
use guanguans\library\Tree;

$data     = [
    ['id'=>1, 'parent_id'=>0, 'name'=>'Java', 'url'=>'url1'],
    ['id'=>2, 'parent_id'=>0, 'name'=>'PHP', 'url'=>'url2'],
    ['id'=>3, 'parent_id'=>0, 'name'=>'python', 'url'=>'url3'],
    ['id'=>4, 'parent_id'=>2, 'name'=>'ThinkPHP', 'url'=>'url4'],
    ['id'=>5, 'parent_id'=>2, 'name'=>'Laravel', 'url'=>'url5'],
    ['id'=>6, 'parent_id'=>2, 'name'=>'Yii2', 'url'=>'url6'],
    ['id'=>7, 'parent_id'=>4, 'name'=>'ThinkPHP 是一个 PHP 框架', 'url'=>'url7'],
    ['id'=>8, 'parent_id'=>4, 'name'=>'ThinkPHP 中集成 guanguans/library', 'url'=>'url8'],
    ['id'=>9, 'parent_id'=>5, 'name'=>'Laravel 是一个 PHP 框架', 'url'=>'url9']
];

$Tree       = new Tree();
$Tree->icon = ['&nbsp;&nbsp;&nbsp;│ ', '&nbsp;&nbsp;&nbsp;├─ ', '&nbsp;&nbsp;&nbsp;└─ '];
$Tree->nbsp = '&nbsp;&nbsp;&nbsp;';

foreach ($data as $key => $value) {
    $data[$key]['post_name'] = '<a href="' .$value['url']. '">'.$value['name'].'</a>';
    $data[$key]['parentid'] = $value['parent_id'];
}

$Tree->init($data);
$str  = "<tr>
            <td>\$id</td>
            <td>\$spacer\$post_name</td>
            <td>\$name</td>
            <td>url</td>
        </tr>";

// 数据数据
$Tree->get_tree(0, $str);
// 树形数组
$Tree->get_tree_array(0, $str);
```
## License

[MIT](./LICENSE)

