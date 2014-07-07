<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lastnews extends MX_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

       public function index(){
			$query_get_lastnews=$this->get_lastnews();
			$data['lastnews']=$query_get_lastnews;
       		$view=$this->load->view('lastnewspage',$data);
       		return $view;
       }

       public function get_lastnews(){
       		$this->load->model('mdl_lastnews');
       		$table='last_news';
       		$limit=3;
       		$offset=0;
       		$orderby='date';
       		$set='desc';
       		$query_get_lastnews=$this->mdl_lastnews->get_allbornedresults($table,$limit,$offset,$orderby,$set);
       		return $query_get_lastnews;
       }
}
?>