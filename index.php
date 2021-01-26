<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueuil</title>
    <link rel="stylesheet" href="../css/user.css">
</head>

<body>

    <header>
        <a href="../html/Accueil.html" class="addition">La Brioche Dorée</a>
         <!-- <span class="eat">Eat</span> -->
        <div class="scroll">
            <div class="contenu">
                <a href="#boisson" class="container">
                    <img src="../img/Addition/burger.png" alt="">
                    <span class="titre">Boissons</span>
                </a>
                <a href="#petitdej" class="container">
                    <img src="../img/Addition/burger.png" alt="">
                    <span class="titre">Petit dejeuner</span>
                </a>
                <a href="#" class="container">
                    <img src="../img/Addition/burger.png" alt="">
                    <span class="titre">Aperitif</span>
                </a>
                <a href="#" class="container">
                    <img src="../img/Addition/burger.png" alt="">
                    <span class="titre">Entres</span>
                </a>
                <a href="#" class="container">
                    <img src="../img/Addition/burger.png" alt="">
                    <span class="titre">Dinees</span>
                </a>
                <a href="#" class="container">
                    <img src="../img/Addition/burger.png" alt="">
                    <span class="titre">Boissons</span>
                </a>
                <a href="#" class="container">
                    <img src="../img/Addition/burger.png" alt="">
                    <span class="titre">Glasse</span>
                </a>
                <a href="#" class="container">
                    <img src="../img/Addition/burger.png" alt="">
                    <span class="titre">Dessert</span>
                </a>
            </a>
        </div>
    </header>

    <p id="songBox">
        <audio id="checkSong">
            <source src="../songs/check1.mp3" type="audio/mpeg">
        </audio>
        <audio id="validSong">
            <source src="../songs/valid.mp3" type="audio/mpeg">
        </audio>
    </p>

    <section>
        <h2 id="boisson">Nos boissons</h2>

        <?php
            include('../src/db_insert.php');

            $req = $bdd->query('SELECT * FROM plats WHERE resto = "La Brioche Dorée"');
            while($rep = $req->fetch()){
                ?>
                <div class="prod 1" id="<?= $rep['id']?>">
                    <div class="check"></div>
                    <div class="img" style="background-image:url(<?= $rep['img']?>);"></div>
                    <div class="info">
                        <span class="name"><?= $rep['nom']?></span>
                        <span class="price"><?= $rep['prix']?> Fcfa</span>
                    </div>
                    <div class="nombre">
                        <span class="sign reduce">-</span>
                        <span class="qqt">1</span>
                        <span class="sign add">+</span>
                    </div>
                </div>
                <?php
            }
        ?>
        
        <h2 id="petitdej">Nos boissons</h2>

        <!-- <div class="prod 1" id="26">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Boisson Coca Cola</span>
                <span class="price">1000 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div> -->

        <!-- <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div>

        <div class="prod 1" id="5">
            <div class="check"></div>
            <div class="img"></div>
            <div class="info">
                <span class="name">Burger Espagnol</span>
                <span class="price">1500 Fcfa</span>
            </div>
            <div class="nombre">
                <span class="sign moins">–</span>
                <span class="qqt">1</span>
                <span class="sign plus">+</span>
            </div>
        </div> -->

    </section>
    
    <div class="btn-box">
        <span class="nbr">0</span>
        <span class="valid">Valider</span>
    </div>

    <div class="resume">
        <div class="list">
            <!-- <div class="prod">
                <span class="img"></span>
                <span class="name">Burger King</span>
                <span class="price">1500 FCFA</span>
            </div>
            
            <div class="prod">
                <span class="img"></span>
                <span class="name">Burger King</span>
                <span class="price">1500 FCFA</span>
            </div> -->
            
            
            
            <!-- <div class="prod">
                <span class="img"></span>
                <span class="name">Burger King</span>
                <span class="price">1500 FCFA</span>
            </div>
            
            <div class="prod">
                <span class="img"></span>
                <span class="name">Burger King</span>
                <span class="price">1500 FCFA</span>
            </div> -->
        </div>

        <div class="btn">
            <span class="nbr">27500 F</span>
            <span class="pay">PAYER</span>
        </div>

        <div class="payBox">
            <h2>Comment souhaitez-vous payer ?</h2>
            <a href="" class="paymode om">En ligne</a>
            <a href="" class="paymode here">Sur place</a>
        </div>

    </div>

        <div class="details-prod">
            <div class="img-prod"></div>
            <div class="info-prod">
                <div class="name-prod">Burger Espagnol</div>
                <span class="price-prod">1500 FCfa</span>
                <span class="desc-prod">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quis asperiores molestias. Neque laboriosam possimus excepturi inventore corrupti, modi sapiente accusamus, dolorum, ab rem architecto! Quis sit excepturi quidem molestias assumenda eaque nemo temporibus minus, a illum, incidunt dolorum repellat!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quis asperiores molestias. Neque laboriosam possimus excepturi inventore corrupti, modi sapiente accusamus, dolorum, ab rem architecto! Quis sit excepturi quidem molestias assumenda eaque nemo temporibus minus, a illum, incidunt dolorum repellat!
                </span>
                <div class="close">Fermer</div>
            </div>
        </div>

    <script src="../js/user.js"></script>
</body>
</html>