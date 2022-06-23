<?php
include "common/head.php";
include "common/menu.php";

?>
<main>
    <div class="main">
        <p>Cercle - Périmètre et Aire</p>
        <form action="exo3.php" method="POST">
            <label for="numero">Rayon: </label>
            <input type="number" name="num" id="numero">
            <div>
                <div class="inputs">
                    <label for="peri">Perimetre:</label>
                    <input type="hidden" name="perimetre" value="0"><!-- add this input with type hidden for prevent the appaire of erro when user forget to select from checkbox-->
                    <input type="checkbox" name="test1" value="perimetre" checked>
                </div>
                <div class="inputs">
                    <label for="aire">Aire:</label>
                    <input type="checkbox" name="test2" value="aire" checked>
                </div>
            </div>
            <button type="submit" name="submit">Envoyer</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $num = intval($_POST['num']);

            if (empty($num)) {
                echo "<p>Saisir une valeur dans le champ ci-dessus</p>";
            } else if (!isset($_POST['test1']) && !isset($_POST['test2'])) {
                echo "<p>Saisir select checkbox</p>";
            } else if ($num == 0 && !isset($_POST['test1']) && !isset($_POST['test2'])) {

                echo "<p>Saisir une valeur dans le champ ci-dessus et saisir select un chois</p>";
            } else {
                $perimetre = $num * 2 * pi();
                $aire = $num * $num * pi();
                echo "<h5>Resultats</h5>";

                if (isset($_POST['test1'])) {
                    echo "<span>Le périmetre d'un cercle de rayon : $num est $perimetre </span>" . "<br>";
                }
                if (isset($_POST['test2'])) {
                    echo "<span>L' aire d'un cercle de rayon : $num est $aire </span>" . "<br>";
                }
            }
        } else {
            echo "<p>Saisir une valeur dans le champ ci-dessus</p>";
        }

        ?>
    </div>
</main>

<?php
include "common/footer.php";
?>