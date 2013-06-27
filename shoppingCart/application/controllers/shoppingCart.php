<?php

class ShoppingCart extends CI_Controller {

public function index()
{
$this->load->library('pagination');

$config['base_url'] = 'http://localhost:81/shoppingCart/index.php';
$config['total_rows'] = 21;
$config['per_page'] = 15; 
$this->pagination->initialize($config); 
$this->load->model('online_model');
$data['product'] = $this->online_model->get_products();// function writen in model
//$data['dropdown'] = $this->online_model->get_dropdown();

$this->load->view('/includes/header', $data);
$this->load->view('shopping/index', $data);
$this->load->view('/includes/footer', $data);
}


}
?>
