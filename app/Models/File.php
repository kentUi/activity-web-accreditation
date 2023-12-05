<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $table = 't_files';
    protected $primaryKey = 'file_folderid';
    protected $fillable = ['file_folderid', 'file_name', 'file_directory', 'file_extension'];
}
