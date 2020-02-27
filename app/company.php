<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;
class company extends Model
{
    protected $guarded=[];
    //protected $fillable = ['name','phone'];
    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
