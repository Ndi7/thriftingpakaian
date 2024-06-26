<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk', 'deskripsi', 'harga', 'is_sold', 'is_kept'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
