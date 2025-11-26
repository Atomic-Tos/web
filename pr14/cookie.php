<?php
 
if (isset($_POST['set_cookie'])) {
    $cname = $_POST['cookie_name'];
    $cvalue = $_POST['cookie_value'];
    setcookie($cname, $cvalue, time() + 3600, "/");  
    $message = "Cookie '$cname' has been created/updated!";
}

 
if (isset($_POST['delete_cookie'])) {
    $cname = $_POST['cookie_name'];
    setcookie($cname, "", time() - 3600, "/");  
    $message = "Cookie '$cname' has been deleted!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cookie Manager</title>
</head>
<body>

<h2>Cookie Manager</h2>

 
<?php
if (isset($message)) {
    echo "<p><b>$message</b></p>";
}
?>

 
<form method="POST">
    <label>Enter Cookie Name:</label><br>
    <input type="text" name="cookie_name" required>
    <br><br>

    <label>Enter Cookie Value:</label><br>
    <input type="text" name="cookie_value">
    <br><br>

    <button type="submit" name="set_cookie">Create / Update Cookie</button>
    <button type="submit" name="delete_cookie">Delete Cookie</button>
</form>

<hr>

<h3>Available Cookies:</h3>

<?php
 
if (count($_COOKIE) > 0) {
    echo "<ul>";
    foreach ($_COOKIE as $key => $val) {
        echo "<li><b>$key</b> = $val</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No cookies found!</p>";
}
?>

</body>
</html>
