<?php
if (!($this->session->userdata('loggedin'))) {
	redirect('Login/LoginUser');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>News Together Admin Panel</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/application/views/mod/sidebar.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/side_bar_style.css" />
</head>

<body>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/newsapp/application/views/mod/header-sidebar.php'?>

  <h1> Add News Item </h1>

<div class="panel panel-default">

          <?php
$this->load->helper('form');
$msg = $this->session->flashdata('add_news');

if ($msg) {
	?>
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <?php echo $msg; ?>
             </div>
             <?php }
?>









  <div class="panel-body">


    <form method='get' onsubmit="return confirm('Add this news item?');" action='<?php echo site_url("/add/add_news") ?>'>

        <div class="form-group">
      <label for="name">Title:</label>
      <input type="text" class="form-control" name="title" required="">
    </div>

    <div class="form-group">
      <label for="venue">Venue:</label>
      <input type="text" class="form-control" name="venue" required="">
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" name="description" required="">
    </div>

    <div class="form-group">
      <label for="date">Date :</label>
      <input type="date" class="form-control" name="date" required="">
    </div>

    <div class="form-group">
      <label for="time">Time :</label>
      <input type="time" class="form-control" name="time" required="">
    </div>

    <div class="form-group">
      <label for="district">District</label>
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

    <div class="form-group">
      <label for="date">Due Date :</label>
      <input type="date" class="form-control" name="due_date" required="">
    </div>

    <div class="form-group">
      <label for="time">Due Time :</label>
      <input type="time" class="form-control" name="due_time" required="">
    </div>



    <input type='submit' class='btn btn-success' value='Add News Item' id='submit'>

</form>
    </div>
</div>
</div>

</body>
</html>