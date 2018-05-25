<div class="header" style="background-color:#fff;height: 70px;margin: 15px;">
   <img src="<?php echo base_url(); ?>images/logo.png" style="width:200px;height:80px; margin-top:5px ;margin-left:50px; float:left">
   <a class="btn btn-danger" href="<?php echo base_url('index.php/Login/LogoutUser'); ?>" style="float:right; margin-top:20px; margin-right:20px; padding:10px; ">Logout</a>
</div >

<div class="container-fluid">
   <div>



   		<div id="sidebar">
			<ul>
			   <li><a href="<?php echo base_url(); ?>/index.php/home/" ><span>Home</span></a></li>
			   <li class="sub"><a href="#"><span>News</span></a>
			      <ul>
			         <li id=span><a  href="<?php echo base_url(); ?>/index.php/add"><span>Add News Task</span></a></li>

			      </ul>
			   </li>
			   <li class="sub"><a href="#"><span>Correspondent</span></a>
			      <ul>
			         <li><a  href="<?php echo base_url(); ?>/index.php/Registration/"><span>Add New</span></a></li>
			         <li><a  href="<?php echo base_url(); ?>/index.php/Cor_details"><span>View Correspondents</span></a></li>
			      </ul>
			   </li>
			   <li class="sub"><a href="#"><span>Reports</span></a>
			      <ul>
			         <li><a  href="<?php echo base_url(); ?>/index.php/Reports/select_rejected"><span>Rejected News</span></a></li>
			         <li><a  href="<?php echo base_url(); ?>/index.php/Reports/select_telecasted"><span>Telecasted News</span></a></li>
			         <li><a  href="<?php echo base_url(); ?>/index.php/Reports/select_summary"><span>Monthly Summary</span></a></li>
			      </ul>
			   </li>

			    <li><a href="<?php echo base_url(); ?>/index.php/config/" ><span>Settings</span></a></li>

			</ul>
		</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#sidebar > ul > li.sub > a').on('click', function(tabf)  {

        var checkElement = $(this).next();

        if((checkElement.is('ul')) && (checkElement.is(':visible')))
        {
        	jQuery(checkElement).slideDown('normal');
    	}

    	if((checkElement.is('ul')) && (!checkElement.is(':visible')))
        {-3
        	jQuery('#sidebar ul ul:visible').slideUp();
        	jQuery(checkElement).slideDown('normal');
    	}


        tabf.preventDefault();
    });
});

</script>

   <div class="col-lg-9" style="background-color: #ffffff;height:100%; margin-left:8px;width: 918px;margin-bottom: 30px">