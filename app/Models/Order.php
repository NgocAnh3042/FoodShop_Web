<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'is_scheduled'          => 'boolean',
            'placed_at'             => 'datetime',
            'accepted_at'           => 'datetime',
            'ready_at'              => 'datetime',
            'picked_up_at'          => 'datetime',
            'delivered_at'          => 'datetime',
            'estimated_delivery_at' => 'datetime',
            'cancelled_at'          => 'datetime',
            'scheduled_at'          => 'datetime',
            'commission_rate'       => 'float',
        ];
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function deliveries(): HasMany
    {
        return $this->hasMany(Delivery::class);
    }

    /** Lần gán tài xế mới nhất = tài xế đang phụ trách đơn */
    public function currentDelivery(): HasOne
    {
        return $this->hasOne(Delivery::class)->latestOfMany();
    }

    public function scopeInProgress($query)
    {
        return $query->whereIn('status', ['pending', 'accepted', 'preparing', 'ready', 'delivering']);
    }
}
