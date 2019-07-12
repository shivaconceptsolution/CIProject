<?php
class Login extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->load->model('Regmodel');
    }

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

        if($this->form_validation->run('login')==False)
         {
            $this->load->view('loginview');
         }
         else{

         $count = $this->Regmodel->LoginDB($email,$pass);
        if($count > 0)
        {
            $this->session->set_userdata('uid',$email);
            redirect('dashboard/index');
            //$data = array("msg"=>"welcome user");
           // $this->load->view('dashboardview',$data);
        }
        else
        {
            $data = array("error"=>"invalid emailid and password");
            $this->load->view('loginview',$data);
        }

         }

        


    }


	}


}

?>