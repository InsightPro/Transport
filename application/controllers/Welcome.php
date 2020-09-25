<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // YRegards constructor code
        //$this->load->library("Aauth");

    }

    public function index()
    {


        $this->load->view('login');


    }

/*    public function login()
    {
    	$user 		= $this->input->post('username');
        $password 	= $this->input->post('password');
        $this->load->model('login');
        $result =$this->login->user_login($user, $password);
        if ($result) {
        	echo "string";
        }else{
        	echo "no";
        }
    }*/

  

}