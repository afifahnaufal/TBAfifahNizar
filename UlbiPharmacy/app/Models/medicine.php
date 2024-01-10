<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    use HasFactory;  
    protected $table = 'medicine';
    protected $primaryKey='id';
    public const CREATED_AT="create_date";
    public const UPDATED_AT="update_date";
    protected $guarded = [];
  
    //public $timestamps = false;
}
