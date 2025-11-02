<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $table = 'galeri_tables';

    protected $primaryKey = 'id_galery';
          protected $fillable = ['judul','gambar','id_user'];
}
