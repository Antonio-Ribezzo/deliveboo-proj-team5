<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemOrder extends Model
{
    use HasFactory;

    protected $table = 'item_order';

    protected $fillable = [
        'item_id',
        'order_id',
        'qt_item',
    ];

}
