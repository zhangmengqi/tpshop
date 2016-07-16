<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "indexController index";
    }

    public function show1(){
        echo "indexController show";
    }
}