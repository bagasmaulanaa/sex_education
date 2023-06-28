<?php 
// Koneksi database
$conn = mysqli_connect("localhost", "root", "", "sex_education");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $full_name = htmlspecialchars($data["full_name"]);
    $email = htmlspecialchars($data["email"]);
    $message = htmlspecialchars($data["message"]);

    
    $query = "INSERT INTO user_message VALUES('', '$full_name', '$email', '$message')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>