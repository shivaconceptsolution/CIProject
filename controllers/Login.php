<?php
class Login extends CI_Controller
{

	function index()
	{
	if($this->input->post('btnsubmit')==null)
	{
       $this->load->view('loginview');
    }
    else
    {
    	$email = $this->input->post("txtemail");
    	$pass = $this->input->post("txtpass");
    	if($email=="abc@gmail.com" && $pass=="12345")
    	{
    		redirect('Addition/index');
    	}
    	else
    	{
    		$data = array("error"=>"invalid emailid and password");
    		$this->load->view('loginview',$data);
    	}


    }


	}


}

?>