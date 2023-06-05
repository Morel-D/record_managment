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
	}




	public function store()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('number', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('product', 'The product', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');


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

	public function update($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('number', 'Phone Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('product', 'The product', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');

		if ($this->form_validation->run()) {
			$data = [
				'name' => $this->input->post('name'),
				'number' => $this->input->post('number'),
				'email' => $this->input->post('email'),
				'product' => $this->input->post('product'),
				'price' => $this->input->post('price'),
			];
			$this->load->model('ProductModel');
			$this->ProductModel->updaterecords($id, $data);
			$this->session->set_flashdata('edit', 'Record has been updated successfully');
			redirect(base_url('show/' . $id));
		} else {
			$this->show($id);
		}
	}


	public function image()
	{


		$this->load->view('template/header');
		$this->load->view('upload');
		$this->load->view('template/footer');
	}

	public function upload_file()
	{
		$config['allowed_types'] = 'jpg|png|pdf';
		$config['upload_path'] = './uploads/';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			print_r($this->upload->data());
		} else {
			print_r($this->upload->display_errors());
		}
	}
}
