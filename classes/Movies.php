<?php 

    class Movie {
        // properties of instance
        public $title;
        public $year;
        public $director;
        public $genre;
        public $rating;
        public $image;
        public $description;
        public $mainActor;
        public $mainActor2;
        public $mainActor3;

        // constructor
        function __construct(string $_title, $_year, $_director, $_genre, $_rating, $_image, $_description, $_mainActor, $_mainActor2, $_mainActor3) {
            $this->title = $_title;
            $this->year = $_year;
            $this->director = $_director;
            $this->genre = $_genre;
            $this->rating = $_rating;
            $this->image = $_image;
            $this->description = $_description;
            $this->mainActor = $_mainActor;
            $this->mainActor2 = $_mainActor2;
            $this->mainActor3 = $_mainActor3;
        }

        // methods

        public function setYearsOfMovie() {
            $currYear = date('Y');

            return $currYear - $this->year;
        }

        public function getYearsOfMovie() {
            return $this->setYearsOfMovie();
        }

        public function setAgePublicSuggested() {
            if ($this->genre == 'Horror') {
                return '18+';
            } else if ($this->genre == 'Thriller') {
                return '16+';
            } else {
                return 'No age restriction';
            }
        }

        public function getAgePublicSuggested() {
            return $this->setAgePublicSuggested();
        }


        /**
         * Get the value of title
         */ 
        public function getTitle()
        {
                return $this->title;
        }

        /**
         * Set the value of title
         *
         * @return  self
         */ 
        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }

        /**
         * Get the value of year
         */ 
        public function getYear()
        {
                return $this->year;
        }

        /**
         * Set the value of year
         *
         * @return  self
         */ 
        public function setYear($year)
        {
                $this->year = $year;

                return $this;
        }

        /**
         * Get the value of director
         */ 
        public function getDirector()
        {
                return $this->director;
        }

        /**
         * Set the value of director
         *
         * @return  self
         */ 
        public function setDirector($director)
        {
                $this->director = $director;

                return $this;
        }

        /**
         * Get the value of genre
         */ 
        public function getGenre()
        {
                return $this->genre;
        }

        /**
         * Set the value of genre
         *
         * @return  self
         */ 
        public function setGenre($genre)
        {
                $this->genre = $genre;

                return $this;
        }

        /**
         * Get the value of rating
         */ 
        public function getRating()
        {
                return $this->rating;
        }

        /**
         * Set the value of rating
         *
         * @return  self
         */ 
        public function setRating($rating)
        {
                $this->rating = $rating;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of mainActor
         */ 
        public function getMainActor()
        {
                return $this->mainActor;
        }

        /**
         * Set the value of mainActor
         *
         * @return  self
         */ 
        public function setMainActor($mainActor)
        {
                $this->mainActor = $mainActor;

                return $this;
        }

        /**
         * Get the value of mainActor2
         */ 
        public function getMainActor2()
        {
                return $this->mainActor2;
        }

        /**
         * Set the value of mainActor2
         *
         * @return  self
         */ 
        public function setMainActor2($mainActor2)
        {
                $this->mainActor2 = $mainActor2;

                return $this;
        }

        /**
         * Get the value of mainActor3
         */ 
        public function getMainActor3()
        {
                return $this->mainActor3;
        }

        /**
         * Set the value of mainActor3
         *
         * @return  self
         */ 
        public function setMainActor3($mainActor3)
        {
                $this->mainActor3 = $mainActor3;

                return $this;
        }
    }