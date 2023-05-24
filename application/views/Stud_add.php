<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD functionality for student Database</title>
    </head>

    <body>
        <?php echo form_open("Stud_controller/add_student"); ?>
        <?php
        echo form_label("Roll No.");
        echo form_input(['id' => 'name', 'name' => 'name']);
        echo "<br/>";
        
        echo form_submit(['id' => 'submit', 'value' => 'Add']);
        ?>
        <?php echo form_close(); ?>

    </body>

</html>