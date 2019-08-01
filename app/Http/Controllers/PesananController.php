<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
    	$pesanan = Pesanan::where(['status' => 'aktif']);
    	return view('pesanan', ['pesanan' => $pesanan]);
    }

    public function tambah()
    {
    	return view('pesanan_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'no_pesanan' => 'required',
    		'no_meja' => 'required',
    		'id_menu' => 'required'
    	]);
 
        Pesanan::create([
    		'no_pesanan' => $request->no_pesanan,
    		'no_meja' => $request->no_meja,
    		'id_menu' => $request->id_menu
    	]);
 
    	return redirect('/pesanan');
    }

    public function edit($id)
	{
	   $pesanan = Pesanan::find($id);
	   return view('pesanan_edit', ['pesanan' => $pesanan]);
	}

	public function update($id, Request $request)
	{
	    $this->validate($request,[
    		'no_pesanan' => 'required',
    		'no_meja' => 'required',
    		'id_menu' => 'required'
	    ]);

	    $pesanan = Pesanan::find($id);
	    $pesanan->no_pesanan = $request->no_pesanan;
	    $pesanan->no_meja = $request->no_meja;
	    $pesanan->id_menu = $request->id_menu;
	    $pesanan->save();
	    return redirect('/pesanan');
	}

	public function close($id)
	{
	    $pesanan = Pesanan::find($id);
	    $pesanan->status ='tidak aktif';
	    $pesanan->save();
	    return redirect('/pesanan');
	}

	public function nomor()
    {
        $prefix = "ERP";
        $date = date("dmY");
        $left = $prefix . $date; //kode depan

        $no_pesanan = Increment::findOne(['no_pesanan' => $left]);
        
        if(!$no_pesanan){
            $no_pesanan = new Increment(['no_pesanan' => $left, 'value' => 1]);
            $no_pesanan->save();
        } else {
            $no_pesanan->updateCounters(['value' => 1]);
        }

        $no_pesanan->refresh();

        return $no_pesanan->no_pesanan .''.str_pad($no_pesanan->value, 6, '0', STR_PAD_LEFT);   
    }
}
