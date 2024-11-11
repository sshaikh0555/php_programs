<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store the input values
    $name = $_POST['name'];
    $address = $_POST['address'];
    $basic = $_POST['basic'];
    $da = $_POST['da'];
    $hra = $_POST['hra'];

    // Calculate the total earnings
    $total_earnings = $basic + $da + $hra;
} else {
    // Redirect back to the form page if accessed directly
    header("Location: employee_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee and Earning Details</title>
</head>
<body>
    <h1>Employee Details</h1>

    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Address:</strong> <?php echo nl2br($address); ?></p>

    <h2>Earning Details</h2>

    <p><strong>Basic Salary:</strong> ₹<?php echo number_format($basic, 2); ?></p>
    <p><strong>DA (Dearness Allowance):</strong> ₹<?php echo number_format($da, 2); ?></p>
    <p><strong>HRA (House Rent Allowance):</strong> ₹<?php echo number_format($hra, 2); ?></p>

    <h3>Total Earnings: ₹<?php echo number_format($total_earnings, 2); ?></h3>
</body>
</html>
