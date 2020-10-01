<?php

//connecting mysql
$conn = mysqli_connect("localhost", "root", "", "websederhana");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//checking username
mysqli_query($conn, "SELECT username FROM signup WHERE username = '$username'");

if (mysqli_fetch_assoc($result)) {
    echo "<script>
        alert('username sudah terdaftar')
    </script>";
    return false;
}

function registerasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["confirm"]);

    //check confirm
    if ($password !== $password2) {
        echo "<script>
            alert('password tidak sama!');
        </script>";
        return false;
    }

    //add new user to database
    mysqli_query($conn, "INSERT INTO signup VALUES('', '$name', '$email', '$username', '$password', '$statuss')");

    return mysqli_affected_rows($conn);
}
