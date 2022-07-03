<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->id = 1;
        $this->mk1->nama = 'Pemrograman Web';
        $this->mk1->sks = 4;
        $this->mk1->kode = 'PW';

        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->id = 2;
        $this->mk2->nama = 'Bahas Inggris';
        $this->mk2->sks = 2;
        $this->mk2->kode = 'BI';

        $this->load->model('matakuliah_model', 'mk3');
        $this->mk3->id = 2;
        $this->mk3->nama = 'Komunikasi Efektif';
        $this->mk3->sks = 2;
        $this->mk3->kode = 'KE';

        $all_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['all_mk'] = $all_mk;
        $this->load->view('matakuliah/index', $data);
    }
}
