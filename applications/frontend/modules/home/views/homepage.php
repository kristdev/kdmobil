<!DOCTYPE html>
<html lang="en">

<!-- Html structure modified by kristdev -->
<head>
<meta charset="utf-8">
<title>KDMobil, First SMS & VOIP web app</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="kdmobil is a SMS and voip web app for individuals, resellers and developpers.">
<meta name="author" content="kristdev">
<!-- Le styles -->

<link href="<?php echo base_url(); ?>assets/frontend/assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/flexslider.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/switcher.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/parallax_slider/style.css" rel="stylesheet">
<noscript>
	<link rel="stylesheet" type="text/css" href="css/parallax_slider/nojs.html" />
</noscript>
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/font-awesome.min.css" rel="stylesheet"> 
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/social.css" rel="stylesheet"> 
<link href="<?php echo base_url(); ?>assets/frontend/assets/css/style.css" rel="stylesheet" id="colors"><!-- !important THIS STYLE CSS ON BOTTOM OF STYLEs LIST-->




<!--[if lt IE 7]>
	<link href="<?php echo base_url(); ?>assets/frontend/assets/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
    <!-- Fav and touch icons -->

<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/assets/ico/faviconkdm.ico">
</head>
<body>
<!--START MAIN-WRAPPER--> 
<div class="main-wrapper">
	<!-- START HEADER headertop -->
	<div class="headertop needhead">
		<!-- BLURED BACKGROUND-->
		<div class="action-banner-bg"></div>
		<!-- END BLURED BACKGROUND-->
		
		<!-- PIXEL BG DOTTS UNDER BLURED BACKGROUND-->
		<div class="action-banner-bg-top"></div>
		<!-- END PIXEL BG DOTTS UNDER BLURED BACKGROUND-->
 
  <!-- ################-->
 <!-- START TOP MENU -->
 <?php echo Modules::run('topmenu'); ?>
 <!-- END TOP MENU -->
 <!-- ################-->
 
<!-- SLIDER START-->
	<?php echo Modules::run('bannerslide'); ?>
	<!-- SLIDER [END]-->

	<!-- SOCIAL PANEL UNDER MENU-->
	 <?php echo Modules::run('socialpannel'); ?>
	<!--END SOCIAL PANEL UNDER MENU-->
	</div>
	<!-- END HEADER headertop -->
	
	<!-- MAIN CONTENT CONTAINER -->
	<div class="container">
  
  
    <!--<h2 class="line center"> <span>Best features!</span></h2>-->
	<div class="row-fluid">
		<hr class="half">
		<h2 class="center standart-h2title "> <span class="large-text"><span class="main-color">What</span> we offer</span>
		</h2>
		<hr class="half">
	</div>
	<!-- START MARKETING DIV-->
	<div class="marketing">
	
		<div class="row-fluid">
			<!-- FEATURE ITEM-->
			<div class="span3">
				<i class="fa-icon-fullscreen fa-icon-xxlarge main-color"></i>
				<h3 class="features-title"> <span class="firstword">SMS</span> App</h3>
				<p class="features"> <strong>Web to SMS </strong> Our Web to SMS service enables you to send SMS’s to individuals and groups using the BulkSMS web based SMS messaging platform.</p>
				<p class="features"> <strong>SMS to web</strong> You can send bulk sms through GSM network. It is sufficient to send one SMS to a server with a query that will show her how to send the message group</p>
			</div>
			<!-- END FEATURE ITEM-->
			<!-- FEATURE ITEM-->
		<div class="span3">
			<i class="fa-icon-tint fa-icon-xxlarge main-color"></i>
			<h3 class="features-title"> <span class="firstword">VOIP  </span>App</h3>
			<p class="features"> <strong>Make a Call from browser</strong> Once you login with your email & password, you will see our browser based phone. To make a call, dial a number (countrycode-phonenumber, e.g. 18585551212 to dial a number in USA) and click on the green call button. You might be prompted to give access to the microphone and speaker for which you should select "Allow". You can call to any landlines, phones or mobiles directly from PC. It's recommended to use a headset fo.</p>
		</div>
		<!-- END FEATURE ITEM-->
		<!-- FEATURE ITEM-->
		<div class="span3"> 
			<i class="fa-icon-thumbs-up fa-icon-xxlarge main-color"></i>
			<h3 class="features-title"> <span class="firstword">Email</span> Import</h3>
			<p class="features"><strong>Email to SMS</strong> Our Email to SMS service enables you receive email (Yahoo, Gmail, etc) as SMS messages. It is a powerful tool for office communication.</p>
		</div>
		<!-- END FEATURE ITEM-->
		<!-- FEATURE ITEM-->
		<div class="span3"> 
			<i class="fa-icon-spinner fa-icon-spin fa-icon-xxlarge main-color"></i>
			<h3 class="features-title"> <span class="firstword">MLM</span> Tools</h3>
			<p class="features"> Invite friends, talk to colleagues and earn points. More friends call and send sms, you earn more points. Then convert your points into money, order a payment.</p>
		</div>
		<!-- FEATURE ITEM-->
    </div>
	
    <hr class="half"> 
	<!-- CALL TO ACTION -->
	<div class="row-fluid">
		<div class="span12">
			<div class="well">
				<p class="land left">
				<span class="main-color">KDMOBIL</span> everywhere by GSM network.
				</p>
			
			</div>
		</div>
	</div>
	<!-- END CALL TO ACTION -->
	<hr class="half">
   
   <div class="row">
   
	  <!--- ########### ## -->
	  <!--- PORTFOLIO ROTATOR ## -->
	  <?php echo Modules::run('showcase'); ?>
	  <!--- END: PORTFOLIO ROTATOR ## -->
	  <!--- ########### ## -->
	  
	  
	  <!--- ########### ## -->
	  <!--- IN THE NEWS ## -->
	  <?php echo Modules::run('lastnews'); ?>
	  <!--- END: IN THE NEWS ## -->
	  <!--- ########### ## -->
    
  </div>
  </div>
  
  <!--- CLIENTS ROTATOR ## -->
  
  <div class="row-fluid">
  <!--****************-->
	<!-- CLIENTS ROTATOR -->
	<?php echo Modules::run('clients'); ?>
	<!-- END CLIENTS ROTATOR -->
	<!--****************-->

  </div>
  <!---END: CLIENTS ROTATOR ## -->
</div>
<!-- END MAIN WRAPPER-->
<!-- Footer
    ================================================== -->
<?php echo Modules::run('footer'); ?>
<!-- END FOOTER -->
<!--[END] MAIN WRAPPER-->
</div>	
<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 


<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/modernizr.custom.28468.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-transition.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-alert.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-modal.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-dropdown.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-scrollspy.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-tab.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-tooltip.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-popover.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-button.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-collapse.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-carousel.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-typeahead.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/bootstrap-affix.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/application.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.easing.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/superfish.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/custom.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.ui.totop.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/switcher.js"></script>



					<!-- SLIDER -->
						<script type="text/javascript">
			jQuery(document).ready(function($){
	
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 50
				});

			});
		</script>	
					<!--END: SLIDER -->
				
					<!--PORTFOLIO SLIDER -->
					<script>
					  // Can also be used with jQuery(document).ready()
					  jQuery(window).load(function() {
					  jQuery('.portfolio_rotator').flexslider({
						animation: 'slide',
						animationLoop: false,
						useCSS: false,
						controlNav: false,
						controlsContainer: '.portfolio-controls',
						easing: 'easeInOutSine',
						animationSpeed:'500',
						touch: true,
						minItems: 1,
						maxItems: 30,
						mousewheel:false,
						pauseOnHover:true,
						itemWidth:170,
						itemMargin: 30,
						move:1,
					
						
					  });
					});
					  
					</script>
					
					<!--END: SLIDER -->
					
					<!--CLIENT SLIDER -->
					<script>
					  // Can also be used with jQuery(document).ready()
					  jQuery(window).load(function() {
					  jQuery('.clients_rotator_widget_wrap').flexslider({
						animation: 'slide',
						animationLoop: false,
						useCSS: false,
						controlNav: false,
						controlsContainer: '.flex-controls-cl',
						easing: 'easeInOutSine',
						animationSpeed:'200',
						touch: true,
						minItems: 1,
						maxItems: 30,
						itemWidth: 170,
						itemMargin: 30,
						mousewheel:false,
						pauseOnHover:true,
						move:5,
					  });
					});
					  
					</script>

					
					<!--END: SLIDER -->
					
					
</body>

<!-- By pambe aba franck serge -->
</html>
