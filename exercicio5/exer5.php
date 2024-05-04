<?php
require_once "../nav/cabecalho.php";
?>
<form action="exer5resp.php"  method="post">
    <div class="row">
        <div class="col-md-12">
            <h1>Exercício 5</h1>
        <label>Calcule o fatorial</label><br>
        <input type="number" class="form-control" name="valor"><br>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    </form>

<?php
require_once "../nav/rodape.php";
?>