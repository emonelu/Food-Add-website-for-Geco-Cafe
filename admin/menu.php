<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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



    <h1> Menu</h1>


    <?php
           session_start();
      


        include("../connection.php");
        include("../functions.php");

        $user_data = check_login();

        ?>
    </div>
    Hello, <?php echo $_SESSION['user_name']; ?>
    <section class="container">
        <form method="post" enctype="multipart/form-data" >
        <input type="hidden" name="size" value="1000000">
            <label class="form_label">Food Name</label>
            <input class="form_input" type="text" name="food_name" required placeholder="Food name">
            <label class="form_label">Food price</label>
            <input class="form_input" type="text" name="food_price" min="1" required placeholder="price of food">
            <label class="form_label">Food Image</label>
            <input class="form_input" type="file" name="food_image" required/>
            <input type="submit" value="add food"  name="upload_food"class="form_submit">
        </form>
    </section>
    <section class="container">
        <table>
            <h1>Foods available</h1>
            <thead>
                <tr>
                    <th>food name</th>
                    <th>food price</th>  
                </tr>
            </thead>
            <tbody>
        <?php
        
        $sql = "SELECT * FROM `food` ORDER BY `foodId` DESC";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
       
        ?>
        <tr>
            <td><?php echo $row['food_name']; ?></td>
            <!-- <img src='../IMG/aboutUs.jpg'/> -->
            <td><?php echo "<img class='table_img' src='../IMG/" .$row['image']."' style='width:10em;height:10em'>" ?></td>
            <td><?php echo $row['image']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><a class="table-link">update</a></td>
            <td><a class="table-link">delete</a></td>
            
        </tr>
         
        </tbody>
   
        <?php
        }
    } else {
        echo "<tr><td>No food in  the database</td></tr>";
    }
        ?>
        </table>
    </section>
    <?php
        if(isset($_POST['upload_food'])){
            $food_name=$_POST['food_name'];
            $food_price=$_POST['food_price'];
            $food_image=$_FILES['food_image']['name'];
            $target="products/".basename($food_image);
            $sql="INSERT INTO food(food_name,price,image)VALUES('$food_name','$food_price','$food_image')";
            if(move_uploaded_file($_FILES['food_image']['tmp_name'],$target)){
                $msg="succesful upload";
                if(mysqli_query($con,$sql))
                {
                    echo"<script>food added to the databse</script>";
                }
            }
            else{
                echo "unable to upload file";
            }
        }
    ?>

<!-- Here we addd the side menu, this must be static  -->











<!-- here we add the pages that will be seen when a menu will be selected  -->
    <div class="footer">
        
           </div>
</body>
</html>