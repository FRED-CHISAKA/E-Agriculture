<?php
    $connection = mysqli_connect('localhost:3310','root','','register_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $region = $_POST['region'];
        $county = $_POST['county'];
        $subcounty = $_POST['subcounty'];
        $village = $_POST['village'];
        $location = $_POST['location'];
        $cashcrop = $_POST['cashcrop'];

        $request = "insert into register_form(name, email, phone, address,region, county, subcounty, village, location, cashcrop) values
        ('$name','$email','$phone','$address','$region','$county','$subcounty','$village','$location','$cashcrop')";

        mysqli_query($connection, $request);
        echo 'Data recorded successfully'
    }
    else{
        echo'something went wrong try again';
    }
?>