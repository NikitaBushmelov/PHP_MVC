<form action="index.php?controller=usuari&action=guardarusuari" method="post">

    <div class="form-group">
        <label for="origen">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
    </div>
    <div class="form-group">
        <label for="desti">Contrasenya</label>
        <input type="password" class="form-control" id="contrasenya" name="contrasenya" placeholder="contrasenya">
    </div>
    <div class="form-group">
        <label for="preu">Correu</label>
        <input type="text" class="form-control" id="correu" name="correu" placeholder="correu">
    </div>
    <div class="form-group">
        <label for="foto">Adreça</label>
        <input type="text" class="form-control" id="adreça" name="adreça" placeholder="adreça">
    </div>
    <div class="form-group">
        <label for="nombre_places">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" placeholder="dni">
    </div>
    <div class="form-group">
        <label for="nombre_places">Telefon</label>
        <input type="text" class="form-control" id="telefon" name="telefon" placeholder="telefon">
    </div>
    <div class="form-group">
        <label for="nombre_places">Num. tarjeta</label>
        <input type="text" class="form-control" id="num_tarjeta" name="num_tarjeta" placeholder="num_tarjeta">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>


</form>