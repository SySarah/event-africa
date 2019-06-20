<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Food_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get food by id_food
     */
    function get_food($id_food)
    {
        return $this->db->get_where('foods',array('id_food'=>$id_food))->row_array();
    }
        
    /*
     * Get all foods
     */
    function get_all_foods()
    {
        $this->db->order_by('id_food', 'desc');
        return $this->db->get('foods')->result_array();
    }
        
    /*
     * function to add new food
     */
    function add_food($params)
    {
        $this->db->insert('foods',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update food
     */
    function update_food($id_food,$params)
    {
        $this->db->where('id_food',$id_food);
        return $this->db->update('foods',$params);
    }
    
    /*
     * function to delete food
     */
    function delete_food($id_food)
    {
        return $this->db->delete('foods',array('id_food'=>$id_food));
    }
}
