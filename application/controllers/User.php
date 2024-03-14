<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_Model');
	}

	public function index()
	{
		$data['title'] = "List Mobil";
		$data["mobil_list"] = $this->User_Model->getDataMobil();

		$this->load->view('template/assets-header', $data);
		//$this->load->view('template/navbar', $data);
		$this->load->view('user/daftarAdmin_view', $data);
		$this->load->view('template/assets-footer', $data);
	}

	public function createMobil()
 	{
 		$data['title'] = "Add Mobil";

 		$this->form_validation->set_rules('merek_produk', 'Nama', 'trim|required|min_length[2]');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template/assets-header', $data);
			$this->load->view('user/tambahAdmin_view', $data);
			$this->load->view('template/assets-footer', $data);
		} else {
			
			$this->User_Model->insertMobil();
		   	redirect('user','refresh');
		}
	}

	public function editMobil($id_produk)
 	{
 		$data['title'] = "Edit Mobil";
 		$data['data_mobil']=$this->User_Model->getDataMobilbyId($id_produk);

 		$this->form_validation->set_rules('merek_produk', 'Nama', 'trim|required|min_length[2]');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template/assets-header', $data);
			$this->load->view('user/editAdmin_view', $data);
			$this->load->view('template/assets-footer', $data);
		} else {
			
			$this->User_Model->editMobil($id_produk);
		   	redirect('user','refresh');
		}
	}

	public function deleteMobil($id_produk)
	{
		$this->User_Model->deleteMobil($id_produk);
		redirect('user', 'refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
 ?>