<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapanr extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'relawan_id', 'tanggapan',
    ];

    protected $hidden = [
    
    ];

    public function relawan()
    {
    	return $this->hasOne(Relawan::class,'id', 'id');
    }

    public function proses()
    {
    return $this->hasMany(Relawan::class, 'status_id','status');
    }

    public function country() {
        return $this->hasOne(Relawan::class);
    }    


    
}