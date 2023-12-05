<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramInstruments extends Model
{
    use HasFactory;

    protected $table = 't_program_instruments';
    protected $primaryKey = 'ins_id';
    protected $fillable = ['ins_id', 'ins_progid', 'ins_parentid', 'ins_text'];
}
