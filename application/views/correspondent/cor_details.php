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
    <?php
$this->load->helper('form');
$error = $this->session->flashdata('error');

if ($error) {
	?>
            <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <?php echo $error; ?>
             </div>
             <?php }

$success = $this->session->flashdata('success');
if ($success) {
	?>
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
         <?php echo $success; ?>
        </div>
      <?php }

$rej = $this->session->flashdata('rej_news');

if ($rej) {
	?>
        <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $rej; ?>
        </div>
        <?php }

$acc = $this->session->flashdata('acc_news');

if ($acc) {
	?>
        <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $acc; ?>
        </div>
        <?php }?>






    <div class="panel-body">
      <table class="table table-striped" id='repoters_table'>
        <thead>
          <tr>
            <th><a href="#" data-sort="Id">ID</a></th>
            <th><a href="#" data-sort="Name">Name</a></th>
            <th><a href="#" data-sort="username">Username</a></th>
            <th><a href="#" data-sort="district">District</a></th>
            <th>Action</th>
          </tr>

          <tr id="w1-filters" class="filters">

                        <td class="col-lg-2">
                            <input id ="target_1" type="text" class="form-control" name="CorSearch[Id]">
                        </td>
                        <td class="col-lg-2">
                            <input id ="target_2" type="text" class="form-control" name="CorSearch[Name]">
                        </td>
                        <td class="col-lg-2">
                            <input id ="target_3" type="text" class="form-control" name="CorSearch[username]">
                         </td>
                         <td class="col-lg-2">
                             <input id ="target_4" type="text" class="form-control" name="CorSearch[district]">
                          </td>


                            </tr>
        </thead>
        <tbody>
          <?php
foreach ($cor_info->result_array() as $row) {
	?>
            <tr>
              <div class="form-group">
                <td><?php echo $row['repo_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['district']; ?></td>
                <td>



                   <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">View
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                     <li><a href="<?php echo site_url("/cor_details/personal_details/$row[repo_id]") ?>"><b>Personal details</b></a></li>
                      <li><a href="<?php echo site_url("/cor_details/acc_news_details/$row[repo_id]") ?>"><b>Telecasted News details</b></a></li>
                      <li><a href="<?php echo site_url("/cor_details/rej_news_details/$row[repo_id]") ?>"><b>Rejected News</b></a></li>

                    <li><a href="<?php echo site_url("/cor_details/cor_salary/$row[repo_id]") ?>"><b>Salary Details</b></a></li>
                    </ul>



                  <a href="<?php echo site_url("/cor_details/edit_cor/$row[repo_id]") ?>" class="btn btn-success"> Update</a>
                  <a href="<?php echo site_url("/cor_details/delete_cor/$row[repo_id]") ?>"   class="btn btn-danger" onclick="return confirm
                    ('Are you sure  to Delete?')">Delete</a>
                  </div>
                  </td>
                </div>
              </tr>


              <?php
}
?>
          </table>





        </div>

      </div>



    <script>
    $( ".form-control" ).keyup(function(e) {

      var valueField = $(this).attr('id');
      // Declare variables
      var input, filter, table, tr, td,td1, i,td_test;
      input = document.getElementById(valueField.toString());
      filter = input.value.toUpperCase();
      table = document.getElementById("repoters_table");
      tr = table.getElementsByTagName("tr");



  // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        if(valueField == "target_1"){
          td = tr[i].getElementsByTagName("td")[0];
        }
        else if(valueField == "target_2"){
           td = tr[i].getElementsByTagName("td")[1];
        }
        else if(valueField == "target_3"){
           td = tr[i].getElementsByTagName("td")[2];
        }
        else if(valueField == "target_4"){
           td = tr[i].getElementsByTagName("td")[3];
        }

    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }




});
</script>










    </body>
    </html>



