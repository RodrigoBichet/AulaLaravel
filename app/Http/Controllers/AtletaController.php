<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AtletaController extends Controller
{
    public function index(){
        //$model = new Atletas();
        //dd($model->all());
        //return response()->json($model->find(111));
        $collectionAtletas = Atleta::all();
        return view('atletas.index',['listAtletas'=> $collectionAtletas,'totalProds'=> $collectionAtletas->count()]);
    }

    public function show($id) : View {
        //dump(Atletas::find($id));
        return view('atletas.show', ['atleta'=>Atleta::find($id)]);
    }

    public function create(): View{
        return view('atletas.create');
    }
    public function store(Request $request): RedirectResponse{
        $newAtleta = $request->all();

        if (!Atleta::create($newAtleta)){
            dd("Erro ao inserir o novo atleta");

        }
        return redirect('/atletas');

    }

    public function edit($id): View{
        $atleta = Atleta::find($id);
        if (!$atleta)
            dd("Atleta não encontrado");
        return view('atletas.edit', ['atleta'=>$atleta]);
    }

    public function update(Request $request, $id): RedirectResponse{
        $updatedAtleta = $request->all();
        if (!Atleta:: find($id)->update($updatedAtleta))
            dd("Erro ao atualizar atleta $id!!");
        return redirect('/atletas');
    }

    public function delete($id): View{
        $atleta = Atleta::find($id);
        if (!$atleta)
            dd("Atletas não encontrado");
        return view('atletas.delete', ['atleta'=>$atleta]);
    }

    public function remove($id): RedirectResponse{
        if(!Atleta::destroy($id))
            dd("Erro ao deletar o atleta");
        return redirect('/atletas');
    }

}

