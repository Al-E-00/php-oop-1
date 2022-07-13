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
   $movie4 = new Movie('The Exorcist', 1973, 'William Peter Blatty', 'Horror', '8.1', 'https://m.media-amazon.com/images/M/MV5BMTUxMjQyNzkxMV5BMl5BanBnXkFtZTcwMzc4MjEzMw@@._V1_SY1000_CR0,0,674,1000_AL_.jpg', 'A single-family detached house is visited by a strange visitor who takes the family apart, making them a living and a dying figure.', 'Ellen Burstyn', 'Jodie Foster', 'Tom Hanks')

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
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
               <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="https://cdn.dribbble.com/users/529449/screenshots/4851203/atm_neon_dribbble.jpg" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                        <h5>Hello</h5>
                        <p>Slide to see movie</p>
                     </div>
                  </div>
                  <?php foreach ($movie as $value) { ?>
                     <div class="carousel-item">
                        <img src="<?php echo $value->image ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                           <h5><?php echo $value->title ?></h5>
                           <p><?php echo $value->description ?></p>
                        </div>
                     </div>
                  <?php } ?>
               </div>
               
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
            </div>

         </div>
      </div>
   </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>


<!-- foreach ($movie as $key => $value) {
echo $value->title . '<br>';
echo $value->year . '<br>';
echo $value->director . '<br>';
echo $value->genre . '<br>';
echo $value->rating . '<br>';
echo $value->image . '<br>';
echo $value->description . '<br>';
echo $value->mainActor . '<br>';
echo $value->mainActor2 . '<br>';
echo $value->mainActor3 . '<br>';
echo '<br>';
} -->