<?php 


class Xinterface extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('mobile_detect');
		$this->load->model("middleware", "md");
		$this->mod = new Mobile_detect();
	}

	public function index($page = 0){
		$data = array();

		$data["pop_artikel"] = $this->md->get_artikel_popular();
		$data["users"] = $this->md->uid_();
		$data["kategori"] = $this->md->kid_();
		$data["tag"] = $this->md->tid_();
		$data["web_profile"] = $this->md->setting_web();
		if(is_array($this->md->artikel_desc()->data)){	
			$tot = count($this->md->artikel_desc()->data);
		} else {
			$tot = 0;
		}
		$limit = 5;
		if($page != 0){
			$start = ($page>1) ? ($page * $limit) - $limit : 0;
		} else {
			$start = (1>1) ? (1 * $limit) - $limit : 0;
		}

		$jml_page = ceil($tot/$limit);
		$data["jml_page"] = $jml_page;
		$data["total_artikel"] = $tot;
		$data["current"] = $page;

		

		
		$data["artikel"] = $this->md->artikel_desc($start, $limit);
		
		

		$data["tag_group"] = $this->md->tags_group();
		$data["tags"] = $this->md->get_tag();
		




		if($this->mod->isMobile()){
			$this->load->view("templates/header-mobile", $data);
			$this->load->view("landing-mobile", $data);
			$this->load->view("templates/footer-mobile",$data);
		} else {
			$this->load->view("templates/header-web",$data);
			$this->load->view("landing-web", $data);
			$this->load->view("templates/footer-web", $data);
		}
		
	}


	public function artikel($id, $judul){
		$data = array();
		$data["artikel"] = $this->md->get_artikel($id, $judul);
		$data["users"] = $this->md->uid_();
		$data["kategori"] = $this->md->kid_();
		$data["tag"] = $this->md->tid_();
		$data["id_artikel"] = $id;

		$ip = $this->input->ip_address();

		if($ip == "::1"){
			$ip = "127.0.0.1";
		}

		$data["komentar"] = $this->md->get_komentar($id);

		$data["verifikasi"] = $this->md->verifycode($ip)->next;

		if($this->mod->isMobile()){
			$this->load->view("templates/header-mobile", $data);
			$this->load->view("artikel-mobile", $data);
			$this->load->view("templates/footer-mobile",$data);
		} else {
			$this->load->view("templates/header-web",$data);
			$this->load->view("artikel-web", $data);
			$this->load->view("templates/footer-web", $data);
		}
	}

	public function xlogin(){
		$this->load->view("templates/admin-header-web");
		$this->load->view("login-web");
		$this->load->view("templates/admin-footer-web");
	}

	public function xmobile(){
		$this->load->view("templates/header-mobile");
		$this->load->view("kategori-mobile");
		$this->load->view("templates/footer-mobile");
	}


	public function xadmin($console = false){
		if($this->session->has_userdata("role") && $this->session->userdata("role")){
			$this->load->view("templates/admin-header-web");
			$this->load->view("control-web");
			$this->load->view("templates/admin-footer-web");
		} else {
			show_error("Akses dibatasi gan!");
		}
	}

}

 ?>