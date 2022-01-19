<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserManage extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','officer','date_of_birth','skills'];
  
}
