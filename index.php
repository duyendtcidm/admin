<?php 
    include './functions/myFunctions.php';
    $userList = getUserList();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
<div class="row">
    <div class="col-md-12">
        <?php include_once './layout/header.php'?>
    </div>
	<div class="col-md-3">
         <?php include_once './layout/navbar.php'?>  
    </div>
    
   
</br></br></br>
    <div class="container-fluid">

			<div class="row">
				<div class="col-md-12">
					<?php
						$page = "userList";
						if(isset($_GET['page'])){
							$page = $_GET['page'];
						}
					switch($page){
						case 'userList':
							include_once "pages/userList.php";
							break;
                        case 'report':
                            include_once "pages/report.php";
                            break;
						default:
						include_once "pages/login.php"; 
					}
					?>
				</div>
			</div>

    </div>







    <script src="./lib/jquery-3.6.0.min.js"></script>
    <!-- <script src="./js/page/admin.js"></script> -->
    <!-- <script src="./js/base/common.js"></script>
    <script src="./js/base/Enum.js"></script>
    <script src="./js/page/admin.php"></script> -->

    <!-- phpfile -->
    <?php include './js/page/adminHandle.php'; ?>

    </div>
</body>

</html>