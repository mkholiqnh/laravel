<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class PlayerController extends Controller
{
    public function index(){
    	$player = DB::table('player')->get();
    	return view('player/index',['player' => $player]);
    }

    public function tambah()
    {
        return view('player/tambah');    
    }

    public function store(Request $request)
    {
        DB::table('player')->insert([
            'nama' => $request->nama,            
        ]);
        return redirect('/player');
    }

    public function edit($id)
    {
        $player = DB::table('player')->where('id',$id)->get();
        return view('player/edit',['player' => $player]);
    }

    public function update(Request $request)
    {
        DB::table('player')->where('id',$request->id)->update([
            'nama' => $request->nama,
        ]);
        return redirect('/player');
    }
    
    public function hapus($id)
    {
        DB::table('player')->where('id',$id)->delete();
        return redirect('/player');
    }
}