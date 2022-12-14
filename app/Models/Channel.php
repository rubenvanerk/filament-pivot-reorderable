<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Channel extends Model
{
    use HasFactory;

    public function slides(): BelongsToMany
    {
        return $this->belongsToMany(Slide::class)
            ->using(ChannelSlide::class)
            ->withPivot(['sort']);
    }
}
