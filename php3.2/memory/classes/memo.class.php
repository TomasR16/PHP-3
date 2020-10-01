

<?php

class Memo {

  //nummers in de buttons
  private $nums = array(1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8);
  //welke nums in welke kaar staat
  private $cards = array();

  private $lastindex = -1;
  private $forLastIndex = -1;
  //voor kijken van winnaar
  private $won = false;
  private $geraden = 0;



  //nummers uit array met shuffle functie in cards array zetten
  public function __construct(){
    shuffle($this->nums);
    for ($i=0; $i <count($this->nums) ; $i++) {
      array_push($this->cards,new card($this->nums[$i] , $i));
    }
  }


  //neer zetten van de kaarten op postie
  public function __toString(){
    $output = "";
    for ($i=0; $i <count($this->cards) ; $i++) {
      $output.=$this->cards[$i];
      //om de vier rijen nieuw row
      if ($i%4 ==3) {
        $output .="<br>";
      }
    }
    return $output;
  }


  //kijken of gelijk is
  //als gelijk is zet op geraden anders weer dicht
  public function click($index){
    //pakken van eerste klik en opslaan
    if ($this->lastindex == -1) {
      $this->lastindex = $index;
    }else {
      //pakken van tweede klik en oplsaan
      if ($this->forLastIndex == -1) {
        $this->forLastIndex = $index;
        //kijken of klik indexen gelijk zijn
        if ($this->cards[$this->lastindex]->getNum()==$this->cards[$this->forLastIndex]->getNum()) {
          $this->cards[$this->lastindex]->setStatus("GERADEN");
          $this->cards[$this->forLastIndex]->setStatus("GERADEN");
          $this->geraden++;
          //$this->geraden == count($this->nums/2);
          if ($this->geraden == 8) {
            $this->won = true;
          }
        }
      }else {
        //kijken of klik indexen gelijk zijn
        if ($this->cards[$this->lastindex]->getNum()!=$this->cards[$this->forLastIndex]->getNum()) {
          //anders weer dicht status
          $this->cards[$this->lastindex]->setStatus("DICHT");
          $this->cards[$this->forLastIndex]->setStatus("DICHT");
        }
        //zorgen dat de index blijft staan
        $this->forLastIndex = -1;
        $this->lastindex = $index;
      }
    }
    //klik laat index van kaart zien
    $this->cards[$index]->setStatus("OPEN");
  }

  //aangeven van de win true
  public function getWin(){
    return $this->won;
  }


}







?>
