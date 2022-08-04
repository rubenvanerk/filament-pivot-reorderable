<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ChannelSlide extends Pivot
{
    public function channel(): BelongsTo
    {
        return $this->belongsTo(Channel::class);
    }

    public function slide(): BelongsTo
    {
        return $this->belongsTo(Slide::class);
    }
}
