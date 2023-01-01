<?php

class Model extends CI_Model {

	function login($where = ''){
		return $this->db->query("select * from login $where;");
	}

	function ambillevel(){
		return $this->db->query("select level from login");
	}

	function getPetunjuk(){
		return $this->db->query('select * from data where no_data = 2')->result_array();
	}

	function getAbout(){
		return $this->db->query('select * from data where no_data = 3')->result_array();
	}

	function getdatamanager(){
		return $this->db->query('select * from data where no_data = 4')->result_array();
	}

	function getTitle(){
		return $this->db->query('select * from data where no_data = 1')->result_array();
	}
	function selectdata($where = ''){
		return $this->db->query("select * from $where;") ;
	}


    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
		$this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
}

?>