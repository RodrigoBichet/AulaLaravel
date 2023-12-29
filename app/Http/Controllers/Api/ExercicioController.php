<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Requests\ExercicioRequest;
use App\Models\Exercicio;
use Illuminate\Http\Request;
use Mockery\Exception;

class ExercicioController extends Controller
{

    public function index(Request $request)
    {

        $per_page = $request->query('per_page');
        $exerciciosPaginated = Exercicio::paginate($per_page);
        $exerciciosPaginated->appends([
            'per_page' =>$per_page
        ]);
        return response()->json($exerciciosPaginated);
    }



    public function show($id)
    {
        try{
            return response()->json(Exercicio::findOrFail($id));
        } catch (\Exception $error){
            $responseError =[
                'Erro' => "O exercicio com id:$id não foi encontrado!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 404;
            return response()->json($responseError, $statusHttp);
        }

    }

    public function store(ExercicioRequest $request)
    {
        $statusHttp = 500;
        try{
             if(!$request->user()->tokenCan('is-admin')){
                 $statusHttp = 403; //Forbidden - Sem permissão
                 throw new Exception('Erro: sem permissão!');
             }

            $newExercicio = $request->all();
            $newExercicio['importado'] = ($request->importado) ? true :false;
            $storedExercicio = Exercicio::create($newExercicio);
            return response()->json([
                'msg'=>'Exercicio inserido com sucesso',
                'exerciico'=>$storedExercicio
            ]);

        } catch (\Exception $error){
            $responseError = [
                'Erro' => "Erro ao inserir novo Exercicio!",
                'Exception' => $error->getMessage(),
                'Debug' => $error
            ];
            $statusHttp = $error->status ?? 500;
            return response()->json($responseError, $statusHttp);
        }
    }


    public function update(Request $request, $id){

        try{

            $data = $request ->all();
            $newExercicio = Exercicio::findOrFail($id);
            $newExercicio->update($data);

            return response()->json([
                "msg" => "Exercicio atualizado com sucesso!",
                "exercicio" => $newExercicio
            ]);
        } catch (Exception $error){
            return response()->json([
                'Erro' => "Erro ao atualizar novo exercicio",
                'Exception' => $error->getMessage()
            ], 404);
        }
    }


    public function destroy($id){

        try{
            if(Exercicio::findOrFail($id)->delete())
                return response() ->json(["msg" => "Exercicio com id $id removido!"]);
        }catch (Exception $error){
            return response()->json([
                'Erro' => "Erro ao excluir exercicio!",
                'Exception' => $error->getMessage()
            ], 404);
        }
    }
}
