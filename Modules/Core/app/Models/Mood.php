<?php

namespace Modules\Core\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// use Modules\Core\Database\Factories\MoodFactory;

class Mood extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    // protected static function newFactory(): MoodFactory
    // {
    //     // return MoodFactory::new();
    // }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
