<?php

class Register extends CI_Controller
{

    function index()
    {

      
        
         if($this->form_validation->run('reg')==False)
         {
         	$this->load->view('regview');
         }
         else
         {
         	echo "Success";
         }


    }


}





?>