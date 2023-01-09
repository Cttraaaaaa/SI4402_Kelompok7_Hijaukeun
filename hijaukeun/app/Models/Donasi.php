<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    protected $fillable = ['jumlah', 'nama', 'email', 'pembayaran', 'image', 'harapan'];
    protected $table = 'donasi';
}
