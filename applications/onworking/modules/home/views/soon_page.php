<!doctype html>
<!-- Html structure by kristdev -->
<html lang="en">
<head>
	<!-- Début meta -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kdmobil, Bulk sms website for individuals, resellers, developpers and white labbel">
    <meta name="author" content="kristdev">

	<!-- titre de document -->
	<title>the First web app about SMS and Voip</title>
	<!-- liens css -->

	<!-- Themes style -->
    <link href="<?php echo base_url(); ?>assets/underconstruction/css/style.css" rel="stylesheet">

    <!-- Font Awesome core CSS -->
    <link href="<?php echo base_url(); ?>assets/underconstruction/css/font-awesome.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/underconstruction/images/favicon/kdmobil-ico.ico" rel="shortcut icon">

	<!-- Javascript -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr Scripts -->
    <script src="<?php echo base_url(); ?>assets/underconstruction/js/modernizr-2.7.1.min.js"></script>

</head>
<body>
	<!-- Jumbotron -->
    <div class="jumbotron">

      <div class="container">

        <!-- Title -->
        <h1>We're coming soon...</h1>

        <!-- Description -->
        <p>Welcome! We are not yet ready, our teams work continuously to give you satisfaction. Thank you for your patience!</p>

      </div> <!-- /.container -->
      
      <!-- Incude Module countdown -->
      <?php echo Modules::run('mod_countdown'); ?>
      <!-- fin module countdown -->


      <div class="custom-container">

        <!-- Incude Module Newsletter -->
        <?php echo Modules::run('mod_newsletter'); ?>
        <!-- fin module Newsletter -->

      </div> <!-- /.custom-container -->

    </div> <!-- /.jumbotron -->


    <!-- Contact Wrapper -->
    <div class="contact">

      <div class="custom-container">
        <!-- Title -->
        <h2>Give us some feedback</h2>

        <!-- Description -->
        <p class="lead">You can write us and we will respond as soon as possible. our teams are working on the application to make it available.</p>
      </div> <!-- /.custom-container -->


      <div class="container">
        <div class="row">
          <div class="col-md-3"></div> <!-- /.col-md-3 -->
          <div class="col-md-6">
            <!-- Contact Form -->
            <form class="contact-form" role="form">              
              <div class="form-group">
                <label for="exampleInputName1">Full name</label>
                <input class="form-control" id="exampleInputName1" type="text" placeholder="You name">
              </div> <!-- /.form-group -->
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Enter email address">
              </div> <!-- /.form-group -->
              <div class="form-group">
                <label for="exampleInputMessage1">Message</label>
                <textarea class="form-control" id="exampleInputMessage1" placeholder="Your message" rows="3"></textarea>
              </div> <!-- /.form-group -->
              <div class="text-center">
              	<button class="btn btn-default" type="submit">Submit</button>

              	<button class="btn btn-success" type="reset">Reset</button>
              </div>
            </form> <!-- /.contact-form -->
            <div class="clearfix"></div>
          </div> <!-- /.col-md-6 -->
          <div class="col-md-3"></div> <!-- /.col-md-3 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->


      <div class="container">
        <!-- Title -->
        <h2 class="title-contact">Get in touch!</h2>

        <!-- Social Media -->
        <ul class="social-icons">

          <li><a href="#fakelink"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#fakelink"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#fakelink"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#fakelink"><i class="fa fa-skype"></i></a></li>

        </ul> <!-- /.social-icons -->
      </div> <!-- /.container -->

    </div> <!-- /.contact -->




    <!-- Pre Footer -->
    <div class="pre-footer">

      <div class="container">

        <div class="row">

          <div class="col-md-4">

            <div class="col-pre-footer">
              <h4>Address</h4>
              <p>Douala, Cameroon <br> 12113 - Bonanjo <br> <span class="big">Bonamoussadi, Afrique du Sud</span></p>
            </div> <!-- /.col-pre-footer -->

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4">

            <div class="col-pre-footer">
              <h4>Email</h4>
              <p><a href="#">info@kdmobil.com</a> <br> <a href="#">support@kdmobil.com</a></p>
            </div> <!-- /.col-pre-footer -->

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4">

            <div class="col-pre-footer">
              <h4>Phone</h4>
              <p>+237 99 92 57 40 <br> +237 74 50 31 61</p>
            </div> <!-- /.col-pre-footer -->

          </div> <!-- /.col-md-4 -->

        </div> <!-- /.row -->

      </div> <!-- /.container -->


      <div class="container">
        
        <!-- Pre Footer Link -->
        <ul class="use-links">
          <li><a href="#fakelink">Support</a></li>
          <li><a href="#fakelink">Developer</a></li>
          <li><a href="#fakelink">Terms of Use</a></li>
          <li><a href="#fakelink">Privacy Policy</a></li>
        </ul> <!-- /.use-links -->

      </div> <!-- /.container -->

    </div> <!-- /.pre-footer -->




    <!-- Footer Wrapper -->
    <footer class="footer">

      <div class="container">
        
        <!-- Copyright -->
        <p>&copy; 2014 <a href="#">Kdmobil</a> registered trademark of <a href="http://kristdev.com">kristdev.</a></p>

      </div> <!-- /.container -->

    </footer> <!-- /.footer -->
	
	<!-- javascript -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/underconstruction/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/underconstruction/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/underconstruction/js/jquery.jCounter-0.1.4.js"></script>
    <!--<script src="js/main.js"></script>-->

    <script>
    	$(function(){
    		$("#countdown").jCounter({
			  date: "09 May 2014 18:00:00",
			  timezone: "Europe/Bucharest",
			  format: "dd:hh:mm:ss",
			  twoDigits: 'on',
			  fallback: function() { console.log("Counter finished!") }
			});
    	});
    </script>

    <script>
    	/*$(document).ready(function() {
			$('#monform').submit(function() {
				var form_data = {
					email : $('#email').val(),
					ajax : '1'
				};
				$.ajax({
					url: "<?php echo base_url('home/myxajaxTest'); ?>",
					type: 'POST',
					async : false,
					data: form_data
					success: function(msg) {
						$('#message').html(msg);
					}
				});
				return false;
			});
		});*/
    </script>
</body>
</html>
<!-- by PAMBE ABA FRANCK SERGE -->