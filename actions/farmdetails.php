<?php
    $connection = mysqli_connect('localhost:3310','root','','register_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $farmerid = $_POST['farmerid'];
        $farmsize= $_POST['farmsize'];
        $crops = $_POST['crops'];
        $address = $_POST['address'];
        $county = $_POST['county'];

        $request = "insert into farmdetails(name, farmerid, farmsize, crops, address, county) values
        ('$name','$farmerid','$farmsize','$crops','$address','$county')";

        mysqli_query($connection, $request);
        header('location:machine1.html');
    }
    else{
        echo'something went wrong try again';
    }
?>