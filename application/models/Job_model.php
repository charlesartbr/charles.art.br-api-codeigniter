<?php

class Job_model extends CI_Model
{
    public function get_all()
    {
        $jobs = $this->db->from('job')->order_by('PublishYear', 'DESC')->order_by('JobId', 'DESC')->get()->result();

        $this->db->from('job_technology');
        $this->db->join('technology', 'technology.TechnologyId = job_technology.TechnologyId');
        $this->db->join('type', 'type.TypeId = technology.TypeId');

        $technogies = $this->db->order_by('type.Priority')->order_by('JobId')->get()->result();

        foreach($jobs as $job)
        {
            $job->technologies = array();

            foreach($technogies as $technology)
            {
                if($technology->JobId == $job->JobId)
                {
                    $job->technologies[] = $technology->TechnologyId;
                }
            }
        }

        return $jobs;
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