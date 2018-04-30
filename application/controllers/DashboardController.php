<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('user_level') != 1 && !$this->session->userdata('user_log')) {
      redirect('/404_notfound');
    }
  }

  function index()
  {
    $data['content'] = 'home';
    $data['pageActive'] = 'administrator';
    $data['title'] = 'Dashboard';

    $this->load->view('layouts/app_dashboard', $data);
  }

  function discussion()
  {
    $data['content'] = 'discussion';
    $data['pageActive'] = 'discussion';
    $data['title'] = 'Discussion';

    $this->load->view('layouts/app_dashboard', $data);
  }

}
