<?php
if($_POST["Message"]) {
  mail("kylefth@gmail.com", "Here is the sample subject line",
  $_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>
