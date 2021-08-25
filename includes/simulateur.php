<div id="simulateur">
    <div id="simMenu">
    <h2>Simulation de crédits en ligne</h2>
    <p  style="color:#5b5c5e">Quel type de crédit souhaitez-vous réaliser ?</p>

    <button  class="btSim" id="btPretPerso">
        <div class="ctnBtLeft">
            <h3>Prêt personnel</h3>
            <span>Un crédit à partir de 5000 €</span>
        </div>
        <div class="wrpArrow"><img src="img/arrow.svg" alt="arrow"></div>                    
    </button>

    <button  class="btSim">
        <div class="ctnBtLeft">
            <h3>crédit renouvelable</h3>
            <span>Un crédit jusqu'à 3000 €</span>
        </div>
        <div class="wrpArrow"><img src="img/arrow.svg" alt="arrow"></div>                    
    </button>

    <button  class="btSim">
        <div class="ctnBtLeft">
            <h3>Rachat de crédit</h3>
            <span>Regroupez tous vos crédits en un seul</span>
        </div>
        <div class="wrpArrow"><img src="img/arrow.svg" alt="arrow"></div>                    
    </button>
    </div>

    <div id="simCalculPret">
        <h2>Prêt Personnel</h2>

        <div id="field1">
            <p>Montant à emprunter</p>
            <input type="text" id="montant" class="inputCal">
            <p><em>Choisissez un montant entre 500 et 75 000 €</em></p>
        </div>

        <div id="field2">
            <p>Mensualités</p>
            <input type="text" id="mensualites" class="inputCal">
            <p>De 10 à 12 000 €</p>
        </div>

        <div id="field3">
            <p>Ou durée</p>
            <input type="text" id="duree" class="inputCal">
            <p>De 6 à 84 mois</p>
        </div>
    
    <button id="btCloseCalcul">fermer</button>
    </div>

</div>


