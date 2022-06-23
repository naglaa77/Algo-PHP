<?php
include "common/head.php";
include "common/menu.php";

?>
<main>
    <div class="main">
        <p>this array [2, 6, 12, 5, 26, 34, 40, 60]</p>

        <?PHP
        $originArray = [2, 6, 12, 5, 26, 34, 40, 60];


        foreach ($originArray as $key => $array) {

            if ($array % 2 !== 0) {
                echo "<p>this array has odd number</p>";
                echo "<p>this array after remove the odd number is :</p>";
                $oddNumber = array_search($array, $originArray);
                array_splice($originArray, $oddNumber, 1);

                echo '<pre>' . print_r($originArray, true) . '</pre>';
            }
        }

        ?>


    </div>
</main>
<?php
$orginArray = [2, 6, 12, 5, 26, 34, 40, 60];
?>



<?php
include "common/footer.php";
?>