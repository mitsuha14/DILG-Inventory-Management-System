<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Category extends Model
{
    use HasFactory;

    protected $table = 'ims';

    protected $fillable = [
        'name',
        'type',
        'serial_number',
        'status'
    ];

    public static $rules = [
        'serial_number' => 'required|digits:5|numeric',
    ];

    public static function validate($data)
    {
        return Validator::make($data, static::$rules);
    }
}
