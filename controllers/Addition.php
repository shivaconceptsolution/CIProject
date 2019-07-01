<?php
class Addition extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}
   
   function index()
   {
   	    if($this->input->post('btnsubmit')!=null)
   	    {
            $c= $this->input->post('txtnum1')+$this->input->post('txtnum2');
            $data=array("a"=>$this->input->post('txtnum1'),"b"=>$this->input->post('txtnum2'),'result'=>$c);
            $this->load->view('addview',$data);
   	    }
        else
        $this->load->view('addview');

   }


}

?>