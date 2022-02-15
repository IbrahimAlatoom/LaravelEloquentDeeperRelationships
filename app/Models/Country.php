<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;//composer require staudenmeir/eloquent-has-many-deep:"^^^^1.7"


    public function cities(){
        return $this->hasMany(City::class);
    }

    public function companies()
    {
        return $this->hasManyThrough(Company::class,City::class);
    }

    public function employees()
    {
        return $this->hasManyDeep(Employee::class,[City::class,Company::class]);
    }
    



}
