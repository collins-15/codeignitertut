<!DOCTYPE html>
<html>
<head>
    <title>File Upload Form</title>
</head>
<body>
    <h2>File Upload</h2>

    <?php if (isset($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <?php echo form_open_multipart('upload/do_upload'); ?>
    <input type="file" name="userfile" size="20" />
    <br /><br />
    <input type="submit" value="Upload" />
    </form>
</body>
</html>
