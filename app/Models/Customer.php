<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded=[];
    protected $attributes=[
        'active'=>0
    ];

    use HasFactory;

    public function scopeActive($query)
    {
     return $query->where('active',1);

        
    }
    public function scopeInactive($query)
    {
     return $query->where('active',0);

        
    }
   /* public function scopeSearch($query ,$customer)
    {
        return $query->where('id',$customer)->firstOrFail();
    }*/

    public function getActiveAttribute($attribute)
    {
      return $this->activeOptions()[$attribute];

      
    }
    public function company()
    {
       return $this->belongsTo(Company::class);
    }
    public function activeOptions()
    {
       return [
            0=>'Inactive',
            1=>'Active',
            2=>'InProgress'];

    }
    
}

