<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Signin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // YRegards constructor code
        //$this->load->library("Aauth");

    }

    //// function for user login ///
    public function index()
    {
        $user       = $this->input->post('username');
        $pass       = $this->input->post('password');
        ///convert password text to md5////
        $password   = md5($pass);

        $this->load->model('login');
        $result     = $this->login->user_login($user, $password);

        if ($result) {
            redirect('admin');
            //echo "yes";
        }
        
        $this->load->view('login');
        
    }


  

}