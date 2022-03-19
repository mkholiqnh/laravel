<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class PlayingController extends Controller
{
    public function index(){
    	$playing = DB::table('playing')->get();
    	return view('playing/index',['playing' => $playing]);
    }

    public function tambah()
    {    
        return view('playing/tambah');    
    }

    public function store(Request $request)
    {
        DB::table('playing')->insert([
            'player_id' => $request->player_id,
            'start_time' => $request->start_time,
            'score' => $request->score,
        ]);
        return redirect('/playing');    
    }

    public function edit($id)
    {
        $playing = DB::table('playing')->where('id',$id)->get();
        return view('playing/edit',['playing' => $playing]);
    }

    public function update(Request $request)
    {
        DB::table('playing')->where('id',$request->id)->update([
            'player_id' => $request->player_id,
            'start_time' => $request->start_time,
            'score' => $request->score,
        ]);
        return redirect('/playing');
    }
    
    public function hapus($id)
    {
        DB::table('playing')->where('id',$id)->delete();
        return redirect('/playing');
    }
}