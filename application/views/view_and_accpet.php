
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
      #accept_news {

           box-shadow: inset 0 -1px 1px rgba(5,0,0,.5);
           padding: 10px;
          

      }

      .division{
		  width:50%;
		  height:35%;
		  float:left;
		  box-shadow: inset 0 -1px 1px rgba(5,0,0,.5);
          padding: 10px;
	}

	.div1{
		width:50%;
		float:left;
		box-shadow: inset 1 -1px 1px rgba(5,0,0,.5);
        padding: 10px;
	}

      input{
      	
      	padding:10px;
      	margin: 10px;

      }

      div.panel.panel-default{
        padding:10px;
      }

      div.col-lg-9{
      	padding:10px;
      	background-color: #ffffff;
      }



  </style>


  <script type="text/javascript">
    function confirm_accept() {
    return confirm('Are you sure, you want to accept?');
    }
  </script>

  


</head>

   <!-- header -->
<body>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/newsapp/application/views/mod/header-sidebar.php') ?>


<div class="panel panel-default">

	<div class="panel-body">

	<div class="panel-body">
		
		<div>

		<div class='div1'>
		<h4> News Information </h4>
		<?php foreach ($viewnews->result_array() as $row) ?>	

		News ID:<label class="form-control"><?php echo $row['news_id']; ?></label><br>
		Title:<label class="form-control"> <?php echo $row['title']; ?></label><br>
		Venue:<label class="form-control"> <?php echo $row['venue']; ?></label><br>
		Description: <label class="form-control"> <?php echo $row['description']; ?></label><br>
		District: <label class="form-control"> <?php echo $row['district']; ?></label><br>
		Date:<label class="form-control"> <?php echo $row['date']; ?></label><br>
		Time:<label class="form-control"><?php echo $row['time']; ?></label><br>
		Correspondent Id: <label class="form-control"><?php echo $row['repo_id']; ?></label></div>

		 <div class='div1'>
		 <h4> Correspondent Report </h4>
		 Description:<label class="form-control"><?php echo $row['repo_description']; ?></label><br>
		 News Coverage Files: <label class="form-control"><?php echo $row['ftp_file']; ?></label>
		 <a class="btn btn-warning" href='<?php echo site_url("/home/download_ftp/$row[ftp_file]") ?>' target="_blank">Download</a>
		</div>
		  </div>

		 </div>

		 <hr>

		 <div id='accept_reject'>

			 <div id='accept' class='division'>

					<form method='GET' onsubmit="return confirm('Are you sure you want to add this news item to accepted news?');" action='<?php echo site_url("/home/accept_ctrl/$row[news_id]") ?>'>
						
						
			  			Telecast Date  <input type="date" name="tele_date" required=""> <br>

						<input type="hidden" name="tele[0]" value="No"> 
			  			<input type="checkbox" name="tele[0]" value="Yes" class="accept_checkbox">Ada Derana News 
			  			


			  			<input type='submit' class='btn btn-success' value='Accept' id='submit'>
			  			<br>
			  			<input type="Hidden" name="tele[1]" value="No" >
			  			<input type="checkbox" name="tele[1]" value="Yes" class="accept_checkbox"> News 24/7
			  			 
			  			
					</form>
			</div>

			<div id='reject' class='division'>
					<form method='GET' onsubmit="return confirm('Are you sure you want to Reject this news?');" action='<?php echo site_url("/home/reject_ctrl/$row[news_id]") ?>'>
					Reason for Rejection: <input type="text" name="reason" value='No Reason Given' required=''><br>
					<input type='submit' class='btn btn-danger' value='Reject' id="reject_button">
				</form>
		</div>
	</div>
		
   </div>
   


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Check Box Validation -->

<script> 
  var $accept = $('#submit');
		$checkbox = $('input[type=checkbox]');

		$accept.prop('disabled', true);

		$checkbox.on('click', function(){
		    if ($("input:checkbox:checked").length > 0) {
		        $accept.removeAttr('disabled');
		    }else{
		        $accept.prop('disabled', true);
		    }
});

</script>
</body>
</html>

