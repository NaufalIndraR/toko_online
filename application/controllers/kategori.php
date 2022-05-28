<?php

class Kategori extends CI_Controller{
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }
    public function handphone()
    {
        $data['handphone'] = $this->model_kategori->data_handphone()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('handphone', $data);
        $this->load->view('templates/footer');
    }
    public function televisi()
    {
        $data['televisi'] = $this->model_kategori->data_televisi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('televisi', $data);
        $this->load->view('templates/footer');
    }
    public function laptop()
    {
        $data['laptop'] = $this->model_kategori->data_laptop()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('laptop', $data);
        $this->load->view('templates/footer');
    }
    public function konsol()
    {
        $data['konsol'] = $this->model_kategori->data_konsol()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('konsol', $data);
        $this->load->view('templates/footer');
    }
}