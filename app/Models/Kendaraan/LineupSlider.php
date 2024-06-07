<?php

namespace App\Models\Kendaraan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineupSlider extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'lineup_slider';
    protected $guarded = [];
}
