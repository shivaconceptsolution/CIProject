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

     function viewuser()
     {
        $res=  $this->db->get('admin');
        return  $res->result_array();

     }
     function findrecord($id)
     {
        $res=  $this->db->get_where('admin',array("id"=>$id));
        return  $res->result_array();

     }
      function deleterecord($id)
     {
        $res=  $this->db->delete('admin',array("id"=>$id));
        return  $this->db->affected_rows();

     }
      function updaterecord($id,$data)
     {
       $this->db->where("id",$id);
       $this->db->update('admin',$data);
        return  $this->db->affected_rows();

     }

     function LoginDB($email,$pass)
     {
     	$x = $this->db->get_where('admin',array('email'=>$email,'password'=>$pass));
     	return $x->num_rows();

     }

}







?>