<?php
//------------------------------------------------------------------------------
// Default Configuration
//------------------------------------------------------------------------------
// Global Configuration
return array(
  'apikey' => '1960076afa66150f8f8e5849a760bd85',
  'lang' => 'en',
  'timezone' => 'Australia/Perth',
  'adult' => false,
  'debug' => false,
  // Data Return Configuration - Manipulate if you want to tune your results
  'appender' => array(
      'movie' => array('trailers', 'images', 'credits', 'translations', 'reviews'),
      'tvshow' => array('trailers', 'images', 'credits', 'translations', 'keywords'),
      'season' => array('trailers', 'images', 'credits', 'translations'),
      'episode' => array('trailers', 'images', 'credits', 'translations'),
      'person' => array('movie_credits', 'tv_credits', 'images'),
      'collection' => array('images'),
      'company' => array('movies')
  )
);