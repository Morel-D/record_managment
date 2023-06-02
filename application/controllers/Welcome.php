<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->view('template/header');

		$this->load->model('ProductModel');
		$data['records'] = $this->ProductModel->getRecords();
		$this->load->view('products', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('addProduct');
		$this->load->view('template/footer');

		if ($_SERVER['REQUEST_METHOD']) {
		}
	}


	public function store()
	{
		$this->form_validation->set_rules('name', 'Enter Full Name', 'required');
		$this->form_validation->set_rules('number', 'Enter Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Enter Email', 'required');
		$this->form_validation->set_rules('product', 'Select the product', 'required');
		$this->form_validation->set_rules('price', 'Enter Price', 'required');


		$letters = "RCD";
		$matricule = substr(uniqid(), 0, 5);

		if ($this->form_validation->run()) {
			$data = [
				'uid' => $letters . $matricule,
				'name' => $this->input->post('name'),
				'number' => $this->input->post('number'),
				'email' => $this->input->post('email'),
				'product' => $this->input->post('product'),
				'price' => $this->input->post('price')
			];



			$this->load->model('ProductModel');
			$this->ProductModel->insertRecords($data);
			$this->session->set_flashdata('status', 'Record has been added');
			redirect(base_url('/'));
		} else {
			$this->create();
		}
	}


	public function delete($id)
	{
		$this->load->model('ProductModel');
		$this->ProductModel->deleteRecords($id);
		$this->session->set_flashdata('delete', 'Record has been deletetd');
		redirect(base_url('/'));
	}

	public function show($id)
	{
		$this->load->view('template/header');
		$this->load->model('ProductModel');
		$data['records'] = $this->ProductModel->show($id);
		$this->load->view('viewRecord', $data);
		$this->load->view('template/footer');
	}
}
