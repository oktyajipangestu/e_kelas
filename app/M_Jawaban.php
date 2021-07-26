<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Jawaban extends Model
{
    protected $table = 'tbl_jawaban';
    protected $primaryKey = 'id_jawaban';
    protected $fillable = [
        'id_jawaban',
        'id_skor',
        'id_peserta',
        'id_soal',
        'jawaban',
        'status_jawaban'
    ];
}
