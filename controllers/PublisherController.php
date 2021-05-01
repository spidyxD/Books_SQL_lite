<?php
  // file: controllers/BookController.php

  require_once('models/Publisher.php');

  class PublisherController extends Controller {

    public function index() {  
      return view('publisher/index',
       ['publishers'=>Publisher::all(),
        'title'=>'Publishers List']);
    }

    public function show($id) {
      $publisher = Publisher::find($id);
      return view('publisher/show',
        ['publisher'=>$publisher,
         'title'=>'Publisher Detail']);
    }

    public function create() {
      return view('publisher/create',
        ['title'=>'Create Publisher']);
    }

    public function store($param1 = NULL) {
      $id = Input::get('id');
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $books_book_id = Input::get('books_book_id');
      $books_title = Input::get('books_title');

      $item = ['id'=>$id,'publisher'=>$publisher,
               'country'=>$country,'founded'=>$founded,
                'genere'=>$genere,'books_book_id'=>$books_book_id,
                'books_title'=>$books_title];
      Publisher::create($item);
      return redirect('/publisher');
    }  

    public function edit($id) {
      $publisher = Publisher::find($id);
      return view('publisher/edit',
        ['publisher'=>$publisher,
         'title'=>'Publisher Edit']);
    }  

    public function update($_,$id) {
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $books_title = Input::get('books_title');
      $books_book_id = Input::get('books_book_id');
      $item = ['publisher'=>$publisher,'country'=>$country,
               'founded'=>$founded,'genere'=>$genere,
                'books_book_id'=>$books_book_id,'books_title'=>$books_title];
      Publisher::update($id,$item);
      return redirect('/publisher');
    }  
  }
?>