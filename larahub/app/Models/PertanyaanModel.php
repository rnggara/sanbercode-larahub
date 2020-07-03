<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PertanyaanModel extends Model
{
    public static function getAll(){
        $data = DB::table('pertanyaan')->get();
        return $data;
    }

    public static function getById($id){
        $data = DB::table('pertanyaan')->where('id', '=', $id)->get();
        return $data;
    }

    public static function saveData($data){
        $new_data = DB::table('pertanyaan')->insert($data);
        return $new_data;
    }

    public static function updateData($id, $request){
        $update = DB::table('pertanyaan')
                            ->where('id', $id)
                            ->update($request);
        return $update;
    }

    public static function deleteData($id){
        $delete = DB::table('pertanyaan')
                        ->delete($id);
        return $delete;
    }
}
