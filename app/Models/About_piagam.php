<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_piagam extends Model
{
    use HasFactory;
    protected $table = 'about_piagam';
    protected $fillable = ['image', 'title', 'kategori'];
}
