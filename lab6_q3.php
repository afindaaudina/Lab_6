<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q3</title>
</head>
<body>
   
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        Width = <input type="number" name="width" required><br><br>
        Length = <input type="number" name="length" required><br><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize width and length values
        $width = (int)$_POST['width'];
        $length = (int)$_POST['length'];

        // Calculate area
        $area = $width * $length;

        // Display the results
        echo "<p>The area of a rectangle with a width of $width and length of $length is $area.</p>";
    }
    ?>
</body>
</html>
