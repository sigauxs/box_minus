<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDocument extends Model
{
    protected $table = "types_documents";
    protected $guarded = "['']";
    use HasFactory;


    public function accounts() {
        return $this->hasMany("App\Models\Account");
    }
}
