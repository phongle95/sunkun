<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;

     protected $fillable = [
        'fullname','username','password',
    ];
}
