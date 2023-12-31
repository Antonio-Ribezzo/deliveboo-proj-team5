<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    protected $fillable = ['name'];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class,'restaurant_type', 'type_id', 'restaurant_id');
    }
}
