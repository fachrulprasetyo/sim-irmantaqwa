<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class SuratMasuk extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'surat_masuk';
    protected $fillable = ['no_surat', 'tgl_surat', 'tgl_terima', 'asal_surat', 'perihal', 'penerima', 'file_surat'];

    public $sortable = [
        'no_surat', 'tgl_surat', 'tgl_terima', 'asal_surat', 'perihal', 'penerima'
    ];
}
