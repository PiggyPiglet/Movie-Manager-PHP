<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://vjs.zencdn.net/7.6.0/video-js.css">
  <title>Movie Manager</title>
</head>
<body>
<?php

use buibr\tmdbapi\TMDB;

require_once('./vendor/autoload.php');
require('./includes/php/movie.php');

$config = include('includes/php/config.php');
$tmdb = new TMDB($config);

$movieDirs = array_diff(scandir('./movies'), array('..', '.'));
$movies = array();

foreach ($movieDirs as $movieDir) {
  $json = json_decode($tmdb->searchMovie($movieDir)[0]->getJSON(), true);
  $parent = './movies/' . $movieDir;
  array_push($movies, new movie($json['title'], 'https://image.tmdb.org/t/p/original' . $json['poster_path'], $json['overview'], $parent . '/' . scandir($parent)[2]));
}

print_r($movies);
?>
<script src="https://vjs.zencdn.net/7.6.0/video.js"></script>
</body>
</html>