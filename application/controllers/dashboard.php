<?php

class dashboard extends CI_Controller
{

    public function index()
    {
        $data['product'] = $this->Models_product->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
    public function add_to_cart()
    {
        $id_product = $this->input->post('id_product');
        $qty = $this->input->post('qty');
        if(!$qty){
            echo "<script>alert('Harap masukkan jumlah item');setTimeout(function(){ window.history.go(-1); }, 100);</script>";
            exit;
        }
        if($qty < 50){
            echo "<script>alert('Harap masukkan minimal 50 item');setTimeout(function(){ window.history.go(-1); }, 100);</script>";
            exit;
        }else{
            $product = $this->Models_product->find($id_product);
            $data = array(
                'id'      => $product->id_product,
                'qty'     => $qty,
                'price'   => $product->harga,
                'name'    => $product->nama_product
            );
            $this->cart->insert($data);
            redirect('dashboard');
        }
    }

    public function detail_cart()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('cart');
    }

    public function hapus_cart()
    {
        $this->cart->destroy();
        redirect('dashboard/index');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->Models_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf Pesanan Anda Gagal di Proses!";
        }
    }

    public function detail($id_product)
    {
        $data['product'] = $this->Models_product->detail_product($id_product);
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('detail_product',$data);
            $this->load->view('templates/footer');
    }

    public function detail_user()
    {
      $data['customer'] = $this->model_user->detail_user()->result();
      $this->load->view('templates/header');
      $this->load->view('templates/sidebar');
      $this->load->view('detail_user',$data);
      $this->load->view('templates/footer');
    }
}
