<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class ContactC extends CI_Controller
 {
    function __construct() {
        parent::__construct();

        $this->load->model( 'Crud' );

    }

    public function insert_contact()
 {
        $data = [
            'name' => $this->input->post( 'name' ),
            'email' => $this->input->post( 'email' ),
            'mobile' => $this->input->post( 'mobile' ),
            'city' => $this->input->post( 'city' )
        ];

        $this->Crud->insert( 'contact_form', $data );

        redirect( base_url( 'welcome' ) );
    }

}
?>