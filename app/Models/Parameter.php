<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;
    protected $table = 't_parameters';
    protected $primaryKey = 'param_id';
    protected $fillable = ['param_id', 'param_text', 'param_instrumentid', 'param_areaid'];
}