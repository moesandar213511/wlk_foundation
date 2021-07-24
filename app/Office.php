<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = ['id','photo','phone','about','email','address','vision','mission'];
}
