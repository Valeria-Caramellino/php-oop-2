<?php 

class  Game extends ProdottoGenerico {
  public $genere;
  public $colore;

  function __construct($nome,$prezzo,$disponibilita, $quantita,$immagine, Categoria $categoria , $genere,$colore)
  {
    parent::__construct($nome,$prezzo,$disponibilita, $quantita,$immagine, $categoria);
    $this->genere=$genere;
    $this->colore=$colore;

  }
  public function getClass(){
    return get_class();
}
}


?>