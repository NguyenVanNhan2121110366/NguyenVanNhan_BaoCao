<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table ='db_brand';
    protected $fillable = [
        'name',
        'slug',
        'sort_order',
        'description',
        'created_by',
        'updated_by',
        'status',
    ];
}
