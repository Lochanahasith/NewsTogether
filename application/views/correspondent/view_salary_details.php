<?php
if (!($this->session->userdata('loggedin'))) {
	redirect('Login/LoginUser');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Correspondent Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/side_bar_style.css" />

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/newsapp/application/views/mod/header-sidebar.php'?>
		<div class="panel panel-default" style="margin-top: 20px">

			<div class="panel-heading" style="margin-bottom: 40px;text-align: center;">
            <p class="panel-title"><h3>Monthly salary details</h3></p>
         	</div>
			<div class="panel-body">

			<form method='GET' action='<?php echo site_url("/cor_details/get_cor_salary/$id") ?>'>
            <label>Correspondent ID :</label>
			<?php echo $id; ?>
			 <div class="form-group">
      		<label ">Select the month</label>

      		<select class="form-control"  name="month">
                                        <option value="1" selected>January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>


                                                    </select>




    				</div>
    				<input type="submit" class="btn btn-success" value="View salary details"></button>
    			</form>



			</div>
		</div>



</body>
</html>