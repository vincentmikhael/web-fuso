<?php

namespace App\Models\Aftersales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'service';
    protected $guarded = [];
}
