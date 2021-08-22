<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanModel extends Model
{
    use HasFactory;
    protected $table = 'pekerjaan';
    protected $fillable= ['id','nm_pekerjaan'];


    public function texts()
    {
        return $this->hasMany(TextPekerjaanModel::class);
    }
    public function imgs()
    {
        return $this->hasMany(ImgPekerjaanModel::class);
    }
}
