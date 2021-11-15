<?php

namespace App\Models;

use CodeIgniter\Model;

class UbahPaket_Model extends Model
{
    protected $table      = 'ubahpaket';

    protected $allowedFields = ['user', 'paketSaatIni' , 'pilihanPaketBaru', 'kekuranganPembayaran', 'buktiPembayaran'];

    protected $returnType     = 'array';
}