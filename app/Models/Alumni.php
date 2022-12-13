<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    public function jabatan(){

        return $this->belongsTo(Jabatan::class);
    }

    public function divisi(){

        return $this->belongsTo(Divisi::class);
    }
    protected $guarded = ['id'];
}
