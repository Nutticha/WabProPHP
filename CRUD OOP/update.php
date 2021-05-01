<?php
    include_once('functions.php');
    $insertdata = new DB_con();
    if(isset($_POST['update'])){
        $userid = $_GET['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];

        $sql = $insertdata->insert($fname, $lname, $email, $phonenumber, $address , $userid);

        if($sql) {
            echo "<script>alert('Record Insertwd Succressfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Somthing went wrong! Please try again!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
          crossorigin="anonymous">
</head>
<body>
<div class="container">
        
        <h1 class="mt-5">Update Page</h1>
        <hr>
        <?php
            $userid = $_GET['id'];
            $updateuser = new DB_con();
            $sql = $updateuser -> fetchonerecord($userid);
            while($row = mysqli_fetch_array($sql)){
        ?>
        <form action="" method="post">
            <div class="mb=4">
                <lable for="firstname" class="form-lable">First Name</lable>
                <input type="text" class="form-control" name="firstname" 
                value = "<?php echo $row['firstname']; ?>"required>
            </div>
            <div class="mb=4">
                <lable for="lastname" class="form-lable">Last Name</lable>
                <input type="text" class="form-control" name="lastname" 
                value = "<?php echo $row['lastname']; ?>"required>
            </div>
            <div class="mb=4">
                <lable for="email" class="form-lable">Email</lable>
                <input type="text" class="form-control" name="email" 
                value = "<?php echo $row['email']; ?>"required>
            </div>
            <div class="mb=4">
                <lable for="phonenumber" class="form-lable">Phone Number</lable>
                <input type="text" class="form-control" name="phonenumber" 
                value = "<?php echo $row['phonenumber']; ?>"required>
            </div>
            <div class="mb=4">
                <lable for="address" class="form-lable">Address</lable>
                <textarea name="address" cols="30" rows="10" class="form-control" requiredvalue ><?php echo $row['address']; ?></textarea>
            </div>
            <?php   } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
            crossorigin="anonymous">
    </script>

</body>
</html>