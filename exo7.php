<?php
include "common/head.php";
include "common/menu.php";

?>
<main>
    <div class="main">
        <p>Selection du personnage</p>
        <form action="exo7.php" method="POST">
            <label for="numero">Personnage : </label>
            <select name="personage" onchange="this.form.submit();">
                <option value="ironmane" <?php echo ($_POST['personage'] == 'ironmane' ? 'selected' : '')
                                            ?>>iron Mane</option>
                <option value="Agentroumanoff" <?php echo ($_POST['personage'] == 'Agentroumanoff' ? 'selected' : '')
                                                ?>>Agent Roumanoff</option>
                <option value="Captainamerica" <?php echo ($_POST['personage'] == 'Captainamerica' ? 'selected' : '')
                                                ?>>Captain America</option>

            </select>
            <noscript><input type="submit" value="Submit"></noscript>
        </form>
        <?php
        $p1 = ["Iron Man", 53, true, 5, 4];
        $p2 = ["Agent Roumanoff", 49, false, 3, 6];
        $p3 = ["Captain America", 93, true, 5, 5];
        function showInfo($array, $linkImg)
        {
            echo  "<h3>Personnage :</h3>";
            echo "<div class='container'>
                    <div class='image'> <img src='img/$linkImg'></div>
                    <div class='info'>
                    <h5>Nom :$array[0] </h5>
                    <h5>Age : $array[1]</h5>
                    <h5>Sexe: $array[2]</h5>
                    <h5>Force : $array[3]</h5>
                    <h5>Agilite : $array[4]</h5>
                    </div>
                </div>";
        }

        if ($_POST['personage'] == 'ironmane') {

            showInfo($p1, 'iron.png');
        } elseif ($_POST['personage'] == 'Agentroumanoff') {

            showInfo($p2, 'roumanof.png');
        } elseif ($_POST['personage'] == 'Captainamerica') {

            showInfo($p3, 'captain.png');
        }




        ?>
    </div>
</main>

<?php
include "common/footer.php";
?>