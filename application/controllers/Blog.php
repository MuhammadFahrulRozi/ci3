<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$data['blog'] = $this->blog_data->get_data()->result();
		$this->load->view('create',$data);
	}

	public function fahrul()
	{
		$this->load->view('ml');
	}

	public function fahrul1()
	{
		$this->load->view('hiking');
	}

	public function fahrul2()
	{
		$this->load->view('anime');
	}

	public function fahrul3()
	{
		$this->load->view('create');
	}

	function __construct(){
		parent::__construct();
		$this->load->model('blog_data');
		$this->load->helper('url');	
	}

	function tambah(){
		$this->load->view('create');
	}

	function tambah_aksi(){
		$this->load->helper('form');
		$config['upload_path']   = 'assets/images/Upload';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
			
		$judul   = $this->input->post('judul');
		$tanggal = $this->input->post('tanggal');
		$author  = $this->input->post('author');
		$konten  = $this->input->post('konten');
		$gambar  = $this->upload->data('file_name');
		
		$data = array(
				'judul' => $this->input->post('judul'),
				'tanggal' => $this->input->post('tanggal'),
				'author' => $this->input->post('author'),
				'konten' => $this->input->post('konten'),
				'gambar' => $gambar
		);
		echo print_r($data);
		$this->blog_data->input_data($data,'blog');
		redirect('Blog');
		}
	}
}
?>