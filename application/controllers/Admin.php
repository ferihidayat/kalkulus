<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('role_id') == 2) {
            redirect('blocked');
        }
        $this->load->model('m_userdata');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $x['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->m_userdata->show_user();
        $this->load->view('templates/admin_header', $x);
        $this->load->view('admin/index', $data, $x);
        $this->load->view('templates/admin_footer');
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');


        redirect('');
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin_header');
            $this->load->view('admin/index');
            $this->load->view('templates/admin_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => htmlspecialchars($this->input->post('role_id', true)),
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('tbl_user', $data);
            $this->session->set_flashdata('msg', 'success');
            redirect('admin');
        }
    }

    function hapus_user()
    {
        $id = $this->input->post('id');
        $this->m_userdata->hapus_user($id);
        echo $this->session->set_flashdata('msg', 'success-hapus');
        redirect('admin');
    }
}
