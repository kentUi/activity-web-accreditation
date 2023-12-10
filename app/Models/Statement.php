<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    use HasFactory;
    protected $table = 't_statements';
    protected $primaryKey = 'st_id';
    protected $fillable = ['st_id', 'st_text', 'st_instrumentid', 'st_areaid', 'st_parameterid', 'st_statementid', 'st_type'];
}