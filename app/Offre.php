<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Offre extends Model
{
    protected $table="offre";
    protected $fillable=["full_name" ,"company_name" ,"adresse" ,"type_offre" ,"email" ,"phone"];
}
