<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class ProjectC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ( !$this->session->userdata( 'uid' ) ) {
            redirect( 'welcome' );
        }
        $this->load->model( 'ProjectM' );
        $this->load->model( 'Crud' );

    }

    // Admin Dashboard

    public function index() {
        $data[ 'projects' ] = $this->Crud->get_records( 'projects' );

        $this->load->view( 'admin/partials/admin_header' );
        $this->load->view( 'admin/projects/project', $data );
        $this->load->view( 'admin/partials/admin_footer' );
    }

    public function addProject() {
        $name = $this->input->post( 'name' );
        $description = $this->input->post( 'description' );

        $croppedImage = $this->input->post( 'cropped_image' );

        if ( $croppedImage ) {

            $data = base64_decode( str_replace( 'data:image/png;base64,', '', $croppedImage ) );
            $filePath = './uploads/images/projects/' . uniqid() . '.png';
            file_put_contents( $filePath, $data );
            $imagePath = $filePath;

        }

        $data = array(
            'name' => $name,
            'description' => $description,
            'image' => $imagePath
        );

        $this->Crud->insert( 'projects', $data );
        redirect( 'ProjectC' );
    }

    public function updateProject() {

        $this->load->helper( 'url' );
        $this->load->library( 'form_validation' );

        $id = $this->input->post( 'id' );
        $name = $this->input->post( 'name' );
        $description = $this->input->post( 'description' );
        $croppedImage = $this->input->post( 'edit_cropped_image' );

        if ( $croppedImage ) {
            $data = base64_decode( str_replace( 'data:image/png;base64,', '', $croppedImage ) );
            $filePath = './uploads/images/projects/' . uniqid() . '.png';
            file_put_contents( $filePath, $data );
            $imagePath = $filePath;
        } else {
            $currentProject = $this->Crud->find_record_by_id( 'projects', $id );
            $imagePath = $currentProject->image;

        }

        $updateData = [
            'name' => $name,
            'description' => $description,
            'image' => $imagePath,
        ];
        $this->Crud->update( 'projects', $updateData, $id );

        redirect( 'ProjectC' );
    }

    public function deleteProject( $id ) {

        $this->Crud->delete( 'projects', $id );
        redirect( 'ProjectC' );
    }
}
?>