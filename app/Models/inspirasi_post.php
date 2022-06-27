<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inspirasi_post extends Model
{
    public $table = 'inspirasi_post';
    //public $primaryKey = 'ID_Inspirasi';
    public $timestamps = false;
    protected $guarded = [];
    protected $dates = [];
}
