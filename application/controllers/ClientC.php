<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class ClientC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ( !$this->session->userdata( 'uid' ) ) {
            redirect( 'welcome' );
        }

        $this->load->model( 'Crud' );

    }

    // Admin Dashboard

    public function index() {
        $data[ 'clients' ] = $this->Crud->get_records( 'clients' );
        // echo '<pre>';
        // print_r( $data );
        // die();
        $this->load->view( 'admin/partials/admin_header' );
        $this->load->view( 'admin/clients/clients', $data );
        $this->load->view( 'admin/partials/admin_footer' );
    }

    public function addClient() {
        $name = $this->input->post( 'name' );
        $description = $this->input->post( 'description' );
        $designation = $this->input->post( 'designation' );
        $croppedImage = $this->input->post( 'cropped_image' );

        if ( $croppedImage ) {
            $data = base64_decode( str_replace( 'data:image/png;base64,', '', $croppedImage ) );
            $filePath = './uploads/images/clients/' . uniqid() . '.png';
            file_put_contents( $filePath, $data );
            $imagePath = $filePath;
        }

        $data = array(
            'name' => $name,
            'designation' => $designation,
            'description' => $description,
            'image' => $imagePath
        );

        $this->Crud->insert( 'clients', $data );
        redirect( 'ClientC' );
    }

    public function updateClient() {

        $this->load->helper( 'url' );
        $this->load->library( 'form_validation' );

        $id = $this->input->post( 'id' );
        $name = $this->input->post( 'name' );
        $description = $this->input->post( 'description' );
        $designation = $this->input->post( 'designation' );
        $croppedImage = $this->input->post( 'edit_cropped_image' );

        if ( $croppedImage ) {
            $data = base64_decode( str_replace( 'data:image/png;base64,', '', $croppedImage ) );
            $filePath = './uploads/images/clients/' . uniqid() . '.png';
            file_put_contents( $filePath, $data );
            $imagePath = $filePath;
        } else {
            $currentProject = $this->Crud->find_record_by_id( 'projects', $id );
            $imagePath = $currentProject->image;

        }

        $updateData = [
            'name' => $name,
            'designation' => $designation,
            'description' => $description,
            'image' => $imagePath,
        ];
        $this->Crud->update( 'clients', $updateData, $id );

        redirect( 'ClientC' );
    }

    public function deleteProject( $id ) {

        $this->Crud->delete( 'clients', $id );
        redirect( 'ClientC' );
    }
}
?>