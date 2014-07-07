<!-- ################-->
  <div class="nav-reaction">
    <div class="navbar navbar-static-top"> 
      <!-- navbar-fixed-top -->
      <div class="navbar-inner">
        <div class="container"> <a class="brand" href="<?php echo base_url(); ?>"> 
		<img src="<?php echo base_url(); ?>assets/frontend/images/logoweb-kdmobil-png.png" alt="logo"> <!-- <span>KDMOBIL</span> -->
		<!--<img src="<?php echo base_url(); ?>assets/frontend/assets/img/Logo.png" alt="Logo">--></a>
          <div id="main-nav">
            <div class="nav-collapse collapse">
              <ul class="nav">
			  
                <li class="<?php if($this->uri->segment(1)=="" or $this->uri->segment(1)=='home') {echo 'active';} ?>"><a href="home">Home</a> </li>

                <li class="<?php if($this->uri->segment(1)=='about_faq') {echo 'active';} ?>"><a href="about_faq">ABOUT</a> </li>

                <li class="<?php if($this->uri->segment(1)=='pricing') {echo 'active';} ?>"><a href="pricing">Pricing</a> </li>

                <li class="<?php if($this->uri->segment(1)=='contact') {echo 'active';} ?>"><a href="contact">Contact us</a> </li>
				
        				<li ><a href="<?php echo base_url(); ?>office/login">Sign in/Sign up</a>          	
        				</li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- ################-->