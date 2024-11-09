<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class LoginC extends CI_Controller
 {

    function __construct()
 {
        parent::__construct();
        $this->load->model( 'Crud' );
    }

    public function index()
 {

        $this->load->view( 'login' );

    }

    public function login()
 {
        $data[ 'username' ] = $_POST[ 'username' ];
        $data[ 'password' ] = $_POST[ 'password' ];
        $user = $this->Crud->Login( 'login', $data );
        // print_r( $user );
        // die();
        if ( $user ) {
            $this->session->set_userdata( 'uid', $user->id );
            $this->session->set_userdata( 'fname', $user->username );
            redirect( 'AdminC' );
        } else {
            redirect( 'LoginC' );
        }
    }

    public function logout()
 {
        $this->session->sess_destroy();
        redirect( 'Welcome' );
    }

}