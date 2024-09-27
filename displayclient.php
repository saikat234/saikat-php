<?php
session_start();
include('connection.php');
$id = $_SESSION['id'];
$sql = "SELECT * FROM `multi_user` WHERE `user_id` = '$id'";
$data = mysqli_query($conn, $sql);
$data1 = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($data1);
$client = $result['Name'];
?>
<h3><?php echo "Welcome " . $client; ?></h3>
<table border="2px">
    <tr>
        <th>SL No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Degree</th>
        <th>Language</th>
        <th>Image</th>
        <th>Action</th>
    </tr>

    <?php
    $i = 1;

    while ($result = mysqli_fetch_assoc($data)) {
    ?>
        <tr>
            <td><?php echo $i;
                $i++; ?></td>
            <td><?php echo $result['Name']; ?></td>
            <td><?php echo $result['Email']; ?></td>
            <td><?php echo $result['Password']; ?></td>
            <td><?php echo $result['Phone']; ?></td>
            <td><?php echo $result['Gender']; ?></td>
            <td><?php echo $result['Degree']; ?></td>
            <td><?php echo $result['Language']; ?></td>
            <td>
                <img src="<?php echo $result['Image']; ?>" height="100px" width="100px">
            </td>
            <td>
                <a href="edit.php?ep=<?php echo $result['user_id'];?>">Edit</a>
                <a href="changepass.php">ChangePassword</a>
                <a href="delete.php?del_id=<?php echo $result['user_id'];?>">Delete</a><br>
                <center><a href="logout.php">Logout</a></center>
            </td>
        </tr>
    <?php
    }
    ?>
</table>