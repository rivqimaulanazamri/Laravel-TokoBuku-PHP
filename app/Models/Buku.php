<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
     
     protected $table = "tb_buku";  
    
     protected $primaryKey = 'no_buku';  
     protected $fillable = ['kode_buku', 'nama_buku', 'pengarang', 'harga']; 
}