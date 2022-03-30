<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostSubCenter extends Model
{
    protected $table = "costs_sub_center";
    protected $guarded = [''];
    use HasFactory;

    public function accounts() {
        return $this->hasMany("App\Models\Account");
    }
}
