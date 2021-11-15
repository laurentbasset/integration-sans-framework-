document.getElementById('btPretPerso').addEventListener("click", function() {
  document.getElementById('simMenu').style.display = 'none';
  document.getElementById('simCalculPret').style.display = 'block';
});
document.getElementById('btCloseCalcul').addEventListener("click", function() {
document.getElementById('simMenu').style.display = 'block';
document.getElementById('simCalculPret').style.display = 'none';
});


/// Calcul simulateur
let sim = document.getElementById('simulateur');
let arrInputs = sim.getElementsByTagName('input');
for (let i = 0; i < arrInputs.length; i++) {
  arrInputs[i].addEventListener("input", function () {
    switch (this.id) {
      case 'amount': inputAmount(this); break;
      case 'monthPay': inputMonthPay(this);break;
      case 'term':inputTerm(this);break;
    }
    checkInput();
    arrInputs[i].addEventListener("input", function () {
      switch (this.id) {
        case 'amount': inputAmount(this); break;
        case 'monthPay': inputMonthPay(this);break;
        case 'term':inputTerm(this);break;
      }
      checkInput();
    });
  });
}
  // ouverture/fermeture menu lateral
  let btToggleMenu = document.getElementById("btOpenMenu");
  btToggleMenu.addEventListener("click", function(){
    if (btToggleMenu.className=="active") {
      document.getElementById('menuOverlay').style.width = "0";
      btToggleMenu.classList.remove('active');
    }else{
      document.getElementById('menuOverlay').style.width = "100%";
      btToggleMenu.classList.add('active');
    }
  });

  document.getElementById('call').addEventListener('click', function() { 
    window.open("tel:+330384125689");
    }
  );


function inputAmount(amount) { 
//Recalculate month pay
    if(arrInputs[2].value !=0){
        arrInputs[1].value = Math.round(amount.value / arrInputs[2].value);   
    }
  }

function inputMonthPay(monthPay) {
//Recalculate terms
    if(monthPay.value != 0){
      arrInputs[2].value = Math.round(arrInputs[0].value / monthPay.value);
    }
}

function inputTerm(term) {
//Recalculate month pay
    if(term.value !=0){
      arrInputs[1].value = Math.round(arrInputs[0].value / term.value);
    }
}
function checkInput(){

if (arrInputs[0].value < 500 || arrInputs[0].value > 75000){
    arrInputs[0].classList.add('unvalid');
  }else{
    arrInputs[0].classList.remove('unvalid');
}

if (arrInputs[1].value < 10 || arrInputs[1].value > 12000){ 
    arrInputs[1].classList.add('unvalid');
  }else{
    arrInputs[1].classList.remove('unvalid'); 
}

if (arrInputs[2].value < 6 || arrInputs[2].value > 84){ 
    arrInputs[2].classList.add('unvalid');
  }else{
    arrInputs[2].classList.remove('unvalid');
}

}

//Affichage leftBottomServices

divVisuel = document.getElementById('visuel')
divTxtVisuel = document.getElementById('txtVisuel')
idImg = document.getElementById('imgDefault')

document.getElementById('choix1').addEventListener("click", function() {
idImg.style.display = 'none'
let lastChild = divVisuel.lastChild;
divVisuel.removeChild(lastChild);
img1 = document.createElement('img');
img1.src = "img/creditAuto.jpg"
img1.style.height = "275px";
divVisuel.appendChild(img1)
});

document.getElementById('choix2').addEventListener("click", function() {
idImg.style.display = 'none'
let lastChild = divVisuel.lastChild;
divVisuel.removeChild(lastChild);
img1 = document.createElement('img');
img1.src = "img/credit.jpg"
divVisuel.appendChild(img1)
});

document.getElementById('choix3').addEventListener("click", function() {
idImg.style.display = 'none'
let lastChild = divVisuel.lastChild;
divVisuel.removeChild(lastChild);
img1 = document.createElement('img');
img1.src = "img/creditcard.jpg"
img1.style.height = "275 px";
divVisuel.appendChild(img1)
});

document.getElementById('choix4').addEventListener("click", function() {
idImg.style.display = 'none'
let lastChild = divVisuel.lastChild;
divVisuel.removeChild(lastChild);
img1 = document.createElement('img');
img1.style.height = "275px";
img1.src = "img/projet.jpg"
divVisuel.appendChild(img1)
});
