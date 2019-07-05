<?php


       $config =array(
     
       "reg"=>

        array(
        array(
                'field' => 'txtemail',
                'label' => 'Email',
                'rules' => 'required|is_unique[admin.email]',
                'errors' => array(
                'required' => 'Please tell us your %s',
                'is_unique' => ' %s already exist',
            ),
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
                'label' => 'Email',
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