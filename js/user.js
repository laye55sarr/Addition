var plats = document.querySelectorAll("section .prod");
var valid = document.querySelector(".valid");
var validBox = document.querySelector(".btn-box");
var payBox = document.querySelector(".payBox");
var payHere = payBox.querySelector(".here");
var pay = document.querySelector(".pay");
var resume = document.querySelector(".resume");
var total = resume.querySelector(".btn .nbr");
var list = resume.querySelector(".list");
let checkSong = document.getElementById("checkSong");
let validSong = document.getElementById("validSong");
var nbr = document.querySelector(".btn-box .nbr");

var close = document.querySelector(".close");
var detailsProd = document.querySelector(".details-prod");

var activated;

// var active = document.querySelector(".active");
// var nombres = document.querySelectorAll(".nombre");
var nombre;
var addOne;
var reduce;
var qqt;
// var qqtValue;

var commands = {
    1: [2, 24],
    2: [4, 39],
    3: [1, 19]
}

close.addEventListener("click", () => {
    detailsProd.style.display = "none";
})

pay.addEventListener("click", () => {
    list.style.display = "none";
    resume.querySelector(".btn").style.display = "none";
    payBox.style.display = "flex";
});

// var addOne;
// var reduce;

// nombres.forEach(nombre => {
//     var addOne = nombre.querySelector(".add");
//     var reduce = nombre.querySelector(".reduce");

//     addOne.addEventListener("click", () => {
//         alert("Ajouter 1");
//     });
// });

// METHODE 1
var commandes = {
    // prod1: {
    //     id: 27,
    //     qqt: 2
    // },
    // prod2: {},
    // prod3: {}
};

// METHODE 2 : AVEC CONSTRUCTEUR
// function Commande(id, qqt){
//     this.id = id;
//     this.qqt = qqt;
// };

// AJOUTER UN ELEMENT A UN OBJET

// var commande1 = new Commande(27, 2);

// TABLEAU TEST


// COCHAGE ET DECOCHAGE DES PRODUITS
var cocher = function(plats){
    plats.forEach(plat => {
        var check = plat.querySelector(".check");
        var nombre = plat.querySelector(".nombre");
        check.addEventListener("click", () => {
            checkSong.play();
            check.classList.toggle("active");
            nombre.classList.toggle("afficher");
            plat.classList.toggle("gras");
            activated = document.querySelectorAll(".gras");
            validDisplay(activated);
            nbr.innerHTML = activated.length;
        });

        var img = plat.querySelector(".img");
        img.addEventListener("click", () => {
            detailsProd.querySelector(".img-prod").style.backgroundImage = img.style.backgroundImage;//.substring(5, pathLength - 2)
            detailsProd.querySelector(".name-prod").innerHTML = plat.querySelector(".name").innerHTML;
            detailsProd.querySelector(".price-prod").innerHTML = plat.querySelector(".price").innerHTML;
            detailsProd.style.display = "flex";
        });


        // QUANTITE
        addOne = plat.querySelector(".nombre .add");
        reduce = plat.querySelector(".nombre .reduce");
        qqt = plat.querySelector(".nombre .qqt");
        // qqtValue = parseInt(qqt);

        reduce.addEventListener("click", () => {
            var n = qqt.innerHTML;
            n++;
            qqt.innerHTML = n;
            plat.classList[1] = n;
            console.log('n = '+n);
            console.log('qqt = '+qqt.innerHTML);
            console.log('class = '+plat.classList[1]);
            // plat.setAttribute([1], n);
        });

    });
};

cocher(plats);

// CREATION DE LA LISTE DES COMMANDES
var validCommand = function(){
    valid.addEventListener("click", () => {
        validSong.play();
        validBox.style.display = "none";
        resume.style.display = "flex";

        var i = 1;
        var sum = 0;
        var prix;
        var path;
        var pathLength;
        var url;
        activated = document.querySelectorAll(".gras");
        activated.forEach(prod => {
            commandes[i] = [prod.id, prod.classList[1]];
            i++;
            path = prod.querySelector(".img").style.backgroundImage;
            pathLength = path.length;
            url = path.substring(5, pathLength - 2);
            console.log(url);

            list.innerHTML += '<div class="prod"><span class="img" style="background-image:url('+url+');"></span><span class="name">'+prod.querySelector
            (".info .name").innerHTML+'</span><span class="price">'+prod.querySelector
            (".info .price").innerHTML+'</span><span class="quantity">x'+prod.classList[1]+'</span></div>';

            prix = parseInt(prod.querySelector(".info .price").innerHTML);
            // <span class="img" style="background-image:'+
            // list.querySelector(".prod").style.backgroundImage = prod.querySelector(".img").style.backgroundImage;

            sum += prix * prod.classList[1];
            console.log(prod.querySelector(".img").style.backgroundImage);

            total.innerHTML = sum+' F';

        });
        sendAjax(commandes);
    });
};

// ENVOI DE LA LISTE DES CMD VIA AJAX
var sendAjax = function(commmandes){
    // CONVERSION EN JSON
    const commandList = JSON.stringify(commandes);
    console.log(commandList);

    // AJAX
    var xhr = new XMLHttpRequest();

    xhr.open("POST", "../src/requetes.php?page=tables");

    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(commandList);
};

// AFFICHER ET MASQUER LE BOUTON VALIDER
var validDisplay = function(nbr){
    if(nbr.length >= 1){
        validBox.style.display = "flex";
    } else {
        validBox.style.display = "none";
    }
};
validCommand();


