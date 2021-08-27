<div id="simulateur">
    <div id="simMenu">
    <h2>Simulation de crédits en ligne</h2>
    <p  style="color:#5b5c5e">Quel type de crédit souhaitez-vous réaliser ?</p>

    <button  class="btSim" id="btPretPerso">
        <div class="wrpCarte1"><img src="img/carte1.svg" alt="carte1"></div>
        <div class="ctnBtLeft">
            <h3>Prêt personnel</h3>
            <span>Un crédit à partir de 5000 €</span>
        </div>
        <div class="wrpArrow"><img src="img/arrow.svg" alt="arrow"></div>                    
    </button>

    <button  class="btSim">
        <div><img src="img/carte2.svg" alt="carte2"></div>
        <div class="ctnBtLeft">
            <h3>crédit renouvelable</h3>
            <span>Un crédit jusqu'à 3000 €</span>
        </div>
        <div class="wrpArrow"><img src="img/arrow.svg" alt="arrow"></div>                    
    </button>

    <button  class="btSim">
    <div><img src="img/carte3.svg" alt="carte3"></div>
        <div class="ctnBtLeft">
            <h3>Rachat de crédit</h3>
            <span>Regroupez tous vos crédits en un seul</span>
        </div>
        <div class="wrpArrow"><img src="img/arrow.svg" alt="arrow"></div>                    
    </button>
    </div>

    <div id="simCalculPret">
        <h2>Prêt Personnel</h2>
        <div id="formulaire">
            <span>Montant à emprunter</span>
            <input id="amount" type="number">
            <span>Choisissez un montant entre 500 et 75 000 €</span>
            <div>
                Mensualités
                <input id="monthPay" type="number">
                <i>De 10 à 12 000 €</i>
            </div>
            <div>
                Ou durée
                <input id="term" type="number">
                <i>De 6 à 84 mois</i>
            </div>
        </div>
        <button id="btCloseCalcul">fermer</button>
    </div>
</div>


