<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran extends CI_Model
 {

	public function search($q)
	{
		$this->qq = explode(' ',$q);
	}
	
	//query pengambilan semua data
	public function getAllData($table)
	{
		return $this->db->get($table);
	}
	//menghapus data dalam tabel
	function deleteData($table,$data)
	{
		$this->db->delete($table, $data);
	}
	//memasukan data - insert
	function insertData($table,$data)
	{
		$this->db->insert($table,$data);
	}
	//query untuk mengambil detail by id
	function get_detail($table,$id_table,$id) {
		$query = $this->db->get_where($table, array($id_table => $id));
		return $query;
	}
	
	function updateData($table,$data,$field,$key)
	{
		$this->db->where($key,$field);
		$this->db->update($table,$data);
	}	
}