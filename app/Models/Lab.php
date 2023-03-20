<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lab extends Model
{
    use HasFactory;

    protected $fillable = ['lab_name', 'lab_description', 'program_study_id'];

    public function programstudy(): BelongsTo
    {   
        return $this->belongsTo(ProgramStudy::class);
    }

    public function lab(): HasMany
    {
        return $this->hasMany(Lab::class);
    }
}
