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

<div class="container-fluid" style="margin-top: 10px">







	<?php echo validation_errors(); ?>
	<?php echo form_open("cor_details/update_cor/{$cor_info->repo_id}"); ?>
  	<h1 style="text-align: center;margin-bottom:25px;color:#d71921">Update Correspondent Details</h1>

     <div class="form-group row">
      <label for="cor_id" class="col-sm-2 col-form-label">Correspondent ID:</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="cor_id" name="correspondent_id" value="<?php echo $cor_info->repo_id; ?>" required="" disabled></div>
    </div>

  	 <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name"  placeholder="Name" name="name" value="<?php echo $cor_info->name; ?>" required="">
      </div>
    </div>

    <div class="form-group row">
      <label for="nic" class="col-sm-2 col-form-label">NIC No</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nic" placeholder="NIC" name="nic" minlength="10" maxlength="12" value="<?php echo $cor_info->nic; ?>" required="">
      </div>
    </div>
     <div class="form-group row">
      <label  class="col-sm-2 col-form-label">District </label>
      <div class="col-sm-10">
      <select class="form-control"  name="district" >
      <?php
$array = array("Ampara", "Anuradhapura", "Badulla", "Batticaloa", "Colombo", "Galle", "Gampaha", "Hambantota", "Jaffna", "Kalutara", "Kandy", "Kegalle", "Kilinochchi", "Kurunegala", "Mannar", "Matale", "Matara", "Monaragala", "Mullaitivu", "Nuwaraeliya", "Polonnaruwa", "Puttalam", "Ratnapura", "Trincomalee", "Vavuniya");
foreach ($array as $district) {
	if ($district == $cor_info->district) {
		echo "<option style='color : blue' selected><u>$district</u></option>";
	} else {
		echo "<option>$district</option>";
	}
}
?>
    </select>
    </div>
    </div>

    <div class="form-group row">
      <label for="address" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="address" placeholder="Address" name="address" required="">
        <?php echo $cor_info->address; ?>
		  </textarea>
      </div>
    </div>
    <div class="form-group row" >
      <label for="mobile" class="col-sm-2 col-form-label">Mobile No.</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mobile" placeholder="Mobile No" name="mobile" minlength="10" maxlength="10" value="<?php echo $cor_info->mobile; ?>" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="<?php echo $cor_info->email; ?>" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $cor_info->username; ?>" name="username">
      </div>
    </div>

    <div class="form-group row">
      <label for="Password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="Password" placeholder="Password" name="password" value="<?php echo $cor_info->password; ?>" required="">
      </div>
    </div>
  <!--  <div class="form-group row">
      <label for="passwordAgain" class="col-sm-2 col-form-label">Password Again</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="passwordAgain" placeholder="Password again" name="passwordAgain" >
      </div>
    </div> -->


    <div class="form-group row" style="margin-top: 30px;margin-left:100px">
      <div class="col-md-4 o4ffset-md-4"></div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a class="btn btn-danger" style="margin-left: 30px" href="<?php echo base_url("index.php/Cor_details/index") ?>">Back </a>

      </div>
    </div>

  <?php echo form_close(); ?>
</div>


</body>
</html>
