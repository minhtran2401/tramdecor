<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    use HasFactory;
    protected $table='dichvu';
    protected $primaryKey='id_dv';
    protected $fillable = [
        'id_dv',
        'name_dv',
        'image_dv',
        'banner_dv',
        'slogan_dv',
        'mota_dv',
        'Anhien',   
    ];
    // liên kết khóa chính -> ngoại
    public function ktpage() {
        return $this->hasMany('App\Page','id_dv','id_dv');
    }
}
