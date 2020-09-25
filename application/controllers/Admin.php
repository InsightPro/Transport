<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // YRegards constructor code
        //$this->load->library("Aauth");

    }



    public function index()
    {
        $this->load->view('files/header');
        $this->load->view('files/admin');
        $this->load->view('files/footer');
    }

  

}