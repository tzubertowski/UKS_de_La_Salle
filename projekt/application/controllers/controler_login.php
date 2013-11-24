<?php if ( ! defined('BASEPATH')) exit('Brak dostępu do skryptu (bezpośrednio).');
class controler_login extends CI_Controller {
    function index() {
        $this->load->helper(array('form','html'));
        $this->load->view('view_login');
    }
}