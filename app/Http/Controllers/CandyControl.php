<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandyControl extends Controller
{
    public function Candy(){
        return 'Hi Orange aqba acadmy ';

    }

    public function ViewWelcome(){

        return view('welcome');

    }
    public function User($id,$name){

        return "id=".$id."<br>"."name=".$name;


    }
    public function land(){

        return view('home');


    }



}
