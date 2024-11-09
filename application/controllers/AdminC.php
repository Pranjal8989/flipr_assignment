<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class AdminC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ( !$this->session->userdata( 'uid' ) ) {
            redirect( 'welcome' );
        }
        $this->load->model( 'Crud' );

    }

    // Admin Dashboard

    public function index() {
        $data[ 'contact_data' ] = $this->Crud->get_records( 'contact_form' );
        $this->load->view( 'admin/partials/admin_header' );
        $this->load->view( 'admin/dashboard', $data );
        $this->load->view( 'admin/partials/admin_footer' );
    }

}
?>