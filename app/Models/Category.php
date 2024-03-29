<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    public function workers()
    {
        return $this->belongsToMany(Worker::class, 'hardwares', 'category_id', 'worker_id');
    }
}
