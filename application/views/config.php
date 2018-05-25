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


          <?php
$this->load->helper('form');
$msg = $this->session->flashdata('rates');

if ($msg) {
	?>
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <?php echo $msg; ?>
             </div>
             <?php }

$this->load->helper('form');
$msg = $this->session->flashdata('err');

if ($msg) {
	?>
            <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <?php echo $msg; ?>
             </div>
             <?php }
?>





		<b><h3 style="margin:20px">Settings</h3></b>
	</div>
	  <div class="panel panel-default" style="margin-top: 20px">
	  	<form method='get' onsubmit="return confirm('Are you sure you want to Update the payment per news?');" action='<?php echo site_url("/config/update_config") ?>'>

	  		<h4 style="margin:20px">Payment Settings</h4>

	<?php
foreach ($payment_info->result_array() as $row) {?>




    <div class="form-group row" style="padding:20px; margin:10px">

      <label for="name" class="col-sm-2 col-form-label" style="margin-top:10px; padding:5px"> <?php echo $row['channel']; ?></label>
      <div class="col-sm-10"><input type="text" class="form-control" name="<?php echo $row['channel']; ?>" value=<?php echo $row['payment_per_news']; ?> required="" style="margin-top:10px; width:80%"></div>
    </div>

        <?php }?>

        <div id='btn' style="margin:30px">
    <input type='submit' class='btn btn-warning' value='Update' id='btn' > </div>


</form>

</div>
	  	<?php
foreach ($payment_info->result_array() as $row) {
	echo $row['channel'];
	echo $row['payment_per_news'];}
?>
	  </div>

</body>
</html>