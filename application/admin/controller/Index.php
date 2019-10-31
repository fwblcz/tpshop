<?php
namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        echo 'admin no';
    }

    public function test(){
        echo 'admin test';exit;
    }
}
