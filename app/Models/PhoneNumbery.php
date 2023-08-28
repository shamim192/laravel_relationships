<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumbery extends Model
{
    use HasFactory;

    protected $fillable = [
      'number','company_id'
    ];
}
