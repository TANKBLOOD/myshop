<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'last_name',
        'age',
        'gender',
        'phone_number',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
