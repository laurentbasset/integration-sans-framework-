document.getElementById('btPretPerso').addEventListener("click", function () {

  document.getElementById('simMenu').style.display = 'none';
  document.getElementById('simCalculPret').style.display = 'block';

  /*Initialize input fields with default values*/
  document.getElementById('amount').value = '500';
  document.getElementById('monthPay').value = '10';
  document.getElementById('term').value = '6';

});
document.getElementById('btCloseCalcul').addEventListener("click", function () {
  document.getElementById('simMenu').style.display = 'block';
  document.getElementById('simCalculPret').style.display = 'none';

  document.getElementById('amount').value = '';
  document.getElementById('monthPay').value = '';
  document.getElementById('term').value = '';
});


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
  });
}
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
  if (arrInputs[0].value < 500 || arrInputs[0].value > 75000){ arrInputs[0].style.color = "red";}else{arrInputs[0].style.color = "initial";}
  if (arrInputs[1].value < 10 || arrInputs[1].value > 25000){ arrInputs[1].style.color = "red";}else{arrInputs[1].style.color = "initial"; }
  if (arrInputs[2].value < 6 || arrInputs[2].value > 84){ arrInputs[2].style.color = "red";}else{arrInputs[2].style.color = "initial";}
}