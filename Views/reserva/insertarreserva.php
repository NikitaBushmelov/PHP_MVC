<form action="index.php?controller=reserva&action=guardarreserva" method="post">

    <div class="form-group">
        <input type="hidden" class="form-control" id="codi_vol" name="codi_vol" value=<?php echo $_REQUEST['codi'];?>>
    </div>
    <div class="form-group">
        <label for="codi_usuari">codi usuari</label>
        <input type="text" class="form-control" id="codi_usuari" name="codi_usuari" placeholder="codi usuari">
    </div>
    <div class="form-group">
        <label for="data_anada">Data anada</label>
        <input type="date" class="form-control" id="data_anada" name="data_anada" placeholder="Data anada">
    </div>
    <div class="form-group">
        <label for="data_tornada">Data tornada</label>
        <input type="date" class="form-control" id="data_tornada" name="data_tornada" placeholder="Data tornada">
    </div>
    <div class="form-group">
        <label for="nombre_places">Nombre de places</label>
        <input type="text" class="form-control" id="nombre_places" name="nombre_places" placeholder="Places">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>


</form>