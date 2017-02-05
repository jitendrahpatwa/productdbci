<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  
  
  	var findSubCat = function(){
  		var category = $('#category').val();
  		var SubCategory = $('#subcategory');
  		$.ajax({
  			url:'welcome/getSubCategory',
  			type:'GET',
  			data:{category:category},
  			dataType:'json',
  			contentType:'application/json'
  		})
  		.done(function(res){
  			var d = JSON.parse(JSON.stringify(res));
  			SubCategory.empty();
  			for (var i = 0; i < d.length; i++) {
  	  			SubCategory.append("<option value='"+d[i].id+"'>"+d[i].sname+"</option>");
  			}
  			
  		})
  		.fail(function(err){
  			alert(JSON.stringify(err));
  		});
  	}
  	var subme = function(){
  		alert($('#subcategory').val());
  	}
  </script>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<a href="welcome/setting">Home</a>
	<div id="body">
		<?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
		<form method="POST" action="welcome/doinsert" enctype="multipart-formdata">
			<select id="category" name="category" onchange="findSubCat()">
				<option value="0">Select Category</option>
				<option value="1">Cosmetics</option>
				<option value="2">Cloths</option>
				<option value="3">Toys</option>
				<option value="4">Perfumes</option>
			</select><br>
			<select id="subcategory" name="subcategory" onchange="subme()">
				<option value="0">Select SubCategory</option>
			</select><br>
			<input type="text" name="name" placeholder="product name"><br>
			<!-- <input type="text" name="cid" placeholder="product cid">
			<input type="text" name="sid" placeholder="product sid"> -->
			<input type="file" name="media"><br>
			<input type="text" name="feature" placeholder="product feature"><br>
			<input type="text" name="price" placeholder="product price"><br>
			<input type="email" name="email" placeholder="email"><br>
			<input type="tel" name="contact" placeholder="contact"><br>
			<input type="submit" value="Store CI">
		</form>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>