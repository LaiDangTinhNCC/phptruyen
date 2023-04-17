<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'tentruyen', 'kichhoat', 'slug_truyen', 'hinhanh', 'tomtat', 'danhmuc_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'truyen';
}
