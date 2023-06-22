<?php 

require_once __DIR__."/../models/traits/Peso.php";

class ProdottoGenerico{

    use Peso;

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
    /**ho usato direttamente funzione get_class() in html per provare */
    public function getClass(){
        return get_class();
    }

    public function setPrezzo($valore){
        $this->prezzo= $valore;
    }

    public function getPrezzo(){
        return $this->prezzo;
    }
}

?>