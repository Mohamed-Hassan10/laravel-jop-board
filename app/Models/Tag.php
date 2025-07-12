<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  use HasFactory;
  use HasUlids;
  protected $primaryKey = 'id';
  protected $keyType = 'string';
  public $incrementing = false;
  protected $table = 'tag';
  protected $fillable = ['title']; // fields that can be updated

  protected $guarded = ['id']; // cannot be updated/assigned (readonly)

    public function posts() {
    return $this->belongsToMany(Post::class);
  }
}
