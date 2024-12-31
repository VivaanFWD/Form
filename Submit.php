<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $semester = $_POST['semester'];
    $session = $_POST['session'];
    $doj = $_POST['doj'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    echo '<link rel="stylesheet" href="style.css">';

     
    echo '<header><a href="#">Student Form</a></header>
        <nav>
            <a href="#">Home</a>
            <a href="#">NEXT</a>
            <a href="#">Contacts</a>
        </nav>';
    echo '<main>';

    echo '<h1>Final Form Preview.</h1><br><br>';
    echo '<hr>';
    echo "Name: '$name'<br><br>";
    echo "Roll: '$roll'<br><br>";
    echo "Semester: '$semester'<br><br>";
    echo "Session: '$session'<br><br>";
    echo "Date of Joining: '$doj'<br><br>";
    echo "Email: '$email'<br><br>";
    echo "Adress: '$address'<br><br>";


    echo '</main>';
    
        echo '<footer>&copy; 2025 Designed by <a href="#">VivaanFWD</a>.</footer>';
    



}

?>

<style>
    main{
        color: #04062beb;
        font-weight:bold;
        font-size:20px; 

    } 
</style>