<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DecMaker extends Model
{
    use HasFactory;

    public function petitions(): HasMany
    {
        return $this->hasMany(Petition::class);
    }
}
