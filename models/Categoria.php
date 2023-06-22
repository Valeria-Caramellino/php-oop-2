<?php 

class Categoria {
    public $nome;
    public $descrizione;
    public $icona;


    public function __construct($nome , $icona= "fa-solid fa-dog")
    {
        
        $this->nome = $nome;
        $this->icona = $icona;
    }
}

?>