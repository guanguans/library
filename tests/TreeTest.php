<?php

require_once '../vendor/autoload.php';

use guanguans\library\Tree;

$result     = [
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

$tree       = new Tree();
$tree->icon = ['&nbsp;&nbsp;&nbsp;│ ', '&nbsp;&nbsp;&nbsp;├─ ', '&nbsp;&nbsp;&nbsp;└─ '];
$tree->nbsp = '&nbsp;&nbsp;&nbsp;';

foreach ($result as $key => $value) {
    $result[$key]['post_name'] = '<a href="' .$value['url']. '">'.$value['name'].'</a>';
    $result[$key]['parentid'] = $value['parent_id'];
}

$tree->init($result);
$str  = "<tr>
            <td>\$id</td>
            <td>\$spacer\$post_name</td>
            <td>\$name</td>
            <td>url</td>
        </tr>";
$tree_data = $tree->get_tree(0, $str);
$tree_array_data = $tree->get_tree_array(0, $str);


echo '<table>';
print_r($tree_data);
echo '</table>';

echo '<pre>';
print_r($tree_array_data);

