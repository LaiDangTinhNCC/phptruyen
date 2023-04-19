<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chuong extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'truyen_id', 'kichhoat', 'tieude', 'noidung', 'slug_chuong'
    ];
    protected $primaryKey = 'id';
    protected $table = 'chuong';
    // 1 truyen thuoc 1 danh muc
    public function danhmuctruyen() {
        return $this->belongsTo('App\Models\DanhmucTruyen', 'danhmuc_id', 'id');
    }
    public function truyen() {
        return $this->belongsTo('App\Models\Truyen');
    }
}
