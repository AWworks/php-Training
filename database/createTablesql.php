<?php
//Create table in the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flaDB";

// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// $sql = "CREATE TABLE employees (
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         firstname VARCHAR(30) NOT NULL,
//         lastname VARCHAR(30) NOT NULL,
//         email VARCHAR(50))";

// if ($conn->query($sql) === TRUE) {
//     echo "Table employees created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
// $conn->close();

//insert data into the table
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO employees (firstname, lastname, email)
VALUES ('John', 'Doe', 'doe.john@email.com')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//display data from the table
$sql = "SELECT id, firstname, lastname, email FROM employees";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>