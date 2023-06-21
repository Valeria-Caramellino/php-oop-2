<?php 

require __DIR__ . "/models/Categoria.php";
require __DIR__ . "/models/TipiProdotto.php";
require __DIR__ . "/models/ProdottoGenerico.php";
$nuovoOggetto = new TipiProdotto("cuccia",new Categoria('cani'));

$prodoct1 = new ProdottoGenerico("cuccia morbida",20, $nuovoOggetto,"https://www.omlet.it/images/cache/400/400/Topology_Dog_Bed_with_Bolster_Topper_and_Black_Metal_Hairpin_Feet_-_Medium.jpg");
$prodoct2 = new ProdottoGenerico('asta con piuma',40,new TipiProdotto('gioco',new Categoria('gatti')),"https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw2e740ba3/images_dmail/large/509459l_1.jpg");

$insiemeProdotti = [$prodoct1,$prodoct2];
/*
var_dump( $prodoct1 );

var_dump($prodoct2);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        img{
            width: 5rem;
            
        }
    </style>
</head>
<body>
    <header>
        <section class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="my-3 text-primary bg-secondary py-2">TUTTO PER I TUOI ANIMALI</h1>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Elenco Prodotti</h2>
                </div>
            </div>
            
            <div class="row justify-content-around">

                <?php foreach ($insiemeProdotti as $prodotto){ ?>
                <div class="col-3 bg-secondary text-center"> 
                        <h5>Nome prodotto: </h5>
                        <h5 class="text-primary"><?php echo $prodotto->nome  ?> </h5>
                        <p>Prezzo: <span class="text-primary"><?php echo $prodotto->prezzo ?> </span> </p>
                        <p>Tipo di prodotto :  <span class="text-primary"> <?php echo $prodotto->tipo->nome ?></span> </p>
                        <p>Il tipo di prodotto va bene per i nostri amici <span class="text-primary"> <?php echo $prodotto->tipo->categoria->nome ?>  </span></p>
                        <img class=" my-2" src='<?= $prodotto->foto  ?>' alt="<?= $prodotto->nome ?>">
                </div>
                <?php } ?>
            </div>
            
            

        </section>
   
    </main>
</body>
</html>