<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function category(){
        // return $this->hasMany(Category::class, 'id', 'relasi_id');
        return $this->belongsTo(Category::class);
    }
}
