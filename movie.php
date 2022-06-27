<?php
  class movie {
   public $title;
   public $movieDirector;
   public $genre;
   public $year;
   public $runningTime;


   public function __construct($_title, $_movieDirector, $_genre, $_year, $_runningTime){
    
      $this->title = $_title;
      $this->movieDirector = $_movieDirector;
      $this->genre = $_genre;
      $this->year = $_year;
      $this->runningTime = $_runningTime;
    }
  }

 
?>