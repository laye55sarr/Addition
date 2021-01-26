var statistics = document.querySelector(".statistics");
var addProd = document.querySelector(".add-prod");
var tablesQr = document.querySelector(".tables-qr");

var plats = document.querySelectorAll(".plat");
var detailsProd = document.querySelector(".details-prod");
var closeDetailsProd = detailsProd.querySelector(".close");

// BOUTONS
var update = document.querySelector(".update");
var deleter = document.querySelector(".delete");

var annuler = document.querySelector(".annuler");

var imgEdit = document.querySelector(".img-edit");
var formPlat = document.querySelector(".form-plat");
var form1 = document.forms['edit-plat'];

// LISTE DES FONCTIONS
var platEditor = function(plat){
    // console.log("Ok");
    imgEdit.style.backgroundImage = 'url('+plat.querySelector("img").src+')';
    detailsProd.querySelector(".img-prod").style.display = "none";
    imgEdit.style.display = "block";

    detailsProd.querySelector(".info-prod").style.display = "none";
    formPlat.style.display = "block";

    // PRE-REMPLISSAGE DES VALEURS
    form1[1].value = detailsProd.querySelector(".name-prod").innerHTML;
    var longueurPrix = detailsProd.querySelector(".price-prod").innerHTML.length;
    form1[2].value = detailsProd.querySelector(".price-prod").innerHTML.substring(0, longueurPrix - 5);
    form1[3].value = detailsProd.querySelector(".desc-prod").innerText;

    // GESTION DU CHANGEMENT DE PHOTO
    var photo = form1[0];
    photo.addEventListener("change", () => {
        var reader = new FileReader();
        reader.addEventListener("load", () => {
            // pic.setAttribute("src", reader.result);
            imgEdit.style.backgroundImage = 'url('+reader.result+')';
        })
        reader.readAsDataURL(photo.files[0]);
    });

    // ANNULATION DES MODIFICATIONS
    annuler.addEventListener("click", () => {
        imgEdit.style.display = "none";
        detailsProd.querySelector(".img-prod").style.display = "block";

        formPlat.style.display = "none";
        detailsProd.querySelector(".info-prod").style.display = "block";
    })
};

var edit = function(plat){
    plat.addEventListener("click", () => {
        // var img = plat.querySelector("img");
        detailsProd.style.display = "flex";
        
        detailsProd.querySelector(".img-prod").style.backgroundImage = 'url('+plat.querySelector("img").src+')';//.substring(5, pathLength - 2)
        detailsProd.querySelector(".name-prod").innerHTML = plat.querySelector(".text").innerHTML;
        detailsProd.querySelector(".price-prod").innerHTML = plat.querySelector(".price").innerHTML;
        detailsProd.style.display = "flex";

        // platEditor(plat);
        update.addEventListener("click", () => {
            platEditor(plat);
        });
        
    });

    
};


plats.forEach(plat => {
    edit(plat);
});


closeDetailsProd.addEventListener("click", () => {
    detailsProd.style.display = "none";
});

var newCategory = document.querySelector(".add-cont");
var addCategory = document.querySelector(".add-category");
var closeAddCategory = addCategory.querySelector(".close");

newCategory.addEventListener("click", () => {
    addCategory.style.display = "flex";
});

closeAddCategory.addEventListener("click", () => {
    addCategory.style.display = "none";
});


// BOUTONS GESTION
var boutons = document.querySelectorAll(".boutons div");
boutons.forEach(btn => {
    btn.addEventListener("click", () => {
        boutons.forEach(el => {
            el.classList.remove("active");
        });
        btn.classList.add("active");

        if(btn.classList[0] == "b1"){
            statistics.style.display = "none";
            tablesQr.style.display = "none";
            addProd.style.display = "flex";
        } else if (btn.classList[0] == "b2"){
            tablesQr.style.display = "none";
            addProd.style.display = "none";
            statistics.style.display = "flex";
        } else if (btn.classList[0] == "b3"){
            addProd.style.display = "none";
            statistics.style.display = "none";
            tablesQr.style.display = "flex";
        }
    })
});