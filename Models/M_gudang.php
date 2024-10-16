<?php

namespace App\Models;
use CodeIgniter\Model;

class M_gudang extends Model
{
	public function tampil($table){  
		return $this->db->table($table)
						->get()
						->getResult();
						//titik coma adalah batas, itu berarti baris baru//
	}
	public function join($table, $table2, $on){  
		return $this->db->table($table)
						->join($table2,$on)
						->get()
						->getResult();
	}
	public function joinw($table, $table2, $on, $w){  
		return $this->db->table($table)
						->join($table2,$on)
						->where($w)
						->get()
						->getRow();
	}
	public function input($table, $data){
		return $this->db->table($table)
						->insert($data);
	}
	public function hapus($table, $where){
		return $this->db->table($table)
						->delete($where);
	}
	public function edit($table, $data, $where){
		return $this->db->table($table)
						->update($data, $where);
	}
	public function getWhere($table, $where){
		return $this->db->table($table)
						->getWhere($where)
						->getRow();
	}
	public function simpan_barang($data)
	{
		$query = $this->db->table($this->table)
						->insert($data);
		return $query;
	}
	protected $table = 'user';
	public function saveUser($data)
	{
		$query =$this->db->table($this->table)
						->insert($data);
		return $query;
	}
}