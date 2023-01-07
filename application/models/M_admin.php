<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

    public function allproduct()
    {
        $result = $this->db->get('tbproduct');
        return $result;
    }

    public function addproduct($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function editdata($id)
    {
        return $this->db->get_where('tbproduct', ["id" => $id])->row_array();
    }

    public function updatedata()
    {
        $data = [
            'code' => $this->input->post('code', true),
            'name' => $this->input->post('name', true),
            'stock' => $this->input->post('stock', true),
            'price' => $this->input->post('price', true),
            'description' => $this->input->post('description', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbproduct', $data);
    }

    public function delete_data($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
