<?php



$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

else
{

}
echo "Conexão bem sucedida";


