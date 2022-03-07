<?php

namespace App\Models;

use App\MyApp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id', 'name', 'type','created_at', 'updated_at'];
    protected $casts = MyApp::datetime;
}
