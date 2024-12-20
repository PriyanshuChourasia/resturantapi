<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ItemGroup extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
        'parent_id',
        'alias',
    ];

    public function parent()
    {
        $this->belongsTo(ItemGroup::class);
    }


    public function children()
    {
        $this->hasMany(ItemGroup::class, 'parent_id');
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
