<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function setTagAttribute($value)
    {
        $this->attributes['tag'] = json_encode($value);
    }


    public function getTagAttribute($value)
    {
        return $this->attributes['tag'] = json_decode($value);
    }
}