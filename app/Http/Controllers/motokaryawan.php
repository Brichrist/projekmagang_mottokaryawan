<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Http\Requests\form_request_validation;
use App\Http\Requests\form_request_validation_profile;

use Illuminate\Http\Request;
use App\Models\kontenmodel;
use App\Models\profilemodel;
use App\Models\skill;
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
    public function insert(form_request_validation $request){

        $validated = $request->validated();

        // Request()->validate([
        //     'nama_depan' => 'required',
        //     'nama_belakang' => 'required',
        //     'tag_line' => 'required',
        //     'description' => 'required',
        //     'foto' => 'mimes:jpg,jpeg',
        // ]);
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
            foreach(explode(',',$karyawan->skill) as $row){
            $skill[]=$row;
            };
            // dd($skill);
            $skill_list=skill::get();
        return view('trueedit')->with(compact('karyawan','skill','skill_list'));
    }
    public function change($id,$skill,form_request_validation $request){
        $validated = $request->validated();
        // request()->validate([
        //     'nama_depan' => 'required',
        //     'nama_belakang' => 'required',
        //     'tag_line' => 'required',
        //     'description' => 'required',
        //     'foto' => 'mimes:jpg,jpeg',
        // ]);
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
                'skill' => $skill,
            ];
        }
        else {
            $file = [
                'nama_depan' => Request()->nama_depan,
                'nama_belakang' => Request()->nama_belakang,
                'tag_line' => Request()->tag_line,
                'description' => Request()->description,
                'skill' => $skill,
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
    public function changeprofile(form_request_validation_profile $request){

        $id=Auth::id();
        $validated = $request->validated();
        // request()->validate([
        //     'name' => 'required',
        //     'email' => ['required ',Rule::unique('users')->ignore($id)],
        //     'tanggal_lahir' => 'required',
        //     'alamat' => 'required',
        //     'level' => 'required',
        // ]);
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
        $req->session()->put('data',$data['level']); 
        echo session('data');
        echo getdate1();
        return redirect()->route('home');
    }
    public function config(){
        dd(config('app.name2'));
    }
    public function edit_level(){

        $account=profilemodel::get();
        return view('editlevel',compact("account"));
    }
    public function edit_level_all(){
        $datas=profilemodel::select('id')->get();
        
        request()->validate([        
        ]);

            foreach ($datas as $data ) {   
                // echo 'level'.$data->id;
                // echo " ";
                // echo Request()->{'level'.$data->id};
                // echo '<br>';
                profilemodel::where('id',$data->id )->update(['level' => Request()->{'level'.$data->id}]);  
            };    
    
        $account=profilemodel::get();
        return view('editlevel',compact("account"));
    }
    public function add_skill(){
        $skills=skill::get();
        return view('addskill',compact("skills"));
    }
    public function insert_skill(){

        // request()->validate([
            //     'nama_depan' => 'required',
            //     'nama_belakang' => 'required',
            //     'tag_line' => 'required',
            //     'description' => 'required',
            //     'foto' => 'mimes:jpg,jpeg',
            // ]);

            //     $foto = Request()->foto;
            //     $namafoto= Request()->nama_depan.'.'. $foto->extension();
            //     $foto->move(public_path('foto'),$namafoto);
    
        $this->validate(
            $request, 
            ['skill' => 'required'],
            ['skill.required' => 'Harap isi terlebih dahulu']
        );
        request()->validate([
            'skill'=>"required",
        ]);
        $skill=['skill'=>Request()->skill,];
        skill::create($skill);
        return redirect()->route("addskill");
    }





}



