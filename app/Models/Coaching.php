<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Coaching extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'phone', 'status', 'email', 'password', 'address', 'max_student'];
}
