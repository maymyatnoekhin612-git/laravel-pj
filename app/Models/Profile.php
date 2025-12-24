<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Profile extends Model
{
    protected $fillable = ['bio','avatar'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
