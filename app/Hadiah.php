<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    protected $table = 'hadiah';

    protected $fillable = ['kode_hadiah','keterangan','poin'];
}
