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
  <script type="text/javascript" src="<?php echo base_url('public/js/cor_search.js'); ?>"></script>



</head>

<body>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/newsapp/application/views/mod/header-sidebar.php'?>
      <div class="panel panel-default" style="margin-top: 20px">
         <div class="panel-heading">
            <p class="panel-title">News Information</p>
         </div>
       <div class="panel-body">





      <label class="form-control">News ID: <?php echo $news_info->news_id ?></label>
      <label class="form-control">News Title: <?php echo $news_info->title; ?></label>
      <label class="form-control">District :<?php echo $news_info->district; ?></label>
      <label class="form-control">venue: <?php echo $news_info->venue; ?></label>

      <label class="form-control">Date: <?php echo $news_info->date; ?></label>
      <label class="form-control">Time: <?php echo $news_info->time; ?></label>
      <label class="form-control">Description <?php echo $news_info->description; ?></label>

   <!--    <a href="<?php echo base_url('index.php/cor_details'); ?>" class="btn btn-danger" style="margin-top: 15px ">Back</a>  -->


      </div>
    </div>
</body>
</html>