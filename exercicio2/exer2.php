<?php
    require_once "../nav/cabecalho.php";
?>

<form action="" method="post">
    <h1>Exercício 2</h1>
        <button type="submit" >Ok</button>
        <?php
        for ($i=0; $i < 7; $i++) {
            echo '<input type="number" name="valores[]"> <br>';
        }
        ?>
        <?php
            if (isset($_POST)){
                if (isset($_POST['valores'])) {
                    $vetor = $_POST['valores'];
                    var_dump($vetor);
            }
        }
        ?>
    </form>

<?php
    require_once "../nav/rodape.php";
?>