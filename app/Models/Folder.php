<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    protected $table = 't_folders';
    protected $primaryKey = 'folder_id';
    protected $fillable = ['folder_id', 'folder_parentid', 'folder_name', 'folder_area', 'folder_directory'];
}