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

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // Aumento dinamicamente l'obiettivo delle firme da raggiungere in maniera proporzionale alle firme già raccolte sulla base di soglie e un coefficiente di moltiplicazione
    public function getObiettivoFirmeAttribute()
    {
        if ($this->signatures_count > 1000) {
            return ceil($this->signatures_count * 1.1);
        } elseif ($this->signatures_count > 500) {
            return ceil($this->signatures_count * 1.2);
        } elseif ($this->signatures_count > 100) {
            return ceil($this->signatures_count * 1.3);
        } elseif ($this->signatures_count > 50) {
            return ceil($this->signatures_count * 1.4);
        } elseif ($this->signatures_count > 10) {
            return ceil($this->signatures_count * 1.5);
        } elseif ($this->signatures_count > 0) {
            return ceil($this->signatures_count * 1.5);
        } else {
            return 5;
        }
    }
}
