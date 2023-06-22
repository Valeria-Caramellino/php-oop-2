<?php 

class Food extends ProdottoGenerico{

    public $calorie;

    public function __construct( $nome,$prezzo,$disponibilita, $quantita,$immagine, Categoria $categoria , $calorie)
    {
        parent::__construct($nome,$prezzo,$disponibilita, $quantita,$immagine, $categoria);
        $this->calorie=$calorie;
        
        
    }
    public function getClass(){
        return get_class();
    }

}


?>