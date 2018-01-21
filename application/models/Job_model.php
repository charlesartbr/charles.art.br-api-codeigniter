<?php

class Job_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->from('job')->order_by('PublishYear', 'DESC')->order_by('JobId', 'DESC')->get()->result();
    }

    public function get($id = NULL)
    {
        if($id == NULL)
        {
            return NULL;
        }

        $job = $this->db->where('JobId', $id)->get('job')->result();

        return $job? $job[0] : NULL;
    }
}