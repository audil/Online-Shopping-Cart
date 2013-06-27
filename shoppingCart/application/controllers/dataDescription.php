<?php
class DataDescription extends CI_Controller {
    
public function index()
{
    $productId=$_GET['id'];
    $this->load->model('product_model');
    $data['product'] = $this->product_model->get_products($productId);
    $this->load->view('/includes/header',$data);
$this->load->view('shopping/description_view', $data);
$this->load->view('/includes/footer',$data);
}
}