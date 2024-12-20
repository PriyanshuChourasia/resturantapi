<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Item extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'item_id',
        'name',
        'cost_price',
        'mrp',
        'unit_ratio',
        'alias',
        'item_unit_id',
        'alt_unit_id',
        'item_groups_id',
        'item_categories_id',
    ];


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
