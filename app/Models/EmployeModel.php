<?php
namespace App\Models;

use CodeIgniter\Model;

class EmployeModel extends Model {

	//membuat properti untuk Model
	protected $db;
	protected $table='employes';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id', 'nama', 'alamat', 'gender', 'gaji'];


	// public function __construct() {
	// 	parent:: __construct();
	// 	//koneksikan ke database
	// 	$this->db = db_connect();
	// }
//public function getData() {

		//query
		//$query="SELECT * FROM employes";
		//ambil data dan jadikan array
		//$data=$this->db->query($query)->getResultArray();
		//return $data;

		// $builder=$this->db->table($this->table);
		// return $data=$builder->get()->getResultArray();
	//}
}