<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'telephone',
        'avatar'
    ];

    public function getAvatarUrl(){
        return Storage::url($this->avatar);
    }
}
