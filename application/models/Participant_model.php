<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Participant_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get participant by id_participant
     */
    function get_participant($id_participant)
    {
        return $this->db->get_where('participants',array('id_participant'=>$id_participant))->row_array();
    }
        
    /*
     * Get all participants
     */
    function get_all_participants()
    {
        $this->db->order_by('id_participant', 'desc');
        return $this->db->get('participants')->result_array();
    }
        
    /*
     * function to add new participant
     */
    function add_participant($params)
    {
        $this->db->insert('participants',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update participant
     */
    function update_participant($id_participant,$params)
    {
        $this->db->where('id_participant',$id_participant);
        return $this->db->update('participants',$params);
    }
    
    /*
     * function to delete participant
     */
    function delete_participant($id_participant)
    {
        return $this->db->delete('participants',array('id_participant'=>$id_participant));
    }
}