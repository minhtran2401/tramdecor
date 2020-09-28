<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    protected $table='nhanvien';
    protected $primaryKey='id_nv';
    protected $fillable = [
        'name_nv',
        'chucvu_nv',
        'Anhien',   
        'hinh_nhanvien',
    ];
   
}

