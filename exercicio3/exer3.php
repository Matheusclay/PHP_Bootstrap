<?php
    require_once "../cabecalho.php";
?>
<form action="exer3resp.php" method="post">
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Informe o primeiro valor</label>
                <input type="number" class="form-control" id="valor" name="valor1">
            </div>
            <div class="col">
                <label for="valor" class="form-label">Informe o segundo valor</label>
                <input type="number" class="form-control" id="valor" name="valor2">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>

<?php
    require_once "../rodape.php";
?>