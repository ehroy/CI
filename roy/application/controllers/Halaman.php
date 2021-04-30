<?php
class Halaman extends CI_Controller{
    function view()
    {
        $data['Judul'] = 'Judul Halaman';
        $data['konten'] = "Halaman  ini dipanggil dari view halamn.php";
        
        $this->load->view('hal_view',$data);
    }
}