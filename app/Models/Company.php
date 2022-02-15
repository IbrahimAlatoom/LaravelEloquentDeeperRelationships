<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;//composer require staudenmeir/belongs-to-through:"^^^^2.5"
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function country()
    {
        return $this->belongsToThrough(country::class,City::class);
    }
}
