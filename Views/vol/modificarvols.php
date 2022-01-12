<form action="index.php?controller=vol&action=actualitzarvols" method="post">

    <div class="form-group">
        <input type="hidden" class="form-control" id="codi" name="codi" value=<?php echo $row['codi'];?>>
    </div>
    <div class="form-group">
        <label for="origen">Origen</label>
        <input type="text" class="form-control" id="origen" name="origen" value=<?php echo $row['origen'];?>>
    </div>
    <div class="form-group">
        <label for="desti">Desti</label>
        <input type="text" class="form-control" id="desti" name="desti" value=<?php echo $row['desti'];?>>
    </div>
    <div class="form-group">
        <label for="preu">Preu</label>
        <input type="text" class="form-control" id="preu" name="preu" value=<?php echo $row['preu'];?>>
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="text" class="form-control" id="foto" name="foto" value=<?php echo $row['foto'];?>>
    </div>
    <div class="form-group">
        <label for="nombre_places">Nombre places</label>
        <input type="text" class="form-control" id="nombre_places" name="nombre_places" value=<?php echo $row['nombre_places'];?>>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>


</form>