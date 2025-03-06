<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Library extends Model
{
    protected $table = 'tbl_libraries';

    protected $fillable = [
        'LibraryName', 'City', 'Address', 'BuyPrice', 'AboutLibrary', 'PinCode', 'DeleteStatus'
    ];
}
