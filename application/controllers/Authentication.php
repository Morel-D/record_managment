<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Authentication extends CI_Controller
{


    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('authentication/login');
        $this->load->view('template/footer');
    }

    public function register()
    {
        $this->load->view('template/header');
        $this->load->view('authentication/register');
        $this->load->view('template/footer');
    }
}
