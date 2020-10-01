<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenMind extends Model
{
    protected $table = 'open_minds';

    protected $fillable = ['nama', 'nim', 'email', 'angkatan', 'created_at', 'updated_at'];
}
