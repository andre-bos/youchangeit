<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Petition extends Model
{
    use HasFactory;

    public function category(): BelongsTo
{
    return $this->belongsTo(Category::class);
}

    public function decMaker(): BelongsTo
    {
    return $this->belongsTo(DecMaker::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function signatures(): HasMany
    {
        return $this->hasMany(Signature::class);
    }
}
