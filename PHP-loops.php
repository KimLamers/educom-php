<!DOCTYPE html>
<html>
    <body>

    <?php
    // PHP loops exercise 1
    $i = 1;
    while ($i < 6) {
        echo $i;
        $i++;
    }

    // PHP loops exercise 2
    $i = 1;
    do {
        echo $i;
        $i++;
    } while ($i < 6);

    // PHP loops exercise 3
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }

    // PHP loops exercise 4
    $colors = array("red", "green", "blue", "yellow");
    foreach($colors as $x) {
        echo $x;
    }


    ?>

    </body>
</html>