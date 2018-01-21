<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Technology extends REST_Controller 
{
    public function index_get()
    {
        $this->response($this->db->get('technology')->result());
    }
}
