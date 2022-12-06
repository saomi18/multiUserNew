<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cekot extends Model
{
    protected $fillable = ["id","nomor","nama","produk","jumlah","created_at","updated_at"];
}
