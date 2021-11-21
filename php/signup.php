<?php
    $connection = mysqli_connect("localhost","root","","myblog");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkdata = mysqli_query($connection,"SELECT * FROM userdata WHERE email = '$email'");
    $check = mysqli_num_rows($checkdata);

    if ($check > 0) {
        echo "Email already exists";
    } else {
        $input = mysqli_query($connection,"INSERT INTO userdata(email,password) VALUES ('$email','$password)");
        if ($input) {
            header('Location:http://localhost/myblogapp/blog.html');
        } else {
            header('Location:http://localhost/myblogapp/signup.html');
        }
    }
?>