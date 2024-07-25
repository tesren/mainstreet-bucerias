<?php

namespace App\Models;

use Laravel\Nova\Fields\HasOne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shape extends Model
{
    use HasFactory;

    /**
     * Get the unit associated with the Shape
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unit()
    {
        return $this->hasOne(User::class, 'unit_id');
    }
}
