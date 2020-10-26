<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masalah extends Model
{
    protected $table = "masalah";

    public function user(){
            return $this->belongsTo('App\User', 'id_user','id');
    }
    public function bidang(){
            return $this->belongsTo('App\bidang', 'id_bidang', 'id');
    }
}
