<?php


class Signup extends CI_Controller{
	function index(){
		$this->load->helper('form');
		$this->load->view('signup');
		$this->load->view('signupAgent');
		$this->load->view('signupBusiness');
		$this->load->view('signupIndividual');
	}
	function signupAgent(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('username','User Name', 'required');
        $this->form_validation->set_rules('Contraseña','Contraseña', 'required');
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('Apellido','Apellido', 'required');
        $this->form_validation->set_rules('Dirección','Dirección', 'required');
        $this->form_validation->set_rules('Ciudad','Ciudad', 'required');
        $this->form_validation->set_rules('códigopostal','códigopostal', 'required');
        $this->form_validation->set_rules('select','Estado', 'required');
        if($this->form_validation->run()){
            echo "Validation Successful";
            
            $data = array(  
                        'A_Mail'   => $this->input->post('username'),  
                        'Password'  => $this->input->post('Contraseña'),  
                        'First_Name'   => $this->input->post('name'),  
                        'Last_Name' => $this->input->post('Apellido'),
                        'Address'   => $this->input->post('Dirección'),  
                        'City' => $this->input->post('Ciudad'),
                        'State'   => $this->input->post('select'),
                        'Postal_Code' => $this->input->post('códigopostal'),
                        'Registered_Name'   => $this->input->post('username')                        

                        );  
        //insert data into database table.  
            $this->db->insert('table_agents',$data);  
            $this->load->view("pages/login"); 
        }
        else{
            $this->load->view("pages/signupAgent");
        }
	}
	function signupBusiness(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('username','User Name', 'required');
        $this->form_validation->set_rules('Contraseña','Contraseña', 'required');
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('Apellido','Apellido', 'required');
        $this->form_validation->set_rules('Dirección','Dirección', 'required');
        $this->form_validation->set_rules('Ciudad','Ciudad', 'required');
        $this->form_validation->set_rules('códigopostal','códigopostal', 'required');
        $this->form_validation->set_rules('select','Estado', 'required');
        $this->form_validation->set_rules('optradio','Optradio', 'required');
        if($this->form_validation->run()){
            echo "Validation Successful";
            $data = array(  
                        'A_Mail'   => $this->input->post('username'),  
                        'Password'  => $this->input->post('Contraseña'),  
                        'First_Name'   => $this->input->post('name'),  
                        'Last_Name' => $this->input->post('Apellido'),
                        'Address'   => $this->input->post('Dirección'),  
                        'City' => $this->input->post('Ciudad'),
                        'State'   => $this->input->post('select'),
                        'Postal_Code' => $this->input->post('códigopostal'),
                        'Registered_Name'   => $this->input->post('username')                        

                        );  
        //insert data into database table.  
            $this->db->insert('table_agents',$data);  
            $this->load->view("pages/login");

          
        }
        else{
            $this->load->view("pages/signupBusiness");
        }
	}
	function signupIndividual(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('username','User Name', 'required');
        $this->form_validation->set_rules('Contraseña','Contraseña', 'required');
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('Apellido','Apellido', 'required');
        $this->form_validation->set_rules('Dirección','Dirección', 'required');
        $this->form_validation->set_rules('Ciudad','Ciudad', 'required');
        $this->form_validation->set_rules('códigopostal','códigopostal', 'required');
        $this->form_validation->set_rules('select','Estado', 'required');
        if($this->form_validation->run()){
            echo "Validation Successful";
            $data = array(  
                        'A_Mail'   => $this->input->post('username'),  
                        'Password'  => $this->input->post('Contraseña'),  
                        'First_Name'   => $this->input->post('name'),  
                        'Last_Name' => $this->input->post('Apellido'),
                        'Address'   => $this->input->post('Dirección'),  
                        'City' => $this->input->post('Ciudad'),
                        'State'   => $this->input->post('select'),
                        'Postal_Code' => $this->input->post('códigopostal'),
                        'Registered_Name'   => $this->input->post('username')                        

                        );  
        //insert data into database table.  
            $this->db->insert('table_agents',$data);  
            $this->load->view("pages/login");


        }
        else{
            $this->load->view("pages/signupIndividual");
        }
	}
}