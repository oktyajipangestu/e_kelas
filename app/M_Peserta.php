<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Peserta extends Model
{
    protected $table = 'tbl_peserta';
    protected $primaryKey = 'id_peserta';
    protected $fillable = [
        'id_peserta',
        'nama',
        'email',
        'password',
        'token',
        'status'
    ];
}
