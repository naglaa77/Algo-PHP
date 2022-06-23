<?php
include "common/head.php";
include "common/menu.php";

?>
<main>
    <div class="main">
        <p>Affichage des tables de multiplication</p>
        <form action="exo1.php" method="GET">
            <label for="">table de multiplication:</label>
            <input type="number" name="num">
            <button type="submit" name="submit">Envoyer</button>
        </form>
        <?PHP
        if (isset($_GET['submit'])) {
            $number = $_GET['num'];
            if (empty($number)) {
                echo " <p>Saisir une valeur dans le champ ci-dessus</p>";
            } else {
                echo "<p>la table de $number</p>";
                for ($i = 1; $i < 11; $i++) {
                    $result = $i * $number;
                    echo "<div>$i * $number = $result </div>";
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