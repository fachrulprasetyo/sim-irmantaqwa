<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class SuratKeluar extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'surat_keluar';
    protected $fillable = ['no_surat', 'tgl_surat', 'tujuan_surat', 'perihal', 'file_surat'];

    public $sortable = [
        'no_surat', 'tgl_surat', 'tujuan_surat', 'perihal'
    ];
}
