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
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/side_bar_style.css" />

<style>
  #btn {
    margin:10px;
    padding:10px;
  }
</style>

</head>

<body>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/newsapp/application/views/mod/header-sidebar.php'?>

<div class="panel panel-default">
  <div class="panel-body">

    <?php foreach ($viewnews->result_array() as $row) {
	;
}
?>

    <form method='get' onsubmit="return confirm('Are you sure you want to Update this news item?');" action='<?php echo site_url("/home/update/$row[news_id]") ?>'>


    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">News ID:</label>
      <div class="col-sm-10"><input type="text" class="form-control" name="news_id" value=<?php echo $row['news_id']; ?> required="" disabled></div>
    </div>

        <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Title:</label>
      <div class="col-sm-10"><input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" required=""></div>
    </div>

    <div class="form-group row">
      <label for="venue" class="col-sm-2 col-form-label">Venue:</label>
     <div class="col-sm-10"> <input type="text" class="form-control" name="venue" value="<?php echo $row['venue']; ?>" required=""></div>
    </div>

    <div class="form-group row">
      <label for="description" class="col-sm-2 col-form-label">Description:</label>
     <div class="col-sm-10"> <input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>" required=""></div>
    </div>

    <div class="form-group row">
      <label for="date" class="col-sm-2 col-form-label">Date :</label>
     <div class="col-sm-10"> <input type="date" class="form-control" name="date" value="<?php echo $row['date']; ?>"required=""></div>
    </div>

    <div class="form-group row">
      <label for="time" class="col-sm-2 col-form-label">Time :</label>
     <div class="col-sm-10"> <input type="time" class="form-control" name="time" value="<?php echo $row['time']; ?>" required=""></div>
    </div>

     <div class="form-group row">
      <label  class="col-sm-2 col-form-label">District </label>
      <div class="col-sm-10">
      <select class="form-control"  name="district" >
      <?php
$array = array("Ampara", "Anuradhapura", "Badulla", "Batticaloa", "Colombo", "Galle", "Gampaha", "Hambantota", "Jaffna", "Kalutara", "Kandy", "Kegalle", "Kilinochchi", "Kurunegala", "Mannar", "Matale", "Matara", "Monaragala", "Mullaitivu", "Nuwaraeliya", "Polonnaruwa", "Puttalam", "Ratnapura", "Trincomalee", "Vavuniya");
foreach ($array as $district) {
	if ($district == $row['district']) {
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
      <label for="date" class="col-sm-2 col-form-label">Due Date :</label>
     <div class="col-sm-10"> <input type="date" class="form-control" name="due_date" value="<?php echo $row['due_date']; ?>" required=""></div>
    </div>

    <div class="form-group row">
      <label for="time" class="col-sm-2 col-form-label">Due Time :</label>
     <div class="col-sm-10"> <input type="time" class="form-control" name="due_time" value="<?php echo $row['due_time']; ?>"required=""></div>
    </div>
    <div class="form-group row">
      <?php !isset($row['repo_id']) && $row['repo_id'] = 'Correspondent Not Asigned';?>
      <label for="time" class="col-sm-2 col-form-label">Correspondent ID :</label>
     <div class="col-sm-10"> <input type="text" class="form-control" name="repo_id" value="<?php echo $row['repo_id']; ?>" required="" disabled></div>
    </div>


    <div id='btn'>
    <input type='submit' class='btn btn-warning' value='Update' id='btn' >


    <form method='GET' onsubmit="return confirm('Deleting a News Item is irreversible. Do you want to proceed?');" action='<?php echo site_url("/home/delete_news/$row[news_id]") ?>'>
          <input type='submit' class='btn btn-danger' value='Delete' id="btn">
        </form>
      </div>

</form>
    </div>
</div>
</div>

</body>
</html>