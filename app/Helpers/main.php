<?php

use App\Models\Kendaraan\Lineup;
use App\Models\Setting;

function formatRp($value){
    return 'Rp ' .number_format($value, 0, ',', '.');
}

function getLineup($kendaraan_id,$tipe){
    $lineup = Lineup::query();
        if($kendaraan_id){
            $lineup->where('kendaraan_id',$kendaraan_id);
        }
        if($tipe){
            $lineup->where('tipe',$tipe);
        }
        return $lineup->get();
}

function getSetting(){
    return Setting::first();
}

function getTipeLineup($data){
    $tipe = [
        1 => ['Super Economial','Super Power','Super Speed','Super Capacity','Bus'],
        2 => ['4x2','6x2','6x4'],
        3 => ['6x4']
    ];

    return $tipe[$data];
}