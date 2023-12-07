<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    use HasFactory;

    protected $table = "baju";
    protected $fillable = ['merkbaju', 'stockbaju', 'tersedia'];
    protected $primaryKey = 'kodebaju';
    public $timestamps = false;
}