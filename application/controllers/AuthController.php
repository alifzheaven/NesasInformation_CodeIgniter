<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function login()
  {
    // loging
    if ($this->input->post('loginTrue')) {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $checkQuery = $this->db->get_where('users', [
        'user_username' => $username,
        'user_password' => md5($password)
      ]);

      // if success
      if ($checkQuery->num_rows() > 0) {
        $session = $this->session->set_userdata([
          'user_log' => true,
          'user_id'  => $checkQuery->row()->user_id,
          'user_username' => $checkQuery->row()->user_username,
          'user_level'    => $checkQuery->row()->user_level
        ]);

        if ($checkQuery->row()->user_level == 0) {
          redirect('/administrator');
        }
        else {
          redirect('/login');
        }
        
      }
      else {
        echo "<script> alert('Login Failed !'); </script>";
      }

    }

    $this->load->view('layouts/login');
  }

  // logout
  public function logout()
  {
    $this->session->sess_destroy();

    redirect('/login');
  }

}
