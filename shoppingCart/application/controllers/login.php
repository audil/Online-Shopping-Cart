<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model', '', TRUE);
        $this->load->library('session');
    }

    function index() {
        $username = $this->input->post('name', TRUE);
        $password = $this->input->post('password', TRUE);
        if (empty($username)) {
            echo 'Enter username';
        } elseif (empty($password)) {
            echo 'Enter Password';
        } else {

            $result = $this->login_model->login($username, $password);
            if ($result) {
                session_start();
                foreach ($result as $row) {

                    $_SESSION['username'] = $username;
                }
                
                echo 'successfully loggedin';
            } else {
                echo('Invalid username or password');
            }
        }
   exit();
        }

    function display() {
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location: /index.php/shoppingCart");
        }
        $this->load->view('/includes/headerlogin');
        $this->load->view('shopping/login_view');
        $this->load->view('/includes/footer');
    }

    function logout() {
        session_unset();
        session_destroy();
        header("Location: /index.php/shoppingCart");
        exit();
    }

}

?>
