<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\InfoKite;

class Kuliner extends Model
{
    use SoftDeletes;
    protected $table = 'infos';

    protected $fillable = [
        'judul', 'slug', 'id_users', 'id_kat_info', 'links', 'rating', 'jml_rating', 'keterangan', 'cover'
    ];

    protected $hidden = [];

    public function kategori_kuliner()
    {
        return $this->belongsTo(InfoKite::class, 'id_kat_info', 'id');
    }
}
