<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class changeLog extends Model
{
    protected $table = 'Electricity';
    protected $fillable = ['value','create_date'];
    //
}
