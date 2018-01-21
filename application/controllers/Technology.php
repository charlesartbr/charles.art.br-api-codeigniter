<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Technology extends REST_Controller 
{
    public function index_get($id = NULL)
    {
        if($id == NULL)
        {
            $this->response($this->db->get('technology')->result());
        }

        $technology = $this->db->where('TechnologyId', $id)->get('technology')->result();

        $this->response($technology? $technology[0] : NULL);
    }
}
