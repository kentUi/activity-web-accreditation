<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 't_programs'; // Replace with the actual table name

    protected $primaryKey = 'prog_id';

    protected $fillable = [
        'prog_program',
        'prog_type',
        'prog_level',
        'prog_rating',
        'prog_validity',
    ];
}
