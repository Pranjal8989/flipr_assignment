<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('CrudM');
    }


    public function index()
    {
        $data['contacts'] = $this->CrudM->get_records('contact_form');
        $this->load->view('admin/header');
        $this->load->view('admin/contact/contact_list', $data);
        $this->load->view('admin/footer');
    }

    public function store()
    {
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['mobile'] = $_POST['mobile'];
        $data['city'] = $_POST['city'];

        $this->CrudM->insert('contact_form', $data);
        redirect(base_url('Contact'));
    }
    public function edit($id)
    {
        $data['contact_data'] = $this->CrudM->find_record_by_id('contact_form', $id);
        $this->load->view('admin/header');
        $this->load->view('edit', $data);
        $this->load->view('admin/footer');

    }
    public function update($id)
    {
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['mobile'] = $_POST['mobile'];
        $data['city'] = $_POST['city'];

        $this->CrudM->update('contact_form', $data, $id);
        redirect(base_url('Contact'));
    }
    public function delete($id)
    {
        $data = $this->CrudM->delete('contact_form', $id);
        redirect(base_url('Contact'));
    }

}