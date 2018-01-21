<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends REST_Controller 
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('Job_model', 'job', true);
    }

    public function index_get($id = NULL)
    {
        if($id == NULL)
        {
            $this->response($this->job->get_all());
        }
        
        $this->response($this->job->get($id));
    }
}
