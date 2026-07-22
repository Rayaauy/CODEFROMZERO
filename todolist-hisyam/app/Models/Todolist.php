<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    protected $table = 'tb_todolist';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    // protected $fillable = ['title', 'description', 'status'];
}
