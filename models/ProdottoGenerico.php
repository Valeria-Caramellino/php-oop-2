<?php 

class ProdottoGenerico{

    public $nome;
    public $prezzo;
    public $tipo;
    

    function __construct($nome,$prezzo, TipiProdotto $tipo)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->tipo = $tipo;
       

    }

}

?>