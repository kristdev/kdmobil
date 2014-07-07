<?php
// Module d'inscription à la newsletter
// Le fichier readme décrit la procédure d'installation et d'utilisation

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_newsletter extends MX_Controller {

       public function __construct(){
       		parent::__construct();
      	  	// Your own constructor code
       }

       public function index(){      		
       		$this->load->view('newsletter_page');
       }

       public function validate(){
       		$this->form_validation->set_rules('email','Email','required|valid_email');
       		if($this->form_validation->run()===False){
       			
       		}else{
       			$email=$this->input->post('email');
       		}
       		echo Modules::run('home');
       }

       public function check_email($email){
       		$this->load->model('mdl_newsletter');
       }
}
?>