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

 <?php
$this->load->helper('form');

$success = $this->session->flashdata('success');
if ($success) {
	?>
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
         <?php echo $success; ?>
        </div>
      <?php }?>




  <?php echo validation_errors(); ?>
  <?php echo form_open_multipart('Registration/regUser'); ?>
    <h1 style="text-align: center;margin-bottom:25px;color:#d71921">Correspondent registration</h1>


     <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Name" name="name" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="nic" class="col-sm-2 col-form-label">NIC No</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nic"  minlength="10" maxlength="12" placeholder="NIC" name="nic" required="">
      </div>
    </div>
     <div class="form-group row">
      <label  class="col-sm-2 col-form-label">District </label>
      <div class="col-sm-10">
      <select class="form-control"  name="district">
                                        <option >Ampara</option>
                                        <option >Anuradhapura</option>
                                        <option >Badulla</option>
                                        <option >Batticaloa</option>
                                        <option selected>Colombo</option>
                                        <option >Galle</option>
                                        <option >Gampaha</option>
                                        <option >Hambantota</option>
                                        <option >Jaffna</option>
                                        <option >Kalutara</option>
                                        <option >Kandy</option>
                                        <option >Kegalle</option>
                                        <option >Kilinochchi</option>
                                        <option >Kurunegala</option>
                                        <option >Mannar</option>
                                        <option >Matale</option>
                                        <option >Matara</option>
                                        <option >Monaragala</option>
                                        <option >Mullaitivu</option>
                                        <option >Nuwaraeliya</option>
                                        <option >Polonnaruwa</option>
                                        <option >Puttalam</option>
                                        <option >Ratnapura</option>
                                        <option >Trincomalee</option>
                                        <option >Vavuniya</option>
                                                    </select>




    </div>
    </div>

    <div class="form-group row">
      <label for="address" class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="address" placeholder="Address" name="address" required="">

    </textarea>
      </div>
    </div>
    <div class="form-group row" >
      <label for="mobile" class="col-sm-2 col-form-label">Mobile No.</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mobile" placeholder="Mobile No" name="mobile" minlength="10" maxlength="10" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
      </div>
    </div>

    <div class="form-group row">
      <label for="Password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="Password" placeholder="Password" name="password" required="">
      </div>
    </div>
    <div class="form-group row">
      <label for="passwordAgain" class="col-sm-2 col-form-label">Password Again</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="passwordAgain" placeholder="Password again" name="passwordAgain" required="">
      </div>
    </div>
 <!--   <div class="form-group row">
      <label for="image" class="col-sm-2 col-form-label">Image</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="image" name="image">
      </div>
    </div> -->

    <div class="form-group row" style="margin-top: 30px">
      <div class="col-md-4 o4ffset-md-4"></div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a class="btn btn-info" style="margin-left: 20px" href="<?php echo base_url("index.php/Registration") ?>">Reset </a>
        <a class="btn btn-danger" style="margin-left: 20px" href="<?php echo base_url("index.php/home") ?>">Back </a>

      </div>
    </div>

  <?php echo form_close(); ?>
</div>


</body>
</html>
