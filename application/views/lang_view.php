<!DOCTYPE html>
<html>
<head>
    <title>Language Selection</title>
</head>
<body>
    <?php echo form_open('/lang'); ?>
    <label for="language">Select Language:</label>
    <select name="language" id="language" onchange="this.form.submit();">
        <?php
        $lang = array(
            'english' => 'English',
            'french' => 'French',
            'german' => 'German'
        );
        foreach ($lang as $key => $val) {
            echo "<option value='" . $key . "'";
            if ($key === $language) {
                echo " selected";
            }
            echo ">" . $val . "</option>";
        }
        ?>
    </select>
    <?php echo form_close(); ?>

    <h1>Selected Language: <?php echo $language; ?></h1>
    <h2>Message: <?php echo $msg; ?></h2>
</body>
</html>
