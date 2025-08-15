<?php

namespace App\Models;

use App\Traits\HasUserAuditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Semester extends Model
{
    use SoftDeletes, HasUserAuditable;
    
    protected $fillable = [
        'code',
        'name',
        'type',
        'start_date',
        'end_date',
    ];
}
