<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostCenter extends Model
{
    protected $table = "costs_center";
    protected $guarded = [''];
    use HasFactory;

    public function accounts() {
        return $this->hasMany("App\Models\Account");
    }
}
