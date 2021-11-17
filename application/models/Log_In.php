<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Log_In extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function fetchtable_agent()  
        {  
            $query = $this->db->get('table_agents');  
            return $query->result();  
        } 
        function fetchtable_business()  
        {  
            $query = $this->db->get('table_organization');  
            return $query->result();  
        } 
        function fetchtable_individual()  
        {  
            $query = $this->db->get('table_individual');  
            return $query->result();  
        }  
}  
?>  