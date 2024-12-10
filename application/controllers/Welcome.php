<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();

		$this->load->library('session');
	}

	public function index($item = null)
	{
/* 		$this->load->library("mycarbon");
		$carbon = $this->mycarbon;
		$carbon->setTimezone('Asia/Kuala_Lumpur');
		$date = $this->mycarbon->createFromFormat("d/m/Y","01/12/2024")->format("d/M/Y");
		print_r($date);
 */

		$this->load->model("tajuk");
		$this->load->model("jawatan");
		$this->load->model("gred");
		$data = [];

		if($item){
			$data["item"] = $this->tajuk->item($item)->row();
		} else {
			$data["item"] = $this->tajuk->first()->row();
		}

		$data["jawatan"] = $this->jawatan->list();
		$data["gred"] = $this->gred->listActive();

		$this->session->set_userdata(['code'=>$data["item"]->code]);
		$this->session->set_userdata(['tajuk_id'=>$data["item"]->id]);

		$this->load->view('welcome_message', $data);
	}

	public function store()
	{
		$this->load->library("mycarbon");
		$this->load->model("survey");
		$this->load->library("Mycarbon");

		$input = $this->input->post();

		$this->session->set_userdata(['link'=>random_string('md5', 8)]);

 		$fields = [
			"random"=>$this->session->link,
			"tajuk_id"=>$this->session->tajuk_id,
			"nama"=>$input['sek1']['nama'],
			"umur"=>$input['sek1']['umur'],
			"jawatan_id"=>$input['sek1']['jawatan'],
			"gred"=>$input['sek1']['gred'],
			"tp_all_tahun"=>$input['sek1']['tp_all_tahun'],
			"tp_all_bulan"=>$input['sek1']['tp_all_bulan'],
			"tp_pdtag_tahun"=>$input['sek1']['tp_pdtag_tahun'],
			"tp_pdtag_bulan"=>$input['sek1']['tp_pdtag_bulan'],
			"sej1_tempat_id"=>$input['sek2']['tempat1'],
			"sej1_tkh_mula"=>($input['sek2']['tempat1_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat1_tkh_mula'])->format("Y-m-d"):null,
			"sej1_tkh_tamat"=>($input['sek2']['tempat1_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat1_tkh_tamat'])->format("Y-m-d"):null,
			"sej1_tugas"=>$input['sek2']['tempat1_tugas'],
			"sej2_tempat_id"=>$input['sek2']['tempat2'],
			"sej2_tkh_mula"=>($input['sek2']['tempat2_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat2_tkh_mula'])->format("Y-m-d"):null,
			"sej2_tkh_tamat"=>($input['sek2']['tempat2_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat2_tkh_tamat'])->format("Y-m-d"):null,
			"sej2_tugas"=>$input['sek2']['tempat2_tugas'],
			"sej3_tempat_id"=>$input['sek2']['tempat3'],
			"sej3_tkh_mula"=>($input['sek2']['tempat3_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat3_tkh_mula'])->format("Y-m-d"):null,
			"sej3_tkh_tamat"=>($input['sek2']['tempat3_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat3_tkh_tamat'])->format("Y-m-d"):null,
			"sej3_tugas"=>$input['sek2']['tempat3_tugas'],
			"sej4_tempat_id"=>$input['sek2']['tempat4'],
			"sej4_tkh_mula"=>($input['sek2']['tempat4_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat4_tkh_mula'])->format("Y-m-d"):null,
			"sej4_tkh_tamat"=>($input['sek2']['tempat4_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat4_tkh_tamat'])->format("d/m/Y"):null,
			"sej4_tugas"=>$input['sek2']['tempat4_tugas'],
			"sej5_tempat_id"=>$input['sek2']['tempat5'],
			"sej5_tkh_mula"=>($input['sek2']['tempat5_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat5_tkh_mula'])->format("Y-m-d"):null,
			"sej5_tkh_tamat"=>($input['sek2']['tempat5_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat5_tkh_tamat'])->format("Y-m-d"):null,
			"sej5_tugas"=>$input['sek2']['tempat5_tugas'],
			"sej6_tempat_id"=>$input['sek2']['tempat6'],
			"sej6_tkh_mula"=>($input['sek2']['tempat6_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat6_tkh_mula'])->format("Y-m-d"):null,
			"sej6_tkh_tamat"=>($input['sek2']['tempat6_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat6_tkh_tamat'])->format("Y-m-d"):null,
			"sej6_tugas"=>$input['sek2']['tempat6_tugas'],
			"sej7_tempat_id"=>$input['sek2']['tempat7'],
			"sej7_tkh_mula"=>($input['sek2']['tempat7_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat7_tkh_mula'])->format("Y-m-d"):null,
			"sej7_tkh_tamat"=>($input['sek2']['tempat7_tkh_mula'])?$this->mycarbon->createFromFormat("d/m/Y",$input['sek2']['tempat7_tkh_tamat'])->format("Y-m-d"):null,
			"sej7_tugas"=>$input['sek2']['tempat7_tugas'],
			"pilih1_tempat"=>$input['sek3']['tempat1'],
			"pilih1_justifikasi"=>$input['sek3']['tempat1_justifikasi'],
			"pilih2_tempat"=>$input['sek3']['tempat2'],
			"pilih2_justifikasi"=>$input['sek3']['tempat2_justifikasi'],
			"pilih3_tempat"=>$input['sek3']['tempat3'],
			"pilih3_justifikasi"=>$input['sek3']['tempat3_justifikasi'],
		];
		$this->survey->add($fields);

	}

	public function terima()
	{
		$this->load->model("tajuk");

		$data["item"] = $this->tajuk->item($this->session->code)->row();
		$data["link"] = $this->session->link;

		if(isset($this->session->link)) {
			$this->load->view('terima_kasih', $data);
			$this->session->sess_destroy();
			return;
		}

		redirect("/");

	}

	public function qrgen($code)
	{
		$this->load->library('ciqrcode');

		header("Content-Type: image/png");
		$params['data'] = site_url('survey/info/'.$code);
		$params['size'] = 512;
		$this->ciqrcode->generate($params);
	}

	public function info($code)
	{
		$this->load->model("survey");
		$data["info"] = $this->survey->info($code);

		print_r($data);

	}
}
