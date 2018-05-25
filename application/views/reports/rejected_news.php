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




       <div class="panel panel-default">



                  <div class="panel-body">

                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>News ID</th>
                              <th>Reporter ID</th>
                              <th>Reason</th>
                               <th>Date</th>


                           </tr>
                        </thead>
                         <tbody>



                         <?php

foreach ($rej_news_info->result_array() as $row) {
	?>
                           <tr>
                              <div class="form-group">
                                    <td><?php echo $row['news_id']; ?></td>
                                    <td><?php echo $row['repo_id']; ?></td>
                                    <td><?php echo $row['reason']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><a class="btn btn-info" href="<?php echo site_url("/cor_details/view_acc_rej/$row[news_id]") ?>"> View </a> </td>



                              </div>
                           </tr>


                            <?php }?>
                     </table>

                  </div>

               </div>














</body>
</html>
