<?php
    include_once('functions.php');

    $insertdata = new DB_con();

    if(isset($_POST['insert'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];

        $sql = $insertdata->insert($fname, $lname, $email, $phonenumber, $address);

        if($sql) {
            echo "<script>alert('Record Insertwd Succressfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Somthing went wrong! Please try again!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
          crossorigin="anonymous">
</head>
<body>
<div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">Insert Page</h1>
        <hr>
        <form action="" method="post">
            <div class="mb=4">
                <lable for="firstname" class="form-lable">First Name</lable>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="mb=4">
                <lable for="lastname" class="form-lable">Last Name</lable>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb=4">
                <lable for="email" class="form-lable">Email</lable>
                <input type="text" class="form-control" name="email" required>
            </div>
            <div class="mb=4">
                <lable for="phonenumber" class="form-lable">Phone Number</lable>
                <input type="text" class="form-control" name="phonenumber" required>
            </div>
            <div class="mb=4">
                <lable for="address" class="form-lable">Address</lable>
                <textarea name="address" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
        </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
            crossorigin="anonymous">
    </script>

</body>
</html>