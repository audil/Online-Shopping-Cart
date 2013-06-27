<?php
Class login_model extends CI_Model
{
    function login($username, $password)
    {
       
        $sql = "SELECT username,password FROM userdetails WHERE username='$username'and password='$password'";
        $query = $this->db->query($sql);
//      $this -> db -> limit(1);      
        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
              return false;
        }

    }
}
?>