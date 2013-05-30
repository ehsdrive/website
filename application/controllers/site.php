<?php
	Class Site extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
        public function index()
        {
            $this->home();
        }
        public function home(){
			$data['main_content']	=	"home";
			$this->load->view('template',$data);
		}
		public function contact_us(){
			$data['main_content']	=	"contact_us";
			$this->load->view('template',$data);
		}
		public function about_us(){
			$data['main_content']	=	"about_us";
			$this->load->view('template',$data);
		}
	}
?>