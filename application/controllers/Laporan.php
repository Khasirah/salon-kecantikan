<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function laporan_service()
    {
        $data['judul'] = 'Laporan Data service';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['service'] = $this->ModelService->getservice()->result_array();
        $data['kategori'] = $this->ModelService->getKategori()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('service/laporan_service', $data);
        $this->load->view('templates/footer');
    }
    public function cetak_laporan_service()
    {
        $data['service'] = $this->ModelService->getservice()->result_array();
        $data['kategori'] = $this->ModelService->getKategori()->result_array();
        $this->load->view('service/laporan_print_service', $data);
    }
    public function laporan_service_pdf()
    {
        $data['service'] = $this->ModelService->getservice()->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/web3/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('service/laporan_pdf_service', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_service.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }
    public function export_excel()
    {
        $data = array('title' => 'Laporan service', 'service' => $this->ModelService->getservice()->result_array());
        $this->load->view('service/export_excel_service', $data);
        $this->load->view('service/export_excel_service', $data);
    }

    //laporan anggota//

    public function laporan_anggota()
    {
        $data['judul'] = 'Laporan Data Anggota';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit(1)->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('service/laporan_anggota', $data);
        $this->load->view('templates/footer');
    }
    public function cetak_laporan_anggota()
    {
        $data['anggota'] = $this->ModelUser->getUserLimit(1)->result_array();
        $this->load->view('service/laporan_print_anggota', $data);
    }
    public function laporan_anggota_pdf()
    {
        $data['anggota'] = $this->ModelUser->getUserLimit(1)->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/web3/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('service/laporan_pdf_anggota', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_anggota.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan
    }
    public function export_excel_anggota()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data = array('title' => 'Laporan Anggota');
        $data['anggota'] = $this->ModelUser->getUserLimit(1)->result_array();
        $this->load->view('service/export_excel_anggota', $data);
        $this->load->view('service/export_excel_anggota', $data);
    }
    public function laporan_pinjam()
    {
        $data['judul'] = 'Data Laporan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,service b,user u where d.id_service=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pinjam/laporan-pinjam', $data);
        $this->load->view('templates/footer');
    }
    public function cetak_laporan_pinjam()
    {
        $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,service b,user u where d.id_service=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
        $this->load->view('pinjam/laporan-print-pinjam', $data);
    }
    public function laporan_pinjam_pdf()
    {
        $data['laporan'] = $this->db->query("select * from pinjam p,detail_pinjam d,service b,user u where d.id_service=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/web3/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('pinjam/laporan-pdf-pinjam', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan data peminjaman.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan

    }
    public function export_excel_pinjam()
    {
        $data = array(
            'title' => 'Laporan Data Peminjaman service',
            'laporan' => $this->db->query("select * from pinjam p,detail_pinjam d,service b,user u where d.id_service=b.id and p.id_user=u.id and p.no_pinjam=d.no_pinjam")->result_array()
        );
        $this->load->view('pinjam/export-excel-pinjam', $data);
    }


}
