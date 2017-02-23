<?php
/**
 * 项目后台入口文件
 * User: RJ
 * Date: 2017/02
 * Blog: http://nearby.wang
 * Mail: finallybad@gmail.com
 */

echo "<meta charset='utf-8'>";
require_once '../core/App.class.php';

//注册一个
define('APP','web');

spl_autoload_register(array('App','myAutoloader'));

try{
    App::run();
    throw new MyException();
}catch(MyException $e){
    $e->showError(($e->getMessage()));
}