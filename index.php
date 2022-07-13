<!-- 
Movie class need to be defined.
   -> inside the class are defined variables of instance
   -> inside the class is defined a constructor
   -> inside the class is defined at least one method
- are instantiated at least two objects 'Movie' and printed on screen the values of the relative properties -->

<?php

require_once('classes/Movies.php');
$movie = [
   [
      $movie1 = new Movie('Inception', 2010, 'Christopher Nolan', 'Thriller', '8.8', 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'A thief, who steals corporate secrets through use of dream-sharing technology, is given the inverse task of planting an idea into the mind of a C.E.O.', 'Leonardo DiCaprio', 'Joseph Gordon-Levitt', 'Ellen Page')
   ],
   [
      $movie2 = new Movie('Call Me By Your Name', 2017, 'Luca Guadagnino', 'Drama', '7.8', 'https://upload.wikimedia.org/wikipedia/en/c/c9/CallMeByYourName2017.png', 'In 1980s Italy, romance blossoms between a seventeen-year-old student and the older man hired as his father\'s research assistant.', 'Timothée Chalamet', 'Armie Hammer', 'Michael Stuhlbarg')
   ],
   [
      $movie3 = new Movie('Eternal Sunshine of the Spotless Mind', 2004, 'Michel Gondry', 'Drama', '8.3', 'https://m.media-amazon.com/images/M/MV5BMTY4NzcwODg3Nl5BMl5BanBnXkFtZTcwNTEwOTMyMw@@._V1_.jpg', 'When their relationship turns sour, a couple undergoes a medical procedure to have each other erased from their memories.', 'Jim Carrey', 'Kate Winslet', 'Tom Wilkinson')
   ],
   [
      $movie4 = new Movie('The Exorcist', 1973, 'William Peter Blatty', 'Horror', '8.1', 'https://m.media-amazon.com/images/M/MV5BMTUxMjQyNzkxMV5BMl5BanBnXkFtZTcwMzc4MjEzMw@@._V1_SY1000_CR0,0,674,1000_AL_.jpg', 'A single-family detached house is visited by a strange visitor who takes the family apart, making them a living and a dying figure.', 'Ellen Burstyn', 'Jodie Foster', 'Tom Hanks')
   ]
];

var_dump($movie);
var_dump($movie2);
var_dump($movie3);
var_dump($movie4);

echo "Movie title is: " . $movie->title . "<br>";
