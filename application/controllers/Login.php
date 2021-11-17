<?php
class Login extends CI_Controller {
    public function __construct() {


        parent::__construct();
        $this->load->model("Log_In", "a"); 

    }


    function index()
    {
        $this->load->helper('form');
        

    }
    function login_person() {

        $this->load->helper('form'); 
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','User Name', 'required|valid_email');
        $this->form_validation->set_rules('password','Password', 'required');
        if($this->form_validation->run()){

            //table agents
            $data3 = array(  
                        'A_Mail'   => $this->input->post('username'),  
                        'Password'  => $this->input->post('password')
                        );
            //table individual                          
            $data1 = array(
                        'I_Mail'   => $this->input->post('username'),  
                        'Password'  => $this->input->post('password')
            );
            //table organization
            $data2 = array(
                        'O_Mail'   => $this->input->post('username'),  
                        'Password'  => $this->input->post('password')
            );
            $query1 = $this->db->get('table_agents');
            $query2 = $this->db->get('table_individual');
            $query3 = $this->db->get('table_organization');
            foreach ($query1->result() as $row)
            {
                    if($row->A_Mail == $this->input->post('username'))
                    {
                        if($row->Password == $this->input->post('password')){
                            echo "Logged in as Agent";
                            $this->load->view('pages/profileAgent');
                            $_SESSION['item']=$this->input->post('username');
                        }
                    }
            }
            foreach ($query2->result() as $row)
            {
                    if($row->I_Mail == $this->input->post('username'))
                    {
                        if($row->Password == $this->input->post('password')){
                            echo "Logged in as individual";
                            $this->load->view('pages/profileIndividual');
                            $_SESSION['item']=$this->input->post('username');

                        }
                    }
            }
            foreach ($query3->result() as $row)
            {
                    if($row->O_Mail == $this->input->post('username'))
                    {
                        if($row->Password == $this->input->post('password')){
                            echo "Logged in as Business";
                            $this->load->view('pages/profileBusiness');
                            $_SESSION['item']=$this->input->post('username');

                        }
                    }
            }
        }
        else{
        $this->load->view('templates/header.php');
            $this->load->view('pages/login');
                $this->load->view('templates/footer1.php');

        }

    }
}
?>
