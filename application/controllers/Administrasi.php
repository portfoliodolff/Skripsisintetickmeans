<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Administrasi extends CI_Controller {



	function __construct() {
		parent::__construct();

		if($this->session->userdata('login') != TRUE)
		{
			$this->load->view('admin/error');
		}
		$this->load->helper('form');
		$this->load->model('Adminmodel');
		$this->load->model('Model');
		$this->load->helper('url');
		$this->load->library('session');
		// $this->load->library('excel'); 
	}
	

	function index(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
			$this->load->view('admin/error');

		}
		else {
			$data_barang = $this->Adminmodel->selectdata('data_barang order by id_barang ')->result_array();

			
			$data = array(
				'title'			=> ' Selamat Datang Bagian Admin',
				'nama'			=> $sesinya['nama'],
				'data_barang'		=> $data_barang,
				'petunjuk'		=> $this->Model->getPetunjuk(),
				'titlesistem'	=> $this->Model->getTitle(),
			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer');

		}

	}
	// fungsi Data Barang 
	function data_barang_view(){

		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data_barang = $this->Adminmodel->selectdata('data_barang order by id_barang ')->result_array();

			$data = array(
				'title'			=> ' Data Barang  ',
				'nama'			=> $sesinya['nama'],
				'data_barang'		=> $data_barang,
				'titlesistem'	=> $this->Model->getTitle(),
			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_barang');
			$this->load->view('admin/footer');

		}	

	}
	function data_barang_add(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data = array(
				'title'				=> 'Tambah Data Barang  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				'id_barang'			=> '',
				'status'			=> 'baru',
				'no_barang'			=> '',
				'kodebarang'		=> '',
				'namabarang'		=> '',
				'jenis'				=> '',
				

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_barang_form');
			$this->load->view('admin/footer');

		}	
		
	}
	function data_barang_excel(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data = array(
				'title'				=> 'Tambah Data Barang  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				
				

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_barang_excel');
			$this->load->view('admin/footer');

		}	
		
	}
	public function excelbarang(){
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
		$arr_file = explode('.', $_FILES['upload_file']['name']);
		$extension = end($arr_file);
		if('csv' == $extension){
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else {
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
		foreach($sheetData as $x => $excel){
			if($x == 0){
				continue;
			}
			$data = [
				'no_barang'              => $excel['0'],
				'kodebarang'     => $excel['1'],
				'namabarang'            => $excel['2'],
				'jenis'            => $excel['3'],
			];
			$this->Adminmodel->data_barang($data);
		}
		redirect('administrasi/data_barang_view/');
		}

	}

	
	function data_barang_save(){
		if($_POST){

			$status 			= $this->input->post('status');
			$id_barang = $this->input->post('id_barang');
			$no_barang = $this->input->post('no_barang');
			$kodebarang = $this->input->post('kodebarang');
			$namabarang = $this->input->post('namabarang');
			$jenis = $this->input->post('jenis');

			if($status == 'baru'){
				$data = array(
					
					'no_barang'	=> $no_barang,
					'kodebarang'	=> $kodebarang,
					'namabarang'=> $namabarang,
					'jenis'	=> $jenis,
					
				);
				$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda telah tesimpan.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
				$this->Adminmodel->insertdata('data_barang',$data);
				redirect('administrasi/data_barang_view');

			}
			else {
				$data = array(
					'no_barang'	=> $no_barang,
					'kodebarang'	=> $kodebarang,
					'namabarang'=> $namabarang,
					'jenis'	=> $jenis,
				);
				$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda telah diperbarui.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
				$this->Adminmodel->updatedata('data_barang',$data,array('id_barang' => $id_barang));
				redirect('administrasi/data_barang_view');
			}
		}
		else {
			$this->load->view('admin/error');
		}
	}


	function data_barang_edit($id = ''){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data_barang = $this->Adminmodel->selectdata('data_barang where id_barang = "'.$id.'"')->result_array();

			$data = array(
				'title'				=> ' Edit Data Barang  ',
				'titlesistem'	=> $this->Model->getTitle(),
				'nama'				=> $sesinya['nama'],
				'id_barang'				=> $data_barang[0]['id_barang'],
				'status'			=> 'edit',
				'no_barang'			=> $data_barang[0]['no_barang'],
				'kodebarang'			=>$data_barang[0]['kodebarang'],
				'namabarang'			=> $data_barang[0]['namabarang'],
				'jenis'			=> $data_barang[0]['jenis'],
				

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_barang_form');
			$this->load->view('admin/footer');
		}	
	}

	function data_barang_del($id = ''){
		$hasil	= $this->Adminmodel->deldata('data_barang',array('id_barang' => $id));
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_barang_view');
	}
	function data_barang_delall(){
		
		$hasil	= $this->Adminmodel->delalldata('data_barang');
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_barang_view');
    }
	
	// fungsi Data Penjualan
	function data_penjualan_view(){

		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			// $data_penjualan = $this->Adminmodel->selectdata('data_penjualan LEFT JOIN data_barang on data_penjualan.no_barang=data_barang.no_barang')->result_array();

			// $data = array(
			// 	'title'			=> ' Data Penjualan  ',
			// 	'nama'			=> $sesinya['nama'],
			// 	'data_penjualan'		=> $data_penjualan,
			// 	'titlesistem'	=> $this->Model->getTitle(),
			// );
			
			// $this->load->view('admin/header',$data);
			// $this->load->view('admin/data_penjualan');
			// $this->load->view('admin/footer');
			
			// $data_transaksi = $this->Adminmodel->selectdata('data_transaksi LEFT JOIN data_barang on data_transaksi.kode=data_barang.kodebarang')->result_array();
			$data_transaksi = $this->Adminmodel->selectdata('data_transaksi')->result_array();

			$data = array(
				'title'			=> ' Data Penjualan  ',
				'nama'			=> $sesinya['nama'],
				'data_transaksi'		=> $data_transaksi,
				'titlesistem'	=> $this->Model->getTitle(),
			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_penjualan');
			$this->load->view('admin/footer');

		}	

	}
	function data_penjualan_add(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {
			$pilih_barang = $this->Adminmodel->selectdata('data_barang order by no_barang')->result_array();
			$data = array(
				'title'				=> 'Tambah Data Penjualan  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				'id_penjualan'			=> '',
				'status'			=> 'baru',
				'kodeitem'			=> '',
				'namaitem'		=> '',
				'size'		=> '',
				'jenis'				=> '',
				'merk'				=> '',
				'jumlahbarang'				=> '',
				'satuan'				=> '',
				'totalpendapatan'				=> '',
				'no_barang'				=> $pilih_barang,

			

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_penjualan_form');
			$this->load->view('admin/footer');

		}	
		
	}
	function data_penjualan_excel(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data = array(
				'title'				=> 'Tambah Data Penjualan  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				
				

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_penjualan_excel');
			$this->load->view('admin/footer');

		}	
		
	}

	function excelPenjualan(){
       	// $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		// if(isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
		// $arr_file = explode('.', $_FILES['upload_file']['name']);
		// $extension = end($arr_file);
		// if('csv' == $extension){
		// $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		// } else {
		// $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		// }
		// $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
		// $sheetData = $spreadsheet->getActiveSheet()->toArray();
		// foreach($sheetData as $x => $excel){
		// 	if($x == 0){
		// 		continue;
		// 	}
		// 	$data = [
		// 		'kodeitem'=> $excel['0'],
		// 			'namaitem'=> $excel['1'],
		// 			'size'=> $excel['2'],
		// 			'jenis'=> $excel['3'],
		// 			'merk'=> $excel['4'],
		// 			'jumlahbarang'=> $excel['5'],
		// 			'satuan'=> $excel['6'],
		// 			'totalpendapatan'=> $excel['7'],
		// 			'no_barang'=> $excel['8'],
		// 	];
		// 	$this->Adminmodel->data_penjualan($data);
		// }
		// redirect('administrasi/data_penjualan_view/');
		// }
		$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
		$arr_file = explode('.', $_FILES['upload_file']['name']);
		$extension = end($arr_file);
		if('csv' == $extension){
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
		} else {
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
		$sheetData = $spreadsheet->getActiveSheet()->toArray();
		foreach($sheetData as $x => $excel){
			if($x == 0){
				continue;
			}
			$data = [
				'date'              => $excel['0'],
				'codebarang'     => $excel['1'],
				'namabarang'            => $excel['2'],
				
				'size'              => $excel['3'],
				
				'jumlahsize'            => $excel['4'],
				'satuan'            => $excel['5'],
				'totalpendapatan'            => $excel['6'],
				'kode'            => $excel['7'],
			];
			$this->Adminmodel->data_penjualan($data);
		}
		redirect('administrasi/data_penjualan_view/');
		}
    }
	
	function data_penjualan_save(){
		if($_POST){

			$status 	= $this->input->post('status');
			$id_penjualan = $this->input->post('id_penjualan');
			$kodeitem = $this->input->post('kodeitem');
			$namaitem = $this->input->post('namaitem');
			$size = $this->input->post('size');
			$jenis = $this->input->post('jenis');
			$merk = $this->input->post('merk');
			$jumlahbarang = $this->input->post('jumlahbarang');
			$satuan = $this->input->post('satuan');
			$totalpendapatan = $this->input->post('totalpendapatan');
			$no_barang = $this->input->post('no_barang');

			if($status == 'baru'){
				$data = array(
					
					'kodeitem'	=> $kodeitem,
					'namaitem'	=> $namaitem,
					'size'=> $size,
					'jenis'	=> $jenis,
					'merk'	=> $merk,
					'jumlahbarang'	=> $jumlahbarang,
					'satuan'=> $satuan,
					'totalpendapatan'	=> $totalpendapatan,
					'no_barang'	=> $no_barang,
					
				);
				$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda telah tesimpan.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
				$this->Adminmodel->insertdata('data_penjualan',$data);
				redirect('administrasi/data_penjualan_view');

			}
			else {
				$data = array(
					'kodeitem'	=> $kodeitem,
					'namaitem'	=> $namaitem,
					'size'=> $size,
					'jenis'	=> $jenis,
					'merk'	=> $merk,
					'jumlahbarang'	=> $jumlahbarang,
					'satuan'=> $satuan,
					'totalpendapatan'	=> $totalpendapatan,
					'no_barang'	=> $no_barang,
				);
				$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda telah diperbarui.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
				$this->Adminmodel->updatedata('data_penjualan',$data,array('id_penjualan' => $id_penjualan));
				redirect('administrasi/data_penjualan_view');
			}
		}
		else {
			$this->load->view('admin/error');
		}
	}


	function data_penjualan_edit($id = ''){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data_penjualan = $this->Adminmodel->selectdata('data_penjualan where id_penjualan = "'.$id.'"')->result_array();
			$pilih_barang = $this->Adminmodel->selectdata('data_barang order by no_barang')->result_array();
			$data = array(
				'title'				=> ' Edit Data Penjualan ',
				'titlesistem'	=> $this->Model->getTitle(),
				'nama'				=> $sesinya['nama'],
				'id_penjualan'				=> $data_penjualan[0]['id_penjualan'],
				'status'			=> 'edit',
				'kodeitem'	=> $data_penjualan[0]['kodeitem'],
				'namaitem'	=> $data_penjualan[0]['namaitem'],
				'size'=>$data_penjualan[0]['size'],
				'jenis'	=>$data_penjualan[0]['jenis'],
				'merk'	=> $data_penjualan[0]['merk'],
				'jumlahbarang'	=> $data_penjualan[0]['jumlahbarang'],
				'satuan'=>$data_penjualan[0]['satuan'],
				'totalpendapatan'	=> $data_penjualan[0]['totalpendapatan'],
				'no_barang'	=> $pilih_barang,
			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_penjualan_form');
			$this->load->view('admin/footer');
		}	
	}

	function data_penjualan_del($id = ''){
		$hasil	= $this->Adminmodel->deldata('data_penjualan',array('id_penjualan' => $id));
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_penjualan_view');
	}
	function data_penjualan_delall(){
		
		// $hasil	= $this->Adminmodel->delalldata('data_penjualan');
		$hasil	= $this->Adminmodel->delalldata('data_transaksi');
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_penjualan_view');
	}
	
	//data proses
	function data_proses_view(){

		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data_proses = $this->Adminmodel->selectdata('view_proses')->result_array();

			// $data_update = mysql_query("select data_proses.no_barang,data_proses.nama_barang, ROUND(AVG(recency.recency)) AS recency,ROUND(AVG(frequency.totalsize)) AS frequency,ROUND(AVG(monetary.klasifikasi)) AS monetary from data_proses INNER JOIN recency on data_recency.no_barang=data_proses.no_barang INNER JOIN frequency on data_frequency.no_barang=data_proses.no_barang INNER JOIN monetary on data_monetary.no_barang=data_proses.no_barang  GROUP by data_proses.no_barang");
			// $data_update = mysql_query("select data_proses.no_barang,data_proses.nama_barang, ROUND(SUM(recency.recency)) AS recency,ROUND(SUM(frequency.totalsize)) AS frequency,ROUND(SUM(monetary.klasifikasi)) AS monetary from data_proses INNER JOIN recency on data_recency.no_barang=data_proses.no_barang INNER JOIN frequency on data_frequency.no_barang=data_proses.no_barang INNER JOIN monetary on data_monetary.no_barang=data_proses.no_barang  GROUP by data_proses.no_barang");
		
			$data = array(
				'title'			=> ' Data Proses  ',
				'nama'			=> $sesinya['nama'],
				'data_proses'		=> $data_proses,
				'titlesistem'	=> $this->Model->getTitle(),
			);
			



			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_proses');
			$this->load->view('admin/footer');

		}	

	}

	function data_proses_add(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {
			$pilih_barang = $this->Adminmodel->selectdata('data_barang order by no_barang')->result_array();
			$data = array(
				'title'				=> ' Tambah Data Proses ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				'no_barang'		=> $pilih_barang,
				'status'			=> 'baru',
				'kodebarang'		=> '',
				'namabarang'		=> '',

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_proses_form');
			$this->load->view('admin/footer');

		}	
	}
	function data_proses_excel(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data = array(
				'title'				=> 'Tambah Data Proses  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				
				

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_proses_excel');
			$this->load->view('admin/footer');

		}	
		
	}
	// function importExcelproses(){
    //     $fileName = $_FILES['file']['name'];
          
    //     $config['upload_path'] = 'excel/'; //path upload
    //     $config['file_name'] = $fileName;  // nama file
    //     $config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
    //     $config['max_size'] = 10000; // maksimal sizze
 
    //     $this->load->library('upload'); //meload librari upload
    //     $this->upload->initialize($config);
          
    //     if(! $this->upload->do_upload('file') ){
            
    //         $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
    //         //redirect halaman
    //         redirect('administrasi/data_proses_excel/');

    //     }
              
    //     $inputFileName = 'excel/'.$fileName;
 
    //     try {
    //             $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    //             $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    //             $objPHPExcel = $objReader->load($inputFileName);
    //         } catch(Exception $e) {
    //             die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    //         }
 
    //         $sheet = $objPHPExcel->getSheet(0);
    //         $highestRow = $sheet->getHighestRow();
    //         $highestColumn = $sheet->getHighestColumn();
 
    //         for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
    //             $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
    //                                             NULL,
    //                                             TRUE,
    //                                             FALSE);   
 
    //              // Sesuaikan key array dengan nama kolom di database                                                         
    //              $data = array(
	// 				"no_barang"=> $rowData[0][0],
	// 				"kodebarang"=> $rowData[0][1],
	// 				"namabarang"=> $rowData[0][2],
	// 				"recency"=> $rowData[0][3],
	// 				"monetary"=> $rowData[0][4],
	// 				"frequency"=> $rowData[0][5],

    //             );
	
    //             $insert = $this->db->insert("data_proses",$data);
                      
    //         }
    //         redirect('administrasi/data_proses');
    // }

	// function data_proses_save(){
	// 	if($_POST){

	// 		$status 			= $this->input->post('status');
	// 		$id_proses 				= $this->input->post('id_proses');
	// 		$no_barang				= $this->input->post('no_barang');
	// 		$kodebarang				= $this->input->post('kodebarang');
	// 		$namabarang				= $this->input->post('namabarang');

	// 		if($status == 'baru'){
	// 			$data = array(
	// 				'no_barang'	=> $no_barang,
	// 				'kodebarang'	=> $kodebarang,
	// 				'namabarang'	=> $namabarang,
	// 			);
	// 			$sukses = '
	// 				<div class="alert alert-success">
	// 				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	// 				  <strong>Sukses!</strong> Data anda telah tesimpan.
	// 				</div>
	// 			';
	// 			$this->session->set_flashdata('sukses', $sukses);
	// 			$this->adminmodel->insertdata('data_proses',$data);
	// 			redirect('administrasi/data_proses');

	// 		}
	// 		else {
	// 			$data = array(
	// 				'no_barang'	=> $no_barang,
	// 				'kodebarang'	=> $kodebarang,
	// 				'namabarang'	=> $namabarang,
	// 			);
	// 			$sukses = '
	// 				<div class="alert alert-success">
	// 				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	// 				  <strong>Sukses!</strong> Data anda telah diperbarui.
	// 				</div>
	// 			';
	// 			$this->session->set_flashdata('sukses', $sukses);
	// 			$this->adminmodel->updatedata('data_proses',$data,array('id_proses' => $id_proses));
	// 			redirect('administrasi/data_proses');
	// 		}
	// 	}
	// 	else {
	// 		$this->load->view('admin/error');
	// 	}
	// }


	function data_proses_edit($id = ''){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data_proses = $this->Adminmodel->selectdata('data_proses where no_barang = "'.$id.'"')->result_array();

			$data = array(
				'title'				=> 'Edit Data Proses  ',
				'titlesistem'	=> $this->Model->getTitle(),
				'nama'				=> $sesinya['nama'],
				'no_barang'			=> $data_proses[0]['no_barang'],
				'status'			=> 'edit',
				'kodebarang'			=> $data_proses[0]['kodebarang'],
				'namabarang'			=> $data_proses[0]['namabarang'],

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_proses_form');
			$this->load->view('admin/footer');

		}	
	}

	function data_proses_del($id = ''){
		$hasil	= $this->Adminmodel->deldata('data_proses',array('id_proses' => $id));
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_proses');
	}
	function data_proses_delall(){
		
		$hasil	= $this->Adminmodel->delalldata('data_proses');
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_proses_view');
	}

	//data tahun
	// function data_tahun_view(){

	// 	$this->load->library('session');
	// 	$sesinya	= $this->session->userdata('login');
	// 	if($sesinya['level'] != '1'){
			
	// 			$this->load->view('admin/error');

	// 	}
	// 	else {

	// 		$data_tahun = $this->adminmodel->selectdata('data_tahun order by id_tahun desc')->result_array();

	// 		$data = array(
	// 			'title'			=> '.:: Data Tahun ::. ',
	// 			'nama'			=> $sesinya['nama'],
	// 			'data_tahun'		=> $data_tahun,
	// 			'titlesistem'	=> $this->model->getTitle(),
	// 		);
			
	// 		$this->load->view('admin/header',$data);
	// 		$this->load->view('admin/data_tahun');
	// 		$this->load->view('admin/footer');

	// 	}	

	// }

	// function data_tahun_add(){
	// 	$this->load->library('session');
	// 	$sesinya	= $this->session->userdata('login');
	// 	if($sesinya['level'] != '1'){
			
	// 			$this->load->view('admin/error');

	// 	}
	// 	else {

	// 		$data = array(
	// 			'title'				=> '.:: Tambah Data Tahun ::. ',
	// 			'nama'				=> $sesinya['nama'],
	// 			'titlesistem'		=> $this->model->getTitle(),
	// 			'no_tahun'		=> '',
	// 			'status'			=> 'baru',
	// 			'nama_tahun'		=> '',

	// 		);
			
	// 		$this->load->view('admin/header',$data);
	// 		$this->load->view('admin/data_tahun_form');
	// 		$this->load->view('admin/footer');

	// 	}	
	// }

	// function data_tahun_save(){
	// 	if($_POST){

	// 		$status 			= $this->input->post('status');
	// 		$no_tahun 				= $this->input->post('id_tahun');
	// 		$nama_tahun				= $this->input->post('tahun');

	// 		if($status == 'baru'){
	// 			$data = array(
	// 				'tahun'	=> $tahun,
	// 			);
	// 			$sukses = '
	// 				<div class="alert alert-success">
	// 				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	// 				  <strong>Sukses!</strong> Data anda telah tesimpan.
	// 				</div>
	// 			';
	// 			$this->session->set_flashdata('sukses', $sukses);
	// 			$this->adminmodel->insertdata('data_tahun',$data);
	// 			redirect('administrasi/data_tahun');

	// 		}
	// 		else {
	// 			$data = array(
	// 				'tahun'	=> $tahun,
	// 			);
	// 			$sukses = '
	// 				<div class="alert alert-success">
	// 				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	// 				  <strong>Sukses!</strong> Data anda telah diperbarui.
	// 				</div>
	// 			';
	// 			$this->session->set_flashdata('sukses', $sukses);
	// 			$this->adminmodel->updatedata('data_tahun',$data,array('no_tahun' => $no_tahun));
	// 			redirect('administrasi/data_tahun');
	// 		}
	// 	}
	// 	else {
	// 		$this->load->view('admin/error');
	// 	}
	// }


	// function data_tahun_edit($id = ''){
	// 	$this->load->library('session');
	// 	$sesinya	= $this->session->userdata('login');
	// 	if($sesinya['level'] != '1'){
			
	// 			$this->load->view('admin/error');

	// 	}
	// 	else {

	// 		$data_tahun = $this->adminmodel->selectdata('data_tahun where id_tahun = "'.$id.'"')->result_array();

	// 		$data = array(
	// 			'title'				=> '.:: Edit Data Tahun ::. ',
	// 			'titlesistem'	=> $this->model->getTitle(),
	// 			'nama'				=> $sesinya['nama'],
	// 			'no_tahun'				=> $data_tahun[0]['id_tahun'],
	// 			'status'			=> 'edit',
	// 			'nama_tahun'			=> $data_tahun[0]['tahun'],

	// 		);
		
	// 		$this->load->view('admin/header',$data);
	// 		$this->load->view('admin/data_tahun_form');
	// 		$this->load->view('admin/footer');

	// 	}	
	// }

	// function data_tahun_del($id = ''){
	// 	$hasil	= $this->adminmodel->deldata('data_tahun',array('id_tahun' => $id));
	// 	$sukses = '
	// 				<div class="alert alert-success">
	// 				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	// 				  <strong>Sukses!</strong> Data anda berhasil dihapus.
	// 				</div>
	// 			';
	// 			$this->session->set_flashdata('sukses', $sukses);
	// 	redirect('administrasi/data_tahun');
	// }
	//data frequency
	function data_frequency_view(){

		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data_frequency = $this->Adminmodel->selectdata('view_frequency')->result_array();
			// $data_frequency = $this->adminmodel->selectdata('data_frequency LEFT JOIN data_barang on data_frequency.no_barang=data_barang.no_barang')->result_array();

			$data = array(
				'title'			=> ' Data frequency  ',
				'nama'			=> $sesinya['nama'],
				'data_frequency'		=> $data_frequency,
				'titlesistem'	=> $this->Model->getTitle(),
			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_frequency');
			$this->load->view('admin/footer');

		}	

	}

	function data_frequency_add(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {
			$pilih_barang = $this->Adminmodel->selectdata('data_barang order by no_barang')->result_array();
			$data = array(
				'title'				=> 'Tambah Data frequency  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				'id_frequency'		=> '',
				'status'			=> 'baru',
				'no_barang'			=> $pilih_barang,
				'kodebarang'			=> '',
				's'		=> '',
				'm'		=> '',
				'l'				=> '',
				'xl'				=> '',
				'xxl'				=> '',
				'totalsize'				=> '',
				// 'id_penjualan'				=> $pilih_penjualan,

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_frequency_form');
			$this->load->view('admin/footer');

		}	
	}
	function data_frequency_excel(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data = array(
				'title'				=> 'Tambah Data Frequency  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				
				

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_frequency_excel');
			$this->load->view('admin/footer');

		}	
		
	}
	// function importExcelfrequency(){
    //     $fileName = $_FILES['file']['name'];
          
    //     $config['upload_path'] = 'excel/'; //path upload
    //     $config['file_name'] = $fileName;  // nama file
    //     $config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
    //     $config['max_size'] = 10000; // maksimal sizze
 
    //     $this->load->library('upload'); //meload librari upload
    //     $this->upload->initialize($config);
          
    //     if(! $this->upload->do_upload('file') ){
            
    //         $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
    //         //redirect halaman
    //         redirect('administrasi/data_frequency_excel/');

    //     }
              
    //     $inputFileName = 'excel/'.$fileName;
 
    //     try {
    //             $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    //             $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    //             $objPHPExcel = $objReader->load($inputFileName);
    //         } catch(Exception $e) {
    //             die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    //         }
 
    //         $sheet = $objPHPExcel->getSheet(0);
    //         $highestRow = $sheet->getHighestRow();
    //         $highestColumn = $sheet->getHighestColumn();
 
    //         for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
    //             $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
    //                                             NULL,
    //                                             TRUE,
    //                                             FALSE);   
 
    //              // Sesuaikan key array dengan nama kolom di database                                                         
    //              $data = array(
	// 				"no_barang"=> $rowData[0][0],
	// 				"kodebarang"=> $rowData[0][1],
	// 				"s"=> $rowData[0][2],
	// 				"m"=> $rowData[0][3],
	// 				"l"=> $rowData[0][4],
	// 				"xl"=> $rowData[0][5],
	// 				"xxl"=> $rowData[0][6],
	// 				"totalsize"=> $rowData[0][7],
			

    //             );
	
    //             $insert = $this->db->insert("data_frequency",$data);
                      
    //         }
    //         redirect('administrasi/data_frequency');
    // }

	function data_frequency_save(){
		if($_POST){

			$status 			= $this->input->post('status');
			$id_frequency 				= $this->input->post('id_frequency');
			$no_barang				= $this->input->post('no_barang');
			$kodebarang 				= $this->input->post('kodebarang');
			$s				= $this->input->post('s');
			$m 				= $this->input->post('m');
			$l				= $this->input->post('l');
			$xl 				= $this->input->post('xl');
			$xxl				= $this->input->post('xxl');
			$totalsize 				= $this->input->post('totalsize');
			

			if($status == 'baru'){
				$data = array(
					'no_barang'	=> $no_barang,
					'kodebarang'	=> $kodebarang,
					's'	=> $s,
					'm'	=> $m,
					'l'	=> $l,
					'xl'	=> $xl,
					'xxl'	=> $xxl,
					'totalsize'	=> $totalsize,
				);
				$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda telah tesimpan.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
				$this->Adminmodel->insertdata('data_frequency',$data);
				redirect('administrasi/data_frequency');

			}
			else {
				$data = array(
					'no_barang'	=> $no_barang,
					'kodebarang'	=> $kodebarang,
					's'	=> $s,
					'm'	=> $m,
					'l'	=> $l,
					'xl'	=> $xl,
					'xxl'	=> $xxl,
					'totalsize'	=> $totalsize,
				);
				$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda telah diperbarui.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
				$this->Adminmodel->updatedata('data_frequency',$data,array('id_frequency' => $id_frequency));
				redirect('administrasi/data_frequency');
			}
		}
		else {
			$this->load->view('admin/error');
		}
	}


	function data_frequency_edit($id = ''){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data_frequency = $this->Adminmodel->selectdata('data_frequency where id_frequency = "'.$id.'"')->result_array();
			$pilih_barang = $this->Adminmodel->selectdata('data_barang order by no_barang')->result_array();
			$data = array(
				'title'				=> ' Edit Data Frequency  ',
				'titlesistem'	=> $this->Model->getTitle(),
				'nama'				=> $sesinya['nama'],
				'id_frequency'				=> $data_frequency[0]['id_frequency'],
				'status'			=> 'edit',
				'no_barang'			=> $pilih_barang,
				'kodebarang'			=> $data_frequency[0]['kodebarang'],
				's'			=> $data_frequency[0]['s'],
				'm'			=> $data_frequency[0]['m'],
				'l'			=> $data_frequency[0]['l'],
				'xl'			=> $data_frequency[0]['xl'],
				'xxl'			=> $data_frequency[0]['xxl'],
				'totalsize'			=> $data_frequency[0]['totalsize'],
			);
		
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_frequency_form');
			$this->load->view('admin/footer');

		}	
	}

	function data_frequency_del($id = ''){
		$hasil	= $this->Adminmodel->deldata('data_frequency',array('id_frequency' => $id));
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_frequency');
	}
	function data_frequency_delall(){
		
		$hasil	= $this->Adminmodel->delalldata('data_frequency');
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_frequency_view');
	}

	//data monetary
	function data_monetary_view(){

		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			// $data_frequency = $this->adminmodel->selectdata('data_frequency order by id_frequency desc')->result_array();
			$data_monetary = $this->Adminmodel->selectdata('view_monetary ')->result_array();

			$data = array(
				'title'			=> ' Data Monetary',
				'nama'			=> $sesinya['nama'],
				'data_monetary'		=> $data_monetary,
				'titlesistem'	=> $this->Model->getTitle(),
			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_monetary');
			$this->load->view('admin/footer');

		}	

	}

	function data_monetary_add(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {
			$pilih_barang = $this->Adminmodel->selectdata('data_barang order by no_barang')->result_array();
			$data = array(
				'title'				=> ' Tambah Data Monetary  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				'id_monetary'		=> '',
				'status'			=> 'baru',
				'no_barang'			=> $pilih_barang,
				'kodebarang'			=> '',
				'monetary'		=> '',
				'klasifikasi'		=> '',
				
				// 'id_penjualan'				=> $pilih_penjualan,

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_monetary_form');
			$this->load->view('admin/footer');

		}	
	}
	function data_monetary_excel(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data = array(
				'title'				=> 'Tambah Data Monetary  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				
				

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_monetary_excel');
			$this->load->view('admin/footer');

		}	
		
	}
	// function importExcelmonetary(){
    //     $fileName = $_FILES['file']['name'];
          
    //     $config['upload_path'] = 'excel/'; //path upload
    //     $config['file_name'] = $fileName;  // nama file
    //     $config['allowed_types'] = 'xls|xlsx|csv'; //tipe file yang diperbolehkan
    //     $config['max_size'] = 10000; // maksimal sizze
 
    //     $this->load->library('upload'); //meload librari upload
    //     $this->upload->initialize($config);
          
    //     if(! $this->upload->do_upload('file') ){
            
    //         $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
    //         //redirect halaman
    //         redirect('administrasi/data_monetary_excel/');

    //     }
              
    //     $inputFileName = 'excel/'.$fileName;
 
    //     try {
    //             $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    //             $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    //             $objPHPExcel = $objReader->load($inputFileName);
    //         } catch(Exception $e) {
    //             die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    //         }
 
    //         $sheet = $objPHPExcel->getSheet(0);
    //         $highestRow = $sheet->getHighestRow();
    //         $highestColumn = $sheet->getHighestColumn();
 
    //         for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
    //             $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
    //                                             NULL,
    //                                             TRUE,
    //                                             FALSE);   
 
    //              // Sesuaikan key array dengan nama kolom di database                                                         
    //              $data = array(
	// 				"no_barang"=> $rowData[0][0],
	// 				"kodebarang"=> $rowData[0][1],
	// 				"monetary"=> $rowData[0][2],
	// 				"klasifikasi"=> $rowData[0][3],
	// 		    );
	
    //             $insert = $this->db->insert("data_monetary",$data);
                      
    //         }
    //         redirect('administrasi/data_monetary');
    // }

	function data_monetary_save(){
		if($_POST){

			$status 			= $this->input->post('status');
			$id_monetary 				= $this->input->post('id_monetary');
			$no_barang				= $this->input->post('no_barang');
			$kodebarang 				= $this->input->post('kodebarang');
			$monetary				= $this->input->post('monetary');
			$klasifikasi				= $this->input->post('klasifikasi');
			
			if($status == 'baru'){
				$data = array(
					'no_barang'	=> $no_barang,
					'kodebarang'	=> $kodebarang,
					'monetary'	=> $monetary,
					'klasifikasi'	=> $klasifikasi,
					
				);
				$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda telah tesimpan.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
				$this->Adminmodel->insertdata('data_monetary',$data);
				redirect('administrasi/data_monetary');

			}
			else {
				$data = array(
					'no_barang'	=> $no_barang,
					'kodebarang'	=> $kodebarang,
					'monetary'	=> $monetary,
					'klasifikasi'	=> $klasifikasi,
				);
				$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda telah diperbarui.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
				$this->Adminmodel->updatedata('data_monetary',$data,array('id_monetary' => $id_monetary));
				redirect('administrasi/data_monetary');
			}
		}
		else {
			$this->load->view('admin/error');
		}
	}


	function data_monetary_edit($id = ''){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data_monetary = $this->Adminmodel->selectdata('data_monetary where id_monetary = "'.$id.'"')->result_array();
			$pilih_barang = $this->Adminmodel->selectdata('data_barang order by no_barang')->result_array();
			$data = array(
				'title'				=> ' Edit Data Monetary  ',
				'titlesistem'	=> $this->Model->getTitle(),
				'nama'				=> $sesinya['nama'],
				'id_monetary'				=> $data_monetary[0]['id_monetary'],
				'status'			=> 'edit',
				'no_barang'			=> $pilih_barang,
				'kodebarang'			=> $data_monetary[0]['kodebarang'],
				'monetary'			=> $data_monetary[0]['monetary'],
				'klasifikasi'			=> $data_monetary[0]['klasifikasi'],
			
			);
		
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_monetary_form');
			$this->load->view('admin/footer');

		}	
	}

	function data_monetary_del($id = ''){
		$hasil	= $this->Adminmodel->deldata('data_monetary',array('id_monetary' => $id));
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_monetary');
	}
	function data_monetary_delall(){
		
		$hasil	= $this->Adminmodel->delalldata('data_monetary');
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_monetary_view');
	}

	//data recency
	function data_recency_view(){

		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			// $data_frequency = $this->adminmodel->selectdata('data_frequency order by id_frequency desc')->result_array();
			$data_recency = $this->Adminmodel->selectdata('view_recency')->result_array();

			$data = array(
				'title'			=> ' Data Recency  ',
				'nama'			=> $sesinya['nama'],
				'data_recency'		=> $data_recency,
				'titlesistem'	=> $this->Model->getTitle(),
			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_recency');
			$this->load->view('admin/footer');

		}	

	}

	function data_recency_add(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {
			$pilih_barang = $this->Adminmodel->selectdata('data_barang order by no_barang')->result_array();
			$data = array(
				'title'				=> ' Tambah Data Recency  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				'id_recency'		=> '',
				'status'			=> 'baru',
				'no_barang'			=> $pilih_barang,
				'kodebarang'			=> '',
				'transaksiterakhir'		=> '',
				'recency'		=> '',
				
				// 'id_penjualan'				=> $pilih_penjualan,

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_recency_form');
			$this->load->view('admin/footer');

		}	
	}
	function data_recency_excel(){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data = array(
				'title'				=> 'Tambah Data Recency  ',
				'nama'				=> $sesinya['nama'],
				'titlesistem'		=> $this->Model->getTitle(),
				
				

			);
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_recency_excel');
			$this->load->view('admin/footer');

		}	
		
	}
	function excelrecency(){
       	$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		if(isset($_FILES['upload_file']['name']) && in_array($_FILES['upload_file']['type'], $file_mimes)) {
			$arr_file = explode('.', $_FILES['upload_file']['name']);
			$extension = end($arr_file);
			if('csv' == $extension){
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else {
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}
			$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			foreach($sheetData as $x => $excel){
				if($x == 0){
					continue;
				}
				$data = [
					'no_barang'=> $excel['0'],
						'kodebarang'=> $excel['1'],
						'transaksiterakhir'=> $excel['2'],
						'recency'=> $excel['3'],
						
				];
				$this->Adminmodel->data_recency($data);
			}
			redirect('administrasi/data_recency_view/');
			}
    }

	function data_recency_save(){
		if($_POST){

			$status 			= $this->input->post('status');
			$id_recency				= $this->input->post('id_recency');
			$no_barang				= $this->input->post('no_barang');
			$kodebarang 				= $this->input->post('kodebarang');
			$transaksiterakhir				= $this->input->post('transaksiterakhir');
			$recency				= $this->input->post('recency');
			
			if($status == 'baru'){
				$data = array(
					'no_barang'	=> $no_barang,
					'kodebarang'	=> $kodebarang,
					'transaksiterakhir'	=> $transaksiterakhir,
					'recency'	=> $recency,
					
				);
				$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda telah tesimpan.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
				$this->Adminmodel->insertdata('data_recency',$data);
				redirect('administrasi/data_recency');

			}
			else {
				$data = array(
					'no_barang'	=> $no_barang,
					'kodebarang'	=> $kodebarang,
					'transaksiterakhir'	=> $transaksiterakhir,
					'recency'	=> $recency,
				);
				$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda telah diperbarui.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
				$this->Adminmodel->updatedata('data_recency',$data,array('id_recency' => $id_recency));
				redirect('administrasi/data_recency');
			}
		}
		else {
			$this->load->view('admin/error');
		}
	}


	function data_recency_edit($id = ''){
		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '1'){
			
				$this->load->view('admin/error');

		}
		else {

			$data_recency = $this->Adminmodel->selectdata('data_recency where id_recency = "'.$id.'"')->result_array();
			$pilih_barang = $this->Adminmodel->selectdata('data_barang order by no_barang')->result_array();
			$data = array(
				'title'				=> ' Edit Data Recency  ',
				'titlesistem'	=> $this->Model->getTitle(),
				'nama'				=> $sesinya['nama'],
				'id_recency'				=> $data_recency[0]['id_recency'],
				'status'			=> 'edit',
				'no_barang'			=> $pilih_barang,
				'kodebarang'			=> $data_recency[0]['kodebarang'],
				'transaksiterakhir'			=> $data_recency[0]['transaksiterakhir'],
				'recency'			=> $data_recency[0]['recency'],
			
			);
		
			$this->load->view('admin/header',$data);
			$this->load->view('admin/data_recency_form');
			$this->load->view('admin/footer');

		}	
	}

	function data_recency_del($id = ''){
		$hasil	= $this->Adminmodel->deldata('data_recency',array('id_recency' => $id));
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_recency');
	}
	function data_recency_delall(){
		
		$hasil	= $this->Adminmodel->delalldata('data_recency');
		$sukses = '
					<div class="alert alert-success">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <strong>Sukses!</strong> Data anda berhasil dihapus.
					</div>
				';
				$this->session->set_flashdata('sukses', $sukses);
		redirect('administrasi/data_recency_view');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('');
	}

}






