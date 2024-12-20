<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','description'];

    use HasFactory;

    // Relationship with the professionals table
    public function professionals()
    {
        return $this->hasMany(Professional::class);
    }
}
