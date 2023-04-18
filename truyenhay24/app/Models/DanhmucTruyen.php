<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhmucTruyen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'tendanhmuc', 'kichhoat', 'slug_danhmuc'
    ];
    protected $primaryKey = 'id';
    protected $table = 'danhmuc';

    // 1 danh muc co nhieu truyen
    public function truyen() {
        return $this->hasMany('App\Models\Truyen');
    }
}
