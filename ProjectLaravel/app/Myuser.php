<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myuser extends Model
{
    //
    protected $table = 'myusers';
    protected $primary_key = 'id';
    public $timestamps = false;
}
