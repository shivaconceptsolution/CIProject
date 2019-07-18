<?php

class Search extends CI_Controller
{
     function __construct()
     {
         parent::__construct();
         $this->load->model('Regmodel');
     }
     function index()
     {
         $this->load->view('searchview');

     }

     function searchdata($id)
     {
     	$data['res']=$this->Regmodel->findrecord1($id);
     	$this->load->view('sview',$data);
     	 

     }



}





?>