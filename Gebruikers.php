<div class="col-6">
    <form action="./index.php?content=create" method="post">
        <div class="form-group">
            <label for="Firstname">Voornaam</label>
            <input type="text" class="form-control" id="firstname" aria-describedby="firstnameHelp" name="firstname">
            <small id="emailHelp" class="form-text text-muted">Vul hier uw voornaam in</small>
        </div>
        <div class="form-group">
            <label for="Tussenvoegsel">Tussenvoegsel</label>
            <input type="text" class="form-control" id="infix" aria-describedby="infixHelp" name="infix">
            <small id="emailHelp" class="form-text text-muted">Als U geen tussenvoegsel heeft hoeft u niets in te
                vullen.</small>
        </div>
        <div class="form-group">
            <label for="Lastname">Achternaam</label>
            <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" name="lastname">
            <small id="emailHelp" class="form-text text-muted">Vul hier uw achternaam in</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="col-6"