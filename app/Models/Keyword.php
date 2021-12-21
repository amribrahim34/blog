<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Keyword extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['body'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
