<?php 
$username = "";
$password = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// if the login button is clicked
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

    //ensure that form fields are filled properly
    if (empty($username)) {
        array_push($errors, "Username is required"); // add error to errors array
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required"); // add error to errors array
    }
  
    //if there are no errors, login
    if (count($errors) == 0) {
       $password = md5($password_1);//encryption
       $sql = "SELECT id FROM users WHERE username='$username' AND password = '$password'";
       $result = mysqli_query($db, $sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

       $count = mysqli_num_rows($result);
       if ($count == 1) {
            header("location: /registration/blog.php?username=$username");
       }
       
     
    
    }

}
?>