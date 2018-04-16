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
		$data['blog'] = $this->blog_data->get_data()->result();
		$this->load->view('ml', $data);
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
		$this->load->library('form_validation');
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

	function edit($id){
	$where = array('id' => $id);
	$data['blog'] = $this->blog_data->edit_data($where,'blog')->result();
	$this->load->view('edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$judul = $this->input->post('judul');
	$tanggal = $this->input->post('tanggal');
	$author = $this->input->post('author');
	$konten = $this->input->post('konten');
	// $gambar = $this->input->post('gambar');

	$data = array(
		'judul' => $judul,
		'tanggal' => $tanggal,
		'author' => $author,
		'konten' => $konten
		// 'gambar' => $gambar
	);

	$where = array(
		'id' => $id
	);

	$this->blog_data->update_data($where,$data,'blog');
	redirect('Blog/fahrul');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->blog_data->hapus_data($where,'blog');
		redirect('Blog/fahrul');
	}

	function aksi(){
		$this->form_validation->set_rules('judul','judul','required');
		$this->form_validation->set_rules('tanggal','tanggal','required');
		$this->form_validation->set_rules('author','author','required');
 		$this->form_validation->set_rules('konten','konten','required');
 		$this->form_validation->set_rules('gambar','gambar','required');
 
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('create');
		}
	}
}
?>