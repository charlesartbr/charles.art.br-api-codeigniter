<?php

class Technology_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('technology')->result();
    }

    public function get($id = NULL)
    {
        if($id == NULL)
        {
            return NULL;
        }

        $technology = $this->db->where('TechnologyId', $id)->get('technology')->result();

        return $technology? $technology[0] : NULL;
    }
}