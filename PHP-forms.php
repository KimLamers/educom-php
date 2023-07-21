<!DOCTYPE html>
<html>
    <body>


    <?php
    // PHP forms exercise 1 ?>
    <form action="welcome.php" method="get">
        First name: <input type="text" name="fname">
    </form>


Welcome <?php echo $_GET["fname"]; ?>

<?php
    // PHP forms exercise 2 ?>

    <form action="welcome.php" method="post">
        First name: <input type="text" name="fname">
    </form>

    Welcome <?php echo $_POST["fname"]; ?>

</body>
</html>