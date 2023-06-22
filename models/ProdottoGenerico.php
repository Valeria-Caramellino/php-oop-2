<?php 

class ProdottoGenerico{

    public $nome;
    public $prezzo;
    public $disponibilita;
    public $quantita;
    public $immagine;
    public $categoria;
    

    function __construct($nome,$prezzo,$disponibilita, $quantita,$immagine, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->disponibilita= $disponibilita;
        $this->quantita=$quantita;
        $this->immagine=$immagine;
        $this->categoria= $categoria;


        

    }
    public function getClass(){
        return get_class();
    }
}

?>