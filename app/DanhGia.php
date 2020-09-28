<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model {
    protected $table='danhgia';
    protected $primaryKey='id_danhgia';
    protected $fillable = [
        'id_danhgia',
        'noidung_danhgia',
        'nguoi_danhgia',
        'duan_danhgia',

        'Anhien',
    ];



}