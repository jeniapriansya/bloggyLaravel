<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bloggy extends Model
{
    //
    protected $table = 'blogg';
    protected $fillable = ['judul','headline','isi','deskripsi'];
}
