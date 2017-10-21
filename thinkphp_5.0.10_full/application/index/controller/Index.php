<?php
namespace app\index\controller;//命名空间:定义当前路径controller

use think\Controller;//引用think下的controller
use app\index\model\IndexAct;//引用上一级路径下的model的模型

header("Content-type: text/html; charset=utf-8");
class Index extends Controller{
    public function index(){
        return view();//渲染模板，输出页面内容
    }

    public function select(){

        $index = new IndexAct();//实例化模型
        $rows = $index->IndexAction();//调用模型方法
//        echo "<pre>";
//        print_r($res);
//        $this->assign("res",$res);
        echo json_encode($rows);//该函数将数组和对象返回json格式
//        return $this->fetch();
    }

    public function city(){
        $id = $_POST['provinceid'];//获取数据
        $city = new IndexAct();//实例化模型
        $rows = $city->cities($id);//调用模型方法(传输数据）
        echo json_encode($rows);//该函数将数组和对象返回json格式
    }

    public function areas(){
        $id = $_POST['cityid'];//获取数据
        $areas = new IndexAct();//实例化模型
        $rows = $areas->areas($id);//调用模型方法(传输数据）
        echo json_encode($rows);//该函数将数组和对象返回json格式
    }
}
