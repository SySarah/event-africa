<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Place_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get place by id_place
     */
    function get_place($id_place)
    {
        return $this->db->get_where('places',array('id_place'=>$id_place))->row_array();
    }
        
    /*
     * Get all places
     */
    function get_all_places()
    {
        $this->db->order_by('id_place', 'desc');
        return $this->db->get('places')->result_array();
    }
        
    /*
     * function to add new place
     */
    function add_place($params)
    {
        $this->db->insert('places',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update place
     */
    function update_place($id_place,$params)
    {
        $this->db->where('id_place',$id_place);
        return $this->db->update('places',$params);
    }
    
    /*
     * function to delete place
     */
    function delete_place($id_place)
    {
        return $this->db->delete('places',array('id_place'=>$id_place));
    }
}
