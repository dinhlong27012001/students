<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    public $timestamps = false;

    public $primaryKey = "StId";

    public function getGenderNameAttribute()
    {
        if ($this->StGender == 0) {
            return "Nữ ";
        } else {
            return "Nam";
        }
    }
}
