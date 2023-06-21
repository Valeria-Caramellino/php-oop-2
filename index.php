<?php 
require __DIR__ . "/models/Genere.php";
require __DIR__ . "/models/Categoria.php";
require __DIR__ . "/models/TipiProdotto.php";
require __DIR__ . "/models/ProdottoGenerico.php";

/*divisione di genri*/

$GenereAlimentare = new Genere('alimentare');
$GenereOggettistica = new Genere('oggettistica');

/*divisione per categoria*/
$Gatti=new Categoria('Gatti');
$Cani= new Categoria('Cani');

/**formo tipi di prodotti con l'aggiunta del genere e della categoria */
$CucciaGatti= new TipiProdotto('marca prodotto',$GenereOggettistica,$Gatti,"https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw2e740ba3/images_dmail/large/509459l_1.jpg");

$CucciaCani = new TipiProdotto("marca prodotto",$GenereOggettistica, $Cani,"https://www.omlet.it/images/cache/400/400/Topology_Dog_Bed_with_Bolster_Topper_and_Black_Metal_Hairpin_Feet_-_Medium.jpg");

$CiboGatti = new TipiProdotto('marca prodotto',$GenereAlimentare,$Gatti,"https://medias.ultrapremiumdirect.com/italy/production/catalog/products/003001/1.jpg?tr=w-496,h-496&v=566152243");

$CiboCani = new TipiProdotto('marca prodotto',$GenereAlimentare,$Cani,'https://medias.ultrapremiumdirect.com/italy/production/catalog/products/002006/1.jpg?tr=w-496,h-496&v=978855097');

$GiocoGatti= new TipiProdotto('marca prodotto',$GenereOggettistica,$Gatti,'https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/ferplast/flashlight/6/400/491124_katzenkarussell_flashlight_6.jpg');
$GiocoCani= new TipiProdotto('marca prodotto',$GenereOggettistica,$Cani,'https://www.epocaitalpigeon.com/8338/trixie-gioco-strategico-solitario-per-cani-livello-1.jpg');
/**creo nuovo prodotto finale con tutto */
$Prodoct1 = new ProdottoGenerico("nome prodotto",20, $CucciaCani);
$Prodoct2 = new ProdottoGenerico('nome prodotto',40,$CucciaGatti );
$Prodoct3 = new ProdottoGenerico('nome prodotto',30,$CiboGatti);
$Prodoct4 = new ProdottoGenerico('nome prodotto',10,$CiboCani);
$Prodoct5 = new ProdottoGenerico('nome prodotto',12,$GiocoCani);
$Prodoct6 = new ProdottoGenerico('nome prodotto',46,$GiocoGatti); 
/**creo insieme di prodotti con array e uso array per ciclare in html */
$InsiemeProdotti = [$Prodoct1,$Prodoct2,$Prodoct3,$Prodoct4,$Prodoct5,$Prodoct6];

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
<body class="bg-secondary">
    <header>
        <section class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="my-3 text-black py-2">TUTTO PER I TUOI ANIMALI</h1>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section class="container">
            <div class="row">
                <div class="col-12 text-center text-black my-3">
                    <h2>Elenco Prodotti</h2>
                </div>
            </div>
            
            <div class="row justify-content-around flex-wrap">

                <?php foreach ($InsiemeProdotti as $prodotto){ ?>
                <div class="col-3 bg-light text-center text-black mx-3 my-2 rounded p-4"> 
                        <h5>Nome prodotto: </h5>
                        <h5 class="text-primary"><?php echo $prodotto->nome  ?> </h5>
                        <p>Prezzo: <span class="text-primary"><?php echo $prodotto->prezzo ?>  </span> €</p>
                        <p>Genere prodotto: <span class="text-primary"><?php echo $prodotto->tipo->genere->nome ?> </span>  </p>
                        <p>Marca prodotto :  <span class="text-primary"> <?php echo $prodotto->tipo->nome ?></span> </p>
                        <p>Il tipo di prodotto va bene per i nostri amici <span class="text-primary"> <?php echo $prodotto->tipo->categoria->nome ?>  </span></p>
                        <img class=" my-2" src='<?= $prodotto->tipo->foto  ?>' alt="<?= $prodotto->tipo->nome ?>">
                </div>
                <?php } ?>
            </div>
            
            

        </section>
   
    </main>
</body>
</html>