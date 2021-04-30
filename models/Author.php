<?php
  // file: author.php

class Author extends Model {

  static $authors = [
    ['id'=>1,'author'=>'Abraham Silberschatz','nationality'=>'Israelis / American','books__title'=>'Operating System Concepts','birth'=>'1952',
    'books__book_id'=>'1','fields'=>'Database Systems, Operating Systems'], 
   
    ['id'=>2,'author'=>'Andrew S. Tanenbaum','nationality'=>'Dutch / American','books__title'=>'Modern Operating Systems','birth'=>'1944',
    'books__book_id'=>'1','fields'=>'Database Systems, Operating Systems']
  ];

  public static function all() { 
    return self::$authors; 
  }

  public static function find($id) {
    foreach (self::$authors as $key => $author)
      if ($author['id'] == $id) return $author;
    return [];
  }
}
?>