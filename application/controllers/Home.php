<?php
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = [
            'judul' => "Katalog Service",
            'kategori' => $this->ModelService->getKategori()->result(),
        ];
        //jika sudah login dan jika belum login
        if ($this->session->userdata('email')) {
            $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
            $data['user'] = $user['nama'];
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('service/daftarservice', $data);
            $this->load->view('templates/templates-user/modal', $data);
            $this->load->view('templates/templates-user/footer', $data);
        } else {
            $data['user'] = 'Pengunjung';
            $this->load->view('templates/templates-user/header', $data);
            $this->load->view('service/daftarservice', $data);
            $this->load->view('templates/templates-user/modal', $data);
            $this->load->view('templates/templates-user/footer', $data);
        }
    }

    public function detailKategori()
    {
        $id = $this->uri->segment(3); // Mengambil ID kategori dari URL segment
        $kategori = $this->ModelService->joinKategoriService(['kategori.id' => $id])->result(); // Mengambil semua service yang terkait dengan kategori
        
        $data['user'] = "Pengunjung";
        $data['title'] = "Detail Service Kategori";
    
        // Menyimpan detail kategori
        if (!empty($kategori)) {
            $data['kategori'] = $kategori[0]->kategori; // Mengambil nama kategori dari hasil query
        } else {
            $data['kategori'] = "Kategori tidak ditemukan";
        }
    
        $data['services'] = $kategori; // Menyimpan semua service terkait dalam array
    
        $this->load->view('templates/templates-user/header', $data);
        $this->load->view('service/detail-kategori', $data);
        $this->load->view('templates/templates-user/modal', $data);
        $this->load->view('templates/templates-user/footer');
    }
    

}


