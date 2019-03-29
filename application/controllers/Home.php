<?php
class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('index');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function blog()
	{
		$this->load->view('blog');
	}

	public function blog_single()
	{
		$this->load->view('blog-single');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function elements()
	{
		$this->load->view('elements');
	}

	public function projects()
	{
		$this->load->view('projects');
	}

	public function service()
	{
		$this->load->view('service');
	}
}
