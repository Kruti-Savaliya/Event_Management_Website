<?php
class Contactus extends CI_Controller {
    public function __construct() {


        parent::__construct();
        $this->load->model("Contact_Us", "a");  
        
    }


    function index()
    {

        $this->load->helper('form');
        $this->load->view("contactus"); 
        

    }
    public function data_submitted() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','User Name', 'required');
        $this->form_validation->set_rules('apellido','Apellido', 'required');
        $this->form_validation->set_rules('correo','Correo', 'required');
        $this->form_validation->set_rules('tema','Tema', 'required');
        $this->form_validation->set_rules('message','Message', 'required');
        if($this->form_validation->run()){
            echo "Validation Successful";
            echo "Validation Successful";
            $data = array(  
                        'nombre'   => $this->input->post('username'),  
                        'apellido'  => $this->input->post('apellido'),  
                        'correo'   => $this->input->post('correo'),  
                        'tema' => $this->input->post('tema'),
                        'message'   => $this->input->post('message') 
                        );  
        //insert data into database table.  
            $this->db->insert('contact',$data);  
            $this->load->view('pages/contactus');
        }
        else{
            echo "Validation Error";
        }
    }
}
?>
