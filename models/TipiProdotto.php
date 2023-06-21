<?php 

class TipiProdotto{
    public $nome;
    public $categoria;
    public $foto;

    function __construct($nome , Categoria $categoria ,$foto)
    {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->foto = $foto;
    }
}

?>