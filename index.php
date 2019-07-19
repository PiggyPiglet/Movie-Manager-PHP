<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://vjs.zencdn.net/7.6.0/video-js.css">
  <title>Movie Manager</title>
</head>
<body>
  <?php
    require_once('includes/php/imdb.php');
    require('includes/php/movie.php');

    $imdb = new IMDb(true, true, 0);
    $movieDirs = array_diff(scandir('./movies'), array('..', '.'));
    $movies = array();

    foreach ($movieDirs as $movieDir) {
      $imdbMovies = $imdb->find_by_title($movieDir);

      if (count($imdbMovies) > 0) {
        $imdbMovie = $imdbMovies[0];
        $movie = new movie($imdbMovie->title, null, $imdbMovie->plot, './movies/' . $movieDir . '/' . scandir('./movies/' . $movieDir)[2]);
        array_push($movies, $movie);
      }
    }

    foreach ($movies as $movie) {
      echo "
        {<br/>
          title: {$movie->getTitle()}<br/>
          description: {$movie->getDescription()}<br/>
          path: {$movie->getPath()}<br/>
        },<br/>
      ";
    }
  ?>
  <script src="https://vjs.zencdn.net/7.6.0/video.js"></script>
</body>
</html>