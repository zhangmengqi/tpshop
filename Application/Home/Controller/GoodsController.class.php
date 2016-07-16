<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/16 0016
 * Time: 下午 2:42
 */
namespace Home\Controller;
class GoodsController extends  \Think\Controller
{
    public function index(){
        $this->display('show1');
    }

    public function show1(){
        $this->display();
    }

}