<?php


       $config =array(
     
       "reg"=>

        array(
        array(
                'field' => 'txtemail',
                'label' => 'Username',
                'rules' => 'required'
        ),
        array(
                'field' => 'txtpass',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'You must provide a %s.',
                ),
        )
)
,

 "login"=>

        array(
        array(
                'field' => 'txtemail',
                'label' => 'Username',
                'rules' => 'required'
        ),
        array(
                'field' => 'txtpass',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array(
                        'required' => 'You must provide a %s.',
                ),
        )
)

    );
     //   $this->form_validation->set_rules($config);

?>