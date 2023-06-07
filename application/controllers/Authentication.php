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




    public function user()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('number', 'Phone Number', 'required');
        $this->form_validation->set_rules('pin', 'Code Pin', 'required');

        $letters = "USER";
        $matricule = substr(uniqid(), 0, 10);

        if ($this->form_validation->run()) {
            $data = [
                'uid' => $letters . $matricule,
                'email' => $this->input->post('email'),
                'number' => $this->input->post('number'),
                'pin' => $this->input->post('pin'),
            ];

            $this->load->model('AuthenticationModel');
            $this->AuthenticationModel->insertUser($data);
        } else {
            $this->register();
        }
    }
}
