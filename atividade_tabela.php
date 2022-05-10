<!DOCTYPE html>
<html lang ="en">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>aula 16/02</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "5SI";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT into Pessoa (nomePessoa, mailPessoa, idadePessoa) values ('Marcelinho', 'marcelo.bauer@unasp.com', 20)";


        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>

    </body>
</html>