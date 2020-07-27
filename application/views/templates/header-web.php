<!DOCTYPE html>
<html style="height: 100%">
<head>
	<title>NULL</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="//<?php echo base_url("assets/css/bootstrap.css") ?>">
	<link rel="stylesheet" type="text/css" href="//<?php echo base_url("assets/css/bootstrap-grid.css") ?>">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="//<?php echo base_url("assets/js/ajax.js") ?>"></script>
	<script type="text/javascript" src="//<?php echo base_url("assets/js/bootstrap.js") ?>"></script>
	<script type="text/javascript" src="//<?php echo base_url("assets/js/bootstrap.bundle.js") ?>"></script>
	<script type="text/javascript" src="//<?php echo base_url("assets/js/ckeditor.js") ?>"></script>
	<style type="text/css">
		.opening-bg {
			background-image: url('//<?php echo base_url("assets/images/code3.jpg") ?>');height:300px;/* Add the blur effect */
  			filter: blur(8px);
  			-webkit-filter: blur(8px);
  			background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
		}
		div[contenteditable] {
		    border: 0px;
		}
	</style>
</head>
<body style="width: 100%" class="bg-secondary">

	<div class="row bg-dark text-light" style="width: 100%; margin: 0;">
		<div class="col-md-3" style="justify-content: center;"><h1 class="display-4" style="padding-left:50px;font-size: 30px;top:50%;display: block;"><i><b>Sanctuary CMS</b></i></h1></div>
		<div class="col-md-2 ml-auto" align="center" style="justify-content: center;">
			<div class="btn-group" style="top:10%;">
				<button class="btn btn-danger"><B><i>Subscribe</i></B></button>
			</div>
		</div>	
	</div>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: sticky;width: 50%%; top:0; z-index: 99;padding-right: 0px;">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse container" id="navbarNav" style="width: 100%">
	  	<ul class="navbar-nav mr-auto">
	    
	    <?php 
	    	foreach ($kategori->data as $key => $value) {
	    		?>
	    		<li class="nav-item active">
			       <a class="nav-link" href="#"><?=$value?></a>
			     </li>
	    		<?php
	    	}
	     ?>
	    </ul>
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	      	<form id="search-form">
	        	<input type="text" name="f" id="search" class="form-control-sm" placeholder="Cari disitus ini...">
	        </form>
	      </li>
	      <li class="nav-item">
	      	<div class="btn btn-sm btn-secondary" onclick="$('#search-form').submit();" style="cursor: pointer;">
	      		<i class="fa fa-search"></i>
	      	</div>
	      </li>
	    </ul>
	  </div>
	</nav>

	<div style="margin-left:5%;margin-bottom:0;margin-right: 5%;margin-top:0;padding: 2%;box-shadow: 5px 10px 8px #888888" class="bg-light">
