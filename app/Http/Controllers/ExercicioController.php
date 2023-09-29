<?php

namespace App\Http\Controllers;

use App\Models\Exercicio;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ExercicioController extends Controller
{
    public function index(){
        //$model = new Exercicios();
        //dd($model->all());
        //return response()->json($model->find(111));
        $collectionExercicios = Exercicio::all();
        return view('exercicios.index',['listExercicios'=> $collectionExercicios,'totalProds'=> $collectionExercicios->count()]);
    }

    public function show($id) : View {
        //dump(Exercicios::find($id));
        return view('exercicios.show', ['exercicio'=>Exercicio::find($id)]);
    }

    public function create(): View{
        return view('exercicios.create');
    }
    public function store(Request $request): RedirectResponse{
        $newExercicio = $request->all();

        if (!Exercicio::create($newExercicio)){
            dd("Erro ao inserir o novo exercicio");

        }
        return redirect('/exercicios');

    }

    public function edit($id): View{
        $exercicio = Exercicio::find($id);
        if (!$exercicio)
            dd("Exercicio não encontrado");
        return view('exercicios.edit', ['exercicio'=>$exercicio]);
    }

    public function update(Request $request, $id): RedirectResponse{
        $updatedExercicio = $request->all();
        if (!Exercicio:: find($id)->update($updatedExercicio))
            dd("Erro ao atualizar exercicio $id!!");
        return redirect('/exercicios');
    }

    public function delete($id): View{
        $exercicio = Exercicio::find($id);
        if (!$exercicio)
            dd("Exercicios não encontrado");
        return view('exercicios.delete', ['exercicio'=>$exercicio]);
    }

    public function remove($id): RedirectResponse{
        if(!Exercicio::destroy($id))
            dd("Erro ao deletar o exercicio");
        return redirect('/exercicios');
    }

}

