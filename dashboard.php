<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        table, td,th{
            border:1px solid black;
            border-collapse:collapse;
        }
        td,th{  

            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <?php 
        include_once 'config.php';

        $sql = "SELECT * from users";
        $getUsers = $conn->prepare($sql);
        $getUsers->execute();

        $users = $getUsers->fetchAll();
    ?>
        <table> 
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php 
                foreach($users as $user) {
                    ?> 
                    <tr>
                        <td><?php echo $user['id']?></td>
                        <td><?php echo $user['name']?></td>
                        <td><?php echo $user['surname']?></td>
                        <td><?php echo $user['email']?></td>
                        <td><a href="delete.php?id=<?php echo $user['id']?>">Delete</a>  |  <a href="edit.php?id=<?php echo $user['id']?>">Update</a></td>
                    </tr>
                    <?php 
                    }
                    ?>
            </tbody>
        </table>
        <a href="index.php">Add new user</a>

</body>
</html>