<?php 

class ProdottoGenerico{

    public $nome;
    public $prezzo;
    public $tipo;
    public $foto;

    function __construct($nome,$prezzo, TipiProdotto $tipo, $foto)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->tipo = $tipo;
        $this->foto = $foto;

    }

}

?>