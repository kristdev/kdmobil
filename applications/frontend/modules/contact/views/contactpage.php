<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>KDMobil| Contact us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/switcher.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/font-awesome.min.css" rel="stylesheet"> 
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/social.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/pricing.css" rel="stylesheet"> 
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/style.css" rel="stylesheet" id="colors"><!-- !important THIS STYLE CSS ON BOTTOM OF STYLEs LIST-->
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/frontend/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/assets/ico/faviconkdm.ico">
<body>
<!--START MAIN-WRAPPER--> 
<div class="main-wrapper">
<!-- ################-->
 <!-- START TOP MENU -->
  <?php echo Modules::run('topmenu'); ?>
 <!-- END TOP MENU -->
 <!-- ################-->
<!-- PAGE HEADER -->
<div class="page-header">
	<div class="shine">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
      
            <h1>Contact us</h1>
			<!-- BREADCRUMB -->
			<ul class="breadcrumb">
			  <li><a href="#">Home</a> <span class="divider">&rarr;</span></li>
			  <li class="active">Contact info</li>
			</ul>
			<!--END: BREADCRUMB -->
        
      </div>
	 </div>
    </div>
   </div>
  </div>
<!-- PAGE HEADER -->
<div class="container">
<!-- CONTENT CONTAINER -->
			<div class="container">
			<div class="row">
			
			<div class="span12">
			<div class="color-bottom-line center">
						<h2 class="line center"><span><i class="fa-icon-map-marker main-color"></i> Our location</span></h2>
					</div>
			
			<!-- MAP DIV // !Don't remove this !Important -->
			<!-- MAP DIV // !Don't remove this !Important -->
			<div id="map"></div>
			<!-- MAP DIV // !Don't remove this !Important -->
			<hr class="half">
			</div>
			<!-- MAP DIV // !Don't remove this !Important -->
			
			<div class="span4">
					<div class="color-bottom-line">
						<h3 class="standart-h3title"><i class="fa-icon-pushpin main-color"></i> Our Office</h3>
					</div>
					<div class="">
					<div class="well">
						<address>
						  <strong>KDMobil, Inc.</strong><br>
						  <i class="fa-icon-map-marker"></i> Bonamoussadi, Fin goudron Afrique Du sud<br>
						  BP: 12113, Dla<br>
						  <i class="fa-icon-phone-sign"></i> + 237(99) 92-57-40
						  <div class="foot-line"></div>
						  
						</address>
					</div>	
								
									
								<h3 class="standart-h3title"><i class="fa-icon-share main-color"></i> Stay in touch</h3>
								
								<div class="well">
			<div class="widget_nav_menu"> 
				<ul class="socialIcons">
						<li class="facebook"><a href="#">facebook </a></li>
				<li class="linkedin"><a href="#">linkedin </a></li>
				<li class="twitter"><a href="#">twitter</a></li>
				<li class="digg"><a href="#">digg</a></li>
				<li class="yahoo1"><a href="#">yahoo1</a></li>
				<li class="googleplus"><a href="#">googleplus</a></li>
				<li class="skype"><a href="#">skype</a></li>
				<li class="youtube"><a href="#">youtube</a></li>
				<li class="rss"><a href="#">rss </a></li>
				<li class="phone"><a href="#">phone </a></li>
				<li class="email"><a href="#">email </a></li>
				<!-- <li class="dribble"><a href="#">dribble </a></li> -->
				<!-- JUST UNCOMMENT ICONS THAT YOU NEED-->
				<!--<li class="blogger"><a href="#">blogger </a></li>
				<li class="homeicon"><a href="#">homeicon</a></li>
				<li class="phone"><a href="#">phone </a></li>
				<li class="email"><a href="#">email </a></li>
				<li class="picassa"><a href="#">picassa </a></li>
				<li class="livejournal"><a href="#">livejournal </a></li>
				<li class="bebo"><a href="#">bebo </a></li>
				<li class="technorati"><a href="#">technorati </a></li>
				<li class="newsvine"><a href="#">newsvine</a></li>
				<li class="wordpress"><a href="#">wordpress </a></li>
				<li class="yelp"><a href="#">yelp </a></li>-->
                   </ul>
				</div>
				</div>
				</div>								
									
								
						
						
				</div>
				<div class="span8">
				
			<h3 class="standart-h3title"><i class="fa-icon-envelope-alt main-color"></i> Feel free to contact us</h3>
			<!-- CONTACT FORM -->
			<form id="ajax-contacts" action="<?php echo base_url(); ?>contact/sending" method="POST">
				<label>Name</label>
				<input class="span8" type="text" name="name" value=""><br>
				<?php if(form_error('name')) echo form_error('name', '<div class="alert alert-error">', '</div>'); ?>

				<label>E-Mail</label>
				<input class="span8" type="text" name="email" value=""><br>
				<?php if(form_error('email')) echo form_error('email', '<div class="alert alert-error">', '</div>'); ?>

				<label>Subject</label>
				<input class="span8" type="text" name="subject" value=""><br>
				<?php if(form_error('subject')) echo form_error('subject', '<div class="alert alert-error">', '</div>'); ?>

				<label>Comments</label>
				<textarea class="span8" name="message" rows="5" cols="25"></textarea><br>
				<?php if(form_error('message')) echo form_error('message', '<div class="alert alert-error">', '</div>'); ?>

				<label>&nbsp;</label><input class="btn btn-large btn-info" type="submit" name="submit" value="Send Message"><br>

				<?php 
					if(isset($msg_confirm)){
						echo $msg_confirm;
					}
				?>
			</form>
				
			<!-- END CONTACT FORM -->				
				
				</div>
			</div>
		
		
				
	</div>
</div>
<!-- END CONTENT CONTAINER -->
<!-- Footer
    ================================================== -->
<?php echo Modules::run('footer'); ?>
<!-- END: FOOTER -->
</div>
<!-- END: MAIN-WRAPPER-->

<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/google-code-prettify/prettify.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-transition.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-alert.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-modal.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-dropdown.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-scrollspy.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-tab.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-tooltip.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-popover.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-button.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-collapse.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-carousel.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-typeahead.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-affix.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/application.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.easing.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/superfish.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/custom.js" type="text/javascript"></script><script src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.ui.totop.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/switcher.js"></script>
<!-- gMap PLUGIN -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.gmap.js"></script>

<script type="text/javascript">
		
				jQuery(document).ready(function(){

				jQuery('#map').gMap({ address: 'Bonamoussadi, Douala, Cameroun',
							   panControl: true,
						   zoomControl: true,
							   zoomControlOptions: {
					style: google.maps.ZoomControlStyle.SMALL
							   },
						   mapTypeControl: true,
						   scaleControl: true,
						   streetViewControl: false,
						   overviewMapControl: true,
							   scrollwheel: true,
							   icon: {
						image: "http://www.google.com/mapfiles/marker.png",
						shadow: "http://www.google.com/mapfiles/shadow50.png",
						iconsize: [20, 34],
						shadowsize: [37, 34],
						iconanchor: [9, 34],
						shadowanchor: [19, 34]
					},
						zoom:14,
							   markers: [
							{ 'address' : 'Sidney'}
						]
							   
							   
							   }); 
				});



</script>
</body>


</html>
