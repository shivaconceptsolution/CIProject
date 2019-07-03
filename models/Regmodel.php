<?php
class Regmodel extends CI_Model
{

     function __construct()
     {
         parent::__construct();
         $this->load->database();

     }
     function RegDB($data)
     {
        $x = $this->db->insert('admin',$data);
       // print_r($x);
       // die();
        return $this->db->affected_rows();
     }

     function LoginDB($email,$pass)
     {
     	$x = $this->db->get_where('admin',array('email'=>$email,'password'=>$pass));
     	return $x->num_rows();

     }

}







?>