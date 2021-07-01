<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;
  
    protected $table = 'category';
    protected $fillable = ['parent_id', 'title'];

    public function parent()
    {
      return $this->belongsTo('App\Models\Category','parent_id');
    }


}
