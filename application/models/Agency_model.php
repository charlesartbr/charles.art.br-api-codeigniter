<?php

class Agency_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('agency')->result();
    }

    public function get($id = NULL)
    {
        if($id == NULL)
        {
            return NULL;
        }

        $agency = $this->db->where('AgencyId', $id)->get('agency')->result();

        return $agency? $agency[0] : NULL;
    }
}