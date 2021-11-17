<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class Student extends Model
{
    use HasFactory;

    protected $fillable =[
        'country_id',
        'level_id',
        'name',
        'date_of_birth'
    ];

    protected $casts =[
      'date_of_birth' => 'date'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
