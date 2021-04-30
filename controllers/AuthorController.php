<?php
  // file: controllers/AuthorController.php

  require_once('models/Author.php');

  class AuthorController extends Controller {

    public function index() {  
      return view('author/index',
       ['authors'=>Author::all(),
        'title'=>'Authors List']);
    }

    public function show($id) {
      $author = Author::find($id);
      return view('author/show',
        ['author'=>$author,
         'title'=>'Author Detail']);
    }

    public function create() {
      return view('author/create',
        ['title'=>'Create Author']);
    }

    public function store($param1 = NULL) {
      $id = Input::get('id');
      $author = Input::get('author');
      $nationality = Input::get('nationality');
      $birth_year = Input::get('birth_year');
      $fields = Input::get('fields');
      $books_book_id = Input::get('books_book_id');
      $books_title = Input::get('books_title');
      $item = ['id'=>$id,'author'=>$author,
               'nationality'=>$nationality,'birth_year'=>$birth_year,
                'fields'=>$fields,'books_book_id'=>$books_book_id,
                'books_title'=>$books_title];
      Author::create($item);
      return redirect('/author');
    }  
  }
?>