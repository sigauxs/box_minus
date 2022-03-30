<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table = "areas";
    protected $guarded = [''];


    public function accounts() {
        return $this->hasMany("App\Models\Account");
    }
}
