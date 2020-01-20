<div class="col-12">
    <form action="./index.php?content=create3" method="post">
        <div class="form-group">
            <label for="Standplaats">Standplaats Piet</label>
            <input type="text"  class="form-control" id="standplaats" aria-describedby="StandplaatsHelp" name="standplaats">
            <small id="emailHelp" class="form-text text-muted">Vul hier uw standplaats in</small>
        </div>
        <div class="form-group">
            <label for="Naam">Naam Piet</label>
            <select name="naam" class="form-control">
                <option value="bezorg">Bezorg Piet</option>
                <option value="paardrij">Paardrij Piet</option>
                <option value="organisatie">Organisatie Piet</option>
                <option value="inkoop">Inkoop Piet</option>
                <option value="zwaai">Zwaai Piet</option>
                <option value="verlanglijst">Verlanglijst Piet</option>
            </select>
            <small id="NameHelp" class="form-text text-muted">Selecteer hier uw pieten naam</small>
        </div>
        <div class="form-group">
            <label for="huiskleur">Kleur Piet</label>
            <input type="color" class="form-control" id="color" aria-describedby="huiskleurHelp" name="color">
            <small id="colorHelp" class="form-text text-muted">Selecteer hier de kleur van uw gezicht</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
