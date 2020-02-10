<!--END pada Session by RIO-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Station Shop</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/adminstyle.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/navi.css" media="screen" />
<script type="text/javascript" src="<?php echo base_url();  ?>js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
<style>
	
	.hide{ display:none !important;  /*visibility:hidden;*/ }


</style>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
				<!--Dimodify pada Session by RIO-->
				<p>Welcome, <strong><?php if($this->session->has_userdata("username")){ ?><?php echo $this->session->userdata("username"); } ?></strong> [ <a href="<?php echo base_url('Login/Logout'); ?>">logout</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
               
                
					<p><strong></p>
				</div>
			</div>
		</div>
		<div id="nav"> <?php #ini adalah menu ?>
			<ul>
				<li class="upp"><a href="<?php echo base_url('Admin'); ?>#">Instansi</a>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<div id="sidebar">
			<div class="box">
				<div class="h_title">&#8250; Menu Content</div>
				<ul id="home">
					<li class="b1"><a class="icon page" href="<?php echo base_url('Admin'); ?>">Instansi </a></li>
				</ul>
			</div>
		</div>
        
        
        
		<div id="main">
        
        
		  <div class="clear"></div>
          <div class="full_w">
				<div class="h_title">Manage pages - table</div>
				  <?php 
					  if (isset($content_page)) {
						  $this->load->view("admin/" . $content_page);
					  }
				  ?>
				</div>
			    
			
			
		</div>
            
            
         
            
	  </div>
	 <div class="clear"></div>
	</div> <?php ?> 
    
    	<?php
			
			// akhir dari product_admin.php
		
		?>

	<div id="footer">
		<div class="left">
			<p>Design: <a href="<?php echo base_url(); ?>http://kilab.pl">Paweł Balicki</a> | Admin Panel: <a href="<?php echo base_url(); ?>">YourSite.com</a></p>
		</div>
		<div class="right">
			<p><a href="<?php echo base_url(); ?>">Example link 1</a> | <a href="<?php echo base_url(); ?>">Example link 2</a></p>
		</div>
	</div>
</div>

</body>
</html>
