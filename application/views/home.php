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


  <style>
      li.active a {

          background-color: white !important;
          color: black !important;

      }



  </style>



</head>

   <!-- header -->
<body>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/newsapp/application/views/mod/header-sidebar.php'?>





 <div class="col-lg-9" style="background-color: #ffffff;height:100%; margin-left:8px;width: 918px;margin-bottom: 30px">




    <ul class="nav nav-tabs" style="padding:5px">


           <li class="active"><a data-toggle="tab" href="#received" style="margin-left: 30px;margin-right:20px;background-color: #d71921;color: white;width: 150px">Recieved</a></li>
           <li><a data-toggle="tab" href="#pending" style="margin-right:20px;background-color: #d71921;color: white;width: 150px">Pending</a></li>
           <li><a data-toggle="tab" href="#notasigned" style="margin-right:20px;background-color: #d71921;color: white;width: 150px">Not Assigned</a></li>
      </ul>
              <?php
$this->load->helper('form');
$msg = $this->session->flashdata('update_msg');

if ($msg) {
	?>
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <?php echo $msg; ?>
             </div>
             <?php }

$msg1 = $this->session->flashdata('accept_msg');

if ($msg1) {
	?>
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <?php echo $msg1; ?>
             </div>
             <?php }

$msg2 = $this->session->flashdata('reject_msg');

if ($msg2) {
	?>
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <?php echo $msg2; ?>
             </div>
             <?php }

$msg3 = $this->session->flashdata('dlt_msg');

if ($msg3) {
	?>
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <?php echo $msg3; ?>
             </div>
             <?php }
?>






      <div class="tab-content">

        <div id="received" class="tab-pane fade in active">

           <div class="panel panel-default">

                 <div class="panel-body">

                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>Title</th>
                              <th>Venue</th>
                              <th>Date</th>

                              <th>Time</th>
                              <th>Reporter</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                         <tbody>



                        <?php

foreach ($rec_newsinfo->result_array() as $row) {
	?>
                           <tr>
                              <div class="form-group">
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['venue']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['time']; ?></td>
                                    <td> <a href="<?php echo site_url("/cor_details/personal_details/$row[repo_id]") ?>"><?php echo $row['repo_id']; ?></a></td>


                                    <td><a class="btn btn-info" href="<?php echo site_url("/home/view_news/$row[news_id]") ?>">View & Take Action</a>
                              </div>
                           </tr>


                            <?php }?>
                     </table>

                  </div>

               </div>

        </div>






                 <div id="pending" class="tab-pane fade">

                  <div class="panel panel-default">
                  <div class="panel-body">

                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>Title</th>
                              <th>Venue</th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Reporter</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                         <tbody>



                        <?php

foreach ($as_newsinfo->result_array() as $row) {
	?>
                           <tr>
                              <div class="form-group">

                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['venue']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['time']; ?></td>
                                    <td> <a href="<?php echo site_url("/cor_details/personal_details/$row[repo_id]") ?>"><?php echo $row['repo_id']; ?></a></td>

                                    <td><a class="btn btn-info" href="<?php echo site_url("/home/view_news/$row[news_id]") ?>"> View & Take Action </a>



                              </div>
                           </tr>


                            <?php }?>
                     </table>
                  </div>

               </div>



                 </div>




                 <div id="notasigned" class="tab-pane fade">
                    <div class="panel panel-default">
                  <div class="panel-body">

                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>Title</th>
                              <th>Venue</th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                         <tbody>



                         <?php

foreach ($p_newsinfo->result_array() as $row) {
	?>
                           <tr>
                              <div class="form-group">
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['venue']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['time']; ?></td>


                                    <td><a class="btn btn-info" href="<?php echo site_url("/home/view_news/$row[news_id]") ?>">View & Take Action</a>



                              </div>
                           </tr>


                            <?php }?>
                     </table>

                  </div>

               </div>

                 </div>
     </div>



</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>
</html>








