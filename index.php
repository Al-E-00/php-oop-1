<!-- 
Movie class need to be defined.
   -> inside the class are defined variables of instance
   -> inside the class is defined a constructor
   -> inside the class is defined at least one method
- are instantiated at least two objects 'Movie' and printed on screen the values of the relative properties -->

<?php

require_once('classes/Movies.php');
$movie = [

   $movie1 = new Movie('Inception', 2010, 'Christopher Nolan', 'Thriller', '8.8', 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a C.E.O.', 'Leonardo DiCaprio', 'Joseph Gordon-Levitt', 'Ellen Page'),
   $movie2 = new Movie('Call Me By Your Name', 2017, 'Luca Guadagnino', 'Drama', '7.8', 'https://m.media-amazon.com/images/M/MV5BMDU5YjI5N2ItNTBkZS00MTBkLTg4NTUtMjg5NjcxNGQ4ODEwXkEyXkFqcGdeQXVyMTYzMDM0NTU@._V1_.jpg', 'In 1980s Italy, romance blossoms between a seventeen-year-old student and the older man hired as his father\'s research assistant.', 'Timothée Chalamet', 'Armie Hammer', 'Michael Stuhlbarg'),
   $movie3 = new Movie('Eternal Sunshine of the Spotless Mind', 2004, 'Michel Gondry', 'Drama', '8.3', 'https://m.media-amazon.com/images/M/MV5BMTY4NzcwODg3Nl5BMl5BanBnXkFtZTcwNTEwOTMyMw@@._V1_.jpg', 'When their relationship turns sour, a couple undergoes a medical procedure to have each other erased from their memories.', 'Jim Carrey', 'Kate Winslet', 'Tom Wilkinson'),
   $movie4 = new Movie('The Exorcist', 1973, 'William Peter Blatty', 'Horror', '8.1', 'https://cdn.shopify.com/s/files/1/0037/8008/3782/files/The_Exorcist_movie_poster_600x600.jpg?v=1632160332', 'A single-family detached house is visited by a strange visitor who takes the family apart, making them a living and a dying figure.', 'Ellen Burstyn', 'Jodie Foster', 'Tom Hanks')

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Movies card</title>

   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
   
</head>

<body>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-3 h-50">
            <div class="glider-container">
               <div class="glider">
                  <?php foreach ($movie as $movie) { ?>
                     <div class="card" style="width: 18rem;">
                        <img src="<?php echo $movie->image; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title"><?php echo $movie->title; ?></h5>
                           <p class="card-text"><strong>Description: </strong><?php echo $movie->description; ?></p>
                           <p class="card-text"><strong>Main actor 1: </strong><?php echo $movie->mainActor; ?></p>
                           <p class="card-text"><strong>Main actor 2: </strong><?php echo $movie->mainActor2; ?></p>
                           <p class="card-text"><strong>Main actor 3: </strong><?php echo $movie->mainActor3; ?></p>
                           <p class="card-text"><strong>Movie years: </strong><?php echo $movie->getYearsOfMovie(); ?></p>
                           <p class="card-text"><strong>Age suggested: </strong><?php echo $movie->getAgePublicSuggested(); ?></p>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
                     
                     <button aria-label="Previous" class="glider-prev btn btn-primary">«</button>
                     <button aria-label="Next" class="glider-next  btn btn-primary">»</button>
                     <div role="tablist" class="dots"></div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
      <script src="app.js"></script>
      <script src="glider.js"></script>
</body>

</html>