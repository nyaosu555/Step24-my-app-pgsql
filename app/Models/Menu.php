<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'type_id',
        'image_path',
        'recipe_url',
        'memo',
    ];

    public function type(): BelongsTo {
        return $this->belongsTo(Type::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
