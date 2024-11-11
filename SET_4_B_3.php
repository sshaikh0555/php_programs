<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
    <h2>Enter Student Information</h2>
    <form action="display3.php" method="POST">
        <label for="name">Student Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="languages">Select Programming Languages:</label><br>
        <select id="languages" name="languages[]" multiple required>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <option value="C++">C++</option>
            <option value="Ruby">Ruby</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>