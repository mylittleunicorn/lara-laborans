<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Lab;

class ProgramStudy extends Model
{
  use HasFactory;

  protected $table = 'program_studies';

  protected $fillable = [
    'program_study_name',
    'program_study_description'
  ];

  public function lab()
  {
    return $this->hasMany(Lab::class, 'program_study_id', 'id');
  }
}
