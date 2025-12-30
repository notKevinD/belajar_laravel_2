<?php

namespace App\Models;
use GuzzleHttp\ClientTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'type_id');
    }
}
