<?php

namespace App\Controllers;

use App\Models\InformaticsCaringModels;

class Kastrad extends BaseController
{
  
    protected $informaticsModels;

    public function __construct()
    {
      $this->informaticsModels = new InformaticsCaringModels;
    }

    public function index()
    {
      $data = [
        'css' => '../css/style.css',
        'title' => 'Website Kastrad HMIF Unsri Kabinet Adhigana'
      ];
      return view('/pages/index', $data);
    }

    public function form() 
    {
      $data = [
        'css' => '../css/style.css',
        'title' => 'Informatics Caring'
      ];
      return view('pages/form', $data);
    }

    public function update() 
    {
      $tanggal = date('d-m-Y');
                                 

      $this->informaticsModels->save([
      'nama' => $this->request->getPost('nama'),
      'nim' => $this->request->getPost('nim'),
      'kelas' => $this->request->getPost('kelas'),
      'angkatan' => $this->request->getPost('angkatan'),
      'email' => $this->request->getPost('email'),
      'nomor' => $this->request->getPost('wa'),
      'aspirasi' => $this->request->getPost('aspirasi'),
      'nama' => $this->request->getPost('nama'),
      'tanggal' => $tanggal
      ]);

      return redirect()->to('/');
    }

    public function rahasiaKastrad() {

      $data = [
      'css' => '../css/style.css',
      'title' => 'Rahasia Oii',
      'mahasiswa' => $this->informaticsModels->getData()
      ];

      return view('pages/rahasia', $data);
  }

}