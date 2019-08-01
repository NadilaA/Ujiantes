<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";

    protected $fillable = ['name', 'jenis', 'harga'];


    public function get_pesanan(){
    	return $this->hasMany('App\Pesanan', 'id_menu', 'id');
    }
}
