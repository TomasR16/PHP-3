
<?php

class House {
  //properties
  public $kamers;
  public $toiletten;
  public $verwarming;
  public $typeVerwarming;
  public $straatNaam;
  public $huisNummer;
  public $plaats;
  public $vierkantMeterGrond;
  public $wozWaarde;

  //function
  public function __construct($kamers, $toiletten, $verwarming, $typeVerwarming, $straatNaam, $huisNummer, $plaats, $vierkantMeterGrond, $wozWaarde){
    $this->kamers = $kamers;
    $this->toiletten = $toiletten;
    $this->verwarming = $verwarming;
    $this->typeVerwarming = $typeVerwarming;
    $this->straatNaam = $straatNaam;
    $this->huisNummer = $huisNummer;
    $this->plaats = $plaats;
    $this->vierkantMeterGrond = $vierkantMeterGrond;
    $this->wozWaarde = $wozWaarde;
  }

  //methods
  //public function setName($name){
  //$this->name = $name;
  //}
  function getKamers(){
    return $this->kamers;
  }
  function getToilet(){
    return $this->toiletten;
  }
  function getverwarming(){
    return $this->verwarming;
  }
  function getTypeVerwarming(){
    return $this->typeVerwarming;
  }
  function getStraatnaam(){
    return $this->straatNaam;
  }
  function getHuisnummer(){
    return $this->huisNummer;
  }
  function getPlaats(){
    return $this->plaats;
  }
  function getVierkantemetergrond(){
    return $this->vierkantMeterGrond;
  }
  function getWozwaarde(){
    return $this->wozWaarde;
  }


}




?>
