<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class People extends Model
{
    protected $table = "tb_people";
    protected $fillable = [
    ];


    public function getAllQuestoes(){
        $filter = DB::table('tb_people')
            ->select()
            ->get();
        return $filter;
    }

    public function setQuestoes($data){
        $result = DB::table('tb_people')->updateOrInsert($data);
        return $result;
    }
}
