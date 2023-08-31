<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'image', 'link'];

    public function categories() {
      return $this->belongsToMany(Category::class, 'category_project');
    }

}
