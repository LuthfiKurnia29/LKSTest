<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'akuns';
    protected $fillable = [
        'username',
        'password',
        'name',
        'role'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
