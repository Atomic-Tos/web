<?php
if(isset($_POST['update'])) setcookie("myCookie", $_POST['cookie_value'], time()+3600);
if(isset($_POST['delete'])) setcookie("myCookie", "", time()-3600);
$c = $_COOKIE['myCookie'] ?? "No cookie";
$msg = isset($_POST['update']) ? "Cookie Updated!" : (isset($_POST['delete']) ? "Cookie Deleted!" : "");
if(isset($_POST['retrieve'])) $msg = "Stored Cookie: ".$c;
?>

<form method="POST">
<input name="cookie_value" placeholder="Value">
<button name="update">Update</button>
<button name="retrieve">Retrieve</button>
<button name="delete">Delete</button>
</form>

<p><?=$msg?></p>

