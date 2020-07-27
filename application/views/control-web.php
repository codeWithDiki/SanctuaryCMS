<div class="row" style="height:100%;width: 100%">
	<div class="col-md-2">
		<div class="card" style="padding: 0; height: 100%;border-radius: 0px;">
			<ul class="list-group">
				<li class="list-group-item" onclick="kendali('tambah-moderator')">Tambah Moderator</li>
				<li class="list-group-item" onclick="kendali('kontrol-moderator')">Kontrol Moderator</li>
				<li class="list-group-item" onclick="kendali('tambah-kategori')">Tambah Kategori</li>
				<li class="list-group-item" onclick="kendali('kontrol-kategori')">Kontrol Kategori</li>
				<li class="list-group-item" onclick="kendali('tambah-tag')">Tambah Tag</li>
				<li class="list-group-item" onclick="kendali('kontrol-tag')">Kontrol Tag</li>
				<li class="list-group-item" onclick="kendali('kontrol-subscriber')">Kontrol Subscriber</li>
				<li class="list-group-item" onclick="kendali('buat-artikel')">Buat Artikel</li>
				<li class="list-group-item" onclick="kendali('pengaturan-akun')">Pengaturan Akun</li>
				<li class="list-group-item" onclick="kendali('pengaturan-web')">Pengaturan Web</li>
			</ul>
		</div>
	</div>
	<div class="col-md-9" style="margin:50px;">
		<div class="card">
			<div class="card-header">
				CONTROL PANEL
			</div>

			<div class="card-body" id="kendali">
				
			</div>

		</div>

			<div class="card-deck" style="margin:20px;">
				<div class="card">
					<div class="card-header">
						Artikel Terbaru
					</div>
					<div class="body" style="padding: 10px;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						Komentar Terbaru
					</div>
					<div class="body" style="padding: 10px;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>

				<div class="card">
					<div class="card-header">
						Statistik
					</div>
					<div class="body" style="padding: 10px;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>

			<div class="card-deck" style="margin:20px;">
				<div class="card">
					<div class="card-header">
						Statistik Iklan
					</div>
					<div class="body" style="padding: 10px;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						Statistik Kunjungan
					</div>
					<div class="body" style="padding: 10px;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>

				<div class="card">
					<div class="card-header">
						Artikel Terpopuler
					</div>
					<div class="body" style="padding: 10px;">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
			

	</div>

</div>
<script type="text/javascript">
	var thumbnail = false;
	var optional = null;
	var editor = null;
	var pre = null;

	function open_modal($fungsi, $data = false){
		var modal = document.getElementById("prop_modal");

		var notifi = document.createElement("div");
		notifi.setAttribute("style", "margin-top:20px")
		notifi.setAttribute("align", "center");

		var loader = document.createElement("i");
		loader.setAttribute("class", "fa fa-spinner fa-pulse");
		loader.setAttribute("style", "font-size:35px;");

		var modal_header = document.getElementById("modal-header");
		var modal_body = document.getElementById("modal-body");
		var modal_footer = document.getElementById("modal-footer");

		

		switch ($fungsi){
			case 'hapus-subscriber':
				$(modal).on('hidden.bs.modal', function (e) {
					modal_header.innerHTML = null;
					modal_body.innerHTML = null;
					modal_footer.innerHTML= null;
					kendali('kontrol-subscriber');
				});
				modal_header.textContent = "Konfirmasi";
				modal_body.textContent = "Apakah anda yakin ingin menghapus data ini ?";

				var btn = document.createElement("button");
				btn.setAttribute("class", "btn btn-sm btn-success");
				btn.textContent = "Yakin & Hapus!";
				btn.addEventListener("click", function(e){
					if($data !== false || $data.length > 1){
						$.ajax({
							url: "//<?php echo base_url("perintah/hapus_subscriber/") ?>"+$data,
							type: "GET",
							beforeSend: function(){
								modal_body.innerHTML = null;
								notifi.appendChild(loader);
								modal_body.appendChild(notifi);
							},
							success: function(output){
								notifi.innerHTML = null;
								if(output.status === true){
									notifi.setAttribute("class", "alert alert-success");

								} else {
									notifi.setAttribute("class", "alert alert-danger");
								}
								notifi.textContent = output.message;
								
							}
						});
					}
				});
				modal_footer.appendChild(btn);

				$(modal).modal('show');

				break;
			case 'hapus-kategori':
				$(modal).on('hidden.bs.modal', function (e) {
					modal_header.innerHTML = null;
					modal_body.innerHTML = null;
					modal_footer.innerHTML= null;
					kendali('kontrol-kategori');
				});
				modal_header.textContent = "Konfirmasi";
				modal_body.textContent = "Apakah anda yakin ingin menghapus data ini ?";

				var btn = document.createElement("button");
				btn.setAttribute("class", "btn btn-sm btn-success");
				btn.textContent = "Yakin & Hapus!";
				btn.addEventListener("click", function(e){
					if($data !== false || $data.length > 1){
						$.ajax({
							url: "//<?php echo base_url("perintah/hapus_kategori/") ?>"+$data,
							type: "GET",
							beforeSend: function(){
								modal_body.innerHTML = null;
								notifi.appendChild(loader);
								modal_body.appendChild(notifi);
							},
							success: function(output){
								notifi.innerHTML = null;
								if(output.status === true){
									notifi.setAttribute("class", "alert alert-success");

								} else {
									notifi.setAttribute("class", "alert alert-danger");
								}
								notifi.textContent = output.message;
								
							}
						});
					}
				});
				modal_footer.appendChild(btn);

				$(modal).modal('show');
				break;
			case 'edit-kategori' :
				//var container = doc

				$(modal).on('hidden.bs.modal', function (e) {
					modal_header.innerHTML = null;
					modal_body.innerHTML = null;
					modal_footer.innerHTML= null;
					kendali('kontrol-kategori');
				});

				var container = document.createElement("div");
				container.setAttribute("class", "container");
				modal_body.appendChild(container);
				modal_header.textContent = "Edit Kategori";
				thumbnail = false;

				var form = document.createElement("form");
				form.addEventListener("submit", function(e){
					var data = $(form).serializeArray();
					e.preventDefault();
					//data[data.length] = {"name" : "isi", "value" : editor.getData()};
					if(thumbnail !== false){
						data[data.length] = {"name" : "thumbnail", "value" : thumbnail};
					}
					notifi.innerHTML = null;
					notifi.appendChild(loader);

					console.log(data);

					$.ajax({
						url: "//<?php echo base_url("perintah/edit_kategori/") ?>"+$data,
						type: "POST",
						data: data,
						success: function(data){
							if(data.status === true){
								notifi.setAttribute("class", "alert alert-success");
							} else {
								notifi.setAttribute("class", "alert alert-danger");
							}
							notifi.innerHTML = data.message;
						}
					});
				});
				var form_items = new Array();
				container.appendChild(form);
				container.appendChild(notifi);
				optional = null;


				$.ajax({
					url: "//<?php echo base_url("perintah/get_kategori/") ?>"+$data,
					type: "GET",
					beforeSend: function(){
						notifi.innerHTML = null;
						notifi.appendChild(loader);
					},
					success: function(output){
						notifi.innerHTML = null;
						if(output.status === true){
							var old = output.data[0];
							for(var i = 0; i < 3; i++){
							form_items[i] = document.createElement("div");
							form_items[i].setAttribute("class", "form-group");

							if(i === 0){
								var label = document.createElement("label");
								label.textContent = "Nama Kategori : ";

								var input = document.createElement("input");
								input.setAttribute("type", "text");
								input.setAttribute("name", "nama_kategori");
								input.setAttribute("id", "nama_kategori");
								input.setAttribute("class", "form-control");
								input.setAttribute("value", old.nama_kategori);
								form_items[i].appendChild(label);
								form_items[i].appendChild(input);
							} else if(i === 1){
								var label = document.createElement("label");
								label.textContent = "Thumbnail : ";

								var input = document.createElement("input");
								input.setAttribute("type", "file");
								input.setAttribute("name", "thumbnail");
								input.setAttribute("id", "thumbnail");
								input.setAttribute("class", "form-control");

								

								optional = document.createElement("div");
								optional.setAttribute("style", "border-style: solid;border-width: 1px; width: 100px; height: 100px;text-align: center;margin-top:20px;background-image:url('"+old.thumbnail+"');background-size:cover;");
								optional.textContent = "Preview";

								input.addEventListener("change", function(e){
									  if (input.files && input.files[0]) {
									    var reader = new FileReader();
									    
									    reader.onload = function(e) {
									      optional.setAttribute("style", "border-style: solid;border-width: 1px; width: 100px; height: 100px;text-align: center;background-image: url('"+e.target.result+"');background-size:cover;margin-top:20px;");
									      optional.textContent = null;
									      thumbnail = e.target.result;
									      //console.log(e.target.result);
									    }
									    
									    reader.readAsDataURL(input.files[0]); // convert to base64 string
									  }
								});
								form_items[i].appendChild(label);
								form_items[i].appendChild(input);
								form_items[i].appendChild(optional);
							} else if(i ===2){
								var label = document.createElement("label");
								label.textContent = "Deskripsi : ";

								var inputs = document.createElement("textarea");
								inputs.setAttribute("name", "deskripsi");
								inputs.setAttribute("id", "deskripsi");
								inputs.setAttribute("class", "form-control");
								inputs.textContent = old.deskripsi;
								form_items[i].appendChild(label);
								form_items[i].appendChild(inputs);
							}
							

							form.appendChild(form_items[i]);

						}

						var btn = document.createElement("button");
						btn.setAttribute("class", "btn btn-block btn-success");
						btn.textContent = "Simpan Data";
						form.appendChild(btn);
						} else {
							notifi.setAttribute("class", "alert alert-danger");
							notifi.textContent = output.message;
						}
						
					}
				});

						

				$(modal).modal('show');
				break;
			case 'hapus-moderator':
				$(modal).on('hidden.bs.modal', function (e) {
					modal_header.innerHTML = null;
					modal_body.innerHTML = null;
					modal_footer.innerHTML= null;
					kendali('kontrol-moderator');
				});
				modal_header.textContent = "Konfirmasi";
				modal_body.textContent = "Apakah anda yakin ingin menghapus data ini ?";

				var btn = document.createElement("button");
				btn.setAttribute("class", "btn btn-sm btn-success");
				btn.textContent = "Yakin & Hapus!";
				btn.addEventListener("click", function(e){
					if($data !== false || $data.length > 1){
						$.ajax({
							url: "//<?php echo base_url("perintah/hapus_moderator/") ?>"+$data,
							type: "GET",
							beforeSend: function(){
								modal_body.innerHTML = null;
								notifi.appendChild(loader);
								modal_body.appendChild(notifi);
							},
							success: function(output){
								notifi.innerHTML = null;
								if(output.status === true){
									notifi.setAttribute("class", "alert alert-success");

								} else {
									notifi.setAttribute("class", "alert alert-danger");
								}
								notifi.textContent = output.message;
								
							}
						});
					}
				});
				modal_footer.appendChild(btn);

				$(modal).modal('show');
				break;
			case 'edit-moderator':
				$(modal).on('hidden.bs.modal', function (e) {
					modal_header.innerHTML = null;
					modal_body.innerHTML = null;
					modal_footer.innerHTML= null;
					kendali('kontrol-moderator');
				});

				var container = document.createElement("div");
				container.setAttribute("class", "container");
				modal_body.appendChild(container);
				modal_header.textContent = "Edit Moderator";

				var form = document.createElement("form");
				form.addEventListener("submit", function(e){
					e.preventDefault();
					var data = $(this).serializeArray();

					notifi.appendChild(loader);

					$.ajax({
						url: "//<?php echo base_url("perintah/edit_moderator/") ?>"+$data,
						type: "POST",
						data: data,
						success: function(data){
							if(data.status === true){
								notifi.setAttribute("class", "alert alert-success");
							} else {
								notifi.setAttribute("class", "alert alert-danger");
							}
							notifi.innerHTML = data.message;
						}
					});
				});
				container.appendChild(form);
				container.appendChild(notifi);

				var form_items = new Array();

				$.ajax({
					url: "//<?php echo base_url("perintah/get_moderator/") ?>"+$data,
					type: "GET",
					beforeSend: function(){
						notifi.innerHTML = null;
						notifi.appendChild(loader);
					},
					success: function(output){
						notifi.innerHTML = null;
						if(output.status === true){
							var data = output.data[0];
							for(var i =0; i < 4; i++){
								form_items[i] = document.createElement("div");
								form_items[i].setAttribute("class", "form-group");

								if(i === 0){
									var label = document.createElement("label");
									label.textContent = "Username : ";

									var input = document.createElement("input");
									input.setAttribute("type", "text");
									input.setAttribute("name", "username");
									input.setAttribute("id", "username");
									input.setAttribute("class", "form-control");
									input.setAttribute("value", data.username);

								} else if(i === 1){
									var label = document.createElement("label");
									label.textContent = "Nama : ";

									var input = document.createElement("input");
									input.setAttribute("type", "text");
									input.setAttribute("name", "nama");
									input.setAttribute("id", "nama");
									input.setAttribute("class", "form-control");
									input.setAttribute("value", data.nama);
								} else if(i === 2){
									var label = document.createElement("label");
									label.textContent = "Nomor Telp : ";

									var input = document.createElement("input");
									input.setAttribute("type", "number");
									input.setAttribute("name", "no_hp");
									input.setAttribute("id", "no_hp");
									input.setAttribute("class", "form-control");
									input.setAttribute("value", data.no_hp);
								} else if(i === 3){
									var label = document.createElement("label");
									label.textContent = "Email : ";

									var input = document.createElement("input");
									input.setAttribute("type", "email");
									input.setAttribute("name", "email");
									input.setAttribute("id", "email");
									input.setAttribute("class", "form-control");
									input.setAttribute("value", data.email);
								}
								form_items[i].appendChild(label);
								form_items[i].appendChild(input);
								form.appendChild(form_items[i]);
							}

							var btn = document.createElement("button");
							btn.setAttribute("class", "btn btn-block btn-success");
							btn.textContent = "Simpan User";
							form.appendChild(btn);
						} else {
							notifi.setAttribute("class", "alert alert-danger");
							notifi.textContent = output.message;
						}
					}
				});

				$(modal).modal('show');		
				break;
			case 'hapus-tag':
				$(modal).on('hidden.bs.modal', function (e) {
					modal_header.innerHTML = null;
					modal_body.innerHTML = null;
					modal_footer.innerHTML= null;
					kendali('kontrol-tag');
				});
				modal_header.textContent = "Konfirmasi";
				modal_body.textContent = "Apakah anda yakin ingin menghapus data ini ?";

				var btn = document.createElement("button");
				btn.setAttribute("class", "btn btn-sm btn-success");
				btn.textContent = "Yakin & Hapus!";
				btn.addEventListener("click", function(e){
					if($data !== false || $data.length > 1){
						$.ajax({
							url: "//<?php echo base_url("perintah/hapus_tag/") ?>"+$data,
							type: "GET",
							beforeSend: function(){
								modal_body.innerHTML = null;
								notifi.appendChild(loader);
								modal_body.appendChild(notifi);
							},
							success: function(output){
								notifi.innerHTML = null;
								if(output.status === true){
									notifi.setAttribute("class", "alert alert-success");

								} else {
									notifi.setAttribute("class", "alert alert-danger");
								}
								notifi.textContent = output.message;
								
							}
						});
					}
				});
				modal_footer.appendChild(btn);

				$(modal).modal('show');
				break;
			case 'edit-tag' :
				//var container = doc

				$(modal).on('hidden.bs.modal', function (e) {
					modal_header.innerHTML = null;
					modal_body.innerHTML = null;
					modal_footer.innerHTML= null;
					kendali('kontrol-tag');
				});

				var container = document.createElement("div");
				container.setAttribute("class", "container");
				modal_body.appendChild(container);
				modal_header.textContent = "Edit Tag";
				thumbnail = false;

				var form = document.createElement("form");
				form.addEventListener("submit", function(e){
					var data = $(form).serializeArray();
					e.preventDefault();
					//data[data.length] = {"name" : "isi", "value" : editor.getData()};
					if(thumbnail !== false){
						data[data.length] = {"name" : "thumbnail", "value" : thumbnail};
					}
					notifi.innerHTML = null;
					notifi.appendChild(loader);

					console.log(data);

					$.ajax({
						url: "//<?php echo base_url("perintah/edit_tag/") ?>"+$data,
						type: "POST",
						data: data,
						success: function(data){
							if(data.status === true){
								notifi.setAttribute("class", "alert alert-success");
							} else {
								notifi.setAttribute("class", "alert alert-danger");
							}
							notifi.innerHTML = data.message;
						}
					});
				});
				var form_items = new Array();
				container.appendChild(form);
				container.appendChild(notifi);
				optional = null;


				$.ajax({
					url: "//<?php echo base_url("perintah/get_tag/") ?>"+$data,
					type: "GET",
					beforeSend: function(){
						notifi.innerHTML = null;
						notifi.appendChild(loader);
					},
					success: function(output){
						notifi.innerHTML = null;
						if(output.status === true){
							var old = output.data[0];
							for(var i = 0; i < 3; i++){
							form_items[i] = document.createElement("div");
							form_items[i].setAttribute("class", "form-group");

							if(i === 0){
								var label = document.createElement("label");
								label.textContent = "Nama Tag : ";

								var input = document.createElement("input");
								input.setAttribute("type", "text");
								input.setAttribute("name", "nama");
								input.setAttribute("id", "nama");
								input.setAttribute("class", "form-control");
								input.setAttribute("value", old.nama);
								form_items[i].appendChild(label);
								form_items[i].appendChild(input);
							} else if(i === 1){
								var label = document.createElement("label");
								label.textContent = "Thumbnail : ";

								var input = document.createElement("input");
								input.setAttribute("type", "file");
								input.setAttribute("name", "thumbnail");
								input.setAttribute("id", "thumbnail");
								input.setAttribute("class", "form-control");

								

								optional = document.createElement("div");
								optional.setAttribute("style", "border-style: solid;border-width: 1px; width: 100px; height: 100px;text-align: center;margin-top:20px;background-image:url('"+old.thumbnail+"');background-size:cover;");
								optional.textContent = "Preview";

								input.addEventListener("change", function(e){
									  if (input.files && input.files[0]) {
									    var reader = new FileReader();
									    
									    reader.onload = function(e) {
									      optional.setAttribute("style", "border-style: solid;border-width: 1px; width: 100px; height: 100px;text-align: center;background-image: url('"+e.target.result+"');background-size:cover;margin-top:20px;");
									      optional.textContent = null;
									      thumbnail = e.target.result;
									      //console.log(e.target.result);
									    }
									    
									    reader.readAsDataURL(input.files[0]); // convert to base64 string
									  }
								});
								form_items[i].appendChild(label);
								form_items[i].appendChild(input);
								form_items[i].appendChild(optional);
							} else if(i ===2){
								var label = document.createElement("label");
								label.textContent = "Deskripsi : ";

								var inputs = document.createElement("textarea");
								inputs.setAttribute("name", "deskripsi");
								inputs.setAttribute("id", "deskripsi");
								inputs.setAttribute("class", "form-control");
								inputs.textContent = old.deskripsi;
								form_items[i].appendChild(label);
								form_items[i].appendChild(inputs);
							}
							

							form.appendChild(form_items[i]);

						}

						var btn = document.createElement("button");
						btn.setAttribute("class", "btn btn-block btn-success");
						btn.textContent = "Simpan Data";
						form.appendChild(btn);
						} else {
							notifi.setAttribute("class", "alert alert-danger");
							notifi.textContent = output.message;
						}
						
					}
				});

						

				$(modal).modal('show');
				break;

			default :
				alert("Fungsi tidak terdeteksi!");
				break;
		}

	}

	function kendali($page){
		var kendali = document.getElementById("kendali");
		kendali.innerHTML = null;

		var notifi = document.createElement("div");
		notifi.setAttribute("style","margin-top:20px;");
		notifi.setAttribute("align", "center");

		var loader = document.createElement("i");
		loader.setAttribute("class", "fa fa-spinner fa-pulse");
		loader.setAttribute("style", "font-size:35px;");

		switch($page){
			case 'tambah-moderator':
				var container = document.createElement("div");
				container.setAttribute("class", "container");
				kendali.appendChild(container);

				var form = document.createElement("form");
				form.addEventListener("submit", function(e){
					e.preventDefault();
					var data = $(this).serializeArray();

					notifi.appendChild(loader);

					$.ajax({
						url: "//<?php echo base_url("perintah/tambah_moderator") ?>",
						type: "POST",
						data: data,
						success: function(data){
							if(data.status === true){
								notifi.setAttribute("class", "alert alert-success");
							} else {
								notifi.setAttribute("class", "alert alert-danger");
							}
							notifi.innerHTML = data.message;
						}
					});
				});
				container.appendChild(form);
				container.appendChild(notifi);

				var form_items = new Array();

				for(var i =0; i < 5; i++){
					form_items[i] = document.createElement("div");
					form_items[i].setAttribute("class", "form-group");

					if(i === 0){
						var label = document.createElement("label");
						label.textContent = "Username : ";

						var input = document.createElement("input");
						input.setAttribute("type", "text");
						input.setAttribute("name", "username");
						input.setAttribute("id", "username");
						input.setAttribute("class", "form-control");

					} else if(i === 1){
						var label = document.createElement("label");
						label.textContent = "Password : ";

						var input = document.createElement("input");
						input.setAttribute("type", "password");
						input.setAttribute("name", "password");
						input.setAttribute("id", "password");
						input.setAttribute("class", "form-control");
					} else if(i === 2){
						var label = document.createElement("label");
						label.textContent = "Nama : ";

						var input = document.createElement("input");
						input.setAttribute("type", "text");
						input.setAttribute("name", "nama");
						input.setAttribute("id", "nama");
						input.setAttribute("class", "form-control");
					} else if(i === 3){
						var label = document.createElement("label");
						label.textContent = "Nomor Telp : ";

						var input = document.createElement("input");
						input.setAttribute("type", "number");
						input.setAttribute("name", "no_hp");
						input.setAttribute("id", "no_hp");
						input.setAttribute("class", "form-control");
					} else if(i === 4){
						var label = document.createElement("label");
						label.textContent = "Email : ";

						var input = document.createElement("input");
						input.setAttribute("type", "email");
						input.setAttribute("name", "email");
						input.setAttribute("id", "email");
						input.setAttribute("class", "form-control");
					}
					form_items[i].appendChild(label);
					form_items[i].appendChild(input);
					form.appendChild(form_items[i]);
				}

				var btn = document.createElement("button");
				btn.setAttribute("class", "btn btn-block btn-success");
				btn.textContent = "Simpan User";
				form.appendChild(btn);


				break;
			case 'tambah-kategori':

				//var container = doc

				var container = document.createElement("div");
				container.setAttribute("class", "container");
				kendali.appendChild(container);
				thumbnail = false;

				var form = document.createElement("form");
				form.addEventListener("submit", function(e){
					var data = $(form).serializeArray();
					e.preventDefault();
					//data[data.length] = {"name" : "isi", "value" : editor.getData()};

					data[data.length] = {"name" : "thumbnail", "value" : thumbnail};
					notifi.innerHTML = null;
					notifi.appendChild(loader);

					$.ajax({
						url: "//<?php echo base_url("perintah/tambah_kategori") ?>",
						type: "POST",
						data: data,
						success: function(data){
							if(data.status === true){
								notifi.setAttribute("class", "alert alert-success");
							} else {
								notifi.setAttribute("class", "alert alert-danger");
							}
							notifi.innerHTML = data.message;
						}
					});
				});
				var form_items = new Array();
				container.appendChild(form);
				container.appendChild(notifi);
				optional = null;

				for(var i = 0; i < 3; i++){
					form_items[i] = document.createElement("div");
					form_items[i].setAttribute("class", "form-group");

					if(i === 0){
						var label = document.createElement("label");
						label.textContent = "Nama Kategori : ";

						var input = document.createElement("input");
						input.setAttribute("type", "text");
						input.setAttribute("name", "nama_kategori");
						input.setAttribute("id", "nama_kategori");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					} else if(i === 1){
						var label = document.createElement("label");
						label.textContent = "Thumbnail : ";

						var input = document.createElement("input");
						input.setAttribute("type", "file");
						input.setAttribute("name", "thumbnail");
						input.setAttribute("id", "thumbnail");
						input.setAttribute("class", "form-control");

						

						optional = document.createElement("div");
						optional.setAttribute("style", "border-style: solid;border-width: 1px; width: 100px; height: 100px;text-align: center;margin-top:20px;");
						optional.textContent = "Preview";

						input.addEventListener("change", function(e){
							  if (input.files && input.files[0]) {
							    var reader = new FileReader();
							    
							    reader.onload = function(e) {
							      optional.setAttribute("style", "border-style: solid;border-width: 1px; width: 100px; height: 100px;text-align: center;background-image: url('"+e.target.result+"');background-size:cover;margin-top:20px;");
							      optional.textContent = null;
							      thumbnail = e.target.result;
							      //console.log(e.target.result);
							    }
							    
							    reader.readAsDataURL(input.files[0]); // convert to base64 string
							  }
						});
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
						form_items[i].appendChild(optional);
					} else if(i ===2){
						var label = document.createElement("label");
						label.textContent = "Deskripsi : ";

						var inputs = document.createElement("textarea");
						inputs.setAttribute("name", "deskripsi");
						inputs.setAttribute("id", "deskripsi");
						inputs.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(inputs);
					}
					

					form.appendChild(form_items[i]);

				}

				var btn = document.createElement("button");
				btn.setAttribute("class", "btn btn-block btn-success");
				btn.textContent = "Simpan Data";
				form.appendChild(btn);

				/*ClassicEditor
			        .create( document.querySelector( '#test' ), {
			        	ckfinder: {
			            uploadUrl: '//<?php echo base_url("perintah/test_image") ?>?command=QuickUpload&type=Files&responseType=json'
			        }
			        } )
			        .catch( error => {
			            console.error( error );
			        } );*/
				break;
			case 'tambah-tag':

				//var container = doc

				var container = document.createElement("div");
				container.setAttribute("class", "container");
				kendali.appendChild(container);
				thumbnail = false;
				optional = null;
				var form = document.createElement("form");
				form.addEventListener("submit", function(e){
					var data = $(form).serializeArray();
					//data[data.length] = {"name" : "isi", "value" : editor.getData()};
					data[data.length] = {"name" : "thumbnail", "value" : thumbnail};
					e.preventDefault();

					notifi.innerHTML = null;
					notifi.appendChild(loader);

					$.ajax({
						url: "//<?php echo base_url("perintah/tambah_tag") ?>",
						type: "POST",
						data: data,
						success: function(data){
							if(data.status === true){
								notifi.setAttribute("class", "alert alert-success");
							} else {
								notifi.setAttribute("class", "alert alert-danger");
							}
							notifi.innerHTML = data.message;
						}
					});
				});
				var form_items = new Array();
				container.appendChild(form);
				container.appendChild(notifi);
				

				for(var i = 0; i < 3; i++){
					form_items[i] = document.createElement("div");
					form_items[i].setAttribute("class", "form-group");

					if(i === 0){
						var label = document.createElement("label");
						label.textContent = "Nama Tag : ";

						var input = document.createElement("input");
						input.setAttribute("type", "text");
						input.setAttribute("name", "nama");
						input.setAttribute("id", "nama");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					} else if(i === 1){
						var label = document.createElement("label");
						label.textContent = "Thumbnail : ";

						var input = document.createElement("input");
						input.setAttribute("type", "file");
						input.setAttribute("name", "thumbnail");
						input.setAttribute("id", "thumbnail");
						input.setAttribute("class", "form-control");

						

						optional = document.createElement("div");
						optional.setAttribute("style", "border-style: solid;border-width: 1px; width: 100px; height: 100px;text-align: center;margin-top:20px;");
						optional.textContent = "Preview";

						input.addEventListener("change", function(e){
							  if (input.files && input.files[0]) {
							    var reader = new FileReader();
							    
							    reader.onload = function(e) {
							      optional.setAttribute("style", "border-style: solid;border-width: 1px; width: 100px; height: 100px;text-align: center;background-image: url('"+e.target.result+"');background-size:cover;margin-top:20px;");
							      optional.textContent = null;
							      thumbnail = e.target.result;
							      //console.log(e.target.result);
							    }
							    
							    reader.readAsDataURL(input.files[0]); // convert to base64 string
							  }
						});
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
						form_items[i].appendChild(optional);
					} else if(i ===2){
						var label = document.createElement("label");
						label.textContent = "Deskripsi : ";

						var inputs = document.createElement("textarea");
						inputs.setAttribute("name", "deskripsi");
						inputs.setAttribute("id", "deskripsi");
						inputs.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(inputs);
					}
					

					form.appendChild(form_items[i]);

				}

				var btn = document.createElement("button");
				btn.setAttribute("class", "btn btn-block btn-success");
				btn.textContent = "Simpan Data";
				form.appendChild(btn);

				break;
			case 'tambah-iklan':

				break;
			case 'kontrol-subscriber':
				var container = document.createElement("div");
				container.setAttribute("class", "container");
				kendali.appendChild(container);

				var table = document.createElement("table");
				table.setAttribute("class", "table table-sm table-striped table-bordered");
				table.setAttribute("id", "table-subscriber");


				container.appendChild(table);

				var thead = document.createElement("thead");
				table.appendChild(thead);

				var tbody = document.createElement("tbody");
				table.appendChild(tbody);

				var thead_items = new Array();

				var tr_thead = document.createElement("tr");
				tr_thead.setAttribute("align", "center");
				thead.appendChild(tr_thead);

				for(var i = 0; i < 5; i++ ){
					thead_items[i] = document.createElement("th");
					if(i === 0){
						thead_items[i].textContent = "No";
					} else if(i===1){
						thead_items[i].textContent = "Email";
					} else if(i === 2){
						thead_items[i].textContent = "Kode Verifikasi";
					} else if(i===3){
						thead_items[i].textContent = "Status";
					} else if(i === 4){
						thead_items[i].textContent = "Opsi";
					}



					tr_thead.appendChild(thead_items[i]);
				}

				$.ajax({
					url: "//<?php echo base_url("perintah/get_subscriber") ?>",
					type: "GET",
					beforeSend: function(){
						var tr_loader = document.createElement("tr");
						tr_loader.setAttribute("align", "center");

						var td_loader = document.createElement("td");
						td_loader.setAttribute("colspan", 5);
						td_loader.appendChild(loader);

						tr_loader.appendChild(td_loader);
						tbody.appendChild(tr_loader);
					},
					success: function(output){
						tbody.innerHTML = null;

						if(output.status === true){
							for(var i = 0; i < output.data.length; i++){
								var tr_body = document.createElement("tr");
								tr_body.setAttribute("align", "center");
								tbody.appendChild(tr_body);

								var td_no = document.createElement("td");
								td_no.textContent = i+1;
								tr_body.appendChild(td_no);


								var td_email = document.createElement("td");
								td_email.textContent = output.data[i].email;
								tr_body.appendChild(td_email);

								var td_kv = document.createElement("td");
								td_kv.textContent = output.data[i].kode_verifikasi;
								tr_body.appendChild(td_kv);


								var td_status = document.createElement("td");
								td_status.textContent = output.data[i].status;
								tr_body.appendChild(td_status);

								var td_opsi = document.createElement("td");

								var btn_group = document.createElement("div");
								btn_group.setAttribute("class", "btn-group");
								td_opsi.appendChild(btn_group);

								var btn_del = document.createElement("button");
								btn_del.setAttribute("class", "btn btn-sm btn-danger");
								btn_del.setAttribute("opsi", output.data[i].id);
								btn_del.addEventListener("click", function(e){
									open_modal('hapus-subscriber', $(this).attr("opsi"));

								});
								btn_del.textContent = "Hapus";
								btn_group.appendChild(btn_del);


								tr_body.appendChild(td_opsi);

							}
							$(table).DataTable();	
						} else {
							var tr_er = document.createElement("tr");
							tr_er.setAttribute("align", "center");
							tbody.appendChild(tr_er);

							var td_err = document.createElement("td");
							td_err.setAttribute("colspan", 5);
							td_err.textContent = output.message;
							tr_er.appendChild(td_err);
						}
					}
				});
					
				break;
			case 'kontrol-kategori':
				var container = document.createElement("div");
				container.setAttribute("class", "container");
				kendali.appendChild(container);

				var table = document.createElement("table");
				table.setAttribute("class", "table table-sm");
				table.setAttribute("id", "table-subscriber");

				container.appendChild(table);

				var thead = document.createElement("thead");
				table.appendChild(thead);

				var tbody = document.createElement("tbody");
				table.appendChild(tbody);

				var thead_items = new Array();

				var tr_thead = document.createElement("tr");
				tr_thead.setAttribute("align", "center")
				thead.appendChild(tr_thead);

				for(var i = 0; i < 5; i++ ){
					thead_items[i] = document.createElement("th");
					if(i === 0){
						thead_items[i].textContent = "No";
					} else if(i===1){
						thead_items[i].textContent = "Nama Kategori";
					} else if(i === 2){
						thead_items[i].textContent = "Thumbnail";
					} else if(i===3){
						thead_items[i].textContent = "Deskripsi";
					} else if(i === 4){
						thead_items[i].textContent = "Opsi";
					}



					tr_thead.appendChild(thead_items[i]);
				}
					

				$.ajax({
					url:"//<?php echo base_url("perintah/get_kategori") ?>",
					type: "GET",
					beforeSend: function(){
						var tr_loader = document.createElement("tr");
						tr_loader.setAttribute("align", "center");

						var td_loader = document.createElement("td");
						td_loader.setAttribute("colspan", 5);
						td_loader.appendChild(loader);

						tr_loader.appendChild(td_loader);
						tbody.appendChild(tr_loader);
					},
					success: function(output){
						tbody.innerHTML = null;

						if(output.status === true){
							for(var i = 0; i < output.data.length; i++){
								var tr_body = document.createElement("tr");
								tr_body.setAttribute("align", "center");
								tbody.appendChild(tr_body);

								var td_no = document.createElement("td");
								td_no.textContent = i+1;
								tr_body.appendChild(td_no);


								var td_nk = document.createElement("td");
								td_nk.textContent = output.data[i].nama_kategori;
								tr_body.appendChild(td_nk);

								var td_thumb = document.createElement("td");
								td_thumb.textContent = output.data[i].thumbnail;
								tr_body.appendChild(td_thumb);


								var td_deskripsi = document.createElement("td");
								td_deskripsi.textContent = output.data[i].deskripsi;
								tr_body.appendChild(td_deskripsi);

								var td_opsi = document.createElement("td");

								var btn_group = document.createElement("div");
								btn_group.setAttribute("class", "btn-group");
								td_opsi.appendChild(btn_group);

								var btn_del = document.createElement("button");
								btn_del.setAttribute("class", "btn btn-sm btn-danger");
								btn_del.setAttribute("opsi", output.data[i].id);
								btn_del.addEventListener("click", function(e){
									open_modal('hapus-kategori', $(this).attr("opsi"));

								});
								btn_del.textContent = "Hapus";
								btn_group.appendChild(btn_del);

								var btn_upd = document.createElement("button");
								btn_upd.setAttribute("class", "btn btn-sm btn-warning");
								btn_upd.setAttribute("opsi", output.data[i].id);
								btn_upd.addEventListener("click", function(e){
									open_modal('edit-kategori', $(this).attr("opsi"));

								});
								btn_upd.textContent = "Ubah";
								btn_group.appendChild(btn_upd);


								tr_body.appendChild(td_opsi);

							}
							$(table).DataTable();	
						} else {
							var tr_er = document.createElement("tr");
							tr_er.setAttribute("align", "center");
							tbody.appendChild(tr_er);

							var td_err = document.createElement("td");
							td_err.setAttribute("colspan", 5);
							td_err.textContent = output.message;
							tr_er.appendChild(td_err);
						}
					}
				});
				break;
			case 'kontrol-moderator':
				var container = document.createElement("div");
				container.setAttribute("class", "container");
				kendali.appendChild(container);

				var table = document.createElement("table");
				table.setAttribute("class", "table table-sm");
				table.setAttribute("id", "table-subscriber");

				container.appendChild(table);

				var thead = document.createElement("thead");
				table.appendChild(thead);

				var tbody = document.createElement("tbody");
				table.appendChild(tbody);

				var thead_items = new Array();

				var tr_thead = document.createElement("tr");
				tr_thead.setAttribute("align", "center");
				thead.appendChild(tr_thead);

				for(var i = 0; i < 6; i++ ){
					thead_items[i] = document.createElement("th");
					if(i === 0){
						thead_items[i].textContent = "No";
					} else if(i===1){
						thead_items[i].textContent = "Username";
					} else if(i === 2){
						thead_items[i].textContent = "Nama";
					} else if(i===3){
						thead_items[i].textContent = "Email";
					} else if(i === 4){
						thead_items[i].textContent = "Nomor Handphone";
					} else if(i === 5){
						thead_items[i].textContent = "Opsi";
					}
					tr_thead.appendChild(thead_items[i]);
				}
				$.ajax({
					url:"//<?php echo base_url("perintah/get_moderator") ?>",
					type: "GET",
					beforeSend: function(){
						var tr_loader = document.createElement("tr");
						tr_loader.setAttribute("align", "center");

						var td_loader = document.createElement("td");
						td_loader.setAttribute("colspan", 5);
						td_loader.appendChild(loader);

						tr_loader.appendChild(td_loader);
						tbody.appendChild(tr_loader);
					},
					success: function(output){
						tbody.innerHTML = null;

						if(output.status === true){
							for(var i = 0; i < output.data.length; i++){
								var tr_body = document.createElement("tr");
								tr_body.setAttribute("align", "center");
								tbody.appendChild(tr_body);

								var td_no = document.createElement("td");
								td_no.textContent = i+1;
								tr_body.appendChild(td_no);


								var td_username = document.createElement("td");
								td_username.textContent = output.data[i].username;
								tr_body.appendChild(td_username);

								var td_nama = document.createElement("td");
								td_nama.textContent = output.data[i].nama;
								tr_body.appendChild(td_nama);


								var td_email = document.createElement("td");
								td_email.textContent = output.data[i].email;
								tr_body.appendChild(td_email);

								var td_nohp = document.createElement("td");
								td_nohp.textContent = output.data[i].no_hp;
								tr_body.appendChild(td_nohp);

								var td_opsi = document.createElement("td");

								var btn_group = document.createElement("div");
								btn_group.setAttribute("class", "btn-group");
								td_opsi.appendChild(btn_group);

								var btn_del = document.createElement("button");
								btn_del.setAttribute("class", "btn btn-sm btn-danger");
								btn_del.setAttribute("opsi", output.data[i].id);
								btn_del.addEventListener("click", function(e){
									open_modal('hapus-moderator', $(this).attr("opsi"));

								});
								btn_del.textContent = "Hapus";
								btn_group.appendChild(btn_del);

								var btn_upd = document.createElement("button");
								btn_upd.setAttribute("class", "btn btn-sm btn-warning");
								btn_upd.setAttribute("opsi", output.data[i].id);
								btn_upd.addEventListener("click", function(e){
									open_modal('edit-moderator', $(this).attr("opsi"));

								});
								btn_upd.textContent = "Ubah";
								btn_group.appendChild(btn_upd);


								tr_body.appendChild(td_opsi);

							}
							$(table).DataTable();	
						} else {
							var tr_er = document.createElement("tr");
							tr_er.setAttribute("align", "center");
							tbody.appendChild(tr_er);

							var td_err = document.createElement("td");
							td_err.setAttribute("colspan", 5);
							td_err.textContent = output.message;
							tr_er.appendChild(td_err);
						}
					}
				});
				break;
			case 'kontrol-tag':
				var container = document.createElement("div");
				container.setAttribute("class", "container");
				kendali.appendChild(container);

				var table = document.createElement("table");
				table.setAttribute("class", "table table-sm");
				table.setAttribute("id", "table-subscriber");

				container.appendChild(table);

				var thead = document.createElement("thead");
				table.appendChild(thead);

				var tbody = document.createElement("tbody");
				table.appendChild(tbody);

				var thead_items = new Array();

				var tr_thead = document.createElement("tr");
				tr_thead.setAttribute("align", "center");
				thead.appendChild(tr_thead);

				for(var i = 0; i < 5; i++ ){
					thead_items[i] = document.createElement("th");
					if(i === 0){
						thead_items[i].textContent = "No";
					} else if(i===1){
						thead_items[i].textContent = "Nama Tag";
					} else if(i === 2){
						thead_items[i].textContent = "Thumbnail";
					} else if(i===3){
						thead_items[i].textContent = "Deskripsi";
					} else if(i === 4){
						thead_items[i].textContent = "Opsi";
					}



					tr_thead.appendChild(thead_items[i]);
				}
				
				$.ajax({
					url:"//<?php echo base_url("perintah/get_tag") ?>",
					type: "GET",
					beforeSend: function(){
						var tr_loader = document.createElement("tr");
						tr_loader.setAttribute("align", "center");

						var td_loader = document.createElement("td");
						td_loader.setAttribute("colspan", 5);
						td_loader.appendChild(loader);

						tr_loader.appendChild(td_loader);
						tbody.appendChild(tr_loader);
					},
					success: function(output){
						tbody.innerHTML = null;

						if(output.status === true){
							for(var i = 0; i < output.data.length; i++){
								var tr_body = document.createElement("tr");
								tr_body.setAttribute("align", "center");
								tbody.appendChild(tr_body);

								var td_no = document.createElement("td");
								td_no.textContent = i+1;
								tr_body.appendChild(td_no);


								var td_nk = document.createElement("td");
								td_nk.textContent = output.data[i].nama;
								tr_body.appendChild(td_nk);

								var td_thumb = document.createElement("td");
								td_thumb.textContent = output.data[i].thumbnail;
								tr_body.appendChild(td_thumb);


								var td_deskripsi = document.createElement("td");
								td_deskripsi.textContent = output.data[i].deskripsi;
								tr_body.appendChild(td_deskripsi);

								var td_opsi = document.createElement("td");

								var btn_group = document.createElement("div");
								btn_group.setAttribute("class", "btn-group");
								td_opsi.appendChild(btn_group);

								var btn_del = document.createElement("button");
								btn_del.setAttribute("class", "btn btn-sm btn-danger");
								btn_del.setAttribute("opsi", output.data[i].id);
								btn_del.addEventListener("click", function(e){
									open_modal('hapus-tag', $(this).attr("opsi"));

								});
								btn_del.textContent = "Hapus";
								btn_group.appendChild(btn_del);

								var btn_upd = document.createElement("button");
								btn_upd.setAttribute("class", "btn btn-sm btn-warning");
								btn_upd.setAttribute("opsi", output.data[i].id);
								btn_upd.addEventListener("click", function(e){
									open_modal('edit-tag', $(this).attr("opsi"));

								});
								btn_upd.textContent = "Ubah";
								btn_group.appendChild(btn_upd);


								tr_body.appendChild(td_opsi);

							}
							$(table).DataTable();	
						} else {
							var tr_er = document.createElement("tr");
							tr_er.setAttribute("align", "center");
							tbody.appendChild(tr_er);

							var td_err = document.createElement("td");
							td_err.setAttribute("colspan", 5);
							td_err.textContent = output.message;
							tr_er.appendChild(td_err);
						}
					}
				});
				break; 
			case 'buat-artikel':
				var container = document.createElement("div");
				container.setAttribute("class", "container");
				kendali.appendChild(container);
				thumbnail = false;
				optional = null;
				editor = null;
				var form = document.createElement("form");
				form.addEventListener("submit", function(e){
					var data = $(form).serializeArray();
					data[data.length] = {"name" : "isi", "value" : editor.getData()};
					data[data.length] = {"name" : "thumbnail", "value" : thumbnail};
					e.preventDefault();

					$.ajax({
						url: "//<?php echo base_url("perintah/post_artikel") ?>",
						type:"POST",
						data:data,
						beforeSend: function(){
							notifi.innerHTML = null;
							notifi.appendChild(loader);
						},
						success: function(output){
							notifi.innerHTML = null;
							if(output.status === true){
								notifi.setAttribute("class", "alert alert-success");
							} else {
								notifi.setAttribute("class", "alert alert-danger");
							}

							notifi.textContent = output.message;
						}
					});
				});
				var form_items = new Array();
				//container.appendChild(form);
				

				$.ajax({
					url:"//<?php echo base_url("perintah/get_opsi_artikel") ?>",
					type: "GET",
					beforeSend: function(){
						notifi.appendChild(loader);
						container.appendChild(notifi);
					},
					success: function(data){
						if(data.kategori.status === true && data.tags.status === true){
							container.innerHTML = null;
							notifi.innerHTML = null;
							for(var i = 0; i < 5; i++){
								
								form_items[i] = document.createElement("div");
								form_items[i].setAttribute("class", "form-group");

								if(i === 0){
									var label = document.createElement("label");
									label.textContent = "Judul Artikel : ";

									var input = document.createElement("input");
									input.setAttribute("type", "text");
									input.setAttribute("name", "judul");
									input.setAttribute("id", "judul");
									input.setAttribute("class", "form-control");
									form_items[i].appendChild(label);
									form_items[i].appendChild(input);
								} else if(i === 1){
									var label = document.createElement("label");
									label.textContent = "Thumbnail : ";

									var input = document.createElement("input");
									input.setAttribute("type", "file");
									input.setAttribute("name", "thumbnail");
									input.setAttribute("id", "thumbnail");
									input.setAttribute("class", "form-control");

									

									optional = document.createElement("div");
									optional.setAttribute("style", "border-style: solid;border-width: 1px; width: 100px; height: 100px;text-align: center;margin-top:20px;");
									optional.textContent = "Preview";

									input.addEventListener("change", function(e){
										  if (input.files && input.files[0]) {
										    var reader = new FileReader();
										    
										    reader.onload = function(e) {
										      optional.setAttribute("style", "border-style: solid;border-width: 1px; width: 100px; height: 100px;text-align: center;background-image: url('"+e.target.result+"');background-size:cover;margin-top:20px;");
										      optional.textContent = null;
										      thumbnail = e.target.result;
										    }
										    
										    reader.readAsDataURL(input.files[0]); // convert to base64 string
										  }
									});
									form_items[i].appendChild(label);
									form_items[i].appendChild(input);
									form_items[i].appendChild(optional);
								} else if(i ===2){
									var label = document.createElement("label");
									label.textContent = "Isi : ";

									var inputs = document.createElement("textarea");
									form_items[i].appendChild(label);
									form_items[i].appendChild(inputs);
									ClassicEditor
								        .create( inputs, {
								        	ckfinder: {
								            uploadUrl: '//<?php echo base_url("perintah/ckeditor_image_receiver") ?>?command=QuickUpload&type=Files&responseType=json'
								        	},
								        	removePlugins : ["toolbar"]
								        } ).then(newEditor => {
								        	editor = newEditor;
								        }).catch( error => {
								            console.error( error );
								        } );

								} else if(i === 3){
									var label = document.createElement("label");
									label.textContent = "Kategori : ";

									var inputs = document.createElement("select");
									inputs.setAttribute("type", "text");
									inputs.setAttribute("name", "kategori");
									inputs.setAttribute("id", "kategori");
									inputs.setAttribute("class", "form-control");

									

									for(var x = 0; x<data.kategori.data.length;x++){
										var opt = document.createElement("option");
										opt.setAttribute("value", data.kategori.data[x]["id"]);
										opt.textContent = data.kategori.data[x]["nama_kategori"];
										inputs.appendChild(opt);
									}

									

									form_items[i].appendChild(label);
									form_items[i].appendChild(inputs);
								} else {
									var label = document.createElement("label");
									label.textContent = "Tags : ";

									var inputs1 = document.createElement("select");
									inputs1.setAttribute("type", "text");
									inputs1.setAttribute("multiple", "true");
									inputs1.setAttribute("name", "tag[]");
									inputs1.setAttribute("id", "tag[]");
									inputs1.setAttribute("style", "display:none");

									var btn_group = document.createElement("div");
									btn_group.setAttribute("class", "btn-group");

									var br = document.createElement("br");

									var ops = new Array();
									var btns = new Array();
									form_items[i].appendChild(label);
									form_items[i].appendChild(inputs1);
									form_items[i].appendChild(br);
									form_items[i].appendChild(btn_group);

									for(var x = 0; x < data.tags.data.length; x++){
										ops[x] = document.createElement("option");
										ops[x].setAttribute("value", data.tags.data[x]["id"]);
										ops[x].setAttribute("id", "opt_"+data.tags.data[x]["id"]);
										inputs1.appendChild(ops[x]);

										btns[x] = document.createElement("a");
										form_items[i].appendChild(btns[x]);
										btns[x].setAttribute("class", "btn btn-secondary btn-sm text-light");
										btns[x].setAttribute("aktif", "false");
										btns[x].setAttribute("style", "margin:5px;");
										btns[x].setAttribute("untuk", "opt_"+data.tags.data[x]["id"]);
										btns[x].textContent = data.tags.data[x]["nama"];
										btns[x].addEventListener("click", function(e){
											var kondisi = $(this).attr("aktif");
											var opts = document.getElementById($(this).attr("untuk"));
											if(kondisi === "false"){
												this.setAttribute("class", "btn btn-success btn-sm text-light");
												this.setAttribute("aktif", "true");
												opts.setAttribute("selected", "true");
											} else if (kondisi === "true") {
												this.setAttribute("class", "btn btn-secondary btn-sm text-light");
												this.setAttribute("aktif", "false");
												opts.removeAttribute("selected");
											}
										});
									}

								}
								

								form.appendChild(form_items[i]);

							}

							var btn = document.createElement("button");
							btn.setAttribute("class", "btn btn-block btn-success");
							btn.textContent = "Simpan Data";
							form.appendChild(btn);
							container.appendChild(form);
							container.appendChild(notifi);
						} else {
							notifi.setAttribute("class", "alert alert-danger");
							notifi.textContent = "Pastikan anda sudah menambahkan Kategori dan Tag!";
						}
					}
				});

							
				break;
			case 'pengaturan-akun':
				var container = document.createElement("div");
				container.setAttribute("class", "container");
				kendali.appendChild(container);

				var form = document.createElement("form");
				container.appendChild(form);

				var form_items = new Array();

				for(var i = 0; i < 6; i++){
					form_items[i] = document.createElement("div");
					form_items[i].setAttribute("class", "form-group");
					form.appendChild(form_items[i]);

					form.addEventListener("submit", function(e){
						var data = $(form).serializeArray();
						data[data.length] = {"name" : "photo", "value" : thumbnail};
						console.log(data);
						e.preventDefault();
					});

					if(i === 0){
						var media = document.createElement("div");
						media.setAttribute("class", "media");
						form_items[i].appendChild(media);

						pre = document.createElement("img");
						pre.setAttribute("class", "mr-3");
						pre.setAttribute("style", "width:100px;height:100px;");
						pre.setAttribute("alt","preview");
						pre.setAttribute("src", "...");
						media.appendChild(pre);

						var m_body = document.createElement("div");
						m_body.setAttribute("class", "media-body");
						media.appendChild(m_body);

						var label = document.createElement("label");
						label.textContent = "Foto Profil : ";
						m_body.appendChild(label);

						var inputs = document.createElement("input");
						inputs.setAttribute("type", "file");
						inputs.setAttribute("name", "thumbnail");
						inputs.setAttribute("id", "thumbnail");
						inputs.setAttribute("class", "form-control");
						m_body.appendChild(inputs);

						

						

						inputs.addEventListener("change", function(e){
							  if (inputs.files && inputs.files[0]) {
							    var reader = new FileReader();
							    
							    reader.onload = function(e) {
							      pre.setAttribute("src", e.target.result);
							      pre.textContent = null;
							      thumbnail = e.target.result;
							    }
							    
							    reader.readAsDataURL(inputs.files[0]); // convert to base64 string
							  }
						});

					} else if (i === 1){
						var label = document.createElement("label");
						label.textContent = "Nama : ";

						var input = document.createElement("input");
						input.setAttribute("type", "text");
						input.setAttribute("name", "nama");
						input.setAttribute("id", "nama");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					} else if (i === 2){
						var label = document.createElement("label");
						label.textContent = "Email : ";

						var input = document.createElement("input");
						input.setAttribute("type", "email");
						input.setAttribute("name", "email");
						input.setAttribute("id", "email");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					} else if(i === 3){
						var label = document.createElement("label");
						label.textContent = "Nomor Handphone : ";

						var input = document.createElement("input");
						input.setAttribute("type", "number");
						input.setAttribute("name", "no_hp");
						input.setAttribute("id", "no_hp");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					} else if(i === 4){
						var label = document.createElement("label");
						label.textContent = "Password Baru : ";

						var input = document.createElement("input");
						input.setAttribute("type", "password");
						input.setAttribute("name", "new_password");
						input.setAttribute("id", "new_password");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					} else if (i === 5){
						var label = document.createElement("label");
						label.textContent = "Password Saat Ini : ";

						var input = document.createElement("input");
						input.setAttribute("type", "password");
						input.setAttribute("name", "old_password");
						input.setAttribute("id", "old_password");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					}

				}

				var btn = document.createElement("button");
				btn.setAttribute("class", "btn btn-block btn-success");
				btn.textContent = "Simpan Data";
				form.appendChild(btn);

				break;
			case 'pengaturan-web':
				var container = document.createElement("div");
				container.setAttribute("class", "container");
				kendali.appendChild(container);

				var form = document.createElement("form");
				var form_items = new Array();

				container.appendChild(form);

				for(var i = 0; i < 4; i++){
					form_items[i] = document.createElement("div");
					form_items[i].setAttribute("class", "form-group");
					form.appendChild(form_items[i]);

					if(i === 0){
						var label = document.createElement("label");
						label.textContent = "Nama Web : ";

						var input = document.createElement("input");
						input.setAttribute("type", "text");
						input.setAttribute("name", "nama_web");
						input.setAttribute("id", "nama_web");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					} else if (i === 1){
						var label = document.createElement("label");
						label.textContent = "Email Admin : ";

						var input = document.createElement("input");
						input.setAttribute("type", "email");
						input.setAttribute("name", "email_admin");
						input.setAttribute("id", "email_admin");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					} else if (i === 2){
						var label = document.createElement("label");
						label.textContent = "Kontak Iklan : ";

						var input = document.createElement("input");
						input.setAttribute("type", "number");
						input.setAttribute("name", "kontak_iklan");
						input.setAttribute("id", "kontak_iklan");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					} else if(i === 3){
						var label = document.createElement("label");
						label.textContent = "Deskripsi Web : ";

						var input = document.createElement("textarea");
						input.setAttribute("name", "deskripsi_web");
						input.setAttribute("id", "deskripsi_web");
						input.setAttribute("class", "form-control");
						form_items[i].appendChild(label);
						form_items[i].appendChild(input);
					}
				}

				var btn = document.createElement("button");
				btn.setAttribute("class", "btn btn-block btn-success");
				btn.textContent = "Simpan Data";
				form.appendChild(btn);

				break;
		}
	}
</script>