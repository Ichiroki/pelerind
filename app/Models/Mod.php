<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mod extends Model
{
    protected $fillable = [
        'name',
        'description',
        ''
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
