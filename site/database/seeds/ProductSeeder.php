<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataNow = date('Y-m-d');
        DB::table('produtos')->insertGetId([
            "nome" => "item legal",
            "preco" => 100.00,
            "peso" => 10.00,
            "created_at"=>$dataNow,
            "updated_at"=>$dataNow,
        ]);
        DB::table('produtos')->insertGetId([
            "nome" => "item legal 2",
            "preco" => 100.00,
            "peso" => 10.00,
            "created_at"=>$dataNow,
            "updated_at"=>$dataNow,
        ]);
        DB::table('produtos')->insertGetId([
            "nome" => "item legal 3",
            "preco" => 100.00,
            "peso" => 10.00,
            "created_at"=>$dataNow,
            "updated_at"=>$dataNow,
        ]);
    }
}
