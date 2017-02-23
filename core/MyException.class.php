<?php

/**
 * 用户自定义的错误异常类
 * User: RJ
 * Date: 2016/02
 * Blog: http://nearby.wang
 * Mail: finallybad@gmail.com
 */
class MyException extends Exception
{
    /**
     * 错误页面加载
     * @param $msg
     */
    public static function showError($msg){
        $err_dir = 'app/views/error/error.php';
        //判断错误页面是否存在
        if(file_exists($err_dir)){
            require $err_dir;
        }
    }
}