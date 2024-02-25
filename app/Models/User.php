<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // protected $table = "users";
    // protected $primaryKey = "id";
    // public $timestamps = false;

    protected $fillable = [
        "name",
        "age",
        "email",
        "profile_image",
        "gender",
        "phone_number"
    ];
}
