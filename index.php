 <?php
 require_once __DIR__ . '/movie.php';
   
   $movies = [
      new movie('topgun', 'Joseph Kosinski', 'action', '1986', '1h 50m'),
      new movie('hustle', 'Jeremiah Zagar', 'comedy/sport', '2022', '1h 57m')
   ];
   
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
 <body>
 <h1>Film</h1>
    <ul>
        <?php foreach($movies as $movie) { ?>
        <li>
            <h3><?php echo $movie->title; ?></h3>
            <h4><?php echo $movie->movieDirector; ?></h4>
            <h4><?php echo $movie->genre; ?></h4>
            <h4><?php echo $movie->year; ?></h4>
            <h4><?php echo $movie->runningTime; ?></h4>
        </li>
        <?php } ?>
    </ul>
 </body>
 </html>