<?php
namespace app\index\model;

use think\Model;
use think\Db;

class IndexAct extends Model{
    public function IndexAction(){
       $sql = Db::table('mq_sys_provinces')->select();//��ѯ����
//        echo $sql;exit;
        return $sql;//��������
    }

    public function cities($id){
        $sql = Db::table('mq_sys_cities')->where("provinceid",$id)->select();
//        echo $sql;exit;
        return $sql;
    }

    public function areas($id){
        $sql = Db::table('mq_sys_areas')->where("cityid",$id)->select();
        return $sql;
    }
}
