<?php
    
    class Category extends CI_Controller {
        function __construct(){
        parent::__construct();      
        $this->load->helper('url','form');
        $this->load->model('Category_model');
        $this->load->library('pagination');
    }

   //  public function index()
   // {
   //   $this->load->helper('url','form');
   //  $this->load->model('Category_model');

   //      // Judul Halaman
   //      $data['page_title'] = 'List Kategori';

   //      // Dapatkan semua kategori
   //      $data['categories'] = $this->Category_model->get_all_categories();

   //      $this->load->view('category_view', $data);
   //  }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Category_model');
        // Judul Halaman
       $data['page_title'] = 'Buat Kategori';

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'nama',
            'Nama Kategori',
            'required|is_unique[kategori.nama]',
            array(
                'required' => ' Nama Harus diisi.',
                'is_unique' => 'nama ' . $this->input->post('nama') . ' sudah ada.'
            )
        );

        $this->form_validation->set_rules(
            'deskripsi',
            'deskripsi kategori',
            'required|is_unique[kategori.deskripsi]',
            array(
                'required' => ' deskripsi Harus diisi.',
                'is_unique' => 'deskripsi ' . $this->input->post('deskripsi') . ' sudah ada.'
            )
        );

        if($this->form_validation->run() == false){
            $this->load->view('create_category', $data);
        } else {
            $this->Category_model->create_category();
            redirect('Category');
        }
    }

     public function index(){

            $this->load->model('Category_model');
            $data['page_title'] = 'List Artikel';

            $limit_per_page = 3;

            $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

            $total_records = $this->Category_model->get_total();

            if ($total_records > 0) {

                $data['all_categories'] = $this->Category_model->get_all_categories($limit_per_page,$start_index);

                $config['base_url'] = base_url() . 'category/index';
                $config['total_rows'] = $total_records;
                $config['per_page'] = $limit_per_page;

                $this->pagination->initialize($config);

                $data['links'] = $this->pagination->create_links();
                // echo $data['links'];
                // echo $limit_per_page;
                // echo $start_index;
                // echo $total_records;

                 $this->load->view('view_category',$data);
            }
      }

    function edit($id){
    $where = array('id_kategori' => $id);
    $x['data'] = $this->Category_model->edit_data($where,'kategori')->result();
    $this->load->view('edit_category',$x);
}

function update(){
    $id = $this->input->post('id_kategori');
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');

    $data = array(
        'nama' => $nama,
        'deskripsi' => $deskripsi
    );

    $where = array(
        'id_kategori' => $id
    );

    $this->Category_model->update_data($where,$data,'kategori');
    redirect('Category');
}

function hapus($id){

        $where = array('id_kategori' => $id);
        $this->Category_model->hapus_data($where,'kategori');
        redirect('category');
    }
}


?>

