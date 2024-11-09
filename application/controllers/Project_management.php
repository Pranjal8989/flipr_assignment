<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Project_management extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('CrudM');
    }


    public function index()
    {
        $data['projects'] = $this->CrudM->get_records('project_management');
        $this->load->view('admin/header');
        $this->load->view('admin/Project_management/project_list', $data);
        $this->load->view('admin/footer');
    }
    public function create()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/Project_management/create');
        $this->load->view('admin/footer');
    }

    public function store()
    {
        if (!empty($_FILES['project_image'])) {
            $i = 0;
            foreach ($_FILES['project_image']['tmp_name'] as $file_tmp) {

                if (!empty($file_tmp)) {
                    $file_name = "/uploads/project_images/" . $_FILES['project_image']['name'][$i];
                    $location = pathinfo(pathinfo(__DIR__, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
                    $file_location = $location . "/" . $file_name;

                    if (!is_dir('uploads/project_images')) {
                        mkdir("uploads/project_images", 0777, true);
                    }

                    if (move_uploaded_file($file_tmp, $file_location)) {
                        chmod($file_location, 0777);
                        $data['image'] = $file_name;
                    }
                }
                $i++;
            }
        }
        $data['name'] = $_POST['name'];
        $data['description'] = $_POST['description'];

        $this->CrudM->insert('project_management', $data);
        redirect(base_url('Project_management'));
    }
    public function edit($id)
    {
        $data['project_data'] = $this->CrudM->find_record_by_id('project_management', $id);
        $this->load->view('admin/header');
        $this->load->view('admin/Project_management/edit', $data);
        $this->load->view('admin/footer');

    }
    public function update($id)
    {
        if (!empty($_FILES['project_image'])) {
            $i = 0;
            foreach ($_FILES['project_image']['tmp_name'] as $file_tmp) {

                if (!empty($file_tmp)) {
                    $file_name = "/uploads/project_images/" . $_FILES['project_image']['name'][$i];
                    $location = pathinfo(pathinfo(__DIR__, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
                    $file_location = $location . "/" . $file_name;

                    if (!is_dir('uploads/project_images')) {
                        mkdir("uploads/project_images", 0777, true);
                    }

                    if (move_uploaded_file($file_tmp, $file_location)) {
                        chmod($file_location, 0777);
                        $data['image'] = $file_name;
                    }
                }
                $i++;
            }
        }
        $data['name'] = $_POST['name'];
        $data['description'] = $_POST['description'];

        $this->CrudM->update('project_management', $data, $id);
        redirect(base_url('Project_management'));
    }
    public function delete($id)
    {
        $data = $this->CrudM->delete('project_management', $id);
        redirect(base_url('Project_management'));
    }

}