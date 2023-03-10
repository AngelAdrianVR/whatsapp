<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
        'is_group',
    ];

    //One to many Relationships
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    //Many to many relationships
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
