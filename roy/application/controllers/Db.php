<?php

class Db extends CI_Controller
{
    private function index(){
        echo "Hello Ahmad suroyya mutsaddad";
    }
    public function panggil(){
        $this->index();
    }
}