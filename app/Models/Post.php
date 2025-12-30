<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'author_id', 'type_id', 'body'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
