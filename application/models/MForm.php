<?php

class MForm extends CI_Model {

	function getDataBaju() {
		$query = $this->db->get('tabpas');
		return $query->result();
	}

	function insertDataBaju($data) {
		$this->db->insert('tabpas', $data);
	}

	function getDataBajuDetail($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tabpas');
		return $query->row();
	}

	function updateDataBaju($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('tabpas', $data);
	}

	function deleteDataBaju($id) {
		$this->db->where('id', $id);
		$this->db->delete('tabpas');
	}

	// public function getMenuToCart($id){
    //     $query = $this->db->query("SELECT * from tabpas where id='$id'");
    //     $hasil = $query->row();
    //     $cart = array(
    //         'id'      => $hasil->id,
    //         'nama'     => 1,
    //         'keluhan'   => $hasil->keluhan,
    //         'stock'    => $hasil->nama_menu,
    //     );
    //     $this->cart->insert($cart);
    // }

}

?>