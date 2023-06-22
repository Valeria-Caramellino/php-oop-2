<?php
//per vedere errori in pagina 
 //ini_set('display_errors', 1);
 //ini_set('display_startup_errors', 1);
 //error_reporting(E_ALL);


require __DIR__ . "/models/Categoria.php";
require __DIR__ . "/models/ProdottoGenerico.php";
require __DIR__."/models/Food.php";
require __DIR__ ."/models/Game.php";


/*divisione per categoria*/
$GattiCategoria=new Categoria('Gatti','fa-solid fa-cat');
$CaniCategoria= new Categoria('Cani');
/**insime delle categorie */
$insiemeCategorie =[$GattiCategoria,$CaniCategoria];

/**insieme dei prodotti */
$InsiemeProdotti = [
    new ProdottoGenerico('nome prodotto',20,true,80,'https://media.gettyimages.com/id/1276788283/it/foto/giovane-donna-con-cucciolo-di-corgi-ridente-sfondo-della-natura.jpg?s=612x612&w=0&k=20&c=YLMt5GiRhEqlQr2IR7GYb5-173DuTT0PuiMWdZ5wn3M=',$GattiCategoria),
    new ProdottoGenerico('nome prodotto',80,true,70,'https://media.gettyimages.com/id/1276788283/it/foto/giovane-donna-con-cucciolo-di-corgi-ridente-sfondo-della-natura.jpg?s=612x612&w=0&k=20&c=YLMt5GiRhEqlQr2IR7GYb5-173DuTT0PuiMWdZ5wn3M=',$CaniCategoria),
    new Food('nome',40,true,40,'https://media.gettyimages.com/id/1276788283/it/foto/giovane-donna-con-cucciolo-di-corgi-ridente-sfondo-della-natura.jpg?s=612x612&w=0&k=20&c=YLMt5GiRhEqlQr2IR7GYb5-173DuTT0PuiMWdZ5wn3M=',$GattiCategoria,100),
    new Food('nome',20,true,466,'https://media.gettyimages.com/id/1276788283/it/foto/giovane-donna-con-cucciolo-di-corgi-ridente-sfondo-della-natura.jpg?s=612x612&w=0&k=20&c=YLMt5GiRhEqlQr2IR7GYb5-173DuTT0PuiMWdZ5wn3M=',$CaniCategoria,400),
    new Game('nome',75,true,122,'https://media.gettyimages.com/id/1276788283/it/foto/giovane-donna-con-cucciolo-di-corgi-ridente-sfondo-della-natura.jpg?s=612x612&w=0&k=20&c=YLMt5GiRhEqlQr2IR7GYb5-173DuTT0PuiMWdZ5wn3M=',$CaniCategoria,'gioco','red'),
    new Game('nome',85,true,46,'https://media.gettyimages.com/id/1276788283/it/foto/giovane-donna-con-cucciolo-di-corgi-ridente-sfondo-della-natura.jpg?s=612x612&w=0&k=20&c=YLMt5GiRhEqlQr2IR7GYb5-173DuTT0PuiMWdZ5wn3M=',$GattiCategoria,'gioco','viola'),
];
$InsiemeProdotti[0]->setPeso(-100);
$InsiemeProdotti[1]->setPeso(0);
$InsiemeProdotti[2]->setPeso(70);
$InsiemeProdotti[3]->setPeso(20);
$InsiemeProdotti[4]->setPeso(50);
$InsiemeProdotti[5]->setPeso(20);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <div class="col-12 d-flex justify-content-around my-4">  
                    <?php foreach ( $insiemeCategorie as $categoria) {?>
                    <div class="col-3 text-center bg-light rounded py-2">
                        <span><?php echo $categoria->nome ?></span>
                        <i class="<?php echo $categoria->icona ?>"></i>
                    </div>
           
                    <?php } ?>

                </div>
            </div>
            
            <div class="row justify-content-around flex-wrap">

                <?php foreach ($InsiemeProdotti as $prodotto){ ?>
                    <div class="col-3 bg-light text-center text-black mx-3 my-2 rounded p-4"> 
                        <h5>Nome prodotto: </h5>
                        <h5 class="text-primary">
                            <?php echo $prodotto->nome  ?> 
                        </h5>
                        <p>Prezzo: 
                            <span class="text-primary">
                                <?php echo $prodotto->getPrezzo() ?>  
                            </span>€
                        </p>
                        <p>Argomento: <span class="text-primary"><?php echo get_class($prodotto) ?> </span> </p> 
                        <p>Categoria: <span class="text-primary"><?php echo $prodotto->categoria->nome ?></span></p>
                        <?php if($prodotto instanceof Game){ ?>
                          <p>Colore:<span class="text-primary">  <?php echo $prodotto->colore ?> </span>  </p>  
                        <?php }elseif ($prodotto instanceof Food){ ?>
                           <p> Calorie: <span class="text-primary"><?php  echo $prodotto->calorie ?>  </span> </p> 
                        <?php }  ?>
                        <img src="<?php echo $prodotto->immagine?>" alt="<?php $prodotto->nome ?>">
                        <p>Il preso del prodotto é : 
                            <span class="text-primary"> 
                            <?php try{
                                echo $prodotto ->getPeso();
                            }catch(RangeException $e){
                                echo 'Non disponibile perchè:' . $e->getMessage();
                            }catch(Exception $e){
                                echo 'Non disponibile:' . $e->getMessage();
                            }
                            
                            ?> 
                            </span> 
                        </p>
                       
                    </div>
                <?php } ?>
            </div>
            
            

        </section>
   
    </main>
</body>
</html>