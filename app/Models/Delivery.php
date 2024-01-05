<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $fillable = [
        'vendor_id',
        'item_name',
        'qty',
        'item_price',
        'delivery_charge',
        'total_price',
        'delivery_type',
        'delivery_des',
        'recipient_name',
        'recipient_number',
        'recipient_address',
        'status',
        'delivery_time',
        'created_at',
        'updated_at',
    ];
    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    // how to get the pick rider name
    public function pickRider()
    {
        return $this->belongsTo(Rider::class, 'pick_rider');
    }

    public function dropRider()
    {
        return $this->belongsTo(Rider::class, 'drop_rider');
    }

}
