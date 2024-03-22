<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IMS_Model extends Model
{
    use HasFactory;

    protected $table = 'ims';

    protected $fillable = [
        'name',
        'type',
        'serial_number',
        'status'
    ];
}
