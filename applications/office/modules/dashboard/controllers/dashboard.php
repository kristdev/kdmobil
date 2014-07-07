<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

       public function index()
       {
            if($this->ion_auth->logged_in()){
            	$this->load->view('dashboardpage');
            }else{
            	redirect('http://localhost/kdmobil/office/');
            }
       }
}
?>