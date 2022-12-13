<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
     
    public function peminjaman(){
        return $this->hasMany('App\Peminjaman', 'barang_id', 'id');
    }
}
