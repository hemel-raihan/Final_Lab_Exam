<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\studentRequest;
use Validator;
use App\User;

class homeController extends Controller
{

    public function index(Request $req){

    /*	$user = ['name'=> 'alamin', 'id'=>12];
    	return view('home.index', $user);*/

    	/*
    	$name = 'alamin';
    	$id = 33;
    	$cgpa = 4;
    	return view('home.index', compact('name', 'id', 'cgpa'));*/

    /*	return view('home.index')
    			->with('name', 'alamin')
    			->with('id', '66');*/

    	/*return view('home.index')
    			->withName('alamin')
    			->withId('66');*/

    	/*$v = view('home.index');
    	$v->withName('alamin');
    	$v->withId('12');
    	return $v;*/

        return view('home.index', ['username'=> $req->session()->get('username')]);
    	
    }

   


}
