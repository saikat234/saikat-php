<?php
include('connection.php');

// SQL query to select all CLIENT users
$sql = "SELECT * FROM `multi_user` WHERE `user_type` = 'CLIENT'";
$data = mysqli_query($conn, $sql);
?>
<h3>Welcome Admin</h3>
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
                <button class="btn btn-primary
                "><a href="block.php?blk=<?php echo $result['user_id']; ?>">Block</a></button>
                <a href="unblock.php?ublk=<?php echo $result['user_id']; ?>">Unblock</a>
                <a href="delete.php"></a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<center><button><a href="logout.php">Logout</a></button></center>