<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends REST_Controller 
{
    public function index_get($id = NULL)
    {
        $index = array("agency", "job", "technology");

        $this->response($index);
    }
}
