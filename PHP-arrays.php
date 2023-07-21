<!DOCTYPE html>
<html>
    <body>
        <?php

        // PHP arrays exercise 1
        $fruits = array("Apple", "Banana", "Orange");
        echo count($fruits);

        // PHP arrays exercise 2
        $fruits = array("Apple", "Banana", "Orange");
        echo $fruits[1];

        // PHP arrays exercise 3
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

        // PHP arrays exercise 4
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        echo "Ben is" .$age["Ben"]. "years old.";

        // PHP arrays exercise 5
        foreach ($age as $x => $y) {
            echo "Key=" .$x. ", Value=" .$y;
        }

        // PHP arrays exercise 6
        $colors = array("red", "green", "blue", "yellow");
        sort($colors);

        // PHP arrays exercise 7
        $colors = array("red", "green", "blue", "yellow");
        rsort($colors);

        // PHP arrats exercise 8
        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        asort($age);
        
        ?>
    </body>
</html>