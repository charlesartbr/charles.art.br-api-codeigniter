<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agency extends REST_Controller 
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Agency_model', 'agency', true);
    }

    public function index_get($id = NULL)
    {
        if($id == NULL)
        {
            $this->response($this->agency->get_all());
        }
        
        $this->response($this->agency->get($id));
    }
}
