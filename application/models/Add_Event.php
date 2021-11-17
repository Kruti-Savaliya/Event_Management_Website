<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Add_Event extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function fetchtable()  
        {  
            $query = $this->db->get('table_events');  
            return $query->result();  
        }  
}  
?>  