<?php


if (!defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Model
{

    public function user_login($user, $password)
    {
        $this->db->select('*');
        $this->db->from('user_table');
        $this->db->where('user_id', $user);
        $this->db->where('password', $password);

        $query_result = $this->db->get();
        $result =$query_result->row();
        //print_r($result);
        return $result;

    }
  

}