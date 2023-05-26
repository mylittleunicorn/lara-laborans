<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Lab extends Model
{
    use HasFactory;

    protected $table = 'labs';

    protected $fillable = [
        'lab_name',
        'lab_description',
        'program_study_id'
    ];

    public function programstudy()
    {
        return $this->belongsTo(ProgramStudy::class, 'program_study_id', 'id');
    }
}
