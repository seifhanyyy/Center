<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class uploadgradescontroller extends Controller
{
    public function index()
    {
        //$statment1 = DB::select("select * from users INNER JOIN studentandclass on users.id = studentandclass.studentid");
        //$x = AUTH::user()->name;
        //$statment2 = DB::select("select * from classes where teacher=$x");
        //$uploadgrade = DB::select("select name,year,courseid from $statment1 UNION $statment2");
        $uploadgrade = DB::select("select * from users");
        return view('UploadGrade', ['uploadgrade' => $uploadgrade]);
    }

    public function update()
    {
        DB::update("update grades set quizweek=1 where sid=3");
    }
}
