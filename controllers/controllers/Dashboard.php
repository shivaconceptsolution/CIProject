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
       $data['arr'] = $this->Regmodel->viewuser();
       $this->load->view('dashboardview',$data);

    }


}


?>