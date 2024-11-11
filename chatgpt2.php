<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form with Validation</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <?php
    // Define variables and set to empty values
    $nameErr = $emailErr = $ageErr = $genderErr = "";
    $name = $email = $age = $gender = "";
    $valid = true;

    // Form submission handling
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate Name
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
            $valid = false;
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and spaces allowed";
                $valid = false;
            }
        }

        // Validate Email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $valid = false;
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                $valid = false;
            }
        }

        // Validate Age
        if (empty($_POST["age"])) {
            $ageErr = "Age is required";
            $valid = false;
        } else {
            $age = test_input($_POST["age"]);
            if (!is_numeric($age) || $age < 1 || $age > 120) {
                $ageErr = "Invalid age";
                $valid = false;
            }
        }

        // Validate Gender
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $valid = false;
        } else {
            $gender = test_input($_POST["gender"]);
        }

        // If the form is valid, process the data
        if ($valid) {
            echo "<h2>Your Submitted Data:</h2>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Age: " . $age . "<br>";
            echo "Gender: " . $gender . "<br>";
        }
    }

    // Function to sanitize inputs
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span><br><br>

        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span><br><br>

        Age: <input type="text" name="age" value="<?php echo $age; ?>">
        <span class="error">* <?php echo $ageErr; ?></span><br><br>

        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked"; ?> value="female"> Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked"; ?> value="male"> Male
        <span class="error">* <?php echo $genderErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>
