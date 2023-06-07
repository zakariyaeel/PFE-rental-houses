<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'titre',
        'description',
        'adress',
        'prix',
        'etat',
    ];
    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function users(){
        return $this->belongsToMany(User::class,'reservations','post_id','user_id')
        ->withPivot('date_debut','date_fin')
        ->withTimestamps();
    }
}
