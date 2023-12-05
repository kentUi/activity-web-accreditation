<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramInstrumentSub extends Model
{
    use HasFactory;
    protected $table = 't_program_instruments_sub';
    protected $primaryKey = 'ins_id';
    protected $fillable = ['ins_id', 'ins_progid', 'ins_parentid', 'ins_text', 'ins_level'];
}
