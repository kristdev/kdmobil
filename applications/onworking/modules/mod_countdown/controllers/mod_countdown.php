<?php
// Ce module est un compte à rebours
// Dans le fichier readme.txt, est décrit la rocédure d'installation et d'utilisation dumodule
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mod_countdown extends MX_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

       public function index(){
       		$this->load->view('countdown_page');
       }
}
?>