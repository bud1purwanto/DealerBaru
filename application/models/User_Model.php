<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {
	
	
	public function getDataMobil()
	{
		$this->db->select("id_produk, merek_produk, jenis_produk, jumlah_stok, harga, keterangan, aksi");
		$query = $this->db->get('mobil');
		return $query->result();
	}

	public function insertMobil()
	{
		$insert_mobil = array(
				'merek_produk' => $this->input->post('merek_produk'),
				'jenis_produk' => $this->input->post('jenis_produk'),
				'jumlah_stok' => $this->input->post('jumlah_stok'),
				'harga' => $this->input->post('harga'),
				'keterangan' => $this->input->post('keterangan'),
				'aksi' => 'insert',
				
			);

			$this->db->insert('mobil', $insert_mobil);
	}

	public function getDataMobilbyId($id_produk)
	{
		$this->db->select("id_produk, merek_produk, jenis_produk, jumlah_stok, harga, keterangan");
		$this->db->where('id_produk', $id_produk);
		$query = $this->db->get('mobil');
		return $query->result();
	}

	public function editMobil($id_produk)
	{
		$dataa = array(
			'merek_produk' => $this->input->post('merek_produk'),
				'jenis_produk' => $this->input->post('jenis_produk'),
				'jumlah_stok' => $this->input->post('jumlah_stok'),
				'harga' => $this->input->post('harga'),
				'keterangan' => $this->input->post('keterangan'),
				'aksi' => 'edit',
			);
		$this->db->where('id_produk', $id_produk);
		$this->db->update('mobil', $dataa);
	}

	public function deleteMobil($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->delete('mobil');
	} 

}

/* End of file User_Model.php */
/* Location: ./application/models/User_Model.php */
 ?>