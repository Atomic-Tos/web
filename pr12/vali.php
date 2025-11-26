<?php

$name = $email = $phone = $password = "";
$nameErr = $emailErr = $phoneErr = $passwordErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }


    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
        
        if (!preg_match("/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email)) {
            $emailErr = "Invalid email format";
        }
    }

 
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = $_POST["phone"];
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Invalid phone number, must be 10 digits";
        }
    }

   
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
            $passwordErr = "Password must be at least 8 characters with uppercase, lowercase, and number";
        }
    }


    if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($passwordErr)) {
        echo "<h3>Form submitted successfully!</h3>";
        echo "Name: $name <br>Email: $email <br>Phone: $phone <br>Password: $password<br>";
    }
}
?>


<h2>PHP Form Validation Using Regex</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color:red"><?php echo $nameErr; ?></span>
    <br><br>
    
    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red"><?php echo $emailErr; ?></span>
    <br><br>
    
    Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
    <span style="color:red"><?php echo $phoneErr; ?></span>
    <br><br>
    
    Password: <input type="password" name="password">
    <span style="color:red"><?php echo $passwordErr; ?></span>
    <br><br>
    
    <input type="submit" value="Submit">
</form>
