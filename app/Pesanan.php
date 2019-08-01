<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = "pesanan";

    protected $fillable = ['no_pesanan', 'no_meja', 'id_menu'];


    public function get_menu(){
        return $this->belongsTo('App\Menu', 'id_menu', 'id');
    }
}
