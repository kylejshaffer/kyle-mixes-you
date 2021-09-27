<?php
if($_POST["message"]) {
mail("kylefth@email.address", "Here is the subject line",
$_POST["message"]. "From: an@email.address");
}
?>
