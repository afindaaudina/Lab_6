<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Lab 6 Q1 </title>
    </head>
    <body>
        <?php
            $name = "Nur Afinda Audina binti Muraji";
            $matric_no = "AI220146";
            $course = "BIT";
            $year = "3.5 years";
            $address = "Kolej Kediaman Tun Fatimah, UTHM";

        ?>

        <table>
            <tr>
                <td>Name:   </td>
                <td><?php echo "$name"; ?></td>
           <tr>
                <td>Matric number:  </td>
                <td><?php echo "$matric_no"; ?></td>
            </tr>
            <tr>
                <td>Course: </td>
                <td><?php echo "$course"; ?></td>
            </tr>
                <td>Years of study: </td>
                <td><?php echo "$year"; ?></td>
            <tr>
                <td>Address:    </td>
                <td><?php echo "$address"; ?></td>
            </tr>
        </table>

</body>
</html>


