<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use HasFactory;
  use HasUuids;
  protected $table = 'post';
  protected $primaryKey = 'id';
  protected $keyType = 'string';
  public $incrementing = false;
  protected $fillable = ['title', 'body', 'author', 'published']; // fields that can be updated

  protected $guarded = ['id']; // cannot be updated/assigned (readonly)

  public function comments() {
    return $this->hasMany(Comment::class);
  }

  public function tags() {
    return $this->belongsToMany(Tag::class);
  }
}
