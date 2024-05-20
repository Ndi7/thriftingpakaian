<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PA extends Model
{
    use HasFactory;
    protected $table = "pakaianatas";
    	protected $primarykey = "id";
    	protected $fillable = [
            'id', 'nama_produk_pa', 'deskripsi_pa', 'jumlah_pa', 'harga_pa'];
}
