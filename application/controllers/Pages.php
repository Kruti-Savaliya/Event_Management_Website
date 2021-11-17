<?php
	class Pages extends CI_Controller{
		public function view($page = 'index'){
			if(! file_exists( APPPATH.'/views/pages/'.$page.'.php')){
				show_404();
			}
			$this->load->helper('form') ;
			$data['title'] = ucfirst($page);
			if($page=='profileAgent'){
				$this->load->view('templates/header1');
			}
			if($page=='addEvent'){
				//do import nothing
			}
			else if($page=='profileIndividual'){
				$this->load->view('templates/header2');
			}
			else{
				$this->load->view('templates/header');
			}
			
			$this->load->view('pages/'.$page,$data);
			$this->load->view('templates/footer1');

		}
	}