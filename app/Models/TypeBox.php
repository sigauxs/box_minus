<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBox extends Model
{
    use HasFactory;
    protected $table = 'types_boxes';
    protected $fillable = ['name'];

    public function accounts() {
        return $this->hasMany("App\Models\Account");
    }
}
