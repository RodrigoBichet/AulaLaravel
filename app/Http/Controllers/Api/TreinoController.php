<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Treino;
use Illuminate\Http\Request;
use Mockery\Exception;

class TreinoController extends Controller
{

    private $treino;
    public function __construct(Treino $treino)
    {
        $this->treino = $treino;
    }

    // Método INDEX com API normal:

//    public function index()
//    {
//        return response()->json(Treino::all());
//    }

//Método INDEX com API Resource:

    public function index()
    {
        try {
            $treinos = $this->treino->all();
            return response()->json($treinos);
        } catch (\Exception $error) {
            $responseError = [
                'Erro' => 'Erro ao obter treinos!',
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 404;
            return response()->json($responseError, $statusHttp);
        }
    }


    // Método SHOW com API normal:

//    public function show($id)
//    {
//        try{
//            return response()->json(Treino::findOrFail($id));
//        } catch (\Exception $error){
//            $responseError =[
//                'Erro' => "O produto com id:$id não foi encontrado!",
//                'Exception' => $error->getMessage(),
//            ];
//            $statusHttp = 404;
//            return response()->json($responseError, $statusHttp);
//        }
//
//    }


// Método SHOW com API Resource:

    public function show(Treino $treino)
    {
        return $treino;
    }


    // Método STORE com API normal:

//    public function store(Request $request)
//    {
//        try{
//            $newTreino = $request->all();
//            $newTreino['importado'] = ($request->importado) ? true :false;
//            $storedTreino = Treino::create($newTreino);
//            return response()->json([
//                'msg'=>'Treino inserido com sucesso',
//                'treino'=>$storedTreino
//            ]);
//
//        } catch (\Exception $error){
//            $responseError = [
//                'Erro' => "Erro ao inserir novo Treino!",
//                'Exception' => $error->getMessage(),
//            ];
//            $statusHttp = 404;
//            return response()->json($responseError, $statusHttp);
//        }
//    }


// Método STORE com API Resource:
    public function store(Request $request)
    {
        try{
            return response()->json([
                'Message'=>'Treino inserido com sucesso',
                'Treino'=>$this->treino->create($request->all())
            ]);
        } catch (\Exception $error){
            $responseError = [
                'Erro' => "Erro ao inserir novo treino",
                'Execption' => $error->getMessage()
            ];
            $statusHttp = 404;
            return response()->json($responseError, $statusHttp);
        }
    }

    // Método UPDATE com API normal:

//    public function update(Request $request, $id){
//        try{
//            $data = $request ->all();
//            $newTreino = Treino::findOrFail($id);
//            $newTreino->update($data);
//
//            return response()->json([
//                "msg" => "Treino atualizado com sucesso!",
//                "treino" => $newTreino
//            ]);
//        } catch (Exception $error){
//            return response()->json([
//                'Erro' => "Erro ao atualizar novo treino",
//                'Exception' => $error->getMessage()
//            ], 404);
//        }
//    }


// Método UPDATE com API Resource:

    public function update (Request $request, Treino $treino)
    {
        try{
            $treino->update($request->all());
            return response()->json([
                "Message" => "Treino atualizado com sucesso",
                "Treino" => $treino
            ]);
        } catch(Exception $error){
            return response()->json([
                'Erro' => "Erro ao atualizar treino",
                'Exception' => $error->getMessage()
            ], 404);
        }
    }


    // Método DELETE com API normal:
//    public function remove($id){
//
//        try{
//            if(Treino::findOrFail($id)->delete())
//                return response() ->json(["msg" => "Treino com id $id removido!"]);
//        }catch (Exception $error){
//            return response()->json([
//                'Erro' => "Erro ao excluir treino!",
//                'Exception' => $error->getMessage()
//            ], 404);
//        }
//    }

// Método DELETE com API Resource:
    public function destroy(Treino $treino)
    {
        try{
            if($treino->delete())
                return response()->json([
                    "Message"=>"Treino removido com sucesso",
                    "Treino"=>$treino
                ]);
        } catch (Exception $error){
            return response()->json([
                'Erro' => "Erro ao excluir treino",
                "Exception" => $error->getMessage()
            ], 404);
        }
    }

    public function atletas(Treino $treino)
    {
        return response()->json($treino->load('atletas'));
    }

}
