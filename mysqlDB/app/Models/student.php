<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = "college_students";

    function testFun()
    {
        return "Dummy Function Test";
    }
}
