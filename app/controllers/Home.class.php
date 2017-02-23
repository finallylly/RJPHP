<?php

/**
 * 前台首页控制器
 * User: RJ
 * Date: 2017/02
 * Blog: http://nearby.wang
 * Mail: finallybad@gmail.com
 */
class Home extends Controller
{
    public function index($data = array()){
        //加载首页页面
        $this->show('index/index',$data);
    }
}





