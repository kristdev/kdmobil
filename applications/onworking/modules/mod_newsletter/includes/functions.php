<?php
//1) Copier le bloc suivant dans la classe qui servira à afficher la vue cible ou hôte

/*------------- Include fonction Mod_Newsletter -------------*/

   // Function qui vérifie l'existance du mail dans la bd. On note ici que la valeur du mail est vérifiée directement en html5
   function myxajaxNewsletter_checkup($mail){
   		$this->load->model('mdl_newsletter');
   		$table='email';
   		$where=$mail;
   		$dbcheck=$this->mdl_newsletter->get_allwhereresults($table,$where);
   		$nb=$dbcheck->num_rows();
   		if($nb==0){
   			return true;
   		}else{
   			return false;
   		}
   }
   // Fonction d'insertion du mail
   function myxajaxNewsletter_insert($mail){
   		$this->load->model('mdl_newsletter');
   		$objResponse = new xajaxResponse();
	    if($this->myxajax_newsletter_checkup($mail)){
	    	$this->mdl_newsletter->insert_somedata($table,$data);
	    }
	    return $objResponse;
   }

   function myxajaxTest(){
   		$objResponse = new xajaxResponse();
   		$objResponse->alert('Welcome');
	    return $objResponse;
   }

//----------------------------

//2) Se rassurer que le constructeur du controlleur est de la forme
	$this->load->library('xajax'); //On charge la librairie
	$this->xajax->register(XAJAX_FUNCTION,array('myxajaxTest',$this,'myxajaxTest'));
	$this->xajax->processRequest(); //On genere le javascript
//------------------------
?>