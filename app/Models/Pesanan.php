<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_pesanan', 
        'status_pesanan', 
        'produk_id',
        
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}


