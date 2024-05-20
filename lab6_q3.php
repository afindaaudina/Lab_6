<!DOCTYPE html>
<html lang="eng">
<head>
<   <meta charset="UTF-8">
    <title>Lab 6 Q3</title>
</head>

<body>
    <?php
        $width = int($_POST['width']);
        $length= int($_POST['length']);
        echo "<p><strong>Width:</strong> $width</p>";
        echo "<p><strong>Width:</strong> $lenth
        </p>";

        $area = $width * $length;

        echo("The area of a rectangle with a width of $width and length of $length is $area");
    ?>
</body>
</html>