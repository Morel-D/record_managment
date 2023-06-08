<?php
defined('BASEPATH') or exit('No direct script access allowed');


class AuthenticationModel extends CI_Model
{
    public function insertUser($data)
    {
        return $this->db->insert('authentication', $data);
    }


    public function getUser($number, $pin)
    {
        $this->db->where('number', $number);
        $this->db->where('pin', $pin);

        $query = $this->db->get('authentication');
        return $query->result();
    }
}
