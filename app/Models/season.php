<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class season extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "season";
    protected $fillable = ['namaseason','image'];
}
