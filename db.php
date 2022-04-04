<?php

    $serverName = "sql6.freemysqlhosting.net";
    $userName = "sql6483558";
    $password = "4GIMI32Ad1";
    $dbName = "sql6483558";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
