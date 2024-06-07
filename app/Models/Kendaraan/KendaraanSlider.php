<?php

namespace App\Models\Kendaraan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KendaraanSlider extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kendaraan_slider';
    protected $guarded = [];
}
