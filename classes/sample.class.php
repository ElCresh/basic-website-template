<?php
/*
 * ***************************
 * Template Sample class
 * ***************************
 */

  class sample {
    private $sample;
    
    function __construct($sample) {
      $this->sample = $sample;
    }

    public function getSample(){
      return $this->sample;
    }
  }
?>
