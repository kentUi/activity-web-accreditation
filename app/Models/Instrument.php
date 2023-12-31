<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;
    protected $table = 't_instruments';
    protected $primaryKey = 'ins_id';
    protected $fillable = ['ins_id', 'ins_text', 'ins_type'];
}