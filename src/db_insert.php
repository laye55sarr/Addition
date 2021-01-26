<?php

$bdd = new PDO('mysql:host=localhost;dbname=additioneat;charset=UTF8', 'root', '');

// $products = array(
//     "p0" => ["nom", "prix", "categorie", "img"],
//     "p1" => ["Pizza italienne", 3500, "Déjeuner", ""],
//     "p2" => ["Burger espagnol", 2500, "Déjeuner", "c.webp"],
//     "p3" => ["Sprite", 1000, "Déjeuner", ""],
//     "p4" => ["Omelette", 4000, "Petit Déjeuner", "d.webp"],
//     "p5" => ["Mcafee", 1500, "entree", "e.webp"],
//     "p6" => ["Mcdej", 4500, "Petit Déjeuner", "f.webp"],
//     "p7" => ["Mcboisson", 950, "boisson", "g.webp"],
//     "p8" => ["freet", 2500, "Dinee", "h.webp"],
//     "p9" => ["Mcburger", 5500, "Déjeuner", "i.webp"],
//     "p10" => ["diet coca", 2500, "Déjeuner", "j.webp"],
//     "p11" => ["Mcbeignet", 6500, "Dinee", "q.webp"],
// );

// foreach ($products as $num => $info) {
//     $req = $bdd->prepare('INSERT INTO plats (nom, prix, categorie, img, resto) VALUES (?, ?, ?, ?, "La Brioche Dorée")');
//     $req->execute([$info[0], $info[1], $info[2], '../img/Addition/'.$info[3]]);
// };

// echo 'Owkay !';

?>