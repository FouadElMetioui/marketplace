<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomCategorie',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
