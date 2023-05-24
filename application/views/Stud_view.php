<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD functionality for student Database</title>
    </head>

    <body>
        <a href="<?php echo base_url() ?>index.php/stud/add_view">Add</a>
        <table border="1">
            <?php
            echo "<tr>";
            echo "<td>Roll No.</td>";
            echo "<td>Name</td>";
            echo "<td>Delete</td>";
            echo "</tr>";

            foreach ($records as $r) {
                echo "<tr>";
                echo "<td>" . $r->roll_no . "</td>";
                echo "<td>" . $r->Name . "</td>";
                echo "<td><a href='" . base_url() . "index.php/stud/delete/" . $r->roll_no . "'>Delete</a></td>";
                echo "</tr>";
            }

            ?>

        </table>
    </body>

</html>