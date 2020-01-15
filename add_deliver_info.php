<div class="col-12">
    <form action="./index.php?content=create2" method="post">
        <div class="form-group">
            <label for="Woonplaats">Woonplaats</label>
            <input type="text"  class="form-control" id="infix" aria-describedby="cityHelp" name="city">
            <small id="emailHelp" class="form-text text-muted">Vul hier uw woonplaats in</small>
        </div>
        <div class="form-group">
            <label for="Bezorgmethode">Bezorgmethode</label>
            <select name="bezorgmethode">
                <option value="schoorsteen">schoorsteen</option>
                <option value="voordeur">voordeur</option>
                <option value="achterdeur">achterdeur</option>
                <option value="brievenbus">brievenbus</option>
            </select>
            <small id="emailHelp" class="form-text text-muted">Selecteer hier de bezorg methode</small>
        </div>
        <div class="form-group">
            <label for="huiskleur">Huiskleur</label>
            <input type="color" class="form-control" id="color" aria-describedby="huiskleurHelp" name="color">
            <small id="emailHelp" class="form-text text-muted">Selecteer hier de kleur van uw huis</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
