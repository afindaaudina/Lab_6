<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>Lab 6 Q2</title>
        <style>
       
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        </style>
    </head>

    <body>
        <?php
        $student =[
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age'=> 21,
            ],
            
            ['name' => 'Bob',
            'program' => 'BIS',
            'age'=> 20,
             ],
             
             [
                'name' => 'Raju',
                'program' => 'BIT',
                'age'=> 22,
             ],
        ];

        echo"<table>";
        echo "<tr> <th>Name</th> <th>Program</th> <th>Age</th>";

        foreach ($student as $student) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($student['name']) . "</td>";
            echo "<td>" . htmlspecialchars($student['program']) . "</td>";
            echo "<td>" . htmlspecialchars($student['age']) . "</td>";
            echo "</tr>";
            }

        echo"</table>";
        ?>
    </body>
</html>