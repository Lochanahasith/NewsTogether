<?php
if (!($this->session->userdata('loggedin'))) {
	redirect('Login/LoginUser');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Correspondent registration</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/side_bar_style.css" />


</head>

<body>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/newsapp/application/views/mod/header-sidebar.php'?>
      <div class="panel panel-default" style="margin-top: 20px">
         <div class="panel-heading">
            <p class="panel-title">Personal Information</p>
         </div>
       <div class="panel-body">





      <label class="form-control">Correspondent ID: <?php echo $p_info->repo_id ?></label>
       <label class="form-control">Username: <?php echo $p_info->username; ?></label>
       <label class="form-control">Name: <?php echo $p_info->name; ?></label>
       <label class="form-control">NIC No.: <?php echo $p_info->username; ?></label>
       <label class="form-control">District: <?php echo $p_info->district; ?></label>
       <label class="form-control">Address: <?php echo $p_info->address; ?></label>
       <label class="form-control">Mobile: <?php echo $p_info->mobile; ?></label>

       <label class="form-control">Email: <?php echo $p_info->email; ?></label>






      </div>
    </div>
</body>
</html>