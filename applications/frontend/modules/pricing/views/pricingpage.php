<!DOCTYPE html>

<html lang="en">



<head>

<meta charset="utf-8">

<title>project Three Columns | VERSO HTML5 Responsive Template</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="">

<meta name="author" content="">

<!-- Le styles -->

<link href="<?php echo base_url(); ?>assets/frontend/assets/css/bootstrap.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/frontend/assets/css/bootstrap-responsive.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/frontend/assets/css/switcher.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/frontend/assets/css/pricing.css" rel="stylesheet"> 

<link href="<?php echo base_url(); ?>assets/frontend/assets/css/font-awesome.min.css" rel="stylesheet"> 

<link href="<?php echo base_url(); ?>assets/frontend/assets/css/social.css" rel="stylesheet"> 

<link href="<?php echo base_url(); ?>assets/frontend/assets/css/style.css" rel="stylesheet" id="colors"><!-- !important THIS STYLE CSS ON BOTTOM OF STYLEs LIST-->

<link href="<?php echo base_url(); ?>assets/frontend/assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>assets/frontend/assets/js/google-code-prettify/prettify.css" rel="stylesheet">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->

<!--[if lt IE 9]>

      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

<!-- Le fav and touch icons -->

<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/assets/ico/faviconkdm.ico">

</head>

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

			  

				<div class="row-fluid">

				  <div class="span12">

					<h1>Pricing tables</h1>

					<!-- BREADCRUMB -->

					<ul class="breadcrumb">

					  <li><a href="#">Home</a> <span class="divider">&rarr;</span></li>

					  <li class="active">Pricing tables</li>

					</ul>

					<!--END: BREADCRUMB -->

				  </div>

				</div>

			  </div>

			 </div>

			</div>

		   </div>

		  </div>

		<!-- PAGE HEADER -->

		

			<!-- ################ -->

		<!-- CONTENT CONTAINER-->

		<!-- ################ -->

	<div class="container">



<!-- PRICING 4 col -->

			<div class="row-fluid">

				<div class="span12">

					<div class="color-bottom-line center">

						<h2 class="line center"><span>Our plans</span></h2>

					</div>

				</div>

			</div>

			<div class="row-fluid">

			<!-- PRICE ITEM --> <!-- JUST CHANGE class="span4" to class="span3" -->

			<div class="span3">

			<div class="pricing-table">

                <div class="pricing-table-header">

				<div class="reflex">

                    <h2>GOLD Plan</h2>

                    <h3>$<span>25</span><span class="mo">/purchase</span></h3>

                </div>

				</div>

                <div class="pricing-table-space"></div>

                <div class="pricing-table-features">

                    <p><strong>7500 bonus</strong> Points</p>

                </div>

                <div class="pricing-table-sign-up">

                  <a href="#" class="btn btn-large btn-info">Buy Now</a>

                </div>

            </div>

			</div>

			<!--END: PRICE ITEM -->



            <!--PRICE ITEM HIGHLIGHTED-->

            <div class="span3">

                <div class="pricing-table pricing-table-highlighted">

                    <div class="pricing-table-header">

                        <div class="reflex">

                            <h2>PREMIUM Plan</h2>

                            <h3>$<span>10</span><span class="mo">/purchase</span></h3>

                        </div>

                    </div>

                <div class="pricing-table-space"></div>

                

                    <div class="pricing-table-text">

                        <p><span class="main-color">RECOMENDED!</span></p>

                    </div>

                <div class="pricing-table-features">

                    <p><strong>500 bonus</strong> Points</p>

                </div>

                <div class="pricing-table-sign-up">

                    <a href="#" class="btn btn-large btn-info">Buy Now</a>

                </div>

            </div>

            </div>

            <!--END: PRICE ITEM HIGHLIGHTED-->

			

			<!-- PRICE ITEM -->

			<div class="span3">

			<div class="pricing-table">

                <div class="pricing-table-header">

				<div class="reflex">

                    <h2>SERENITY Plan</h2>

                    <h3>$<span>5</span><span class="mo">/purchase</span></h3>

                </div>

				</div>

                <div class="pricing-table-space"></div>

                <div class="pricing-table-features">                    

                    <p><strong>250 bonus</strong> Points</p>

                </div>

                <div class="pricing-table-sign-up">

                  <a href="#" class="btn btn-large btn-info">Buy Now</a>

                </div>

            </div>

			</div>

			<!--END: PRICE ITEM -->

			

			<!--PRICE ITEM -->

			<div class="span3">

            <div class="pricing-table">

                <div class="pricing-table-header free-price">

				<div class="reflex">

                    <h2>Subscription</h2>

                    <h3><span class="free">FREE</span></h3>

                </div>

				</div>

                <div class="pricing-table-space"></div>

                <div class="pricing-table-features">

                    <p><strong>1 single</strong> Sender Name</p>

                    <p><strong>1 Email account</strong> to import</p>

                    <p><strong>API</strong> Available</p>

                    <p><strong>SMS</strong> to email</p>

                    <p><strong>MLM</strong> integrated</p>

                    <p><strong>SMS</strong> to email</p>

                    <p><strong>10 free</strong> Points</p>

                    <p><strong>24/7 Unlimited</strong> Support</p>

                </div>

                <div class="pricing-table-sign-up">

                    <a href="#" class="btn btn-large btn-info">Sign Up Now</a>

                </div>

            </div> 

			</div>

			<!--END: PRICE ITEM -->

			

			</div>

<!-- END: PRICING 4 col -->				

    

  

	</div>

		<!-- ################ -->

		<!--END: CONTENT CONTAINER-->

		<!-- ################ -->



<!-- Footer

    ================================================== -->

<?php echo Modules::run('footer'); ?>



<!-- END: FOOTER -->

</div>

<!-- END: MAIN-WRAPPER-->





<!-- Le javascript

    ================================================== --> 

<!-- Placed at the end of the document so the pages load faster --> 



<script src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.js" type="text/javascript"></script> 

<script src="<?php echo base_url(); ?>assets/frontend/assets/js/google-code-prettify/prettify.js" type="text/javascript"></script> 

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

<!-- END BOOTSTRAP SCRIPTS -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.easing.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.transit.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.waitforimages.js"></script> 

<script src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.prettyPhoto.js" type="text/javascript"></script> 

<script src="<?php echo base_url(); ?>assets/frontend/assets/js/superfish.js" type="text/javascript"></script> 

<script src="<?php echo base_url(); ?>assets/frontend/assets/js/custom.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/frontend/assets/js/jquery.ui.totop.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/js/switcher.js"></script>





</body>



</html>

