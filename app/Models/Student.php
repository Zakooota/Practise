<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function courses()
    {

        return $this->hasMany(Course::class);
    }
    
    public function getProgramAttribute($attribute)
    {
      return [
          0=>'computer science',
          1=>'management science',
          2=>'electrical science']
          [$attribute];

      
    }

}
