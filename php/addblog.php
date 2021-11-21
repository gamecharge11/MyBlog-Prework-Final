<?php
    $connection = mysqli_connect("localhost","root","","myblog");
    $title = $_POST['title'];
    $description = $_POST['description'];

    $input = mysqli_query($connection,"INSERT INTO blogdata(title,description) VALUES ('$title','$description)");
    if ($input) {
        header('Location:http://localhost/myblogapp/blog.html');
    } else {
        header('Location:http://localhost/myblogapp/signin.html');
    }
?>