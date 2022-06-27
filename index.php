 <?php
 require_once __DIR__ . '/movie.php';
   
   $movies = [
      new movie('topgun', 'Joseph Kosinski', 'action', '1986', 110),
      new movie('hustle', 'Jeremiah Zagar', 'comedy/sport', '2022', 117),
      new movie('the office', 'Steve Carell', 'comedy', '2013', 15 )
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
            <h3>title: <?php echo $movie->title; ?></h3>
            <h4>movieDirector: <?php echo $movie->movieDirector; ?></h4>
            <h4>gener: <?php echo $movie->genre; ?></h4>
            <h4>original release: <?php echo $movie->year; ?></h4>
            <?php if($movie->runningTime < 20 ) { ?>
            <strong> non è un film, è una serie tv </strong>
            <?php } ?>
            <?php  { ?>
            <strong>durata: <?php echo $movie->runningTime; ?>M</strong>
            <?php } ?>
            <hr style="width: 100%; color: black;">
        </li>
        <?php } ?>
    </ul>
 </body>
 </html>