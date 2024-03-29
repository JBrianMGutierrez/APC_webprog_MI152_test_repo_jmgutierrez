<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Myreadeditdelete_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get myinput by id
     */
    function get_myinput($id)
    {
        return $this->db->get_where('myinput2',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all myinput
     */
    function get_all_myinput()
    {
        return $this->db->get('myinput2')->result_array();
    }
    
    /*
     * function to add new myinput
     */
    function add_myinput($params)
    {
        $this->db->insert('myinput2',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update myinput
     */
    function update_myinput($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('myinput2',$params);
        if($response)
        {
            return "myinput updated successfully";
        }
        else
        {
            return "Error occuring while updating myinput";
        }
    }
    
    /*
     * function to delete myinput
     */
    function delete_myinput($id)
    {
        $response = $this->db->delete('myinput2',array('id'=>$id));
        if($response)
        {
            return "myinput deleted successfully";
        }
        else
        {
            return "Error occuring while deleting myinput";
        }
    }
}
