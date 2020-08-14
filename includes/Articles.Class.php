<?php

class Articles
{
  /**
   * Set up some properties for your class.
   * 
   * Properties can be public, protected, or private.
   */
  public $id = '';
  public $title = '';
  public $content = '';
  

  function __construct ( $id = false, $title = false, $content = false) {
    if ( is_integer( $id ) ) {
        $this->id = $id;
      }
    if ( is_string( $title ) ) {
      $this->title = $title;
    }
    if ( is_string( $content ) ) {
      $this->content = $content;
    }
  }


  
}