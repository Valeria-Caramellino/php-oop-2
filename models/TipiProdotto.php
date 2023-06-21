<?php 

class TipiProdotto{
    public $nome;
    public $categoria;

    function __construct($nome , $categoria)
    {
        $this->nome = $nome;
        $this->categoria = $categoria;
    }
}

?>