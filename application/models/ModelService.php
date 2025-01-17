<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelService extends CI_Model
{
    //manajemen service
    public function getService()
    {
        return $this->db->get('service');
    }
    public function serviceWhere($where)
    {
        return $this->db->get_where('service', $where);
    }
    public function simpanService($data = null)
    {
        $this->db->insert('service', $data);
    }
    public function updateService($data = null, $where = null)
    {
        $this->db->update('service', $data, $where);
    }
    public function hapusService($where = null)
    {
        $this->db->delete('service', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('service');
        return $this->db->get()->row($field);
    }

    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }
    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }
    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }
    public function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }
    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }
    //join
    public function joinKategoriService($where)
    {
        $this->db->from('service');
        $this->db->join('kategori', 'kategori.id = service.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }

    public function tampil($where = null)
    {
        return $this->db->get_where('service', $where);
    }
    public function getLimitService()
    {
        $this->db->limit(5);
        return $this->db->get('service');
    }
    

}