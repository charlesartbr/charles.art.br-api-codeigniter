<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Technology extends REST_Controller 
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Technology_model', 'technology', true);
    }

    public function index_get($id = NULL)
    {
        if($id == NULL)
        {
            $this->response($this->technology->get_all());
        }
        
        $this->response($this->technology->get($id));
    }
}
