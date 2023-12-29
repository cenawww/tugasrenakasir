<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

    public function index() {
        $data['title'] = 'Program Kasir Sederhana';
        $this->load->view('header', $data);
        $this->load->view('kasir/index');
        $this->load->view('footer');
    }

    public function proses_pembayaran() {
        $item = $this->input->post('item');
        $harga = $this->input->post('harga');
        $quantity = $this->input->post('quantity');

        $total = $harga * $quantity;

        $data['title'] = 'Pembayaran Berhasil';
        $data['item'] = $item;
        $data['harga'] = $harga;
        $data['quantity'] = $quantity;
        $data['total'] = $total;

        $this->load->view('header', $data);
        $this->load->view('kasir/hasil_pembayaran', $data);
        $this->load->view('footer');
    }
}
?>
