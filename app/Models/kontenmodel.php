<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
// use Illuminate\Database\Query\Builder;

class kontenmodel extends Model
{
    protected $table = 'tbl_karyawan';
    protected $guarded = [];
    public $timestamps = false;


    // public function datasatusaja($id){
    //     return DB::table('tbl_karyawan')->where('id', $id)->first();
    // }
    // public function adddata($data){
    //     DB::table('tbl_karyawan')->insert($data);
    // }
    // public function alldata(){
    //     return DB::table('tbl_karyawan')->get();
    // }
    // public function change($id,$data){
    //     DB::table('tbl_karyawan')->where('id', $id)->update($data);
    // }
    // public function dataterbaru(){
    //     return DB::table('tbl_karyawan')->select('id')->orderBy('id', 'desc')->first();
    // }
    // public function deletedata($id){
    //     DB::table('tbl_karyawan')->where('id', $id)->delete();
    // }
}
