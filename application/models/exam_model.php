<?php

class Exam_Model extends CI_Model{
    
    function __construc(){
        parent::__construct();
        $this->load->database();
    }
    
    
    
    public function basic_details($data = array())
    {
       if($this->db->insert("user_details",$data)){
        return $this->db->insert_id();
        //return true;
       }

    }

    public function conctact_details($id,$data)
    {
       /*if($this->db->insert("user_details",$data)){
        //return $this->db->last_insert_id(resource);
        return true;
       } */

       $this->db->trans_start();
       $this->db->where('id',$id);
       $this->db->update("user_details",$data);
       $this->db->trans_complete();

       if($this->db->affected_rows() == '1')
       {
        return true;
       }
       else
       {
        if($this->db->trans_status() == FALSE)
        {
            return false;
        }
        return true;
       }

    }
}

?>