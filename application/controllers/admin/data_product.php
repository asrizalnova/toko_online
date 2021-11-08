<?php

class Data_product extends CI_Controller
{
    public function index()
    {
        $data['product'] = $this->Models_product->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_product', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $id_product   = $this->input->post('id_product');
        $nama_product = $this->input->post('nama_product');
        $harga        = $this->input->post('harga');
        $kategori     = $this->input->post('kategori');
        $keterangan   = $this->input->post('keterangan');
        $stok         = $this->input->post('stok');
        $image   = $_FILES['image']['name'];
        if ($image = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "Gambar Gagal Di Upload!";
            } else {
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_product'   => $id_product,
            'nama_product' => $nama_product,
            'harga'        => $harga,
            'kategori'     => $kategori,
            'keterangan'   => $keterangan,
            'keterangan'   => $stok,
            'image'        => $image
        );
        $this->Models_product->tambah_product($data, 'product');
        redirect('admin/data_product/index');
    }

    public function edit($id_product)
    {
        $where = array('id_product' => $id_product);
        $data['product'] = $this->Models_product->edit_product($where, 'product')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_product', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id_product     = $this->input->post('id_product');
        $nama_product   = $this->input->post('nama_product');
        $harga          = $this->input->post('harga');
        $kategori       = $this->input->post('kategori');
        $image       = $this->input->post('image');
        $keterangan     = $this->input->post('keterangan');
        $stok           = $this->input->post('stok');

        $data = array(
            'id_product'   => $id_product,
            'nama_product' => $nama_product,
            'harga'        => $harga,
            'kategori'     => $kategori,
            'image'        => $image,
            'keterangan'   => $keterangan,
            'stok'   => $stok,
        );
        $where = array(
            'id_product' => $id_product
        );

        $this->Models_product->update_product($where, $data, 'product');
        redirect('admin/data_product/index');
    }

    public function hapus($id_product)
    {
        $where = array('id_product' => $id_product);
        $this->Models_product->hapus_product($where, 'product');
        redirect('admin/data_product/index');
    }
}
