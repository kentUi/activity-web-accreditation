<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrumentx extends Model
{
    use HasFactory;

    protected $table = 't_instruments';
    protected $fillable = ['ins_id', 'ins_parentid', 'ins_text'];
}
