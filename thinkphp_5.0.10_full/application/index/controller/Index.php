<?php
namespace app\index\controller;//�����ռ�:���嵱ǰ·��controller

use think\Controller;//����think�µ�controller
use app\index\model\IndexAct;//������һ��·���µ�model��ģ��

header("Content-type: text/html; charset=utf-8");
class Index extends Controller{
    public function index(){
        return view();//��Ⱦģ�壬���ҳ������
    }

    public function select(){

        $index = new IndexAct();//ʵ����ģ��
        $rows = $index->IndexAction();//����ģ�ͷ���
//        echo "<pre>";
//        print_r($res);
//        $this->assign("res",$res);
        echo json_encode($rows);//�ú���������Ͷ��󷵻�json��ʽ
//        return $this->fetch();
    }

    public function city(){
        $id = $_POST['provinceid'];//��ȡ����
        $city = new IndexAct();//ʵ����ģ��
        $rows = $city->cities($id);//����ģ�ͷ���(�������ݣ�
        echo json_encode($rows);//�ú���������Ͷ��󷵻�json��ʽ
    }

    public function areas(){
        $id = $_POST['cityid'];//��ȡ����
        $areas = new IndexAct();//ʵ����ģ��
        $rows = $areas->areas($id);//����ģ�ͷ���(�������ݣ�
        echo json_encode($rows);//�ú���������Ͷ��󷵻�json��ʽ
    }
}
