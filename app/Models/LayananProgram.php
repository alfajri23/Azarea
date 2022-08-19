<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LayananProgram extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded =[];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'id_layanan', 'id');
    }

    public function dokumentasis()
    {
        return $this->hasMany(Dokumentasi::class, 'id_layanan', 'id');
    }
}
