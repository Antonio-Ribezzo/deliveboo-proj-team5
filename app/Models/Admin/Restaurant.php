<?php

namespace App\Models\Admin;

use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurants';

    // public static function generateSlug($name)
    // {
    //     return Str::slug($name, '-');
    // }

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'p_iva',
        //'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
