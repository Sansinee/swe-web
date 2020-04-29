<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Product_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    //ใช้ตอน update or delete//
    public function findOne($condition = [])
    {
        if(sizeof($condition)>0){
            $this->mongo_db->where($condition);
        }

        $result = $this->mongo_db->getOne('product');
        return $result;
    }

    //ใช้ตอนค้าหาหรือแสดงข้อมูลออกมา//
    public function findAll($condition = [])
    {

        if(sizeof($condition)>0){
            $this->mongo_db->where($condition);
        }

       $result = $this->mongo_db->get('product');
       return $result;
    }
}