<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterInformasi extends Model
{
    use HasFactory;
    use softDeletes;

    protected $guarded =[];
}
