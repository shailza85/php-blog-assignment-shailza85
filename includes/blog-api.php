<?php
// Retrieve list of Articles from json file.
function retrieveArticle() {
  // Retrieve response string from API.
  $responseString = file_get_contents( './data/articles.json' );
  //var_dump( $responseString ); // Getting a result in browser!
  // Convert response JSON string into a PHP array / object.
  if ( $responseString !== FALSE ) {
    // Convert the JSON string into a valid PHP object using json_decode().
    $responseObj = json_decode( $responseString );
      //var_dump( $responseObj );
      // Collect the array of results from the response object's "articles" property.
      $articles = $responseObj->articles;
      //var_dump( $articles );
      return $articles;
   } else { // Could not convert string to object (json_decode().)
    echo 'Could not interpret API response.';
    }
}


//Code borrowed: @link https://github.com/TECHCareers-by-Manpower/4.1-php-advanced