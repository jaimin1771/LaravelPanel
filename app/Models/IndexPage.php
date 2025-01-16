<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexPage extends Model
{
        protected $fillable = [
        'id',
        'section_name',
        'lable',
        'value',
        'details'
    ];

}
