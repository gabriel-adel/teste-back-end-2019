<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutosModel;

class ProdutosController extends Controller
{
    public function insertProduct(Request $request, ProdutosModel $ProdutosModel){ 
        $result = $ProdutosModel->insertProduto($request->name,$request->price,$request->weight);  
        return response()->json($result,200);
    }
    public function deleteProduct(Request $request, ProdutosModel $ProdutosModel){
        $result = $ProdutosModel->deleteProdutos($request->id);  
        return response()->json($result,200);
    } 
    public function getAllProduct(Request $request, ProdutosModel $ProdutosModel){
        $result = $ProdutosModel->getTodosProdutos($request->id);  
        return response()->json($result,200);
    }
    public function getOneProduct(Request $request, ProdutosModel $ProdutosModel){
        $result = $ProdutosModel->getUmProduto($request -> id);  
        return response()->json($result,200);
    }
    public function editProduct(Request $request, ProdutosModel $ProdutosModel){
        //estou passando os parametros sem array por que são poucos parametros
        $result = $ProdutosModel->updateProdutos($request->id,$request->name,$request->price,$request->weight,$request->dataCreate);  
        return response()->json($result,200);
    }
}
