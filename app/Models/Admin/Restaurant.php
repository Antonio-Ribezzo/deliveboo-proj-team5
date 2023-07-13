<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurants';


    protected $fillable = [
        'user_id',
        'name',
        'address',
        'p_iva',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
