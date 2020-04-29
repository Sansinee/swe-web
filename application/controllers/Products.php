<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index()
    {
        $data['products'] =  $this->product_model->findAll();
        $this->load->view('products/index',$data);
    }

}