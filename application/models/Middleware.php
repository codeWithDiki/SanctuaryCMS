<?php 

/**
 * 
 */
class Middleware extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("database", "dba");
		//$this->load->library("session");
	}

	public function login($username, $password){
		$output = (object)array();
		$data = $this->dba->get_data("users", array(
			"username" => $username
		))->data;

		if(count($data) > 0){
			if(password_verify($password, $data[0]["password"])){
				$this->session->set_userdata(array(
						"username" => $username,
						"role" => $data[0]["role"]
					)
				);
				$output->status = true;
				$output->message = "Login berhasil!";
			} else {
				$output->status = false;
				$output->message = "Password salah!";
			}
		} else {
			$output->status = false;
			$output->message = "User tidak terdaftar!";
		}

		return $output;
	}

	public function tambah_moderator($data){
		$output = (object)array();

		$data["role"] = "moderator";

		$input = $this->dba->insert("users", $data);

		if($input->err["code"] == 0){
			$output->status = true;
			$output->message = "Menambahkan moderator sukses!";
		} else {
			$output->status = false;
			$output->message = $input->err["message"]; 
		}

		return $output;
	}


	public function tambah_kategori($data){
		$output = (object)array();

		$input = $this->dba->insert("kategori", $data);

		if($input->err["code"] == 0){
			$output->status = true;
			$output->message = "Menambahkan kategori sukses!";
		} else {
			$output->status = false;
			$output->message = $input->err["message"]; 
		}

		return $output;
	}

	public function tambah_tag($data){
		$output = (object)array();

		$input = $this->dba->insert("tags", $data);

		if($input->err["code"] == 0){
			$output->status = true;
			$output->message = "Menambahkan tag sukses!";
		} else {
			$output->status = false;
			$output->message = $input->err["message"]; 
		}

		return $output;
	}

	public function get_subscriber($id =false){
		$output = (object)array();
		$data = false;
		if($id == false){
			$data = $this->dba->get_data("langganan")->data;
		} else {
			$data = $this->dba->get_data("langganan", array("id" => $id))->data;
		}

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Data tidak ditemukan!";
			$output->data = null;
		} else {
			$output->status = true;
			$output->message = "Data ditemukan!";
			$output->data = $data;
		}

		return $output;

	}


	public function hapus_subscriber($id =false){
		$output = (object)array();
		$data = false;
		if($id == false){
			$data = $this->dba->get_data("langganan")->data;
		} else {
			$data = $this->dba->get_data("langganan", array("id" => $id))->data;
		}

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Data tidak ditemukan!";
		} else {
			$perintah = $this->dba->delete(array("id" => $id),"langganan");
			if($perintah->err["code"] == 0){
				$output->status = true;
				$output->message = "Data berhasil dihapus!";
			} else {
				$output->status = false;
				$output->message = $perintah->err["message"];
			}
		}

		return $output;

	}


	public function get_kategori($id =false){
		$output = (object)array();
		$data = false;
		if($id == false){
			$data = $this->dba->get_data("kategori")->data;
		} else {
			$data = $this->dba->get_data("kategori", array("id" => $id))->data;
		}

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Data tidak ditemukan!";
			$output->data = null;
		} else {

			for ($i=0; $i < count($data); $i++) { 
				$data[$i]["nama_kategori"] = preg_replace("/(-)/", " ", $data[$i]["nama_kategori"]);
			}

			$output->status = true;
			$output->message = "Data ditemukan!";
			$output->data = $data;
		}

		return $output;

	}

	public function hapus_kategori($id =false){
		$output = (object)array();
		$data = false;
		if($id == false){
			$data = $this->dba->get_data("kategori")->data;
		} else {
			$data = $this->dba->get_data("kategori", array("id" => $id))->data;
		}

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Data tidak ditemukan!";
		} else {
			$perintah = $this->dba->delete(array("id" => $id),"kategori");
			if($perintah->err["code"] == 0){
				$output->status = true;
				$output->message = "Data berhasil dihapus!";
			} else {
				$output->status = false;
				$output->message = $perintah->err["message"];
			}
		}

		return $output;

	}

	public function edit_kategori($id,$data){
		$output = (object)array();

		$input = $this->dba->edit(array("id" => $id),"kategori", $data);

		if($input->err["code"] == 0){
			$output->status = true;
			$output->message = "Mengedit kategori sukses!";
		} else {
			$output->status = false;
			$output->message = $input->err["message"]; 
		}

		return $output;
	}


	public function get_moderator($id =false){
		$output = (object)array();
		$data = false;
		if($id == false){
			$data = $this->dba->get_data("users", array("role" => "moderator"))->data;
		} else {
			$data = $this->dba->get_data("users", array("id" => $id, "role" => "moderator"))->data;
		}

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Data tidak ditemukan!";
			$output->data = null;
		} else {

			$output->status = true;
			$output->message = "Data ditemukan!";
			$output->data = $data;
		}

		return $output;

	}

	public function hapus_moderator($id =false){
		$output = (object)array();
		$data = false;
		if($id == false){
			$data = $this->dba->get_data("users")->data;
		} else {
			$data = $this->dba->get_data("users", array("id" => $id))->data;
		}

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Data tidak ditemukan!";
		} else {
			$perintah = $this->dba->delete(array("id" => $id),"users");
			if($perintah->err["code"] == 0){
				$output->status = true;
				$output->message = "Data berhasil dihapus!";
			} else {
				$output->status = false;
				$output->message = $perintah->err["message"];
			}
		}

		return $output;

	}

	public function edit_moderator($id,$data){
		$output = (object)array();

		$input = $this->dba->edit(array("id" => $id),"users", $data);

		if($input->err["code"] == 0){
			$output->status = true;
			$output->message = "Mengedit moderator sukses!";
		} else {
			$output->status = false;
			$output->message = $input->err["message"]; 
		}

		return $output;
	}


	public function get_tag($id =false){
		$output = (object)array();
		$data = false;
		if($id == false){
			$data = $this->dba->get_data("tags")->data;
		} else {
			$data = $this->dba->get_data("tags", array("id" => $id))->data;
		}

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Data tidak ditemukan!";
			$output->data = null;
		} else {

			for ($i=0; $i < count($data); $i++) { 
				$data[$i]["nama"] = preg_replace("/(-)/", " ", $data[$i]["nama"]);
			}

			$output->status = true;
			$output->message = "Data ditemukan!";
			$output->data = $data;
		}

		return $output;

	}

	public function hapus_tag($id =false){
		$output = (object)array();
		$data = false;
		if($id == false){
			$data = $this->dba->get_data("tags")->data;
		} else {
			$data = $this->dba->get_data("tags", array("id" => $id))->data;
		}

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Data tidak ditemukan!";
		} else {
			$perintah = $this->dba->delete(array("id" => $id),"tags");
			if($perintah->err["code"] == 0){
				$output->status = true;
				$output->message = "Data berhasil dihapus!";
			} else {
				$output->status = false;
				$output->message = $perintah->err["message"];
			}
		}

		return $output;

	}

	public function edit_tag($id,$data){
		$output = (object)array();

		$input = $this->dba->edit(array("id" => $id),"tags", $data);

		if($input->err["code"] == 0){
			$output->status = true;
			$output->message = "Mengedit tag sukses!";
		} else {
			$output->status = false;
			$output->message = $input->err["message"]; 
		}

		return $output;
	}


	public function get_id_user($username){
		$data = $this->dba->get_data("users", array("username" => $username))->data;

		if(count($data) < 1){
			show_error("USER TIDAK TERDETEKSI!");
		} else {
			return $data[0]["id"];
		}
	}

	public function post_artikel($data){
		$output = (object)array();

		$data["tgl_kirim"] = date("d/m/Y");
		$data["pengirim"] = $this->get_id_user($this->session->userdata("username"));

		$input = $this->dba->insert("artikel", $data);

		if($input->err["code"] == 0){
			$output->status = true;
			$output->message = "Menambahkan artikel sukses!";
		} else {
			$output->status = false;
			$output->message = $input->err["message"]; 
		}

		return $output;
	}

	public function get_artikel_popular(){
		$output = (object)array();
		$data = $this->dba->order_by_desc("artikel", 'value_artikel DESC', false, 5)->data;
		

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Data tidak ditemukan!";
			$output->data = null;
		} else {

			for ($i=0; $i < count($data); $i++) { 
				$data[$i]["judul"] = preg_replace("/(-)/", " ", $data[$i]["judul"]);
			}

			$output->status = true;
			$output->message = "Data ditemukan!";
			$output->data = $data;
		}

		return $output;

	}

	public function uid_(){
		$output = (object)array();

		$data = $this->dba->get_data("users")->data;

		if(count($data) > 0){
			foreach ($data as $key => $value) {
				$output->data[$value["id"]] = $value["nama"]; 
			}
		} else {
			$output->data = array();
		}

		return $output;

	}


	public function kid_(){
		$output = (object)array();

		$data = $this->dba->get_data("kategori")->data;

		if(count($data) > 0){
			foreach ($data as $key => $value) {
				$output->data[$value["id"]] = preg_replace("/(-)/", ' ', $value["nama_kategori"]); 
			}
		} else {
			$output->data = array();
		}

		return $output;

	}

	public function tid_(){
		$output = (object)array();

		$data = $this->dba->get_data("tags")->data;

		if(count($data) > 0){
			foreach ($data as $key => $value) {
				$output->data[$value["id"]] = preg_replace("/(-)/", ' ', $value["nama"]); 
			}
		} else {
			$output->data = array();
		}

		return $output;

	}

	public function setting_web(){
		$data = $this->dba->get_data("setting_web")->data;

		return $data[0];
	}

	public function tags_group(){
		$data = $this->get_tag()->data;
		$output = (object)array();

		if($data != null){
			$groups = array();
			$halaman = 3;
			$pages = ceil(count($data)/$halaman);
			$page = 0;

			for($i = 0; $i<$pages;$i++){
				$output->data[] = $this->dba->run_query("SELECT * FROM tags limit ".$page.",".(int)$halaman);
				$page= $page+3;
			}


		} else {
			$output->data = array();
		}

		return $output->data;
	}

	public function artikel_desc($mulai= false, $limit=false){
		$output = (object)array();


		if(is_int($mulai) == false|| is_int($limit) == false){	
			$data = $this->dba->order_by_desc("artikel", 'id DESC', false, false)->data;
		} else {
			$data = $this->dba->run_query("SELECT * FROM artikel order by id desc limit ".$mulai.",".(int)$limit);
		}

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Data tidak ditemukan!";
			$output->data = null;
		} else {

			for ($i=0; $i < count($data); $i++) { 
				$data[$i]["judul"] = preg_replace("/(-)/", " ", $data[$i]["judul"]);
			}

			$output->status = true;
			$output->message = "Data ditemukan!";
			$output->data = $data;
		}

		return $output;
	} 



	public function get_artikel($id =false,$judul=false){
		$output = (object)array();
		$data = false;
		if($id == false){
			$data = $this->dba->get_data("artikel")->data;
		} else {
			if($judul != false){
				$data = $this->dba->get_data("artikel", array("id" => $id, "judul" => $judul))->data;
			} else {
				$data = $this->dba->get_data("artikel", array("id" => $id))->data;
			}
		}

		if($data == false || count($data) < 1){
			$output->status = false;
			$output->message = "Artikel tidak ditemukan!, mungkin artikel sudah terhapus atau dipindahkan ke-tautan baru.";
			$output->data = null;
		} else {

			for ($i=0; $i < count($data); $i++) { 
				$data[$i]["judul"] = preg_replace("/(-)/", " ", $data[$i]["judul"]);
			}

			$output->status = true;
			$output->message = "Data ditemukan!";
			$output->data = $data;
		}

		return $output;

	}


	public function verifycode($ip, $id_artikel = false, $kode = false){
		$output = (object)array();
		$file = APPPATH."verifikasi/kode-".$ip.".json";
		$index = APPPATH."verifikasi/index-".$ip.".number";

		if(file_exists($file) == false || file_exists($index) == false){
			$short = array();
			for ($i=0; $i < 9999; $i++) { 
				$short[] = array("kode" => rand(11111,99999), "status" => false, "id_artikel" => array());
			}

			file_put_contents($file, json_encode($short));
			file_put_contents($index, 0);
			$output->status = true;
			$output->next = $short[0]["kode"];
		} else {
			if($kode != false){
				$index_a = file_get_contents($index);
				$source = json_decode(file_get_contents($file));

				if($source[$index_a]->kode == $kode){
					if(in_array($id_artikel, $source[$index_a]->id_artikel) == false){
						$output->status = true;
						$output->next = $source[$index_a+1]->kode;
						file_put_contents($index, $index_a+1);
						$source[$index_a]->id_artikel[] = $id_artikel;
						file_put_contents($file, json_encode($source));
					} else {
						$output->status = false;
						$output->message = "Kode verifikasi sudah kadaluarsa!";
					}
				} else {
					$output->status = false;
					$output->message = "Kode verifikasi salah!";
				}
			} else {
				$index_a = file_get_contents($index);
				$source = json_decode(file_get_contents($file));

				$output->status = false;
				$output->message = "Harap memasukan kode verifikasi!";
				$output->next = $source[$index_a]->kode;
			}
		}

		return $output;
	}

	public function input_komen($id_artikel, $ip, $data){
		$output = (object)array();
		$data["tgl_kirim"] = date("d/m/Y");
		$data["jam"] = date("H:i:s");
		$select = $this->dba->get_data("pengunjung", array("ip" => $ip, "email" => $data["inisial"]))->data;

		if(count($select) < 1){
			$input_pe = $this->dba->insert("pengunjung", array("ip" => $ip, "email" => $data["inisial"]));

			if($input_pe->err["code"] == 0){
				
				$input_db = $this->dba->insert("riwayat_komen", $data);
				if($input_db->err["code"] == 0){
					$output->status = true;
					$output->message = "Komentar berhasil diposting!";
					
				} else {
					$output->status = false;
					$output->message = "Ada kesalahan saat memposting komentar, silahkan hubungi admin! Error db : '".$input_db->err["message"]."'";
				}
			} else {
				$output->status = false;
				$output->message = "Ada masalah saat mencoba membangun relasi antara akun dan komentar!";
			}
		} else {
			$input_db = $this->dba->insert("riwayat_komen", $data);
			if($input_db->err["code"] == 0){
				$output->status = true;
				$output->message = "Komentar berhasil diposting!";
				$output->data = $this->get_komentar($id_artikel)->data;
				$this->session->set_userdata(array(
					"email" => $data["inisial"]
				));
			} else {
				$output->status = false;
				$output->message = "Ada kesalahan saat memposting komentar, silahkan hubungi admin! \nError db : '".$input_db->err["message"]."'";
			}
		}

		return $output;

	}

	public function get_komentar($id_artikel){
		$output = (object)array();
		$data = $this->dba->get_data("riwayat_komen", array(
			"id_artikel" => $id_artikel
		))->data;


		if(count($data) > 0){
			$output->status = true;
			$output->data = $data;
		} else {
			$output->status = false;
			$output->message = "Belum ada komentar...";
		}

		return $output;

	}

	public function submit_email($ip, $inisial){
		$output = (object)array();
		$insert = $this->dba->insert("pengunjung", array(
			"ip" => $ip,
			"email" => $inisial
		));

		if($insert->err["code"] == 0){
			$output->status = true;
			$output->message = "Submit email sukses!";
		} else {
			$output->status = false;
			$output->message = "Ada masalah pada database! \nError Database : ".$insert->err["message"];
		}
		return $output;
	}


}

 ?>