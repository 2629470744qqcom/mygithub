<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/7
 * Time: 9:15
 */

include_once "./smarty/configs/a.php";

$app_name='gdfkj';
$smarty ->assign('app_name',$app_name);
$smarty->display('index.html');

