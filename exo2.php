<?php
include "common/head.php";
include "common/menu.php";

?>
<main>
    <div class="main">
        <p>Affichage d'une pyramide </p>
        <form action="exo2.php" method="POST">
            <label for="">Hauteur de la pyramide :</label>
            <input type="number" name="num">
            <button type="submit" name="submit">Envoyer</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {

            $num = $_POST['num'];
            if (empty($num)) {
                echo " <p>Saisir une valeur dans le champ ci-dessus</p>";
            } else {
                echo "<p>Pyramide de hauteur: $num</p>";
                for ($i = 1; $i <= $num; $i++) {

                    for ($j = 1; $j <= $i; $j++) {

                        echo "xx";
                    }
                    echo "<br/>";
                }
                for ($i = 1; $i <= $num; $i++) {
                    for ($j = $num - $i; $j >= 1; $j--) {
                        echo "xx";
                    }
                    echo "<br>";
                }
            }
        } else {
            echo " <p>Saisir une valeur dans le champ ci-dessus</p>";
        }
        ?>


    </div>
</main>

<?php
include "common/footer.php";
?>