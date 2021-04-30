<?php

class Oop extends CI_controller{
    function __construct(){
        parent::__construct();
        $this->load->model('indek_model');
    }
    function  index(){
        $data = array(
            'konten'=>$this->indek_model->get_data()
        );
        $this->load->view('cetak_model', $data);
        //fungsi dari code diatas ini yaitu dia kan mengeload folder view dan mencetak Cetak model 
        // dari variabel $data yang berbentuk array yang diambil dari Indek_modeld dengan mengambil 
        //class dari get_data dari file Indelk_model
    }
}