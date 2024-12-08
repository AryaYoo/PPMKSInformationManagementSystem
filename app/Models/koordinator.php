<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class koordinator extends Model
{
    protected $fillable = [
        'name',
        'divisi_id'
    ];

    public function divisi(): BelongsTo
    {
        return $this->belongsTo(divisi::class);
    }
}
