<?php

namespace App\Models;

use Laravel\Nova\Fields\HasOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shape extends Model
{
    use HasFactory;

    /**
     * Get the unit that owns the Shape
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
