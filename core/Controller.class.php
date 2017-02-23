<?php

/**
 * 所有控制器的基类
 * User: RJ
 * Date: 2017/02
 * Blog: http://nearby.wang
 * Mail: finallybad@gmail.com
 */
class Controller
{
    /**
     * 加载指定的模板页面
     * @param $page
     * @param array $data
     */
    public function show($page,$data=array()){
        $url = "app/views/".$page.".php";
        //判断页面是否存在
        if(file_exists($url)){
            require_once $url;
        }
    }
}