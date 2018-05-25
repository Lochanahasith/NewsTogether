<?php
if (!($this->session->userdata('loggedin'))) {
	redirect('Login/LoginUser');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>News Together Admin Panel</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/side_bar_style.css" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo base_url('public/js/cor_search.js'); ?>"></script>





</head>

   <!-- header -->
<body>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/newsapp/application/views/mod/header-sidebar.php'?>




       <div class="panel panel-default" style="margin-top: 20px">
       			<div class="panel-heading" style="text-align: center">
            	<p class="panel-title"><b>Summary of the month </b></p>
         		</div>


                  <div class="panel-body">
                  <div class="form-group" style="color: blue"><b>Number of Telecasted news :   <?php echo $tel_count; ?> </b></div>
                  <div class="form-group" style="color: blue"><b>Number of Rejected news      :   <?php echo $rej_count; ?> </b></div>



                     <?php
$count = 0;

foreach ($total_salary->result_array() as $row) {
	$count = $count + $row['payment'];

}
?>

                  <div class="form-group" style="color: blue"><b>Overall Payment for the the month : Rs.<?php echo $count ?>/=</b></div>
                  </div>

               </div>

</body>
</html>
