<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kategori extends Model
{
    use  HasFactory;
    protected $table = 'kategoris';
    protected $fillable = [
        'judul',
        'gambar',
        'product_id',
    ];
}
