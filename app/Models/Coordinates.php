<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coordinates extends Model
{
    use HasFactory;

    protected $fillable = ['latitude', 'longitude'];

    public function establishment(): BelongsTo
    {
        return $this->belongsTo(Establishment::class);
    }
}
