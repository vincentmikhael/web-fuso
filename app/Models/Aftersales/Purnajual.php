<?php

namespace App\Models\Aftersales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purnajual extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'maintenance';
    protected $guarded = [];
}
