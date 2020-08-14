<?php
include 'includes/blog-api.php';
include 'includes/ArticlesFromAPI.Class.php';
global $title; 
$title = 'PHP Blog'; 
include 'templates/header.php';
?>

  <h1><?php echo $title; ?></h1>

  <?php if ( $articles = retrieveArticle() ) : ?>
    <ol>
      <?php foreach ( $articles as $article ) : ?>
        <?php $currentArticle = new ArticlesFromAPI( $article->id, $article->title, $article->content ); ?>
        <li>
          <?php $currentArticle->output(); ?>
        </li>
      <?php endforeach; ?>
    </ol>
  <?php endif; ?>
  

<?php 
include 'templates/footer.php';

//Code borrowed: @link https://github.com/TECHCareers-by-Manpower/4.1-php-advanced