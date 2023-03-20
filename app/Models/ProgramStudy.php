<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudy extends Model
{
    use HasFactory;
    
    protected $fillable = ['program_studies_name', 'program_studies_slug'];
}
