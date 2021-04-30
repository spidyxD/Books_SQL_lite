<?php
  // file: book.php

class Book extends Model {

  static $books = [
    ['id'=>1,'title'=>'Operating System Concepts','edition'=>'9th','copyright'=>'2012','author_id'=>'1','publisher_id'=>'1',
     'language'=>'ENGLISH','pages'=>'976', 'author'=>'Abraham Silberschatz','publisher'=>'John Wiley & Sons'], 
    ['id'=>2,'title'=>'Database System Concepts','edition'=>'6th','copyright'=>'2010','author_id'=>'1','publisher_id'=>'1',
     'language'=>'ENGLISH','pages'=>'1376','author'=>'Abraham Silberschatz','publisher'=>'John Wiley & Sons'],
    ['id'=>3,'title'=>'Computer Networks','edition'=>'5th','copyright'=>'2010','author_id'=>'2','publisher_id'=>'2',
     'language'=>'ENGLISH','pages'=>'960','author'=>'Andrew S. Tanenbaum','publisher'=>'Pearson Education'],
    ['id'=>4,'title'=>'Modern Operating Systems','edition'=>'4th','copyright'=>'2014','author_id'=>'2','publisher_id'=>'2',
     'language'=>'ENGLISH','pages'=>'1136','author'=>'Andrew S. Tanenbaum','publisher'=>'Pearson Education'],
  ];

  public static function all() { 
    return self::$books; 
  }

  public static function find($id) {
    foreach (self::$books as $key => $book)
      if ($book['id'] == $id) return $book;
    return [];
  }
}
?>