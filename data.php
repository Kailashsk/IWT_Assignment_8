<?php
    $db_hostname = "localhost:3307";
    $db_username ="root";
    $db_password="";
    $db_name="regn";

    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

    if(!$conn)
    {
        echo "Connection Failed".mysqli_connect_error();
    }

    $FirstName = $_POST['FirstName'];
    $MiddleName = $_POST['MiddleName'];
    $LastName = $_POST['LastName'];
    $Address1 = $_POST['Address1'];
    $Gender = $_POST['Gender'];


    $sql= "INSERT INTO tabl (FirstName, MiddleName , LastName,Address1,Gender) VALUES ('$FirstName',' $MiddleName','$LastName','$Address1','$Gender')";

    $result=mysqli_query($conn,$sql);

    if(!$result)
    {
        echo "Error".mysqli_error($conn);
    }

    echo "Registration Successful";

    mysqli_close($conn);
?>