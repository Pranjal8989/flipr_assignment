<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Welcome extends CI_Controller
 {

    function __construct() {
        parent::__construct();
        // $this->load->library( 'session' );
        $this->load->model( 'projectM' );
        $this->load->model( 'clientsM' );

    }

    public function index()
 {
        $data[ 'projects' ] = $this->projectM->getProjects();
        $data[ 'clients' ] = $this->clientsM->getClients();

        $this->load->view( 'header' );
        $this->load->view( 'landing_page', $data );
        $this->load->view( 'footer' );
    }

}