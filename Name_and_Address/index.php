<!DOCTYPE html>
<html>
<head>
    <title>Name and Address</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
<main>
    <h2>Welcome! <br> Please enter your name, address, and phone number!</h2>
    <?php if (!empty($error_message)){ ?> 
        <p class="error"><?php echo $error_message; ?></p>
        <?php } ?>
    <form action = "display_info.php" method = "post">
<fieldset>
    <legend>Name and Address</legend>
    <label>Name:</label>
    <input type = "text" name = "name" value = "<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" class = "textbox">
    <br>
    <label>Street Address:</label>
    <input type = "text" name = "street" value = "<?php echo isset($_POST['street']) ? $_POST['street'] : ''; ?>" class = "textbox">
    <br>
    <label>City:</label>
    <input type = "text" name = "city" value = "<?php echo isset($_POST['city']) ? $_POST['city'] : ''; ?>" class = "textbox">
    <br>
    <label>State:</label>
    <input type = "text" name = "state" value = "<?php echo isset($_POST['state']) ? $_POST['state'] : ''; ?>" class = "textbox">
    <br>
    <label>Zip:</label>
    <input type = "text" name = "zip" value = "<?php echo isset($_POST['zip']) ? $_POST['zip'] : ''; ?>" class = "textbox">
    <br>
    <label>Phone:</label>
    <input type = "text" name = "phone" value = "<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>" class = "textbox">
    

</fieldest>
<br>
<input type="submit" action = 'submit' value="Submit" class = "button">

</main>
</body>

