<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model {
    protected $table='page';
    protected $primaryKey='id_page';
    protected $dates = ['time_page']; //Khai báo các field kiểu ngày
    protected $fillable = [
        'id_page',
        'time_page',
        'id_dv',
        'name_page',
        'hinh_page_pri',
        'hinh_page_demo',
        'hinh_page_real',
        'diadiem_page',
        'dientich_page',
        'style_page',
        'Anhien',
    ];

}

