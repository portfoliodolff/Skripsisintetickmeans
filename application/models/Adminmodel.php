<?php

class Adminmodel extends CI_Model {
	function data_penjualan($data){
		return $this->db->insert('data_transaksi',$data);
	}
	function data_barang($data){
		return $this->db->insert('data_barang',$data);
	}
	function data_recency($data){
		return $this->db->insert('data_recency',$data);
	}
	
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
		return $this->db->query("select * from $where;");
	}
	function delalldata($table){
		return$this->db->truncate($table);
	}
	function simpanbarang($data = array())
    {
        $jumlah = count($data);
 
        if ($jumlah > 0)
        {
            $this->db->insert_batch('data_barang', $data);
        }
    }
	
}

?>