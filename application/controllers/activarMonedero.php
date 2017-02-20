<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class activarMonedero extends CI_Controller{
    function __construct(){
        parent::__construct();

         $this->load->helper('url');
    }
    public function index() {
     $this->load->view('activarMonedero/activarmoneda'); 
          
        }
        function paso2(){
          $this->load->view('activarMonedero/activarmonedapaso2');   
        }
    }
?>