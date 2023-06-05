<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ProductModel extends CI_Model
{
    public function getRecords()
    {
        $query = $this->db->get('records');
        return $query->result();
    }

    public function insertRecords($data)
    {
        return $this->db->insert('records', $data);
    }

    public function deleteRecords($id)
    {
        return $this->db->delete('records', ['id' => $id]);
    }

    public function show($id)
    {
        $query = $this->db->get_where('records', ['id' => $id]);
        return $query->result();
    }

    public function updaterecords($id, $data)
    {
        return $this->db->update('records', $data, ['id' => $id]);
    }
}
