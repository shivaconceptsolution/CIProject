<?php

class Register extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('Regmodel');
    }
    function index()
    {

      
        
         if($this->form_validation->run('reg')==False)
         {
         	$this->load->view('regview');
         }
         else
         {
            $data = array("email"=>$this->input->post('txtemail'),"password"=>$this->input->post('txtpass'));
         	$count=$this->Regmodel->RegDB($data);
            if($count>0)
            {
               $data = array('msg' => 'Inserted Successfully');
                $this->load->view('regview',$data); 
            }
                
            else
            {
                $data = array('msg' => 'Inserted Not Successfully');
                $this->load->view('regview',$data); 
            }
         }


    }


}





?>