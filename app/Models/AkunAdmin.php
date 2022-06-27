<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunAdmin extends Model
{
    //use HasFactory;

    public $table = 'akun_admin';
    public $primaryKey = 'nip';
    public $timestamps = true;
}
