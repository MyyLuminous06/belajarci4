<?php
namespace App\Controllers; 

use App\Controllers\BaseController; 

class Dashboard extends BaseController { 
	
	public function __construct() { 
	//aktifkan url helper 
	helper('url'); 
	}

	public function index() { 
		$data['judul']='Laman Home'; 
		$data['isi']='Lorem ipsum dolor sit amet'; 
		return view('dashboard',$data); 
	} 

	public function luas(){
		 $data['judul'] = 'Menghitung Luas Segitiga';
		 $data['alas'] = 0;
		 $data['tinggi'] = 0;
		 $data['hasil'] = 0;
		 return view('segitiga',$data);
	}

	public function segitiga() {
		 $data['judul'] = 'Menghitung Luas Segitiga';
		 $data['alas']=$this->request->getPost('alas');
		 $data['tinggi']=$this->request->getPost('tinggi');
		 $data['hasil'] = (1/2) * $data['alas'] * $data['tinggi'];
		 return view('segitiga',$data);
    }

    public function biodata(){
		 $data['nama'] = 'kinayung ';
		 $data['alamat'] = 'DS.Jabon Kec.Banyakan Kediri';
		 $data['kelamin'] = 'Laki-Laki';
		 $data['sekolah'] = 'SMKTI PELITA NUSANTARA';
		 return view('biodata',$data);
	}

}