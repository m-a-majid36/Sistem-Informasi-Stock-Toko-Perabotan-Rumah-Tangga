<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->input->post()){
            if($this->admin_model->doLogin()) redirect(site_url('admin'));
        }
        $this->load->view("admin/login_page.php");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}