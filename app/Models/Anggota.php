<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Anggota extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'anggota';
    protected $fillable = ['nama', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'alamat', 'no_telp', 'avatar']; //digunakan untuk create data

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('image/logo.png');
        }

        return asset('image/' . $this->avatar);
    }

    public $sortable = [
        'nama', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir', 'alamat'
    ];
}
