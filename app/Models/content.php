<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    use HasFactory;
    protected $table = 'mainbox';
    protected $primaryKey = 'mainbox_id';

    public $incrementing = false;
    public $timestamps = true;
}
