<?php
    $connection = mysqli_connect('localhost','root','','data');

    if(isset($_POST['send'])){
        $accuracy = $_POST['accuracy'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $altitude = $_POST['altitude'];
        $heading = $_POST['heading'];
        $speed = $_POST['speed'];
        
        $request = "insert into tb_data(accuracy, latitude, longitude, altitude, heading, speed) values
        ('$accuracy','$latitude','$longitude','$altitude','$heading','$speed')";

        mysqli_query($connection, $request);

        echo 'New data added successfully!!'
    }
    else{
        echo'something went wrong try again';
    }
?>