<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgPekerjaanModel extends Model
{
    use HasFactory;
    protected $table = 'img_pekerjaan';
    protected $fillable= ['id','img_pekerjaan'];

    public function pekerjaan()
    {
        return $this->belongsTo(PekerjaanModel::class);
    }
}
