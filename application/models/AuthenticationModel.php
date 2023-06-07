<?php
defined('BASEPATH') or exit('No direct script access allowed');


class AuthenticationModel extends CI_Model
{
    public function insertUser($data)
    {
        return $this->db->insert('authentication', $data);
    }

    public function logUser($number, $pin)
    {
        $this->db->where('number', $number);
        $this->db->where('pin', $pin);

        $query = $this->db->get('authentication');
        $find_user = $query->num_rows($query);

        if ($find_user > 0) {
            $this->session->set_flashdata('log', 'Logged in successfully');
            redirect('/login');
        } else {
            $this->session->set_flashdata('log_error', 'Logged in failed');
            redirect('/login');
        }
    }
}
