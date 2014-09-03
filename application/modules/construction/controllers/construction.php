<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Construction extends MY_Controller
{

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['contentView'] = "construction/index";
        $data['menu'] = false;
        $this->template($data);
    }

    public function template($data) {
        $data['show_menu'] = 0;
        $data['show_sidemenu'] = 0;
        $this->load->module('template');
        $this->template->index($data);
    }
}
