<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class activarMonedero extends CI_Controller{
    function __construct(){
        parent::__construct();

         $this->load->helper('url');
    }
    public function index() {

     $data['vista'] = $this->load->view('index',null,true);
        $this->load->view('templates/layout',$data);

        }
        function paso2(){
          $this->load->view('activarMonedero/activarmonedapaso2');   
        }
        function prueba(){
            $data['vista'] = null;
            $this->load->view('templates/layout',$data);
        }
    }
?>