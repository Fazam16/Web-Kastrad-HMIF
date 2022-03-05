<?php

namespace App\Controllers;

class Kastrad extends BaseController
{

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


}