<?php
class Shopingcart extends CI_Controller
{

    function __construct()
    {
    	parent::__construct();
    	$this->load->library('cart');
    } 
    function index()
    {
    	//$this->cart->destroy();
       $data = array(
        array(
                'id'      => 'sku_123ABC',
                'qty'     => 1,
                'price'   => 1000.00,
                'name'    => 'C BOOK'
               
        ),
        array(
                'id'      => 'sku_567ZYX',
                'qty'     => 1,
                'price'   => 2000,
                'name'    => 'JAVA BOOK'
        ),
        array(
                'id'      => 'sku_965QRS',
                'qty'     => 1,
                'price'   => 1500,
                'name'    => 'PHP BOOK'
        )
);
       $this->cart->insert($data);
       $this->load->view('shoppingview');
    }
function updatecart()
{
    $data = array(
        array(
                'rowid'   => '1164a59fe023937d41e11ddf6871b50c',
                'qty'     => $this->input->post('txt1')
        ),
        array(
                'rowid'   => '90972f7cfcd380a9fa7821d30a9b2fb2',
                'qty'     => $this->input->post('txt2')
        ),
        array(
                'rowid'   => '46acd2fb2e0d0b4a29c67e7ddf1c8946',
                'qty'     => $this->input->post('txt3')
        )
);

$this->cart->update($data);
$this->load->view('shoppingview');
}

}





?>