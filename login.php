<?php

include('db_connect.php');

$admin = "Hospital";
$user = "zcsra";
$password = "12345678";

 if(isset($_POST['submit'])){

  
    if($_POST['name'] == $admin and $_POST['password'] == $password){
        header('Location: index.php');
        echo "<script> alert('login successfuly')</script>";


    }elseif($_POST['name'] == $user and $_POST['password'] == $password){
        header('Location: new_child.php');
        echo "<script> alert('login successfuly')</script>";


    }else{
            echo "<script> alert('incorrect user name or password')</script>";
        }

        // echo $result['user_name'];

    

    // if($all){
    //     foreach($results as $result){
    //         $_SESSION['user'] = $result['user_name'];
    //         $_SESSION['role'] = $result['role'];


    //         header('Location: index.php');

    //     }
    // }




    

    // $user_name = $_POST['name'];

    // $user_mail = $_POST['mail'];

    // echo "<script> alert('Login successfuly')</script>";

    // foreach($results as $result){

    //     if($user_name == $result['user_name']){
    //         header ('Location: index.php');
    //     }else{
    //         if($user_name == $result['user_name']){
    //             header ('Location: new_child.php'); 
    //         }
    //     }


        // echo $result['user_name'];
        // echo $result['user_password'];
    // }

    // echo $recoded_name;
    // echo $user_name;
    // echo $user_mail;

 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

</head>
<body class="secodary">
    <div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4 bg-white bodared">

        <form action="login.php" method="POST" class="shadow p-5 mt-5 body">
        <!-- form_handler.php -->
            <div class="mt-3 text-center">
                <h3 class="h3 m-4"><span style="color: #f6b024;">BCR</span> <span style="color: #040b14;">LOGIN</span> </h3>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">User Name:</label>
                <input type="text" class="form-control" name="name" required> 
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="mb-3 mt-3 text-center">
                <button type="submit" name="submit" class="btn btn-primary mb-3">Login</button>
            </div>
    </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>