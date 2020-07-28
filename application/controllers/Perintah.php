<?php 

/**
 * 
 */
class Perintah extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("middleware", "md");
	}

	//public function buatAdmin(){
	//	$this->md->createAdmin();
	//}

	public function ckeditor_image_receiver(){
		if($this->session->has_userdata("role")){
			if($this->session->userdata("role") == "admin" || $this->session->userdata("role") == "moderator"){
				$output = (object)array();
				$error = (object)array();
				$target_dir = FCPATH."assets/images/";
				$nama = rand(0, 9999).basename($_FILES["upload"]["name"]);
				$target_file = $target_dir.$nama;
				$uploadOk = 1;
				$imageFileType = strtolower(mime_content_type($_FILES["upload"]["tmp_name"]));

				// Check if image file is a actual image or fake image
				
				  $check = getimagesize($_FILES["upload"]["tmp_name"]);
				  if($check !== false) {
				    $uploadOk = 1;
				  } else {
				    $uploadOk = 0;
				  }
				

				// Check if file already exists
				if (file_exists($target_file)) {
				  $uploadOk = 0;
				}

				// Check file size
				if ($_FILES["upload"]["size"] > 5000000) {
				  $uploadOk = 0;
				}

				// Allow certain file formats
				if($imageFileType != "image/jpg" && $imageFileType != "image/png" && $imageFileType != "image/jpeg"
				&& $imageFileType != "image/gif" ) {
				  $uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					$error->number = 116;
				  	$error->message = "Ada masalah diformat file dan diukuran file, file yang diperbolehkan adalah file gambar dan ukuran dibawah 5GB!";
				  	$output->error = $error;
				// if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
				  	$output->fileName = basename($_FILES["upload"]["name"]);
				  	$output->uploaded = 1;
				  	$output->url = "//".base_url("assets/images/").$nama;
				    
				  } else {
				    $error->number = 116;
				  	$error->message = "Ada kendala saat memasukan file!";
				  }
				}

				$this->output
				->set_content_type("application/json")
				->set_output(json_encode($output));

				//require_once APPPATH.'libraries/ckfinder/core/connector/php/connector.php';

			}
		}
	}

	public function login(){
		$output = (object)array();
		$username = $this->input->post("username", true);
		$password = $this->input->post("password");

		if(strlen($username) > 4 && strlen($password) > 4){
			$output = $this->md->login($username, $password);
		} else {
			$output->status = false;
			$output->message = "Username dan Password tidak boleh kosong, minimal memiliki 5 karakter!";
		}
		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function logout(){
		if($this->session->userdata('username')){
		    $this->session->unset_userdata('username');
		    $this->session->unset_userdata('role');
		    $this->session->unset_userdata('email');

		    // Set message
		    $this->session->set_flashdata('logout', 'You are now logged out');
		    header("Location: //".base_url());
		}else{
		    header("Location: //".base_url());
		}
	}

	public function tambah_moderator(){
		$output = (object)array();
		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){
			$data = $this->input->post();
			$error = null;
			foreach ($data as $key => $value) {
				if(is_array($value)){
					$error = 1;
				} else {
					$data[$key] = strip_tags($value);
					if($key == "username"){
						$data[$key] = preg_replace("/( )/", "_", $value);
					}
				}
			}
			if($error == null){
				if(strlen($data["username"]) >= 5 && strlen($data["password"]) >= 5 && strlen($data["nama"]) >= 5 && strlen($data["no_hp"]) >= 5 && strlen($data["email"]) >= 5){
					if(filter_var($data["email"], FILTER_VALIDATE_EMAIL)){
						$data["password"] = password_hash($data["password"], PASSWORD_DEFAULT);
						$output = $this->md->tambah_moderator($data);
					} else {
						$output->status = false;
						$output->message = "Pastikan format email sudah benar!";
					}
				} else {
					$output->status = false;
					$output->message = "Form tidak boleh kosong! Username dan Password minimal memiliki 5 karakter!";
				}
			}else {
				$output->status = false;
				$ouput->message = "Anda ngapain ngasih nilai array hah ?!";
			}
		} else {
			show_error("Akses dibatasi!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	private function base64_to_jpeg($base64_string, $output_file) {
		//die($base64_string);
		 if($base64_string != "false"){
		    // open the output file for writing
		    $ifp = fopen( $output_file, 'wb' ); 

		    // split the string on commas
		    // $data[ 0 ] == "data:image/png;base64"
		    // $data[ 1 ] == <actual base64 string>
		    $data = explode( ',', $base64_string );

		    // we could add validation here with ensuring count( $data ) > 1

		    //die(print_r($data));
		    fwrite( $ifp, base64_decode( $data[ 1 ] ) );

		    // clean up the file resource
		    fclose( $ifp );

		    $mime = mime_content_type($output_file); 

		    //die($mime);

		    if(preg_match("/(jpg)/", $mime) || preg_match("/(jpeg)/", $mime) || preg_match("/(png)/", $mime) || preg_match("/(webp)/", $mime)){
		    	
		    	return $output_file;
		    } else {
		    	return false;
		    }
		} else {
			return false;
		}
	}

	public function tambah_kategori(){
		$output = (object)array();
		$data = $this->input->post();
		$error = null;

		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){

			foreach ($data as $key => $value) {
				if(is_array($value)){
					$error = "Anda ngapain ngasih nilai array hah ?!";
				} else {
					if ($key == "nama_kategori"){
						$data[$key] = preg_replace("/( )/", "-", $value);
					} else if($key === "thumbnail"){
						$new = rand(0, 9999);
						$check = $this->base64_to_jpeg($value, FCPATH."assets/images/".$new."-kategori.jpg");
						if($check == false){
							$error = "File harus berupa gambar!";
						} else {
							$data[$key] = "//".base_url("assets/images/".$new."-kategori.jpg");
						}
					}
				} 
			}

			if($error == null){
				if(strlen($data["nama_kategori"]) >= 5 && strlen($data["deskripsi"]) >= 5){
					$output = $this->md->tambah_kategori($data);
				} else {
					$output->status = false;
					$output->message = "Form tidak boleh kosong!";
				}
			} else {
				$output->status = false;
				$output->message = $error;
			}

		} else {
			show_error("Akses dibatasi!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function tambah_tag(){
		$output = (object)array();
		$data = $this->input->post();
		$error = null;

		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){

			foreach ($data as $key => $value) {
				if(is_array($value)){
					$error = "Anda ngapain ngasih nilai array hah ?!";
				} else {
					if ($key == "nama"){
						$data[$key] = preg_replace("/( )/", "-", $value);
					} else if($key === "thumbnail"){
						$new = rand(0, 9999);
						$check = $this->base64_to_jpeg($value, FCPATH."assets/images/".$new."-tags.jpg");
						if($check == false){
							$error = "File harus berupa gambar!";
						} else {
							$data[$key] = "//".base_url("assets/images/".$new."-tags.jpg");
						}
					}
				} 
			}

			if($error == null){
				if(strlen($data["nama"]) >= 5 && strlen($data["deskripsi"]) >= 5){
					$output = $this->md->tambah_tag($data);
				} else {
					$output->status = false;
					$output->message = "Form tidak boleh kosong!";
				}
			} else {
				$output->status = false;
				$output->message = $error;
			}

		} else {
			show_error("Akses dibatasi!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function get_subscriber($id = false){
		$output = (object)array();
		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){
			$output = $this->md->get_subscriber($id);
		} else {
			show_error("Akses dibatasi gan!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}


	public function hapus_subscriber($id){
		$output = (object)array();
		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){
			$output = $this->md->hapus_subscriber($id);
		} else {
			show_error("Akses dibatasi gan!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function get_kategori($id = false){
		$output = (object)array();
		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){
			$output = $this->md->get_kategori($id);
		} else {
			show_error("Akses dibatasi gan!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}


	public function hapus_kategori($id){
		$output = (object)array();
		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){
			$output = $this->md->hapus_kategori($id);
		} else {
			show_error("Akses dibatasi gan!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function edit_kategori($id){
		$output = (object)array();
		$data = $this->input->post();
		$error = null;

		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){

			foreach ($data as $key => $value) {
				if(is_array($value)){
					$error = "Anda ngapain ngasih nilai array hah ?!";
				} else {
					if ($key == "nama_kategori"){
						$data[$key] = preg_replace("/( )/", "-", $value);
					} else if($key === "thumbnail"){
						$new = rand(0, 9999);
						$check = $this->base64_to_jpeg($value, FCPATH."assets/images/".$new."-kategori.jpg");
						if($check == false){
							$error = "File harus berupa gambar!";
						} else {
							$data[$key] = "//".base_url("assets/images/".$new."-kategori.jpg");
						}
					}
				} 
			}

			if($error == null){
				if(strlen($data["nama_kategori"]) >= 5 && strlen($data["deskripsi"]) >= 5){
					$output = $this->md->edit_kategori($id, $data);
				} else {
					$output->status = false;
					$output->message = "Form tidak boleh kosong!";
				}
			} else {
				$output->status = false;
				$output->message = $error;
			}

		} else {
			show_error("Akses dibatasi!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function get_moderator($id = false){
		$output = (object)array();
		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){
			$output = $this->md->get_moderator($id);
		} else {
			show_error("Akses dibatasi gan!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function hapus_moderator($id){
		$output = (object)array();
		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){
			$output = $this->md->hapus_moderator($id);
		} else {
			show_error("Akses dibatasi gan!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function edit_moderator($id){
		$output = (object)array();
		$data = $this->input->post();
		$error = null;

		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){

			foreach ($data as $key => $value) {
				if(is_array($value)){
					$error = "Anda ngapain ngasih nilai array hah ?!";
				}
			}

			if($error == null){
				if(strlen($data["username"]) >= 5 && strlen($data["nama"]) >= 5){
					$output = $this->md->edit_moderator($id, $data);
				} else {
					$output->status = false;
					$output->message = "Form tidak boleh kosong!";
				}
			} else {
				$output->status = false;
				$output->message = $error;
			}

		} else {
			show_error("Akses dibatasi!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}


	public function get_tag($id = false){
		$output = (object)array();
		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){
			$output = $this->md->get_tag($id);
		} else {
			show_error("Akses dibatasi gan!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}


	public function hapus_tag($id){
		$output = (object)array();
		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){
			$output = $this->md->hapus_tag($id);
		} else {
			show_error("Akses dibatasi gan!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function edit_tag($id){
		$output = (object)array();
		$data = $this->input->post();
		$error = null;

		if($this->session->has_userdata("role") && $this->session->userdata("role") == "admin"){

			foreach ($data as $key => $value) {
				if(is_array($value)){
					$error = "Anda ngapain ngasih nilai array hah ?!";
				} else {
					if ($key == "nama_kategori"){
						$data[$key] = preg_replace("/( )/", "-", $value);
					} else if($key === "thumbnail"){
						$new = rand(0, 9999);
						$check = $this->base64_to_jpeg($value, FCPATH."assets/images/".$new."-tags.jpg");
						if($check == false){
							$error = "File harus berupa gambar!";
						} else {
							$data[$key] = "//".base_url("assets/images/".$new."-tags.jpg");
						}
					}
				} 
			}

			if($error == null){
				if(strlen($data["nama"]) >= 5 && strlen($data["deskripsi"]) >= 5){
					$output = $this->md->edit_tag($id, $data);
				} else {
					$output->status = false;
					$output->message = "Form tidak boleh kosong!";
				}
			} else {
				$output->status = false;
				$output->message = $error;
			}

		} else {
			show_error("Akses dibatasi!");
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}


	public function get_opsi_artikel(){
		$output = (object)array();
		if($this->session->has_userdata("role")){
			if($this->session->userdata("role") == "admin" || $this->session->userdata("role") == "moderator"){
				$output->kategori = $this->md->get_kategori();
				$output->tags = $this->md->get_tag();
			} else {
				show_error("Akses dibatasi gan!");
			}
		} else {
			show_error("Akses dibatasi gan!");
		}
		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function post_artikel(){
		$data = $this->input->post();
		$output = (object)array();
		if($this->session->has_userdata("role")){
			if($this->session->userdata("role") == "admin" || $this->session->userdata("role") == "moderator"){
				$error = null;
				foreach ($data as $key => $value) {
					if($key != "tag"){
						if(!is_array($data[$key])){
							if($key == "judul"){
								$data[$key] = preg_replace("/( )/", "-", $data[$key]);
							}else if($key == "thumbnail"){
								$new = rand(0, 99);
								$check = $this->base64_to_jpeg($value, FCPATH."assets/images/".$new.$data["judul"].".jpg");
								if($check == false){
									$error = "File harus berupa gambar!";
								} else {
									$data[$key] = "//".base_url("assets/images/".$new.$data["judul"].".jpg");
								}
							}
						} else {
							$error = "Anda ngapain ngasih nilai array hah ?!";
						}
					} else {
						if(is_array($data[$key])){

							for($i = 0; $i < count($data[$key]); $i++){
								$data[$key][$i] = (int)$data[$key][$i];
							}

							$data[$key] = json_encode($data[$key]);
						}
					}
				}
				if($error == null){
					$output = $this->md->post_artikel($data);
				} else {
					$output->status = false;
					$output->message = $error;
				}
			} else {
				show_error("Akses dibatasi gan!");
			}
		} else {
			show_error("Akses dibatasi gan!");
		}
		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));
	}

	public function komen($id_artikel){
		$input = $this->input->post();
		$ip = $this->input->ip_address();
		$output = (object)array();
		if($ip == "::1"){
			$ip = "127.0.0.1";
		}

		if(is_array($input["inisial"]) == false && is_array($input["komentar"]) == false && is_array($input["kode_verifikasi"]) == false){
			if(strlen($input["inisial"]) >= 5 || strlen($input["komentar"]) >= 5 || strlen($input["kode_verifikasi"]) >= 5){
				$verifi = $this->md->verifycode($ip, $id_artikel, $input["kode_verifikasi"]);

				if($verifi->status == true){
					
					if(filter_var($input["inisial"], FILTER_VALIDATE_EMAIL)){
						$input["id_artikel"] = $id_artikel;
						$output = $this->md->input_komen($id_artikel, $ip, $input);
						$output->kode = $verifi->next;
						if($output->status == true){
							$this->session->set_userdata(array(
								"email" => $input["inisial"]
							));
						}
					} else {
						$output->status = false;
						$output->message = "Inisial harus berupa email!";
						$output->kode = $verifi->next;
					}
				} else {
					$output->status = false;
					$output->message = $verifi->message;
				}
			} else {
				$output->status = false;
				$output->message = "Form tidak boleh kosong!";
			}
		} else {
			$output->status = false;
			$output->message = "Anda ngapain ngasih nilai array hah ?!";
		}

		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));

	}

	public function submit_email_user(){
		$output = (object)array();
		$inisial = $this->input->post("inisial");
		$ip = $this->input->ip_address();
		if($ip == "::1"){
			$ip = "127.0.0.1";
		}

		if(is_array($inisial) != true){
			if(strlen($inisial) >= 5){
				if(filter_var($inisial, FILTER_VALIDATE_EMAIL)){
					$output = $this->md->submit_email($ip, $inisial);
					if($output->status == true){
						$this->session->set_userdata(array(
							"email" => $inisial
						));
					}
				} else {
					$output->status = false;
					$output->message = "Kolom harus berupa email!";
				}
			} else {
				$output->status = false;
				$output->message = "Form tidak boleh kosong!, Minimal isi 5 karakter.";
			}
		} else {
			$output->status = false;
			$output->message = "Anda ngapain ngasih nilai array hah ?!";
		}
		$this->output
		->set_content_type("application/json")
		->set_output(json_encode($output));

	}

}
 ?>