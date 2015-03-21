<?php 
class Login extends CI_Model {

    public function add_user($user)
    {      
        $query = "INSERT INTO users (first_name, last_name, email, password, created_on, updated_on) VALUES (?, ?, ?, ?, NOW(), NOW())";
        $value = array($user["first_name"], $user["last_name"], $user["email"], $user["password"]);
        return $this->db->query($query, $value);
        
    }

    public function login_user($login)
    {

    	return $this->db->query('SELECT * FROM users WHERE email = ?', array($login))->row_array();
    }
}
?>