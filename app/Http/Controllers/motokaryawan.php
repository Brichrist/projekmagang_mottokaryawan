<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use App\Models\kontenmodel;
use App\Models\profilemodel;
use Auth;
use App\Models\User;

class motokaryawan extends Controller
{
    public function __construct(){
        $this-> middleware('auth');
    }
    public function index(){
        $karyawan=kontenmodel::simplepaginate(1);
        return view('contentpage',compact('karyawan'));
    }
    public function add(){
        
         return view('add');   
    }
    public function insert(){
        Request()->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'tag_line' => 'required',
            'description' => 'required',
            'foto' => 'mimes:jpg,jpeg',
        ]);
        $foto = Request()->foto;
        $namafoto= Request()->nama_depan.'.'. $foto->extension();
        $foto->move(public_path('foto'),$namafoto);

        $file = [
            'nama_depan' => Request()->nama_depan,
            'nama_belakang' => Request()->nama_belakang,
            'tag_line' => Request()->tag_line,
            'description' => Request()->description,
            'foto' => $namafoto,
        ];

        kontenmodel::create($file);
        $karyawan=kontenmodel::paginate(1);
        return redirect()->route('index', ['page' => $karyawan->lastPage()]);
    }
    public function indexall(){
        // $data=[
        //     'karyawan'=>$this->kontenmodel->alldata(),
        // ];

        $data=kontenmodel::get();

        return view('edit',['karyawan'=>$data]);
    }
    public function update($id){
        $karyawan=kontenmodel::findOrFail($id);

        return view('trueedit',compact('karyawan'));
    }
    public function change($id){
        request()->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'tag_line' => 'required',
            'description' => 'required',
            'foto' => 'mimes:jpg,jpeg',
        ]);
        if (Request()->foto<>"") {
            $foto = Request()->foto;
            $namafoto= Request()->nama_depan.'.'. $foto->extension();
            $foto->move(public_path('foto'),$namafoto);

            $file = [
                'nama_depan' => Request()->nama_depan,
                'nama_belakang' => Request()->nama_belakang,
                'tag_line' => Request()->tag_line,
                'description' => Request()->description,
                'foto' => $namafoto,
            ];
        }
        else {
            $file = [
                'nama_depan' => Request()->nama_depan,
                'nama_belakang' => Request()->nama_belakang,
                'tag_line' => Request()->tag_line,
                'description' => Request()->description,
            ];
        }
        
        // $this->kontenmodel->change($id,$file);
        
        kontenmodel::where('id',$id)->update($file);
        $b=$id;
        $a=0;

        $datas=kontenmodel::get();
        foreach($datas as $data){
            $a++;
            if($data->id==$b){
                break;
            }
        }
        
        return redirect()->route('index', ['page' => $a]);

    }
    public function delete($id){ 
       
        kontenmodel::findOrFail($id)->delete();
 
        return redirect()->route('kontenmaster');
    }
    public function changeprofile(){

        $id=Auth::id();

        request()->validate([
            'name' => 'required',
            'email' => ['required ',Rule::unique('users')->ignore($id)],
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'level' => 'required',
        ]);
            $file = [
                'name' => Request()->name,
                'email' => Request()->email,
                'tanggal_lahir' => Request()->tanggal_lahir,
                'alamat' => Request()->alamat,
                'level' => Request()->level,
            ];
 
        
        // $this->profilemodel->change($file);
        $karyawan=profilemodel::where('id',$id)->update($file);

        
        
        return redirect()->route('home');
        // $data=$req->input();
        // $req->session()->put('data',$data['name']); 
        // echo session('data');
    }
    public function sesi(request $req){
        $data=$req->input();
        $req->session()->put('data',$data['name']); 
        echo session('data');
    }
    public function config(){
        dd(config('app.name2'));
    }






}



