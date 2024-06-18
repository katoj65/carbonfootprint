<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSector extends Model
{
    use HasFactory;
    protected $table='business_sectors';
    protected $fillable=['name'];
}
