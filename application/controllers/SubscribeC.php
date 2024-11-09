<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class SubscribeC extends CI_Controller
 {
    function __construct() {
        parent::__construct();

        $this->load->model( 'Crud' );

    }

    public function index() {
        $data[ 'subscriptions' ] = $this->Crud->get_records( 'newsletter_subscriptions' );
        // echo '<pre>';
        // print_r( $data );
        // die();
        $this->load->view( 'admin/partials/admin_header' );
        $this->load->view( 'admin/subscriber', $data );
        $this->load->view( 'admin/partials/admin_footer' );
    }

    public function insert_subscribe_email()
 {
        $data = [
            'email' => $this->input->post( 'email' ),

        ];

        $this->Crud->insert( 'newsletter_subscriptions', $data );

        redirect( base_url( 'welcome' ) );
    }

}
?>