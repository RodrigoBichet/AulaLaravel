<?php

namespace App\Http\Controllers;

use App\Models\Treino;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TreinoController extends Controller
{
    public function index(){
        //$model = new Treinos();
        //dd($model->all());
        //return response()->json($model->find(111));
        $collectionTreinos = Treino::all();
        return view('treinos.index',['listTreinos'=> $collectionTreinos,'totalProds'=> $collectionTreinos->count()]);
    }

    public function show($id) : View {
        //dump(Treinos::find($id));
        return view('treinos.show', ['treino'=>Treino::find($id)]);
    }

    public function create(): View{
        return view('treinos.create');
    }
    public function store(Request $request): RedirectResponse{
        $newTreino = $request->all();

        if (!Treino::create($newTreino)){
            dd("Erro ao inserir o novo treino");

        }
        return redirect('/treinos');

    }

    public function edit($id): View{
        $treino = Treino::find($id);
        if (!$treino)
            dd("Treino não encontrado");
        return view('treinos.edit', ['treino'=>$treino]);
    }

    public function update(Request $request, $id): RedirectResponse{
        $updatedTreino = $request->all();
        if (!Treino:: find($id)->update($updatedTreino))
            dd("Erro ao atualizar treino $id!!");
        return redirect('/treinos');
    }

    public function delete($id): View{
        $treino = Treino::find($id);
        if (!$treino)
            dd("Treinos não encontrado");
        return view('treinos.delete', ['treino'=>$treino]);
    }

    public function remove($id): RedirectResponse{
        if(!Treino::destroy($id))
            dd("Erro ao deletar o treino");
        return redirect('/treinos');
    }

}


