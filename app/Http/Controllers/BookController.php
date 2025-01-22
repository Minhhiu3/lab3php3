<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BookController extends Controller
{
    public function index(){
        $allboock = DB::table('books')
        -> join('categories', 'category_id', '=' , 'categories.id')
        -> select('books.*', 'name') 
        ->get();
       var_dump('category_id');

        
        $datnhat = DB::table('books')->orderBy('price', 'desc')->take (8)->get();
        $renhat = DB::table('books')->orderBy('price', 'asc')->take (8)->get();
        return view('home', compact('datnhat', 'renhat', 'allboock'));
        
    }
    public function category($id){
        $books = DB::table('books')->where('category_id', $id)->paginate(10);
        return view('category', compact('books'));
        
    }
    public function delete($id){
         DB::table('books')->where('id', $id)->delete();
        // return redirect()->route('boock');
        header("http://lab2php3.test/boock");
    }
    //create
    public function create(){
        $categories = DB::table('categories')->get();
        return view('create', compact('categories'));
    }
    // luu dl create
    public function store(Request $request){
      
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'category_id' => $request['category_id'],

        ];
        DB::table('books')->insert($data);
        
    }
    }
    