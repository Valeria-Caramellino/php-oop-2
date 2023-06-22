<?php 

trait Peso{
    private $peso;


    public function getPeso(){
        
        if($this->peso < 0){
            throw new Exception("il peso impostato ha un valore negativo");
        }elseif($this->peso == 0){
            throw new RangeException("il peso equivale a 0");
        }
    
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso= $peso;
    }
}


?>