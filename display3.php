<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <h2>Student Information</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $languages = $_POST["languages"];

        echo "<strong>Student Name:</strong> " . $name . "<br>";
        echo "<strong>Selected Programming Languages:</strong><br>";
        
        if (!empty($languages)) {
            echo "<ul>";
            foreach ($languages as $language) {
                echo "<li>" . htmlspecialchars($language) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "No languages selected.";
        }
    }
    ?>
</body>
</html>