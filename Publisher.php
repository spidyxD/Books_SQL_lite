<?php
  // file: publisher.php

class Publisher extends Model {

  static $publishers = [
    ['id'=>1,'publisher'=>'John Wiley & Sons','country'=>'United States','books__title'=>'Operating System Concepts',
    'books__book_id'=>'1','founded'=>'1807','genere'=>'Academic'], 

    ['id'=>2,'publisher'=>'Pearson Education','country'=>'United Kingdom','books__title'=>'Modern Operating Systems',
    'books__book_id'=>'1','founded'=>'1844','genere'=>'Education']
  ];

  public static function all() { 
    return self::$publishers; 
  }

  public static function find($id) {
    foreach (self::$publishers as $key => $publisher)
      if ($publisher['id'] == $id) return $publisher;
    return [];
  }
}
?>