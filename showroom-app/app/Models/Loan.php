<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'car_id',
        'user_id',
        'loan_date',
        'return_date',
        'total_cost',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
