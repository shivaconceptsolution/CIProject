<?php
class Dashboard extends CI_Controller
{
	function __construct()
    {

        parent::__construct();
        $this->load->model('Regmodel');
    }
    function index()
    {
       echo get_cookie('cuid'); 
       $data['arr'] = $this->Regmodel->viewuser();
       $this->load->view('dashboardview',$data);

    }
    function FindRecord($id)
    {
       $data['arr'] = $this->Regmodel->findrecord($id);
       $this->load->view('editdashview',$data);
    }
     function DeleteRecord($id)
    {
      $c=$this->Regmodel->deleterecord($id);
      if($c>0)
        redirect('dashboard/index');
    }
    function updaterecord()
    {
      $c=$this->Regmodel->updaterecord($this->input->post('txt1'),
         array(
          "email"=>$this->input->post('txt2'),
          "password"=>$this->input->post('txt3')));
      if($c>0)
        redirect('dashboard/index');

    }
    function logout()
    {
      $this->session->sess_destroy();
      redirect('login/index');
    }

}


?>