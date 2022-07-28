<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function notes(){
        // return $this->hasMany(Category::class, 'id', 'relasi_id');
        return $this->hasMany(Notes::class);

        
    }
}
