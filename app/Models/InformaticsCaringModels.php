<?php

namespace App\Models;

use CodeIgniter\Model;

class InformaticsCaringModels extends Model
{
   protected $table = 'informatics-caring';
   protected $allowedFields = [
        'nama', 'nim', 'kelas', 'angkatan', 'email', 'nomor', 'aspirasi', 'tanggal'
   ];

   public function getData() 
   {
     return $this->findAll();
   }

}