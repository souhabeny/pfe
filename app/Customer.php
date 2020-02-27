<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\company;

class Customer extends Model
{ //protected $fillable = ['name','email','active'];
    protected $guarded=[];
    public function getActiveAttribute($attribute)
    {
return [0=>'Inactive',
        1=>'active'

    ][$attribute];
    }
    public function scopeActive($query){
        return $query->where('active',1);
    }
    public function scopeInactive($query){
        return $query->where('active',0);
    }
    public function company()
    {
        return $this->belongTo(company::class);
    }
}

