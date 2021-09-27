<?php
if($_POST["message"]) {
  mail("kylefth@gmail.com",$_POST["message"], $_POST["email"]);
}
?>
<p>Your email has been sent.</p>
