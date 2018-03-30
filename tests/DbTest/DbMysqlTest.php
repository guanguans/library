<?php

require_once '../../vendor/autoload.php';
require_once '../../src/db/extend/functions.php';

use guanguans\library\db\Driver;

// 模型实例化 1
// $User = M('User', 'cmf_', 'mysqli://root:root@localhost:3306/thinkcmf5#utf8');
// 模型实例化 2
// $Model = M();
// $Model = new guanguans\library\db\Model();
// var_dump($Model->query('SELECT * FROM cmf_user WHERE user_status = 1'));
// 模型实例化 3
$User = M('User');

// TABLE
// var_dump($User->table('cmf_user_token')->select());

// ALIAS
// var_dump($User->alias('u')->join('cmf_user_token b ON b.user_id= u.id')->select());

// insert
// $data['user_login'] = '琯琯';
// $data['user_email'] = 'yzmguanguan@gmail.com';
// var_dump($User->add($data));

// delete
// var_dump($User->delete(33));

// update
// $data['id'] = 8;
// $data['user_login'] = '琯琯';
// $data['user_email'] = 'yzmguanguan@gmail.com';
// var_dump($User->save($data));

// find select
// var_dump($User->where(['user_login'=>'琯琯'])->find());
// var_dump($User->where(['user_login'=>'琯琯'])->select());

// 分页
/*$User  = M('User'); // 实例化User对象
$count = $User->where('user_status=1')->count();// 查询满足要求的总记录数
$Page  = new guanguans\library\db\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)
$Page->setConfig('prev','首页');
$Page->setConfig('next','尾页');
$show  = $Page->show('DbMysqlTest.php');// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
$list  = $User->where('user_status=1')->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();

var_dump($list);
echo '<pre>';
print_r($show);*/




