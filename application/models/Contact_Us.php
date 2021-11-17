<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Contact_Us extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function fetchtable()  
        {  
            $query = $this->db->get('contact');  
            return $query->result();  
        }  
}  
?>  