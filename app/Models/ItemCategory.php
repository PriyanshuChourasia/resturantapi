<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ItemCategory extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
        'parent_id',
        'alias',
    ];


    public function parent(): BelongsTo
    {
        return $this->belongsTo(ItemCategory::class);
    }


    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
