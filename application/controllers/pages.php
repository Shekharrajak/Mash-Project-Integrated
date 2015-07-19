<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('press_model');
			$this->load->model('con_model');
			//$this->load->model('team_model');
			$this->load->model('project_model');
			$this->load->model('event_model');
		}
	public function view ( $page= 'home')
	{
		if(!file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$this->load->helper('url');
		//$data['results'] = $this->press_model->get_press(2);
		$data['results_project'] = $this->project_model->get_project();
		$data['results_event'] = $this->event_model->get_event();
		$data['results_press'] = $this->press_model->get_press();
		$data['size'] = 6;
		$data['size_event'] = 4;
		$data['press_size'] = 6;

		$data['title'] = "Mash Project";
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/nav.php',$data);
		$this->load->view('pages/'.$page.'.php',$data);
		//$this->load->view('templates/press.php',$data);
		$this->load->view('templates/footer.php');
	}

	/*public function index()
	{
		$this->load->view('welcome_message');
	}*/
	public function team ( $page= 'team')
	{
		if(!file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$data['title'] = "Mash Project";
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/nav.php',$data);
		$this->load->view('pages/'.$page.'.php');
		//$this->load->view('templates/press.php',$data);
		$this->load->view('templates/footer.php',$data);
	}
	public function Leadership_Camp ( $page= 'Leadership_Camp')
	{
		if(!file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$data['title'] = "Mash Project";
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/nav.php',$data);
		$this->load->view('pages/'.$page.'.php');
		//$this->load->view('templates/press.php',$data);
		$this->load->view('templates/footer.php',$data);
	}
	public function contributors ( $page= 'contributors')
	{
		if(!file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$this->load->helper('url');
		$data['results'] = $this->con_model->get_con();

		$data['title'] = "Mash Project";
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/nav.php',$data);
		$this->load->view('pages/'.$page.'.php');
		//$this->load->view('templates/press.php',$data);
		$this->load->view('templates/footer.php',$data);
	}
	public function contact ( $page= 'contact')
	{
		if(!file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$data['title'] = "Mash Project";
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/nav.php',$data);
		$this->load->view('pages/'.$page.'.php');
		//$this->load->view('templates/press.php',$data);
		$this->load->view('templates/footer.php',$data);
	}
}
?>

