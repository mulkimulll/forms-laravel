<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Ask;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = 'dashboard';
        $r = DB::select("SELECT count(*) as ask FROM asks")[0];
        $a = DB::select("SELECT COUNT(*) AS akun from users")[0];
        $s = DB::select("SELECT COUNT(*) AS submit from pelanggans")[0];

        return view('admin.dashboard',compact('data','r','a','s'));
    }

    public function ask()
    {
        $data = 'ask';
        $a = DB::select("SELECT * FROM asks");

        return view('admin.kuesioner',compact('data','a'));
    }

    public function askAdd(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $m = new Ask;
            $m->pertanyaan = $data['kuesioner'];
            $m->jawaban = $data['jawaban'];
            $m->save();
            return redirect('/ask')->with('message','data berhasil di tambahkan');
         }
    }

    public function delete($id=null){
        $d=DB::delete("DELETE from asks where id=?",[$id]);
        return redirect('/ask')->with('message','data berhasil di hapus!!!');
  
    }
}
