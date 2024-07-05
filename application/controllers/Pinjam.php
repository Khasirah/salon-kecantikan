<?php if (!defined('BASEPATH'))
    exit('No Direct Script Access Allowed');
class Pinjam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        cek_user();
    }
    public function index()
    {
        $data['judul'] = "Data Booking";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pinjam'] = $this->ModelPinjam->joinData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pinjam/data-pinjam', $data);
        $this->load->view('templates/footer');
    }

    public function daftarBooking()
    {
        $data['judul'] = "Data Antrian";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pinjam'] = $this->db->query("select*from booking")->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('booking/daftar-booking', $data);
        $this->load->view('templates/footer');
    }
    public function bookingDetail()
    {
        $id_booking = $this->uri->segment(3);
        $data['judul'] = "Booking Detail";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['agt_booking'] = $this->db->query("select*from booking b, user u where b.id_user=u.id and b.id_booking='$id_booking'")->result_array();
        $data['detail'] = $this->db->query("select id_service,judul_service,pengarang,penerbit,tahun_terbit from booking_detail d, service b where d.id_service=b.id and d.id_booking='$id_booking'")->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('booking/booking-detail', $data);
        $this->load->view('templates/footer');
    }
    public function pinjamAct()
    {
        $id_booking = $this->uri->segment(3);
        $lama = $this->input->post('lama', TRUE);
        $bo = $this->db->query("SELECT*FROM booking WHERE id_booking='$id_booking'")->row();
        $tglsekarang = date('Y-m-d');
        $no_pinjam = $this->ModelBooking->kodeOtomatis('pinjam', 'no_pinjam');
        $databooking = [
            'no_pinjam' => $no_pinjam,
            'id_booking' => $id_booking,
            'tgl_pinjam' => $tglsekarang,
            'no_telp' => $bo->no_telp,
            'tanggal' => $bo->tanggal,
            'jam' => $bo->jam,
            'id_user' => $bo->id_user,
            'tgl_kembali' => date('Y-m-d', strtotime('+' . $lama . ' days', strtotime($tglsekarang))),
            'tgl_pengembalian' => '0000-00-00',
            'status' => 'Belum Lunas',
            'total_denda' => 0
        ];
        $this->ModelPinjam->simpanPinjam($databooking);
        $this->ModelPinjam->simpanDetail($id_booking, $no_pinjam);
        $denda = $this->input->post('denda', TRUE);
        $this->db->query("update detail_pinjam set denda='$denda'");
        //hapus Data booking yang servicenya diambil untuk dipinjam
        $this->ModelPinjam->deleteData('booking', ['id_booking' => $id_booking]);
        $this->ModelPinjam->deleteData('booking_detail', ['id_booking' => $id_booking]);
        //$this->db->query("DELETE FROM booking WHERE id_booking='$id_booking'");
        //update dibooking dan dipinjam pada tabel service saat service yang dibookingdiambil untuk dipinjam
        $this->db->query("UPDATE service, detail_pinjam SET service.dipinjam=service.dipinjam+1, service.dibooking=service.dibooking-1 WHERE service.id=detail_pinjam.id_service");
        $this->session->set_flashdata('pesan', '<div class="alert alert-message alert-success" role="alert">Data Peminjaman Berhasil Disimpan</div>');
        redirect(base_url() . 'pinjam');
    }
    public function ubahStatus()
    {
        $id_service = $this->uri->segment(3);
        $no_pinjam = $this->uri->segment(4);
        $where = ['id_service' => $this->uri->segment(3),];
        $tgl = date('Y-m-d');
        $status = 'Sudah Lunas';
        
        //update status menjadi kembali pada saat service dikembalikan
        $this->db->query("UPDATE pinjam, detail_pinjam SET pinjam.status='$status', pinjam.tgl_pengembalian='$tgl' WHERE detail_pinjam.id_service='$id_service' AND pinjam.no_pinjam='$no_pinjam'");
        
        //update stok dan dipinjam pada tabel service
        $this->db->query("UPDATE service, detail_pinjam SET service.dipinjam=service.dipinjam-1, service.stok=service.stok+1 WHERE service.id=detail_pinjam.id_service");
        $this->session->set_flashdata('pesan', '<div class="laert alert-message alert-success" role="alert"></div>');
        redirect(base_url('pinjam'));
    }

}
