<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeri extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded =[];

    public function layanan()
    {
        return $this->belongsTo(LayananProgram::class, 'id_layanan', 'id');
    }

}
