<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table;

    public function setTable($tableName)
    {
        $this->table = $tableName;
        return $this;
    }

    // Define the fillable fields for mass assignment
    protected $fillable = ['itemText', 'itemDesc', 'itemImg'];
}
