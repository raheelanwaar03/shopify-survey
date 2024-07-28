<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\user\BuyPlan;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $primaryKey = 'id';

    function trxIds()
    {
        return $this->hasOne(BuyPlan::class, 'user_id');
    }




    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'country',
        'balance',
        'referral',
        'role',
        'status',
        'user_id',
        'level',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isAccount10DaysOld(): bool
    {
        // Get the user's creation date (assuming the column name is "created_at")
        $createdAt = $this->created_at;
        // Calculate the date 10 days ago
        $tenDaysAgo = Carbon::now()->subDays(10);
        // Compare the two dates
        return $createdAt->lt($tenDaysAgo);

    }
}
