<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Atleta;
use Illuminate\Http\Request;
use Mockery\Exception;

class AtletaController extends Controller
{
    public function index()
    {
        return response()->json(Atleta::all());
    }

    public function show($id)
    {
        try{
            return response()->json(Atleta::findOrFail($id));
        } catch (\Exception $error){
            $responseError =[
                'Erro' => "O produto com id:$id não foi encontrado!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 404;
            return response()->json($responseError, $statusHttp);
        }

    }

    public function store(Request $request)
    {
        try{
            $newAtleta = $request->all();
            $newAtleta['importado'] = ($request->importado) ? true :false;
            $storedAtleta = Atleta::create($newAtleta);
            return response()->json([
                'msg'=>'Atleta inserido com sucesso',
                'atleta'=>$storedAtleta
            ]);

        } catch (\Exception $error){
            $responseError = [
                'Erro' => "Erro ao inserir novo Atleta!",
                'Exception' => $error->getMessage(),
            ];
            $statusHttp = 404;
            return response()->json($responseError, $statusHttp);
        }
    }


    public function update(Request $request, $id){
        try{
            $data = $request ->all();
            $newAtleta = Atleta::findOrFail($id);
            $newAtleta->update($data);

            return response()->json([
                "msg" => "Atleta atualizado com sucesso!",
                "atleta" => $newAtleta
            ]);
        } catch (Exception $error){
            return response()->json([
                'Erro' => "Erro ao atualizar novo atleta",
                'Exception' => $error->getMessage()
            ], 404);
        }
    }

    public function destroy($id){

        try{
            if(Atleta::findOrFail($id)->delete())
                return response() ->json(["msg" => "Atleta com id $id removido!"]);
        }catch (Exception $error){
            return response()->json([
                'Erro' => "Erro ao excluir atleta!",
                'Exception' => $error->getMessage()
            ], 404);
        }
    }
}

