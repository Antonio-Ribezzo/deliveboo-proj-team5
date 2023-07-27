<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['restaurant_id','date', 'total_price', 'customer_name','customer_address','mobile_number','customer_mail','customer_notes'];

    public function items(){
        return $this->belongsToMany(Item::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
