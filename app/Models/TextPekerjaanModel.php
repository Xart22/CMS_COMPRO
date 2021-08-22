<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextPekerjaanModel extends Model
{
    use HasFactory;
    protected $table = 'text_pekerjaan';
    protected $fillable= ['id','p'];

    public function pekerjaan()
    {
        return $this->belongsTo(PekerjaanModel::class);
    }

}
