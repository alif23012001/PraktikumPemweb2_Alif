<?php
class Mahasiswa_model extends CI_Model{
    // buat property atau variabel
    public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tgl_hahir;
    public $tmp_lahir;
    public $prodi;
    public $ipk;

    public function predikat(){
        // contoh pengguunaan ternary operator
        if($this->ipk >= 3.75){
            return "Cumlaude";
        }
        elseif($this->ipk < 3.75){
            return "Baik";
        }
        elseif($this->ipk < 3.00){
            return "Cukup";
        }
        elseif($this->ipk < 2.50){
            return "Kurang";
        }
        else{
            return "default";
        }
    }

}
