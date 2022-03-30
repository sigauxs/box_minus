<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

      use HasFactory;
     protected $table = 'accounts';
     protected $guarded = [''];

     public function area(){
         return $this->belongsTo('App\Models\Area');
     }

     public function expense(){
        return $this->belongsTo('App\Models\Expense');
    }

    public function costCenter(){
        return $this->belongsTo('App\Models\CostCenter');
    }

    public function costSubCenter(){
        return $this->belongsTo('App\Models\CostSubCenter');
    }

    public function typeBox(){
        return $this->belongsTo('App\Models\TypeBox');
    }

    public function typeDocument(){
        return $this->belongsTo('App\Models\TypeDocument');
    }

}
