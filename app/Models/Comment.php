<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  use HasFactory;
  use HasUlids;
  protected $primaryKey = 'id';
  protected $keyType = 'string';
  public $incrementing = false;
  protected $table = 'comment';
  protected $fillable = ['author', 'content', 'post_id'];
  protected $guarded = ['id'];

  public function post() {
    return $this->belongsTo(Post::class);
  }

}
