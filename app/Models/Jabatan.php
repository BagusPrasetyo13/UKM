<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    public function pengurus(){

        return $this->hasMany(Pengurus::class);

    }

    public function alumni(){

        return $this->hasMany(Alumni::class);
    }

    protected $guarded = ['id'];
}
