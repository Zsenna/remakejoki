<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class robot extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'id';

    public $incrementing = false;
    public $timestamps = true;
}
