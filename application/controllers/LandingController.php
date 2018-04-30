<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingController extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  // home
  function index()
  {
    $data['headerFull'] = true;
    $data['pageActive'] = 'home';

    $data['content'] = 'landing/home';

    $this->load->view('layouts/app', $data);
  }

  // news
  function news()
  {
    $data['headerFull'] = false;
    $data['content'] = 'landing/news';
    $data['pageActive'] = 'news';

    $data['data'] = array(
      'news' => $this->db->get('news')
    );

    $this->load->view('layouts/app', $data);
  }

  // about
  function about()
  {
    $data['headerFull'] = false;
    $data['pageActive'] = 'landing/about';
    $data['content'] = 'landing/about';

    $this->load->view('layouts/app', $data);
  }

  // discussion
  public function discussion()
  {
    $data['headerFull'] = false;
    $data['content'] = 'landing/discussion';
    $data['pageActive'] = 'discussion';

    $this->load->view('layouts/app', $data);
  }
}
