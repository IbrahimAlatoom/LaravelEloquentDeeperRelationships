<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function companies(){
        return $this->hasMany(Company::class);
    }

    public function employees()
    {
        return $this->hasManyThrough(Employee::class,Company::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
