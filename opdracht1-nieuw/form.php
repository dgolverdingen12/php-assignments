<?php require_once("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['versturen']) && !empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['gender'])) {
            $sql = "INSERT INTO velden (name, age, gender)
            VALUES ('".$_POST["name"]."','".$_POST["age"]."','".$_POST["gender"]."')";
            
            mysqli_query($conn, $sql);
            header("location: result.php");
        } else {
            echo "Je bent iets vergeten in te vullen, <a href='index.php'>ga terug</a>";
        }
        ?>
</body>
</html>