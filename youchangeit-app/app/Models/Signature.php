<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Signature extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function petition(): BelongsTo
    {
        return $this->belongsTo(Petition::class);
    }

    public function comment(): HasOne
    {
        return $this->hasOne(Comment::class);
    }

    protected $fillable = [
        'user_id',
        'petition_id',
        'created_at'
    ];
}
