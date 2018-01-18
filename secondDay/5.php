<form method="get" action="5.php">
    <input type="file" name="img">
    <input type="submit" name="sent">
</form>
<?php

if(isset($_GET['sent']) && $_GET['img'] !== '') {
    echo "<img width='100' src=".$_GET['img']."><br>";

    foreach (getallheaders() as $key => $val){
        echo "<p style='color: #003a87'>$key : $val</p>";
    }
}
?>



