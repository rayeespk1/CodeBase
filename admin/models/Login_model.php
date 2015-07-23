<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function login($username, $password) {
        $user_details = array();
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where("password = SHA1(CONCAT(salt, SHA1(CONCAT(salt, SHA1('$password')))))");
        $this->db->where('status', 1);
        $this->db->limit(1);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $this->session->set_userdata('user_id', $row['user_id']);
            }
            return TRUE;
        } else {
            return FALSE;
        }
        return $user_details;
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
    }
    
    public function isValidEmail($email){
        $this->db->where('email', $email);
        $this->db->limit(1);
        $query = $this->db->get('user');
        $count = $query->num_rows();
        if($count > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function generateAndUpdatePassword($email){
        $password = substr(sha1(uniqid(mt_rand(), true)), 0, 10);
        $this->updatePassword($email, $password);
        return $password;
    }
    
    public function updatePassword($email, $password){
        $salt = substr(md5(uniqid(rand(), true)), 0, 9);
        $this->db->set('password', sha1($salt . sha1($salt . sha1($password))));
        $this->db->set('salt', $salt);
        $this->db->where('email', $email);
        $this->db->limit(1);
        $res = $this->db->update('user');
        return $res;
    }
    
    public function getForgotMailContent($password){
        $html = '<h3>Password Reset</h3><p>Your new administrator password is <b></b></p>';
        return $html;
    }

}