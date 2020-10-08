<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ProdutosModel extends Model
{
    public function insertProduto($name,$price,$weight){
        $dataNow = date('Y-m-d');
        $result = DB::table('produtos')->insertGetId([
            "nome" => $name,
            "preco" => $price,
            "peso" => $weight,
            "created_at"=>$dataNow,
            "updated_at"=>$dataNow,
        ]);
        return ($result != null)?"insert ok":"algum erro aconteceu";
    }
    public function getTodosProdutos(){
        $result = DB::table('produtos')->get();
        return ($result != null)?$result:"nenhum item encontrado";
    }
    public function getUmProduto($id){
        $result = DB::table('produtos')->where('id','=',$id)->get();
        return ($result != null)?$result:"nenhum item encontrado";
    }
    public function updateProdutos($id,$name,$price,$weight,$dataCreate){
        $dataNow = date('Y-m-d');
        $result = DB::table('produtos')
            ->where("id","=",$id)
            ->update([
                "nome" => $name,
                "preco" => $price,
                "peso" => $weight,
                "created_at"=>$dataCreate,
                "updated_at"=>$dataNow,
            ]);
            return ($result != null)?"edit ok":"algum erro aconteceu";
    }
    public function deleteProdutos($id){
        $result = DB::table('produtos')->where('id','=',$id)->delete();
        return ($result != null)?"delete ok":"algum erro aconteceu";
    }
}
