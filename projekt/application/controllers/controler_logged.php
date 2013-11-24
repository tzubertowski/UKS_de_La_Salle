<?php if ( ! defined('BASEPATH')) exit('Brak dostępu do skryptu (bezpośrednio).');
class controler_logged extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_useraccount','',TRUE);
        $this->load->helper('url');
        $this->load->library(array('form_validation','session'));
    }
 
    function index() {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['email'];
            $data['id'] = $session_data['id'];
            $this->load->view('view_logged', $data);
        } else {
            redirect('controler_login', 'refresh');
        }
    }
 
    function logout() {
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect(base_url('index.php/controler_login'), 'refresh');
     }
 
}