<?php
defined('BASEPATH') or exit('No direct script access allowed');



class C_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->table = 'tbproduct';
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dashboard | Pasar.com';
        $data['time'] = $this->load->helper('time_helper');
        $data['product'] = $this->m_admin->allproduct()->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/menu');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    public function product()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['allproduct'] = $this->m_admin->allproduct();
        $data['title'] = 'All Product | Pasar.com';
        $data['time'] = $this->load->helper('time_helper');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/menu');
        $this->load->view('admin/product', $data);
        $this->load->view('admin/footer');
    }

    public function add()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['time'] = $this->load->helper('time_helper');
        $data['title'] = 'Add Product | Pasar.com';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/menu');
        $this->load->view('admin/add', $data);
        $this->load->view('admin/footer');
    }

    public function add_action()
    {
        $code = $this->input->post('code');
        $name = $this->input->post('name');
        $stock = $this->input->post('stock');
        $price = $this->input->post('price');
        $description = $this->input->post('description');
        $data = array('code' => $code, 'name' => $name, 'stock' => $stock, 'price' => $price, 'description' => $description);
        $data['addproduct'] = $this->m_admin->addproduct($data, 'tbproduct');
        redirect('c_admin/product');
    }
    public function editdata($id)
    {
        $data['edit'] = $this->m_admin->editdata($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['time'] = $this->load->helper('time_helper');
        $data['title'] = 'Edit Product | Pasar.com';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/navbar', $data);
        $this->load->view('admin/menu');
        $this->load->view('admin/edit', $data);
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $this->m_admin->updatedata($id);
        redirect('c_admin/product');
    }


    public function delete_data($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->m_admin->delete_data($id, $data);
        redirect('c_admin/product');
    }
}
