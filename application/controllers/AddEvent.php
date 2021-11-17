<?php
class AddEvent extends CI_Controller {
    public function __construct() {


        parent::__construct();
        $this->load->model("Add_Event", "a");  

        
    }


    function index()
    {
        $this->load->database('$config');
        $this->load->helper('form');
        $this->load->view("addEvent"); 
        

    }
    public function submitted() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre','Nombre', 'required');
        $this->form_validation->set_rules('responsable','Responsible', 'required');
        $this->form_validation->set_rules('lugar','Lugar', 'required');
        $this->form_validation->set_rules('fetcha','Fecha', 'required');
        $this->form_validation->set_rules('hora','Hora', 'required');
        $this->form_validation->set_rules('contrasena','Contrasena', 'required');

        if($this->form_validation->run()){




            echo "Validation Successful";
            $data = array(  
                        'E_Name'   => $this->input->post('nombre'),  
                        'Responsible'  => $this->input->post('responsable'),  
                        'Place'   => $this->input->post('lugar'),  
                        'Hours' => $this->input->post('hora'),
                        'Date'   => $this->input->post('fetcha'),  
                        'Ticket_Value' => $this->input->post('contrasena'),
                        'Details'   => $this->input->post('nombre')

                        );  
        //insert data into database table.  
            $this->db->insert('table_events',$data);  
            $this->load->view("pages/listEvents");  

        }
        else{
            echo "Validation Error";
            $this->load->view("pages/addEvent");  

        }
    }
}
?>