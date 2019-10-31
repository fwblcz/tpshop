<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\Category as CategoryModel;
class Category extends  Controller
{

    public function index()
    {
        $category=CategoryModel::get(1);
        var_dump($category);exit;
    }

}
