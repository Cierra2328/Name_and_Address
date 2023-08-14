<?php
    require('address.php');
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $street = filter_input(INPUT_POST, 'street', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
    $state = strtoupper($state);
    $zip = filter_input(INPUT_POST, 'zip', FILTER_VALIDATE_INT);
    $phone = filter_input(INPUT_POST, 'phone');
    $phone_number = strval($phone);
    $error_message = "";
    if ($name == FALSE) {
        $error_message .= 'Please enter your name.<br>'; 
    } 
    if ($street == FALSE) {
        $error_message .= 'Please enter a street address.<br>'; 
    }
    if($city == FALSE) {
        $error_message .= 'Please enter a city. <br>';
    }
    $address = new Address();
    $address->set_street($street);
    $address->set_city($city);
    $address->set_name($name);
    $address->set_state($state);
    $address->set_zip($zip);
    $address->set_phone($phone);
    $validate_phone = $address->validate_phone($phone);
    $validate_state = $address->validate_state($state);
    $validate_zip = $address->validate_zip($zip);
    if($validate_zip == false){
        $error_message .= 'Zip must be a valid 5 digit zip code. <br>';
    }
    if($validate_state == false){
        $error_message .= 'State must be a valid 2 character state abbreviation.<br>';
    }
    if($validate_phone == false){
        $error_message .= 'Phone number must be valid, containing 10 digits. <br>';
    }
    if ($error_message != '') {
        include('index.php');
        exit(); }

   
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
    <main>
        <h1>User Information</h1>
        <span class = 'address'><?php echo $address->get_name(); ?></span><br>
        <span class = 'address'><?php echo $address->get_street();  ?></span>
        <span class = 'address'><?php echo $address->get_city();?><?php echo ',';?></span>
        <span class = 'address'><?php echo $address->get_state();?></span><br>
        <span class = 'address'><?php echo $address->get_zip();?></span><br>
        <span class = 'address'><?php echo $address->get_phone();?></span><br>

              
    </main>
</body>
</html>