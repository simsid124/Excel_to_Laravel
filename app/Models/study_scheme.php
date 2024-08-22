<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class study_scheme extends Model
{
    use HasFactory;

    protected $table = 'study_scheme';

    protected $fillable = [
        'course_title',
        'sem',
        'option_type',
        'domain',
        'category',
        'is_int',
        'intmm',
        'is_ext',
        'extmm',
        'totmm',
        'breakup',
        'l',
        't',
        'p',
        'hr',
        'cr',
    ];
}
