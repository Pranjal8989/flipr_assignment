<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('LoginM');
    }


    public function index()
    {

        $this->load->view('admin/login');

    }

    public function login()
    {
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $user = $this->CrudM->find_record_by_id('login', $data);
        if ($user) {
            $this->session->set_userdata('uid', $user->id);
            $this->session->set_userdata('fname', $user->username);
            redirect('Client');
        } else {
            redirect('Login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}