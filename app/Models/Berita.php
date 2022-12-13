<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function scopeFilter($query, array $filters){
    //     $query->when($filters['search'] ?? false, function($query, $search){
    //         return $query->where('title', 'like', '%' . $search . '%')
    //             ->orWhere('description', 'like', '%' . $search . '%');
    //     });

    //     $query->when($filters['search'] ?? false, function($query, $kategori){
    //         return $query->whereHas('kategori', function($query) use ($kategori){
    //             $query->where('nama', $kategori);
    //         });
    //     });
    // }
    protected $guarded = ['id'];
}
