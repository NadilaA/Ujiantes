<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function index()
    {
    	$menu = Menu::all();
    	return view('menu', ['menu' => $menu]);
    }

    public function tambah()
    {
    	return view('menu_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'jenis' => 'required',
    		'harga' => 'required'
    	]);
 
        Menu::create([
    		'name' => $request->name,
    		'jenis' => $request->jenis,
    		'harga' => $request->harga
    	]);
 
    	return redirect('/menu');
    }

    public function close($id)
    {
        $pesanan = Menu::find($id);
        if($pesanan->status == 'tersedia'){
            $pesanan->status = 'tidak tersedia';
            $pesanan->save();
            return redirect('/menu');
        } else if ($pesanan->status == 'tidak tersedia') {
            $pesanan->status ='tersedia';
            $pesanan->save();
            return redirect('/menu');
        }
    }
}
