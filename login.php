<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $pass_hash = md5($password);
    if(empty($username)){
        die("Empty or invalid email address");
    }
    if(empty($password)){
        die("Enter your password");
    }
    $con = new MongoClient();
    // Select Database
    if($con){
        $db = $con->tickets;
        // Select Collection
        $collection = $db->admin;   // you may use 'admin' instead of 'Admin'
        $qry = array("username" => $username, "password" => $pass_hash);
        $result = $collection->findOne($qry);

        if(!empty($result)){
            echo "You are successfully loggedIn";
        }else{
            echo "Wrong combination of username and password";
        }
    }else{
        die("Mongo DB not connected!");
    }
}
?>
