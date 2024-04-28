<?php

namespace App\Models\user;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyPlan extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    function users()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
