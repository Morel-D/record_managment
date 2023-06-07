<?php
defined('BASEPATH') or exit('No direct script access allowed');


class AuthenticationModel extends CI_Model
{
    public function insertUser($data)
    {
        return $this->db->insert('authentication', $data);
    }
}
