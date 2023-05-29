<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email form</title>
    </head>

    <body>

        <?php echo "email is sent" ?>
        <h2>Email succesfully delivered</h2>

        <?php echo form_open('/Email_controller/send_email'); ?>
        <input type="email" name="email" required>
        <input type="submit" value="SEND MAIL">
        <?php echo form_close() ?>
    </body>


</html>