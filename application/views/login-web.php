<div class="container" style="margin-top: 50px;" align="center">
	<h3 class="display-4 text-light">Admin Login</h3>
	<div class="jumbotron" style="width:500px;padding: 20px;" align="left">
		
		<form id="login">
			<div class="form-group">
				<label>Username : </label>
				<input type="text" name="username" id="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Password : </label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<button class="btn btn-block btn-success">Login</button>
		</form>
		<br>
		<div id="alert">
		</div>

	</div>

	<script type="text/javascript">
		var form = document.getElementById("login");

		form.addEventListener('submit',function(e){
			e.preventDefault();
			var data = $(this).serializeArray();

			$.ajax({
				url: "//<?php echo base_url("perintah/login") ?>",
				type: "POST",
				data: data,
				success: function(data){
					if(data.status === false){
						var xInterface = document.getElementById("alert");
						xInterface.innerHTML = null;

						var status = document.createElement("div");
						status.setAttribute("class", "alert alert-danger");
						status.setAttribute("align", "center");
						status.textContent = data.message;
						xInterface.appendChild(status);
					} else {
						window.location.href = "//<?php echo base_url("xinterface/xadmin") ?>";
					}
				}
			});
		});
	</script>

</div>