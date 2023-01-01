<?php

class Managermodel extends CI_Model {
	
	function insertdata($tabel, $data){
		return $this->db->insert($tabel,$data);
	}
	
	function deldata($tabel,$where){
		return $this->db->delete($tabel,$where);
	}
	
	function updatedata($tabel,$data,$where){
		return $this->db->update($tabel,$data,$where);
	}

	function selectdata($where = ''){
		return $this->db->query("select * from $where;") ;
	}

	// public function graph()
	// {
	// 	$data = $this->db->query("select * from rata_rata inner join data_barang on rata_rata.no_barang = data_barang.no_barang");
	// 	return $data->result();
	// }
	public function graph()
	{
		$data = $this->db->query("select namabarang,c1,c2,c3 from hasilkmeans where iterasi = 4  ");
		return $data->result();
	}
	function get_databatang(){
		$this->db->select('namabarang,c1,c2,c3');
		$result = $this->db->get('hasilkmeans');
		return $result;
	}

	
}

?>