<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">



	<head>
  <title>Login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>

<body>
<div class="container-fluid" style=" background-color:#f3f3f3; height: 650px" >
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<div class="jumbotron" style="margin-top: 100px;margin-bottom: 130px; background-color:white">


				<?php

$error = $this->session->flashdata('errmsg');

if ($error) {
	?>
        <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $error; ?>
        </div>
        <?php }?>

			<?php echo form_open('Login/LoginUser'); ?>
			<div class="form-group">

			<img src="<?php echo base_url(); ?>images/derana.jpg" style="margin-left:77px;margin-bottom:25px;margin-top:10px;height:130px"/>

			</div>


			<div class="form-group">

				<input class="form-control" type="text" placeholder="Username" maxlength="40" name="username"  required="">

			</div>
			<div class="form-group">
				<input class="form-control" type="password" placeholder="Password" maxlength="40" name="password" required="">

			</div>

			<button  type="submit" class="btn  form-control  btn-block" style="margin-top: 35px; background-color:#d71921;color:white; ">Login</button>
			<?php form_close();?>
	</div>
 		<div class="col-lg-3"></div>



	</div>


</div>


</html>