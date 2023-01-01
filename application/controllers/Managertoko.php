<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Managertoko extends CI_Controller {

	function __construct() {
		parent::__construct();

		if($this->session->userdata('login') != TRUE)
		{
			$this->load->view('manager/error');
		}

		$this->load->model('Managermodel');
		$this->load->model('Model');
		$this->load->library('Pdf');
		// $this->load->library('pdf1');
	}

	function index(){

		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
			$this->load->view('manager/error');

		}
		else {
			$data_proses = $this->Managermodel->selectdata('view_proses')->result_array();
			$data = array(
				'title'			=> ' Selamat Datang Manager ',
				'nama'			=> $sesinya['nama'],
				'data_proses'=> $data_proses,
				'datamanager'		=> $this->Model->getdatamanager(),
				'petunjuk'		=> $this->Model->getPetunjuk(),
				'titlesistem'	=> $this->Model->getTitle(),
			);
			
			$this->load->view('manager/header',$data);
			$this->load->view('manager/dashboard');
			$this->load->view('manager/footer');

		}
	}


	// function generate_awal(){

	// 	$sesinya	= $this->session->userdata('login');
	// 	if($sesinya['level'] != '2'){
			
	// 		$this->load->view('manager/error');

	// 	}
	// 	else {
		
	// 		$this->load->model('model');
			

	// 		$data_proses = $this->managermodel->selectdata('view_proses');
			

	// 		$data = array(
	// 			'title'			=> ' Selamat Datang Manager ',
	// 			'nama'			=> $sesinya['nama'],
	// 			'data_puskesmas'=> $data_proses,
	// 			'titlesistem'	=> $this->model->getTitle(),
	// 		);

	// 		$this->load->view('manager/header',$data);
	// 		$this->load->view('manager/generate_awal');
	// 		$this->load->view('manager/footer');

	// 	}
	// }


	// function generate_rata(){

	// 	$sesinya	= $this->session->userdata('login');
	// 	if($sesinya['level'] != '2'){
			
	// 		$this->load->view('manager/error');

	// 	}
	// 	else {
		
	// 	$data_proses = $this->db->get('view_proses');
	// 	$v = "";
	// 	if(count($data_proses->result())<0)
	// 	{
	// 		$nilai = floor(($s->recency+$s->klasifikasi+$s->frequency)/3);
	// 		$v = "insert into rata_rata (no_barang,rata_rata) values ('".$s->no_barang."','".$nilai."')";
	// 		$this->db->query($v);
	// 	}
	// 	else
	// 	{
	// 		$this->db->query('truncate table rata_rata');
	// 		foreach($data_proses->result() as $s)
	// 		{
	// 			$nilai = floor(($s->recency+$s->klasifikasi+$s->frequency)/3);
	// 			$v = "insert into rata_rata (no_barang,rata_rata) values ('".$s->no_barang."','".$nilai."')";
	// 			$this->db->query($v);
	// 		}
	// 	}
		
	// 		$data = array(
	// 			'title'			=> ' Selamat Datang Manager ',
	// 			'nama'			=> $sesinya['nama'],
	// 			'titlesistem'	=> $this->model->getTitle(),
	// 		);


	// 	$data['data_proses'] = $this->db->query('select * from view_proses left join rata_rata on view_proses.no_barang=rata_rata.no_barang');

	// 	$this->load->view('manager/header',$data);
	// 	$this->load->view('manager/generate_rata');
	// 	$this->load->view('manager/footer');
	// 	}
	// }


	// function generate_centroid(){

	// 	$sesinya	= $this->session->userdata('login');
	// 	if($sesinya['level'] != '2'){
			
	// 		$this->load->view('manager/error');

	// 	}
	// 	else {

	// 		$data = array(
	// 			'title'			=> ' Selamat Datang Manager  ',
	// 			'nama'			=> $sesinya['nama'],
	// 			'titlesistem'	=> $this->model->getTitle(),
	// 	);
		
	// 	$kluster = 3;

		
	// 	$data['c1'] = 1190;
	// 	$data['c2'] = 451;
	// 	$data['c3'] = 318;
		
	
	// 	$data_proses = $this->db->query('select * from view_proses left join rata_rata on view_proses.no_barang=rata_rata.no_barang');
	// 	$st = "";
		
	// 	$this->db->query('truncate table hasil');
	// 	foreach($data_proses->result() as $s)
	// 	{
	// 		$y1 = abs($s->rata_rata-$data['c1']); 
	// 		$y2 = abs($s->rata_rata-$data['c2']); 
	// 		$y3 = abs($s->rata_rata-$data['c3']);
			
			
	// 		$array_sort_awal = array($y1,$y2,$y3);
	// 		$array_sort = $array_sort_awal;
	// 		for ($j=1;$j<=$kluster-1;$j++){//1 4 --> 2
	// 			for ($k=0;$k<=$kluster-2;$k++) {//0 2 --> 1
	// 				if ($array_sort[$k] > $array_sort[$k + 1]){ // $array_sort[0] > $array_sort[1] --> 6 > 3
	// 					$temp = $array_sort[$k]; // 3
	// 					$array_sort[$k] = $array_sort[$k + 1]; // 4
	// 					$array_sort[$k + 1] = $temp; //$array_sort[1] = 4
	// 				}
	// 			}
	// 		}
			
	// 		for ($i = 0; $i < $kluster; $i++){
	// 			for($r = 0; $r < $kluster; $r++)
	// 			{
	// 				if($array_sort[0]==$array_sort_awal[$r])
	// 				{
	// 					if($r==0) $st =  "Tertinggi (C1)";
	// 					else if($r==1) $st =  "Sedang (C2)";
	// 					else if($r==2) $st =  "Rendah (C3)";
						
	// 				}
	// 			}
	// 		}
	// 		$this->db->query("insert into hasil (no_barang,predikat,y1,y2,y3) values('".$s->no_barang."','".$st."','".$y1."','".$y2."','".$y3."')");
	// 	}

		

	// 	$data['data_proses'] = $this->db->query("select * from data_proses left join (rata_rata,hasil) on data_proses.no_barang=rata_rata.no_barang and data_proses.no_barang=hasil.no_barang");

	// 	$this->load->view('manager/header',$data);
	// 	$this->load->view('manager/generate_centroid');
	// 	$this->load->view('manager/footer');
	// 	}
	// }
	function tampilan_iterasi(){
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
			$this->load->view('manager/error');

		}
		else {

			$data_proses = $this->Managermodel->selectdata('view_proses');
			

			$data = array(
				'title'			=> ' Selamat Datang Manager ',
				'nama'			=> $sesinya['nama'],
				'data_proses'=> $data_proses,
				'titlesistem'	=> $this->Model->getTitle(),
			);

			$this->load->view('manager/header',$data);
			$this->load->view('manager/tampilan_iterasi');
			$this->load->view('manager/footer');
		}
	}
	function iterasi_kmeans(){
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
			$this->load->view('manager/error');

		}
		else {

			$data_proses = $this->Managermodel->selectdata('view_proses');
			

			$data = array(
				'title'			=> ' Selamat Datang Manager ',
				'nama'			=> $sesinya['nama'],
				'data_proses'=> $data_proses,
				'titlesistem'	=> $this->Model->getTitle(),
			);

			$this->load->view('manager/header',$data);
			$this->load->view('manager/iterasi_kmeans');
			$this->load->view('manager/footer');
		}
	}



	function iterasi_kmeans_lanjut(){
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
			$this->load->view('manager/error');

		}
		else {
		$data = array(
			'title'			=> ' Selamat Datang Manager ',
			'nama'			=> $sesinya['nama'],
			'titlesistem'	=> $this->Model->getTitle(),
		);
			
		$data['data_proses'] = $this->db->get('view_proses');
		$id = "";
		$id = $this->db->query('select max(no) as m from hasil_centroid');
		foreach($id->result() as $i)
		{
			$id = $i->m;
		}
		$this->db->where('no', $id);
		$data['centroid'] = $this->db->get('hasil_centroid');
		$data['id_temp'] = $id+1;
		
		$it = "";
		$it = $this->db->query('select max(iterasi) as it from centroid_temp');
		foreach($it->result() as $i)
		{
			$it = $i->it;
		}
		
		$it_temp = $it-1;
		// $it_temp = $it;
		$this->db->where('iterasi', $it_temp);
		$it_sebelum = $this->db->get('centroid_temp');
		$c1_sebelum = array();
		$c2_sebelum = array();
		$c3_sebelum = array();
		$no=0;
		foreach($it_sebelum->result() as $it_prev)
		{
			$c1_sebelum[$no] = $it_prev->c1;
			$c2_sebelum[$no] = $it_prev->c2;
			$c3_sebelum[$no] = $it_prev->c3;
			$no++;
		}
		
		$this->db->where('iterasi', $it);
		$it_sesesudah = $this->db->get('centroid_temp');
		$c1_sesesudah = array();
		$c2_sesesudah = array();
		$c3_sesesudah = array();
		$no=0;
		foreach($it_sesesudah->result() as $it_next)
		{
			$c1_sesesudah[$no] = $it_next->c1;
			$c2_sesesudah[$no] = $it_next->c2;
			$c3_sesesudah[$no] = $it_next->c3;
			$no++;
		}
		
		if($c1_sebelum==$c1_sesesudah && $c2_sebelum==$c2_sesesudah && $c3_sebelum==$c3_sesesudah)
		{
			?>
				<script>
					alert("Proses iterasi berakhir pada tahap ke-<?php echo $it; ?>");
				</script>
			<?php
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."managertoko/iterasi_kmeans_hasil'>";
		}
		else
		{
			$this->load->view('manager/header',$data);
			$this->load->view('manager/iterasi_kmeans_lanjut');
			$this->load->view('manager/footer');
		}
		}
	}	

	

	function iterasi_kmeans_hasil(){
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
			$this->load->view('manager/error');

		}
		else {

			$data_hasil = $this->Managermodel->selectdata('hasilkmeans INNER JOIN view_proses on hasilkmeans.namabarang = view_proses.namabarang INNER JOIN hasil on hasilkmeans.no_barang = hasil.no_barang ');
			$centroid_temp = $this->Managermodel->selectdata('centroid_temp ');
			$data = array(
				'title'			=> ' Selamat Datang Manager',
				'nama'			=> $sesinya['nama'],
				'titlesistem'	=> $this->Model->getTitle(),
				'data_hasil'	=> $data_hasil,
				'centroid_temp'	=> $centroid_temp,
			);

			$data['q'] = $this->db->query('select * from centroid_temp group by iterasi');
			$data['z'] = $this->db->query('select * from hasilkmeans ');
			

			$this->load->view('manager/header',$data);
			$this->load->view('manager/iterasi_kmeans_hasil');
			$this->load->view('manager/footer');
		}
	}
	// function k_meanskeputusan(){
	// 	$sesinya	= $this->session->userdata('hasil');
	// 	if($sesinya['predikat'] == 'tertinggi'){
			
	// 		$this->load->view('manager/error');
	// 		
	// 			echo "<meta http-equiv='refresh' content='0; url=".base_url()."managertoko/iterasi_kmeans_hasil'>";
	// 	}
	// 	elseif ($sesinya['predikat'] == 'sedang'){

	// 	}
	// 	else {
	
	// 		$this->load->view('manager/header',$data);
	// 		$this->load->view('manager/iterasi_kmeans_hasil');
	// 		$this->load->view('manager/footer');
	// 	}
	// }
	


	function cetak_barang(){

		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
				$this->load->view('manager/error');

		}
		else {

			$data_barang = $this->Managermodel->selectdata('data_barang order by id_barang')->result_array();

			$data = array(
				'title'			=> ' Cetak Data Barang  ',
				'nama'			=> $sesinya['nama'],
				'data_barang'		=> $data_barang,
				'titlesistem'	=> $this->Model->getTitle(),
			);
			
			$this->load->view('manager/header',$data);
			$this->load->view('manager/cetak_barang');
			$this->load->view('manager/footer');

		}	

	}
	function cetak_penjualan(){

		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
				$this->load->view('manager/error');

		}
		else {

			$data_penjualan= $this->Managermodel->selectdata('data_penjualan order by id_penjualan')->result_array();

			$data = array(
				'title'			=> ' Cetak Data Penjualan  ',
				'nama'			=> $sesinya['nama'],
				'data_penjualan'=> $data_penjualan,
				'titlesistem'	=> $this->Model->getTitle(),
			);
			
			$this->load->view('manager/header',$data);
			$this->load->view('manager/cetak_penjualan');
			$this->load->view('manager/footer');

		}	

	}

	function cetak_kmeans(){

		$this->load->library('session');
		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
				$this->load->view('manager/error');

		}
		else {

		// $data_kmeans = $this->managermodel->selectdata('data_penjualan order by id_penjualan')->result_array();
			$data_kmeans = $this->Managermodel->selectdata('hasil LEFT JOIN data_barang on hasil.no_barang=data_barang.no_barang')->result_array();
			$data = array(
				'title'			=> ' Cetak Data Kmeans  ',
				'nama'			=> $sesinya['nama'],
				'data_kmeans'		=> $data_kmeans,
				'titlesistem'	=> $this->Model->getTitle(),
			);
			
			$this->load->view('manager/header',$data);
			$this->load->view('manager/cetak_kmeans');
			$this->load->view('manager/footer');

		}	

	}

	public function grafik(){

		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
			$this->load->view('manager/error');

		}
		else {

			
			// $data1 = $this->managermodel->get_grafik();
			$data = array(
				'title'			=> 'Selamat Datang Manager ',
				'nama'			=> $sesinya['nama'],
				'petunjuk'		=> $this->Model->getPetunjuk(),
				'titlesistem'	=> $this->Model->getTitle(),
				'graph'			=> $this->Managermodel->graph(),
				
			);

		
			$this->load->view('manager/header',$data);
			$this->load->view('manager/grafik');
			$this->load->view('manager/footer');

		}        
	}
	public function grafikbatang(){

		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
			$this->load->view('manager/error');

		}
		else {
		

			$data_grafik = $this->Managermodel->selectdata('hasilkmeans');
	
			// $data1 = $this->managermodel->get_grafik();
			$data = array(
				'title'			=> 'Grafik Batang ',
				'nama'			=> $sesinya['nama'],
				'petunjuk'		=> $this->Model->getPetunjuk(),
				'titlesistem'	=> $this->Model->getTitle(),
				'data_grafik' => $data_grafik
				
			);
			$data1 = $this->Managermodel->get_databatang()->result();
			$x['data1'] = json_encode($data1);
			

		
			$this->load->view('manager/header',$data,$x);
			$this->load->view('manager/grafikbatang',$x);
			$this->load->view('manager/footer');

		}        
	}


	public function grafiksebar(){

		$sesinya	= $this->session->userdata('login');
		if($sesinya['level'] != '2'){
			
			$this->load->view('manager/error');

		}
		else {

			
			// $data1 = $this->managermodel->get_grafik();
			$data = array(
				'title'			=> 'Selamat Datang Manager ',
				'nama'			=> $sesinya['nama'],
				'petunjuk'		=> $this->Model->getPetunjuk(),
				'titlesistem'	=> $this->Model->getTitle(),
				
				
			);

		
			$this->load->view('manager/header',$data);
			$this->load->view('manager/grafiksebar');
			$this->load->view('manager/footer');

		}        
	}
	
	
	function tampilgrafik()
    {
			
		$data_proses = $this->Managermodel->selectdata('rata_rata inner join data_barang on rata_rata.no_barang = data_barang.no_barang')->result_array();

        $this->load->library('jpgraph');
	   
		

       $bar_graph = $this->jpgraph->scatterchart();
	//    $datax = array(3.5,3.7,3,4,6.2,6,3.5,8,14,8,11.1,13.7);
	//    $datay = array(20,22,12,13,17,20,16,19,30,31,40,43);
		
		$datax = array(3.5,3.7,3,4,6.2,6,3.5,8,14,8,11.1,13.7);

		   $datay = array(20,22,12,13,17,20,16,19,30,31,40,43);
		   $dataz = array(10,22,12,23,27,20,36,39,40,41,50,53);

	   $graph = new Graph(900,800);
		$graph->SetScale("linlin");
		
		$graph->img->SetMargin(40,40,40,40);        
		$graph->SetShadow();
		
		$graph->title->Set("Diagram Scatter For Kmeans");
		$graph->title->SetFont(FF_FONT1,FS_BOLD);
		
		$sp1 = new ScatterPlot($datay,$datax,$dataz);
		$sp1->mark->SetType(MARK_FILLEDCIRCLE);
		$sp1->mark->SetFillColor("red");
		$sp1->mark->SetWidth(8);
		// $sp2 = new ScatterPlot($datax);
		// $sp2->mark->SetType(MARK_FILLEDCIRCLE);
		// $sp2->mark->SetFillColor("blue");
		// $sp2->mark->SetWidth(8);
		
		
		$graph->Add($sp1);
		$graph->Stroke();
		
		
	
	}
	public function barangpdf()
	{
	
		$data_barang = $this->Managermodel->selectdata('data_barang');
		$data = array(
	
			'data_barang'	=> $data_barang,
			
		);	
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Laporan-Data-Barang.pdf";
		$this->pdf->load_view('manager/barangpdf', $data);
	}
	public function penjualanpdf()
	{
	
		$data_penjualan = $this->Managermodel->selectdata('data_penjualan');
		$data = array(
	
			'data_penjualan'	=> $data_penjualan,
			
		);	
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Laporan-Data-penjualan.pdf";
		$this->pdf->load_view('manager/penjualanpdf', $data);
	}
	public function kmeanspdf()
	{
	
		$data_hasil = $this->Managermodel->selectdata('hasilkmeans INNER JOIN view_proses on hasilkmeans.namabarang = view_proses.namabarang INNER JOIN hasil on hasilkmeans.no_barang = hasil.no_barang');
		$data = array(
	
			'data_hasil'	=> $data_hasil,
			
		);	
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Laporan-Data-Kmeans.pdf";
		$this->pdf->load_view('manager/kmeanspdf', $data);
	}


	function logout(){
		$this->session->sess_destroy();
		redirect('');
	}


}