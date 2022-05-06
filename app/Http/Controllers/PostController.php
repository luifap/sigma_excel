<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function exportExcel()
    {
        return Excel::download(new PostsExport, 'archivolaravelexceldescargado.xlsx');
    }

    public function importar(Request $request){
        if($request->hasFile('documento')){
            $path = $request->file('documento')->getRealPath();
            $datos = Excel::load($path, function($reader){
            })->get();

            if(!empty($datos) && $datos->count()){
                $datos = $datos->toArray();
                for($i=0; $i< count($datos); $i++){
                   $datosImportar[] = $datos[$i];
                }
            }

            Post::insert($datosImportar);
        }
        return back();
    }
}
