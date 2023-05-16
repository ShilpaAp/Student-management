<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblStudent extends Model
{
    use HasFactory;
    public $table = 'tbl_student';
    public $fillable = [
        'name',
        'fk_parent_id',
        'gender'
    ];
}
