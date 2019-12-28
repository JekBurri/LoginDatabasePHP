<?php 
    $username = "";
    $email = "";
    $errors = array();

    //connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'registration');

    // if the register button is clicked
    if (isset($_POST['register'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        //ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, "Username is required"); // add error to errors array
        }
        if (empty($email)) {
            array_push($errors, "Email is required"); // add error to errors array
        }
        if (strpos($email, '@') == false) {
            array_push($errors, 'Invalid Email');
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required"); // add error to errors array
        }
        if ($password_1 != $password_2) {
            array_push($errors, "Passwords do not match"); // if passwords 1 and 2 do not match.
        }
        
        //already exsists
        $sqlname = "SELECT username FROM users WHERE username = '$username'";
        if(mysqli_query($db, $sqlname) == $username) {
            array_push($errors, "Username already exists");
        }



        //if there are no errors, save user to database
        if (count($errors) == 0) {
            $password = md5($password_1);//encryption
            $sql = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email','$password')";
            mysqli_query($db, $sql);
            
        }


    }


?>