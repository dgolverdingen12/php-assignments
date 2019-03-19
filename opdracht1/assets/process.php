<?php 
$conn = new PDO('mysql:host=localhost;dbname=form', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['versturen']) && !empty($_POST['text'])&& !empty($_POST['number']) && !empty($_POST['dropdown']) && !empty($_POST['checkbox'])) {
    $sql = "INSERT INTO `velden` (`id`, `text`, `number`, `dropdown`, `checkbox`) VALUES (NULL, :text, :number, :dropdown, :checkbox)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':text', $_POST['text'], PDO::PARAM_STR);
    $stmt->bindParam(':number', $_POST['number'], PDO::PARAM_INT);
    $stmt->bindParam(':dropdown', $_POST['dropdown'], PDO::PARAM_STR);
    $stmt->bindParam(':checkbox', $_POST['checkbox'], PDO::PARAM_STR);
    $stmt->execute();
header('Location: ../result.php');
} else {
    echo "Je hebt iets niet ingevuld, <a href='../index.php'>Ga terug</a>";
}
?>