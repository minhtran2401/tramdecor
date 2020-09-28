<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    protected $table='blog';
    protected $primaryKey='id_blog';
    protected $dates = ['ngay_blog']; //Khai báo các field kiểu ngày
    protected $fillable = [
        'id_blog',
        'id_loaiblog',
        'name_blog',
        'hinh_blog',
        'tomtat_blog',
        'ngay_blog',
        'noidung_blog',
        'Anhien',
    ];



}

