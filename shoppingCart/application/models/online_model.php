<?php

class online_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // loading the databse
    }

    public function get_products() {
        $sql = "select products.id,products.Image,products.product_name,category.category,products.price from products inner join category ON products.categoryid=category.id";
        $query = $this->db->query($sql); //getting all data
        return $query->result_array(); // returing array of data
    }

//    public function get_dropdown() {
//
//
//        $sql = "select * from category";
//        $query = $this->db->query($sql);
//        echo '<option>All CATEGORIES</option>';
//        while ($row = mysqli_fetch_array($output)) {
//            $id = $row['id'];
//            echo "<option value='$id'>" . $row['category'] . "</option>";
//        }
//    }

}
?>

