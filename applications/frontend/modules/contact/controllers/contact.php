<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MX_Controller {

       public function __construct()
       {
            parent::__construct();
            // Your own constructor code
       }

       public function index()
       {
            $this->load->view('contactpage');
       }

       public function sending()
       {
            $config = array(
               array(
                     'field'   => 'name',
                     'label'   => 'Name',
                     'rules'   => 'required|xss_clean'
                  ),
               array(
                     'field'   => 'email',
                     'label'   => 'Email',
                     'rules'   => 'required|valid_email|xss_clean'
                  ),
               array(
                     'field'   => 'subject',
                     'label'   => 'Subject',
                     'rules'   => 'required|xss_clean'
                  ),   
               array(
                     'field'   => 'message',
                     'label'   => 'Message',
                     'rules'   => 'required|xss_clean'
                  )
            );

            $this->form_validation->set_rules($config); 

            if($this->form_validation->run()== FALSE){
            	$this->load->view('contactpage');
            }
            else{
              $name=$this->input->post('name');
              $email=$this->input->post('email');
              $subject=$this->input->post('subject');
              $message=$this->input->post('message');

            // Get full html:
            $body =
                    '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                        <title>'.htmlspecialchars($subject, ENT_QUOTES, $this->email->charset).'</title>
                    </head>
                    <body>
                    <u>'.$name.'</u> a écrit: <br /><br />'.$message.'
                    </body>
                    </html>';
            // Also, for getting full html you may use the following internal method:
            //$body = $this->email->full_html($subject, $message);

            $result = $this->email
                ->from($email)
                ->reply_to('contact@kdmobil.com')    // Optional, an account where a human being reads.
                ->to('pambeaba@kristdev.com')
                ->subject($subject)
                ->message($body)
                ->send();

            /*var_dump($result);
            echo '<br />';
            echo $this->email->print_debugger();

            exit;*/
            $msg_confirm="<div class='alert alert-success'>
                          <button class='close' data-dismiss='alert' type='button'>×</button>
                          <strong>Well done!</strong>
                          You successfully send your message.
                          </div>";

            $data['msg_confirm']=$msg_confirm;
            $this->load->view('contactpage', $data);
            }
       }
}
?>