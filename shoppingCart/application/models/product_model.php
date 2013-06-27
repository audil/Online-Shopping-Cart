<?php
class product_model extends CI_Model {

public function __construct()
{
parent::__construct();
    $this->load->database();// loading the databse
}

public function get_products($productId)
{
$sql = "select * from products where id='$productId'";
 $query = $this->db->query($sql);//getting all data
return $query->result_array();// returing array of data
}

}
?>