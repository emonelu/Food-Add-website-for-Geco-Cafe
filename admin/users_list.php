<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="/Projects/geco_cafe/CSS/style.css">
   
</head>
<body>
<h1>Geco Café</h1>
    <img src="/Projects/geco_cafe/IMG/gecoCafe_logo.jpg" alt="Logo" class="logo">
    <nav>
        <ul>
            <a href="/Projects/geco_cafe/admin/admin_dashboard.php"><li>Dashboard</li></a>
            <a href="/Projects/geco_cafe/admin/users_list.php"><li>Users List</li></a>
            <a href="/Projects/geco_cafe/admin/menu.php"><li>Menu</li></a>
            <a href="/Projects/geco_cafe/admin/orders.php"><li>Orders</li></a>
            <a href="/Projects/geco_cafe/logout.php"><li>logout</li></a>
        </ul>
    </nav>



    <h1> User list</h1>
    <?php
        session_start();
        require_once("../connection.php");
        require_once("../functions.php");
        ?>




<!-- Here we addd the side menu, this must be static  -->


<table style="width:100%;">
<thead>
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>Password</th>
            <th>Date of registration</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        $sql = "SELECT * FROM `users` ORDER BY `user_name` DESC";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
       
        ?>
        <tr>
            <td><?php echo $row['id'];  ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><a class="table-link">update</a></td>
            <td><a class="table-link">delete</a></td>
            
        </tr>
         
        </tbody>
   
        <?php
        }
    } else {
        echo "<tr><td>No users in  the database</td></tr>";
    }
        ?>
    </table>










<!-- here we add the pages that will be seen when a menu will be selected  -->
    <div class="footer">
        
           </div>
</body>
</html>