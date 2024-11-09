<?php


class LoginM extends CI_Model
{

    public function login($username, $password)
    {
        $result = $this->db->get_where('login', ['username' => $username, 'password' => $password])->row();
        return $result;
    }
}


?>