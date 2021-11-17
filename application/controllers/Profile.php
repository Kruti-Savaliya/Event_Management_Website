<?php


class Profile extends CI_Controller{
    public function __construct()  
    {  
        parent::__construct();  
  
        //calling model  
        $this->load->model("Log_In", "a");
    } 
	function index(){
		$this->load->helper('form');
		$this->load->view('profileAgent');
		$this->load->view('profileBusiness');
		$this->load->view('profileIndividual');

	}
	function profile_Agent(){
		echo "In profile agent function";
		$this->load->library('form_validation');
        $this->form_validation->set_rules('username','User Name', 'required|valid_email');
        $this->form_validation->set_rules('correo','Correo', 'required');
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('telefono','Telefono', 'required');
        $this->form_validation->set_rules('usuario','Ususario', 'required');
        $this->form_validation->set_rules('contrasena','Contraseña', 'required');
        if($this->form_validation->run()){
            echo "Validation Successful";
            $data = array(  
                        'A_Mail'   => $this->input->post('correo'),  
                        'First_Name'  => $this->input->post('username'),
                        'Registered_Name'   => $this->input->post('usuario'),  
                        'Telephone'  => $this->input->post('telefono'),
                        'Last_Name'   => $this->input->post('name'),  
                        'Password'  => $this->input->post('contrasena')
                    );
            $this->db->where('A_Mail', $this->session->item);
            $this->db->update('table_agents', $data);
            $this->load->view("pages/profileAgent");


        }
        else{
            echo "Validation Error";
            $this->load->view("pages/profileAgent");

        }
	}
	function profile_Business(){
		echo "In profile business function";
		$this->load->library('form_validation');
        $this->form_validation->set_rules('username','User Name', 'required');
        $this->form_validation->set_rules('correo','Correo', 'required');
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('telefono','Telefono', 'required');
        $this->form_validation->set_rules('usuario','Ususario', 'required');
        $this->form_validation->set_rules('contrasena','Contraseña', 'required');
        if($this->form_validation->run()){
            echo "Validation Successful";
            $data = array(  
                        'O_Mail'   => $this->input->post('correo'),  
                        'First_Name'  => $this->input->post('username'),
                        'Organization_Name'   => $this->input->post('usuario'),  
                        'Telephone'  => $this->input->post('telefono'),
                        'Last_Name'   => $this->input->post('name'),  
                        'Password'  => $this->input->post('contrasena')
                    );
            $this->db->where('O_Mail', $this->session->item);
            $this->db->update('table_organization', $data);
            $this->load->view("pages/profileBusiness");


        }
        else{
            echo "Validation Error";
            $this->load->view("pages/profileBusiness");

        }
	}
	function profile_Individual(){
		echo "In profile individual function";
		$this->load->library('form_validation');
        $this->form_validation->set_rules('username','User Name', 'required');
        $this->form_validation->set_rules('correo','Correo', 'required');
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('telefono','Telefono', 'required');
        $this->form_validation->set_rules('usuario','Ususario', 'required');
        $this->form_validation->set_rules('contrasena','Contraseña', 'required');
        if($this->form_validation->run()){
            echo "Validation Successful";
            $data = array(  
                        'I_Mail'   => $this->input->post('correo'),  
                        'First Name'  => $this->input->post('username'),
                        'Telephone'  => $this->input->post('telefono'),
                        'Last Name'   => $this->input->post('name'),  
                        'Password'  => $this->input->post('contrasena')
                    );
            $this->db->where('I_Mail', $this->session->item);
            $this->db->update('table_individual', $data);
            $this->load->view("pages/profileIndividual");
        }
        else{
            echo "Validation Error";
            $this->load->view("pages/profileIndividual");
        }
	}
}

