<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
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



    <h1>Test dashboard</h1>


    <?php
           session_start();
      


        include("/Projects/geco_cafe/connection.php");
        include("/Projects/geco_cafe/functions.php");

        $user_data = check_login();


       
        ?>
    </div>
    Hello, <?php echo $_SESSION['user_name']; ?>



<!-- Here we addd the side menu, this must be static  -->

<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">   
	<a href="#"><strong><span class="fa fa-dashboard"></span> My Dashboard</strong></a>
	<hr>		
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body bk-primary text-light">
							<div class="stat-panel text-center">
								<div class="stat-panel-number h1 "><?php echo $user->totalUsers(""); ?></div>
								<div class="stat-panel-title text-uppercase">Total Users</div>
							</div>
						</div>											
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body bk-success text-light">
							<div class="stat-panel text-center">
								<div class="stat-panel-number h1 "><?php echo $user->totalUsers('active'); ?></div>
								<div class="stat-panel-title text-uppercase">Total Active Users</div>
							</div>
						</div>											
					</div>
				</div>		
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body bk-success text-light">
							<div class="stat-panel text-center">
								<div class="stat-panel-number h1 "><?php echo $user->totalUsers('pending'); ?></div>
								<div class="stat-panel-title text-uppercase">Total Pending Users</div>
							</div>
						</div>											
					</div>
				</div>													
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body bk-danger text-light">
							<div class="stat-panel text-center">												
								<div class="stat-panel-number h1 "><?php echo $user->totalUsers('deleted'); ?></div>
								<div class="stat-panel-title text-uppercase">Total Deleted Users</div>
							</div>
						</div>											
					</div>
				</div>							
			</div>
		</div>
	</div>		
</div>









<!-- here we add the pages that will be seen when a menu will be selected  -->
    <div class="footer">
        
           </div>
</body>
</html>