<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Relawan extends Model
{
    use HasFactory;
    protected $fillable = ['nik', 'nama','domisili', 'nohp', 'email', 'image'];
    protected $table = 'relawan';

    public function nama() {
        return $this->belongsTo(Relawan::class, 'user_nik', 'nik');
    }

    public function details() {
        return $this->hasMany(Relawan::class, 'id', 'id');
    }

    public function tanggapans() {
    return $this->belongsTo(Relawan::class, 'id', 'id');
    }

    public function tanggapan() {
    return $this->hasOne(Tanggapan::class);
    }

    public function status() {
    return $this->belongsTo(Tanggapan::class, 'status_id','status');
    }

}
