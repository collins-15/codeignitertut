<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Codeigniter Session Management</title>
    </head>

    <body>
        welcome
        <?php echo $this->session->userdata('name'); ?>
        <br />
        <a href="http://localhost/codeignitertut/index.php/">Click here </a>to Unset your user data.

    </body>

</html>