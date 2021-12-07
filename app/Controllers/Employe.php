<?php
namespace App\Controllers;

class Employe extends BaseController {

protected $employeModel;



	public function __construct() {
		//load model
		$this->employeModel=new \App\Models\EmployeModel();
	}

	public function index() {
		// memasukan semua data dalam array
		$data['judul']='CRUD Employe';
		//memanggil fungsi dari model
		$data['employe']=$this->employeModel->getData();
		//Menampilkan hasil ke view
		return view('tampil_data',$data);
	}
}
