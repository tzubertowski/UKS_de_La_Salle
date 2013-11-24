<?php if ( ! defined('BASEPATH')) exit('Brak dostępu do skryptu (bezpośrednio).');
 
class controler_verifylogin extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_useraccount','login',TRUE);
        $this->load->helper(array('form', 'url','html'));
        $this->load->library(array('form_validation','session'));
    }
 
    function index() {
        $this->form_validation->set_rules('email', 'Email', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
        if($this->form_validation->run() == FALSE) {
            } else {
                // jak przejdzie validacje to dalej dalej
                redirect(base_url('index.php/controler_logged'), 'refresh');
            }       
     }
 
     function check_database($password) {
         $email = $this->input->post('email');
         $result = $this->login->login($email, $password);
         if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 $sess_array = array('id' => $row->id,
                     'email' => $row->email);
                 //ustawia sesje po sprawdzeniu danych z db
                 $this->session->set_userdata('logged_in', $sess_array);
                 }
          return TRUE;
          } else {
              // gdy nie odnajdzie hasła w bazie
              $this->form_validation->set_message('check_database', 'Zle dane logowania');
              return FALSE;
          }
      }
}