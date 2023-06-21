<?php 

class TipiProdotto{
    public $nome;
    public $genere;
    public $categoria;
    public $foto;

    function __construct($nome, Genere $genere , Categoria $categoria ,$foto)
    {
        $this->nome = $nome;
        $this->genere = $genere;
        $this->categoria = $categoria;
        $this->foto = $foto;
    }
}

?>