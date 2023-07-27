<?php

namespace app\Controllers;

use  CodeIgniter\Controller;
class FormController extends Controller
{
    /**
     * Summary of index
     * @return string
     */
    public function index()
    {
        return view('form_result');
    }
   /**
    * Summary of submit
    * @return string
    */
   public function submit(){
        $nama = $this -> request ->getPost('nama');
        $nim = $this -> request ->getPost('nim');
        $kelas = $this -> request ->getPost('kelas');
        $matakuliah = $this -> request ->getPost('matakuliah');
        $dosen = $this -> request ->getPost('dosen');
        $asisten = $this -> request ->getPost('asisten');

        $data =[
            'nama' => $nama,
            'nim' => $nim,
            'kelas' => $kelas,
            'matakuliah' => $matakuliah,
            'dosen' => $dosen,
            'asisten' => $asisten,
        ];

        return view('form_result', $data);
   } 
}

?>