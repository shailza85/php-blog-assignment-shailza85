<?php
// Ensure that we aren't pulling Pokemon.Class in multiple times; pull it in if it hasn't run yet.
include_once 'Articles.Class.php';

class ArticlesFromAPI extends Articles {
  // Output!
  public function output () {
    ?>
      <dl>
      <dt>Id:</dt>
        <dd><?php echo $this->id; ?></dd>
        <dt>Title:</dt>
        <dd><?php echo $this->title; ?></dd>
        <dt>Content:</dt>
        <dd><?php echo $this->content; ?></dd>
      <dl>
    <?php
  }
}


//Code borrowed: @link https://github.com/TECHCareers-by-Manpower/4.1-php-advanced