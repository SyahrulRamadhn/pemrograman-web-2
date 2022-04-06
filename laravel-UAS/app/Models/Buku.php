<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";
    protected $primaryKey = "id_buku";
   /* protected $fillable = [
        'id_buku',
        'judul_buku',
        'penulis',
        'tahun_rilis',
        'genre',
        'gambar',
        'created_at',
        'updated_at'
    ];

    function gambar()
    {
        if ($this->gambar && file_exists(public_path('images/' . $this->gambar)))
            return asset('images/' . $this->gambar);
        else
            return asset('images/no_image.png');
    }

    function delete_gambar()
    {
        if ($this->gambar && file_exists(public_path('images/' . $this->gambar)))
            return unlink(public_path('images/' . $this->gambar));
    }*/
}
