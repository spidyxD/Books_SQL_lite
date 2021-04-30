<?php
    
	Route::get('/', function () {return view('home');});

// ------------- Views ----------------
	//Route::get('/Books', function () { return view('Books'); });
	//Route::get('/Authors', function () { return view('Authors'); }); 
	//Route::get('/Publishers', function () { return view('Publishers'); });
//------------------------------------
	/* require_once('model/Book.php');
    
	Route::get('/Books', function() {
	   return view('Books',
		 ['books'=>Book::all(),
		  'title'=>'Books list']);
	});

	require_once('model/Author.php');
    
	Route::get('/Authors', function() {
	   return view('Authors',
		 ['authors'=>Author::all(),
		  'title'=>'Authors list']);
	});

	require_once('model/Publisher.php');
    
	Route::get('/Publishers', function() {
	   return view('Publishers',
		 ['publishers'=>Publisher::all(),
		  'title'=>'Publishers list']);
	}); */
//------------------------------------
//Route::get('/Book', function () { return view('Book'); });
//Route::get('/Author', function () { return view('Author'); });
//Route::get('/Publisher', function () { return view('Publisher'); });
// ------------- Controllers ----------------
Route::resource('book', 'BookController');
Route::resource('author', 'AuthorController');
Route::resource('publisher', 'PublisherController');
Route::get('book/(:number)', function($id) {
	//return controller('BookController').show($id); 
  });
Route::get('author/(:number)', function($id) {
	echo 'The id is: ' . $id;
  });
Route::get('publisher/(:number)', function($id) {
	echo 'The id is: ' . $id;
  });   
Route::dispatch();

?>
