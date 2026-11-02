<?php
    $connection = mysqli_connect('localhost:3310','root','','register_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $vehicleid = $_POST['vehicleid'];
        $numberplate = $_POST['numberplate'];
        $vehicletype = $_POST['vehicletype'];
        $departure = $_POST['departure'];
        $arrival = $_POST['arrival'];
        $goods = $_POST['goods'];
        $frome = $_POST['frome'];
        $two = $_POST['two'];

        $request = "insert into machinedetails(name, contact, vehicleid, numberplate,vehicletype, departure, arrival, goods, frome, two) values
        ('$name','$contact','$vehicleid','$numberplate','$vehicletype','$departure','$arrival','$goods','$frome','$two')";

        mysqli_query($connection, $request);
        header('location:farm1.html');
    }
    else{
        echo'something went wrong try again';
    }
?>