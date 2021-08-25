<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="../CSS/style.css">
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



    <h1>Test dashboard</h1>


    <?php
           session_start();
      


        include("../connection.php");
        include("../functions.php");

        $user_data = check_login();


       
        ?>
    </div>
    Hello, <?php echo $_SESSION['user_name']; ?>



<!-- Here we addd the side `menu, this must be static  -->

    <section class="container">
        <div class="dashboard-cards">
            <?php
                    $sql = "SELECT * FROM users";
                    $mysqliStatus = $con->query($sql);
 
                    $rows_count_value = mysqli_num_rows($mysqliStatus);
            ?>
            <div class="dashboard-card-count">
                <?php
                        echo $rows_count_value; 
                ?>
            </div>
            <h3>Total Users</h3>
        </div>
        <div class="dashboard-cards">
            <?php
                    $sql = "SELECT * FROM users";
                    $mysqliStatus = $con->query($sql);
 
                    $rows_count_value = mysqli_num_rows($mysqliStatus);
            ?>
            
        <div class="dashboard-cards">
            <?php
                    $sql = "SELECT * FROM users";
                    $mysqliStatus = $con->query($sql);
 
                    $rows_count_value = mysqli_num_rows($mysqliStatus);
            ?>
            <div class="dashboard-card-count">
                <?php
                        echo $rows_count_value; 
                ?>
            </div>
            <h3>Total Users</h3>
        </div>
        <div class="dashboard-cards">
            <?php
                    $sql = "SELECT * FROM users";
                    $mysqliStatus = $con->query($sql);
 
                    $rows_count_value = mysqli_num_rows($mysqliStatus);
            ?>
            <div class="dashboard-card-count">
                <?php
                        echo $rows_count_value; 
                ?>
            </div>
            <h3>Total Users</h3>
        </div>
        <div class="dashboard-cards">
            <?php
                    $result_count=mysqli_query($con,"SELECT COUNT(*) AS total_records FROM `food`");
                    $total_records=mysqli_fetch_array($result_count);
                    $total_records=$total_records['total_records'];
            ?>
            <div class="dashboard-card-count">
                <?php
                        echo $total_records; 
                ?>
            </div>
            <h3>Total foods</h3>
        </div>
    </section>

<!-- here we add the pages that will be seen when a menu will be selected  -->
    <div class="footer">
        
           </div>
</body>
</html>