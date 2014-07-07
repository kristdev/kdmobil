<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

       public function index()
       {
            if(!$this->ion_auth->logged_in()){
            	// $this->load->view('loginpage');
            	redirect('http://kdmobil.com/onworking');
            }else {
            	if(!$this->ion_auth->is_admin()){
            		redirect('http://kdmobil.com/office/dashboard');
            	}else{
            		redirect('http://kdmobil.com/private');
            	}
            }
       }

       public function create_user(){
       		$config = array(
               array(
               		 'field'   => 'username',
                     'label'   => 'Username',
                     'rules'   => 'required|xss_clean|min_length[4]|is_unique[users.username]'
                  ),
               array(
                     'field'   => 'password',
                     'label'   => 'Password',
                     'rules'   => 'required|xss_clean|min_length[8]|max_length[20]'
                  ),
               array(
                     'field'   => 'passconf',
                     'label'   => 'Password Confirmation',
                     'rules'   => 'required|xss_clean|matches[password]'
                  ),   
               array(
                     'field'   => 'email',
                     'label'   => 'Email',
                     'rules'   => 'required|xss_clean|valid_email|is_unique[users.email]'
                  )
            );
         
            
			$this->form_validation->set_rules($config);

			if($this->form_validation->run()==false){
				$this->load->view('loginpage_cu');
			}else{
				$username=$this->input->post('username');
				$password=$this->input->post('password');
				$email=$this->input->post('email');
				$group=array('3');
				$additional_data=array();
				$this->ion_auth->register($username, $password, $email, $additional_data, $group);
				$messsage_confirm='<br><div class="alert alert-success">Congratulations, account created. A copy of your settings has been sent to your mailbox, you can already connect.</div>';
				$data['message_confirm']=$messsage_confirm;

				$subject = 'KDMobil registration confirmation';
	            $message = '
	            	<p>Welcome to KDMobil, Here, you will get your settings:</p>
	            	<p>Username: '.$username.' <br />Password: '.$password.' </p>
	            	<p>Connect to the application and complete your profile.</p>
	            ';

	            // Get full html:
	            $body =
					'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
					    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					    <title>'.htmlspecialchars($subject, ENT_QUOTES, $this->email->charset).'</title>
					</head>
					<body>
					'.$message.'
					</body>
					</html>';
	            // Also, for getting full html you may use the following internal method:
	            //$body = $this->email->full_html($subject, $message);

	            $result = $this->email
	                ->from('contact@kdmobil.com')
	                ->reply_to('contact@kdmobil.com')    
	                ->to($email)
	                ->subject($subject)
	                ->message($body)
	                ->send();

	            /*var_dump($result);
	            echo '<br />';
	            echo $this->email->print_debugger();

	            exit;*/

				$this->load->view('loginpage_cu', $data);
			} 
       }

       public function authentification(){
       		$config = array(
               array(
                     'label'   => 'Username',
                     'rules'   => 'required|xss_clean'
                  ),
               array(
                     'field'   => 'password',
                     'label'   => 'Password',
                     'rules'   => 'required|xss_clean'
                  )
            );

            $this->form_validation->set_rules($config);

			if($this->form_validation->run()==false){
				$this->load->view('loginpage');
			}else{
				$username=$this->input->post('username');
				$password=$this->input->post('password');
				$remember = $this->input->post('remember'); // remember the user
				
				if($this->ion_auth->login($username, $password, $remember)==true){
					// $this->session->userdata('username');
					redirect('http://kdmobil.com/office/dashboard');
				}else{
					$error_message="";
					$data['error_message']=$error_message;
					$this->load->view('loginpage',$data);
				}
			}
       }

       public function logout(){
       		$this->ion_auth->logout();
       		redirect('http://kdmobil.com/office');
       }
}
?>