<!DOCTYPE html>
<html>
    <body>
        <?php

        // PHP include and require exercise 1
        include "footer.php";


        // PHP file handling exercise 1
        echo readfile("webdict.txt");

        // PHP file open/read exercise 1
        $myfile = fopen("webdict.txt", "r");
        while(!feof($myfile)) {
            echo fgetc($myfile);
        }
        fclose($myfile);

        // PHP cookes exercise 1
        setcookie("username", "John", time() + (86400 * 30), "/");

        // PHP sessions exercise 1
        session_start();
        $_SESSION["favcolor"] = "green";

        // PHP sessions exercise 2
        echo $_SESSION["favcolor"];
        
        ?>
    </body>
</html>