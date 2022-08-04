<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slide extends Model
{
    use HasFactory;

    public function channels(): BelongsToMany
    {
        return $this->belongsToMany(Channel::class)
            ->using(ChannelSlide::class)
            ->withPivot(['sort']);
    }
}
