<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //stored data of users account info.
        $users = array("jack", "kristina", "damon", "sahi", "garrett", "max");
        $passes = array("toffifee", "coconut", "glover", "ubc", "metalgearsolid", "football");

        //setting variables to the input fields on index.php.
        $name = $_POST["username"];
        $password = $_POST["password"];

        //if login info matches users account info, login.
        // isValidUser();

        //printUsers($users);
        // isValidUser($users, $name);
        // isValidPass($passes, $password);
        isValidLogin();


        //FUNCTIONS


        //prints users array (all valid users in the database)
        function printUsers() {
            global $users;
            $index = 0;
            foreach($users as $user) {
                echo $index . " " . $user . "<br>";
                $index++;
            }
        }

        //checks if username is valid.
        function isValidUser($n) {
            global $users;
            $i = 0;
            foreach ($users as $user) {
                if($users[$i] == $n) {
                    return true;
                }
                $i++;
            }
        }

        //checks if password is valid.
        function isValidPass($p) {
            global $passes;
            $i = 0;
            foreach ($passes as $password) {
                if($passes[$i]==$p) {
                    return true;
                }
                $i++;
            }
        }
        function isValidLogin() {
            global $users, $name, $passes, $password;
            if(isValidUser($name) == true && isValidPass($password) == true) {
                print "Logged In.";
            }
            else {
                header('location: /');
            }
        }
    ?>
</body>
</html>