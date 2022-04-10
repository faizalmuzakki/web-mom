<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkup extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'weight',
        'temperature',
        'complaint',
        'therapy',
    ];

    public function questionnaire(): BelongsToMany
    {
        return $this->belongsToMany(Question::class)
            ->using(CheckupQuestionnaire::class)
            ->withTimestamps()
            ->withPivot([
                'answer'
            ]);
    }
}
