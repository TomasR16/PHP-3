
<?php

class Card {

  //maken van variabelen
  private $status = "DICHT";
  private $num;
  private $index;

  //set de variabelen
  public function setNumb (){
    $this->nummer = $nums;
    $this->staat = $status;
  }

  //waarde geven aan object
  public function __construct($num , $index){
    $this->num = $num;
    $this->index = $index;
  }

  //laat buttons zien op het scherm
  public function __toString(){
    //als status van button dicht is
    if ($this->status == "DICHT") {
      //geeft de gesloten kaart terug
      return "<a href = \"?index=".$this->index."\"><button type=\"button\" name=\"button\" class=\"knop\" >&nbsp;</button></a>";
    } else {
      //geeft de open kaart terug
      return "<button type=\"button\" name=\"button\" class=\"knop\" >" .$this->num."</button>";
    }
  }

  //paken van status
  //zodat je kan zien wat het nummer is
  public function setStatus($status){
    $this->status = $status;
  }


  //pakken van num en waarde terug zetten
  //anders blijven kaarten omgedraaid
  public function getNum(){
    return $this->num;
  }

}


?>
