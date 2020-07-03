<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $data = PertanyaanModel::getAll();
        return view('pertanyaan_view', compact('data'));
    }

    public function formPertanyaan(){
        return view('pertanyaan_form');
    }

    public function editPertanyaan($id){
        $data = PertanyaanModel::getById($id);
        return view('pertanyaan_edit', compact('data'));

    }

    public function savePertanyaan(Request $request){
        $data['title'] = $request['title'];
        $data['content'] = $request['content'];
        $data['created_at'] = date('Y-m-d H:i:s');
        $item = PertanyaanModel::saveData($data);
        return redirect('/pertanyaan');
    }

    public function updatePertanyaan($id, Request $request){
        $data['title'] = $request['title'];
        $data['content'] = $request['content'];
        $data['updated_at'] = date('Y-m-d H:i:s');
        PertanyaanModel::updateData($id, $data);
        return redirect('/pertanyaan');
    }

    public function deletePertanyaan($id){
        PertanyaanModel::deleteData($id);
        return redirect('/pertanyaan');
    }
}
