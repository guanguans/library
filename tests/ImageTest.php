<?php

require_once '../vendor/autoload.php';

use guanguans\library\image\Image;
use guanguans\library\image\driver\GIF;


var_dump(new GIF('./xxx.png'));

$image = new Image(1);
var_dump($image->open('./xxx.png'));
// 将图片裁剪为400x400并保存为corp.jpg
var_dump($image->thumb(150, 150)->save('./thumb.jpg'));

