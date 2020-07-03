<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    function index($id){
        $data['jawaban'] = JawabanModel::getById($id);
        $data['pertanyaan'] = PertanyaanModel::getById($id);
        return view('jawaban', compact('data'));
    }

    function save(Request $request, $id){
        $data['content'] = $request['content'];
        $data['id_pertanyaan'] = $id;
        $data['created_at'] = date('Y-m-d H:i:s');
        JawabanModel::saveJawaban($data);
        return redirect('jawaban/'.$id);
    }
}
