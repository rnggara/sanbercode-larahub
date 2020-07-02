<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JawabanModel extends Model
{
    public static function getById($id){
        $data = DB::table('jawaban')->where('id_pertanyaan', '=', $id)->get();
        return $data;
    }

    public static function saveJawaban($data){
        $new_data = DB::table('jawaban')->insert($data);
        return $new_data;
    }
}
