<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Query\Builder;

class profilemodel extends Model
{
    // public function datasatusaja($id){
    //     return DB::table('users')->where('id', $id)->first();
    // }
    // public function adddata($data){
    //     DB::table('users')->insert($data);
    // }
    // public function alldata(){
    //     return DB::table('users')->get();
    // }
    // public function change($data){
    //     DB::table('users')->where('id', auth()->user()->id)->update($data);
    // }
    // public function dataterbaru(){
    //     return DB::table('users')->select('id')->orderBy('id', 'desc')->first();
    // }
    // public function deletedata($id){
    //     DB::table('users')->where('id', $id)->delete();
    // }
    protected $table = 'users';
    protected $guarded = [];
    public $timestamps = false;
}
