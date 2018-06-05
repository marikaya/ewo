<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SearchController extends Controller{
   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $request->session()->flash('keyword', $keyword);

        return view('search');
    }
}