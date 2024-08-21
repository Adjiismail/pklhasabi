<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    use HasFactory;


    // Tentukan kolom yang dapat diisi massal
    protected $fillable = ['tahun', 'nominal', 'created_at','updeted_at','deleted_at'];

    protected $primaryKey="id_spp";
    protected $table="spp";
}

