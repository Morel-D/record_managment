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
        $this->form_validation->set_rules('con_pin', 'Confirm Code Pin', 'required');



        $letters = "USER";
        $matricule = substr(uniqid(), 0, 10);

        // input feilds

        $Email = $this->input->post('email');
        $Number = $this->input->post('number');
        $Pin = $this->input->post('pin');
        $ConifirmCode = $this->input->post('con_pin');


        if ($Pin != $ConifirmCode) {
            $this->session->set_flashdata('code', 'code pin not similar');
            $this->register();
        } elseif ($this->form_validation->run()) {
            $data = [
                'uid' => $letters . $matricule,
                'email' => $Email,
                'number' => $Number,
                'pin' => $Pin
            ];

            $this->load->model('AuthenticationModel');
            $this->AuthenticationModel->insertUser($data);
            $this->session->set_flashdata('success', 'Registration successful');
            redirect(base_url('signup'));
        } else {
            $this->session->set_flashdata('error', 'registration faild');
            redirect(base_url('signup'));
        }
    }



    public function auth()
    {

        $this->form_validation->set_rules('number', 'Phone Number', 'required');
        $this->form_validation->set_rules('pin', 'Code Pin', 'required');

        if ($this->form_validation->run()) {
            $Number = $this->input->post('number');
            $Pin = $this->input->post('pin');

            $this->load->model('AuthenticationModel');
            $results = $this->AuthenticationModel->getUser($Number, $Pin);

            if ($results == true) {
                $this->session->set_flashdata('success', 'Login successful');
                redirect(base_url('login'));
            } else {
                $this->session->set_flashdata('error', 'Login faild');
                redirect(base_url('login'));
            }
        } else {
            $this->session->set_flashdata('empty', 'Fill in the space provided');
            redirect(base_url('login'));
        }
    }
}
