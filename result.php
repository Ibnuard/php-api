<?php
include "config.php";
$query = mysqli_query($connection,"SELECT * FROM user ORDER BY id DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Full Name</th>
            <th>Level</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["id"];?></td>
            <td><?php echo $data["username"];?></td>
            <td><?php echo $data["password"];?></td>
            <td><?php echo $data["fullname"];?></td>
            <td><?php echo $data["level"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>