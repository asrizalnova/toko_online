<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Models_product extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('product');
    }

    public function tambah_product($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_product($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_product($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_product($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id_product)
    {
        $result = $this->db->where('id_product', $id_product)
            ->limit(1)
            ->get('product');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function detail_product($id_product)
    {
        $result = $this->db->where('id_product', $id_product)->get
         ('product');
        if($result->num_rows() > 0){
           return $result->result(); 
        }else {
            return false;
        }
    }
}
