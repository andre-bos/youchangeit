<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
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
    
    public function signature(): BelongsTo
    {
        return $this->belongsTo(Signature::class);
    }

    protected $fillable = [
        'user_id',
        'petition_id',
        'signature_id',
        'approvato',
        'contenuto',
        'created_at'
    ];
}
