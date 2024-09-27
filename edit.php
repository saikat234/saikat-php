<?php 
session_start();
include('connection.php');
$edit_id = $_REQUEST['ep'];
$sql = "SELECT * FROM multi_user WHERE user_id = '$edit_id'";
$data = mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($data);
// print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Form</title>
    </head>
    <body>
         <form action="editaction.php" method="post">
             <input type="hidden" name="uid" value="<?php echo $result['user_id'];?>">
             Name:<input type="text" name="name" value="<?php echo $result['Name'];?>"><br>
             Email:<input type="email" name="email" value="<?php echo $result['Email'];?>"><br>
             Phone:<input type="number" name="phone" value="<?php echo $result['Phone'];?>"><br>
             <button type="submit">Submit</button>
        </form>
    </body>
</html>