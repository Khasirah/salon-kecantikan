<?php
defined('BASEPATH') or exit('No direct script access allowed');
class service extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    //manajemen service
    public function index()
    {
        $data['judul'] = 'Data service';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['service'] = $this->ModelService->tampil()->result_array();
        $data['kategori'] = $this->ModelService->getKategori()->result_array();

        $this->form_validation->set_rules('judul_service', 'Judul 
service', 'required|min_length[3]', [
            'required' => 'Judul service harus diisi',
            'min_length' => 'Judul service terlalu pendek'
        ]);



        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '2000';
        $config['max_height'] = '2000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('service/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }
            $data = [
                'judul_service' => $this->input->post('judul_service',true),
                'nama_kategori' => $this->input->post('nama_kategori',true),
                'dibooking' => 0,
                'image' => $gambar
            ];
            $this->ModelService->simpanservice($data);
            redirect('service');
        }
    }
    public function kategori()
{
    $data['judul'] = 'Kategori Service';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['service'] = $this->ModelService->tampil()->result_array();
    $data['kategori'] = $this->ModelService->getKategori()->result_array();

    $this->form_validation->set_rules(
        'kategori',
        'Kategori',
        'required',
        [
            'required' => 'Judul service harus diisi'
        ]
    );

    // Konfigurasi untuk upload gambar
    $config['upload_path'] = './assets/img/upload/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '3000';
    $config['max_width'] = '3000';
    $config['max_height'] = '3000';
    $config['file_name'] = 'img' . time();

    $this->load->library('upload', $config);

    if ($this->form_validation->run() == false) {
        // Jika validasi form gagal, tampilkan halaman kategori
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('service/kategori', $data);
        $this->load->view('templates/footer');
    } else {
        // Jika validasi form berhasil
        if ($this->upload->do_upload('image')) {
            $image = $this->upload->data();
            $gambar = $image['file_name']; // Ambil nama file hasil upload
        } else {
            $gambar = ''; // Set gambar kosong jika upload gagal
        }

        // Simpan data kategori beserta nama file gambar (jika ada)
        $data = [
            'kategori' => $this->input->post('kategori', true),
            'image' => $gambar // Masukkan nama file ke dalam data
        ];

        $this->ModelService->simpanKategori($data);

        // Redirect ke halaman kategori
        redirect('service/kategori');
    }
}


    public function hapusKategori()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelService->hapusKategori($where);
        redirect('service/kategori');
    }


    // voucher
    public function voucher()
    {
        $data['judul'] = 'Voucher Service';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['voucher'] = $this->ModelService->getVoucher()->result_array();
        $this->form_validation->set_rules(
            'voucher',
            'Voucher',
            'required',
            [
                'required' => 'Nama voucher harus diisi'
            ]
        );
        $this->form_validation->set_rules('voucher', 'Voucher', 'required|min_length[3]', [
            'required' => 'Voucher harus diisi',
            'min_length' => 'Voucher terlalu pendek'
        ]);

        $this->form_validation->set_rules(
            'potongan',
            'Potongan',
            'required|numeric',
            [
                'required' => 'Potongan harus diisi',
                'numeric' => 'Yang anda masukan bukan angka'
            ]
        );
        $this->form_validation->set_rules('expired', 'Expired', 'required|date', [
            'required' => 'Tanggal expired harus diisi',
            'date' => 'Format tanggal expired tidak valid'
        ]);
        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '3000';
        $config['max_height'] = '3000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('service/voucher', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }
            $data = [
                'voucher' => $this->input->post(
                    'voucher',
                    true

                ),
                'potongan' => $this->input->post(
                    'potongan',
                    true

                ),
                'expired' => $this->input->post(
                    'expired',
                    true
                ),

                'image' => $gambar
            ];
            $this->ModelService->simpanVoucher($data);
            redirect('service/voucher');
        }
    }



    public function hapusVoucher()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelService->hapusVoucher($where);
        redirect('service/voucher');
    }



    public function hapusService()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelService->hapusService($where);
        redirect('service');
    }
    public function ubahservice()
    {
        $data['judul'] = 'Ubah Data service';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['service'] = $this->ModelService->serviceWhere(['id' => $this->uri->segment(3)])->result_array();
        $kategori = $this->ModelService->joinKategoriService([
            'service.id' =>
                $this->uri->segment(3)
        ])->result_array();
        $data['id'] = ''; // Inisialisasi variabel $data['id'] dengan nilai default (string kosong)
        $data['k'] = '';  // Inisialisasi variabel $data['k'] dengan nilai default (string kosong)

        foreach ($kategori as $k) {
            // Pastikan kunci 'nama_kategori' dan 'kategori' ada dalam $k sebelum mengaksesnya
            if (isset($k['nama_kategori']) && isset($k['kategori'])) {
                $data['id'] = $k['nama_kategori'];
                $data['k'] = $k['kategori'];
            }
        }
        $data['kategori'] = $this->ModelService->getKategori()->result_array();
        $this->form_validation->set_rules('judul_service', 'Judul 
service', 'required|min_length[3]', [
            'required' => 'Judul service harus diisi',
            'min_length' => 'Judul service terlalu pendek'
        ]);



        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();
        //memuat atau memanggil library upload
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('service/ubah_service', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }
            $data = [
                'judul_service' => $this->input->post(
                    'judul_service',
                    true
                ),
                'nama_kategori' => $this->input->post(
                    'nama_kategori',
                    true
                ),

                'image' => $gambar
            ];
            $this->ModelService->updateservice($data, ['id' => $this->input->post('id')]);
            redirect('service');
        }
    }


}

