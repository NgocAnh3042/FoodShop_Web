<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'price'          => 'integer',
            'original_price' => 'integer',
            'is_available'   => 'boolean',
            'is_vegetarian'  => 'boolean',
            'is_halal'       => 'boolean',
            'is_low_calorie' => 'boolean',
            'rating_avg'     => 'float',
        ];
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(MenuCategory::class, 'menu_category_id');
    }

    public function optionGroups(): BelongsToMany
    {
        return $this->belongsToMany(OptionGroup::class, 'dish_option_groups')
            ->withPivot('sort_order');
    }

    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }
}
