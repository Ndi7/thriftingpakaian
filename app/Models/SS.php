<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SS extends Model
{
    use HasFactory;
        protected $table = "sepatusandal";
        protected $primarykey = "id";
        protected $fillable = [
            'id', 'gambar', 'nama_produk_ss', 'deskripsi_ss', 'stok', 'harga_ss'];
}
