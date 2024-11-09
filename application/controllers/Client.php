<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('uid')) {
            redirect('Login');
        }
        $this->load->model('CrudM');
    }


    public function index()
    {
        $data['clients'] = $this->CrudM->get_records('client_form');
        $this->load->view('admin/header');
        $this->load->view('admin/client/client_list', $data);
        $this->load->view('admin/footer');
    }
    public function create()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/client/create');
        $this->load->view('admin/footer');
    }


    public function store()
    {
        if (!empty($_FILES['client_image'])) {
            $i = 0;
            foreach ($_FILES['client_image']['tmp_name'] as $file_tmp) {

                if (!empty($file_tmp)) {
                    $file_name = "/uploads/client_images/" . $_FILES['client_image']['name'][$i];
                    $location = pathinfo(pathinfo(__DIR__, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
                    $file_location = $location . "/" . $file_name;

                    if (!is_dir('uploads/client_images')) {
                        mkdir("uploads/client_images", 0777, true);
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
        $data['designation'] = $_POST['designation'];

        $this->CrudM->insert('client_form', $data);
        redirect(base_url('Client'));
    }
    public function edit($id)
    {
        $data['client_data'] = $this->CrudM->find_record_by_id('client_form', $id);
        $this->load->view('admin/header');
        $this->load->view('admin/client/edit', $data);
        $this->load->view('admin/footer');

    }
    public function update($id)
    {
        if (!empty($_FILES['client_image'])) {
            $i = 0;
            foreach ($_FILES['client_image']['tmp_name'] as $file_tmp) {

                if (!empty($file_tmp)) {
                    $file_name = "/uploads/client_images/" . $_FILES['client_image']['name'][$i];
                    $location = pathinfo(pathinfo(__DIR__, PATHINFO_DIRNAME), PATHINFO_DIRNAME);
                    $file_location = $location . "/" . $file_name;

                    if (!is_dir('uploads/client_images')) {
                        mkdir("uploads/client_images", 0777, true);
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
        $data['designation'] = $_POST['designation'];

        $this->CrudM->update('client_form', $data, $id);
        redirect(base_url('Client'));
    }
    public function delete($id)
    {
        $data = $this->CrudM->delete('client_form', $id);
        redirect(base_url('Client'));
    }

}