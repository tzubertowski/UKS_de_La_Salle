<?php if (!defined('BASEPATH')) exit('Brak dostępu do skryptu (bezpośrednio).');
  
class model_useraccount extends CI_Model {
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    function login($email, $password) {
        //create query to connect user login database
        $this->db->select('id, email, password');
        $this->db->from('useraccount');
        $this->db->where('email', $email);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
         
        $query = $this->db->get();
        if($query->num_rows() == 1) { // jeżeli zwróci jedną osobę (bo miała być jedna)
            return $query->result();
        } else {
            return false; //jeżeli zwróci więcej lub mniej niż jedną osobę
        }
    }
}